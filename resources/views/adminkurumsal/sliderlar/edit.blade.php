@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Slider Düzenle : {{$slider->metin_1}}</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::model($slider,(['route'=>['sliderlar.update',$slider->id],'method'=>'PUT','class'=>'form-horizontal','files'=>'true'])) !!}




                    <div class="control-group">
                        <label class="control-label"> Metin 1</label>
                        <div class="controls">
                            <input type="text" class="span11" name="metin1" value="{{$slider->metin1}}"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Metin 2</label>
                        <div class="controls">
                            <input type="text" class="span11" name="metin2" value="{{$slider->metin2}}"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"> Buton Metni</label>
                        <div class="controls">
                            <input type="text" class="span11" name="buton_metni" value="{{$slider->buton_metni}}"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"> Buton Linki</label>
                        <div class="controls">
                            <input type="text" class="span11" name="buton_linki" value="{{$slider->buton_linki}}"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Slider Sıra</label>
                        <div class="controls">
                            <input type="number"  class="span11" name="sira_no" value="{{$slider->sira_no}}" />

                            {{--  <textarea name="ozel_url" class="span11"></textarea>--}}
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Slider Kapak Fotoğrafı</label>
                        <div class="controls">
                            <input type="file" name="slider_resmi"  class="span11" />
                        </div>
                        <div><img width="300px" src="/{{$slider->slider_resmi}}" ></div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Slider Güncelle</button>
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