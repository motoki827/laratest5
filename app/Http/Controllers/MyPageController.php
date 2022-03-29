<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;
use App\Models\FavoriteMenu;
//↑使うモデルを記述

class MyPageController extends Controller
{
    //
    public function myPage()
    {
        $user = \Auth::user();
        //dd($user);
        //↓モデル名
        $practices = PracticeMenu::where('contri_id', $user['id'])->where('status', '1')->get();
        //dd($practices);
        $favorite_menus = FavoriteMenu::join('practice_menus','favorite_menus.menu_id','=','practice_menus.menu_id')->where('user_id', $user['id'])->get();
        // dd($favorite_menus);
        return view('myPage', compact('user', 'practices', 'favorite_menus'));
    }
}
