@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Sayfa Ekle</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'sayfalar.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}




                    <div class="control-group">
                        <label class="control-label"> Sayfa Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="sayfa_basligi"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Sayfa İçerik</label>
                        <div class="controls">
                           <textarea name="sayfa_icerik" class="span11"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Sayfa için Fotoğraf Ekle </label>
                        <div class="controls">
                            <input type="file" name="sayfa_one_cikan_foto"  class="span11"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Sayfa Ekle</button>
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