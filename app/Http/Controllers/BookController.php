<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookTranslation;
use App\Models\Course;

class BookController extends Controller
{

    public function show(string $locale = null, BookTranslation $book)
    {
        $locales = [];
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $book = Book::find($book->book_id);
        foreach ($book->translation as $book_ref){
            $locales[] = $book_ref;
        }

        $book = $book->translation->where('locale',$locale)->first();
        foreach ($book->courses as $classe){
            $teachers = Course::find($classe->translation->where('locale',$locale)->first()->course_id)->person()->get();
        }
        return $book;
        return view('technical.books.single', compact('book','locales','teachers'));
    }
}
