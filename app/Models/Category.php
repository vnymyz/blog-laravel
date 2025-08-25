<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model // 1 kategori punya banyak posts
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    // pindah
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}

