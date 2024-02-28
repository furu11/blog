<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;

class UserController extends Controller
{

    public function adminpass()
    {
       
        return view('admin_pass');
    }

    public function admin(Request $request)
    {
        // フォームから送信されたパスワードを取得
        $password = $request->input('password');
    
        // 管理者パスワードが '9999' であるかを確認
        if ($password === '9999') {
            // パスワードが正しい場合は管理者としてログインし、コンタクト情報を取得してビューに渡す
            $contacts = Contact::all();
            return view('admin', ['contacts' => $contacts]);
        } else {
            // パスワードが誤っている場合はエラーメッセージを表示して管理者パスワード入力画面にリダイレクト
            return redirect()->route('adminpass')->with('error', '管理者パスワードが正しくありません');
        }
    }
    
    
 


public function showRegister()
   {
       return view('register');
   }

   public function register(Request $request)
   {
       $user = User::query()->create([
           'name'=>$request['name'],
           'email'=>$request['email'],
           'password'=>Hash::make($request['password'])
       ]);

       Auth::login($user);

       return redirect()->route('profile');
   }

   public function profile()
   {
       return view('profile');
   }


   public function logout()
   {
       Auth::logout();

       return view('logout');
   }

   public function showLogin()
   {
       return view('login');
   }


   public function login(Request $request)
   {
       $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required'],
       ]);

       if (Auth::attempt($credentials)) {
           $request->session()->regenerate();

           return redirect()->intended('profile');
       }

       return back();
   }
   
   

}