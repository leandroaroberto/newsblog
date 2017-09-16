@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome {{ $name }}, here are all your news! You also can create a new one using the button below.</p>
                    <p>
                        <a href="/home/add" class="btn btn-default btn-block">Add new</a>
                    </p>
                    
                    <h1>Your News</h1>
                    <table class="table-responsive table-bordered table-hover table-striped" width="100%">
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Summary</th>
                            <th></th>
                        </tr>
                    @foreach($data as $dt)
                    <tr>
                        <td></td>
                        <td><a href="/home/{{$dt->id}}">{{ $dt->title }}</a></td>
                        <td align="center">{{ $dt->summary }}</td>
                        <td><a href='/home/remove/{{$dt->id}}'>Remove</a></td>
                    </tr>
                    @endforeach
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
