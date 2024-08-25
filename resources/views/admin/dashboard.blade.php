@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <!-- Courses Section -->
        <div class="col-md-3 mr-3 p-4 card bg-primary text-white">
            <h2>All Categories</h2>
            <table class="table table-striped">
                <thead>
                    <tr >
                        <h1 class="text-white">{{ $category }}</h1>
                    </tr>
                    <h5>
                        <a href="{{ route('admin.categories.index') }}" class="text-white fs-3">View</a>
                    </h5>
                    
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>

        <!-- Teachers Section -->
        <div class="col-md-3 p-4 card bg-success text-white">
            <h2>All Posts</h2>
            <table class="table table-striped">
                <thead>
                    <tr >
                        <h1 class="text-white">{{ $post }}</h1>
                    </tr>
                    <h5>
                        <a href="{{ route('admin.posts.index') }}" class="text-white fs-3">View</a>
                    </h5>
                    
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-3">
        <!-- Students Section -->
        <div class="col-md-3 mr-3 p-4 card bg-danger text-white">
            <h2>All Tags</h2>
            <table class="table table-striped">
                <thead>
                    <tr >
                        <h1 class="text-white">{{ $tag }}</h1>
                    </tr>
                    <h5>
                        <a href="{{ route('admin.tags.index') }}" class="text-white fs-3">View</a>
                    </h5>
                    
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>

        <!-- Comments Section -->
        <div class="col-md-3 p-4 card bg-warning text-white">
            <h2>All Ads</h2>
            <table class="table table-striped">
                <thead>
                    <tr >
                        <h1 class="text-white">{{ $ad }}</h1>
                    </tr>
                    <h5>
                        <a href="{{ route('admin.ads.index') }}" class="text-white fs-3">View</a>
                    </h5>
                    
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection
