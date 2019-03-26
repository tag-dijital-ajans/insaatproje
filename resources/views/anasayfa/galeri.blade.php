@extends ('anasayfa.template')

@section('icerik')
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>


    <div class="banner">
        <div class="container">
            <div class="banner-top">
                <div class="banner-text">
                    <h2>{{$ayar->site_adi}}</h2>
                    <h1>Lorem Ipsum Nedir?</h1>
                    <div class="banner-btn">
                        <a href="{{route('hakkimizda.goster')}}">Daha Fazla</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-end-->
    <!--gallery-starts-->
    <div class="gallery">
        <div class="container">
            <div class="gallery-top heading">
                <h3>Galeri</h3>
            </div>
            <section>

                <ul id="da-thumbs" class="da-thumbs">
                    @foreach($galeriler as $galeri)


                    <li>
                        <a href="/{{$galeri->resim_yolu}}"  rel="resim" class="b-link-stripe b-animate-go  thickbox">
                            <img src="/{{$galeri->resim_yolu}}" height="200" alt="" />
                            <div>
                                <h5>{{$ayar->site_adi}}</h5>
                                <span>Lorem Ipsum Nedir?</span>
                            </div>
                        </a>
                    </li>



@endforeach

                    <div class="clearfix"> </div>
                </ul>

            </section>


        </div>
    </div>
    </body>
@endsection

@section('css')


    <link rel="stylesheet" href="/galeri/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
    <link href="/galeri/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/galeri/css/style.css" rel='stylesheet' type='text/css' />
@endsection

@section('js')
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="/galeri/js/jquery.min.js"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="/galeri/js/move-top.js"></script>
    <script type="text/javascript" src="/galeri/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
    <!--script-->
    <script src="/galeri/js/modernizr.custom.97074.js"></script>
    <script src="/galeri/js/jquery.chocolat.js"></script>
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.gallery a').Chocolat();
        });
    </script>
    <script type="text/javascript" src="/galeri/js/jquery.hoverdir.js"></script>
    <script>
        $("span.menu").click(function(){
            $(" ul.navig").slideToggle("slow" , function(){
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {

            $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

        });
    </script>




@endsection