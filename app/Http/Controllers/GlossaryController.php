<?php

namespace App\Http\Controllers;

use App\Models\Glossary;
use Illuminate\Http\Request;

class GlossaryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $termes = Glossary::paginate(8);
        return view('technical.glossary', compact('termes'));
    }
}
