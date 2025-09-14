<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
     use HasFactory;

    //  ini semua boleh diisi lewat form
     protected $fillable = [
        'title',
        'author_id',
        'category_id',
        'slug',
        'body'
    ];

    // atau bisa pake guarded jadi semuanya boleh kecuali id
    // protected $guarded = ['id'];

    // membuat eager loading nya di model biar enggak perlu ubah2 di rute kita
    // kalau eager loading nya kita matiin nanti error atau terdeteksi ada yg make lazy loading
    // Attempted to lazy load [author] on model [App\Models\Post] but lazy loading is disabled.
    protected $with = ['author', 'category'];

    // 1 post dimiliki oleh 1 author atau user (one to one)
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // tambahin buat relasi kategori. 1 post dimiliki oleh 1 kategori
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Membuat scope query untuk searching
    public function scopeFilter(Builder $query, array $filters) : void
    {
        // jika search ini true maka ambil isinya
        // jika kosong maka false
        // filter umum atau title aja
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        // filter search kalau di halaman kategori
         $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas(
                'category',
                fn(Builder $query) =>
                $query->where('slug', $category)
            );
        });

        // filter search kalau di halaman author
        $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas(
                'author',
                fn(Builder $query) =>
                $query->where('username', $author)
            );
        });
    }

}

// pindah