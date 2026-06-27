```php
<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola Berita & Pengumuman</title>

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
    margin-bottom:25px;
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

.table-box{

    background:white;

    border-radius:20px;

    overflow:hidden;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);
}

table{

    width:100%;
    border-collapse:collapse;
}

th{

    background:#0F766E;
    color:white;

    padding:15px;
}

td{

    padding:15px;

    border-bottom:1px solid #eee;
}

.thumb{

    width:90px;
    height:60px;

    object-fit:cover;

    border-radius:10px;
}

.badge-berita{

    background:#dbeafe;
    color:#1d4ed8;

    padding:6px 12px;

    border-radius:30px;

    font-size:13px;
}

.badge-pengumuman{

    background:#fef3c7;
    color:#b45309;

    padding:6px 12px;

    border-radius:30px;

    font-size:13px;
}

.btn-edit{

    background:#14B8A6;
    color:white;

    text-decoration:none;

    padding:8px 12px;

    border-radius:8px;
}

.btn-hapus{

    background:#dc2626;
    color:white;

    text-decoration:none;

    padding:8px 12px;

    border-radius:8px;
}

</style>

</head>
<body>

<div class="container">

    <div class="header">

        <h1>Kelola Berita & Pengumuman</h1>

        <a
            href="/admin/berita/create"
            class="btn-tambah">

            + Tambah Data

        </a>

    </div>

    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif

    <div class="table-box">

        <table>

            <tr>

                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Aksi</th>

            </tr>

            @forelse($beritas as $berita)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>

                    @if($berita->gambar)

                        <img
                            src="{{ asset('uploads/berita/'.$berita->gambar) }}"
                            class="thumb">

                    @else

                        -

                    @endif

                </td>

                <td>{{ $berita->judul }}</td>

                <td>

                    @if($berita->kategori == 'Berita')

                        <span class="badge-berita">
                            Berita
                        </span>

                    @else

                        <span class="badge-pengumuman">
                            Pengumuman
                        </span>

                    @endif

                </td>

                <td>

                    {{ $berita->created_at->format('d-m-Y') }}

                </td>

                <td>

                    <a
                        href="/admin/berita/edit/{{ $berita->id }}"
                        class="btn-edit">

                        Edit

                    </a>

                    <a
                        href="/admin/berita/delete/{{ $berita->id }}"
                        class="btn-hapus"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                        Hapus

                    </a>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="6" align="center">

                    Belum ada data berita

                </td>

            </tr>

            @endforelse

        </table>

    </div>

</div>

</body>
</html>
```
