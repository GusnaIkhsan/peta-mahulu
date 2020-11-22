@extends('layout.app')
@extends('layout.header')
@extends('layout.sidebar')
@extends('layout.footer')
@section('content')
<div class="content-wrapper">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div id="style-selector-control" class="map-control">
                            <div class="container" style="width: 200px;">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                        <div id="map" class="map-container" style="height: 600px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="content">
        <div class="card-body">
            <div id="style-selector-control" class="map-control">
                <div class="container" style="width: 250px;">
                    <div class="row">
                        <div class="col-md-3" style="margin-right: -18px">
                            <button type="button" class="btn btn-sm btn-block btn-default" id="btn_home"
                                onclick="reset();"><i class="fa fa-circle-o"></i></button>
                        </div>

                        <div class="col-md-3" style="margin-right: -18px">
                            <button type="button" class="btn btn-sm btn-block btn-default" id="btn_home"
                                onclick="reset();"><i class="fa fa-circle-o"></i></button>
                        </div>

                        <div class="col-md-3" style="margin-right: -18px">
                            <button type="button" class="btn btn-sm btn-block btn-default" id="btn_home"
                                onclick="reset();"><i class="fa fa-circle-o"></i></button>
                        </div>

                        <div class="col-md-3">
                            <button type="button" class="btn btn-sm btn-block btn-default" id="btn_home"
                                onclick="reset();"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map" class="map-container" style="width: 100%; height: 800px;"></div>
        </div>
    </section> --}}
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section> --}}

    <!-- Main content -->
    {{-- <section class="content">
    </section> --}}
</div>
@endsection
