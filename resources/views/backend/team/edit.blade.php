@extends('backend.body.adminmaster')
@section('title', 'Edit Team')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Edit services </h5>
    
                  <!-- Floating Labels Form -->
                  <form class="row g-3"  action="{{route('update_our_team',$edit_our_team->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
             
                    <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="name" value="{{$edit_our_team->name}}" placeholder="name">
                            <label for="title">Name </label>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                 
                
                 
                      <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="position" value="{{$edit_our_team->position}}" id="position" placeholder="name">
                            <label for="title">position </label>
                            @error('position')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="number" class="form-control" name="order_no" id="order_no" value="{{$edit_our_team->order_no}}" placeholder="order no">
                            <label for="title">Order Number </label>
                            @error('order_no')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                          <h5 class="card-title">Description</h5>
    
                            <textarea class="tinymce-editor"  name="description"  >{{$edit_our_team->description}}
                        
                            </textarea>
                           
                                  
            
          
               

                    <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    @error('image')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                 
                        <img id="output" src="{{isset($edit_our_team->image) ? asset('assets/ourteam/'.$edit_our_team->image) : asset('assets/no_image.jpg')}}" alt="{{$edit_our_team->title}}" width="200">
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