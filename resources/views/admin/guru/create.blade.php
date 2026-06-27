
<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Guru</title>

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
    max-width:800px;

    margin:40px auto;
}

.card{

    background:white;

    padding:35px;

    border-radius:20px;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);
}

h1{

    color:#0F766E;

    margin-bottom:25px;
}

.form-group{

    margin-bottom:20px;
}

label{

    display:block;

    margin-bottom:8px;

    font-weight:600;

    color:#334155;
}

input,
textarea{

    width:100%;

    padding:14px;

    border:1px solid #cbd5e1;

    border-radius:10px;

    font-size:15px;
}

textarea{

    resize:none;
}

.btn{

    border:none;

    background:#0F766E;

    color:white;

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

    text-decoration:none;

    color:#64748b;
}

.error{

    color:red;

    margin-top:5px;

    font-size:14px;
}

</style>

</head>
<body>

<div class="container">

    <div class="card">

        <h1>Tambah Guru</h1>

        <form
            action="/admin/guru/store"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label>Nama Guru</label>

                <input
                    type="text"
                    name="nama"
                    required>

                @error('nama')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">

                <label>Jabatan</label>

                <input
                    type="text"
                    name="jabatan"
                    required>

                @error('jabatan')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">

                <label>Foto Guru</label>

                <input
                    type="file"
                    name="foto">

            </div>

            <div class="form-group">

                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    rows="6"
                    required></textarea>

                @error('deskripsi')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <button
                type="submit"
                class="btn">

                Simpan Data

            </button>

            <a
                href="/admin/guru"
                class="back">

                Kembali

            </a>

        </form>

    </div>

</div>

</body>
</html>