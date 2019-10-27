<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
 	protected $fillable = [
        'birthdate', 'contact', 'tin', 'address', 'gender',
    ];
}
