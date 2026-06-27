<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use Illuminate\Http\Request;

class HomeSettingController extends Controller
{
    public function edit()
    {
        $home = HomeSetting::first();

        if (!$home) {

            $home = HomeSetting::create([
                'nama_kepala_sekolah' => '',
                'foto_kepala_sekolah' => '',
                'sambutan' => '',
                'visi' => '',
                'misi' => '',
            ]);

        }

        return view('admin.home_setting.edit', compact('home'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_kepala_sekolah' => 'required',
            'sambutan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $home = HomeSetting::first();

        if ($request->hasFile('foto_kepala_sekolah')) {

            $file = $request->file('foto_kepala_sekolah');

            $namaFile = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/home'), $namaFile);

            $home->foto_kepala_sekolah = $namaFile;
        }

        $home->nama_kepala_sekolah = $request->nama_kepala_sekolah;
        $home->sambutan = $request->sambutan;
        $home->visi = $request->visi;
        $home->misi = $request->misi;

        $home->save();

        return redirect('/admin/home-setting')
            ->with('success', 'Data Beranda berhasil diperbarui');
    }
}