<?php

namespace App\Models;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBakar extends Model
{
    use HasFactory;
    public function driver() {
        return $this->belongsTo(Driver::class);
    }
}
