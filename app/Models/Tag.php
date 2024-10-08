<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['tag', 'slug'];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
