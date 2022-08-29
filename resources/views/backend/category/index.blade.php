@extends('backend.body.adminmaster')
@section('title', 'Blog Category ')
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

        @endif
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Add Blog Category</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Category</button>
       
    
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Blog Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form  method="post" action="{{route('add.blog.category')}}" enctype="multipart/form-data"> 
                      @csrf
                      <div class="mb-3">
                        <label for="title-name" class="col-form-label">Category name:</label>
                        <input type="text" class="form-control"  name="name" id="name" placeholder="Category name">
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
            <h5 class="card-title">Add Blog Category</h5>
            <p>Mange Category </p>
            

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">User</th>
                  <th scope="col">Cat Name</th>
                  <th scope="col">Created at </th>

           
            
                  <th scope="col">Action </th>

                </tr>
              </thead>
              <tbody>
                @foreach($getCategory as $keys => $value)
                <tr>
                  <th scope="row" width="5%">{{$keys+1}}</th>
                  <td width="20%"> {{	$value->user->name}}</td>
                  <td width="30%"> {{$value->name}}</td>
                  <td width="30%">  {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}</td>
                  <td width="10%" >
                      <a href="{{route('edit.blog.category',$value->id)}} "  class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="{{route('delete.blog.category',$value->id)}} " class="btn btn-primary">
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

      {{-- ============= --}}
      
    </div>
  </section>


 @endsection