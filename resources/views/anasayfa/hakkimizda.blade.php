@extends ('anasayfa.template')

@section('icerik')
<body data-spy="scroll" data-target="#sidebar" data-offset="120">

<div class="body">

    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-md mt-none">
            <div class="container">
                <div class="row mt-xl">
                    <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                        <h1 class="text-uppercase font-weight-light mt-xl text-color-primary">Hakkımızda</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-sm">
                <div class="col-md-3">
                    <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options='{"minWidth": 991, "containerSelector": ".container", "padding": {"top": 110}}'>

                        <ul class="nav nav-list mb-xl show-bg-active">
                            <li><a data-hash data-hash-offset="110" href="#who-we-are">Biz Kimiz?</a></li>
                            <li><a data-hash data-hash-offset="110" href="#history">Tarihçe</a></li>
                            <li><a data-hash data-hash-offset="110" href="#mission-vision">Misyon &amp; Vizyon</a></li>
                            <li><a data-hash data-hash-offset="110" href="#leadership">Liderlik</a></li>
                            <li><a data-hash data-hash-offset="110" href="#partners">Referanslarımız</a></li>
                        </ul>

                    </aside>
                </div>

                <div class="col-md-9">

                    <section id="who-we-are" class="mb-xlg">
                        <div class="nivo-slider mt-md pb-xl">
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
@foreach($yazilar as $yazi)
                        <h2 class="mb-none text-color-dark">{{$yazi->baslik}}</h2>
                        <p class="lead mb-xl mt-lg">{!! $yazi->icerik !!}</p>

                        @endforeach
                    </section>

                    <hr class="solid tall">

                    <section id="history" class="mb-xlg">
                        <h2 class="mb-none text-color-dark">Tarihçe</h2>

                        <div class="row">
                            <div class="col-md-7">
                                <img class="pull-left img-responsive mr-lg mb-md mt-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"   src="{{$yazi->resim}}" alt="">
                                <p class="mt-lg">{!! $yazi->icerik !!}</p>
                                <p class="mt-lg"></p>
                            </div>
                            <div class="col-md-5">
                                <ul class="list list-unstyled list-primary list-borders">
                                    <li class="pt-sm pb-sm appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><strong class="text-color-primary font-size-xl">2016 - </strong> Lorem Ipsum Nedir?</li>
                                    <li class="pt-sm pb-sm appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100"><strong class="text-color-primary font-size-xl">2014 - </strong> Lorem Ipsum Nedir?</li>
                                    <li class="pt-sm pb-sm appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200"><strong class="text-color-primary font-size-xl">2006 - </strong> Lorem Ipsum Nedir?</li>
                                    <li class="pt-sm pb-sm appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><strong class="text-color-primary font-size-xl">2003 - </strong> Lorem Ipsum Nedir?</li>
                                    <li class="pt-sm pb-sm appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><strong class="text-color-primary font-size-xl">2001 - </strong> Lorem Ipsum Nedir?</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <hr class="solid tall">

                    <section id="mission-vision" class="mb-xlg">

                        <div class="row mt-xl">
                            <div class="col-sm-6 center">
                                <div class="feature-box feature-box-style-4 mt-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
											<span class="featured-boxes featured-boxes-style-4 p-none m-none">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
													<span class="box-content p-none m-none">
														<i class="icon-featured icon-target icons"></i>
													</span>
												</span>
											</span>
                                    <div class="feature-box-info">
                                        <h2 class="mb-md text-color-dark">Misyon</h2>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 center">
                                <div class="feature-box feature-box-style-4 mt-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
											<span class="featured-boxes featured-boxes-style-4 p-none m-none">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
													<span class="box-content p-none m-none">
														<i class="icon-featured icon-eye icons"></i>
													</span>
												</span>
											</span>
                                    <div class="feature-box-info">
                                        <h2 class="mb-md text-color-dark">Vizyon</h2>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla nisi elit consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <hr class="solid tall">

                    <section id="leadership" class="mb-xlg">
                        <h2 class="mb-none text-color-dark">Liderlik</h2>

                        <div class="row mt-xlg">

                            <div class="col-sm-6">
										<span class="thumb-info thumb-info-side-image thumb-info-no-zoom no-borders mb-xl">
											<span class="thumb-info-side-image-wrapper p-none">
												<img src="/anasayfa/img/team/team-22.jpg" class="img-responsive" alt="" style="width: 160px;">
											</span>
											<span class="thumb-info-caption">
												<span class="thumb-info-caption-text">
													<h5 class="text-uppercase mb-xs">John Doe - <small class="font-weight-light">Founder</small></h5>
													<p class="mb-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
												</span>
											</span>
										</span>

                            </div>
                            <div class="col-sm-6">
										<span class="thumb-info thumb-info-side-image thumb-info-no-zoom no-borders mb-xl">
											<span class="thumb-info-side-image-wrapper p-none">
												<img src="/anasayfa/img/team/team-23.jpg" class="img-responsive" alt="" style="width: 160px;">
											</span>
											<span class="thumb-info-caption">
												<span class="thumb-info-caption-text">
													<h5 class="text-uppercase mb-xs">Jeremy Doe - <small class="font-weight-light">President</small></h5>
													<p class="mb-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
												</span>
											</span>
										</span>

                            </div>

                        </div>

                    </section>

                    <hr class="solid tall">

                    <section id="partners" class="mb-xlg">
                        <h2 class="mb-none text-color-dark">Referanslar</h2>

                        <div class="row mt-lg">
                            <div class="content-grid content-grid-dashed mt-xlg mb-lg">
                                <div class="row content-grid-row">
                                    @foreach($referanslar as $referans)
                                    <div class="content-grid-item col-sm-4 center">
                                        <img class="img-responsive" src="{{$referans->referans_gorseli}}" alt="">
                                    </div>
                                   @endforeach
                                </div>



                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </div>
    </div>



</div>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
<script src="js/views/view.contact.js"></script>

<!-- Demo -->
<script src="js/demos/demo-construction.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->


</body>
</html>
@endsection

@section('css')

@endsection

@section('js')

@endsection