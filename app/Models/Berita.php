<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['kategori','author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['cari'] ?? false, function($query, $cari) {
            return $query->where('title', 'like', '%' . $cari  . '%' )
                   ->orWhere('body', 'like', '%' . $cari  . '%' );
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('slug', $author)
            )
        );
    }

    public function author()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}

