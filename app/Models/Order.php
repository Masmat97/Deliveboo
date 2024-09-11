<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'client_name',
        'client_address',
        'total',
        'email',
        'phone_number',
    ];

    // Relazione con il modello Dish (i piatti ordinati)
    public function dishes()
    {
        return $this->belongsToMany(Dish::class);
    }
}
