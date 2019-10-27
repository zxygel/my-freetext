<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at', 'datetime',
    ];

    // protected $primarykey = 'employeenumber'; // if you want to change primary key
    // $incrementing = false; // to disable incrementing
    // protected $keytype = 'string'; // change the type of primary key

    // protected $table = 'tbl_master_user'; // if table is existing
    // protected $connection = 'sqlsrv'; // to change database
    // $timestamp = false; // of you want to disable auto timestamp generation
    // protected $softDelete = true; // enable, disable softdelete
}
