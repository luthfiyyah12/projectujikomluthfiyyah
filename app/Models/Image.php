<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Deklarasikan field yang boleh diisi melalui mass assignment
    protected $fillable = ['title', 'image_path'];
}
