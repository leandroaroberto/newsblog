@extends('layouts.app')
@section('content')

<div class="container">
    @foreach($news as $data)
    <h2>{{$data->title}}</h2>
    <p>
        {{$data->fulltext }}
    </p>    
    @endforeach
</div>


@endsection
