<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav_link extends Model
{
    use HasFactory;

    protected $fillable = [
        'href',
        'logo',
        'span'
    ];

    protected $table = 'nav_links';
}
