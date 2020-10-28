<?php

namespace App\Http\Controllers\Peta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function showPeta(){

        return view('layout.app');
    }
}
