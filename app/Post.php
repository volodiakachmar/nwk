<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Post extends Model
{

    use Commentable;

    protected $fillable = [
        'title','description_1','description_2','description_3','description_4','category','under_photo_text'
    ];


    /**
     * @var mixed
     */

}



