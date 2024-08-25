@extends('admin.master')


@section('content')
<div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Posts</h4>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Add Posts</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        
                            <p class="alert alert-success text-white">{{Session::get('success') }}</p>

                        @endif
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th class="text-center">Name UZ</th>
                          <th class="text-center">Name RU</th>
                          <th class="text-center">Name EN</th>
                          <th class="text-center">Slug</th>
                          <th class="text-center">Description UZ</th>
                          <th class="text-center">Description RU</th>
                          <th class="text-center">Description EN</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Book</th>
                          <th class="text-center">Category ID</th>
                          <th class="text-center" colspan="3">Action</th>
                        </tr>
                        @foreach ($posts as $post )
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td class="text-center">{{ $post->title_uz }}</td>
                                <td class="text-center">{{ $post->title_ru }}</td>
                                <td class="text-center">{{ $post->title_en }}</td>
                                <td class="text-center">{{ $post->slug }}</td>
                                <td class="text-center">{!! \Illuminate\Support\Str::words($post->content_uz, 20, '...') !!}</td>
                                <td class="text-center">{!! \Illuminate\Support\Str::words($post->content_ru, 20, '...') !!}</td>
                                <td class="text-center">{!! \Illuminate\Support\Str::words($post->content_en, 20, '...') !!}</td>
                                <td class="text-center"><img src="{{ asset('asset/img/'. $post->image) }}" alt="" style="width: 50px; height: 50px;"></td>
                                <td class="text-center">
                                    <a href="{{ asset('asset/files/' . $post->book) }}" target="_blank" class="btn btn-info">View Book</a>
                                </td>
                                <td class="text-center">{{ $post->category_id }}</td>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
@endsection