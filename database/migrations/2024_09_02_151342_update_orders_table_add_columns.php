<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrdersTableAddColumns extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('restaurant_id')->after('id');
            $table->unsignedBigInteger('user_id')->after('restaurant_id');
            $table->decimal('total_amount', 8, 2)->after('user_id');
            $table->enum('status', ['pending', 'in preparation', 'completed'])->default('pending')->after('total_amount');

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['restaurant_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['restaurant_id', 'user_id', 'total_amount', 'status']);
        });
    }
}
