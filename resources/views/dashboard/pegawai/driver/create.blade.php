@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambahkan Driver</h1>
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

    <form method="POST" action="/dashboard/pegawai/driver">
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
                          <label for="nik" class="form-label">NIK</label>
                          <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="351000000000000" name="nik" value="{{ old('nik' ) }}">
                          @error('nik')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                          <label for="gender" class="form-label">Jenis Kelamin</label>
                          <select class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example" id="gender" name="jenis_kelamin" value="{{ old('jenis_kelamin' ) }}">
                              <option value="laki-laki" selected>Laki-Laki</option>
                              <option value="perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                          <label for="date" class="form-label">Tanggal Lahir</label>
                          <div class="input-group date" data-provide="datepicker">
                              <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="dd/mm/yyyy" name="tanggal_lahir" value="{{ old('tanggal_lahir' ) }}">
                              <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-th"></span>
                              </div>
                          </div>
                          @error('tanggal_lahir')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="address" placeholder="Jalan,Desa,kecamatan,kabupaten" name="alamat" value="{{ old('alamat' ) }}">
                            @error('alamat')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                          </div>
                          <div class="mb-3">
                            <label for="phone" class="form-label">No Hp</label>
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="phone" placeholder="08500000000" name="no_hp" value="{{ old('no_hp' ) }}">
                            @error('no_hp')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                          </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4" >
                    
                      
                      <div class="mb-3">
                        <label for="gender" class="form-label">Lokasi Kerja</label>
                        <select class="form-select @error('lokasi_kerja') is-invalid @enderror" aria-label="Default select example" id="gender" name="lokasi_kerja" value="{{ old('lokasi_kerja' ) }}">
                            <option value="jombang" selected>Jombang</option>
                            <option value="nganjuk">Nganjuk</option>
                            <option value="kediri">Kediri</option>
                            <option value="surabaya">Surabaya</option>
                          </select>
                          @error('lokasi_kerja')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="gender" class="form-label">Shift</label>
                        <select class="form-select @error('shift') is-invalid @enderror" aria-label="Default select example" id="gender" name="shift" value="{{ old('shift' ) }}">
                            <option value="1" selected>Shift 1</option>
                            <option value="2">Shift 2</option>
                          </select>
                          @error('shift')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label">Nama mobil</label>
                        <input type="text" class="form-control @error('nama_mobil') is-invalid @enderror" id="phone" placeholder="mitsubisi, expander" name="nama_mobil" value="{{ old('nama_mobil' ) }}">
                        @error('nama_mobil')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Lambung Mobil</label>
                        <input type="text" class="form-control @error('no_lambung') is-invalid @enderror" id="phone" placeholder="08777" name="no_lambung" value="{{ old('no_lambung' ) }}">
                        @error('no_lambung')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label">Plat Nomor Mobil</label>
                        <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="phone" placeholder=" AG XXXXX X" name="no_polisi" value="{{ old('no_polisi' ) }}">
                        @error('no_polisi')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label">Perusahaan</label>
                        <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" id="phone" placeholder="PT. XXXX" name="perusahaan" value="{{ old('perusahaan' ) }}">
                        @error('perusahaan')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                </div>
            </div>
        </div>
          
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/dashboard/pegawai/driver" class="btn btn-danger text-light">Batal</a>
      </form>


@endsection