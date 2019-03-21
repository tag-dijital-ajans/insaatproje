@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:right; margin: 15px 0 5px 0;"><a href="{{route('sayfalar.create')}}" class="btn btn-success">Sayfa Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Sayfa Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Sayfa Başlık</th>
                    <th>Sayfa Açıklama</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sayfalar as $sayfa)
                    <tr class="gradeX">
                        <td>{{$sayfa->sayfa_basligi}}</td>
                        <td>

{!! str_limit(strip_tags($sayfa->sayfa_icerik),$limit=100,$end='...') !!}

                        </td>

                        <td class="center"><a href="{{route('sayfalar.edit', $sayfa->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        {!! Form::model($sayfa,['route'=>['sayfalar.destroy',$sayfa->id],'method'=>'DELETE']) !!}
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