<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sieving_unit_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('windrows_code');
            $table->foreign('windrows_code')->references('id')->on('windrows_installations');
            $table->integer('production')->nullable();
            $table->integer('rejection')->nullable();
            $table->float('operation_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sieving_unit_models');
    }
};
