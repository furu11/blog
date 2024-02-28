<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Like;

class LikeController extends Controller
{

  
 
    public function store(Request $request)
    {
        if (Auth::check()) {
            // ユーザーがログインしている場合のみ処理を実行
            $user_id = Auth::user()->id;
            $post_id = $request->like_id; 
            
            $like = new Like();
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            $like->save();
    
            return response()->json(['message' => 'いいねが保存されました']);
        } else {
            // ユーザーがログインしていない場合のエラーレスポンス
            return response()->json(['error' => 'ログインが必要です'], 401);
        }
    }
    
    public function destroy(Post $post, Request $request)
    {
        if (Auth::check()) {
            // ユーザーがログインしている場合のみ処理を実行
            $user = Auth::user()->id;
            
            // いいねを取り消す
            Like::where('post_id', $post->id)->where('user_id', $user)->delete();
    
            return response()->json(['message' => 'いいねが取り消されました']);
        } else {
            // ユーザーがログインしていない場合のエラーレスポンス
            return response()->json(['error' => 'ログインが必要です'], 401);
        }
    }
    

    
    

    

}
