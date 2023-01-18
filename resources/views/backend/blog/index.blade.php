@extends('backend.body.adminmaster')
@section('title', 'Add Blog')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Floating labels Form</h5>
    
                  <!-- Floating Labels Form -->
                  <form class="row g-3"  action="{{route('user.publish.post')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <select class="form-select" name="catId" id="title" aria-label="State">
                            <option disabled selected>Select  category</option>
                            @foreach($blogCat as $key => $values)
                        
                            <option value="{{ $values->id}}">{{ $values->name}}</option>
                          
                            @endforeach
                          </select>
                          <label for="title">Seelct Blog category</label>
                          @error('catId')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="title" id="title" placeholder="City">
                            <label for="title">Blog title</label>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>
                 
                
                 
                  
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Blog Summary" id="summary" name="summary" style="height: 100px;"></textarea>
                        <label for="summary">Blog Summary	</label>
                        @error('summary')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
          
               

                    <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    @error('image')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
          
                    <div class="form-group">
                        <img id="output" src="{{asset('assets/no_image.jpg')}}" height="100">
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End floating Labels Form -->
    
                </div>
              </div>
    </div>          
    </section>
 @endsection