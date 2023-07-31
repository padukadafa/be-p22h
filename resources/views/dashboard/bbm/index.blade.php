@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Bahan Bakar</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/dashboard/bbms/export" class="btn btn-sm btn-outline-secondary">Export</a>
      </div>
      {{-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button> --}}
    </div>
  </div></div>
  @if (session()->has('success'))
  <div class="alert alert-info" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="container-fluid">
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Kendaran</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Nomor</th>
                          <th>Driver</th>
                          <th>Jarak</th>
                          <th>Harga</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($bbm as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->driver->nama ?? "" }}</td>
                      <td>{{ $item->jarak }} km</td>
                      <td>Rp. {{ $item->harga }}</td>
                      
                  </tr>
                    @endforeach
                      
                     
                      
                  </tbody>
              </table>
          </div>
      </div>
  </div>

</div>

@endsection