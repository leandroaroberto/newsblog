<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;
use crossover\News;
use PDF;


class pdfController extends Controller
{
    //Creates a pdf file with info
    public function toPDF($id){        
        
        $news = News::where('id', $id)               
                   ->get();
        $pdf = PDF::loadView('pdf', ['news'=> $news]);
        return $pdf->download('news.pdf');        
    }
    
}
