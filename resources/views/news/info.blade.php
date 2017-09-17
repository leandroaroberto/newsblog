@extends('layouts.app')
@section('content')

<div class="container">
    @foreach($news as $data)
    
    <h2>{{$data->title}}</h2>
    <small>{{$data->created_at }} - Leandro Roberto</small><!-- Pegar o nome da tabela users -->
    <br><a href="#">PDF</a>
    
        @if($data->photo != 'uploads/nopic.jpg')
            <p align='center'>
            {{ Html::image($data->photo,'alt', array( 'width' => 400, 'height' => 347 , 'class' => 'd-inline-block align-top')) }}
            </p>
        @endif
    </p>
    <p>
        {{$data->fulltext }}
    </p>    
    @endforeach
</div>


@endsection
