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

            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-title">
                        <div class="row">
                            <div class="portfolio-nav-all col-md-1">
                                <a href="{{route('projeleri.goster')}}" data-tooltip data-original-title="Listeye Geri Dön"><i class="fa fa-th"></i></a>
                            </div>
                            <div class="col-md-10 center">
                                <h2 class="mb-none">{{$proje->proje_adi}}</h2>
                            </div>
                            <div class="portfolio-nav col-md-1">
                                @if(isset($prev))
                                <a href="{{url("proje/$prev/slug")}}" class="portfolio-nav-prev" data-tooltip data-original-title="Geri"><i class="fa fa-chevron-left"></i></a>
                                @endif
                                @if(isset($next))
                                <a href="{{url("proje/$next/slug")}}" class="portfolio-nav-next" data-tooltip data-original-title="İleri"><i class="fa fa-chevron-right"></i></a>
                                    @endif
                            </div>

                        </div>
                    </div>

                    <hr class="solid tall">
                </div>
            </div>

            <div class="row mb-xlg">
                <div class="col-md-4">
                    <div class="thumb-gallery">
                        <div class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                           {{-- @foreach($projeler as $proje)--}}
                            @foreach($fotolar as $foto)
                            <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
                                <div>
                                    <a href="/proje/{{$foto->id}}/{{$foto->resim}}">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
													<span class="thumb-info-wrapper font-size-xl">
														<img alt="Project Image" src="/proje/{{$foto->id}}/{{$foto->resim}}" class="img-responsive">
														<span class="thumb-info-title font-size-xl">
															<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
														</span>
													</span>
												</span>
                                    </a>
                                </div>
                            </div>
                          @endforeach

                        </div>

                        <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">

                            <div>
                                <img alt="Project Image" src="/{{$foto->resim}}" class="img-responsive cur-pointer">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="project-detail-construction">

                        <h3 style="color: #e04622 ">PROJE HAKKINDA </h3>

                        <div class="row">
                            <div class="col-md-5">

                                <ul class="list-project-details">
                                    <li>
                                        <label>PROJE YERİ :</label>
                                        <p>{{$proje->proje_lokasyon}}</p>
                                    </li>
                                    <li>
                                        <label>PROJE TİPİ :</label>
                                        <p>{{$proje->proje_tipi}}</p>
                                    </li>
                                    <li>
                                        <label>PROJE MALİYETİ :</label>
                                        <p>$100,000</p>
                                    </li>
                                    <li>
                                        <label>PROJE MÜŞTERİ :</label>
                                        <p>{{$proje->proje_musteri}}</p>
                                    </li>
                                </ul>

                            </div>

                           {!!  $proje->proje_aciklama !!}
                       {{--     <div class="col-md-7">
                                <div class="progress-bars progress-bars-project-detail">
                                    <div class="progress-label">
                                        <span>Genel İlerleme</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="81%">
                                            <span class="progress-bar-tooltip">81%</span>
                                        </div>
                                    </div>
                                    <div class="progress-label">
                                        <span>Faz 1</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300">
                                            <span class="progress-bar-tooltip">85%</span>
                                        </div>
                                    </div>
                                    <div class="progress-label">
                                        <span>Faz 2</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600">
                                            <span class="progress-bar-tooltip">75%</span>
                                        </div>
                                    </div>
                                    <div class="progress-label">
                                        <span>Faz 3</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="900">
                                            <span class="progress-bar-tooltip">85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection