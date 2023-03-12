<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
        <!-- Styles -->
        @vite([
            'resources/js/app.js'       
        ])
        <link rel="stylesheet" href="{{ asset('assets-static/owlcarousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-static/css/theme-carousel.css') }}">
        <style>
            .space-section {
                height: 6rem;
            }
            .avatar-list {
                padding: 0%;
                list-style: none;
                display: inline;
            }
            .owl-item img {
                width: initial!important;
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
                        <h1 class="fw-bold">Dapatkan Insight Baru</h1>
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
                <div id="#section2" class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="fw-bold">Berbagai Pilihan Webinar</h1>
                        <p class="fw-semibold text-muted">Kami menyediakan berbagai pilihan webinar untuk menambah wawasan dan pengetahuan sesuai dengan keinginan dan kebutuhan kamu</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0 py-2 fs-5" placeholder="Search...">
                            <span class="input-group-text border-start-0 bg-transparent">
                                <a class="btn btn-transparent btn-search p-0 fs-5"><i class="icofont icofont-search-1"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="section3">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        @foreach($category as $k => $cat)
                        <li class="nav-item @if($k != count($category)) me-2 @endif">
                            <a href="#category{{$k}}" class="nav-link nav-link-category @if($k == 0) active @endif" data-bs-toggle="pill">{{ $cat->category }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content py-2">
                        @foreach($category as $k => $cat)
                        <div id="#category{{$k}}" class="tab-pane fade @if($k == 0) show active @endif">
                            <div class="row align-items-center">
                                @foreach($cat->webinar as $webinar)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="card rounded-lg">
                                        <div class="card-header bg-primary" style="height: 120px">
                                            <img class="mb-1" src="{{ asset('/img/logo_mentify_white.svg') }}" width="90px" alt="mentify">
                                            <h2 class="text-white">{{ $webinar->title }}</h2>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="fw-bold">Speaker</h5>
                                            <p>{{ $webinar->speaker }}</p>
                                            <div class="status-webinar">
                                                <h6 class="fw-bold text-primary">Status Webinar</h6>
                                                <div class="progress">
                                                    <div class="progress-bar w-0" role="progressbar" aria-label="Kuota" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="message-status-webinar" style="font-size: 0.9rem">
                                                    Pendaftaran sampai {{ \Carbon\Carbon::parse($webinar->registration_date)->translatedFormat('d F Y') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <button class="btn btn-warning w-100">Daftar Webinar</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-section"></div>
                <div id="#section4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="fw-bold">4 Keuntungan Mengikuti Webinar Mentify</h1>
                            <p class="">
                                Webinar di mentify menawarkan berbagai keuntungan dibanding belajar di platform lain, berikut beberapa keuntungan yang kamu dapatkan
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="card rounded-2 border-0 shadow-lg" style="height: 15em">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="icofont icofont-play-alt-2 text-primary fs-2 me-3"></i><span class="fs-5"><b>Recording Class</b></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Kamu akan mendapatkan recording class agar kamu dapat mengingat kembali materi dan diskusi yang terjadi di webinar kamu.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card rounded-2 border-0 shadow-lg" style="height: 15em">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="icofont icofont-certificate text-primary fs-2 me-3"></i><span class="fs-5"><b>E-certificate</b></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Webinar yang kamu ikuti akan memberikan e-certifikat yang dapat kamu publikiasikan ke portofolio maupun sosial media kamu.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card rounded-2 border-0 shadow-lg" style="height: 15em">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="icofont icofont-papers text-primary fs-2 me-3"></i><span class="fs-5"><b>Materi Webinar</b></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Materi Webinar dalam bentuk PPT / PDF akan kami berikan agar kamu dfapat kembali mempelajari materi lebih lanjut.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card rounded-2 border-0 shadow-lg" style="height: 15em">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="icofont icofont-badge text-primary fs-2 me-3"></i><span class="fs-5"><b>Interactive Session with Expert</b></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Kamu berkesempatan langsung untuk berinteraksi dengan Expert dalam meningkatkan skill dan knowledge kamu.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-section"></div>
                <div id="#section-4">
                    <h1 class="text-center fw-bold">Apa Kata <span class="text-primary">Mereka</span> yang telah berpartisipasi?</h1>
                    <div class="owl-carousel owl-theme">
                        @foreach ($testimony as $key => $item)
                        <div class="item p-3">
                            <div class="card p-4 border-0 shadow">
                                <div class="card-body">
                                    <div style="py-3">
                                        <img class="img" src="{{ asset('/img/twoquotes_83742.png') }}" height="30rem" alt='"'>
                                    </div>
                                    <p class="fw-bold text-muted my-3">{!! $item->testimony !!}</p>
                                    <p class="mt-5">
                                        <span class="fw-semibold">{{ $item->tester_name }}</span><br/>
                                        <span class="fw-bold fs-4">{{ $item->tester_job }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="space-section"></div>
        <footer class="bg-footer w-100">
            <div class="container py-3">
                <div class="space-section"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('img/logo_mentify.svg') }}" alt="Mentify" height="60px"><br/>
                        </a>
                        <p class="fw-bold text-muted">Copyright &copy; 2021 Mentify by Giza Lab</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Sitemap</h4>
                        <div class="d-flex flex-column flex-nowrap fw-bold text-gray">
                            <a href="#" class="btn-link fs-6">Bootcamp</a>
                            <a href="#" class="btn-link fs-6">Mentify Lite</a>
                            <a href="#" class="btn-link fs-6">Karya Alumni</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>About</h4>
                        <div class="d-flex flex-column flex-nowrap fw-bold text-gray">
                            <a href="#" class="btn-link fs-6">Bootcamp</a>
                            <a href="#" class="btn-link fs-6">Mentify Lite</a>
                            <a href="#" class="btn-link fs-6">Karya Alumni</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    {{-- <script type="module">
        
    </script> --}}
    <script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
    <script src="{{ asset('assets-static/owlcarousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop:true,
                autoplay: true,
                // responsive: true,
            });
        });
    </script>
</html>
