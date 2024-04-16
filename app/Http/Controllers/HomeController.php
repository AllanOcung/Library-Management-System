<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Book;

use App\models\Borrow;

use App\models\Notification;

use App\models\Category;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $data = Book::all();

        return view('home.index', compact('data'));
    }

    public function book_details($id)
    {
        $data = Book::find($id);

        return view('home.book_details', compact('data'));
    }


    public function borrow_books($id)
{
    $book = Book::find($id);
    $quantity = $book->quantity;

    // Check if the user is authenticated
    if(auth()->check()) {
        $user = auth()->user();

        // Check if the user has already requested the book and its status is either pending or approved
        $existingRequest = Borrow::where('book_id', $book->id)
                                 ->where('user_id', $user->id)
                                 ->whereIn('status', ['pending', 'approved'])
                                 ->exists();

        if($quantity >= 1 && !$existingRequest) {
            $borrow = new Borrow;
            $borrow->book_id = $book->id;
            $borrow->user_id = $user->id;
            $borrow->save();

            // Create notification for admin
            $message = "New book request:\n\n " . $user->name . " has requested to borrow the book '" . $book->title . "'.";
            $notification = new Notification;
            $notification->message = $message;
            $notification->status = 'unread';
            $notification->time = now();
            $notification->save();

            return redirect()->back()->with('message', 'Request submitted, waiting Admin approval');
        } elseif ($existingRequest) {
            return redirect()->back()->with('message', 'You have already requested this book.');
        } else {
            return redirect()->back()->with('message', 'Not enough books available');
        }
    } else {
        return redirect('/login');
    }
}

    

    public function book_history()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;

            $data = Borrow::where('user_id', '=', $userid)
                            ->where('status', 'pending')
                            ->get();

            return view('home.book_history', compact('data'));
        }

     
    }
    
    public function my_books()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;

            $data = Borrow::where('user_id', '=', $userid)->get();

            $data = $data->where('status', 'approved');

            return view('home.my_books', compact('data'));
        }        
     
    }

    public function cancel_request($id)
    {
        $data = Borrow::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'request cancelled successfully');
    }

    public function explore()
    {
        $category = Category::all();

        $data = Book::all();

        return view('home.explore', compact('data', 'category'));
    }

    public function search(Request $request)
    {
        $category = Category::all();

        $search = $request->search;

        $data = Book::where('title','LIKE', '%'. $search . '%')->orWhere('author','LIKE', '%'. $search . '%')->get();

        return view('home.explore', compact('data', 'category'));
    }

    public function category_search($id)
    {
        $category = Category::all();
        
        $data = Book::where('category_id', $id)->get();

        return view('home.explore', compact('data', 'category'));

    }
  
}
