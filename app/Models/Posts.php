<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($post) {
            $post->user()->associate(Auth::user()->id);
            $post->category()->associate(request()->category);
        });
        self::updating(function ($post) {
            $post->category()->associate(request()->category);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(PostsComments::class, 'commentable');
    }

}