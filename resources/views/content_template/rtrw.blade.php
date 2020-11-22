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
                    RTRW
                </h1>
                <p class="text-white link-nav">
                    <a href="#"> Rencana Tata Ruang Wilayah</a>
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
        <br>
        <div class="text-center">
            <h3>Data Rencana Tata Ruang Wilayah</h3>
            <p id="labelTittleTablePage"></p>
        </div>
        <br>
        <div class="table-responsive">
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
                    <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/storage/rdtr/Electrochemical.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
    </div>
</section>
@endsection
