<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ad = Ad::first();
        return view('admin.ads.index', compact('ad'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title1'=>'required',
            'image1'=>'required',
            'url1'=>'required',
            'title2'=>'required',
            'image2'=>'required',
            'url2'=>'required',
            'title3'=>'required',
            'image3'=>'required',
            'url3'=>'required'
        ]);

        // dd($request->all());

        $requestData = $request->all();

        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $image_name1 = rand().".".$file->getClientOriginalExtension();
            $file->move('asset/img/',$image_name1);
            $requestData['image1'] = $image_name1;
        }

        if($request->hasFile('image2')){
            $file = $request->file('image2');
            $image_name1 = rand().".".$file->getClientOriginalExtension();
            $file->move('asset/img/',$image_name1);
            $requestData['image2'] = $image_name1;
        }

        if($request->hasFile('image3')){
            $file = $request->file('image3');
            $image_name1 = rand().".".$file->getClientOriginalExtension();
            $file->move('asset/img/',$image_name1);
            $requestData['image3'] = $image_name1;
        }

        Ad::create($requestData);

        return redirect()->route('admin.ads.index')->with('success', 'Ad created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.ads.edit', ['ad'=>Ad::first()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
{
    // Get all request data
    $requestData = $request->all();

    // Paths to store images
    $imageDirectory = public_path('asset/img/');

    // Function to delete old image if exists
    $deleteOldImage = function($imagePath) {
        if ($imagePath && file_exists($imagePath)) {
            unlink($imagePath);
        }
    };

    // Handle image1
    if ($request->hasFile('image1')) {
        $deleteOldImage($imageDirectory . $ad->image1);

        $file1 = $request->file('image1');
        $image_name1 = rand() . "." . $file1->getClientOriginalExtension();
        $file1->move($imageDirectory, $image_name1);
        $requestData['image1'] = $image_name1;
    }

    // Handle image2
    if ($request->hasFile('image2')) {
        $deleteOldImage($imageDirectory . $ad->image2);

        $file2 = $request->file('image2');
        $image_name2 = rand() . "." . $file2->getClientOriginalExtension();
        $file2->move($imageDirectory, $image_name2);
        $requestData['image2'] = $image_name2;
    }

    // Handle image3
    if ($request->hasFile('image3')) {
        $deleteOldImage($imageDirectory . $ad->image3);

        $file3 = $request->file('image3');
        $image_name3 = rand() . "." . $file3->getClientOriginalExtension();
        $file3->move($imageDirectory, $image_name3);
        $requestData['image3'] = $image_name3;
    }

    // Update the ad with new data
    $ad->update($requestData);

    // Redirect back to ads index with success message
    return redirect()->route('admin.ads.index')->with('success', 'Ad updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
