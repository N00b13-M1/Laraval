<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = 'equipes';
    protected $fillable = [
        'nom',
        'ville',
        'commune',
        'number_of_players',
        'number_of_posts'
    ];
}
