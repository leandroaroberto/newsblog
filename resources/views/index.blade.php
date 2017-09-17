@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Latest News</h1>    
    @if(count($latest) > 0)
        @foreach($latest as $news) 
        <div class="alert bg-grey" >        
            <div style="width:100%">
                <h2><a href="/home/{{$news->id}}">{{ $news->title }}</a></h2> 
            </div>
            <div style="width:100%">
                <small>{{$news->created_at }}</small>
            </div>  
            <div style="width:80%">
            {{ $news->summary }}            
            </div>     
            <div style="width:20%">
                <a href="/home/{{$news->id}}">    
                @if($news->photo != '')
                    {{ Html::image($news->photo,'alt', array( 'width' => 200, 'height' => 149 , 'class' => 'd-inline-block align-top')) }}
                @else
                    {{ Html::image('uploads/nopic.jpg') }}
                @endif           
                </a>            
            </div>
        </div>
        
        @endforeach
    @else
        <p>Strange, but today we do not have any news!</p>    
    @endif            
</div>

@endsection