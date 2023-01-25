

@extends('backend.body.adminmaster')
@section('title', 'Change Password')
@section('content')

@include('backend.body.breadcrumb')



  <section class="section">
    <div class="row">
      <div class="col-lg-10">
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('error')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @else
        
          @endif
        <form method="post" action="{{route('update.admin.password')}}" >
            @csrf
    
       
            <div class="mb-3">
              <label for="title-name" class="col-form-label">Old password :</label>

              <input id="current_password" type="password"  name="oldpassword"  class="form-control" required="" placeholder="Enter old password" > 
              @error('oldpassword')
              <span class=" text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="col-form-label">New Password:</label>
              <input id="password" type="password" name="password" value="" class="form-control" required=""  placeholder="Enter new password"> 
              @error('password')
              <span class=" text-danger">{{ $message }}</span>
              @enderror

            </div>
            <div class="mb-3">
                <label for="description" class="col-form-label">Confirm New Password:</label>
                <input class="form-control"  id="password_confirmation" type="password" name="password_confirmation" value=""  placeholder="Confirmation Password "  >
                @error('password_confirmation')
                <span class=" text-danger">{{ $message }}</span>
                @enderror
  
              </div>
            {{-- <div class="mb-3">
            <label for="image-name" class="col-form-label">Profile  Image:</label>
            <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
              @error('image')
              <span class=" text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <img id="output" src="{{asset('assets/no_image.jpg')}}" height="100">
            </div> --}}
        
        </div>
        <div class="form-group">
      
          <button type="submit" class="btn btn-primary">Upload  password </button>
        </div>
      </form>

      </div>


    </div>
  </section>
  @endsection