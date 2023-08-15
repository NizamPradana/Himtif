<?php

namespace App\Http\Controllers;

use App\Models\DetailProker;
use Illuminate\Http\Request;
use App\Models\Proker;
use App\Models\Divisi;
use Illuminate\Support\Facades\Storage;

class ProkerController extends Controller
{
    public function index()
    {
        $data = [
            'title'  => 'Proker',
            'divisi' => Divisi::all(),
            'proker' => Proker::join('divisi', 'divisi.id', '=', 'proker.id_divisi')
                ->select('divisi.divisi', 'proker.*')
                ->get()
        ];

        return view('admin.proker.list', $data);
    }

    public function store(Request $request)
    {
        Proker::create([
            'proker'              => $request->proker,
            'tanggal_pelaksanaan' => $request->tgl_pelaksanaan,
            'id_divisi'           => $request->divisi,
        ]);

        return redirect('/proker')->with('success', 'Data Berhasil Simpan');
    }

    public function update(Request $request, $id)
    {
        Proker::where('id', $id)
            ->update([
                'proker'              => $request->proker,
                'tanggal_pelaksanaan' => $request->tgl_pelaksanaan,
                'id_divisi'           => $request->divisi,
            ]);

        return redirect('/proker')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {

        $detailProker = DetailProker::where('id_proker', $id)->first();
        $mainProker = Proker::where('id', $id)->first();

        if(!empty($detailProker)){
            if($detailProker->foto != null){
                foreach(json_decode($detailProker->foto) as $old_foto){
                    Storage::delete($old_foto);
                }
            }
            $detailProker->delete();
        }

        $mainProker->delete();

        return redirect('/proker')->with('success', 'Data Berhasil Dihapus');
    }
}
