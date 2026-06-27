<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola Jumlah Siswa</title>

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
    max-width:1200px;
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
    background:#DCFCE7;
    color:#166534;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

thead{
    background:#0F766E;
    color:white;
}

th,td{
    padding:18px;
    text-align:center;
}

tbody tr{
    border-bottom:1px solid #eee;
}

tbody tr:hover{
    background:#f8fafc;
}

.btn-edit{
    background:#0EA5E9;
    color:white;
    padding:8px 15px;
    border-radius:8px;
    text-decoration:none;
    margin-right:5px;
}

.btn-hapus{
    background:#DC2626;
    color:white;
    padding:8px 15px;
    border-radius:8px;
    text-decoration:none;
}

.kosong{
    text-align:center;
    padding:30px;
}

</style>

</head>
<body>

<div class="container">

    <div class="header">

        <h1>Kelola Jumlah Siswa</h1>

        <a
            href="/admin/jumlah-siswa/create"
            class="btn-tambah">

            + Tambah Data

        </a>

    </div>

    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Tahun</th>

                <th>Jumlah Siswa</th>

                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($jumlahSiswas as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->tahun }}</td>

                <td>{{ $item->jumlah }}</td>

                <td>

                    <a
                        href="/admin/jumlah-siswa/edit/{{ $item->id }}"
                        class="btn-edit">

                        Edit

                    </a>

                    <a
                        href="/admin/jumlah-siswa/delete/{{ $item->id }}"
                        class="btn-hapus"
                        onclick="return confirm('Yakin ingin menghapus data?')">

                        Hapus

                    </a>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="4" class="kosong">

                    Belum ada data jumlah siswa.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>