@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Hizmet Düzenle : {{$hizmet->hizmet_basligi}}</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::model($hizmet,(['route'=>['hizmetler.update',$hizmet->id],'method'=>'PUT','class'=>'form-horizontal','files'=>'true'])) !!}




                    <div class="control-group">
                        <label class="control-label"> Hizmet Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="hizmet_basligi" value="{{$hizmet->hizmet_basligi}}"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Hizmet İçerik</label>
                        <div class="controls">
                            <textarea name="hizmet_icerik" class="span11">{!! $hizmet->hizmet_icerik !!}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Hizmet Kapak Fotoğrafı Ekle</label>
                        <div class="controls">
                            <input type="file" name="hizmet_one_cikan_foto"  class="span11"  />
                        </div>
                        <div><img width="300px" src="/{{$hizmet->hizmet_one_cikan_foto}}"></div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Hizmeti Güncelle</button>
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