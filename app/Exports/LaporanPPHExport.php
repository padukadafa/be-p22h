<?php

namespace App\Exports;

use App\Models\LaporanPPH;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaporanPPHExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LaporanPPH::all();
    }
}
