<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //restricts columns from modifying
    protected $guarded = [];

    // post has many comments
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'on_post');
    }
    
    // returns the instance of the user who is author of that post
    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }
}
