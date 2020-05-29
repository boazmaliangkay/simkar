<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDataKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_karyawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->integer('no_telp');
            $table->date('tgl_lahir');
            $table->integer('posisi_id');
            $table->date('tgl_masuk');
            $table->integer('status_id');
            $table->integer('pendidikan_id');
            $table->softDeletes();
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
        Schema::dropIfExists('data_karyawan');
    }
}
