<?php

namespace crossover;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = "news";
    protected $filable = ['title','photo','fulltext','summary','email',];
    protected $dates = ['deleted_at'];
    
    function news(){
        return $this->belongsTo('crossover\User');
    }
    
}
