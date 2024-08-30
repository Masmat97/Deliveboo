<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    // Definisce la relazione con l'User
    public function user(){
        return $this->belongsTo(User::class);
    }

    // La relazione esistente con Type
    public function types(){
        return $this->belongsToMany(Type::class);
    }
}