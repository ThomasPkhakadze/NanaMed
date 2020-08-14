<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;


class Post extends Model
{
    protected $fillable = [
        'title_ge', 'title_en', 'title_ru', 
        'description_ge', 'description_en', 'description_ru', 
        'content_ge', 'content_en', 'content_ru', 
        'image', 'slug'
    ];

    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = 'title_' . $locale;
        return $this->$column;
    }

    public function getDescriptionAttribute()
    {
        $locale = App::getLocale();
        $column = 'description_' . $locale;
        return $this->$column;
    }

    public function getContentAttribute()
    {
        $locale = App::getLocale();
        $column = 'content_' . $locale;
        return $this->$column;
    }
}

