@extends('backend.body.adminmaster')
@section('title', 'Edit Services')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
          <h4 ><a href="{{route('view_our_services')}}" class="btn btn-success" >Back</a></h4>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Add Services</h5>
    
                  <!-- Floating Labels Form -->
                  <form class="row g-3"  action="{{route('update_our_services',$edit_services->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
             
                    <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="title" value="{{$edit_services->title}}" placeholder="title">
                            <label for="title">Title </label>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                    </div>
                 
                
             

                    <div class="col-md-6">
                        <div class="form-floating">
                        <input type="number" class="form-control" name="order_no"  value="{{$edit_services->order_no}}" id="order_no" placeholder="order no">
                        <label for="order_no">Order Number </label>
                        @error('order_no')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                  
                  
            
                    <!-- Quill Editor Full -->
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="description" style="height: 200px;">{{$edit_services->description}}</textarea>
                            <label for="description">Services Description </label>
                        </div>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Quill Editor Full -->
            
          
               

                    <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <div class="form-group ">
                        <img  class="bg-dark" id="output" src="{{isset($edit_services->image) ? asset('assets/services/'.$edit_services->image) : asset('assets/no_image.jpg')}}" style="width:100px;">
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                  </form><!-- End floating Labels Form -->
                </div>
              </div>
        </div>          
    </section>
 @endsection