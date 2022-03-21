<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title',
        'sub_title',
        'sub_title2'
    ];

    protected $table = 'titles';
}
