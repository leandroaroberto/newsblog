<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;

class dialogController extends Controller
{
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
