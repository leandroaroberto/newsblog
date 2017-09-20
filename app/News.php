<?php

namespace crossover;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    //
    protected $table = "news";
    protected $filable = ['title','photo','fulltext','summary','email','name'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    function news(){
        return $this->belongsTo('crossover\User');
    }
    
}
