<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public static function shuffle($columns = ['*']) 
    {
        $arr = (array)static::query()->get(
            is_array($columns) ? $columns : func_get_args()
        );

        // dd($arr);
        $arr = array_map(function ($element) {
            return $element->getAttributes();
        }, 
        $arr["\x00*\x00items"]);

        shuffle($arr);

        return $arr;
    }

    protected $hidden = [
        "updated_at"
    ];
}


