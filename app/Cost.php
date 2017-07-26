<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public static function necessary()
    {
        return static::where('necessary', 1)->get();
    }

    public static function unNecessary()
    {
        return static::where('necessary', 0)->get();
    }
}