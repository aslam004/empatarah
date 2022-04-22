<?php

namespace App\Models;

class head 
{
    private static $head_t=
    [
        [
            "title"=>"INI JUDUL model",
            "article"=>"model nich",
        ]
    ];

    public static function all()
    {
        return collect(self::$head_t);
    }
}
