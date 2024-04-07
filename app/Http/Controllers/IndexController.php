<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\models\Book;

class IndexController extends Controller
{
    public function index()
    {
        $data = Book::all();

        return view('home.index', compact('data'));
    }
}
