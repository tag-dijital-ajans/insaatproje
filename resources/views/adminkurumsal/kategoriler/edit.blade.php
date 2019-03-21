@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Kategori:{{$kategori->kategori_baslik}} </h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::model($kategori,['route'=>['kategori.update',$kategori->id],'method'=>'PUT','class'=>'form-horizontal']) !!}



                    <div class="control-group">
                        <label class="control-label">Kategori Adı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="kategori_baslik"  value="{{$kategori->kategori_baslik}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Kategori Açıklama</label>
                        <div class="controls">
                            <input type="text" class="span11" name="kategori_aciklama" value="{{$kategori->kategori_aciklama}}"  />
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Kategori Güncelle</button>
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

@endsection