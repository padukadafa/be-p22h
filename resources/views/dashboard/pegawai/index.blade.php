@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pegawai</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm  btn-success text-light">Tambahkan Pegawai</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      {{-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button> --}}
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NIK</th>
          <th scope="col">Lokasi Kerja</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($drivers as $driver)
        <tr>
            <td>{{ $driver->id }}</td>
            <td>{{ $driver->nama }}</td>
            <td>{{ $driver->nik }}</td>
            <td>{{ $driver->lokasi_kerja }}</td>
            <td>
                <a href="/dashboard/pegawai/{{ $driver->nik }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="trash"></span></a>
            </td>
          </tr>
        @endforeach
        
        
      </tbody>
    </table>
    {{ $drivers->links() }}
  </div>
@endsection