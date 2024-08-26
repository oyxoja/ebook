<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title_uz','title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en', 'image', 'book', 'category_id', 'category_en', 'slug', 'ads' ];


    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tag');
    }


}
