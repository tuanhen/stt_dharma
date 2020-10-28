<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IuranAnggota extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'iuran_anggotas';

    protected $fillable = [
        'id',
        'iuranWajib_id',
        'jumlah_iuran',
        'tgl_iuran',
        'keterangan',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\Users', 'iuranWajib_id');
    }


}
