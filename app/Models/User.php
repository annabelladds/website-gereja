<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * @var array<int
     */
    protected $guarded = ['id'];

    /**
     * @var array<int
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return array<string
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}

