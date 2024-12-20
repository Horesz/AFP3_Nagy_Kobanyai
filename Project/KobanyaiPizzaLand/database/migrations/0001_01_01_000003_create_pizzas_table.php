<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {   
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->integer('ar');
            $table->text('feltet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
}
