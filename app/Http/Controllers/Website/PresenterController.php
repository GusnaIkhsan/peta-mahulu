<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresenterController extends Controller
{
    const APPS_PAGES = array(
        "rtrw"              => 'content_template.rtrw',
        "rdtr"              => 'content_template.rdtr',
        "peta-pola-ruang"   => 'content_template.peta_pola_ruang',
        "peta-tematik"      => 'content_template.peta_tematik'
    );

    function showPetaMahulu(){
        return view('content_template.beranda');
    }

    function showContent($site){
        // return view('content_template.rdtr');
        return view(PresenterController::APPS_PAGES[$site]);
    }
}
