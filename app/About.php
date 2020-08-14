<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class About extends Model
{
    protected $fillable =[
        'content_ge', 'content_en','content_ru','image'
    ];

    public function getContentAttribute()
    {
        $locale = App::getLocale();
        $column = "content_" . $locale;
        return $this->$column;
    }
}
