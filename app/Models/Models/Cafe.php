<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
protected $table = 'cafes';

protected $fillable =
[
    'title',
    'content'
];

}
