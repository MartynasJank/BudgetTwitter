<?php

namespace App;

use App\Like;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function path(){
        return "/feed/{$this->id}";
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function likesCount(){
        return $this->likes()->where('post_id', $this->id)->get();
    }

    public function commentsCount(){
      return Post::where('post_id', $this->id)->count();
    }

    public function DidAuthUserLikedPost(){
      $like = $this->likes()->where('user_id',  Auth::user()->id)->get();
      if ($like->isEmpty()){
          return false;
      }
      return true;
   }
}
