
@extends('backend.body.adminmaster')
@section('title', 'Update Banner')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
          <h4 ><a href="{{route('view_all_banner')}}" class="btn btn-success" >Back</a></h4>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">@yield('title')</h5>
                     <!-- Floating Labels Form -->
                    <form class="row g-3"  action="{{route('update_all_banner',$edit_banner->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                    <!-- <div class="col-md-12">
                           <div class="form-floating">
                            <input type="text" class="form-control" name="title"  placeholder="title">
                            <label for="title">Title  </label>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div> -->
                    <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <div class="form-group " >
                        <img id="output" class="bg-dark" src="{{asset('assets/banner/'.$edit_banner->image)}}" height="100">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form><!-- End floating Labels Form -->
                </div>
              </div>
         </div>          
    </section>
 @endsection
