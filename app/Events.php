<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'event_title','event_description','event_location','event_organizer','event_day','event_month'
    ];
}
