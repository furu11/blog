<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('views.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        // ログイン試行
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // 認証成功
            return redirect('index')->with('login_success', 'ログイン成功しました！');
        }

        // 認証失敗
        return back()->withErrors(['login_error' => 'メールアドレスまたはパスワードが正しくありません。']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
