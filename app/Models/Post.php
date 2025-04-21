<?php

// app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Pastikan kamu mendefinisikan field yang dapat diisi (fillable)
    protected $fillable = ['title', 'content'];
}


