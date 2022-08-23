<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->char('dish_nr', 4)->nullable();
            $table->foreignId('dish_type_id')->constrained('dish_types')
                ->cascadeOnDelete();
            $table->string('name', 245);
            $table->unsignedDecimal('price', 5, 2);
            $table->unsignedSmallInteger('spice_level')->default(0);
            $table->string('description', 500)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes');
    }
};
