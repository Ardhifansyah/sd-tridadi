
<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola Galeri</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
    width:95%;
    max-width:1300px;
    margin:40px auto;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.header h1{
    color:#0F766E;
}

.btn-tambah{

    background:#0F766E;
    color:white;

    text-decoration:none;

    padding:12px 20px;

    border-radius:10px;

    font-weight:600;
}

.btn-tambah:hover{
    background:#115E59;
}

.success{

    background:#dcfce7;
    color:#166534;

    padding:15px;

    border-radius:10px;

    margin-bottom:20px;
}

.gallery-grid{

    display:grid;

    grid-template-columns:
    repeat(auto-fill,minmax(280px,1fr));

    gap:25px;
}

.card{

    background:white;

    border-radius:20px;

    overflow:hidden;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);
}

.card img{

    width:100%;
    height:220px;

    object-fit:cover;
}

.card-body{

    padding:20px;
}

.card-body h3{

    color:#0F766E;

    margin-bottom:15px;
}

.actions{

    display:flex;
    gap:10px;
}

.btn-edit{

    background:#14B8A6;
    color:white;

    text-decoration:none;

    padding:8px 15px;

    border-radius:8px;

    font-size:14px;
}

.btn-hapus{

    background:#dc2626;
    color:white;

    text-decoration:none;

    padding:8px 15px;

    border-radius:8px;

    font-size:14px;
}

.empty{

    background:white;

    padding:40px;

    border-radius:20px;

    text-align:center;

    color:#64748b;
}

</style>

</head>
<body>

<div class="container">

    <div class="header">

        <h1>Kelola Galeri</h1>

        <a
            href="/admin/galeri/create"
            class="btn-tambah">

            + Tambah Foto

        </a>

    </div>

    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif

    @if($galeris->count() > 0)

        <div class="gallery-grid">

            @foreach($galeris as $galeri)

            <div class="card">

                <img
                    src="{{ asset('uploads/galeri/'.$galeri->gambar) }}"
                    alt="{{ $galeri->judul }}">

                <div class="card-body">

                    <h3>{{ $galeri->judul }}</h3>

                    <div class="actions">

                        <a
                            href="/admin/galeri/edit/{{ $galeri->id }}"
                            class="btn-edit">

                            Edit

                        </a>

                        <a
                            href="/admin/galeri/delete/{{ $galeri->id }}"
                            class="btn-hapus"
                            onclick="return confirm('Yakin ingin menghapus foto ini?')">

                            Hapus

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    @else

        <div class="empty">

            Belum ada foto galeri

        </div>

    @endif

</div>

</body>
</html>
