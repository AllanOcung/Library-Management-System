<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Book;

use App\Models\Borrow;

use App\Models\Category;

use App\Models\Notification;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\View;

use Dompdf\Dompdf;

use Dompdf\Options;


class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'admin')
            {
                $user = User::all()->count();

                $book = Book::all()->count();

                $borrow = Borrow::where('status', 'approved')->count();

                $return = Borrow::where('status', 'returned')->count();

                $unreadNotifications = Notification::where('status', 'unread')->get();

                return view('admin.index', compact('user', 'book', 'borrow', 'return', 'unreadNotifications'));
            }

            else if($usertype == 'user')
            {
                $data = Book::all();

                return view('home.index', compact('data'));
            }
        }

        else
        {
            return redirect()->back();
        }
    }

    public function show_members()
    {
        $data = User::all();

        $unreadNotifications = Notification::where('status', 'unread')->get();

        return view('admin.show_members', compact('data', 'unreadNotifications'));
    }

    public function category_page()
    {
        $data = Category::all();

        $unreadNotifications = Notification::where('status', 'unread')->get();

        return view('admin.category', compact('data', 'unreadNotifications'));
    }

    public function category()
    {

        $unreadNotifications = Notification::where('status', 'unread')->get();

        return view('admin.cat_add', compact('unreadNotifications'));
    }

    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories,title|max:255',
        ]);

        $data = new Category;
        $data->title = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Categorey added successfully');
        
    }

    public function cat_delete($id)
    {
        $data = Category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Category deleted successfully!');
    }

    public function add_book()
    {
        $data = Category::all();

        $unreadNotifications = Notification::where('status', 'unread')->get();
        
        return view('admin.add_book', compact('data', 'unreadNotifications'));
    }

    public function store_book(Request $request)
    {
        $data = new Book;

        $data->title = $request->book_name;

        $data->author = $request->author_name;

        $data->description = $request->description;

        $data->quantity = $request->quantity;

        $data->category_id = $request->category;

        $book_img = $request->book_img;

        if ($book_img) {

            $book_img_name = time().'.'.$book_img->getClientOriginalExtension();

            $request->book_img->move('book', $book_img_name);

            $data->book_img = $book_img_name;
        } 
        
        $author_img = $request->author_img;

        if ($author_img) {

            $author_img_name = time().'.'.$author_img->getClientOriginalExtension();

            $request->author_img->move('author', $author_img_name);

            $data->author_img = $author_img_name;
        } 
        


        $data->save();

        return  redirect()->back();

       
    }    

    public function show_book()
    {
        $book = Book::all();

        $unreadNotifications = Notification::where('status', 'unread')->get();
        
        return view('admin.show_book', compact('book', 'unreadNotifications'));
    }

    public function book_delete($id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect()->back()->with('message', 'Book successfully Deleted!');
    }

    public function show_book_requests()
    {
        $data = Borrow::where('status', 'pending')->get();

        $unreadNotifications = Notification::where('status', 'unread')->get();
        
        return view('admin.show_book_requests', compact('data', 'unreadNotifications'));
    }

    public function show_pending_requests()
    {
        $unreadNotifications = Borrow::where('status', 'pending')->get();

        $unreadNotifications = Notification::where('status', 'unread')->get();
        
        return view('admin.show_pending_requests', compact('unreadNotifications'));
    }

    public function show_approved_requests()
    {
        $data = Borrow::where('status', 'approved')->get();

        $unreadNotifications = Notification::where('status', 'unread')->get();
        
        return view('admin.show_approved_requests', compact('data', 'unreadNotifications'));
    }

    public function show_rejected_requests()
    {
        $data = Borrow::where('status', 'rejected')->get();

        $unreadNotifications = Notification::where('status', 'unread')->get();
        
        return view('admin.show_rejected_requests', compact('data', 'unreadNotifications'));
    }

    public function borrowed_books()
    {
        $data = Borrow::where('status', 'approved')->get();

        $unreadNotifications = Notification::where('status', 'unread')->get();
        
        return view('admin.borrowed_books', compact('data', 'unreadNotifications'));
    }

    public function approve_book($id)
    {
        $data = Borrow::find($id);

        $status = $data->status;
        

        if ($status == 'approved') {

            return redirect()->back();

        } else {
            $data->status = 'approved';

            $data->save();
    
            $bookid = $data->book_id;
    
            $book = Book::find($bookid);
    
            $book_qty = $book->quantity - '1';
    
            $book->quantity = $book_qty;
    
            $book->save();
    
            return redirect()->back();
        }
        }

        public function return_book($id)
    {
        $data = Borrow::find($id);

        $status = $data->status;

        if ($status == 'returned') {

            return redirect()->back();

        } else {

            $user = auth()->user();

            $data->status = 'returned';

            $data->save();
    
            $bookid = $data->book_id;

            $book = Book::find($bookid);
    
            $book_qty = $book->quantity + '1';
    
            $book->quantity = $book_qty;

             // Create notification for admin
             $message = $user->name . " has returned the book '" . $book->title . "'.";
             $notification = new Notification;
             $notification->message = $message;
             $notification->status = 'unread';
             $notification->time = now();
             $notification->save();
    
            $book->save();
    
            return redirect()->back()->with('message', 'Book returned successfully!');
        }
        }

        public function reject_book_request($id)
        {
            $data = Borrow::find($id);

            // Check if the record exists and its status is 'pending'
            if ($data && $data->status === 'pending') {
                
                $data->status = 'rejected';

                $data->save();
            }
            return redirect()->back();
        }

        public function fetch_borrow_data()
        {
            // Fetch borrow data from the database
            $borrowData = Borrow::selectRaw("DATE_FORMAT(created_at, '%b') AS month")
                ->selectRaw("COUNT(*) AS borrow_count")
                ->where('status', 'approved')
                ->groupBy('month')
                ->get();

            // Return the borrow data as JSON response
            return response()->json($borrowData);
        }

        public function get_book_counts()
        {
            $totalBooks = Book::count(); // Total number of books
            $borrowedBooks = Borrow::where('status', 'approved')->count(); // Number of borrowed books
            $returnedBooks = Borrow::where('status', 'returned')->count(); // Number of returned books
            
            return response()->json([
                'totalBooks' => $totalBooks,
                'borrowedBooks' => $borrowedBooks,
                'returnedBooks' => $returnedBooks,
            ]);
        }

        public function generateBookInventoryReport()
        {
            // Retrieve data from the database
            $books = Book::with('category')->get();

            // Render Blade view to HTML
            $html = View::make('admin.book_inventory', ['books' => $books])->render();

            // Create PDF
            $pdf = new Dompdf();

            // Load HTML into Dompdf for rendering
            $pdf->loadHtml($html);

            // Set options for PDF
            $options = new Options();
            $options->set('isPhpEnabled', true);
            $pdf->setOptions($options);

            // Render PDF
            $pdf->render();

            // Download PDF
            return $pdf->stream('book_inventory_report.pdf');
        }

        public function showBookImages()
        {
           // $book = Book::all();

            $books = Book::select('book_img')->get();

            return view('admin.body', compact('books'));
        }
}