@extends('layouts.app')

@section('content')

<section class="kontak-hero">

    <div class="kontak-header">

        <h1>Kontak Kami</h1>

        <p>
            Hubungi SD Negeri Tridadi
        </p>

    </div>

</section>

<section class="kontak-section">

    <div class="container">

        <div class="kontak-grid">

            <div class="info-kontak">

                <h2>Informasi Kontak</h2>

                <div class="info-item">
                    <strong>📍 Alamat</strong>
                    <p>
                        Desa Tridadi, Kecamatan Loano,
                        Kabupaten Purworejo,
                        Provinsi Jawa Tengah
                    </p>
                </div>

                <div class="info-item">
                    <strong>📧 Email</strong>
                    <p>
                        sdnegeritridadi@gmail.com
                    </p>
                </div>

                <div class="info-item">
                    <strong>📞 Telepon</strong>
                    <p>
                        (0275) 123456
                    </p>
                </div>

                <div class="info-item">
                    <strong>🕒 Jam Operasional</strong>
                    <p>
                        Senin - Sabtu
                        <br>
                        07.00 - 14.00 WIB
                    </p>
                </div>

            </div>


        </div>

    </div>

</section>

<section class="map-section">

    <div class="container">

        <div class="section-title">
            <h2>Lokasi Sekolah</h2>
        </div>

        <div class="map-card">

            <div class="map-box">
</div>
    <iframe
        src="https://maps.google.com/maps?q=SD%20N%20Tridadi%20Purworejo&t=&z=17&ie=UTF8&iwloc=&output=embed"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

</div>

        </div>

    </div>

</section>

@endsection