<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;


class Service extends Model
{
    protected $fillable = [
        'title_ge', 'title_en', 'title_ru',
        'description_ge', 'description_en', 'description_ru',
          'image'
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
}
