<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = [
        'kode_mapel',
        'nama_mapel',
    ];

    public function jadwals() {
        return $this->hasMany('App\Model\Jadwal','mapel_id');
    }
}
