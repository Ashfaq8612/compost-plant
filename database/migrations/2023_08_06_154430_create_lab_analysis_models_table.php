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
        Schema::create('lab_analysis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('windrows_code');
            $table->foreign('windrows_code')->references('id')->on('windrows_installations');
            $table->date('analysis_date')->nullable();
            $table->date('analysis_complete_date')->nullable();
            $table->string('compositions')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->float('avg_temp')->nullable();
            $table->float('moisture')->nullable();
            $table->float('organic_matter')->nullable();
            $table->float('ph_value')->nullable();
            $table->float('elect_conductivity')->nullable();
            $table->float('total_dissolve_salt')->nullable();
            $table->float('cec')->nullable();
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
        Schema::dropIfExists('lab_analysis');
    }
};
