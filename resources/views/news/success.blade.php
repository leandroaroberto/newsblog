@extends('layouts.app')
@section('content')
<!--<div class="container">
    <div class="alert alert-success">
        <p align="center"><strong>Article has been created successfully!</strong></p>
        <p align="center"><a href="/home" class="btn btn-default">Back</a></p>
    </div>
</div>-->
@component('components.alert')
  @slot('text')
    Article has been created successfully!
  @endslot
  @slot('btn')
    Back
  @endslot
  @slot('link')
    /home
  @endslot

@endcomponent

@endsection
