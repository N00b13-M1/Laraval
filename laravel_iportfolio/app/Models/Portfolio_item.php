<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'filter',
        'source',
        'href1',
        'title1',
        'href2',
        'title2'
    ];

    protected $table = 'portfolio_items';
}
