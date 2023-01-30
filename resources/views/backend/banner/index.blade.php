@extends('backend.body.adminmaster')
@section('title', 'Manage Banner')
@section('content')

@include('backend.body.breadcrumb')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        @if(session('sucess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('sucess')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('error')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif(session('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          {{session('info')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> @yield('title')</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Banner" data-bs-whatever="@mdo">Add Banner</button>
            <div class="modal fade" id="Banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                    <div class="modal-body">
                        <form  method="post" action="{{route('store_all_banner')}}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="col-12">
                            <label for="Name" class="form-label"> Banner</label>
                            <input type="file" class="form-control" name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="col-12">
                            <img src="{{asset('no_image.jpg')}}" alt="" id="output" width="100">                                        
                        </div>
                    </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save  </button>
                     </div>
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
              <h5 class="card-title">@yield('title')</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">image</th>
                  <th scope="col">Status </th>
                  <th scope="col">Action </th>
                </tr>
              </thead>
              <tbody>
                @if(isset($get_banner))
                @foreach($get_banner as $keys => $value)
                <tr>
                  <th scope="row" width="5%">{{$value->order_no}}</th>
                  <td width="20%"> {{Str::limit($value->title,20,$end='....')}}<br> 
                 </td>
                  <td width="20%" class="text-center">
                    <img src="{{(isset($value->image))   ? asset('assets/banner/'.$value->image) :asset('no_image.jpg')}}" 
                    alt="{{$value->title}}" style=" width: 200px;">
                  </td>
                  <td width="5%">
                    @if($value->status == '1')
                    <a href="{{route('inactive.banner',$value->id)}}">
                    <span class="badge bg-success">Active</span>
                  </a>
                  @else
                    <a href="{{route('active.banner',$value->id)}}">
                      <span class="badge bg-warning">Inactive</span>
                  </a>
                    @endif
                  </td width="25%">
                  <td>
                     <!-- Large Modal -->
                        <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$value->id}}">
                            <i class="bi bi-eye"></i>
                        </a>
                            <div class="modal fade" id="largeModal{{$value->id}}" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"> View Banner</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        <div class="col-md-12 text-center">
                                      
                                            <h5> Banner Image:</h5>
                                            <img class=" p-3" src="{{asset('assets/banner/'.$value->image)}}" alt="{{$value->title}}" width="400">
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                          <!-- End Large Modal-->
                            <a  class="btn btn-primary" href="{{route('edit.banner',$value->id)}}">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="{{route('delete_banner',$value->id)}}" class="btn btn-primary">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                 @endforeach
                @endif
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection




