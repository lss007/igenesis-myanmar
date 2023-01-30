@extends('backend.body.adminmaster')
@section('title', 'Manage Current Function')
@section('content')

@include('backend.body.breadcrumb')
<section class="section">
    <div class="row">
  
      <div class="col-lg-12">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session('success')}}
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Category</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Industry Function</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form  method="post" action="{{route('store_current_function')}}" enctype="multipart/form-data"> 
                      @csrf
                      <div class="mb-3">
                        <label for="title-name" class="col-form-label">Curunt function name:</label>
                        <input type="text" class="form-control"  name="name" id="name" placeholder="Curunt Function name">
                        @error('name')
                        <span class=" text-danger">{{ $message }}</span>
                        @enderror
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
            <h5 class="card-title"> @yield('title')</h5>
            <table class="table datatable" >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">status </th>
                  <th scope="col">Action </th>
                </tr>
              </thead>
              <tbody>
                @if(count($viewFunctions) > 0 )
                @foreach($viewFunctions as $keys => $category)
                <tr>
                  <td width="05%">{{$keys +1}} </td>
                  <th scope="row" width="30%">
                    {{isset($category->name) ? ucwords($category->name) : "NA"}}
                  </th>
                  <td width="30%">
                        @if($category->status == 1)
                          <a href="{{route('inactive.function',$category->id)}}">
                            <span class="badge bg-success">Active</span>
                          </a>
                        @else
                          <a href="{{route('active.function',$category->id)}}">
                            <span class="badge bg-danger">Inactive</span>
                          </a>
                        @endif
                  </td width="20%">
                  <td>
                  <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$category->id}}">
                      <i class="bi bi-pencil"></i>
                  </a>
                      <div class="modal fade" id="largeModal{{$category->id}}" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"> Edit  Industry</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12">
                                <div class="card-body">
                                    <!-- Vertical Form -->
                                    <form class="row g-3" action="{{route('update_current_function',$category->id) }}">
                                        @csrf
                                        <div class="col-6">
                                            <label for="Name" class="form-label"> Name</label>
                                            <input type="text" class="form-control" id="Name" name="name" value="{{$category->name}}">
                                        </div>
                                        <div class="col-6">
                                            <label for="inputAddress" class="form-label">Status</label>
                                                <select id="inputState" class="form-select" name="status" >
                                                    <option selected="" disabled>Choose status</option>
                                                    <option value="1"  {{($category->status == 1 )? 'selected' : '' }}> Active</option>
                                                    <option value="0"  {{($category->status == 0 )? 'selected' : '' }}> Inactive</option>
                                                </select>
                                        </div>
                                        <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    <!-- Vertical Form -->
                                   </div>
                                </div>
                              </div>         
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Large Modal-->
                      <a href="{{route('delete_function',$category->id)}}" class="btn btn-primary" > <i class="bi bi-trash"></i></a>
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