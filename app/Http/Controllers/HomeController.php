<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\JumlahSiswa;

class HomeController extends Controller
{
    public function index()
    {
        $home = HomeSetting::first();

        $beritas = Berita::where('kategori', 'Berita')
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact(
            'home',
            'beritas'
        ));
    }

    public function profil()
    {
        $jumlahSiswas = JumlahSiswa::orderBy('tahun', 'desc')->get();

        return view('profil', compact('jumlahSiswas'));
    }

    public function guru()
    {
        $gurus = Guru::all();

        return view('guru', compact('gurus'));
    }

    public function galeri()
    {
        $galeris = Galeri::latest()->get();

        return view('galeri', compact('galeris'));
    }

    public function berita()
    {
        $pengumuman = Berita::where('kategori', 'Pengumuman')
            ->latest()
            ->get();

        $berita = Berita::where('kategori', 'Berita')
            ->latest()
            ->get();

        return view('berita', compact(
            'pengumuman',
            'berita'
        ));
    }

    public function kontak()
    {
        return view('kontak');
    }
}