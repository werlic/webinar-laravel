<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <!-- Styles -->
        @vite(['resources/js/app.js'])
        <style>
            .space-section {
                height: 6rem;
            }
        </style>
    </head>
    <body class="antialiased">
        <header class="navbar navbar-expand-lg navbar-light shadow py-3">
            <div class="container flex-row flex-wrap">
                <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" width="168px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                    <ul class="navbar-nav mt-2 text-end">
                        <li class="nav-item mx-1 mb-2">
                            <a class="btn btn-primary fw-semibold" aria-current="page" href="#">Daftar</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="btn btn-secondary fw-semibold text-muted" href="#">Login</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="container">
                <div id="#section1" class="row py-lg-5 py-md-5 align-items-center">
                    <div class="col-lg-5 col-12 pe-5">
                        <h1 class="fw-bold">Dapatkan Insight baru</h1>
                        <p class="mb-lg-4 mb-2 mt-lg-5 mt-sm-3 fw-bold text-muted">
                            Temukan webinar yang cocok untukmu dan dapatkan kesempatan untuk mengembangkan diri Anda! Tidak masalah apa tujuan Anda, webinar kami menawarkan sesuatu untuk setiap orang. Dengan menghadiri webinar kami, Anda akan mendapatkan wawasan baru, informasi terbaru, dan keterampilan yang dapat Anda terapkan dalam kehidupan sehari-hari Anda. Jadi, jangan ragu untuk bergabung dengan webinar kami dan temukan topik yang paling cocok untukmu!
                        </p>
                        <a href="#" class="btn btn-primary px-5 py-2 fw-bold fs-5">Daftar sekarang</a>
                    </div>
                    <div class="col-lg-7 col-12 d-md-none d-sm-none d-xs-none d-lg-block">
                        <img class="img rounded" src="{{ asset('/img/webinar_example.svg') }}" alt="" width="90%">
                    </div>
                </div>
                <div class="space-section"></div>
                <div id="#section2" class="row">
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur architecto obcaecati corporis rerum velit exercitationem enim quia cum impedit labore ipsam est minus rem cumque harum nobis, blanditiis, nisi hic.</p>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </body>
</html>
