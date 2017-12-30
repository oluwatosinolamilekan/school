<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
    'title',
    'imagePath',
    'body'
    
    ];

     public function user()
    {
        return $this->belongsTo('App\User');

    }

    public function pin()
    {
        return $this->belongsTo('App\Pin');

    }
}