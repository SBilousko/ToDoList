<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];


    /**
     * Get the user who owns this task.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all incomplete tasks.
     */
    public static function incomplete() {
        return static::where('done', 0)->get();
    }

    /**
     * Get all complete tasks.
     */
    public static function complete() {
        return static::where('done', 1)->get();
    }
}
