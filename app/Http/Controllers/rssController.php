<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;

use crossover\News;

use XMLWriter;

class rssController extends Controller
{
    
    public function index()
    {    
        $news = News::orderBy('created_at', 'desc')
               ->take(10)
               ->get();
        
        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->startDocument();
        
        $xml->startElement( 'rss' );
        $xml->writeAttribute( 'version', '2.0' );
        $xml->writeAttribute( 'xmlns:atom', 'http://www.w3.org/2005/Atom' );

        $xml->startElement( 'channel' );
        $xml->writeElement( 'title', 'Cross Over News RSS Channel');
        $xml->writeElement( 'link', 'http://news.crossover.com/rss');
        $xml->writeElement( 'description', 'Stay always updated with this RSS Feed!' );
        $xml->writeElement( 'pubDate', date( "D, d M Y H:i:s e" ) );
        $xml->writeElement( 'language', 'EN' );
        $xml->writeElement( 'copyright', 'Cross Over News' );
        
        
        foreach($news as $nx) {
            $xml->startElement('news');
            $xml->writeAttribute('title', $nx->title);
            $xml->writeAttribute('created_at', $nx->created_at);
            $xml->writeAttribute('name', $nx->name);
            $xml->writeAttribute('email', $nx->name);
            $xml->writeAttribute('text', $nx->fulltext);
            $xml->endElement();
        }
        $xml->endElement();
        $xml->endDocument();
        $xml->endDocument();

        $content = $xml->outputMemory();
        $xml = null;

        return response($content)->header('Content-Type', 'text/xml');
    }
    
}
