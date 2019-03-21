@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Yeni Blog Ekle</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'kategori.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}




                    <div class="control-group">
                        <label class="control-label"> Kategori Adı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="kategori_baslik"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Kategori Açıklama</label>
                        <div class="controls">
                            <input type="text" class="span11" name="kategori_aciklama"  />
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Kategori Ekle</button>
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