<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav_social extends Model
{
    use HasFactory;

    protected $fillable = [
        'href',
        'icon'
    ];

    protected $table = 'nav_socials';
}
