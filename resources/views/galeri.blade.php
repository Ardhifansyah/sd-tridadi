
@extends('layouts.app')

@section('content')

<section class="galeri-hero">

    <div class="container">

        <h1 class="galeri-title">
            Galeri Kegiatan
        </h1>

        <p class="galeri-subtitle">
            Dokumentasi kegiatan SD Negeri Tridadi
        </p>

    </div>

</section>

<section class="galeri-section">

    <div class="container">

        <div class="galeri-grid">

            @forelse($galeris as $galeri)

                <div class="galeri-card">

                    <div class="galeri-image">

                        <img
                            src="{{ asset('uploads/galeri/'.$galeri->gambar) }}"
                            alt="{{ $galeri->judul }}">

                    </div>

                    <div class="galeri-content">

                        <h3>{{ $galeri->judul }}</h3>

                    </div>

                </div>

            @empty

                <div class="galeri-kosong">

                    Belum ada foto galeri.

                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection
