@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Jumlah Driver</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $drivers->count() }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Jumlah Pengawas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pengawas->count() }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Laporan P2H hari ini</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $laporan->count() }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-file fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Pengajuan BBM hari ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $bbm->count() }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-gas-pump fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="">
  <div class="d-flex flex-row">
    <div class="flex-grow-1 mr-2">
      <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <div class="">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan P2H</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Driver</th>
                                            <th>Kendaraan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($laporan as $item)
                                      <tr>
                                        <td>{{ $loop->index }}</td>
                                        <td>{{ $item->driver->nama ?? "" }}</td>  
                                        <td>{{ $item->driver->kendaraan->nama ?? "" }}</td>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                      @endforeach
                                        
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    </div>
    <div style="width: 35%">
      <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-0 m-0">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengajuan BBM Terbaru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @for ($i = 0; $i < 8; $i++)
                                      <tr>
                                        <td>{{$i+1 }}</td>
                                        <td>{{ $bbm[$i]->driver->nama ?? "" }}</td>
                                        <td>{{ $bbm[$i]->harga }}</td>
                                    </tr>
                                      @endfor
                                      
                                        
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    </div>
  </div>
</div>
<div class="">
  <div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <div class="">

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
                                        <th>Kendaraan</th>
                                        <th>Lokasi Kerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @for ($i = 0; $i < 6; $i++)
                                  <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $drivers[$i]->nama ?? "" }}</td>  
                                    <td>{{ $drivers[$i]->nik ?? "" }}</td>
                                    <td>{{ $drivers[$i]->kendaraan->nama ?? "" }}</td>
                                    <td>{{ $drivers[$i]->lokasi_kerja ?? "" }}</td>
                                </tr> 
                                  @endfor
                                    
                                    
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
@endsection