<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profil Sekolah</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f5f7fb;
}

.container{
    width:90%;
    max-width:900px;
    margin:40px auto;
}

.card{
    background:#fff;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

h1{
    color:#0F766E;
    margin-bottom:30px;
}

.form-group{
    margin-bottom:20px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
}

input,
textarea{
    width:100%;
    padding:14px;
    border:1px solid #ddd;
    border-radius:10px;
    font-size:15px;
}

textarea{
    min-height:150px;
    resize:vertical;
}

img{
    width:220px;
    margin-top:15px;
    border-radius:10px;
}

button{

    background:#0F766E;
    color:white;
    border:none;
    padding:14px 25px;
    border-radius:10px;
    cursor:pointer;
    font-size:15px;
}

button:hover{

    background:#115E59;
}

.back{

    margin-left:15px;
    text-decoration:none;
    color:#555;
}

.success{

    background:#DCFCE7;
    color:#166534;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

    </style>

</head>

<body>

<div class="container">

    <div class="card">

        <h1>Edit Profil Sekolah</h1>

        @if(session('success'))

            <div class="success">

                {{ session('success') }}

            </div>

        @endif

        <form
            action="/admin/profil-sekolah/update"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label>Nama Sekolah</label>

                <input
                    type="text"
                    name="nama_sekolah"
                    value="{{ $profil->nama_sekolah }}">

            </div>

            <div class="form-group">

                <label>NPSN</label>

                <input
                    type="text"
                    name="npsn"
                    value="{{ $profil->npsn }}">

            </div>

            <div class="form-group">

                <label>Status</label>

                <input
                    type="text"
                    name="status"
                    value="{{ $profil->status }}">

            </div>

            <div class="form-group">

                <label>Akreditasi</label>

                <input
                    type="text"
                    name="akreditasi"
                    value="{{ $profil->akreditasi }}">

            </div>

            <div class="form-group">

                <label>Tanggal Berdiri</label>

                <input
                    type="date"
                    name="tanggal_berdiri"
                    value="{{ $profil->tanggal_berdiri }}">

            </div>

            <div class="form-group">

                <label>Alamat</label>

                <textarea
                    name="alamat">{{ $profil->alamat }}</textarea>

            </div>

            <div class="form-group">

                <label>Sejarah Sekolah</label>

                <textarea
                    name="sejarah">{{ $profil->sejarah }}</textarea>

            </div>

            <div class="form-group">

                <label>Tujuan Sekolah</label>

                <textarea
                    name="tujuan">{{ $profil->tujuan }}</textarea>

            </div>

            <div class="form-group">

                <label>Struktur Organisasi</label>

                <input
                    type="file"
                    name="struktur_organisasi">

                @if($profil->struktur_organisasi)

                    <img src="{{ asset('uploads/profil/'.$profil->struktur_organisasi) }}">

                @endif

            </div>

            <button type="submit">

                Simpan Perubahan

            </button>

            <a
                href="/admin/dashboard"
                class="back">

                Kembali

            </a>

        </form>

    </div>

</div>

</body>
</html>