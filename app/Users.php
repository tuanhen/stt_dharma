<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    protected $primaryKey = 'id';
    protected $table = 'users';

    protected $fillable = [
        'id',
        'nik',
        'name',
        'alamat',
        'email'
    ];

    public function iuranWajib()
    {
        return $this->belongsTo('App\IuranWajib', 'user_id','jumlah_iuran_wajib');
    }
}
