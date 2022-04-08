<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeMenu;
use App\Models\Good;

class GoodController extends Controller
{
    //
    public function good($id)
    {
        $user = \Auth::user();
        //ログインしているユーザーidと表示されているメニューidが両方当てはまるレコードを取得
        $good = Good::where('user_id', $user['id'])->where('menu_id', $id)->get()->toArray();
        //dd($good);
        //GoodモデルにDBへ保存する命令を出す    
        if (empty($good)) {
            Good::insert([
                'user_id' => $user['id'],
                'menu_id' => $id,
            ]);
        }else{
            Good::where('user_id', $user['id'])->where('menu_id', $id)->delete();
        };

        

    }
}
