@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>İletişim Formu</h5>
                </div>



                <div class="widget-content nopadding">
                    <form action="{{route('iletisim.gonder')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                  {{--  {!! Form::open(['route'=>'bloglar.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}--}}


                  {{--  <div class="control-group">
                        <label class="control-label">Üst Kategori</label>
                        <div class="controls">
                            <select name="blog_ust_id" class="span11">

                                <option value="" selected>Üst Blog</option>
                                @foreach($bloglar as $blog)

                                    <option value="{{$blog->id}}">{{$blog->blog_adi}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>--}}

                    <div class="control-group">
                        <label class="control-label"> Ad Soyad</label>
                        <div class="controls">
                            <input type="text" class="span11" name="adsoyad"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">E-Mail Adresi</label>
                        <div class="controls">
                            <input type="text" class="span11" name="email"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Mesajınız </label>
                        <div class="controls">
                            <input type="text"  class="span11" name="mesaj"  />
                        </div>
                    </div>
                  {{--  <div class="control-group">
                        <label class="control-label"> Yazı İçerik</label>
                        <div class="controls">
                            <input type="text"  class="span11" name="yazi_icerik"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Yazı Kategorisi</label>
                        <div class="controls">
                            <input type="text"  class="span11" name="yazi_kategorisi"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Yazı İçin Öne Çıkan Foto Ekle</label>
                        <div class="controls">
                            <input type="file" name="blog_foto" id="blog_foto" class="span11"  />
                        </div>
                    </div>--}}
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Formu Gönder </button>
                    </div>
                    </form>
                   {{-- {!! Form::close() !!}--}}
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection