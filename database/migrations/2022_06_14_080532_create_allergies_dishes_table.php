<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('allergies_dishes', function (Blueprint $table) {
            $table->foreignId('allergy_id')->constrained('allergies')
                ->cascadeOnDelete();
            $table->foreignId('dish_id')->constrained('dishes')
                ->cascadeOnDelete();
            $table->primary(['allergy_id', 'dish_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergies_dishes');
    }
};
