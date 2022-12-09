<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Course;
use App\Models\BookTranslation;

class BookController extends Controller
{

    public function show(string $locale = null, BookTranslation $book)
    {
        $locales = [];
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $book = Book::find($book->book_id);
        $course  = $book->course;

        foreach ($book->translation as $book_ref){
            $locales[] = $book_ref;
        }

        $book = $book->translation->where('locale',$locale)->first();

        foreach ($course as $classe){
            $teachers = Course::find($classe->translation->where('locale',$locale)->first()->course_id)->person()->get();
        }

        return view('technical.books.single', compact('book','locales','teachers','course'));
    }
}
