@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:right; margin: 15px 0 5px 0;"><a href="{{route('proje_kategori.create')}}" class="btn btn-success">Proje Kategori Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Proje Kategori Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Proje Kategori</th>

                    <th>Seo İçin Açıklama</th>
                    <th width="8%">Düzenle </th>
                    <th width="8%">Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proje_kategoriler as $proje_kategori)
                    <tr class="gradeX">
                        <td>{{$proje_kategori->proje_kategori}}</td>
                        <td>{{$proje_kategori->proje_slug}}</td>
                        <td class="center"><a href="{{route('proje_kategori.edit', $proje_kategori->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        @if($proje_kategori->id == '7')
                            <td>Silinemez</td>
                        @else
                            {!! Form::model($proje_kategori,['route'=>['proje_kategori.destroy',$proje_kategori->id],'method'=>'DELETE']) !!}
                            <td class="center">
                                <button type="submit" onclick="return window.confirm('Silmek istediğinize emin misiniz?');" class="btn btn-danger btn-mini">Sil</button>
                            </td>

                            {!! Form::close() !!}
                        @endif
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
@endsection