<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = ['doctorName',
            'doctorEmail',
            'chamAdd',
            'hospAdd',
            'contact',
            'specialized',
            'qualification',
            'gender',
            'age',
            'bloodGroup'
        ];
}
