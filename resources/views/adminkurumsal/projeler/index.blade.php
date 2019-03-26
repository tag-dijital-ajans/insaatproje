
@extends('adminkurumsal/template')
@section('icerik')
    <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('projeler.create')}}" class="btn btn-success">Proje Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Proje Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th width="20%">Görsel</th>
                    <th width="60%">Adı</th>

                    <th width="10%">Proje lokasyonu</th>


                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($projeler as $proje)



                    <tr class="gradeX">

                       <td><img src="/{{$proje->proje_resim}}" width="150px"> </td>
                        <td> {{$proje->proje_adi}} </td>
                        <td>{{$proje->proje_lokasyon}} </td>




                            <td class="center"><a href="{{route('projeler.edit',$proje->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>

                        {!! Form::model($proje,['route'=>['projeler.destroy',$proje->id],'method'=>'DELETE']) !!}

                        <td class="center">

                            <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger btn-mini">Sil</button>

                        </td>

                        {!! Form::close() !!}

                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>

  {{--  <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('projeler.create')}}" class="btn btn-success">Resim Yükle</a></div>--}}
   {{-- <div style="clear:both;"></div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
                    <h5>Resim Galerisi</h5>
                </div>
                <div class="widget-content">
                    <ul class="thumbnails">
                        @foreach($resimler as $resim)
                            <li class="span2"> <a> <img src="/{{$resim->resim}}" alt="" width="240" height="40" > </a>
                                <div class="actions"> <a title="" class="" href="{{route('resimler.destroy',$resim->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Resim Silinsin Mi?"><i class="icon-trash"></i></a> <a class="lightbox_trigger" href="/{{$resim->resim_yolu}}"><i class="icon-search"></i></a> </div>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </div>
    </div>
--}}
    {{--	<form action="{{route('kategoriler.destroy',$kategori->id)}}" method="DELETE">
        {{csrf_field()}}
    </form>--}}

@endsection

@section('css')

    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

    <link rel="stylesheet" href="/admin/css/uniform.css" />
    <link rel="stylesheet" href="/admin/css/select2.css" />
@endsection

@section('js')

    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

    <script src="/admin/js/excanvas.min.js"></script>
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/jquery.ui.custom.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>

    <script src="/admin/js/jquery.dataTables.min.js"></script>
    <script src="/admin/js/matrix.tables.js"></script>


    <script>

        (function(window, $, undefined) {
            var Laravel = {
                initialize: function() {
                    this.methodLinks = $('a[data-method]');
                    this.token = $('a[data-token]');
                    this.registerEvents();
                },
                registerEvents: function() {
                    this.methodLinks.on('click', this.handleMethod);
                },
                handleMethod: function(e) {
                    e.preventDefault()
                    var link = $(this)
                    var httpMethod = link.data('method').toUpperCase()
                    var form

                    if ($.inArray(httpMethod, ['PUT', 'DELETE']) === -1) {
                        return false
                    }
                    Laravel
                        .verifyConfirm(link)
                        .done(function () {
                            form = Laravel.createForm(link)
                            form.submit()
                        })
                },
                verifyConfirm: function(link) {
                    var confirm = new $.Deferred()
                    var userResponse = window.confirm(link.data('confirm'))
                    if (userResponse) {
                        confirm.resolve(link)
                    } else {
                        confirm.reject(link);
                    }
                    return confirm.promise()
                },
                createForm: function(link) {
                    var form =
                        $('<form>', {
                            'method': 'POST',
                            'action': link.attr('href')
                        });
                    var token =
                        $('<input>', {
                            'type': 'hidden',
                            'name': '_token',
                            'value': link.data('token')
                        });
                    var hiddenInput =
                        $('<input>', {
                            'name': '_method',
                            'type': 'hidden',
                            'value': link.data('method')
                        });
                    return form.append(token, hiddenInput)
                        .appendTo('body');
                }
            };
            Laravel.initialize();
        })(window, jQuery);



    </script>
@endsection




{{--
@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:right; margin: 15px 0 5px 0;"><a href="{{route('yazilar.create')}}" class="btn btn-success"> İçerik Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Blog Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Yazı Başlık</th>
                    <th>Kategori</th>
                    <th>Yazar</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($yazilar as $yazi)
                    <tr class="gradeX">
                        <td>{{$yazi->baslik}}</td>
                        <td>
                            {{$yazi->kategorisi->baslik}}

                        </td>
                        <td>{{$yazi->kullanici->name}}</td>
                        <td class="center"><a href="{{route('yazilar.edit', $yazi->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        {!! Form::model($yazi,['route'=>['yazilar.destroy',$yazi->id],'method'=>'DELETE']) !!}
                        <td class="center">
                            <button type="submit" class="btn btn-danger btn-mini">Sil</button>
                        </td>

                        {!! Form::close() !!}
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('css')
    <link rel="stylesheet" href="/adminkurumsal/css/uniform.min.css" />
    <link rel="stylesheet" href="/adminkurumsal/css/select2.css" />

@endsection

@section('js')
    <script src="/adminkurumsal/js/excanvas.min.js"></script>
    <script src="/adminkurumsal/js/jquery.min.js"></script>
    <script src="/adminkurumsal/js/jquery.ui.custom.js"></script>
    <script src="/adminkurumsal/js/bootstrap.min.js"></script>

    <script src="/adminkurumsal/js/jquery.dataTables.min.js"></script>
    <script src="/adminkurumsal/js/matrix.tables.js"></script>
@endsection--}}
