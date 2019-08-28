<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
           protected $fillable = ['foodName',
            'calorie',
            'fat',
            'protein',
            'carbohydrate'
        ];
}
