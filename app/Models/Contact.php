<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'message',
     
    ];


    use HasFactory;

    
    public function isLikedBy($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }
    
    public function isLike($postId)
    {
        return $this->likes()->where('post_id', $postId)->exists();
    }
    
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id')->withTimestamps();
    }

    public function like($postId)
    {
        $post = Post::find($postId);
        
        if (!$post) {
            return '投稿が見つかりません';
        }
    
        if ($this->isLike($postId)) {
            return '既にいいねされています';
        } else {
            $this->likes()->attach($postId);
            return 'いいねしました';
        }
    }
    
    public function unlike($postId)
    {
        $post = Post::find($postId);
        
        if (!$post) {
            return '投稿が見つかりません';
        }
    
        if ($this->isLike($postId)) {
            $this->likes()->detach($postId);
            return 'いいねを取り消しました';
        } else {
            return 'いいねはありません';
        }
    }
    

   
}
