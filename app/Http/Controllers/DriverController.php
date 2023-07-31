<?php

namespace App\Http\Controllers;

use App\Exports\DriversExport;
use App\Models\Driver;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pegawai.driver.index',[
            'drivers' => Driver::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pegawai.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:drivers|size:16',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|min:10|max:13',
            'lokasi_kerja' => 'required',
            'shift' => 'required',
            'nama_mobil' => 'required',
            'no_lambung' => 'required|unique:kendaraans',
            'no_polisi' => 'required|unique:kendaraans',
            'perusahaan' => 'required',
        ]);
        $kendaraan = [
            'nama' => $validatedData['nama_mobil'],
            'no_lambung' => $validatedData['no_lambung'],
            'no_polisi' => $validatedData['no_polisi'],
            'nama_perusahaan' => $validatedData['perusahaan'],
        ];
        $kendaraanResult = Kendaraan::create($kendaraan);
        $driver = [
            'nama' => $validatedData['nama'],
            'nik' => $validatedData['nik'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'tanggal_lahir' => date('Y-m-d',strtotime($validatedData['tanggal_lahir'])),
            'alamat' => $validatedData['alamat'],
            'no_hp' => $validatedData['no_hp'],
            'password' => $validatedData['no_hp'],
            'lokasi_kerja' => $validatedData['lokasi_kerja'],
            'shift' => $validatedData['shift'],
            'no_lambung' => $validatedData['no_lambung'],
            'nama_perusahaan' => $validatedData['perusahaan'],
            'kendaraan_id' => $kendaraanResult->id,
        ];
        
        $driver_result = Driver::create($driver);
        
        return redirect('/dashboard/pegawai/driver')->with('success','Berhasil menambahkan driver');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    
    public function show(Driver $driver)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('dashboard.pegawai.driver.edit',[
            'driver' => $driver
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'lokasi_kerja' => 'required',
            'shift' => 'required',
            'nama_mobil' => 'required',
            'no_lambung' => 'required',
            'no_polisi' => 'required',
            'nama_perusahaan' => 'required',
        ]);
        
        $kendaraan = [
            'nama' => $validatedData['nama_mobil'],
            'no_lambung' => $validatedData['no_lambung'],
            'no_polisi' => $validatedData['no_polisi'],
            'nama_perusahaan' => $validatedData['nama_perusahaan'],
        ];
        $kendaraanResult = Kendaraan::where('id', $driver->kendaraan->id)->update($kendaraan);
        $dataDriver = [
            'nama' => $validatedData['nama'],
            
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'tanggal_lahir' => date('Y-m-d',strtotime($validatedData['tanggal_lahir'])),
            'alamat' => $validatedData['alamat'],
            'no_hp' => $validatedData['no_hp'],
            'password' => $validatedData['no_hp'],
            'lokasi_kerja' => $validatedData['lokasi_kerja'],
            'shift' => $validatedData['shift'],
            'nama_perusahaan' => $validatedData['nama_perusahaan'],
            'kendaraan_id' => $driver->kendaraan->id,
        ];
        Driver::where('id', $driver->id)->update($dataDriver);
        
        
        return redirect('/dashboard/pegawai/driver')->with('success','Berhasil merubaha data driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        Driver::destroy($driver->id);
        return redirect('/dashboard/pegawai/driver')->with('success','Berhasil menghapus driver');
    }
    public function getRouteKeyName(): string
    {
        return 'nik';
    }
    public function export() {
        return Excel::download(new DriversExport,'driver.xlsx');
    }
}
