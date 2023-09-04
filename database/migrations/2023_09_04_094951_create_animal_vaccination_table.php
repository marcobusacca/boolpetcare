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
        Schema::create('animal_vaccination', function (Blueprint $table) {

            // ANIMAL_ID FOREIGN KEY
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals');

            // VACCINATION_ID FOREIGN KEY
            $table->unsignedBigInteger('vaccination_id');
            $table->foreign('vaccination_id')->references('id')->on('vaccinations');

            $table->date('data_di_vaccinazione')->nullable();
            $table->string('dosaggio', 20)->nullable();
            $table->text('note_vaccino')->nullable();
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
        Schema::dropIfExists('animal_vaccination');
    }
};
