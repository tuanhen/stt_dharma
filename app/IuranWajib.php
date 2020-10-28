<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IuranWajib extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'iuran_wajibs';

    protected $fillable = [
        'id',
        'user_id',
        'jumlah_iuran_wajib',
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
