<?php

namespace App\Http\Controllers;

use App\Models\AnggotaDivisi;
use App\Models\Bph;
use App\Models\Divisi;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'site_settings' => SiteSetting::first(),
            'jumlah_bph' => Bph::where('id_status', 1)->count(),
            'jumlah_divisi' => Divisi::count(),
            'jumlah_anggota' => AnggotaDivisi::where('id_status', 1)->count(),
        ];

        return view('admin.dashboard', $data);
    }
}
