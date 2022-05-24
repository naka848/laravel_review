<?php

// App\Http\Controllers = 名前空間
// フォルダが配置されているディレクトリを示している
namespace App\Http\Controllers;

// Illuminate\Httpパッケージ内に用意されている「Request」を使える状態にしている
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Person;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function index(Request $request){
        return view('hello.index',['msg'=>'フォームを入力']);
    }

    public function post(Request $request){
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request,$validate_rule);
        return view('hello.index',['msg'=>'正しく入力されていました！']);
    }
}
