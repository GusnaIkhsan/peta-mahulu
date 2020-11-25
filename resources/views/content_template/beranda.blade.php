@extends('layout_template.app_template')
@extends('layout_template.header_template')
@extends('layout_template.footer_template')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="overlay overlay-bg" style="background: rgba(0, 0, 0, 0.5); width: 100%;">
        </div>
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-6 col-md-6">
                <h1>
                    Sistem Informasi <br>
                    Penataan Ruang <br>
                </h1>
                <p class="text-white text-uppercase">
                    Kabupaten Mahakam Ulu
                </p>
            </div>
            <div class="banner-img col-lg-6 col-md-6">
                <img class="img-fluid pull-right" src="{{asset('assets/template_components/img/2bupati.png')}}" alt="" style="width: 90%">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{asset('assets/template_components/img/about-img.png')}}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Sistem Informasi Penataan Ruang</h1>
                {{-- <h5>
                    Membangun Mahulu Untuk Semua Sejahtera Berkeadilan
                </h5> --}}
                <p>
                    Sistem Informasi Penataan Ruang Kabupaten Mahakam Ulu, atau yang biasa disebut SIPR
                    merupakan sebuah aplikasi ketataruangan yang berbasis web atau WebGIS. SIPR dibangun dengan
                    semangat bahwa tata ruang di Kabupaten Mahakam Ulu menuju sebuah sistem yang transparan,
                    terstandar, dan terkoneksi secara internal di daerah, pada tingkat provinsi, dan bahkan nasional
                </p>
                <p>
                    Keterbukaan Informasi Publik bertujuan untuk mendorong partisipasi masyarakat dalam proses
                    pengambilan kebijakan publik dan meningkatkan peran aktif masyarakat dalam pengambilan kebijakan
                    publik, serta mewujudkan tatakelola pemerintahan yang baik dan bertanggungjawab (good governance)
                    melalui penerapan prinsip-prinsip akuntabilitas, transparansi dan supremasi hukum serta melibatkan
                    partisipasi masyarakat dalam setiap proses kebijakan publik.
                </p>
                <p>
                    Untuk itu, akses informasi publik perlu dipermudah berdasarkan pedoman pengelolaan data dan
                    informasi dengan tetap menjaga prinsip kehati-hatian demi kepentingan kelangsungan kehidupan
                    perkotaan yang lebih luas.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


<!-- Start about-video Area -->
{{-- <section class="about-video-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 about-video-left">
                <h1>
                    Misi Kabupaten <br>
                    Mahakam Ulu
                </h1>
                <ol class="unordered-list">
                    <li><span>Membangun dan meningkatkan saran dan prasarana publik berkualitas,
                        adil berkelanjutan dan berwawasan lingkungan.</span></li>
                    <li><span>Meningkatkan taraf hidup masyarakat dengan memanfaatkan potensi sumber daya alam, memberdayakan usaha ekonomi kecil menengah yang berbasis kerakyatan
                       dan perluasaan lapangan kerja termasuk pengembangan ekonomi kreatif berbasis pariwisata dan kearifan lokal.</span></li>
                    <li><span>Mewujudkan masyarakat yang cerdas, sehat, sejahtera, bermartabat sumberdan berdaya saingtinggi.</span></li>
                    <li><span>Menciptakan tata pemerintahaan yang bersih, berwibawa, transparan, dan akuntabel</span></li>
                </ol>
            </div>
            <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">
                <div class="overlay overlay-bg"></div>
                <!-- <a class="play-btn" href="https://www.youtube.com/watch?v=p6oO6JGmnAg&t=59s"><img class="img-fluid mx-auto" src="{{asset('assets/img/play-btn.png')}}" alt=""></a> -->
            </div>
        </div>
    </div>
</section> --}}
{{-- <br><br><br><br><br> --}}
<!-- End about-video Area -->


<!-- Start feature Area -->
<section class="feature-area section-gap" style="background:rgb(149,154,255);">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Fitur Yang Tersedia</h1>
                <p class="text-white">
                    Fitur yang tersedia diharapkan mampu membantu transparansi data
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="javascript:void(0)" class="title d-flex flex-row">
                        {{-- <span class="lnr lnr-list"></span> --}}
                        <h4>RTRW</h4>
                    </a>
                    <p>
                        Data terkait rencana tata ruang wilayah yang dilaksanakan oleh Kabupaten Mahakam Ulu
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="javascript:void(0)" class="title d-flex flex-row">
                        {{-- <span class="lnr lnr-apartment"></span> --}}
                        <h4>RDTR </h4>
                    </a>
                    <p>
                        Data terkait rencana detail tata ruang wilayah yang dilaksanakan oleh Kabupaten Mahakam Ulu
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="javascript:void(0)" class="title d-flex flex-row">
                        {{-- <span class="lnr lnr-map"></span> --}}
                        <h4>Peta</h4>
                    </a>
                    <p>
                        Data terkait peta tata ruang terbagi menjadi 2 bagian yaitu <b>peta rencana pola ruang</b> dan <b>peta tematik</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->


<!-- Start brand Area -->
<section class="brand-area pt-50">
    <div class="container">
        <div class="row align-items-center text-center">
            {{-- <div class="col single-brand">
                <a target="blank" href="http://humas.mahakamulukab.go.id/">
                    <img class="img-fluid" src="{{asset('assets/template_components/img/humas.png')}}" alt="" style="width: 50%">
                </a>
            </div> --}}
            <div class="col single-brand">
                <a target="blank" href="http://humas.mahakamulukab.go.id/">
                    <img class="img-fluid" src="{{asset('assets/template_components/img/bappelitbangda.png')}}" alt="" style="width: 50%">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Start brand Area -->
<section class="brand-area pt-50">
    <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div id="logo">
                      <img style="width: 80%;" src="{{url('assets/template_components/img/Mahakam_Ulu_Logo.png')}}" alt="logo" title="" /></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7" style="margin-left: -40px;">
                    <br>
                    <p style="font-size: 15pt;"><b style="color: black">BAPPELITBANGDA (Badan Perencanaan, Pembangunan, Penelitian, dan Pengembangan Daerah)</b></p>
                    <p style="font-size: 12pt; margin-bottom: -5px;">Jl. Poros Ujoh Bilang - Long Bangun Kec. Long Bangun</p>
                    <p style="font-size: 12pt;">Kab. Mahakam Ulu Provinsi Kalimantan Timur</p>
                </div>
            </div>
    </div>
</section>
<br><br>
<!-- End brand Area -->

@endsection
