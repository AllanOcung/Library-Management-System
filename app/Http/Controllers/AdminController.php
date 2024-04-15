<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Book;

use App\Models\Borrow;

use App\Models\Category;

use App\Models\Notification;

use Illuminate\Support\Facades\Auth;


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

    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories,title|max:255',
        ]);

        $data = new Category;
        $data->title = $request->category;

        $data->save();

        return view('admin.add_category');
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
            $data->status = 'returned';

            $data->save();
    
            $bookid = $data->book_id;

            $book = Book::find($bookid);
    
            $book_qty = $book->quantity + '1';
    
            $book->quantity = $book_qty;
    
            $book->save();
    
            return redirect()->back();
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

}