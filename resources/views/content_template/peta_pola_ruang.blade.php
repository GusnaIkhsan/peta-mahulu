@extends('layout_template.app_template')
@extends('layout_template.header_template')
@extends('layout_template.footer_template')
@section('content')
<div style="width: 100%; height: 90px; background-color: #969bff;"></div>
<section class="products-area product-page" style="margin-bottom: 20px; margin-top: 15px;">
    <div class="container-fluid">
        <div id="map" class="map-container" style="height: 600px;"></div>
    </div>
    {{-- <select name="" id="">
        <option value=""></option>
    </select> --}}
</section>
@endsection
