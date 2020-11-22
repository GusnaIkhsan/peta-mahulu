<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailAreaModel extends Model
{
    protected $guarded = [];

    protected $table = "detail_area";
    protected $primaryKey = "id";
    protected $fillable = [
        'kecamatan_id', 'desa_id', 'pola_ruang', 'luas', 'sumber', 'keterangan', 'koordinat'
    ];
}
