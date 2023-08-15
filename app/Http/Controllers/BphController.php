<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bph;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;

class BphController extends Controller
{
    public function index()
    {
        $data = [
            'title'    => 'BPH',
            'data_bph' => Bph::join('status', 'status.id', '=', 'bph.id_status')
                ->select('bph.*', 'status.status')
                ->get(),
            'status' => Status::all(),
        ];

        return view('admin.bph.list', $data);
    }

    public function store(Request $request)
    {
        

        $validatedData = $request->validate([
            'nama' => "required",
            'jabatan' => "required",
            'periode' => "required",
            'id_status' => "required",
            'foto_bph' => 'required|image'
        ]);
        
        $validatedData['foto_bph'] = $request->file('foto_bph')->store('foto-bph');
        
    
        Bph::create($validatedData);


        return redirect('/bph')->with('success', 'Data Berhasil Simpan');
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'nama' => "required",
            'jabatan' => "required",
            'periode' => "required",
            'id_status' => "required",
            'new_foto_bph' => 'image'
        ]);


        $foto_bph = '';

        if($request->new_foto_bph){
            Storage::delete($request->old_foto_bph);
            $foto_bph = $request->file('new_foto_bph')->store('foto-bph');
        }else{
            $foto_bph = $request->old_foto_bph;
        }


        Bph::where('id', $id)
            ->update([
                'nama'      => $request->nama,
                'jabatan'   => $request->jabatan,
                'periode'   => $request->periode,
                'id_status' => $request->id_status,
                'foto_bph' => $foto_bph,
            ]);

        return redirect('/bph')->with('success', 'Data Berhasil Diubah');
    }

    
    public function destroy($id)
    {
        $data = Bph::where('id', $id)->first();
        
        Storage::delete($data->foto_bph);

        $data->delete();

        return redirect('/bph')->with('success', 'Data Berhasil Dihapus');
    }
}
