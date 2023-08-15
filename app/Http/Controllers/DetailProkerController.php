<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailProker;
use App\Models\Divisi;
use App\Models\Proker;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class DetailProkerController extends Controller
{
    public function index($id, $id_divisi)
    {

        $detailProker = DetailProker::where('id_proker', $id)->first();

        if(!$detailProker){
            $detailProker = false;
            $foto = false;
        }else{
            $foto = $detailProker->foto == null ? null : json_decode($detailProker->foto);
        }



        $data = [
            'title'  => 'Detail Proker',
            'detail_proker' => $detailProker,
            'foto' => $foto,
            'divisi' => Divisi::where('id', $id_divisi)
                ->select('divisi.divisi')
                ->first(),
            'proker' => Proker::where('id', $id)->first(),
        ];

        return view('admin.proker.detail.detail', $data);
    }

    public function store(Request $request, $id)
    {

        $validatedData = $request->validate([
                'detail' => 'required',
                'foto.*' => 'required|image|mimes:jpeg,jpg,png|max:3072',
            ], [
                'detail.required' => 'Please input a sentence.',
                'foto.*.required' => 'Please select at least one image.',
                'foto.*.image'    => 'The file must be an image.',
                'foto.*.mimes'    => 'Only jpeg, jpg, and png images are allowed.',
                'foto.*.max'      => 'Image size must not exceed 3MB.',
            ]);

            $namaFoto = []; // Array to store file names
    
        foreach ($request->file('foto') as $file) {
            $fileName = $file->store('proker'); // Upload to 'public' disk under 'foto' folder
            $namaFoto[] = $fileName;
        }

            $stringName = json_encode($namaFoto);
            
            $simpan = DetailProker::create([
                'id_proker' => $id,
                'detail' => $request->detail,
                'foto' => $stringName
            ]);

            if($simpan){
                return redirect()->back()->with('success', 'Data Berhasil Simpan');
            }

        
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'detail' => 'required',
            'foto.*' => 'required|image|mimes:jpeg,jpg,png|max:3072',
        ], [
            'detail.required' => 'Please input a sentence.',
            'foto.*.required' => 'Please select at least one image.',
            'foto.*.image'    => 'The file must be an image.',
            'foto.*.mimes'    => 'Only jpeg, jpg, and png images are allowed.',
            'foto.*.max'      => 'Image size must not exceed 3MB.',
        ]);

        //menghapus foto sebelumnya
        if(!empty($request->file('foto'))){
            
            $old_foto_name = json_decode($request->old_foto);
            
            if($request->old_foto != null){
                foreach($old_foto_name as $old_name){
                    Storage::delete($old_name);
                }
            }


            $namaFoto = []; // Array to store file names
    
            foreach ($request->file('foto') as $file) {
                $fileName = $file->store('proker'); 
                $namaFoto[] = $fileName;
            }
            
            $stringName = json_encode($namaFoto);
            
        }else{
            $stringName = $request->old_foto;
        }


        $simpan = DetailProker::where('id', $request->id_detail_proker)->update([
            'detail' => $request->detail,
            'foto' => $stringName
        ]);
        if($simpan){
            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        }



    }

    public function destroy($id)
    {
        $data = DetailProker::where('id', $id)->first();

        if($data->foto != null){
            foreach($$data->foto as $old_foto){
                Storage::delete($old_foto);
            }
        }

        $data->delete();


        return redirect('/divisi')->with('success', 'Data Berhasil Dihapus');
    }
}
