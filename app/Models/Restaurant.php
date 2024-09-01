<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    // Relazione con Type
    public function types(){
        return $this->belongsToMany(Type::class);
    }

    // Relazione con Dish
    public function dishes() {
        return $this->hasMany(Dish::class);
    }
}