<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIuranAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iuran_anggota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('iuranWajib_id');
            $table->integer('jumlah_iuran');
            $table->date('tgl_iuran');
            $table->text('keterangan');
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
        Schema::dropIfExists('iuran_anggota');
    }
}
