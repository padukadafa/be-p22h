<?php

namespace App\Http\Controllers;

use App\Exports\KendaraanExport;
use App\Models\Driver;
use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.index',[
            'kendaraan' => Kendaraan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kendaraan.create',);
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
            'nama_perusahaan' => 'required',
            'no_lambung' => 'required|unique:kendaraans',
            'no_polisi' => 'required|unique:kendaraans',
        ]);
        Kendaraan::create($validatedData);
        return redirect('/dashboard/kendaraan')->with('success','Berhasil menambahkan kendaraan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.kendaraan.edit',[
            'kendaraan' => Kendaraan::where('id',$id)->get()->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::where('id',$id)->get()->first;

        
        $validatedData = $request->validate([
            'nama' => ['required'],
            'nama_perusahaan' => ['required'],
        ]);
        Kendaraan::where('id', $id)->update($validatedData);
        return redirect('/dashboard/kendaraan')->with('success','Berhasil mengupdate kendaraan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function export() {
        return Excel::download(new KendaraanExport,'kendaraan.xlsx');
    }
    
}
