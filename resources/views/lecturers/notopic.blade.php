@extends('layouts.masterdosen')
@section('content')
    <h1 class="page-header" style="background-color:#222222; color:#DEDEDE; text-align:center">
        {!! Html::image('./img/logo.jpg', 'alt', array( 'width' => 150, 'height' => 150 )) !!} ONLINE PRESENCE
        SYSTEM
    </h1>
    <h2 style="text-align:center">
        <small>:: Department of Mathematics, Faculty of Mathematics and Natural Science State University of
            Jakarta ::
        </small>
    </h2>

    <h5><p class='text-center'>
            Hari, Tanggal :
            @inject('helpers', 'App\Helpers')
            {!! $helpers::indonesian_date() !!}
            <span id='output'></span> WIB
        </p>
    </h5>

    <h2 style="color:black; text-align:center">No registered course is found, please create it first</h2>
    <br>

    {!! Form::open(array('url' => '/createcourse/tambahMatkul', 'class' => 'form-horizontal','method'=>'get')) !!}
    <div class="form-group">
        {!! Form::submit('Create Course',['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(array('url' => '/coursetopic', 'class' => 'form-horizontal','method'=>'get')) !!}
    <div class="form-group">
        <button type="submit" class="btn btn-default btn-block"><b>Lihat Topik Perkuliahan</b></button>
    </div>
    {!! Form::close() !!}
    <br>
    <br>
@stop