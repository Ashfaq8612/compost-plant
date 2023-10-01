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
        Schema::create('waste_intakes', function (Blueprint $table) {
            $table->id();
            $table->float('msw')->nullable();
            $table->float('cow_dung')->nullable();
            $table->float('egg_shell')->nullable();
            $table->float('green_waste')->nullable();
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
        Schema::dropIfExists('waste_intakes');
    }
};
