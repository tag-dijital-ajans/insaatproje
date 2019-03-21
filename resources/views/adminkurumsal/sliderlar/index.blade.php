@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:right; margin: 15px 0 5px 0;"><a href="{{route('sliderlar.create')}}" class="btn btn-success">Slider Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Slider Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Metin 1</th>
                    <th>Metin 2</th>
                    <th>Buton Metni</th>
                    <th>Buton Linki</th>
                    <th>Sıra No</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliderlar as $slider)
                    <tr class="gradeX">
                        <td>{{$slider->metin1}}</td>
                        <td>

{!! str_limit(strip_tags($slider->metin2),$limit=100,$end='...') !!}

                        </td>
                        <td>{{$slider->buton_metni}}</td>
                        <td>{{$slider->buton_linki}}</td>
                        <td>{{$slider->sira_no}}</td>

                        <td class="center"><a href="{{route('sliderlar.edit', $slider->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        {!! Form::model($slider,['route'=>['sliderlar.destroy',$slider->id],'method'=>'DELETE']) !!}
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