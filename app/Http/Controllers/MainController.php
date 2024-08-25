<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Ad;
use Mail;

use App\Mail\Message;

class MainController extends Controller
{
    public function index()
{   $ad= Ad::first();
    $posts = Post::limit(4)->get();
    $recent_posts = Post::limit(5)->latest()->get();
    $ads_posts = Post::where('ads', 1)->limit(4)->latest()->get();
    $popular_posts = Post::orderBy('view', "DESC")->limit(4)->get();
    $feature_posts = Post::orderBy('view', "DESC")->limit(10)->get();
    $recent_tags = Tag::limit(10)->latest()->get();
    $slider_posts = Post::orderBy('view', "DESC")->limit(6)->get();

    return view('index', compact('posts', 'ads_posts', 'recent_posts', 'popular_posts', 'recent_tags', 'feature_posts', 'slider_posts', 'ad'));
}



    public function categoryPosts($slug)
{       
        $ad= Ad::first();
        $category= Category::where('slug',$slug)->first();
        $posts = Post::limit(4)->get();
        $recent_posts = Post::limit(5)->latest()->get();
        $ads_posts = Post::where('ads',1)->limit(4)->latest()->get();
        $popular_posts = Post::orderBy('view', "DESC")->limit(4)->get();
        $recent_tags = Tag::limit(10)->latest()->get();
        return view('categoryPosts', compact('posts', 'ads_posts', 'recent_posts', 'popular_posts', 'recent_tags', 'category', 'ad'));
}

    public function postDetail($slug)
{       $ad= Ad::first();
        $post = Post::where('slug',$slug)->first();
        $recent_posts = Post::limit(5)->latest()->get();
        $recent_tags = Tag::limit(10)->latest()->get();
        $post->increment('view');
        $post->save();
        return view('postDetail', compact('post', 'recent_posts', 'recent_tags', 'ad'));
}

    public function contact()
{       
        $ad= Ad::first();
        $recent_posts = Post::limit(5)->latest()->get();
        $recent_tags = Tag::limit(10)->latest()->get();
        return view('contact', compact('recent_posts','recent_tags', 'ad'));
        
}

public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('asset/img'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('asset/img'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function search(Request $request){
        $key = $request -> key;
        $ad= Ad::first();
        $recent_posts = Post::limit(5)->latest()->get();
        $recent_tags = Tag::limit(10)->latest()->get();
        $posts = Post::where('title_en', 'like', '%'.$key.'%')->orWhere('content_en', 'like', '%'.$key.'%')->orWhere('title_ru', 'like', '%'.$key.'%')->orWhere('title_uz', 'like', '%'.$key.'%')->orWhere('content_ru', 'like', '%'.$key.'%')->orWhere('content_uz', 'like', '%'.$key.'%')->paginate();
        return view ('search', compact('posts', 'recent_posts', 'recent_tags','ad'));
    }

    public function sendMail(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'msg'=>'required'
        ]);

        // dd($request->all());

        $data = $request->all();

        Mail::to("oyxojaaa@gmail.com")->send(new Message($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
