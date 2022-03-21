<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial_item extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'delay',
        'quote',
        'picture',
        'h4',
        'h3'
    ];

    protected $table = 'testimonial_items';

}
