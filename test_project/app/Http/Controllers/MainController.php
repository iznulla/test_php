<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view(view: 'index');
    }
    public function admin() {
        return view(view: 'admin');
    }
}
