<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;
use App\Models\FavoriteMenu;

class MenuCardController extends Controller
{
    //
    public function menu_card($id){
        $user = \Auth::user();
        
        $practice = PracticeMenu::where('menu_id',$id)
        ->first();
        //dd($practice);

        return view('menu_card',compact('user','practice'));
    }

    public function favorite_menu_card($id){
        $user = \Auth::user();
        
        $practice = PracticeMenu::where('menu_id',$id)
        ->first();
        //dd($practice);

        return view('favorite_menu_card',compact('user','practice'));
    }

    public function store_card(Request $request ,$id)
    {
        $user = \Auth::user();
        $favorite_menu = \DB::table('favorite_menus')->get()->toArray(); 
        $practice = PracticeMenu::where('menu_id',$id);
        //dd($practice);
        //POSTされたデータをDB（practice_menusテーブル）に挿入
        //FavoriteMenuモデルにDBへ保存する命令を出す
            if(!in_array($id,$favorite_menu)){
                FavoriteMenu::insertGetId([
                'user_id'=>$user['id'],
                'menu_id'=>$id,
                'menu_name'=>$practice['pra_name']
                ]); 
            };
        //     if(!in_array('',))$favorite_menu = FavoriteMenu::insertGetId([
        //     'user_id'=>$user['id'],
        //     'menu_id'=>$id
        // ]);

        //リダイレクト処理
        return redirect()->route('myPage');
    }
 }
