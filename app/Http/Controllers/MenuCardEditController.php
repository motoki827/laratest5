<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;

class MenuCardEditController extends Controller
{
    //
    public function menu_card_edit($id){
        $user = \Auth::user();
        $practice = PracticeMenu::where('menu_id',$id)
        ->first();
       // dd($practice);

        return view('menu_card_edit',compact('user','practice'));
    }
}
