<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;

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
        Divisi::create([
            'divisi' => $request->divisi,
        ]);

        return redirect('/divisi')->with('success', 'Data Berhasil Simpan');
    }

    public function update(Request $request, $id)
    {
        Divisi::where('id', $id)
            ->update([
                'divisi' => $request->divisi,
            ]);

        return redirect('/divisi')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        Divisi::where('id', $id)->delete();

        return redirect('/divisi')->with('success', 'Data Berhasil Dihapus');
    }
}
