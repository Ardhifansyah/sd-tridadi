<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - SD Negeri Tridadi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{

            min-height:100vh;

            display:flex;

            justify-content:center;

            align-items:center;

            background:
            linear-gradient(
                135deg,
                #0F766E,
                #14B8A6
            );
        }

        .login-container{

            width:100%;
            max-width:430px;

            background:white;

            border-radius:25px;

            padding:40px;

            box-shadow:
            0 20px 50px rgba(0,0,0,.15);
        }

        .logo{

            text-align:center;

            margin-bottom:30px;
        }

        .logo h1{

            color:#0F766E;

            font-size:30px;

            font-weight:800;
        }

        .logo p{

            color:#64748b;

            margin-top:5px;
        }

        .form-group{

            margin-bottom:20px;
        }

        .form-group label{

            display:block;

            margin-bottom:8px;

            font-weight:600;

            color:#334155;
        }

        .form-group input{

            width:100%;

            padding:14px;

            border:1px solid #cbd5e1;

            border-radius:10px;

            font-size:15px;
        }

        .form-group input:focus{

            outline:none;

            border-color:#0F766E;
        }

        .btn-login{

            width:100%;

            border:none;

            padding:15px;

            border-radius:10px;

            cursor:pointer;

            color:white;

            font-weight:600;

            font-size:16px;

            background:
            linear-gradient(
                135deg,
                #0F766E,
                #14B8A6
            );
        }

        .btn-login:hover{

            opacity:.9;
        }

        .forgot{

            text-align:center;

            margin-top:20px;
        }

        .forgot a{

            color:#0F766E;

            text-decoration:none;

            font-weight:600;
        }

        .alert{

            background:#fee2e2;

            color:#dc2626;

            padding:12px;

            border-radius:10px;

            margin-bottom:20px;
        }

    </style>

</head>

<body>

    <div class="login-container">

        <div class="logo">

            <h1>SD Negeri Tridadi</h1>

            <p>Halaman Login Administrator</p>

        </div>

        @if(session('error'))

            <div class="alert">

                {{ session('error') }}

            </div>

        @endif

        <form action="/admin/login" method="POST">

            @csrf

            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    required
                >

            </div>

            <div class="form-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    required
                >

            </div>

            <button
                type="submit"
                class="btn-login">

                Login

            </button>

        </form>

        <div class="forgot">

            <a href="#">
                Lupa Password?
            </a>

        </div>

    </div>

</body>
</html>