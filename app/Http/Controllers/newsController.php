<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;

use crossover\News;
use crossover\User;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller
{
    
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    
    // List Latest News on HomePage
    public function index(){
        //$news = News::all();
        $news = News::orderBy('created_at', 'desc')
               ->take(3)
               ->get();
        
        
        
        return view('index')->with(['latest'=> $news]);        
    }
    
    
    
    public function dashboard(){
                
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        //$email = "leroberto@gmail.com";
               
        $data = News::where('email', $email)
               ->orderBy('created_at', 'desc')               
               ->get();
        
        return view('home')->with(['data'=> $data,'name'=> $name]);
    }
    
    public function addNews(){
        return view('news.add');
    }
    
    public function saveNews(Request $request){
        //return $request;
        $this->validate($request, [
        'title' => 'required|max:50',
        'text' => 'required|',        
        'photo' => 'mimes:jpeg,jpg,png|file|dimensions:min_width=100,min_height=200,max_width=1024,max_height=768',
        ]);
        
        $news = new News();
        $news->title = $request->input('title');
        $news->fulltext = $request->input('text');
        if ($request->input('summary') != '')
            $news->summary = $request->input('summary');
        else
        {
            //generate summary based on fulltext
        }    
        
        $news->email = Auth::user()->email;
        
        $userid = Auth::user()->id;
        
        //Upload
        $photo = $request->file('photo');
        if ($photo != '')
        {
            $destinationPath = "/usr/pagina/crossover/public/uploads/$userid";
            
            if (! file_exists($destinationPath))
            {
                mkdir($destinationPath, "0755");
            }   
            
            $name = $photo->getClientOriginalName();

            date_default_timezone_set("America/Sao_Paulo");
            $newname = date("Y-m-d-h-i-s.");
            $extension = $photo->getClientOriginalExtension();
            $newname .= strtoupper($extension);        

            if ($photo->move($destinationPath,  $newname)){            
                $news->photo = "uploads/$userid/$newname";
            }
        }
        else
        {
            $news->photo = "uploads/nopic.jpg";
        }
        
        try{
            $id = $news->save();
           
        }
        catch (Exception $e){
            return $e->message();
        }
        
        return redirect('/home/add')->with(['mesage'=>'Your article has been submitted.']);
        
    }
    
    public function show($id){
        //$news = News::find($id)->get();
        $news = News::where('id', $id)               
               ->get();
        
        return view('news.info')->with(['news'=> $news]);
    }
    
    public function remove($id){
        return "Remover $id";
    }
    
    
}
