<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsComments extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Posts::class, 'commentable_id');
    }

    public function comments()
    {
        return $this->morphMany(PostsComments::class, 'commentable');
    }
    public function commentable()
    {
        return $this->morphTo();
    }
}