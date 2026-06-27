
@extends('layouts.app')

@section('content')

<section class="hero">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <span class="hero-tag">
            WEBSITE RESMI
        </span>

        <h1>
            SD Negeri Tridadi
        </h1>

        <p>
            Mewujudkan peserta didik yang bertaqwa,
            cerdas, terampil, berwawasan global,
            dan peduli lingkungan.
        </p>

        <a href="/profil" class="hero-btn">
            Lebih Mengenal Kami
        </a>

    </div>

</section>

<section class="profil-sekolah">

    <div class="container profil-grid">

        <div class="kepsek-area">

            @if($home && $home->foto_kepala_sekolah)

                <img
                class="foto-kepsek"
                    src="{{ asset('uploads/home/'.$home->foto_kepala_sekolah) }}"
                    alt="{{ $home->nama_kepala_sekolah }}">

            @else

                <img
                    src="{{ asset('images/default-kepsek.png') }}"
                    alt="Kepala Sekolah">

            @endif

            <div class="kepsek-info">

                <h3>Kepala Sekolah</h3>

                <h2>
                    {{ $home->nama_kepala_sekolah ?? '-' }}
                </h2>

                <span>
                    Kepala SD Negeri Tridadi
                </span>

                <div class="mini-line"></div>

                <p>
                    {{ $home->sambutan ?? '-' }}
                </p>

            </div>

        </div>

        <div class="visi-misi-box">

            <div class="visi-box">

                <h3>Visi</h3>

                <p>
                    {{ $home->visi ?? '-' }}
                </p>

            </div>

            <div class="divider"></div>

            <div class="misi-box">

                <h3>Misi</h3>

                <p style="white-space: pre-line;">
                    {{ $home->misi ?? '-' }}
                </p>

            </div>

        </div>

    </div>

</section>

<footer>

    <div class="container footer-grid">

        <div>

            <h3>SD Negeri Tridadi</h3>

            <p>
                Desa Tridadi, Kecamatan Loano,
                Kabupaten Purworejo, Jawa Tengah
            </p>

            <p>(0275) 123456</p>

            <p>sdnegeritridadi@gmail.com</p>

        </div>

        <div>

            <h3>Menu Cepat</h3>

            <ul class="footer-menu">

                <li><a href="/">Beranda</a></li>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/guru">Guru</a></li>
                <li><a href="/galeri">Galeri</a></li>
                <li><a href="/berita">Berita</a></li>
                <li><a href="/kontak">Kontak</a></li>

            </ul>

        </div>

        <div>

            <h3>Informasi</h3>

            <p>
                Mari bersama membangun generasi
                cerdas, berkarakter, dan peduli lingkungan.
            </p>

        </div>

    </div>

    <div class="copyright">

        © 2026 SD Negeri Tridadi

    </div>

</footer>

@endsection