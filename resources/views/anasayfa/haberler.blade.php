@extends('anasayfa.template')

@section('icerik')

    <!-- Title page -->

    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-md mt-none">
            <div class="container">
                <div class="row mt-xl">
                    <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                        <h1 class="text-uppercase font-weight-light mt-xl text-color-primary">HABERLER</h1>
                    </div>
                </div>
            </div>
        </section>

    <div class="container">

        <div class="row mb-xl">
            @foreach($haberler as $haber)
            <div class="col-md-6">
                <div class="recent-posts mt-xl mb-xl">
                    <a href="/haber/{{$haber->id}}/{{$haber->slug}}">
                        <img class="img-responsive pb-md" src="{{$haber->resim}}" alt="Blog">
                    </a>
                    <article class="post">
                        <div class="date">
                            <span class="day">15</span>
                            <span class="month">Jan</span>
                        </div>
                        <h4 class="pt-md pb-none mb-none"><a class="text-color-dark" href="/haber/{{$haber->id}}/{{$haber->slug}}">{{$haber->baslik}}</a></h4>
                        <p>By admin</p>

                        <p>{{str_limit(strip_tags($haber->icerik),$limit=150,$end='...')}}</p>
                       {{-- <p>{!! $haber->icerik !!}</p>--}}
                        <a class="mt-md" href="/haber/{{$haber->id}}/{{$haber->slug}}">Daha Fazla <i class="fa fa-long-arrow-right"></i></a>

                    </article>
                </div>
            </div>
         @endforeach
        </div>

    </div>
    </div>


{{--    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-07.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Haberler
            </h2>

            <div class="flex-wr-c-c">
                <a href="home-01.html" class="breadcrumb-item">
                    Anasayfa
                </a>

                <span class="breadcrumb-item">
					Haberler
				</span>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div class="bg-0 p-t-95 p-b-50">
        <div class="container">
            --}}{{--<div class="p-b-45">
                <div class="flex-wr-c-c filter-tope-group">
                    <button class="t1-m-6 cl-16 hov-btn3 trans-02 p-rl-10 p-tb-3 m-all-5 active-2" data-filter="*">
                        All Information
                    </button>

                    <button class="t1-m-6 cl-16 hov-btn3 trans-02 p-rl-10 p-tb-3 m-all-5" data-filter=".business-n">
                        Business
                    </button>

                    <button class="t1-m-6 cl-16 hov-btn3 trans-02 p-rl-10 p-tb-3 m-all-5" data-filter=".training-n">
                        Training
                    </button>

                    <button class="t1-m-6 cl-16 hov-btn3 trans-02 p-rl-10 p-tb-3 m-all-5" data-filter=".security-n">
                        Security
                    </button>

                    <button class="t1-m-6 cl-16 hov-btn3 trans-02 p-rl-10 p-tb-3 m-all-5" data-filter=".market-n">
                        Stock Market
                    </button>
                </div>
            </div>--}}{{--

            <div class="row isotope-grid">

                @foreach($haberler as $haber)
                <div class="col-sm-6 col-lg-4 p-b-50 isotope-item business-n">
                    <div class="bg-0 h-full">
                        <a href="/haber/{{$haber->id}}/{{$haber->slug}}" class="hov-img0 of-hidden">
                            <img src="/{{$haber->resim}}" alt="IMG"  width="100" height="320">
                        </a>

                        <div class="bg-0 p-t-26">
                            <h4 class="p-b-12">
                                <a href="/haber/{{$haber->id}}/{{$haber->slug}}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                    {{$haber->baslik}}

                                </a>
                            </h4>

                            <div class="flex-wr-s-c p-b-9">
                                <div class="p-r-20">
                                    <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                    <span class="t1-s-2 cl-7">
										{{date('d-m-y',strtotime($haber->created_at))}}
									</span>
                                </div>

                                <div class="p-l-20 bo-l-1 bcl-12">
                                    <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                    <a href="#" class="t1-s-2 cl-11 hov-link3">

                                    </a>
                                </div>
                            </div>

                            <p class="t1-s-2 cl-6 p-b-20">
                                {{str_limit(strip_tags($haber->icerik),$limit=200,$end='...')}}
                            </p>

                            <a href="/haber/{{$haber->id}}/{{$haber->slug}}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                               Daha Fazla Oku
                            </a>
                        </div>
                    </div>
                </div>

               @endforeach

            </div>
            <!-- Start Pagination -->
        {{$haberler->links()}}
        <!-- End Pagination -->
        </div>
    </div>--}}


@endsection

@section('css')

@endsection


@section('js')


@endsection