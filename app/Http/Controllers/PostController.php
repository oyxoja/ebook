<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view ('admin.posts.index', ['posts'=>Post::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $tags = Tag::all();
        $categories = Category::all();
        return view (' admin.posts.create',compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'content_uz' => 'required',
            'content_ru' => 'required',
            'content_en' => 'required',
            'image' => 'required',
            'book' => 'required',    
            'category_id' => 'required'
        ]);
    
        $requestData = $request->all();
    
    
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time(). '_image.'.$image->getClientOriginalExtension();
            $image->move(public_path('asset/img'), $image_name); 
            $requestData['image'] = $image_name;
        }

       
    
      
        if($request->hasFile('book')){
            $book = $request->file('book');
            $book_name = time(). '_book.'.$book->getClientOriginalExtension();
            $book->move(public_path('asset/files'), $book_name);
            $requestData['book'] = $book_name;
        }
    
        $requestData['slug'] = Str::slug($request->title_en);
    
        $post = Post::create($requestData);     
        $post->tags()->attach($request->tag);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('admin.posts.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view ('admin.posts.edit', compact('post','tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'content_uz' => 'required',
            'content_ru' => 'required',
            'content_en' => 'required',
            'image' => 'required',
            'book' => 'required',
            'category_id' => 'required',
            'tags'=>'nullable'
        ]);
    
       
        $post = Post::findOrFail($id);
    
      
        $requestData = $request->all();

        if(empty($request->ads)){
            $requestData['ads'] = 0;
        }
    
       
        if($request->hasFile('image')){
         
            if($post->image && file_exists(public_path('asset/img/'.$post->image))){
                unlink(public_path('asset/img/'.$post->image));
            }
    
           
            $image = $request->file('image');
            $image_name = time().'_image.'.$image->getClientOriginalExtension();
            $image->move(public_path('asset/img'), $image_name);
            $requestData['image'] = $image_name;
        }
    
        
        if($request->hasFile('book')){
      
            if($post->book && file_exists(public_path('asset/files/'.$post->book))){
                unlink(public_path('asset/files/'.$post->book));
            }
    
       
            $book = $request->file('book');
            $book_name = time(). '_book.'.$book->getClientOriginalExtension();
            $book->move(public_path('asset/files'), $book_name);
            $requestData['book'] = $book_name;
        }
    
   
        $requestData['slug'] = Str::slug($request->title_en);
    
     
        $post->update($requestData);

        $post->tags()->sync($request->tags);
       
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully!');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->image && file_exists(public_path('asset/img/'.$post->image))){

            unlink(public_path('asset/img/'.$post->image));

        }
        if($post->book && file_exists(public_path('asset/files/'.$post->book))){

            unlink(public_path('asset/files/'.$post->book));

        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully!');
    }
    
}
