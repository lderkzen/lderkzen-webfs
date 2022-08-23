<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dishes_sales', function (Blueprint $table) {
            $table->foreignId('dish_id')->constrained('dishes')
                ->cascadeOnDelete();
            $table->foreignId('sale_id')->constrained('sales')
                ->cascadeOnDelete();
            $table->primary(['dish_id', 'sale_id']);
            $table->unsignedTinyInteger('amount')->default(1);
            $table->text('comment')->nullable(true);
            $table->unsignedDecimal('price', 6, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes_sales');
    }
};
