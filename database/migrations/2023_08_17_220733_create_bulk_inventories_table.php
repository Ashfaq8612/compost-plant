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
        Schema::create('bulk_inventories', function (Blueprint $table) {
            $table->id();
            $table->float('opening_stock')->nullable();
            $table->float('production')->nullable();
            $table->float('dispatch')->nullable();
            $table->float('recycle')->nullable();
            $table->float('balance')->nullable();
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
        Schema::dropIfExists('bulk_inventories');
    }
};
