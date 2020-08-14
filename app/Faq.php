<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Faq extends Model
{
    protected $fillable = [
        'question_ge', 'question_en', 'question_ru',
        'answer_ge', 'answer_en', 'answer_ru', 
    ];

    public function getQuestionAttribute()
    {
        $locale = App::getLocale();
        $column = 'question_' . $locale;
        return $this->$column;
    }

    public function getAnswerAttribute()
    {
        $locale = App::getLocale();
        $column = 'answer_' . $locale;
        return $this->$column;
    }
}
