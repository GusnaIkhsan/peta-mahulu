@section('header')
<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ url('/') }}"><img style="width: 45%;" src="https://peta-mahulu.herokuapp.com/assets/template_components/img/ulu.png" alt="logo" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ url('/') }}">Beranda</a></li>

                    <li><a href="{{ url('/content/rtrw') }}">RTRW</a></li>
                    <li><a href="{{ url('/content/rdtr') }}">RDTR</a></li>
                    <li class="menu-has-children"><a href="javascript:void(0)">Peta</a>
                        <ul style="border-radius: 5px;">
                            <li><a href="{{ url('/content/peta-pola-ruang') }}"><span class="lnr lnr-map-marker"></span> &nbsp;Rencana Pola Ruang</a></li>
                            <li><a href="{{ url('/content/peta-tematik') }}"><span class="lnr lnr-map"></span> &nbsp;Peta Tematik</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
@endsection
