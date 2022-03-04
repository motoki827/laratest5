<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;

class SearchController extends Controller
{
    //
    public function search()
    {
        return view('search');
    }

    public function search_result(Request $request)
         {
             $inputs = $request->all();
             //dd($inputs);
             $posts = PracticeMenu::where('pra_name','like','%'.$inputs['menu_name'].'%')->get()->toArray();
             //dd($posts);
             return view('search_result',compact('posts'));
         }



//     public function search_result(Request $req)
//     {
 
//                 //値を取得
//                 $menu_name = $req->input('menu_name');
//                 $genre = $req->input('genre');
                
//                 // 検索QUERY
//                 $query = PracticeMenu::query();
                
//                 //結合
//                 // $query->join('depts', function ($query) use ($req) {
//                 // $query->on('employees.dept_id', '=', 'depts.id');
//                 // });
                
//                 // もし「部署名」があれば
//                 if(!empty($menu_name)){
//                 $query->where('pra_name','like','%'.$menu_name.'%');
//                 }
                
//                 // もし「都道府県」があれば
//                 if(!empty($genre)){
//                 $query->where('genre','like','%'.$genre.'%');
//                 }
                
//                 // ページネーション
//                 $menus = $query->paginate(5);
                
//                 // ビューへ渡す値を配列に格納
//                 $hashs = array(
//                 'menu_name' => $menu_name, //pass parameter to pager
//                 'genre' => $genre, //pass parameter to pager
//                 'practice_menus' => $menus, //Eloquent
//                 );

//                 return view('search_result',compact('hashs'));
            

//     } 
}
