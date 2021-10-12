<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    public function peminjaman()
    {
        return $this->belongsTo('App\Peminjaman',  'peminjaman_id','id');
    }
}
