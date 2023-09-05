<?php

namespace App\Http\Controllers;

use App\Models\AnggotaDivisi;
use App\Models\Divisi;
use App\Models\Proker;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    

    public function index(){

        $siteSettings = SiteSetting::first();
        $dataDivisi = Divisi::get();
        $dataProker = Proker::join('divisi', 'divisi.id', '=', 'proker.id_divisi')
        ->select('divisi.divisi', 'divisi.logo_divisi', 'proker.*')
        ->get();


        return view('guest.index', [
            'siteSetting' => $siteSettings,
            'dataDivisi' => $dataDivisi,
            'dataProker' => $dataProker,
        ]);

    }

    public function detailDivisi($id_divisi){

        $dataDivisi = Divisi::where('divisi.id', $id_divisi)->first();
        $dataKetuaDivisi = AnggotaDivisi::where('id_divisi', $id_divisi)->where('jabatan', 'ketua')->first();
        $anggotaDivisi = AnggotaDivisi::where('id_divisi', $id_divisi)->where('jabatan','!=', 'ketua')->get();

        // return $dataKetuaDivisi;

        return view('guest.detailDivisi', [
            'dataDivisi' => $dataDivisi,
            'dataKetuaDivisi' => $dataKetuaDivisi,
            'anggotaDivisi' => $anggotaDivisi,
        ]);

    }

}
