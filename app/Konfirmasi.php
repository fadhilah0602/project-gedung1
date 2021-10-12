<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    // public function user()
    // {
    //     return $this->hasMany('App\User',  'user_id','id');
        
    // }

    public function peminjaman()
    {
        return $this->belongsTo('App\Peminjaman',  'peminjaman_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User',  'user_id','id');
    }

    public function ruang()
    {
        return $this->belongsTo('App\Ruang',  'ruang_id','id');
    }
}
