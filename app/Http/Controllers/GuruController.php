<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->get();

        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {

            $foto = time() . '.' . $request->foto->extension();

            $request->foto->move(
                public_path('uploads/guru'),
                $foto
            );
        }

        Guru::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $foto,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/admin/guru')
            ->with('success', 'Data guru berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);

        return view(
            'admin.guru.edit',
            compact('guru')
        );
    }

    public function update(Request $request, string $id)
    {
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('foto')) {

            $foto = time() . '.' . $request->foto->extension();

            $request->foto->move(
                public_path('uploads/guru'),
                $foto
            );

            $guru->foto = $foto;
        }

        $guru->nama = $request->nama;
        $guru->jabatan = $request->jabatan;
        $guru->deskripsi = $request->deskripsi;

        $guru->save();

        return redirect('/admin/guru')
            ->with('success', 'Data guru berhasil diubah');
    }

    public function destroy(string $id)
    {
        $guru = Guru::findOrFail($id);

        if (
            $guru->foto &&
            file_exists(
                public_path('uploads/guru/' . $guru->foto)
            )
        ) {
            unlink(
                public_path('uploads/guru/' . $guru->foto)
            );
        }

        $guru->delete();

        return redirect('/admin/guru')
            ->with('success', 'Data guru berhasil dihapus');
    }
}