<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaDivisi;
use App\Models\Divisi;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;


class AnggotaDivisiController extends Controller
{
    public function index($id)
    {
        $data = [
            'title'        => 'Anggota',
            'id'           => $id,
            'data_anggota' => AnggotaDivisi::join('status', 'status.id', '=', 'anggota_divisi.id_status')
                ->select('anggota_divisi.*', 'status.status')
                ->where('anggota_divisi.id_divisi', $id)
                ->get(),
            'divisi'       => Divisi::where('id', $id)->first(),
            'status'       => Status::all(),
        ];

        return view('admin.divisi.anggota.list', $data);
    }

    public function store(Request $request)
    {

        
        $validatedData = $request->validate([
            'nama' => "required",
            'jabatan' => "required",
            'periode' => "required",
            'id_status' => "required",
            'id_divisi' => "required",
            'foto_anggota' => 'required|image'
        ]);
        
        $validatedData['foto_anggota'] = $request->file('foto_anggota')->store('foto-anggota');

        AnggotaDivisi::create($validatedData);

        return redirect()->back()->with('success', 'Data Berhasil Simpan');
    }



    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'nama' => "required",
            'jabatan' => "required",
            'periode' => "required",
            'id_status' => "required",
            'new_foto_anggota' => 'image'
        ]);


        $foto_anggota = '';

        if($request->new_foto_anggota){
            Storage::delete($request->old_foto_anggota);
            $foto_anggota = $request->file('new_foto_anggota')->store('foto-anggota');
        }else{
            $foto_anggota = $request->old_foto_anggota;
        }

        AnggotaDivisi::where('id', $id)
            ->update([
                'nama'      => $request->nama,
                'jabatan'   => $request->jabatan,
                'periode'   => $request->periode,
                'id_status' => $request->id_status,
                'foto_anggota' => $foto_anggota
            ]);

        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = AnggotaDivisi::where('id', $id)->first();

        Storage::delete($data->foto_anggota);

        $data->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
