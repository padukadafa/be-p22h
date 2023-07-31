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
        Schema::create('laporan_p_p_h_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('driver_id');
            $table->foreignId('kendaraan_id');
            $table->boolean('stnk');
            $table->boolean('buku_kir');
            $table->boolean('izin_usaha');
            $table->boolean('izin_tio');
            $table->boolean('izin_masuk_kota');
            $table->boolean('kebersihan_kabin');
            $table->boolean('kondisi_ac');
            $table->boolean('pemadam_api');
            $table->boolean('first_aid_kit');
            $table->boolean('safety_belt');
            $table->boolean('spion');
            $table->boolean('klakson');
            $table->boolean('radio_komunikasi');
            $table->boolean('bendera');
            $table->boolean('lampu');
            $table->boolean('alarm_belakang');
            $table->boolean('pintu');
            $table->boolean('ban_depan_kanan');
            $table->boolean('ban_depan_kiri');
            $table->boolean('ban_belakang_kanan');
            $table->boolean('ban_belakang_kiri');
            $table->boolean('wiper');
            $table->boolean('jarum_petunjuk');
            $table->boolean('rem_tangan');
            $table->boolean('segitiga_pengaman');
            $table->boolean('kondisi_kemudi');
            $table->boolean('minyak_rem');
            $table->boolean('fungsi_rem');
            $table->boolean('oli_power_steering');
            $table->boolean('air_radiotor');
            $table->boolean('oli_mesin');
            $table->boolean('minyak_kopling');
            $table->boolean('kondisi_baterai');
            $table->boolean('fungsi_double_gardan');
            $table->boolean('dongkrak');
            $table->boolean('kunci_roda');
            $table->boolean('handel_jack');
            $table->string('status');
            $table->timestamp('tanggal_dikonfirmasi');
            
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
        Schema::dropIfExists('laporan_p_p_h_s');
    }
};
