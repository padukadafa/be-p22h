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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();$table->string("nama");
            $table->string("nik");
            $table->string("password");
            $table->string("jenis_kelamin");
            $table->timestamp('tanggal_lahir');
            $table->string("alamat");
            $table->string("no_hp");
            $table->string("lokasi_kerja");
            $table->string("shift");
            $table->string('kendaraan_id');
            $table->string('nama_perusahaan');
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
        Schema::dropIfExists('drivers');
    }
};
