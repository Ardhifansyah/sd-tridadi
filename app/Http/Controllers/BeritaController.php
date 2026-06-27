<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view(
            'admin.berita.index',
            compact('beritas')
        );
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required'
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/berita'),
                $gambar
            );
        }

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'kategori' => $request->kategori
        ]);

        return redirect('/admin/berita')
            ->with(
                'success',
                'Data berhasil ditambahkan'
            );
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view(
            'admin.berita.edit',
            compact('berita')
        );
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        if ($request->hasFile('gambar')) {

            $gambar = time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/berita'),
                $gambar
            );

            $berita->gambar = $gambar;
        }

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->kategori = $request->kategori;

        $berita->save();

        return redirect('/admin/berita')
            ->with(
                'success',
                'Data berhasil diubah'
            );
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if (
            $berita->gambar &&
            file_exists(
                public_path(
                    'uploads/berita/'.$berita->gambar
                )
            )
        ) {
            unlink(
                public_path(
                    'uploads/berita/'.$berita->gambar
                )
            );
        }

        $berita->delete();

        return redirect('/admin/berita')
            ->with(
                'success',
                'Data berhasil dihapus'
            );
    }
}