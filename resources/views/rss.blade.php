

    {{ $head }}

    @foreach($data as $rss)    
        <item>
        <title>$rss->title</title>
        <link>http://news.crossover.com//home/{{ $rss->id }}</link>
        <description>{{$rss->summary }}</description>
        </item>
    @endforeach
    
    {{ $footer }}