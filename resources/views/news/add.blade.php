@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">News</div>
                <div class="panel-body">

                    @if(count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif                    
                    
                    @if(isset($message))
                     <div class="alert alert-success">
                         <p>{{ $message }}</p>
                     </div>
                    @endif
                    
                    <h1>Write a new News</h1>
                    {{Form::open(['action'=> 'newsController@saveNews', 'method'=>'POST', 'enctype'=>'multipart/form-data']) }}
                    <p>
                    {{Form::label('title','*Title: ') }}
                    {{Form::text('title','',['class'=>'form-control','required','placeholder'=>'The title of the News'])}}                    
                    </p>
                    <p>
                    {{Form::label('text','*Text: ') }}
                    {{Form::textarea('text','',['class'=>'form-control','required','rows'=>8, 'placeholder'=>'The fulltext of your News'])}}                    
                    </p>
                    <p>
                    {{Form::label('summary','Summary: ') }}
                    {{Form::textarea('summary','',['class'=>'form-control','rows'=>4, 'placeholder'=>'The summary to display. If blank, system will auto generate it'])}}                    
                    </p>
                    <p>
                    {{Form::label('photo','Photo: ') }}
                    <small>Max dimensions: 2500 x 1000 px (JPG or PNG files)</small>
                    {{Form::file('photo','',['class'=>'form-control'])}}                    
                    </p>
                    <p>
                    {{Form::submit('Send',['class'=>'form-control btn-group btn-success']) }}
                    </p>
                    
                    {{Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection