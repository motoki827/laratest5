<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;

class PracticeMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = \Auth::user();
        return view('create_menu',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        // dd($data);
        //POSTされたデータをDB（practice_menusテーブル）に挿入
        //PRACTICEMENUモデルにDBへ保存する命令を出す
        $practice_menu_id = PracticeMenu::insertGetId([
            'contri_id'=>$data['contri_id'],
            'pra_name'=>$data['title'],
            'pra_content'=>$data['content'],
            'pra_genre'=>$data['genre'],
            'num_of_people'=>$data['people'],
            'time_requ'=>$data['time']
        ]);

        //リダイレクト処理
        return redirect()->route('myPage');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //該当するIDの練習をデータベースから取得
        $user = \Auth::user();
        $practice = PracticeMenu::where('menu_id',$id)->where('contri_id',$user['id'])
        ->first();
        //dd($practice);
        
        return view('edit',compact('user','practice'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $inputs = $request->all();
        //dd($inputs);
        PracticeMenu::where('menu_id',$id)->update([
            'pra_name'=>$inputs['title'],
            'pra_content'=>$inputs['content'],
            'pra_genre'=>$inputs['genre'],
            'num_of_people'=>$inputs['people'],
            'time_requ'=>$inputs['time']
        ]);
        
        return redirect()->route('myPage');
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        //
        PracticeMenu::where('menu_id',$id)->update([
            'status'=>'0'
        ]);
        return redirect()->route('myPage');
    }
}
