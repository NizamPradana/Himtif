<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    

    public function index(){

        $siteSettings = SiteSetting::first();

        return view('guest.index', [
            'siteSetting' => $siteSettings,
        ]);

    }

}
