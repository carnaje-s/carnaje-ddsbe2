<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tbl_user'; 
    protected $fillable = [
        'username', 'password', 'gender'
    ];
    
    public $timestamps = false;
    protected $primaryKey = 'userid';

    protected $hidden = [
        'password',
    ];
}