<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Doc;
use App\Models\Tool;
use Illuminate\Http\Request;

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
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $tools = Tool::all();
        $books = Book::all();
        return view('technical.tool', compact('tools', 'books'));
    }
}
