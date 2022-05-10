<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;

class CreateTodayMenuController extends Controller
{
    //
    public function create_today_menu(Request $request)
    {
        //チェックの入ったメニューのmenu_idを取得
        $gets = $request->input();

        if (count($gets) == 1) {
            return redirect()->route('myPage')->with('message', '表にしたいメニューを選択してください');
        } else {
            //なぜかmenu配列に入っているので変数を作り直している
            $menu_ids = $gets['menu'];
            //var_dump($menus);
            //dd($menus);

            //$creates = array();
            foreach ($menu_ids as $menu_id) {
                $creates[] = PracticeMenu::where('menu_id', $menu_id)->get();
            };
            //dd($creates);
            //$length = count($creates);
            //dd($length);

            //pdfを作成するので変数を保持させる
            $request->session()->push('creates', $creates);
            return view('create_today_menu', compact("creates"));
        }
    }
}
