<?php

namespace App\Models;

class Berita 
{
   private static $blog_berita = [
    [
        "title" => "Ibadah Jumat Agung 2024",
        "slug" => "ibadah-jumat-agung-2024",
        "date" => "29 Maret 2024",
        "body" => "Lorem ipsum dolor sit amet consectetur. Neque in bibendum vel amet volutpat massa iaculis. Duis habitant gravida feugiat nunc faucibus integer hendrerit pharetra. Aliquet morbi urna vestibulum turpis mauris eu porttitor. Adipiscing blandit imperdiet etiam non placerat habitant risus faucibus eget. Dictumst felis lorem ut volutpat mi arcu gravida. Non ultricies sit nec aliquet lorem duis facilisis in non. Vestibulum auctor orci massa vestibulum nisi. Blandit ut viverra elementum sit est. Amet mattis dignissim laoreet eros imperdiet mauris euismod enim. "
    ],
    [
        "title" => "Pemilihan Ketua Guru Sekolah Minggu",
        "slug" => "pemilihan-ketua-guru-sekolah-minggu",
        "date" => "21 Maret 2024",
        "body" => "Lorem ipsum dolor sit amet consectetur. Neque in bibendum vel amet volutpat massa iaculis. Duis habitant gravida feugiat nunc faucibus integer hendrerit pharetra. Aliquet morbi urna vestibulum turpis mauris eu porttitor. Adipiscing blandit imperdiet etiam non placerat habitant risus faucibus eget. Dictumst felis lorem ut volutpat mi arcu gravida. Non ultricies sit nec aliquet lorem duis facilisis in non. Vestibulum auctor orci massa vestibulum nisi. Blandit ut viverra elementum sit est. Amet mattis dignissim laoreet eros imperdiet mauris euismod enim. "
    ]
];

    public static function all()
    {
        return collect(self::$blog_berita);
    }

    public static function find($slug)
    {
        $berita = static::all();
        return $berita->firstWhere('slug', $slug);
    }
}
