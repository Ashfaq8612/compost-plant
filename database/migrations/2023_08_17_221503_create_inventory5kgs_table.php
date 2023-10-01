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
        Schema::create('inventory5kgs', function (Blueprint $table) {
            $table->id();
            $table->integer('opening_stock')->nullable();
            $table->integer('production')->nullable();
            $table->integer('dispatch')->nullable();
            $table->integer('opening_bags')->nullable();
            $table->integer('dispatch_bags')->nullable();
            $table->integer('balance')->nullable();
            $table->integer('balance_bags')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('inventory5kgs');
    }
};
