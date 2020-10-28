<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'absensis';

    protected $fillable = [
        'id',
        'user_id',
        'tgl_rapat',
        'status',
        'keterangan',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\Users', 'user_id');
    }
}
