<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
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
                return view('home.index');
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

        return redirect()->back();
    }
}
