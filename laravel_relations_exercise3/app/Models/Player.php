<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    public function position()
    {
        return $this->belongsTo(Position::class);
        
    }

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

