<?php

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // Relasi One to Many ke Article
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
