<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs = Doc::all();
        $books = Book::all();
        return view('technical.doc', compact('docs', 'books'));
    }
}
