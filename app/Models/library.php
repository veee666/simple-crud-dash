<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'genre',
        'released',
        'summary'
    ];
}
