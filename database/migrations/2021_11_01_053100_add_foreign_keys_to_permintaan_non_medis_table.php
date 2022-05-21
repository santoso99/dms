<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermintaanNonMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaan_non_medis', function (Blueprint $table) {
            $table->foreign(['nip'], 'permintaan_non_medis_ibfk_1')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaan_non_medis', function (Blueprint $table) {
            $table->dropForeign('permintaan_non_medis_ibfk_1');
        });
    }
}
