@extends ('anasayfa.template')

@section('icerik')

    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-md mt-none">
            <div class="container">
                <div class="row mt-xl">
                    <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                        <h1 class="text-uppercase font-weight-light mt-xl text-color-primary">Projeler</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-sm">
                <div class="col-md-12">

                    <ul class="nav nav-pills sort-source font-size-sm" data-sort-id="portfolio" data-option-key="filter" data-plugin-options='{"layoutMode": "fitRows", "filter": "*"}'>
                        <li data-option-value="*" class="active"><a href="#">Tüm Projeler</a></li>
                        @foreach($projekategoriler as $proje)
                        <li data-option-value=".{{$proje->proje_slug}}" ><a href="#">{{$proje->proje_kategori}}</a></li>
                        @endforeach
                        {{--<li data-option-value=".pre-construction"><a href="#">Tamamlananlar</a></li>
                        <li data-option-value=".general-construction"><a href="#">Güncel Olanlar</a></li>
                        <li data-option-value=".plumbing"><a href="#">Su Tesisatı</a></li>
                        <li data-option-value=".painting"><a href="#">Boyananlar</a></li>--}}

                    </ul>

                    <hr class="solid mt-xlg mb-xlg">

                    <div class="row mb-xl pt-xs">

                        <div class="sort-destination-loader sort-destination-loader-showing">
                            <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                                @foreach($projeler as $proje)
                                <li class="col-md-4 isotope-item mb-xlg {{$proje->kategorisi->proje_slug}}">
                                    <a href="/proje/{{$proje->id}}/{{$proje->slug}}">

												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="{{$proje->proje_resim}}" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Projeyi Görüntüle...</span>
														</span>
													</span>
												</span>
                                    </a>
                                    <h4 class="mt-md mb-none">{{$proje->proje_adi}}</h4>
                                    <p class="mb-none">{{$proje->proje_lokasyon}}</p>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>












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



 {{--   <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Featured Projects
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <!-- Block2 -->
                    <div class="block2 bg-img2" style="background-image: url(/anasayfa/images/project-01.jpg);">
                        <div class="block2-content trans-04">
                            <h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
                                System Expansion
                            </h4>

                            <p class="t1-s-2 cl-13 p-b-26">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, various versions have evolved over the years.
                            </p>

                            <a href="projects-detail-01.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <!-- Block2 -->
                    <div class="block2 bg-img2" style="background-image: url(/anasayfa/images/project-02.jpg);">
                        <div class="block2-content trans-04">
                            <h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
                                Training Skill
                            </h4>

                            <p class="t1-s-2 cl-13 p-b-26">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, various versions have evolved over the years.
                            </p>

                            <a href="projects-detail-01.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <!-- Block2 -->
                    <div class="block2 bg-img2" style="background-image: url(/anasayfa/images/project-03.jpg);">
                        <div class="block2-content trans-04">
                            <h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
                                Business Consulting
                            </h4>

                            <p class="t1-s-2 cl-13 p-b-26">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, various versions have evolved over the years.
                            </p>

                            <a href="projects-detail-01.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                                Read More
                            </a>
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