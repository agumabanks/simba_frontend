<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userz extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'username',
        'password',
        'email',
        'created_at',
    ];
}
