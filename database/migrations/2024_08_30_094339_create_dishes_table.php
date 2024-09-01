<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Colonna per il nome del piatto
            $table->text('description')->nullable(); // Colonna per la descrizione del piatto
            $table->decimal('price', 8, 2); // Colonna per il prezzo del piatto
            $table->unsignedBigInteger('restaurant_id'); // Colonna per la relazione con il ristorante
            $table->timestamps();

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
}