<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    function products(){
        return $this->hasMany(Product::class);
    }
}
