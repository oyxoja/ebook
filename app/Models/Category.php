<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_uz', 'category_ru', 'category_en', 'slug'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
