<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class My_post extends Model
{
    use HasFactory;
    protected $fillable = [
        'data'
    ];
}
