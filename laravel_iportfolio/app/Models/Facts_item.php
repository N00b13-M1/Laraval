<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facts_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'number',
        'strong',
        'p'
    ];

    protected $table = 'facts_items';
}
