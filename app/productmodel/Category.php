<?php

namespace App\productmodel;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name', 'category_status' ,'category_image'
    ];

}