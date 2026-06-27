<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:#f4f7fb;

}

.wrapper{

    display:flex;

}

/* ==========================
SIDEBAR
========================== */

.sidebar{

    width:260px;

    min-height:100vh;

    background:linear-gradient(180deg,#0F766E,#115E59);

    position:fixed;

    color:#fff;

}

.logo{

    padding:35px 20px;

    text-align:center;

    border-bottom:1px solid rgba(255,255,255,.15);

}

.logo h2{

    font-size:33px;

    font-weight:700;

}

.logo p{

    margin-top:8px;

    opacity:.8;

}

.menu{

    padding:20px;

}

.menu a{

    display:flex;

    align-items:center;

    gap:14px;

    color:white;

    text-decoration:none;

    padding:15px 18px;

    border-radius:12px;

    margin-bottom:10px;

    transition:.3s;

    font-size:16px;

}

.menu a i{

    width:22px;

}

.menu a:hover{

    background:rgba(255,255,255,.15);

    transform:translateX(5px);

}

/* ==========================
CONTENT
========================== */

.content{

    margin-left:260px;

    width:100%;

    padding:35px;

}

.topbar{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:35px;

}

.topbar h1{

    font-size:45px;

    color:#0F766E;

}

.admin-box{

    background:#fff;

    padding:14px 25px;

    border-radius:15px;

    box-shadow:0 10px 25px rgba(0,0,0,.05);

    font-weight:600;

}

/* ==========================
STATISTIC CARD
========================== */

.cards{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:25px;

    margin-bottom:35px;

}

.card{

    background:white;

    border-radius:20px;

    padding:28px;

    box-shadow:0 15px 30px rgba(0,0,0,.06);

    display:flex;

    justify-content:space-between;

    align-items:center;

}

.card-left h4{

    color:#64748b;

    font-size:16px;

    margin-bottom:10px;

}

.card-left h2{

    color:#0F766E;

    font-size:45px;

}

.icon{

    width:70px;

    height:70px;

    border-radius:18px;

    display:flex;

    align-items:center;

    justify-content:center;

    color:white;

    font-size:28px;

}

.guru{

    background:#0F766E;

}

.berita{

    background:#0EA5E9;

}

.galeri{

    background:#F59E0B;

}

/* ==========================
LAYOUT
========================== */

.dashboard-grid{

    display:grid;

    grid-template-columns:2fr 1fr;

    gap:30px;

}
/* ==========================
AKTIVITAS
========================== */

.activity{

    background:#fff;

    border-radius:20px;

    padding:30px;

    box-shadow:0 15px 30px rgba(0,0,0,.06);

}

.activity h2{

    color:#0F766E;

    margin-bottom:25px;

    font-size:28px;

}

.activity table{

    width:100%;

    border-collapse:collapse;

}

.activity th{

    background:#0F766E;

    color:white;

    padding:16px;

    text-align:left;

    font-size:15px;

}

.activity td{

    padding:16px;

    border-bottom:1px solid #ECECEC;

    color:#475569;

}

.activity tr:hover{

    background:#F8FAFC;

}

/* ==========================
RINGKASAN
========================== */

.summary{

    background:white;

    border-radius:20px;

    padding:30px;

    box-shadow:0 15px 30px rgba(0,0,0,.06);

}

.summary h2{

    color:#0F766E;

    margin-bottom:25px;

    font-size:28px;

}

.summary ul{

    list-style:none;

}

.summary li{

    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:14px 0;

    border-bottom:1px solid #ECECEC;

    color:#334155;

}

.summary li:last-child{

    border:none;

}

.badge{

    background:#DCFCE7;

    color:#166534;

    padding:6px 14px;

    border-radius:30px;

    font-size:13px;

    font-weight:600;

}

/* ==========================
INFO BOX
========================== */

.info-card{

    margin-top:25px;

    background:linear-gradient(135deg,#0F766E,#14B8A6);

    color:white;

    border-radius:20px;

    padding:30px;

}

.info-card h3{

    margin-bottom:15px;

    font-size:24px;

}

.info-card p{

    line-height:1.8;

    opacity:.95;

}

/* ==========================
RESPONSIVE
========================== */

@media(max-width:1200px){

.cards{

grid-template-columns:1fr;

}

.dashboard-grid{

grid-template-columns:1fr;

}

}

@media(max-width:900px){

.sidebar{

width:220px;

}

.content{

margin-left:220px;

padding:20px;

}

.topbar h1{

font-size:34px;

}

}

@media(max-width:768px){

.sidebar{

display:none;

}

.content{

margin-left:0;

}

.cards{

grid-template-columns:1fr;

}

.dashboard-grid{

grid-template-columns:1fr;

}

}

</style>

</head>

<body>

<div class="wrapper">

<!-- SIDEBAR -->

<div class="sidebar">

<div class="logo">

<h2>SD Tridadi</h2>

<p>Administrator</p>

</div>

<div class="menu">

<a href="/admin/dashboard">
<i class="fa-solid fa-house"></i>
Dashboard
</a>

<a href="/admin/home-setting">
<i class="fa-solid fa-image"></i>
Beranda
</a>

<a href="/admin/profil-sekolah">
<i class="fa-solid fa-school"></i>
Profil Sekolah
</a>

<a href="/admin/jumlah-siswa">
<i class="fa-solid fa-users"></i>
Jumlah Siswa
</a>

<a href="/admin/guru">
<i class="fa-solid fa-user-tie"></i>
Guru
</a>

<a href="/admin/berita">
<i class="fa-solid fa-newspaper"></i>
Berita
</a>

<a href="/admin/galeri">
<i class="fa-solid fa-images"></i>
Galeri
</a>

<a href="/admin/logout">
<i class="fa-solid fa-right-from-bracket"></i>
Logout
</a>

</div>

</div>

<!-- CONTENT -->

<div class="content">

<div class="topbar">

<h1>Dashboard</h1>

<div class="admin-box">

{{ Session::get('admin_name') }}

</div>

</div>

<div class="cards">

<div class="card">

<div class="card-left">

<h4>Total Guru</h4>

<h2>{{ $totalGuru }}</h2>

</div>

<div class="icon guru">

<i class="fa-solid fa-user-tie"></i>

</div>

</div>

<div class="card">

<div class="card-left">

<h4>Total Berita</h4>

<h2>{{ $totalBerita }}</h2>

</div>

<div class="icon berita">

<i class="fa-solid fa-newspaper"></i>

</div>

</div>

<div class="card">

<div class="card-left">

<h4>Total Galeri</h4>

<h2>{{ $totalGaleri }}</h2>

</div>

<div class="icon galeri">

<i class="fa-solid fa-images"></i>

</div>

</div>

</div>

<div class="dashboard-grid">
    <!-- AKTIVITAS -->

<div class="activity">

    <h2>
        Aktivitas Terbaru
    </h2>

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Kegiatan</th>

                <th>Tanggal</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>1</td>

                <td>Jumlah Guru telah tersimpan pada sistem.</td>

                <td>{{ date('d M Y') }}</td>

            </tr>

            <tr>

                <td>2</td>

                <td>Data Berita berhasil dimuat.</td>

                <td>{{ date('d M Y') }}</td>

            </tr>

            <tr>

                <td>3</td>

                <td>Galeri berhasil dimuat.</td>

                <td>{{ date('d M Y') }}</td>

            </tr>

        </tbody>

    </table>

</div>

<!-- RINGKASAN -->

<div>

    <div class="summary">

        <h2>

            Ringkasan Website

        </h2>

        <ul>

            <li>

                Beranda

                <span class="badge">

                    Aktif

                </span>

            </li>

            <li>

                Profil Sekolah

                <span class="badge">

                    Aktif

                </span>

            </li>

            <li>

                Guru

                <span class="badge">

                    {{ $totalGuru }}

                </span>

            </li>

            <li>

                Berita

                <span class="badge">

                    {{ $totalBerita }}

                </span>

            </li>

            <li>

                Galeri

                <span class="badge">

                    {{ $totalGaleri }}

                </span>

            </li>

            <li>

                Jumlah Siswa

                <span class="badge">

                    Aktif

                </span>

            </li>

        </ul>

    </div>

    <div class="info-card">

        <h3>

            Selamat Datang 👋

        </h3>

        <p>

            Selamat datang di Dashboard Administrator Website
            SD Negeri Tridadi.

            Gunakan menu di sebelah kiri untuk mengelola
            Beranda, Profil Sekolah, Guru,
            Berita, Galeri, serta data Jumlah Siswa.

        </p>

    </div>

</div>

</div>

</div>

</div>

</body>

</html>
</div>