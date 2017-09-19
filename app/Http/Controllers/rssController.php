<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;

use crossover\News;

class rssController extends Controller
{
    //
    
    public function index()
    {        
        $head = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>";
        $head .= "<rss version=\"2.0\">";
        $head .= "<channel>
          <title>Cross Over News</title>
          <link>http://news.crossover.com</link>
          <description>Latest News</description>";
          
        $data = News::orderBy('created_at', 'desc')
               ->take(10)
               ->get();
          
        $footer = "</channel></rss>";
        
        return view('rss')->with(['head'=> $head, 'data' => $data, 'footer' => $footer]);
    }
    
}
