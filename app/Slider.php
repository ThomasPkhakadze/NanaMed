<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;


class Slider extends Model
{
    protected $fillable = [
        'title_ge', 'title_en', 'title_ru', 
        'description_ge', 'description_en', 'description_ru',
        'button_ge', 'button_en', 'button_ru', 
        'image', 'url'
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

    public function getButtonAttribute()
    {
        $locale = App::getLocale();
        $column = 'button_' . $locale;
        return $this->$column;
    }
    
}

