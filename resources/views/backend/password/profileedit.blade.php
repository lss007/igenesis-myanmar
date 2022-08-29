@extends('backend.body.adminmaster')
@section('title', 'Edit Profile')
@section('content')

@include('backend.body.breadcrumb')



<section class="section">
    <div class="row">
        <div class="col-lg-10">
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
            <form method="post" action="{{route('admin.updateAdminProfile')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title-name" class="col-form-label">Name </label>

                    <input type="text" name="name" class="form-control" required="" value="{{$getEditProfile->name}}">
                    @error('name')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title-name" class="col-form-label">Email :</label>
                    <input type="email" name="email" class="form-control" required="" value="{{$getEditProfile->email}}">
                    @error('email')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image-name" class="col-form-label">Profile Image:</label>
                    <input type="file" class="form-control" name="profile_photo_path" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    @error('profile_photo_path')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <img id="output" src="{{(!empty($getEditProfile->profile_photo_path))  ? asset($getEditProfile->profile_photo_path):url('assets/no_image.jpg')}}" height="100" style="border-radius: 50%;">
                </div>

        </div>
        <div class="form-group mt-3">

            <button type="submit" class="btn btn-primary">Upload Profile </button>
        </div>
        </form>

    </div>


    </div>
</section>
@endsection
