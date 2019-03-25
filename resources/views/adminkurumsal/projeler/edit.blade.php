
@extends('adminkurumsal/template')
@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Proje Düzenle : {{$proje->proje_adi}}</h5>
                </div>

                <div class="widget-content nopadding">
                    {!! Form::model($proje,['route'=>['projeler.update',$proje->id],'method'=>'PUT','class'=>'form-horizontal','files'=>'true']) !!}

                    <div class="control-group">
                        <label class="control-label">Proje Seçin</label>
                        <div class="controls">
                            <select name="proje_kategori_id" class="span11">
                                <option value="{{$proje->kategorisi->id}}" selected>{{$proje->kategorisi->proje_kategori}}</option>

                                @foreach($proje_kategoriler as $kategori)

                                    <option value="{{$kategori->id}}">{{$kategori->proje_kategori}}</option>


                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Proje Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="proje_adi" value="{{$proje->proje_adi}}"/>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Proje Açıklama</label>
                        <div class="controls">
                            <textarea name="proje_aciklama" class="span11"> {!! $proje->proje_aciklama !!} </textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Proje Lokasyon</label>
                        <div class="controls">
                            <input type="text" class="span11" name="proje_lokasyon"  value="{{$proje->proje_lokasyon}}"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Proje Türü</label>
                        <div class="controls">
                            <input type="text" class="span11" name="proje_tipi"  value="{{$proje->proje_tipi}}"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Proje Müşteri</label>
                        <div class="controls">
                            <input type="text" class="span11" name="proje_musteri"  value="{{$proje->proje_musteri}}"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Proje Tarihi</label>
                        <div class="controls">
                            <input type="text" class="span11" name="proje_tarihi"  value="{{$proje->proje_tarihi}}"/>
                        </div>
                    </div>


                  {{--  <div class="control-group">
                        <label class="control-label">Mevcut Resmi</label>
                        <div class="controls">
                            <div><img border="0" src="/{{$proje->resim}}" width="150" height="150"> </div>
                        </div>
                    </div>--}}

                    <div class="control-group">
                        <div><img border="0"src="/{{$proje->proje_resim}}" width="150" height="150"> </div>
                        <label class="control-label">Proje Resmi</label>
                        <div class="controls">
                            <input type="file" class="span11" name="proje_resim"/>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Proje Güncelle</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>
    <div style="clear:both;"></div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
                    <h5>Resim Galerisi</h5>
                </div>
                <div class="widget-content">
                    <ul class="thumbnails">


                        @foreach($resimler as $resim)
                            <li class="span2">
                                {!! Form::model($resim,['route'=>['resimler.destroy',$resim->id],'method'=>'DELETE']) !!}
                                <img src="/{{$resim->resim}}" alt="" width="240" height="40" >
                                <br>
                                    <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger btn-mini">Sil</button>


                                {!! Form::close() !!}



                            </li>
                        @endforeach

                        {{--@foreach($resimler as $resim)
                            <li class="span2"> <a> <img src="/{{$resim->resim}}" alt="" width="240" height="40" > </a>
                                <div class="actions"> <a title="" class="" href="{{route('projeresim.sil',$resim->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Resim Silinsin Mi?"><i class="icon-trash"></i></a> <a class="lightbox_trigger" href="/{{$resim->resim_yolu}}"><i class="icon-search"></i></a> </div>
                            </li>
                        @endforeach--}}



                    </ul>

                </div>
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

{{--
@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>İçerik  Ekle</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'yazilar.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}


                    <div class="control-group">
                        <label class="control-label"> Blog Seçin</label>
                        <div class="controls">
                            <select name="blog" class="span11">

                                <option value="" selected> Blog Seçin</option>
                                @foreach($bloglar as $blog)

                                    <option value="{{$blog->id}}">{{$blog->blog_adi}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> İçerik Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="baslik"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">İçerik Açıklama</label>
                        <div class="controls">
                            <textarea name="icerik" class="span11"></textarea>
                         </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">İçerik İçin Öne Çıkan Foto Ekle</label>
                        <div class="controls">
                            <input type="file" name="resim"  class="span11"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">İçerik Ekle</button>
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
@endsection--}}
