
<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Jumlah Siswa</title>

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
    max-width:700px;
    margin:40px auto;
}

.card{
    background:white;
    padding:35px;
    border-radius:20px;
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

input{
    width:100%;
    padding:14px;
    border:1px solid #CBD5E1;
    border-radius:10px;
    font-size:15px;
}

.btn{
    background:#0F766E;
    color:white;
    border:none;
    padding:14px 25px;
    border-radius:10px;
    cursor:pointer;
    font-weight:600;
}

.btn:hover{
    background:#115E59;
}

.back{
    margin-left:10px;
    color:#64748B;
    text-decoration:none;
}

</style>

</head>
<body>

<div class="container">

    <div class="card">

        <h1>Edit Jumlah Siswa</h1>

        <form
            action="/admin/jumlah-siswa/update/{{ $jumlahSiswa->id }}"
            method="POST">

            @csrf

            <div class="form-group">

                <label>Tahun</label>

                <input
                    type="number"
                    name="tahun"
                    value="{{ $jumlahSiswa->tahun }}"
                    required>

            </div>

            <div class="form-group">

                <label>Jumlah Siswa</label>

                <input
                    type="number"
                    name="jumlah"
                    value="{{ $jumlahSiswa->jumlah }}"
                    required>

            </div>

            <button
                type="submit"
                class="btn">

                Update Data

            </button>

            <a
                href="/admin/jumlah-siswa"
                class="back">

                Kembali

            </a>

        </form>

    </div>

</div>

</body>
</html>