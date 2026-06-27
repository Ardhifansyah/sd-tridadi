
@extends('layouts.app')

@section('content')

<section class="guru-hero">

    <div class="guru-header">

        <h1>Guru & Tenaga Kependidikan</h1>

        <p>
            SD Negeri Tridadi
        </p>

    </div>

</section>

<section class="guru-section">

    <div class="container">

        <div class="section-title">

            <h2>Daftar Guru dan Tenaga Kependidikan</h2>

        </div>

        <div class="guru-grid">

            @forelse($gurus as $guru)

                <div class="guru-card">

                    @if($guru->foto)

                        <div class="guru-foto-img">

                            <img
                                src="{{ asset('uploads/guru/'.$guru->foto) }}"
                                alt="{{ $guru->nama }}">

                        </div>

                    @else

                        <div class="guru-foto">

                            Foto Menyusul

                        </div>

                    @endif

                    <h3>{{ $guru->nama }}</h3>

                    <span>{{ $guru->jabatan }}</span>

                    @if($guru->deskripsi)

                        <p class="guru-deskripsi">

                            {{ $guru->deskripsi }}

                        </p>

                    @endif

                </div>

            @empty

                <div class="guru-kosong">

                    Belum ada data guru.

                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection
