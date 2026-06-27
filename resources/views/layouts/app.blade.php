<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri Tridadi</title>

<meta name="description" content="Website Resmi SD Negeri Tridadi">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
<header class="navbar">

    <div class="logo-area">

        <img
            src="{{ asset('images/logo.png') }}"
            alt="Logo SD"
            class="logo"
        >

        <div class="school-name">

            <h2>SD Negeri Tridadi</h2>

            <span>
                Loano • Purworejo
            </span>

        </div>

    </div>

    <nav>

        <ul class="menu">

            <li>
                <a href="/">Beranda</a>
            </li>

            <li>
                <a href="/profil">Profil</a>
            </li>

            <li>
                <a href="/guru">Guru</a>
            </li>

            <li>
                <a href="/galeri">Galeri</a>
            </li>

            <li>
                <a href="/berita">Berita</a>
            </li>

            <li>
                <a href="/kontak">Kontak</a>
            </li>

        </ul>

    </nav>

</header>

<main>

    @yield('content')


</main>

</body>
</html>
