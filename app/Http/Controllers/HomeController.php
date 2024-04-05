<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $data = Book::all();

        return view('home.index', compact('data'));
    }
  
}
