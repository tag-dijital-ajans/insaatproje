@extends ('anasayfa.template')

@section('icerik')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-07.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Hizmetler
            </h2>

            <div class="flex-wr-c-c">
                <a href="{{route('anasayfa')}}" class="breadcrumb-item">
                    Anasayfa
                </a>

                <span class="breadcrumb-item">
					Hizmetler
				</span>
            </div>
        </div>
    </section>
    <section class="bg-0 p-t-92 p-b-60">
        <div class="container">
            <!-- Title section -->

            <div class="row justify-content-center">
                <!--  -->
                @foreach($hizmetler as $hizmet)

                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                        <div class="bg-10 h-full">
                            <a href="/hizmet/{{$hizmet->id}}/{{$hizmet->slug}}" class="hov-img0 of-hidden bg-0">
                                <img src=" {{$hizmet->hizmet_one_cikan_foto}}" alt="IMG" width="100" height="320" >

                            </a>

                            <div class="p-rl-30 p-t-26 p-b-20">
                                <h4 class="p-b-9">
                                    <a href="/hizmet/{{$hizmet->id}}/{{$hizmet->slug}}" class="t1-m-1 cl-0 hov-link2 trans-02">
                                        {{$hizmet->hizmet_basligi}}
                                    </a>
                                </h4>

                                <p class="t1-s-2 cl-13">
                                    {!! $hizmet->hizmet_icerik !!}
                                </p>
                            </div>
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