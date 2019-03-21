@extends ('anasayfa.template')

@section('icerik')


    <!-- Title page -->
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
    </section>

@endsection

@section('css')

@endsection

@section('js')

@endsection
