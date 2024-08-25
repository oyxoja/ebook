@extends('admin.master')


@section('content')
<div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Advertisement</h4>
                    @empty($ads)
                    <a href="{{ route('admin.ads.create') }}" class="btn btn-primary">Add Advertisement</a>
                    @endempty
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        
                            <p class="alert alert-success text-white">{{Session::get('success') }}</p>

                        @endif
                      <table class="table table-bordered table-md">
                        <tr>
                          <th class="text-center">Title 1</th>
                          <th class="text-center">Image 1</th>
                          <th class="text-center">Url 1</th>
                          <th class="text-center">Title 2</th>
                          <th class="text-center">Image 2</th>
                          <th class="text-center">Url 2</th>
                          <th class="text-center">Title 3</th>
                          <th class="text-center">Image 3</th>
                          <th class="text-center">Url 3</th>
                          <th class="text-center" colspan="3">Action</th>
                        </tr>

                                <tr>

                                    <td>{{ $ad->title1 }}</td>
                                    <td>
                                      <img src="{{ asset('asset/img/'.$ad->image1) }}" alt="" width="60px"; height="60px"; >
                                    </td>
                                    <td>{{ $ad->url1 }} </td>
                                    <td>{{ $ad->title2 }}</td>
                                    <td>
                                      <img src="{{ asset('asset/img/'.$ad->image2) }}" alt=""width="60px"; height="60px";>
                                    </td>
                                    <td>{{ $ad->url2 }} </td>
                                    <td>{{ $ad->title3 }}</td>
                                    <td>
                                      <img src="{{ asset('asset/img/'.$ad->image3) }}" alt=""width="60px"; height="60px";>
                                    </td>
                                    <td>{{ $ad->url3 }} </td>

                                    <td><a href="" class="btn btn-primary">Detail</a></td>
                                    <td><a href="{{ route('admin.ads.edit',$ad->id) }}" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                          
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