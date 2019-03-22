@extends ('anasayfa.template')

@section('icerik')



    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-md mt-none">
            <div class="container">
                <div class="row mt-xl">
                    <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                        <h1 class="text-uppercase font-weight-light mt-xl text-color-primary">HİZMETLER</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-sm mb-xl">
                <div class="col-md-3">
                    <aside class="sidebar">

                        <ul class="nav nav-list mb-xl show-bg-active">
                            <li><a href="demo-construction-services.html">genel bakış</a></li>
                            <li><a href="demo-construction-services-detail.html">  İnşaat öncesi</a></li>
                            <li class="active"><a href="demo-construction-services-detail.html">  Genel yapı</a></li>
                            <li><a href="demo-construction-services-detail.html">su tesisatı</a></li>
                            <li><a href="demo-construction-services-detail.html">boyama</a></li>
                        </ul>




                        <h4 class="pt-xl mb-md text-color-dark">Bizimle İletişime Geçin</h4>
                        <p>Size nasıl yardımcı olabileceğimizi öğrenmek için bizimle iletişime geçin veya bizi arayın.</p>

                        <form id="contactForm" action="php/contact-form.php" method="POST" class="mb-xlg">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Adınız *</label>
                                        <input type="text" value="" data-msg-required="lütfen adınızı giriniz." maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>E-mail Adresiniz *</label>
                                        <input type="email" value="" data-msg-required="Lütfen e-mail adresinizi giriniz." data-msg-email="Lütfen geçerli bir e-mail adresi giriniz." maxlength="100" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Konu</label>
                                        <input type="text" value="" data-msg-required="Lütfen konu giriniz." maxlength="100" class="form-control" name="subject" id="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Mesajınız *</label>
                                        <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı yazınız." rows="3" class="form-control" name="message" id="message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Gönder" class="btn btn-primary mb-xl" data-loading-text="Loading...">

                                    <div class="alert alert-success hidden" id="contactSuccess">
                                        Mesaj bize gönderildi.
                                    </div>

                                    <div class="alert alert-danger hidden" id="contactError">
                                        Mesajınız gönderiliirken bir hata oluştu.
                                    </div>
                                </div>
                            </div>
                        </form>

                    </aside>

                </div>
                <div class="col-md-9">

@foreach($hizmetler as $hizmet)
                        <h2 class="mb-sm">{{$hizmet->hizmet_basligi}}</h2>

                        <img class="img-responsive pull-right ml-xlg mb-xl mt-xl" src="/{{$hizmet->hizmet_one_cikan_foto}}" width="400"  alt="" />

                        <p class="lead mb-xl mt-lg"></p>


                        <div class="row">
                            <div class="col-md-5">
                                <p class="pb-xl">{!! $hizmet->hizmet_icerik!!}</p>
                            </div>
                            <div class="col-md-7">
                                <div class="nivo-slider pb-xl mb-xl">
                                    <div class="slider-wrapper theme-default">
                                        <div id="nivoSlider" class="nivoSlider mt-none mb-xlg">
                                            <img src="/anasayfa/img/demos/construction/slides/slide-construction-small-1.jpg" data-thumb="/anasayfa/img/demos/construction/slides/slide-construction-small-1.jpg" alt="" />
                                            <img src="/anasayfa/img/demos/construction/slides/slide-construction-small-2.jpg" data-thumb="/anasayfa/img/demos/construction/slides/slide-construction-small-2.jpg" alt="" />
                                            <img src="/anasayfa/img/demos/construction/slides/slide-construction-small-3.jpg" data-thumb="/anasayfa/img/demos/construction/slides/slide-construction-small-3.jpg" alt="" />
                                            <img src="/anasayfa/img/demos/construction/slides/slide-construction-small-4.jpg" data-thumb="/anasayfa/img/demos/construction/slides/slide-construction-small-4.jpg" alt="" />
                                        </div>
                                        <div id="htmlcaption" class="nivo-html-caption"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endforeach

                    <h4 class="mt-xlg mb-md">Diğer Yazılarımız</h4>
    @foreach($yazilar as $yazi)
                    <ul class="list list-icons list-primary mt-xl mb-xlg">
                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fa fa-check"></i> {!! $yazi->icerik !!} </li>

                    </ul>

@endforeach
    <h4>Bizden haberlere gitmek için <a href="{{route('haberler.goster')}}" >linke</a> tıklayın</h4>
                </div>
            </div>

        </div>
    </div>
























   {{-- <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-06.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">

               {{$hizmet->hizmet_basligi}}
            </h2>

            <div class="flex-wr-c-c">
                <a href="{{route('anasayfa')}}" class="breadcrumb-item">
                    Anasayfa

                </a>

                <a href="{{route('hizmetleri.goster')}}" class="breadcrumb-item">
                    Hizmetler
                </a>

                <span class="breadcrumb-item">
                    {{$hizmet->hizmet_basligi}}</span>

            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-0 p-t-100 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-50">
                    <div class="p-r-35 p-r-0-sr991">

                        <img class="max-s-full m-b-30" src="/{{$hizmet->hizmet_one_cikan_foto}}" alt="IMG">

                        <div class="p-b-14">
                            <h3 class="t1-m-5 cl-3 m-b-13">
                                {{$hizmet->hizmet_basligi}}
                            </h3>

                            <p class="t1-s-2 cl-6 m-b-9">
                              {!! $hizmet->hizmet_icerik !!}                       </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-b-50">
                    <!-- Rightbar -->
                    <div class="p-b-30">
                        <ul class="p-b-30">


                            @foreach($listhizmetler as $listhizmet)
                            <li class="m-b-5">
                                <a href="/hizmet/{{$listhizmet->id}}/{{$listhizmet->slug}}" class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02">
                                    {{$listhizmet->hizmet_basligi}}
                                </a>
                            </li>
                                @endforeach

                        </ul>

                        <div class="bg-11 p-all-30">
                            <p class="t1-m-1 cl-0 m-b-13">
                                Daha Fazla Bilgi
                            </p>

                            <p class="t1-s-2 cl-15 m-b-25">
                                Tüm sorularınız için bizim ile iletişime geçin.
                            </p>

                            <a href="{{route('iletisim.formu')}}" class="d-inline-flex flex-c-c size-a-1 bg-0 t1-s-2 cl-6 text-uppercase hov-btn1 trans-02 p-rl-10">
                                <i class="fa fa-phone-square m-r-6"></i>

                                İletişim
                            </a>

                        </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

@endsection

@section('css')

@endsection

@section('js')

@endsection
