
@extends('adminkurumsal/template')
@section('icerik')
    <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('menuler.create')}}" class="btn btn-success">Menü Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Menü  Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Menü Başlık</th>
                    <th> Menü Url veya Sayfasi </th>
                    <th>Menü Sıra</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($menuler as $menu)

                    <tr class="gradeX">
                        <td>{{$menu->menu_baslik}}</td>
                        <td>
                        @if($menu->sayfa_id)
                        <strong>Sayfa:</strong> {{$menu->sayfasi->sayfa_basligi}}
                        @else
                        <strong>Özel Url:</strong> {{$menu->ozel_url}}

                        @endif


                        </td>
                        <td>{{$menu->sira_no}}</td>
                        <td class="center"><a href="{{route('menuler.edit',$menu->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>

                        {!! Form::model($menu,['route'=>['menuler.destroy',$menu->id],'method'=>'DELETE']) !!}

                        <td class="center">

                            <button type="submit" onclick="return window.confirm('Silmek istediğinize emin misiniz?');" class="btn btn-danger btn-mini">Sil</button>

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

