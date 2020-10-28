<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasMasuk extends Model
{
    public $table = 'kas_Masuks';
    protected $fillable = [
        'keterangan', 'jumlah', 'tanggal_masuk'
    ];
}
