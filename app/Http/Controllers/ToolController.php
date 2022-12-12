<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Tool;

class ToolController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale=null)
    {
        $tools = Tool::all();
        $books = Book::all();
        return view('technical.tool', compact('tools', 'books'));
    }
}
