 <!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$ayar->site_adi}}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/adminkurumsal/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/adminkurumsal/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/adminkurumsal/css/fullcalendar.css" />
    <link rel="stylesheet" href="/adminkurumsal/css/matrix-style.css" />
    <link rel="stylesheet" href="/adminkurumsal/css/matrix-media.css" />
    <link href="/adminkurumsal/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/adminkurumsal/css/jquery.gritter.css" />
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="/">Tag </a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text"> Merhaba, {{Auth::user()->name}} </span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a target="_blank" href="{{route('anasayfa')}}"><i class="icon-user"></i>Web Sitesi</a></li>
                <li><a href="{{route('kullanici.duzenle',Auth::user()->id)}}"><i class="icon-user"></i> Profilim</a></li>

                <li class="divider"></li>
                <li><a href="{{route('yonetimkurumsal.cikis')}}"><i class="icon-key"></i> Çıkış</a></li>
            </ul>
        </li>

    </ul>
</div>
<<div id="sidebar"><a href="{{route('yonetimkurumsal.index')}}" class="visible-phone"><i class="icon icon-home"></i> Yönetim Anasayfa</a>
    <ul>
        <li class="active"><a href="{{route('yonetimkurumsal.index')}}"><i class="icon icon-dashboard"></i> <span>Yönetim Paneli</span></a> </li>
        <li> <a href="{{route('ayarlar.index')}}"><i class="icon icon-cogs"></i> <span>Site Ayarları </span></a> </li>
        <li> <a href="{{route('sayfalar.index')}}"><i class="icon icon-paper-clip"></i> <span>Sayfa Yönetimi </span></a> </li>
        <li> <a href="{{route('hizmetler.index')}}"><i class="icon icon-star"></i> <span>Hizmet Yönetimi </span></a> </li>
        <li> <a href="{{route('projeler.index')}}"><i class="icon icon-beaker"></i> <span>Proje Yönetimi </span></a> </li>
        <li> <a href="{{route('proje_kategori.index')}}"><i class="icon icon-th-large"></i> <span>Proje Kategori Yönetimi </span></a> </li>
        <li> <a href="{{route('referanslar.index')}}"><i class="icon icon-spinner"></i> <span>Referans Yönetimi </span></a> </li>
        <li> <a href="{{route('sliderlar.index')}}"><i class="icon icon-step-forward"></i> <span>Slider Yönetimi </span></a> </li>
        <li class="submenu" > <a href="#"><i class="icon icon-certificate"></i> <span>İçerik Yönetimi </span></a>
                  <ul>
                    <li><a href="{{route('yazilar.create')}}">Yeni Yazı Ekle</a></li>
                    <li><a href="{{route('yazilar.index')}}">Tüm Yazılar</a></li>
                    <li><a href="{{route('kategori.index')}}">Kategori Yönetimi</a></li>

                  </ul>
        </li>
        <li> <a href="{{route('kullanicilar.index')}}"><i class="icon icon-user-md"></i> <span>Kullanıcı Yönetimi </span></a></li>
        <li> <a href="{{route('menuler.index')}}"><i class="icon icon-th"></i> <span>Menü Yönetimi</span></a></li>
        <li> <a href="{{route('galeri.index')}}"><i class="icon icon-picture"></i><span>Galeri Yönetimi</span> </a></li>
        <li class="bg_lr"> <a href="{{route('yonetimkurumsal.cikis')}}"><i style="color: white" class="icon icon-off"></i> <span style="color: white">Çıkış </span></a> </li>



    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        @yield('icerik')

        <!--End-Action boxes-->


    </div>
</div>
<script src="/adminkurumsal/js/excanvas.min.js"></script>
<script src="/adminkurumsal/js/jquery.min.js"></script>
<script src="/adminkurumsal/js/jquery.ui.custom.js"></script>
<script src="/adminkurumsal/js/bootstrap.min.js"></script>
<script src="/adminkurumsal/js/jquery.flot.min.js"></script>
<script src="/adminkurumsal/js/jquery.flot.resize.min.js"></script>
<script src="/adminkurumsal/js/jquery.peity.min.js"></script>
<script src="/adminkurumsal/js/fullcalendar.min.js"></script>
<script src="/adminkurumsal/js/matrix.js"></script>
<script src="/adminkurumsal/js/matrix.dashboard.js"></script>
<script src="/adminkurumsal/js/jquery.gritter.min.js"></script>
<script src="/adminkurumsal/js/matrix.interface.js"></script>
<script src="/adminkurumsal/js/matrix.chat.js"></script>
<script src="/adminkurumsal/js/jquery.validate.js"></script>
<script src="/adminkurumsal/js/matrix.form_validation.js"></script>
<script src="/adminkurumsal/js/jquery.wizard.js"></script>
<script src="/adminkurumsal/js/jquery.uniform.js"></script>
<script src="/adminkurumsal/js/select2.min.js"></script>
<script src="/adminkurumsal/js/matrix.popover.js"></script>
<script src="/adminkurumsal/js/jquery.dataTables.min.js"></script>
<script src="/adminkurumsal/js/matrix.tables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
@include('sweetalert::alert')

@yield('js')


</body>
</html>

