@extends('backend.body.adminmaster')
@section('title', 'Add Social link')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->
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
                <h5 class="card-title"> Add Social link</h5>
                <h4 style="float: right"><a href="{{route('view_social_link')}}" class="btn btn-success" >Back</a></h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Social link</button>
              
            </div>

            <div class="card">
              <div class="card-body">
                <form class="row g-3"  action="{{route('update_social_link',$editlink->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$editlink->name}}">
                            <label for="name">Name </label>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                 
                      <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="url" class="form-control" name="link" id="link" placeholder="link" value="{{$editlink->link}}">
                            <label for="link"> link</label>
                            @error('link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
               

                    <input type="file" class="form-control"  name="logo" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('logo')
                        <span class=" text-danger">{{ $message }}</span>
                        @enderror
                 
                    <div class="form-group">
                        <img class="bg-dark" id="output" src="{{isset($editlink->logo ) ? asset('assets/sociallogo/'.$editlink->logo) : asset('assets/no_image.jpg')}}" height="100">
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update</button>
                  
                    </div>
                  </form><!-- End floating Labels Form -->
    
              </div>
            </div>
       
          </div>
        </div>
      </section>

 @endsection