<?php

// App\Http\Controllers = 名前空間
// フォルダが配置されているディレクトリを示している
namespace App\Http\Controllers;

// Illuminate\Httpパッケージ内に用意されている「Request」を使える状態にしている
use Illuminate\Http\Request;

use Illuminate\Http\Response;

class HelloController extends Controller
{
    // public function index($id)
    // {
    //     $data = ['msg' => 'mindabi', 'id' => $id];

    // 'hello.index' = helloフォルダのindex.php or index.blade.php
    // ※bladeが優先的に読み込まれる
    //     return view('hello.index', $data);
    // }

    // public function index(Request $request){
    //     $data = ['msg' => 'おはようにっぽん','id' => $request->id];
    //     return view('hello.index',$data);
    // }

    public function index(){
        // $data = [
        //     ['name'=>'hanako','mail'=>'hana@hanahana'],
        //     ['name'=>'takasi','mail'=>'taka@takatt'],
        // ];
        return view('hello.index',['message'=>'Hello!']);
    }

    // public function moeko(Request $request){
    //     $msg = $request->momo;
    //     $data = ['message'=>'hello,'.$msg.'san!!'];
    //     return view('hello.index',$data);
    // }
}
