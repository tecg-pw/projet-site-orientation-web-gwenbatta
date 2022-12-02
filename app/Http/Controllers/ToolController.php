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
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $tools = Tool::where('locale',$locale)->get();
        $books = Book::where('locale',$locale)->get();
        return view('technical.tool', compact('tools', 'books'));
    }
}
