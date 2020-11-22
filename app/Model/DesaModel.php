<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DesaModel extends Model
{
    protected $guarded = [];

    protected $table = "desa";
    protected $primaryKey = "id";
    protected $fillable = [
        'kecamatan_id','name'
    ];
}
