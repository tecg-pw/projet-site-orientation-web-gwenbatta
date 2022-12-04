<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Doc;


class DocController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale = null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $docs = Doc::all();
        $books = Book::all();
        return view('technical.doc', compact('docs', 'books'));
    }
}
