<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'language',
        'percentage',
        'value'
    ];

    protected $table = 'skills_items';
}
