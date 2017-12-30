<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'number', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');

    }

    // public function sumbit(Post $post)
    // {
    //     $this->posts()->save($post);
    // }
     public function user()
    {
        return $this->belongsToMany('App\User');

    }

    public function pins()
    {
        return $this->belongsToMany('App\Pin');

    }

    
}
