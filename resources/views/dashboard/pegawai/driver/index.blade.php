@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Driver</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a class="btn btn-sm  btn-success text-light" href="/dashboard/pegawai/driver/create">Tambahkan Driver</a>
        <a href="/dashboard/pegawai/drivers/export" class="btn btn-sm btn-outline-secondary">Export</a>
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
          <h6 class="m-0 font-weight-bold text-primary">Driver</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Nomor</th>
                          <th>Nama</th>
                          <th>NIK</th>
                          <th>Perusahaan</th>
                          <th>Kendaraan</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($drivers as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->nik }}</td>
                      <td>{{ $item->nama_perusahaan  }}</td>
                      <td>{{ $item->kendaraan->nama ?? ""}}</td>
                      <td>
                        <a href="/dashboard/pegawai/driver/{{ $item->id }}/edit" class=" badge bg-info "><i class="fas fa-solid fa-pen text-white p-1"></i></a>
                        <form action="/dashboard/pegawai/driver/{{ $item->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="button" class=" badge bg-danger border-0" data-toggle="modal" data-target="#destroyModal{{ $item->id }}"><i class="fas fa-solid fa-trash text-light p-1"></i></button>
                        <div
                          class="modal fade"
                          id="destroyModal{{ $item->id }}"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="DestroyModalLabel{{ $item->id }}"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="DestroyModalLabel{{ $item->id }}">Peringatan</h5>
                                <button
                                  class="close"
                                  type="button"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Apakah anda yakin akan menghapus Driver dengan nama {{ $item->nama }}
                              </div>
                              <div class="modal-footer">
                                <button
                                  class="btn btn-secondary"
                                  type="button"
                                  data-dismiss="modal"
                                >
                                  Batal
                                </button>
                                <button type="submit" class="btn btn-danger" href="login.html">Hapus</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      </td>
                  </tr>
                    @endforeach
                      
                     
                      
                  </tbody>
              </table>
          </div>
      </div>
  </div>

</div>

@endsection