<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Ad;

class AdminPageController extends Controller
{
    public function dashboard(){
        $category = Category::count();
        $post = Post::count();
        $tag = Tag::count();
        $ad = Ad::count();
        return view('admin.dashboard' , compact('category','post','tag','ad'));
    }
}
