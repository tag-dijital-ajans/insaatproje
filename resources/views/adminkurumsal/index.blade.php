@extends('adminkurumsal.template')

@section('icerik')

    <div class="container-fluid">
        <!--Chart-box-->
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                    <h5>Site İstatistik</h5>
                </div>
                <div class="widget-content" >
                    <div class="row-fluid">

                        <div class="span6">
                            <ul class="site-stats">
                                <li class="bg_lh"> <strong>{{$sayfacount}}</strong> <small>Sayfa</small></li>
                                <li class="bg_lh"> <strong>{{$hizmetcount}}</strong> <small>Hizmetler</small></li>
                                <li class="bg_lh"> <strong>{{$habercount}}</strong> <small>Haber</small></li>
                                <li class="bg_lh"> <strong>{{$referanscount}}</strong> <small>Referans</small></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--End-Chart-box-->

            <div  class="widget-box">
                <div  class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon icon-paper-clip"> <i class="icon-chevron-down"></i> </span>
                    <h5>  Son Haberler</h5>
                </div>

                @foreach ($lastnews as $haber)
                    <div class="new-update clearfix">
                        <i class="icon-gift"></i>
                        <span class="update-notice">
                        <a title="" href="#"><strong>{{$haber->baslik}} </strong></a>
                        <span>{!! str_limit(strip_tags($haber->icerik ),$limit=200,$end='...') !!}</span> </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

@endsection


@section('css')

@endsection

@section('js')

@endsection