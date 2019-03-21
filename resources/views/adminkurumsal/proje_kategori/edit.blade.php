@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Proje_Kategori:{{$proje_kategori->proje_kategori}} </h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::model($proje_kategori,['route'=>['proje_kategori.update',$proje_kategori->id],'method'=>'PUT','class'=>'form-horizontal']) !!}



                    <div class="control-group">
                        <label class="control-label">Proje Kategori Adı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="proje_kategori"  value="{{$proje_kategori->proje_kategori}}" />
                        </div>
                    </div>
                   {{-- <div class="control-group">
                        <label class="control-label">Proje Kategori Açıklama</label>
                        <div class="controls">
                            <input type="text" class="span11" name="kategori_aciklama" value="{{$kategori->kategori_aciklama}}"  />
                        </div>
                    </div>--}}


                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Proje Kategori Güncelle</button>
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