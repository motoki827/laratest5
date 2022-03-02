<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;

class SearchController extends Controller
{
    //
    public function search(Request $req)
    {
 
                //値を取得
                $menu_name = $req->input('menu_name');
                $genre = $req->input('genre');
                
                // 検索QUERY
                $query = PracticeMenu::query();
                
                //結合
                $query->join('depts', function ($query) use ($req) {
                $query->on('employees.dept_id', '=', 'depts.id');
                });
                
                // もし「部署名」があれば
                if(!empty($dept_name)){
                $query->where('dept_name','like','%'.$dept_name.'%');
                }
                
                // もし「都道府県」があれば
                if(!empty($pref)){
                $query->where('address','like','%'.$pref.'%');
                }
                
                // ページネーション
                $employees = $query->paginate(5);
                
                // ビューへ渡す値を配列に格納
                $hash = array(
                'dept_name' => $dept_name, //pass parameter to pager
                'pref' => $pref, //pass parameter to pager
                'employees' => $employees, //Eloquent
                );
                
                return view('search')->with($hash);
            

    } 
}
