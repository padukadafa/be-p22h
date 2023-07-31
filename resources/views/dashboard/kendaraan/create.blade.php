@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambahkan Kendaran</h1>
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

    <form method="POST" action="/dashboard/kendaraan">
        @csrf
        <div class="container-fluid">
            <div class="d-flex flex-wrap ">
                <div class="col-md-4" >
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="John" name="nama" value="{{ old('nama' ) }}">
                        @error('nama')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      
                      <div class="mb-3">
                          <label for="nama_perusahaan" class="form-label">Perusahaan</label>
                          <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" placeholder="PT xxxx" name="nama_perusahaan" value="{{ old('nama_perusahaan' ) }}">
                          @error('nama_perusahaan')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                        </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4" >
                    
                      
                    <div class="mb-3">
                        <label for="no_lambung" class="form-label">No Lambung</label>
                        <input type="text" class="form-control @error('no_lambung') is-invalid @enderror" id="no_lambung" placeholder="XXXXX" name="no_lambung" value="{{ old('no_lambung' ) }}">
                        @error('no_lambung')
                        <div class="text-danger">
                          {{ $message }}
                        </div>
                      @enderror
                      </div>
                      <div class="mb-3">
                        <label for="no_polisi" class="form-label">No Polisi</label>
                        <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi" placeholder="XXXXX" name="no_polisi" value="{{ old('no_polisi' ) }}">
                        @error('no_polisi')
                        <div class="text-danger">
                          {{ $message }}
                        </div>
                      @enderror
                      </div>
                </div>
            </div>
        </div>
          
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/dashboard/kendaraan" class="btn btn-danger text-light">Batal</a>
      </form>


@endsection