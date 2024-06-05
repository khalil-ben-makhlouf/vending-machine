<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->onDelete('cascade');
            $table->foreignId('user_id')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price_per_unit', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->dateTime('sale_date');
            $table->string('payment_method')->nullable();
            $table->string('status')->default('completed');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sales');
    }
    
};
