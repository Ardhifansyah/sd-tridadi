@extends('layouts.app')

@section('content')

<section class="berita-hero">

    <div class="container">

        <h1>Berita & Pengumuman</h1>

        <p>
            Informasi terbaru SD Negeri Tridadi
        </p>

    </div>

</section>

<section class="berita-section">

    <div class="container">

      <h2 class="judul-bagian">
    Pengumuman
</h2>

<div class="pengumuman-list">

@foreach($pengumuman as $item)

<div class="pengumuman-card">

    <div class="pengumuman-content">

        <span class="badge-pengumuman">
            Pengumuman
        </span>

        <h3>{{ $item->judul }}</h3>

        <p>{{ $item->isi }}</p>

        <small>
            {{ $item->created_at->format('d M Y') }}
        </small>

    </div>

</div>

@endforeach

</div>

   <h2 class="judul-bagian berita-title">
    Berita
</h2>

<div class="berita-grid">

@foreach($berita as $item)

<div class="berita-card">

    @if($item->gambar)

    <img
        src="{{ asset('uploads/berita/'.$item->gambar) }}"
        class="berita-img">

    @endif

    <div class="berita-content">

        <span class="badge-berita">
            Berita
        </span>

        <h3>{{ $item->judul }}</h3>

        <p>
            {{ Str::limit($item->isi,120) }}
        </p>

        <small>
            {{ $item->created_at->format('d M Y') }}
        </small>

    </div>

</div>

@endforeach

</div>

    </div>

</section>

@endsection