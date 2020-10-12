<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    Public function likedBy($user)
    {
      $item = Like::where('user_id', $user->id)->where('post_id', $this->id);
      return $item;
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
}
