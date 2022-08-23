<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dishes_offers', function (Blueprint $table) {
            $table->foreignId('dish_id')->constrained('dishes')
                ->cascadeOnDelete();
            $table->foreignId('offer_id')->constrained('offers')
                ->cascadeOnDelete();
            $table->primary(['dish_id', 'offer_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes_offers');
    }
};
