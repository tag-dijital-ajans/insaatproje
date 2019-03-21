@extends('adminkurumsal/template')
@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Yeni Kullanıcı Ekle</h5>
                </div>

                <div class="widget-content nopadding">
                    <form method="POST" action="{{ route('kullanici.kayit') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <label class="control-label">Yetki</label>
                            <div class="controls">
                                <select name="yetki" class="span11">
                                    <option value="" selected>Standart Kullanıcı</option>

                                    <option value="admin">Admin</option>

                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Kullanıcı İsmi</label>
                            <div class="controls">
                                <input id="name" type="text" class="span11{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">E-Mail Adresi</label>
                            <div class="controls">
                                <input id="email" type="email" class="span11{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Şifre</label>
                            <div class="controls">
                                <input id="password" type="password" class="span11{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Tekrar Şifre</label>
                            <div class="controls">
                                <input id="password-confirm" type="password" class="span11" name="password_confirmation" required>

                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label">Avatar</label>
                            <div class="controls">
                                <input type="file" class="span11" name="avatar">

                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Kullanıcı Ekle</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection















{{--
@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Yeni Kullanıcı Ekle</h5>
                </div>



                <div class="widget-content nopadding">
                    <div method="POST" action="{{ route('register') }}">
                        @csrf

                    <div class="control-group">
                        <label class="control-label">Yetki</label>
                        <div class="controls">
                            <select name="blog_ust_id" class="span11">

                                <option value="" selected>Standart Kullanıcı</option>
                                <option value="admin" >Admin</option>


                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Kullanıcı İsmi</label>
                        <div class="controls">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Kullanıcı İsmi</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Yazı Başlık</label>
                        <div class="controls">
                            <input type="text"  class="span11" name="yazi_baslik"  />
                        </div>
                    </div>
                    <div class="control-group">
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
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Blog Ekle</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection--}}
