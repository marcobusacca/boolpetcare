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
        Schema::create('animal_disease', function (Blueprint $table) {
            // ANIMAL_ID FOREIGN KEY
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals');

            // disease_ID FOREIGN KEY
            $table->unsignedBigInteger('disease_id');
            $table->foreign('disease_id')->references('id')->on('diseases');

            $table->date('data_di_ricovero')->nullable();
            $table->string('trattamento', 20)->nullable();
            $table->text('note_malattia')->nullable();
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
        Schema::dropIfExists('animal_disease');
    }
};
