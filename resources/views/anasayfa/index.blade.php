@extends ('anasayfa.template')

@section('icerik')

    <div class="container">
        <div class="row mt-xl mb-xl pt-xl mb-xl">
            <div class="col-md-4">
                <h2 class="mt-xl mb-none text-color-dark">Geleceği Yapılandırıyoruz</h2>
                <p class="lead">{{$ayar->site_adi}}</p>
            </div>
            <div class="col-md-2 center hidden-xs hidden-sm">
                <img src="/anasayfa/img/dotted-line-angle.png" class="img-responsive" />
            </div>
            <div class="col-md-6">
                <p class="mt-xl">Konut ve yeşil alanlardan ulaşım ve ve altyapıya pek çok alanda yürüttüğü prestijli projelerle Türkiye'de inşaat sektöründe öncü konuma gelen firmamız "{{$ayar->site_adi}} "; profesyonel ekibi ve üstün kalite anlayışıyla Türkiye'nin ve Dünya'nın geleceğine yatırım yapmayı sürdürüyoruz..</p>
                <a class="mt-md" href="demo-construction-company.html">Daha Fazla.. <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
@include('anasayfa.services')
{{--Projeler--}}

    <section class="pt-md pb-xl home-concept-construction">
        <div class="container">
            <div class="row pt-xl">
                <div class="col-md-12">
                    <h2 class="mb-none text-color-dark">Projeler</h2>
                    <p class="lead">Güvenceli İnşaat</p>

                    <div class="diamonds-wrapper lightbox" data-plugin-options='{"delegate": ".diamond", "type": "image", "gallery": {"enabled": true}}'>

                        <ul class="diamonds">

                            <li>
                                @foreach($projeler as $proje)
                                <a href="/anasayfa/img/demos/construction/gallery/construction-gallery-1.jpg" class="diamond">
                                    <div class="content">

                                        <img src="{{$proje->proje_resim}}" class="img-responsive" />

                                    </div>
                                </a>
                                @endforeach
                            </li>

                        </ul>

                    </div>


                </div>
            </div>
            <div class="row row-diamons-description">
                <div class="col-md-6">
                    <p>Uluslararası İnşaat Yapı İşlemleri</p>
                    <a class="btn btn-borders btn-primary" href="demo-construction-projects.html">View All Projects</a>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="pt-md pb-xl home-concept-construction">
        <div class="container">
            <div class="row pt-xl">

                <div class="col-md-12">
                    <h2 class="mb-none text-color-dark">Projeler</h2>
                    <p class="lead">Projelerimiz tamamlanan ve güncel olanların bir kısmı.</p>

                    <div class="diamonds-wrapper lightbox" data-plugin-options='{"delegate": ".diamond", "type": "image", "gallery": {"enabled": true}}'>

                        <ul class="diamonds">
                            @foreach($projeler as $proje)
                            <li>

                                <a href="/proje/{{$proje->id}}/{{$proje->slug}}" class="diamond">


                                    <div class="content">
                                        <img src="/{{$proje->proje_resim}}" class="img-responsive" />
                                    </div>

                                </a>

                            </li>
                            @endforeach
                        </ul>

                    </div>

                </div>

            </div>
            <div class="row row-diamons-description">
                <div class="col-md-6">
                    <p>{!! $proje->proje_aciklama !!}</p>
                    <a class="btn btn-borders btn-primary" href="{{route('projeleri.goster')}}">Tüm Projeleri Görüntüle</a>
                </div>
            </div>
        </div>
    </section>--}}

{{--referanslar kısmı--}}
    <section class="pt-md section-custom-construction-2">
        <div class="container">

    <div class="row">

        <div class="col-md-12 center">

            <div class="owl-carousel owl-theme stage-margin rounded-nav" data-plugin-options='{"margin": 10, "loop": false, "nav": true, "dots": false, "stagePadding": 40, "items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
                @foreach ($partners as $partner)
                <div>
                    <img class="img-responsive" src="{{$partner->referans_gorseli}}" alt="" >
                </div>
                @endforeach
            </div>

        </div>

    </div>

        </div>
    </section>

    <div class="row">
        <div class="col-md-12 center mt-xl">
            <hr class="solid mt-none mb-xl">
        </div>
    </div>


    {{--Blog--}}{{--blog--}}
    <section class="pt-md section-custom-construction-2">
        <div class="container">
    <div class="row pt-xl">
        <div class="col-md-12">
            <h2 class="mb-none text-color-dark">Haber Yazıları</h2>
            <p class="lead mb-sm">Merhaba bu ilk haber yazısı.</p>
        </div>
    </div>
    <div class="row">
        @foreach($icerikler as $icerik)
        <div class="col-md-4">

            <div class="recent-posts mt-xl">

                <a href="/haber/{{$icerik->id}}/{{$icerik->slug}}">
                    <img class="img-responsive pb-md" src="{{$icerik->resim}}" alt="Blog" >
                </a>
                <article class="post">
                    <div class="date">
                        <span class=""></span>
                        <span class="day">{{date('d-m-y',strtotime($icerik->created_at))}}</span>

                    </div>
                    <h4 class="pt-md pb-none mb-none"><a class="text-color-dark" href="/haber/{{$icerik->id}}/{{$icerik->slug}}">{{$icerik->baslik}}</a></h4>
                    <p>By admin</p>
                    <p>{!! $icerik->icerik !!}</p>
                    <a class="mt-md" href="/haber/{{$icerik->id}}/{{$icerik->slug}}">Daha Fazla <i class="fa fa-long-arrow-right"></i></a>
                </article>

            </div>

        </div>

        @endforeach
    </div>
        </div>
    </section>





@endsection

@section('css')

@endsection

@section('js')

@endsection
{{--
@extends ('anasayfa.template')
@section('icerik')
@include('anasayfa.services')
<!-- Call back -->
<section class="bg-10 p-t-92 p-b-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-b-30">
                <!-- Title section -->
                <div class="flex-col-c-s p-b-20">

                    <h3 class="t1-b-1 cl-0 m-b-11">
                        Bilgi Talep Formu
                    </h3>

                    <div class="size-a-2 bg-0"></div>

                </div>

                <p class="t1-s-2 cl-0">
                    Firmamızdan detaylı bilgi almak için, lütfen formu doldurunuz. Tarafınıza en kısa sürede dönüş yapılacaktır.
                </p>
            </div>

            <form  id="contact-form"  class="col-lg-8 p-b-30 p-t-8" method="post" action="{{route('anasayfaform.gonder')}}" name="contact" >
                {{csrf_field()}}


                <div class="row">
                    <div class="col-sm-6 p-b-25">
                        <div class="size-a-3">
                            <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="text" name="ad" placeholder="Adınız" required>
                        </div>
                    </div>

                    <div class="col-sm-6 p-b-25">
                        <div class="size-a-3">
                            <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="text" name="email" placeholder="E-Mail Adresiniz" required>
                        </div>
                    </div>

                    <div class="col-sm-6 p-b-25">
                        <div class="size-a-3">
                            <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="text" name="konu" placeholder="Konu" required>
                        </div>
                    </div>

                    <div class="col-sm-6 p-b-25">
                        <button class="flex-c-c size-a-4 bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-15">
                            Gönder
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- News -->
<section class="bg-12 p-t-92 p-b-60">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                Son Haberler
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="row justify-content-center">

            @foreach($icerikler as $icerik)
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <div class="bg-0 h-full">
                    <a href="/haber/{{$icerik->id}}/{{$icerik->slug}}" class="hov-img0 of-hidden">
                        <img src="/{{$icerik->resim}}" alt="IMG" width="100" height="320">
                    </a>



                    <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                        <h4 class="p-b-12">
                            <a href="/haber/{{$icerik->id}}/{{$icerik->slug}}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                {{$icerik->baslik}}
                            </a>
                        </h4>

                        <div class="flex-wr-s-c p-b-9">
                            <div class="p-r-20">
                                <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                <span class="t1-s-2 cl-7">
										{{date('d-m-y',strtotime($icerik->created_at))}}
									</span>
                            </div>

                            <div class="p-l-20 bo-l-1 bcl-12">
                                <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                --}}
{{--<a href="#" class="t1-s-2 cl-11 hov-link3">
                                    Admin
                                </a>--}}{{--

                            </div>
                        </div>

                        <p class="t1-s-2 cl-6 p-b-20">
                            {!! $icerik->icerik !!}
                        </p>

                        <a href="/haber/{{$icerik->id}}/{{$icerik->slug}}"   class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">

                           Daha Fazla Oku...
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@include('anasayfa.partners')


@endsection

@section('css')

@endsection

@section('js')

@endsection--}}
