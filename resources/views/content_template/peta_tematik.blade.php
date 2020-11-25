
@extends('layout_template.app_template')
@extends('layout_template.header_template')
@extends('layout_template.footer_template')
@section('content')
<!-- start banner Area -->
<section class="relative" id="home" style="background-image: url('{{asset('/assets/template_components/img/profilwisata-crop.jpg')}}'); background-size: cover;">
    <div class="overlay overlay-bg" style="background: rgba(0, 0, 0, 0.5); width: 100%;">
    </div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Peta Tematik
                </h1>
                <p class="text-white link-nav">
                    <a href="#"> Tematik</a>
                    {{-- <span class="lnr lnr-arrow-right"></span>
                    <a href="#"> Pekerjaan Umum</a> --}}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<section class="products-area product-page section-gap">
    <div class="container">
        <div class="text-center">
            <h3>Data Peta Tematik</h3>
            <p id="labelTittleTablePage"></p>
        </div>
        <div class="section-top-border">
            <div class="row gallery-item text-center" style="margin-top: -50px;">
                <div class="col-md-4">
                    {{-- <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-administrasi.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/assets/storage/image/peta-administrasi.png);width:350px;height:350px;"></div></a> --}}
                    <a href="{{url('assets/storage/image/Peta-Analisis-Kemampuan-Lahan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Analisis-Kemampuan-Lahan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Analisis Kemampuan Lahan</p>
                </div>
                <div class="col-md-4">
                    {{-- <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-curah-hujan.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/assets/storage/image/peta-curah-hujan.png);width:350px;height:350px;"></div></a> --}}
                    <a href="{{url('assets/storage/image/Peta-Curah-Hujan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Curah-Hujan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Curah Hujan</p>
                </div>
                <div class="col-md-4">
                    {{-- <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-geologi.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/assets/storage/image/peta-geologi.png);width:350px;height:350px;"></div></a> --}}
                    <a href="{{url('assets/storage/image/Peta-DAS.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-DAS.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta DAS</p>
                </div>
                <div class="col-md-4">
                    {{-- <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jaringan-jalan.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jaringan-jalan.png); width:350px;height:350px;"></div></a> --}}
                    <a href="{{url('assets/storage/image/Peta-Geohidrologi.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Geohidrologi.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Geohidrologi</p>
                </div>
                <div class="col-md-4">
                    {{-- <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jaringan-sungai.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jaringan-sungai.png); width:350px;height:350px;"></div></a> --}}
                    <a href="{{url('assets/storage/image/Peta-Geologi.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Geologi.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Geologi</p>
                </div>
                <div class="col-md-4">
                    {{-- <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jenis-tanah.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jenis-tanah.png); width:350px;height:350px;"></div></a> --}}
                    <a href="{{url('assets/storage/image/Peta-Izin-Pertambangan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Izin-Pertambangan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Izin Pertambangan</p>
                </div>
                <div class="col-md-4">
                    {{-- <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-persebaran-akifer.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/assets/storage/image/peta-persebaran-akifer.png); width:350px;height:350px;"></div></a> --}}
                    <a href="{{url('assets/storage/image/Peta-Jaringan-Jalan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Jaringan-Jalan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Jaringan Jalan</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Jaringan-Perairan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Jaringan-Perairan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Jaringan Perairan</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Jenis-Tanah.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Jenis-Tanah.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Jenis Tanah</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Kawasan-Hutan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Kawasan-Hutan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Kawasan Hutan</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Kelerengan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Kelerengan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Kelerengan</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Kepadatan-Penduduk-2035.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Kepadatan-Penduduk-2035.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Kepadatan Penduduk</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Morfologi.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Morfologi.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Morfologi</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Penggunaan-Lahan.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Penggunaan-Lahan.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Penggunaan Lahan</p>
                </div>
                <div class="col-md-4">
                    <a href="{{url('assets/storage/image/Peta-Rawan-Bencana.jpg')}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{url('assets/storage/image/Peta-Rawan-Bencana.jpg')}});width:350px;height:265px;"></div></a>
                    <p>Peta Rawan Bencana</p>
                </div>
            </div>
        </div>
        {{-- <div class="table-responsive">
            <table id="pdptable" class="table table-bordered table-striped table-sm" style="color: black; font-weight: normal;">
                <thead class="text-center">
                    <tr>
                        <th width=45>No</th>
                        <th>Uraian</th>
                        <th width=70>Lihat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Batang Tubuh Peraturan Daerah</td>
                    <td class="text-center"><a target="_blank" href="{{asset('storage/rdtr/Electrochemical.pdf')}}" style="font-size:11px;color:white;" class="btn btn-info btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div> --}}
        <br>
    </div>
</section>
@endsection
