
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
            <div class="row gallery-item" style="margin-top: -50px;">
                <div class="col-md-4">
                    <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-administrasi.png" class="img-pop-up"><div class="single-gallery-image" style="background: url('https://peta-mahulu.herokuapp.com/storage/image/peta-administrasi.png');width:350px;height:350px;"></div></a>
                </div>
                <div class="col-md-4">
                    <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-curah-hujan.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/storage/image/peta-curah-hujan.png);width:350px;height:350px;"></div></a>
                </div>
                <div class="col-md-4">
                    <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-geologi.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/storage/image/peta-geologi.png);width:350px;height:350px;"></div></a>
                </div>
                <div class="col-md-4">
                    <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jaringan-jalan.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/storage/image/peta-jaringan-jalan.png); width:350px;height:350px;"></div></a>
                </div>
                <div class="col-md-4">
                    <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jaringan-sungai.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/storage/image/peta-jaringan-sungai.png); width:350px;height:350px;"></div></a>
                </div>
                <div class="col-md-4">
                    <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-jenis-tanah.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/storage/image/peta-jenis-tanah.png); width:350px;height:350px;"></div></a>
                </div>
                <div class="col-md-4">
                    <a href="https://peta-mahulu.herokuapp.com/assets/storage/image/peta-persebaran-akifer.png" class="img-pop-up"><div class="single-gallery-image" style="background: url(https://peta-mahulu.herokuapp.com/storage/image/peta-persebaran-akifer.png); width:350px;height:350px;"></div></a>
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
