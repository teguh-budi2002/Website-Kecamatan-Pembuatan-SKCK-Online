<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kecamatan | @yield('title')</title>
    {{-- MDB --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>

<body class="antialiased">
    @include('sweetalert::alert')
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="--mdb-bg-opacity: 0.1;">
        <div class="container-fluid p-2">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <div class="left_item d-flex align-items-center">
                    <a class="navbar-brand mt-2 mt-lg-0" href="#">
                        <img src="{{ asset('img/logo_kec_sidoarjo.png') }}" height="45"
                    alt="logo_kec_sidaorjo" loading="lazy" />
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ URL('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ URL('visi-misi') }}">Visi & Misi</a>
                        </li>
                    </ul>
                </div>
                @if (Auth::check())
                <div class="right_item d-flex align-items-center justify-content-center">
                    <p class="me-3 mt-3 fw-bold">{{ Auth::user()->fullname }}</p>
                    <!-- Avatar -->
                    <form action="{{ URL('/logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" href="#">Logout</button>
                    </form>
                </div>
                @else
                <div class="right_item">
                    <a href="{{ URL('login') }}" class="btn btn-primary">LOGIN</a>
                </div>
                @endif
            </div>
        </div>
    </nav>
    <main style="background-color: hsl(0, 0%, 96%);">
        @yield('content')
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    @stack('js')
</body>

</html>
