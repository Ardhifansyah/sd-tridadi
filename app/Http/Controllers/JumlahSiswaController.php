<?php

namespace App\Http\Controllers;

use App\Models\JumlahSiswa;
use Illuminate\Http\Request;

class JumlahSiswaController extends Controller
{
    public function index()
    {
        $jumlahSiswas = JumlahSiswa::orderBy('tahun','desc')->get();

        return view(
            'admin.jumlah_siswa.index',
            compact('jumlahSiswas')
        );
    }

    public function create()
    {
        return view('admin.jumlah_siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun'=>'required',
            'jumlah'=>'required|numeric'
        ]);

        JumlahSiswa::create($request->all());

        return redirect('/admin/jumlah-siswa')
        ->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jumlahSiswa = JumlahSiswa::findOrFail($id);

        return view(
            'admin.jumlah_siswa.edit',
            compact('jumlahSiswa')
        );
    }

    public function update(Request $request,$id)
    {
        $jumlahSiswa = JumlahSiswa::findOrFail($id);

        $jumlahSiswa->update($request->all());

        return redirect('/admin/jumlah-siswa')
        ->with('success','Data berhasil diubah');
    }

    public function destroy($id)
    {
        JumlahSiswa::destroy($id);

        return redirect('/admin/dashboard')
        ->with('success','Data berhasil dihapus');
    }
}