```php
<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Berita</title>

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
    max-width:900px;

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
}

input,
select,
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

.preview{

    width:220px;

    border-radius:10px;

    margin-top:10px;

    border:1px solid #ddd;
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

    text-decoration:none;

    color:#64748b;
}

.note{

    background:#ecfeff;

    color:#0F766E;

    padding:12px;

    border-radius:10px;

    margin-bottom:20px;
}

</style>

</head>
<body>

<div class="container">

    <div class="card">

        <h1>Edit Berita / Pengumuman</h1>

        <div class="note">

            Jika tidak ingin mengganti gambar, biarkan kosong.

        </div>

        <form
            action="/admin/berita/update/{{ $berita->id }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label>Judul</label>

                <input
                    type="text"
                    name="judul"
                    value="{{ $berita->judul }}"
                    required>

            </div>

            <div class="form-group">

                <label>Kategori</label>

                <select
                    name="kategori"
                    required>

                    <option
                        value="Berita"
                        {{ $berita->kategori == 'Berita' ? 'selected' : '' }}>

                        Berita

                    </option>

                    <option
                        value="Pengumuman"
                        {{ $berita->kategori == 'Pengumuman' ? 'selected' : '' }}>

                        Pengumuman

                    </option>

                </select>

            </div>

            <div class="form-group">

                <label>Gambar</label>

                <input
                    type="file"
                    name="gambar">

                @if($berita->gambar)

                    <br>

                    <img
                        src="{{ asset('uploads/berita/'.$berita->gambar) }}"
                        class="preview">

                @endif

            </div>

            <div class="form-group">

                <label>Isi Berita / Pengumuman</label>

                <textarea
                    name="isi"
                    rows="10"
                    required>{{ $berita->isi }}</textarea>

            </div>

            <button
                type="submit"
                class="btn">

                Update Data

            </button>

            <a
                href="/admin/berita"
                class="back">

                Kembali

            </a>

        </form>

    </div>

</div>

</body>
</html>
```
