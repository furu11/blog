<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
   
    protected $fillable = [
        'id', 'user_id', 'post_id'
      ];

    // リレーションシップを定義
    public function user() {

        return $this->belongsTo(User::class);
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
