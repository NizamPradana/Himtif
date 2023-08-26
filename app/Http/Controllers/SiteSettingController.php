<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Http\Requests\StoreSiteSettingRequest;
use App\Http\Requests\UpdateSiteSettingRequest;
use Illuminate\Support\Facades\Storage;


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

    

    public function updateFoto(UpdateSiteSettingRequest $request, SiteSetting $siteSetting){

        // validasi data inputan
        $validatedData = $request->validate([
            'foto_logo' => 'image|mimes:jpeg,png,jpg|max:5048',
            'foto_angkatan' => 'image|mimes:jpeg,png,jpg|max:5048',
            'foto_ketua' => 'image|mimes:jpeg,png,jpg|max:5048',
            'foto_wakil' => 'image|mimes:jpeg,png,jpg|max:5048',
            'foto_bendahara' => 'image|mimes:jpeg,png,jpg|max:5048',
            'foto_sekretaris' => 'image|mimes:jpeg,png,jpg|max:5048',
        ]);

        //mengambil data terakhir sebbelum di update
        $oldData = SiteSetting::first();
        
        $attributes = [
            'foto_logo',
            'foto_angkatan',
            'foto_ketua',
            'foto_wakil',
            'foto_bendahara',
            'foto_sekretaris',
        ];
        
        foreach ($attributes as $attribute) {
            if (!$request->hasFile($attribute)) {
                $validatedData[$attribute] = $oldData->$attribute;
            }else{

                // cek apakah ada dile sebelumnya yg tersimpan
                if($oldData->$attribute != null){
                    Storage::delete($oldData->$attribute);
                }                
                $validatedData[$attribute] = $request->file($attribute)->store('aset-foto');
            }
        }
        
        
        SiteSetting::first()->update([
            'foto_logo' => $validatedData['foto_logo'],
            'foto_angkatan' => $validatedData['foto_angkatan'],
            'foto_ketua' => $validatedData['foto_ketua'],
            'foto_wakil' => $validatedData['foto_wakil'],
            'foto_bendahara' => $validatedData['foto_bendahara'],
            'foto_sekretaris' => $validatedData['foto_sekretaris'],
        ]);

        return redirect('/site')->with(['success' => "Berhasil Mengubah Aset Foto"]);
        
    }

}
