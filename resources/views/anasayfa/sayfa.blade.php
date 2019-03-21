@extends ('anasayfa.template')

@section('icerik')

     <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-05.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                {{$sayfa->sayfa_basligi}}
            </h2>

            <div class="flex-wr-c-c">
                <a href="#" class="breadcrumb-item">
                    Anasayfa
                </a>

                <span class="breadcrumb-item">
					{{$sayfa->sayfa_basligi}}
				</span>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-92 p-b-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6 p-b-35">
                    <div class="flex-col-c-s p-b-35">
                        <h3 class="t1-b-1 cl-3 m-b-11">
                            {{$sayfa->sayfa_basligi}}
                        </h3>
                        <div class="size-a-2 bg-3"></div>
                    </div>
                    <div class="p-r-20 p-r-0-sr767">
                        <p class="t1-s-2 cl-6 m-b-10">
                            {!! $sayfa->sayfa_icerik !!}
                        </p>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 p-b-35">
                    <img src="/{{$sayfa->sayfa_one_cikan_foto}}" width="600px">
                </div>
            </div>
        </div>
    </section>

@endsection

@section('css')

@endsection

@section('js')

@endsection