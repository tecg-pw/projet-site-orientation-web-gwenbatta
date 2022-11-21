<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Course;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function show(Book $book)
    {
        foreach ($book->courses as $classe){
            $teachers = Course::find($classe->id)->person()->get();
        }
        return view('technical.books.single', compact('book', 'teachers'));
    }
}
