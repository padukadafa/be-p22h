<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'required|size:16',
        ]);
        User::where('id',Auth::user()->id)->update($validatedData);
        return redirect('/profile')->with('success','Berhasil mengupdate profil');

    }


    public function destroy($id)
    {
        
    }
}
