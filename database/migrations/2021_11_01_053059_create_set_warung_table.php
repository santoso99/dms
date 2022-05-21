<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetWarungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_warung', function (Blueprint $table) {
            $table->year('tahun');
            $table->tinyInteger('bulan');
            $table->double('pendapatan_warung');
            $table->double('persen_rs');
            $table->double('bagian_rs');
            $table->double('persen_kry');
            $table->double('bagian_kry');

            $table->primary(['tahun', 'bulan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_warung');
    }
}
