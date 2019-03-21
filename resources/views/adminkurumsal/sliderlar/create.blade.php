@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Slider Ekle</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'sliderlar.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}




                    <div class="control-group">
                        <label class="control-label"> Metin 1</label>
                        <div class="controls">
                            <input type="text" class="span11" name="metin1"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Metin 2</label>
                        <div class="controls">
                            <input type="text" class="span11" name="metin2"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Buton Metni</label>
                        <div class="controls">
                            <input type="text" class="span11" name="buton_metni"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Buton Linki</label>
                        <div class="controls">
                            <input type="text" class="span11" name="buton_linki"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Slider Sıra</label>
                        <div class="controls">
                            <input type="number" value="0" class="span11" name="sira_no"/>
                            <span class="help-block">Sıra belirtilmezse sıfır(0) değeri alır</span>
                            {{--  <textarea name="ozel_url" class="span11"></textarea>--}}
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"> Slider Fotoğrafı</label>
                        <div class="controls">
                            <input type="file" name="slider_resmi"  class="span11"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Slider Ekle</button>
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