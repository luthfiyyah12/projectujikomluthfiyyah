<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Jika nama tabel berbeda dari nama model (yaitu "authors")
    // protected $table = 'nama_tabel';

    // Tentukan kolom yang boleh diisi mass-assignment (white-list)
    protected $fillable = [
        'name',
        'bio',
        'profile_picture',
        // kolom lainnya yang relevan
    ];

    // Relasi dengan followers
    public function followers()
    {
        return $this->belongsToMany(Author::class, 'author_followers', 'author_id', 'follower_id');
    }

    // Relasi dengan following
    public function following()
    {
        return $this->belongsToMany(Author::class, 'author_followers', 'follower_id', 'author_id');
    }
}
