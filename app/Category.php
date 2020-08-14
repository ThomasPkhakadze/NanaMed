<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name_ge', 'name_en', 'name_ru'];

    public function posts()
    {
    	return $this->hasMany('App\Post');
    }
}
