<?php

namespace App\Http\Controllers;

use App\Models\BahanBakar;
use App\Models\Driver;
use App\Models\Kendaraan;
use App\Models\LaporanPPH;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index() {
        return view('dashboard.index',
        [
            'drivers' => Driver::all(),
            'bbm' => BahanBakar::whereDate('created_at',Carbon::now()->toDateString())->get(),
            'laporan' => LaporanPPH::whereDate('created_at',Carbon::now()->toDateString())->get(),
            'pengawas' => User::where('role','pengawas')->get(),
            'kendaraan' => Kendaraan::all(),
            
        ]);
    }
}
