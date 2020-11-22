<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KecamatanModel extends Model
{
    protected $guarded = [];

    protected $table = "kecamatan";
    protected $primaryKey = "id";
    protected $fillable = [
        'name'
    ];
}
