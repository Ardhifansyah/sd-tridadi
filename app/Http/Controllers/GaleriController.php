<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();

        return view(
            'admin.galeri.index',
            compact('galeris')
        );
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(
            public_path('uploads/galeri'),
            $gambar
        );

        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $gambar
        ]);

        return redirect('/admin/galeri')
            ->with(
                'success',
                'Foto galeri berhasil ditambahkan'
            );
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view(
            'admin.galeri.edit',
            compact('galeri')
        );
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('gambar')) {

            $gambar = time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/galeri'),
                $gambar
            );

            $galeri->gambar = $gambar;
        }

        $galeri->judul = $request->judul;

        $galeri->save();

        return redirect('/admin/galeri')
            ->with(
                'success',
                'Data galeri berhasil diubah'
            );
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if(
            $galeri->gambar &&
            file_exists(
                public_path(
                    'uploads/galeri/'.$galeri->gambar
                )
            )
        ){
            unlink(
                public_path(
                    'uploads/galeri/'.$galeri->gambar
                )
            );
        }

        $galeri->delete();

        return redirect('/admin/galeri')
            ->with(
                'success',
                'Data galeri berhasil dihapus'
            );
    }
}