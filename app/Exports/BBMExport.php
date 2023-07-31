<?php

namespace App\Exports;

use App\Models\BahanBakar;
use Maatwebsite\Excel\Concerns\FromCollection;

class BBMExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BahanBakar::all();
    }
}
