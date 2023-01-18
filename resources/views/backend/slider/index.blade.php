@extends('backend.body.adminmaster')
@section('title', 'Slider')
@section('content')

@include('backend.body.breadcrumb')


  
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Add slider</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Slider</button>
          
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Home page slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form  method="post" action="{{route('admin.store.slider')}}" enctype="multipart/form-data"> 
                      @csrf
                      <div class="mb-3">
                        <label for="title-name" class="col-form-label">Slider title:</label>
                        <input type="text" class="form-control"  name="title" id="title-name">
                        @error('title')
                        <span class=" text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control"  name="description"></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                      </div>
                      <div class="mb-3">
                      <label for="image-name" class="col-form-label">Slider Image:</label>
                      <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                        <span class=" text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <img id="output" src="{{asset('assets/no_image.jpg')}}" height="100">
                      </div>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload  </button>
                  </div>
                </form>
                </div>
              </div>
            </div>

   

          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Slider</h5>
            <p>Mange slider </p>
            

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">image</th>
                  <th scope="col">Status </th>
                  <th scope="col">Action </th>

                </tr>
              </thead>
              <tbody>
                @foreach($view_slider as $keys => $value)
                <tr>
                  <th scope="row" width="5%">{{$keys+1}}</th>
                  <td width="20%"> {{Str::limit(	$value->title,20,$end='....')}}</td>
                  <td width="30%"> {{Str::limit(	$value->description,30,$end='....')}}</td>
                  <td width="15%"><img src="{{asset($value->image)}}" alt="{{$value->title}}" width="100"></td>
                  <td width="10%">
                @if($value->status == 1)
                <a href="{{route('admin.inactive.slider', $value)}}">
                <span class="badge bg-success">Active</span>
              </a>
                @else 
                <a href="{{route('admin.active.slider',$value->id)}} ">
                <span class="badge bg-danger">Inactive</span>
                </a>
                @endif
                  </td width="20%">
                  <td>

                      <a href="{{route('admin.edit.slider',$value->id)}} " class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                      </a>

                      <a href="{{route('admin.delete.slider',$value->id)}} " class="btn btn-primary">

                      <i class="bi bi-trash"></i>
                    </a>
                
               
                
                
                </td>

                </tr>
        @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

 @endsection