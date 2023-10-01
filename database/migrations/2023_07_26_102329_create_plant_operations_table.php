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
        Schema::create('plant_operations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->float('operation_time_hr')->nullable();
            $table->float('waste_processing')->nullable();
            $table->float('total_msw_recieved')->nullable();
            $table->float('yesterday_left_over')->nullable();
            $table->float('consume')->nullable();
            $table->float('rejection')->nullable();
            $table->float('balance')->nullable();
            $table->float('bio')->nullable();
            $table->float('rejection_mt')->nullable();
            $table->float('scm_mt')->nullable();
            $table->float('previous_scm')->nullable();
            $table->float('scm_received')->nullable();
            $table->float('scm_total')->nullable();
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
        Schema::dropIfExists('plant_operations');
    }
};
