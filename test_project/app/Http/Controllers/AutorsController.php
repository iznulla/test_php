<?php

namespace App\Http\Controllers;

use App\Models\Authors_books;
use Illuminate\Http\Request;
use App\Models\Books;

class AutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Authors_books::get();
        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Authors_books::create($request->only(['name', 'authors_id']));
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Authors_books  $authors_books
     * @return \Illuminate\Http\Response
     */
    public function show(Authors_books $authors_books)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Authors_books  $authors_books
     * @return \Illuminate\Http\Response
     */
    public function edit(Authors_books $authors_books)
    {
        return view('form', compact('authors_books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authors_books  $authors_books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authors_books $authors_books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authors_books  $authors_books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authors_books $authors_books)
    {
        //
    }
}
