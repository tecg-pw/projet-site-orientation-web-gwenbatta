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
        $searchTerm = request()->input('search') ?? '';
        $sortLanguages = request()->input('languages') ?? 'all';
        $sortDate = request()->input('date') ?? 'all';
        $ids = [];
        if ($searchTerm) {
            $references = TutoTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('languages', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($references as $reference) {
                $ids [] = $reference->tuto_id;
            };
            $tutos = Tuto::whereIn('id', $ids)->paginate(8);
        } //OK
        elseif ($sortLanguages === 'all' && $sortDate === 'all') {
            $tutos = Tuto::paginate(8);
        }
        elseif ($sortLanguages === 'all') {
            $references = TutoTranslation::query()
                ->where('locale', $locale)
                ->where('created_at', $sortDate)->get();
            foreach ($references as $reference) {
                $ids [] = $reference->tuto_id;
            };
            $tutos = Tuto::whereIn('id', $ids)->paginate(8);
        } elseif ($sortDate === 'all') {
            $references = TutoTranslation::query()
                ->where('locale', $locale)
                ->where('languages', $sortLanguages)
                ->get();
            foreach ($references as $reference) {
                $ids [] = $reference->tuto_id;
            };
            $tutos = Tuto::whereIn('id', $ids)->paginate(8);

        } elseif ($sortLanguages && $sortDate) {
            $references = TutoTranslation::query()
                ->where('locale', $locale)
                ->where('languages', $sortLanguages)
                ->where('created_at', $sortDate)
                ->get();

            foreach ($references as $reference) {
                $ids [] = $reference->tuto_id;
            };
            $tutos = Tuto::whereIn('id', $ids)->paginate(8);
        } else {
            $tutos = Tuto::paginate(8);
        }
        $languages = TutoTranslation::select('languages')->where('locale', $locale)->groupBy('languages')->get();
        $date = TutoTranslation::select('created_at')->where('locale', $locale)->whereNot('created_at', null)->groupBy('created_at')->orderBy('created_at', 'DESC')->get();

        return view('technical.tuto', compact('tutos', 'languages', 'date'));
    }

    public function favorite(string $locale = null, TutoUserRequest $request, $id)
    {
        $data_comment = $request->safe()->only('favorite');
        $data_comment['tuto_id'] = $id;
        $data_comment['user_id'] = auth()->user()->id;
        if (DB::table('tuto_user')->where('tuto_id', $id)->where('user_id', auth()->user()->id)->count() > 0) {
            DB::table('tuto_user')->where('tuto_id', $id)->where('user_id', auth()->user()->id)->delete();
        } else {
            DB::table('tuto_user')->insert([
                "tuto_id" => $data_comment['tuto_id'],
                "user_id" => $data_comment['user_id']
            ]);
        }
        $tuto = TutoTranslation::where('tuto_id', $id)->where('locale', $locale)->first();

        return redirect('/' . $locale . '/technical/tuto#' . $tuto->slug);

    }
}
