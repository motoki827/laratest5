<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;
use App\Models\FavoriteMenu;

class MenuCardController extends Controller
{
    //
    public function menu_card($id)
    {
        $user = \Auth::user();

        $practice = PracticeMenu::where('menu_id', $id)
            ->first();
        //dd($practice);

        return view('menu_card', compact('user', 'practice'));
    }

    public function favorite_menu_card($id)
    {
        $user = \Auth::user();

        $practice = PracticeMenu::where('menu_id', $id)
            ->first();
        //dd($practice);

        return view('favorite_menu_card', compact('user', 'practice'));
    }

    public function store_card(Request $request, $id)
    {
        $user = \Auth::user();
        //↓ログインしているユーザーがお気に入りに登録しているメニュー
        $favorite_menu = FavoriteMenu::select('menu_id')->where('user_id', $user['id'])->get()->toArray();
        //↓表示されているメニューのメニューIＤ
        $practice = PracticeMenu::where('menu_id', $id)->get()->toArray();
        //↓配列を展開して１次元にしている
        $favorite = array_column($favorite_menu, 'menu_id');
        //$favoriteと$idは型が違う
        //dd($user['id']);

        //dd($id);
        //dd($favorite);
        //POSTされたデータをDB（practice_menusテーブル）に挿入
        //FavoriteMenuモデルにDBへ保存する命令を出す    
        if (!in_array($id, $favorite)) {
            FavoriteMenu::insert([
                'user_id' => $user['id'],
                'menu_id' => $id,
                'menu_name' => $practice[0]["pra_name"]
            ]);
        };
        //リダイレクト処理
        return redirect()->route('myPage');
    }

    public function delete(Request $request, $id)
    {
        //論理削除
        // FavoriteMenu::where('menu_id',$id)->update([
        //     'status'=>'0'
        // ]);

        FavoriteMenu::where('menu_id', $id)->delete();

        return redirect()->route('myPage');
    }
}
