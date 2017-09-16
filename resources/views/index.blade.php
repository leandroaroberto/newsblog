@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Latest News</h1>    
    @if(count($latest) > 0)
        @foreach($latest as $news)            
            <h2><a href="/home/{{$news->id}}">{{ $news->title }}</a></h2>
            <p>{{ $news->summary }}</p>            
        @endforeach
    @else
        <p>Strange, but today we do not have any news!</p>    
    @endif            
</div>

@endsection