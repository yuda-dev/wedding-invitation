<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akads', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('tgl_akad');
            $table->time('w_akad_awal');
            $table->time('w_akad_akhir');
            $table->text('alamat_akad');
            $table->datetime('tgl_resepsi');
            $table->time('w_resepsi_awal');
            $table->text('alamat_resepsi');
            $table->datetime('tgl_hiburan');
            $table->time('w_hiburan_awal');
            $table->text('hiburan');
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
        Schema::dropIfExists('akads');
    }
}
