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
        Schema::create('bulk_sales', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_num')->default(null);
            $table->integer('quantity_sold')->default(0);
            $table->integer('price_per_kg')->default(9);
            $table->integer('total_price')->default(0);
            $table->string('invoice')->nullable();
            $table->date('date')->default(date('Y-m-d'));
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
        Schema::dropIfExists('bulk_sales');
    }
};
