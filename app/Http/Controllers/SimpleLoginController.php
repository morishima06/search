<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //※ ModelsディレクトリにUser.phpがある場合
use Illuminate\Support\Facades\Auth;

class SimpleLoginController extends Controller
{
    private const GUEST_USER_ID = 3;

    // ゲストログイン処理
     public function guestLogin()
    {
        // id=1 のゲストユーザー情報がDBに存在すれば、ゲストログインする
        if (Auth::loginUsingId(self::GUEST_USER_ID)) {
            return redirect('/dashboard');
        }

        return redirect('/');
    }
}
