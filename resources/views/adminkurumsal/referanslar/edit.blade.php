@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Referans Düzenle : {{$referans->referans_adi}}</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::model($referans,(['route'=>['referanslar.update',$referans->id],'method'=>'PUT','class'=>'form-horizontal','files'=>'true'])) !!}




                    <div class="control-group">
                        <label class="control-label"> Referans Adı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="referans_adi" value="{{$referans->referans_adi}}"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Firma Adı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="firma_adi" value="{{$referans->firma_adi}}"  />
                          {{--  <textarea name="firma_adi" class="span11">{!! $referans->firma_adi !!}</textarea>--}}
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Referans Açıklama</label>
                        <div class="controls">
                            <input type="text" class="span11" name="referans_aciklama" value="{{$referans->referans_aciklama}}"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Referans Kapak Görseli</label>
                        <div class="controls">
                            <input type="file" name="referans_gorseli"  class="span11"  />
                        </div>
                        <div><img width="300px" src="/{{$referans->referans_gorseli}}"></div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Referans Güncelle</button>
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