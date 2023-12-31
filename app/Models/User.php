<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'broto_account';
    protected $fillable = [
        'username',
        'fullname',
        'password',
        'last_login'
    ];
}
