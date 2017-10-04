<h1>News</h1>

@foreach($news as $n)
<h2>{{$n->title}}</h2>
<small>{{$n->created_at}} - {{$n->name}} - {{ $n->email}}</small>
<p>
    {{$n->fulltext}}
</p>
@endforeach