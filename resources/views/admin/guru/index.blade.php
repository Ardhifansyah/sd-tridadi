
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola Guru</title>

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
    width:90%;
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

.btn{

    background:#0F766E;
    color:white;

    text-decoration:none;

    padding:12px 20px;

    border-radius:10px;

    font-weight:600;
}

.btn:hover{
    background:#115E59;
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

table th{

    background:#0F766E;

    color:white;

    padding:15px;
}

table td{

    padding:15px;

    border-bottom:1px solid #eee;
}

img{

    width:70px;
    height:70px;

    object-fit:cover;

    border-radius:50%;
}

.edit{

    background:#14B8A6;
    color:white;

    padding:8px 12px;

    border-radius:8px;

    text-decoration:none;
}

.hapus{

    background:#dc2626;
    color:white;

    padding:8px 12px;

    border-radius:8px;

    text-decoration:none;
}

.success{

    background:#dcfce7;

    color:#166534;

    padding:15px;

    border-radius:10px;

    margin-bottom:20px;
}

</style>

</head>
<body>

<div class="container">

    <div class="header">

        <h1>Kelola Guru</h1>

        <a
            href="/admin/guru/create"
            class="btn">

            + Tambah Guru

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
                <th>Foto</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>

            </tr>

            @forelse($gurus as $guru)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>

                    @if($guru->foto)

                        <img src="{{ asset('uploads/guru/'.$guru->foto) }}">

                    @else

                        -

                    @endif

                </td>

                <td>{{ $guru->nama }}</td>

                <td>{{ $guru->jabatan }}</td>

                <td>

                    <a
                        href="/admin/guru/edit/{{ $guru->id }}"
                        class="edit">

                        Edit

                    </a>

                    <a
                        href="/admin/guru/delete/{{ $guru->id }}"
                        class="hapus"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                        Hapus

                    </a>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="5" align="center">

                    Belum ada data guru

                </td>

            </tr>

            @endforelse

        </table>

    </div>

</div>

</body>
</html>