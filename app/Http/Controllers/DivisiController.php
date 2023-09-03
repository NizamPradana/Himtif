<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use Illuminate\Support\Facades\Storage;

class DivisiController extends Controller
{
    public function index()
    {
        $data = [
            'title'       => 'Divisi',
            'data_divisi' => Divisi::all(),
        ];

        return view('admin.divisi.list', $data);
    }



    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'divisi' => 'required',
            'logo_divisi' => 'required|image', 
            'foto_divisi' => 'required|image', 
            'deskripsi' => 'required', 
        ]);

        $attributes = [
            'logo_divisi',
            'foto_divisi',
        ];
        
        foreach ($attributes as $attribute) {
            $validatedData[$attribute] = $request->file($attribute)->store($request->divisi);    
        }

        
        Divisi::create([
            'divisi' => $validatedData['divisi'],
            'logo_divisi' => $validatedData['logo_divisi'],
            'foto_divisi' => $validatedData['foto_divisi'],
            'deskripsi' => $validatedData['deskripsi'],
        ]);


        return redirect('/divisi')->with('success', 'Data Berhasil Simpan');
    }





    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'divisi' => 'required',
            'logo_divisi' => 'image', 
            'foto_divisi' => 'image', 
            'deskripsi' => 'required',
        ]);

        $oldData = Divisi::where('id',$id)->first();


        $attributes = [
            'logo_divisi',
            'foto_divisi',
        ];
        
        foreach ($attributes as $attribute) {
            if (!$request->hasFile($attribute)) {
                $validatedData[$attribute] = $oldData->$attribute;
            }else{

                // cek apakah ada dile sebelumnya yg tersimpan
                if($oldData->$attribute != null){
                    Storage::delete($oldData->$attribute);
                }                
                $validatedData[$attribute] = $request->file($attribute)->store($validatedData['divisi']);
            }
        }

        Divisi::where('id', $id)->update([
            'divisi' => $validatedData['divisi'],
            'logo_divisi' => $validatedData['logo_divisi'],
            'foto_divisi' => $validatedData['foto_divisi'],
            'deskripsi' => $validatedData['deskripsi'],
        ]);


        return redirect('/divisi')->with('success', 'Data Berhasil Diubah');
    }



    public function destroy($id)
    {
        $oldData = Divisi::where('id', $id)->first();

        $attributes = [
            'logo_divisi',
            'foto_divisi',
        ];
        
        foreach ($attributes as $attribute) {
            // cek apakah ada file sebelumnya yg tersimpan
            if($oldData->$attribute != null){
                Storage::delete($oldData->$attribute);
            }                
        }   

        $oldData->delete();

        return redirect('/divisi')->with('success', 'Data Berhasil Dihapus');
    }
}
