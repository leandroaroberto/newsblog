@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{$title}}</h1>

    {{Form::open(['url'=>'contact/send'])}}
    <div class="row">
        <div class="col-lg-12">
            {{Form::label('subject','Subject: ')}}
            {{Form::text('subject','',['class'=>'form-control','required','placeholder'=>'Subject'])}}
            {{Form::label('message','Message: ')}}
            {{Form::textarea('message','',['class'=>'form-control','required','placeholder'=>'Your message here'])}}
            {{Form::submit('Send message',['class'=>'btn btn-default'])}}
        </div>
    </div>
     {{Form::close()}}

</div>

@endsection
