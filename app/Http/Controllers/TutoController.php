<?php

namespace App\Http\Controllers;

use App\Http\Requests\TutoUserRequest;
use App\Models\Tuto;
use App\Models\TutoTranslation;
use DB;

class TutoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $locale = null)
    {
        $languages = TutoTranslation::select('languages')->where('locale', $locale)->groupBy('languages')->get();
        $date = TutoTranslation::select('created_at')->where('locale', $locale)->whereNot('created_at', null)->groupBy('created_at')->orderBy('created_at', 'DESC')->get();
        $tutos = Tuto::paginate(8);

        return view('technical.tuto', compact('tutos', 'languages', 'date'));
    }

    public function favorite(string $locale = null, TutoUserRequest $request, $id)
    {
        $data_comment = $request->safe()->only('favorite');
        $data_comment['tuto_id'] = $id;
        $data_comment['user_id'] = auth()->user()->id;
        if (DB::table('tuto_user')->where('tuto_id', $id)->where('user_id', auth()->user()->id)->count() > 0) {
            DB::table('tuto_user')->where('tuto_id', $id)->where('user_id', auth()->user()->id)->delete();
        }else {
            DB::table('tuto_user')->insert([
                "tuto_id" => $data_comment['tuto_id'],
                "user_id" => $data_comment['user_id']
            ]);
        }
        $tuto = TutoTranslation::where('tuto_id',$id)->where('locale',$locale)->first();

        return redirect('/' . $locale . '/technical/tuto#'.$tuto->slug);

    }
}
