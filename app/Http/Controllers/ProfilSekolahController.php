<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    public function edit()
    {
        $profil = ProfilSekolah::first();

        if (!$profil) {
            $profil = ProfilSekolah::create([
                'nama_sekolah' => '',
                'npsn' => '',
                'status' => '',
                'akreditasi' => '',
                'tanggal_berdiri' => null,
                'alamat' => '',
                'sejarah' => '',
                'tujuan' => '',
                'struktur_organisasi' => ''
            ]);
        }

        return view('admin.profil_sekolah.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'npsn' => 'required',
            'status' => 'required',
            'akreditasi' => 'required',
            'tanggal_berdiri' => 'required',
            'alamat' => 'required',
            'sejarah' => 'required',
            'tujuan' => 'required'
        ]);

        $profil = ProfilSekolah::first();

        $profil->nama_sekolah = $request->nama_sekolah;
        $profil->npsn = $request->npsn;
        $profil->status = $request->status;
        $profil->akreditasi = $request->akreditasi;
        $profil->tanggal_berdiri = $request->tanggal_berdiri;
        $profil->alamat = $request->alamat;
        $profil->sejarah = $request->sejarah;
        $profil->tujuan = $request->tujuan;

        if ($request->hasFile('struktur_organisasi')) {

            $file = $request->file('struktur_organisasi');

            $namaFile = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/profil'), $namaFile);

            $profil->struktur_organisasi = $namaFile;
        }

        $profil->save();

        return redirect('/admin/profil-sekolah')
            ->with('success', 'Profil sekolah berhasil diperbarui.');
    }
}