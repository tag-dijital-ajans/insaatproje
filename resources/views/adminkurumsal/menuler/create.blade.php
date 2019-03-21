@extends('adminkurumsal/template')
@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Menü Ekle</h5>
                </div>

                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'menuler.store','method'=>'POST','class'=>'form-horizontal',]) !!}

                    <div class="control-group">
                        <label class="control-label">Menü Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="menu_baslik"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Menü Sayfası Seçin</label>
                        <div class="controls">
                            <select name="sayfa_id" class="span11">
                                <option value="0" selected>Özel Url</option>

                                @foreach($sayfalar as $sayfa)

                                <option value="{{$sayfa->id}}">{{$sayfa->sayfa_basligi}}</option>


                                @endforeach


                            </select>


                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"> Özel Url</label>
                        <div class="controls">
                            <input  type="text" class="span11" name="ozel_url"/>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Menü Sıra</label>
                        <div class="controls">
                            <input type="number" value="0" class="span11" name="sira_no"/>
                            {{--  <textarea name="ozel_url" class="span11"></textarea>--}}
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Üst Menü</label>
                        <div class="controls">
                            <select id="menu_ust_id" name="menu_ust_id" class="span11">

                                <option value="0">Yok</option>
                                @foreach($menuler as $menu)
                                <option value="{{$menu->id}}">{{$menu->menu_baslik}}</option>
                                @endforeach



                            </select>
                        </div>
                    </div>
                   {{-- <div class="control-group">
                        <label class="control-label">İçerik Resmi</label>
                        <div class="controls">
                            <input type="file" class="span11" name="resim"/>
                        </div>
                    </div>--}}
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" >Menü Ekle</button>
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
