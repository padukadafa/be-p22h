<?php

namespace App\Http\Controllers;

use App\Exports\PengawasExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PengawasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pegawai.pengawas.index',[
            'pengawas' => User::where('role','pengawas')->paginate(14),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pegawai.pengawas.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate(
        [
            'nama' => 'required',
            'nik' =>'required|size:16',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'lokasi_kerja' => 'required',
            'shift' => 'required',
            'email' => 'required|email|unique:users',
        ]
        );
        
        $validatedData['role'] = 'pengawas';
        $validatedData['password'] = $request['no_hp'];
        User::create($validatedData);
        return redirect('/dashboard/pegawai/pengawas')->with('success','Berhasil menambahkan driver');
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
        return view('dashboard.pegawai.pengawas.edit',[
            'pengawas' => User::findOrFail($id),
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
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
                'lokasi_kerja' => 'required',
                'shift' => 'required',
                'email' => 'required|email',
            ]
            );
            
            User::where('id', $id)->update($validatedData);
            return redirect('/dashboard/pegawai/pengawas')->with('success','Berhasil Mengubah data pengawas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/dashboard/pegawai/pengawas')->with('success','Berhasil menghapus pengawas');
    }
    public function export() {
        return Excel::download(new PengawasExport,'pengawas.xlsx');
    }
}
