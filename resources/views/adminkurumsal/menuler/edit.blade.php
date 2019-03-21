

@extends('adminkurumsal/template')
@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>İçerik Düzenle : {{$menu->menu_baslik}}</h5>
                </div>

                <div class="widget-content nopadding">
                    {!! Form::model($menu,['route'=>['menuler.update',$menu->id],'method'=>'PUT','class'=>'form-horizontal'])!!}

                    <div class="control-group">
                        <label class="control-label"> Linki veya Sayfası</label>
                        <div class="controls">
                            @if($menu->sayfa_id)
                           {{$menu->sayfasi->sayfa_basligi}}
                           @else
                           {{$menu->ozel_url}}
                           @endif

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Menü Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="menu_baslik" value="{{$menu->menu_baslik}}"/>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">Menü Sıra</label>
                        <div class="controls">
                            <input type="number"  class="span11" name="sira_no"/>
                            {{--  <textarea name="ozel_url" class="span11"></textarea>--}}
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Menü Güncelle</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')
    <script src="/adminkurumsal/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

@endsection