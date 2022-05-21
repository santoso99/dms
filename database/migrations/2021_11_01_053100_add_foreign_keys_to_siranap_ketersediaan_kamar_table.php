<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSiranapKetersediaanKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siranap_ketersediaan_kamar', function (Blueprint $table) {
            $table->foreign(['kd_bangsal'], 'siranap_ketersediaan_kamar_ibfk_1')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siranap_ketersediaan_kamar', function (Blueprint $table) {
            $table->dropForeign('siranap_ketersediaan_kamar_ibfk_1');
        });
    }
}
