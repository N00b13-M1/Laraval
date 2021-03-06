<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'delay',
        'logo',
        'title',
        'description'
    ];

    protected $table = 'services_items';
}
