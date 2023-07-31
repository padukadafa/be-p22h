@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan P2H</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      {{-- <div class="btn-group me-2">
        <a class="btn btn-sm  btn-success text-light" href="/dashboard/pegawai/driver/create">Tambahkan Pegawai</a>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div> --}}
      {{-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button> --}}
    </div>
  </div>
  <a href="/dashboard/laporan" class="btn btn-info my-2">Kembali</a>
    <div class="row">
        <div class="col card p-4 ">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Laporan</th>
                    <th scope="col">Kondisi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>STNK (dalam kondisi masih berlaku)</td>
                    <td>{{ $laporan->stnk==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Buku KIR (dalam kondisi masih berlaku)</td>
                    <td>{{ $laporan->buku_kir==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Izin TIO (Stiker Tambang)</td>
                    <td>{{ $laporan->izin_tio==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Izin Masuk Kota/Kabupaten</td>
                    <td>{{ $laporan->izin_masuk_kota==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Kebersihan Luar dan Dalam Kabin</td>
                    <td>{{ $laporan->kebersihan_kabin==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Kondisi Air Conditioner (Ac)</td>
                    <td>{{ $laporan->kondisi_ac==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Fire Extinguisher (Pemadam Api)</td>
                    <td>{{ $laporan->pemadam_api==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>First Aid Kit (Perlengkapan P3K Khsus)</td>
                    <td>{{ $laporan->first_aid_kit==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Safety Belt All (Sabuk Pengaman)</td>
                    <td>{{ $laporan->safety_belt==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Mirror (Spion)</td>
                    <td>{{ $laporan->spion==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Horn (Klakson)</td>
                    <td>{{ $laporan->klakson==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Radio Komunikasi</td>
                    <td>{{ $laporan->radio_komunikasi==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Bendera (Buggy Flag)</td>
                    <td>{{ $laporan->bendera==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Lights (Lampu-Lampu, Rotary Lamp)</td>
                    <td>{{ $laporan->lampu==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Back Alarm (Alarm Belakag)</td>
                    <td>{{ $laporan->alarm_belakang==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>All Door and Lock Condition (Pintu & Lock)</td>
                    <td>{{ $laporan->pintu==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Ban Depan Kanan</td>
                    <td>{{ $laporan->ban_depan_kanan==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Ban Depan Kiri</td>
                    <td>{{ $laporan->ban_depan_kiri==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Ban Belakang Kanan</td>
                    <td>{{ $laporan->ban_belakang_kanan==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Ban Belakang Kiri</td>
                    <td>{{ $laporan->ban_belakang_kiri==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Wiper Condition (Kondisi Wiper dan airnya)</td>
                    <td>{{ $laporan->wiper==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Gauge Working (Jarum penunjuk / Indikator)</td>
                    <td>{{ $laporan->jarum_petunjuk==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Hand Brake (Rem Tangan)</td>
                    <td>{{ $laporan->rem_tangan==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Safety Triangle (Segitiga Pengaman)</td>
                    <td>{{ $laporan->segitiga_pengaman==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Steering Condition (Kondisi Kemudi)</td>
                    <td>{{ $laporan->kondisi_kemudi==0 ? "Aman" : "Bermasalah"}}</td>
                </tr><tr>
                    <td>Brake Fluid (Minyak Rem)</td>
                    <td>{{ $laporan->minyak_rem==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Brake Function (Fungsi Rem)</td>
                    <td>{{ $laporan->fungsi_rem==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Power Steering Fluid (Oli Power Steering)</td>
                    <td>{{ $laporan->oli_power_steering==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Water Level Air (Air Radiator + Tutupnya)</td>
                    <td>{{ $laporan->air_radiator==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Engine Oil Level (Oli Mesin)</td>
                    <td>{{ $laporan->oli_mesin==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Clutch Fluid (Minyak Kopling)</td>
                    <td>{{ $laporan->minyak_kopling==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Battery Condition (Kondisi Baterai)</td>
                    <td>{{ $laporan->kondisi_baterai==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>4x4 FWD Functioning (Fungsi Double Gardan 4x5)</td>
                    <td>{{ $laporan->fungsi_double_gardan==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Jack (Dongkrak)</td>
                    <td>{{ $laporan->dongkrak==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Jack (Dongkrak)</td>
                    <td>{{ $laporan->dongkrak==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Wheel Spinner (Kunci Roda)</td>
                    <td>{{ $laporan->kunci_roda==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>
                <tr>
                    <td>Jack Handle (Handle Jack)</td>
                    <td>{{ $laporan->handel_jack==0 ? "Aman" : "Bermasalah"}}</td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="" style="width:40%">
            <div class="card p-4 m-2">
                <p class="fs-3 fw-bold">Data Driver</p>
            <table class="table">

                <tbody>
                <tr>
                    <td>Nama Driver</td>
                    <td>{{ $laporan->driver->nama}}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>{{ $laporan->driver->nik}}</td>
                </tr>
                <tr>
                    <td>Lokasi Kerja</td>
                    <td>{{ $laporan->driver->lokasi_kerja}}</td>
                </tr>
                <tr>
                    <td>Nama Kendaraan</td>
                    <td>{{ $laporan->driver->kendaraan->nama}}</td>
                </tr>
                <tr>
                    <td>Plat Nomor</td>
                    <td>{{ $laporan->driver->kendaraan->no_polisi}}</td>
                </tr>
                <tr>
                    <td>Perusahaan</td>
                    <td>{{ $laporan->driver->nama_perusahaan}}</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    


@endsection