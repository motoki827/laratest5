<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileCardEditController extends Controller
{
    //
    public function profile_card_edit(){

        $user = \Auth::user();
        return view('profile_card_edit', compact('user'));
    }

    public function update_profile(Request $request, $id)
    {
        //
        $inputs=$request->validate([
            'image' => 'image|max:8000'
        ]);

        $image = $request->file('image');
        //dd($inputs);
        if($request->hasFile('image')){
            $path = \Storage::put('/public',$image);
            $path = explode('/',$path);
        }else{
            $path = null;
        }

        DB::table('users')->where('id', $id)->update([
            'image_name' => $path[1]
        ]);

        return redirect()->route('myPage')->with('message','プロフィールが更新されました');
    }
}
