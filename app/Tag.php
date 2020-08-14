<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        $this->belongsToMany('App\Post');
    }
    protected $fillable = [
        'name_ge', 'name_en', 'name_ru'
    ];
}
