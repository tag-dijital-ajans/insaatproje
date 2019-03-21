<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>CodePen - Login </title>

    <link rel="stylesheet" href="/anasayfa/css/reset.css">

    <link rel="stylesheet" href="/anasayfa/css/style.css" media="screen" type="text/css" />

</head>

<body>

<div class="wrap">
    <div class="avatar">
        <img src="http://cdn.ialireza.me/avatar.png">
    </div>
    <br method="POST" action="{{ route('login') }}"  class="zm-signin-form text-left" >
        @csrf


        <input id="email" type="email" class="zm-form-control username{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail" required >

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif

    <div class="bar">
        <i></i>
    </div>
        <input id="password" type="password" class="zm-form-control password{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Şifre" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
        <input class="remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Beni Hatırla</br>
  {{--  <a href="" class="forgot_link" >Yeni Şifre </a>--}}
    <a href="{{route('anasayfa')}}">Giriş Yap</a>
    </form>
</div>

<script src="/anasayfa/js/index.js"></script>

</body>

</html>

