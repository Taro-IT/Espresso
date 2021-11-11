<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_workshop');
            $table->unsignedBigInteger('id_patient');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->float('price');
            $table->string('file')->nullable();
            $table->timestamps();
            $table->foreign('id_workshop')->references('id')->on('workshop')->onDelete('cascade');
            $table->foreign('id_patient')->references('id')->on('patient')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
