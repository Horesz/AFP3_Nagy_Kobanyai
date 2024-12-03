<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('custom_pizzas', function (Blueprint $table) {
        $table->id();
        $table->string('nev');
        $table->integer('ar');
        $table->string('feltet');
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('custom_pizzas');
    }
};