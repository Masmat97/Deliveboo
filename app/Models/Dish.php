<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ingredient',
        'price',
        'availability',
        'image',
        'restaurant_id',
    ];

    // In your Dish model
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
