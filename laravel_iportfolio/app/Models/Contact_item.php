<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'description'
    ];

    protected $table = 'contact_items';
}
