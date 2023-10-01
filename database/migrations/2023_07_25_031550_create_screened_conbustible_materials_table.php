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
        Schema::create('screened_conbustible_materials', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->integer('total_scm_received')->nullable();
            $table->integer('bail_created')->nullable();
            $table->float('operation_hrs')->nullable();
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
        Schema::dropIfExists('screened_conbustible_materials');
    }
};
