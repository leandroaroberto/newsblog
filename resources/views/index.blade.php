@extends('layouts.app')
@section('content')

    <h1>Latest News</h1>
    @if(count($latest) > 0)
    <div class="row">
        @foreach($latest as $news)
            @component('components.custom-content')
              @slot('title')
                <a href="/home/{{$news->id}}">{{ $news->title }}</a>
              @endslot
              @slot('image')
                {{$news->photo}}
              @endslot
              @slot('breadcumbs')
                {{$news->created_at }} - {{$news->name}} - {{$news->email}}
              @endslot
              @slot('summary')
                {{ $news->summary }}
              @endslot
              @slot('link')
                /home/{{$news->id}}
              @endslot
            @endcomponent
        @endforeach
    </div>

    @else
        <p>Strange, but today we do not have any news!</p>
    @endif

@endsection
