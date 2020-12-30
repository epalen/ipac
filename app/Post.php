<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'slug', 'content', 'user_id'];

    // Relation with User
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('title', 'like', '%' .$name. '%');
    }
}
