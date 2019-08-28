<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    //
        protected $fillable = ['ambulanceName',
            'contact',
            'weblink'
        ];
}
