<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete() {
        return static::where('done', 0)->get();
    }

    public static function complete() {
        return static::where('done', 1)->get();
    }
}
