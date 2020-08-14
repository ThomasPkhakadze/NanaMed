<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
class ContactInfo extends Model
{
    protected $fillable = [
        'schedule_ge', 'schedule_en', 'schedule_ru',
        'contact_info_ge', 'contact_info_en', 'contact_info_ru',
        'address_ge', 'address_en', 'address_ru'  
    ];

    public function getScheduleAttribute()
    {
        $locale = App::getLocale();
        $column = "schedule_" . $locale;
        return $this->{$column};
    }
    public function getContactInfoAttribute()
    {
        $locale = App::getLocale();
        $column = "contact_info_" . $locale;
        return $this->{$column};
    }
    public function getAddressAttribute()
    {
        $locale = App::getLocale();
        $column = "address_" . $locale;
        return $this->{$column};
    }
}
