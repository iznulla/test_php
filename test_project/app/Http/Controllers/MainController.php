<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Books;
use Illuminate\Http\Request;

class MainController extends Controller
{   
    public function index() {
        return view('index');
    }
    public function admin() {
        return view('admin');
    }
    public function lib() {
        $books = Books::get();
        dump($books);
        return view('lib', compact('books'));
    }
    public function books($books) {
        $book = Books::where('name', $books)->first();
        dump($book);
        return view('books', compact('book'));
    }
}
