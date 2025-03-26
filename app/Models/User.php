<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tbl_site2'; 
    protected $fillable = [
        'username', 'password', 'gender'
    ];
    
    public $timestamps = false;
    protected $primaryKey = 'userid';

    protected $hidden = [
        'password',
    ];
}