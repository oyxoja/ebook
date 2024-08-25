<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $categories = Category::paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Category $category){
        $request->validate([
            'category_uz'=>'required',
            'category_ru'=>'required',
            'category_en'=>'required'
        ]);

        $requestData = $request->all();

       
        $requestData['slug'] = Str::slug($requestData['category_en']);
    
        Category::create($requestData);

        return  redirect()->route('admin.categories.index')->with('success','Category created successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){

        $category = Category::findOrFail($id);

        return view('admin.categories.show', compact('category'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category){
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $requestData = $request->all();

        $requestData['slug'] = Str::slug($requestData['category_en']);

        $category->update($requestData);

        return  redirect()->route('admin.categories.index')->with('success','Category updated successfully !');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category){
        $category->delete();

        return redirect()->back()->with('delete', 'Category deleted successfully');
    }
}
