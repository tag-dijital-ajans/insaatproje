
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
                    <th>P. Kategorisi</th>
                    <th>P. Adı</th>
                    <th>P. Açıklama </th>
                    <th>Proje lokasyonu</th>
                    <th>Proje Tipi</th>
                    <th>Proje Müşteri</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($projeler as $proje)



                    <tr class="gradeX">

                        <td>
                            {{$proje->kategorisi->proje_kategori}}

                        </td>

                        <td>{{$proje->proje_adi}}</td>

                        <td>{!! $proje->proje_aciklama !!}</td>

                        <td>{{$proje->proje_lokasyon}} </td>

                        <td>{{$proje->proje_tipi}}</td>


                        <td>{{$proje->proje_musteri}}</td>
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

    {{--	<form action="{{route('kategoriler.destroy',$kategori->id)}}" method="DELETE">
        {{csrf_field()}}
    </form>--}}

@endsection

@section('css')
    <link rel="stylesheet" href="/admin/css/uniform.css" />
    <link rel="stylesheet" href="/admin/css/select2.css" />
@endsection

@section('js')
    <script src="/admin/js/excanvas.min.js"></script>
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/jquery.ui.custom.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>

    <script src="/admin/js/jquery.dataTables.min.js"></script>
    <script src="/admin/js/matrix.tables.js"></script>

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
