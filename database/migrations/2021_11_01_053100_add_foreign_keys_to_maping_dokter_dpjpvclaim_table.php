<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMapingDokterDpjpvclaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maping_dokter_dpjpvclaim', function (Blueprint $table) {
            $table->foreign(['kd_dokter'], 'maping_dokter_dpjpvclaim_ibfk_1')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maping_dokter_dpjpvclaim', function (Blueprint $table) {
            $table->dropForeign('maping_dokter_dpjpvclaim_ibfk_1');
        });
    }
}
