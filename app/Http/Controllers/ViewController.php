<?php

// app/Http/Controllers/ViewController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact; 

class ViewController extends Controller
{

   
    

    public function index(Request $request)
    {
        $contacts = Contact::all();

        return view('combined', ['contacts' => $contacts]);
       
    }

   
    public function mypage(Request $request)
    {
        $contacts = [];
    
        if (auth()->check()) {
            $contacts = Contact::select(
                'contacts.id',
                'contacts.name',
                'contacts.age',
                'contacts.time_start',
                'contacts.time_end',
                'contacts.location',
                'contacts.body',
                'contacts.created_at'
            )
                ->where('contacts.user_id', auth()->user()->id)
                ->get();
        }
    
        $userId = auth()->user() ? auth()->user()->id : null;
    
        // ユーザーがいいねした投稿を取得
        $user = Auth::user();
        $likedPosts = $user->likes()->with('post')->get();
    
        // ビューにデータを渡す
        return view('mypage', [
            'contacts' => $contacts,
            'id' => $userId,
            'likedPosts' => $likedPosts, // いいねした投稿をビューに渡す
        ]);
    }
    


}
    

    
    
    
    





