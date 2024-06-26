<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Galeri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->formatted_date = self::getFormattedDate($model->event_date);
        });

        static::updating(function ($model) {
            $model->formatted_date = self::getFormattedDate($model->event_date);
        });
    }

    public static function getFormattedDate($date)
    {
        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $dateObj = new \DateTime($date);
        $dayName = $days[$dateObj->format('w')];
        return $dayName . ', ' . Carbon::parse($date)->locale('id')->isoFormat('D MMMM YYYY');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
