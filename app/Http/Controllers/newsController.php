<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;

use crossover\News;
use crossover\User;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller
{
    
    // List Latest News on HomePage
    public function index(){        
        $news = News::orderBy('created_at', 'desc')
               ->take(10)
               ->get();
        /*$news = News::orderBy('created_at', 'desc')
               ->paginate(10);*/       
        
        return view('index')->with(['latest'=> $news]);        
    }
    
    
    //Dashboard start page when loged in
    public function dashboard(){
                
        $email = Auth::user()->email;
        $name = Auth::user()->name;
               
        /*$data = News::where('email', $email)
               ->orderBy('created_at', 'desc')               
               ->get();*/
        
        $data = News::where('email', $email)
               ->orderBy('created_at', 'desc')               
               ->paginate(5);
        
        return view('home')->with(['data'=> $data,'name'=> $name]);
    }
    
    public function addNews($message = null){
        return view('news.add')->with('message',$message);
    }
    
    //Publish the news
    public function saveNews(Request $request){

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
            $originalText = $request->input('text');
            $textSummary = explode(" ",$originalText);
            $tam = count($textSummary);
            
            if ($tam > 20)
            {
                $max = $tam / 2;
                $max = intval($max);
                $newText = "";
                
                for($i = 0; $i <= $max; $i++)
                {
                    $newText .= $textSummary[$i]. " ";
                }
                
                $newText = trim($newText);
                $newText .= "...";
                $news->summary = $newText;                
            }   
            else
            {
                $news->summary = $request->input('text');
            }    
            
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
                
        return redirect()->action('newsController@addNews')->withMessage("Your article has been submitted.");
        
        
    }
    
    //Complete article mode
    public function show($id){
        $news = News::where('id', $id)               
               ->get();
        
        return view('news.info')->with(['news'=> $news]);
        
    }
    
    //Removes selected article
    public function remove(Request $request){
        
        $id = $request->input('id');
        $news = News::find($id);
        
        try{
            $news->delete();
        }
        catch (Exception $e){
            return $e->message();
        }
        
        return redirect()->action('newsController@dashboard');
        
    }
     
    //Dialog to confirm article exclusion
     public function showConfirm(Request $data){               
        $str1 = $data->input('str1');
        $action = $data->input('action');
        $method = $data->input('method');        
        $id = $data->input('id');
        $return = $data->input('return');        
        return view('confirm')->with(['str1'=> $str1,'action'=> $action, 'method'=> $method, 'id'=> $id, 'return' => $return]);                
    }
    
    
}
