<?php

namespace App\Http\Controllers;

use App\Models\Tuto;

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
        $languages = Tuto::select('languages')->where('locale',$locale)->groupBy('languages')->get();
        $date = Tuto::select('created_at')->where('locale',$locale)->whereNot('created_at', null)->groupBy('created_at')->orderBy('created_at','DESC')->get();
        $tutos = Tuto::where('locale',$locale)->paginate(8);
        return view('technical.tuto', compact('tutos','languages','date'));
    }
}
