<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indeks extends Model
{
    protected $fillable = [
        'header_category','header_reklamacja','header_reklamacja_link','header_block_1','header_block_2','header_block_3','header_block_4','text_under_image_reklamacja','text_under_image_reklamacja_link','sidebar_image_reklamacja_1_link','sidebar_image_reklamacja_1_text','sidebar_image_reklamacja_2_link','sidebar_image_reklamacja_2_text', 'sidebar_image_reklamacja_1_percent', 'sidebar_image_reklamacja_2_percent'
    ];
}
