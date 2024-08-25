<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Ad;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard(){
        $category = Category::count();
        $post = Post::count();
        $tag = Tag::count();
        $ad = Ad::count();
        return view('admin.dashboard', compact('category', 'post','tag', 'ad'));
    }

    
}
