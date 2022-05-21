<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturpasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returpasien', function (Blueprint $table) {
            $table->date('tanggal');
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->double('jml');
            $table->string('no_batch', 20);
            $table->string('no_faktur', 20);

            $table->primary(['tanggal', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returpasien');
    }
}
