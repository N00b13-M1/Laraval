<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // protected $table
    protected $table = 'articles';

    protected $fillable = [
        'name',
        'prenom',
        'content',
    ];
    protected $hidden = [
        "date_published"
    ];
}
