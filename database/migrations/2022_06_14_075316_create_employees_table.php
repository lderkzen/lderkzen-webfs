<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('employee_nr')->primary();
            $table->string('password', 255);
            $table->foreignId('role_id')->constrained('roles')
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
