<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    //
        protected $fillable = [
        'name', 'email', 'phone_number'
    ];
}
