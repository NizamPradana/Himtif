<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Http\Requests\StoreSiteSettingRequest;
use App\Http\Requests\UpdateSiteSettingRequest;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Site Settings',
            'site_settings' => SiteSetting::first(),
        ];
        return view('admin.site_setting.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiteSettingRequest $request)
    {

        $validatedDate = $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'kontak' => 'required',
        ]);

        SiteSetting::create($validatedDate);

        return redirect()->with(['success' => 'Berhasil Menambahkan data']);

    }

    /**
     * Display the specified resource.
     */
    public function show(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteSettingRequest $request, SiteSetting $siteSetting)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'kontak' => 'required',
        ]);

        SiteSetting::where('id', $validatedData['id'])->update([
            'sejarah' => $request->sejarah,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'kontak' => $request->kontak,
        ]);

        return redirect('/site')->with(['success' => 'Berhasil Mengubah data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteSetting $siteSetting)
    {
        //
    }
}
