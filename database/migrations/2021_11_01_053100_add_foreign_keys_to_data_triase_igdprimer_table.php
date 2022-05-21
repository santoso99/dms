<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDataTriaseIgdprimerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_triase_igdprimer', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'data_triase_igdprimer_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'data_triase_igdprimer_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_triase_igdprimer', function (Blueprint $table) {
            $table->dropForeign('data_triase_igdprimer_ibfk_1');
            $table->dropForeign('data_triase_igdprimer_ibfk_2');
        });
    }
}
