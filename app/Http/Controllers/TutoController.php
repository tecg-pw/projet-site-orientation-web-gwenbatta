<?php

namespace App\Http\Controllers;

use App\Models\Glossary;
use App\Models\Tuto;
use Illuminate\Http\Request;

class TutoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $locale=null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $tutos = Tuto::paginate(8);
        return view('technical.tuto', compact('tutos'));
    }
}
