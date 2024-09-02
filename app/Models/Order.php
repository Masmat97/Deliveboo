<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'user_id',
        'total_amount',
        'status',
    ];

    // Relazione con il modello Restaurant
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    // Relazione con il modello User (il cliente che ha effettuato l'ordine)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione con il modello Dish (i piatti ordinati)
    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'order_dish')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}