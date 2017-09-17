@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Are you sure?</div>
            <div class="panel-body">
                <p>
                    {{$str1}}
                </p>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        {{ Form::open(['action'=> $action,'method'=> $method]) }}
                        {{Form::submit('Yes',['class'=>'btn btn-success'])}}                        
                        {{Form::hidden('id',$id)}} 
                        {{Form::hidden('return',$return)}}                        
                        {{Form::close()}}
                        <br>
                        {{Form::open(['action'=>  $return,'method'=>'GET']) }}
                        {{Form::submit('No',['class'=>'btn btn-danger'])}}  
                        {{Form::close()}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection