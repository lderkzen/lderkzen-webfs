<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('description');
            $table->string('extra_info')->nullable();
            $table->unsignedDouble('price', 5, 2);
            $table->timestamp('valid_from')->useCurrent();
            $table->timestamp('valid_until')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
