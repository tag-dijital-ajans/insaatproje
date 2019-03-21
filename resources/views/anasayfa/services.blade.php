<section class="section section-tertiary section-no-border section-custom-construction">
    <div class="container">
        <div class="row pt-xl">
            <div class="col-md-12">
                <h2 class="mb-none text-color-dark"> Hizmetlerimiz</h2>
                <p class="lead">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>

        <div class="row mt-lg">
            @foreach($services as $service)
            <div class="col-md-6">

                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">

                    <div class="feature-box-icon">
                        <img src="/{{$service->hizmet_one_cikan_foto}}" alt="" class="img-responsive"  />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">{{$service->hizmet_basligi}}</h4>
                        <p>{!! $service->hizmet_icerik !!}</p>
                        <a class="mt-md" href="/hizmet/{{$service->id}}/{{$service->slug}}">Daha Fazla <i class="fa fa-long-arrow-right"></i></a>


                    </div>

                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>
{{--
    <!-- Services -->
    <section class="bg-0 p-t-92 p-b-60">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Hizmetlerimiz
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>
            <div class="row justify-content-center">
            <!--  -->
            @foreach($services as $service)

                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <div class="bg-10 h-full">
                        <a href="/hizmet/{{$service->id}}/{{$service->slug}}" class="hov-img0 of-hidden bg-0">
                            <img src="/{{$service->hizmet_one_cikan_foto}}" alt="IMG" width="100" height="320" >

                        </a>

                        <div class="p-rl-30 p-t-26 p-b-20">
                            <h4 class="p-b-9">
                                <a href="/hizmet/{{$service->id}}/{{$service->slug}}" class="t1-m-1 cl-0 hov-link2 trans-02">
                                    {{$service->hizmet_basligi}}
                                </a>
                            </h4>

                            <p style="color: #fff;">
                                {!! $service->hizmet_icerik !!}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
--}}
