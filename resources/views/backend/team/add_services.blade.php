@extends('backend.body.adminmaster')
@section('title', 'Add Team')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
          <h4 ><a href="{{route('view_our_team')}}" class="btn btn-success" >Back</a></h4>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Add Services</h5>
    
                  <!-- Floating Labels Form -->
                  <form class="row g-3"  action="{{route('store_our_team')}}" enctype="multipart/form-data" method="post">
                    @csrf
             
                    <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="name"  placeholder="name">
                            <label for="title">Member Name </label>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                 
                
                 
                      <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="position" id="position" placeholder="name">
                            <label for="title">Position </label>
                            @error('position')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="number" class="form-control" name="order_no" id="order_no" placeholder="order no">
                            <label for="title">Order Number </label>
                            @error('order_no')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                  
                          <h5 class="card-title">Description</h5>
            
                          <!-- Quill Editor Full -->
                         
                          <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor"  name="description">
           
              </textarea><!-- End TinyMCE Editor -->
                          <!-- End Quill Editor Full -->
                          @error('imadescriptionge')
                          <span class=" text-danger">{{ $message }}</span>
                          @enderror
          
               

                    <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    @error('image')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
           
                    <div class="form-group">
                        <img id="output" src="{{asset('assets/no_image.jpg')}}" height="100">
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