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
        Schema::table('animals', function (Blueprint $table) {
            $table->dropColumn('specie');
            $table->dropColumn('nome_proprietario');
            $table->dropColumn('cognome_proprietario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->string('specie', 50);
            $table->string('nome_proprietario', 50);
            $table->string('cognome_proprietario', 50);
        });
    }
};
