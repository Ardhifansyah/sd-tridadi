@extends('layouts.app')

@section('content')

<!-- HERO PROFIL -->
<section class="profil-hero">

    <div class="profil-header">

        <h1>Profil Sekolah</h1>

        <p>
            Mengenal lebih dekat SD Negeri Tridadi
        </p>

    </div>

</section>

<!-- SEJARAH SEKOLAH -->
<section class="profil-section">

    <div class="container">

        <div class="card-profil">

            <div class="judul-section">
                <h3>📖 Sejarah Singkat Sekolah</h3>
            </div>

            <div class="sejarah-grid">

                <div class="sejarah-foto">

                    <img
                        src="{{ asset('images/sejarah-sekolah.jpg') }}"
                        alt="SD Negeri Tridadi">

                </div>

                <div class="sejarah-text">

                    <p>
                        SD Negeri Tridadi merupakan sekolah dasar negeri yang berada di Desa Tridadi,
                        Kecamatan Loano, Kabupaten Purworejo, Provinsi Jawa Tengah.
                        Sekolah ini berada di bawah naungan Kementerian Pendidikan,
                        Kebudayaan, Riset, dan Teknologi.
                    </p>

                    <p>
                        SD Negeri Tridadi memiliki peran penting dalam menyediakan layanan
                        pendidikan dasar bagi masyarakat di Desa Tridadi dan wilayah sekitarnya.
                        Melalui kegiatan pendidikan yang dilaksanakan, sekolah berupaya menjadi
                        bagian dari upaya peningkatan kualitas sumber daya manusia di lingkungan
                        masyarakat sekitar.
                    </p>

                    <p>
                        SD Negeri Tridadi telah berdiri sejak tanggal 1 Februari 1958 dan
                        terdaftar secara resmi dengan Nomor Pokok Sekolah Nasional (NPSN)
                        20306165.
                    </p>

                    <p>
                        Dalam upaya menjaga kualitas penyelenggaraan pendidikan,
                        SD Negeri Tridadi telah memperoleh Akreditasi B yang menunjukkan
                        bahwa sekolah telah memenuhi standar mutu pendidikan serta terus
                        berupaya meningkatkan kualitas layanan pendidikan bagi peserta didik.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- IDENTITAS SEKOLAH -->
<section class="profil-section">

    <div class="container">

        <div class="card-profil">

            <div class="judul-section">
                <h3>🏫 Identitas Sekolah</h3>
            </div>

            <div class="identitas-grid">

                <div class="identitas-item">
                    <div class="icon-box">🏫</div>
                    <h4>Nama Sekolah</h4>
                    <p>SD Negeri Tridadi</p>
                </div>

                <div class="identitas-item">
                    <div class="icon-box">🆔</div>
                    <h4>NPSN</h4>
                    <p>20306165</p>
                </div>

                <div class="identitas-item">
                    <div class="icon-box">📘</div>
                    <h4>Status</h4>
                    <p>Sekolah Negeri</p>
                </div>

                <div class="identitas-item">
                    <div class="icon-box">🏅</div>
                    <h4>Akreditasi</h4>
                    <p>B</p>
                </div>

                <div class="identitas-item">
                    <div class="icon-box">📅</div>
                    <h4>Tanggal Berdiri</h4>
                    <p>1 Februari 1958</p>
                </div>

                <div class="identitas-item">
                    <div class="icon-box">📍</div>
                    <h4>Alamat</h4>
                    <p>
                        Desa Tridadi, Kecamatan Loano,
                        Kabupaten Purworejo, Jawa Tengah
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- TUJUAN SEKOLAH -->
<section class="profil-section">

    <div class="container">

        <div class="card-profil">

            <div class="judul-section">
                <h3>🎯 Tujuan Sekolah</h3>
            </div>

            <div class="tujuan-grid">

                <div>

                    <ol>

                        <li>
                            Mengembangkan budaya sekolah yang religius melalui
                            kegiatan keagamaan dengan mengoptimalkan sarana
                            prasarana sekolah.
                        </li>

                        <li>
                            Menyelenggarakan sistem penilaian akuntabel dan
                            mengarah ke sistem digitalisasi ramah anak.
                        </li>

                        <li>
                            Meningkatkan simpati dan empati peserta didik
                            dalam kepedulian sosial.
                        </li>

                        <li>
                            Merancang pembelajaran yang bangga akan potensi
                            lingkungan dan daerah.
                        </li>

                    </ol>

                </div>

                <div>

                    <ol start="5">

                        <li>
                            Menerapkan pondasi gotong royong dalam kegiatan
                            kelas hingga sekolah.
                        </li>

                        <li>
                            Melaksanakan pembelajaran untuk mengasah
                            kemampuan literasi dan numerasi.
                        </li>

                        <li>
                            Mempertahankan prestasi yang telah dicapai
                            sebelumnya.
                        </li>

                        <li>
                            Memiliki rasa tanggung jawab terhadap
                            kelestarian alam sekitar.
                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- JUMLAH SISWA -->
<section class="profil-section">

    <div class="container">

        <div class="card-profil">

            <div class="judul-section">

                <h3>📊 Jumlah Siswa</h3>

            </div>

            <table class="table-siswa">

                <thead>

                    <tr>

                        <th>Tahun</th>
                        <th>Jumlah Siswa</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($jumlahSiswas as $item)

                        <tr>

                            <td>{{ $item->tahun }}</td>

                            <td>{{ $item->jumlah }}</td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="2">

                                Data belum tersedia.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</section>
<!-- STRUKTUR ORGANISASI -->
<section class="profil-section">

    <div class="container">

        <div class="card-profil">

            <div class="judul-section">
                <h3>👥 Struktur Organisasi</h3>
            </div>

            <div class="struktur-wrapper">

                <img
                    src="{{ asset('images/struktur-organisasi.png') }}"
                    alt="Struktur Organisasi"
                    class="struktur-img">

            </div>

        </div>

    </div>

</section>

@endsection