<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praca extends Model
{
    protected $fillable = [
        'miasto','stawka','stanowisko','nazwa_agencji_firmy','typ_umowy','mieszkanie','o_pracy','telefon'
    ];
}
