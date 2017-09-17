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
    <p align="center">
        <a href="{{ Auth::guest() ? url('/') : url('/home') }}" class="btn btn-default">back</a>
    </p>
    
    @if(! Auth::guest())
    <center>
        <p>
        {{Form::open(['url'=>'/home/deleteNews','method'=>'POST'])}}
        {{Form::hidden('str1','You are about to delete this item, are you sure?')}}
        {{Form::hidden('action','newsController@remove')}}
        {{Form::hidden('method','POST')}}
        {{Form::hidden('id',$data->id)}}
        {{Form::hidden('return','newsController@dashboard')}}
        {{Form::submit('Remove this post',['class'=>'btn btn-danger'])}}
        {{Form::close()}}                
        </p>
    </center>    
    @endif
    
</div>


@endsection
