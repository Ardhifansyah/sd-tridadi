
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Beranda</title>

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

        input,
        textarea{
            width:100%;
            padding:14px;
            border:1px solid #CBD5E1;
            border-radius:10px;
            font-size:15px;
        }

        textarea{
            resize:vertical;
            min-height:150px;
        }

        .preview{
            margin-top:15px;
        }

        .preview img{
            width:180px;
            border-radius:12px;
            border:3px solid #0F766E;
        }

        .btn{
            background:#0F766E;
            color:white;
            border:none;
            padding:14px 25px;
            border-radius:10px;
            cursor:pointer;
            font-size:15px;
            font-weight:600;
        }

        .btn:hover{
            background:#115E59;
        }

        .back{
            margin-left:15px;
            text-decoration:none;
            color:#64748B;
            font-weight:600;
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

        <h1>Edit Halaman Beranda</h1>

        @if(session('success'))

            <div class="success">

                {{ session('success') }}

            </div>

        @endif

        <form
            action="/admin/home-setting/update"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label>Nama Kepala Sekolah</label>

                <input
                    type="text"
                    name="nama_kepala_sekolah"
                    value="{{ $home->nama_kepala_sekolah }}"
                    required>

            </div>

            <div class="form-group">

                <label>Foto Kepala Sekolah</label>

                <input
                    type="file"
                    name="foto_kepala_sekolah">

                @if($home->foto_kepala_sekolah)

                    <div class="preview">

                        <img
                            src="{{ asset('uploads/home/'.$home->foto_kepala_sekolah) }}">

                    </div>

                @endif

            </div>

            <div class="form-group">

                <label>Sambutan Kepala Sekolah</label>

                <textarea
                    name="sambutan"
                    required>{{ $home->sambutan }}</textarea>

            </div>

            <div class="form-group">

                <label>Visi</label>

                <textarea
                    name="visi"
                    required>{{ $home->visi }}</textarea>

            </div>

            <div class="form-group">

                <label>Misi</label>

                <textarea
                    name="misi"
                    required>{{ $home->misi }}</textarea>

            </div>

            <button
                type="submit"
                class="btn">

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
