
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
                    RDTR
                </h1>
                <p class="text-white link-nav">
                    <a href="#"> Rencana Detail Tata Ruang</a>
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
            <h3>Data Rencana Detail Tata Ruang</h3>
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
                        <td>Peraturan Daerah</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Penjelasan</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Lampiran I, Peta Ruang Lingkup Wilayah</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Lampiran II, Peta Pembagian Sub BWP dan Blok</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Lampiran III, Peta System Pusat Pelayanan</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>Lampiran IV, Peta Perencanaan Pola Ruang</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>Lampiran V, Peta Rencana Pengembangan Jaringan Jalan</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td>Lampiran VI, Peta Rencana Pengembangan Jaringan Jalur Sepeda dan Jalur Pedestrian</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td>Lampiran VII, Peta Pengembangan Sistem Pelayanan Angkutan Umum</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td>Lampiran VIII, Peta Rencana Pengembangan Jaringan Energi/Kelistrikan</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">11</td>
                        <td>Lampiran IX, Peta Rencana Pengembangan Jaringan Telekomunikasi</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">12</td>
                        <td>Lampiran X, Peta Rencana Pengembangan Jaringan Air Minum</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">13</td>
                        <td>Lampiran XI, Peta Rencana Pengembangan Jaringan Drainase</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">14</td>
                        <td>Lampiran XII, Peta Rencana Pengembangan Jaringan Drainase</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">15</td>
                        <td>Lampiran XIII, Peta Rencana Pengembangan Jaringan Air Limbah</td>
                        <td class="text-center"><a target="_blank" href="https://peta-mahulu.herokuapp.com/assets/storage/rdtr/Laporan.pdf" style="font-size:11px;color:white;" class="btn btn-primary btn-xs" data-toggle="tooltip" title=Detail><i class="fa fa-download"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
    </div>
</section>
@endsection
