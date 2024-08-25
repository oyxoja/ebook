@extends('admin.master')


@section('content')
<div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Categories</h4>
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add Category</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        
                            <p class="alert alert-success text-white">{{Session::get('success') }}</p>

                        @endif
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th class="text-center">Name of Category UZ</th>
                          <th class="text-center">Name of Category RU</th>
                          <th class="text-center">Name of Category EN</th>
                          <th class="text-center">Slug</th>
                          <th class="text-center">Created At</th>
                          <th class="text-center" colspan="3">Action</th>
                        </tr>
                        @foreach ( $categories as $category )
                          <tr>
                              <td>{{$category->id}}</td>
                              <td class="text-center">{{ $category->category_uz }}</td>
                              <td class="text-center">{{ $category->category_ru }}</td>
                              <td class="text-center">{{ $category->category_en }}</td>
                              <td class="text-center">{{ $category->slug }}</td>
                              <td class="text-center">{{ $category->created_at }}</td>
                              <td><a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-primary">Detail</a></td>
                              <td><a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Edit</a></td>
                              <td>
                                  <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
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