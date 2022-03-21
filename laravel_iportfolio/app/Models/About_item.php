<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'strong',
        'span',
    ];

    protected $table = 'about_items';
}
