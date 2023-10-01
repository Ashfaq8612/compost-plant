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
        Schema::create('windrows_installations', function (Blueprint $table) {
            $table->id();
            $table->string('windrow_code')->nullable();
            $table->float('weight')->nullable();
            $table->date('installation_date')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->string('compositions')->nullable();
            $table->integer('no_of_turnings')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('windrows_installations');
    }
};
