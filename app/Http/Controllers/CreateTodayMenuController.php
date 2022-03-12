<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTodayMenuController extends Controller
{
    //
    public function create_today_menu(Request $request){

        $gets = $request->all();
        dd($gets);
       

        return view('create_today_menu',compact($gets));
    
    }
}
