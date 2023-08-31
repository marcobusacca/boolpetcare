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
        Schema::table('animal_vaccination', function (Blueprint $table) {
            $table->dropColumn('note_aggiuntive');
            $table->text('note_vaccino')->nullable()->after('dosaggio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animal_vaccination', function (Blueprint $table) {
            $table->dropColumn('note_vaccino');
            $table->text('note_aggiuntive')->nullable();
        });
    }
};
