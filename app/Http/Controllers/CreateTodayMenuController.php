<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;

class CreateTodayMenuController extends Controller
{
    //
    public function create_today_menu(Request $request){

        $gets = $request->input();
        $menu_ids = $gets['menu'];
        //var_dump($menus);
        //dd($menus);

        // $creates = array();
       foreach($menu_ids as $menu_id){
            $creates[] =PracticeMenu::where('menu_id', $menu_id)->get(); 
        };
        //dd($creates);
        //$length = count($creates);
        //dd($length);

        return view('create_today_menu',compact("creates"));
    
    }
}
