<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Book;

use App\Models\Category;

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
                return view('admin.index');
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

    public function category_page()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->title = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully!');
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
        return view('admin.add_book', compact('data'));
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
        
        return view('admin.show_book', compact('book'));
    }

    public function book_delete($id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect()->back()->with('message', 'Book successfully Deleted!');
    }

}
