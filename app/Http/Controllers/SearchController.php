<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;
use App\Models\Good;

class SearchController extends Controller
{
    //
    public function search()
    {
        return view('search');
    }

    public function search_result(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        if (!empty($inputs['menu_name'])) {
            $posts = PracticeMenu::where('pra_name', 'like', '%' . $inputs['menu_name'] . '%')->where('status', 1)->get()->toArray();
            //dd($posts);
            return view('search_result', compact('posts'));
        } elseif (!empty($inputs['genre'])) {
            // $goods = Good::where('pra_genre', $inputs['genre'])->where('status', 1)->get()->toArray();
            $posts = PracticeMenu::where('pra_genre', $inputs['genre'])->where('status', 1)->get()->toArray();
            //dd($posts);
            return view('search_result', compact('posts'));
        } else {
            return view('search');
        }
    }


}
