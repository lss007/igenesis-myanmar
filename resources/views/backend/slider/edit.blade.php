@extends('backend.body.adminmaster')
@section('title', 'Edit Slider')
@section('content')

@include('backend.body.breadcrumb')

<section class="section">
    <div class="row">
<div class="col-lg-10">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Manage Slider </h5>
        <!-- Vertical Form -->
        <form class="row g-3" method="post" action="{{route('admin.update.slider',$edit_slider->id)}}" enctype="multipart/form-data"> 
            @csrf
          <div class="col-12">
            <label for="title" class="form-label">Slider Title</label>
            <input type="text" class="form-control"  name="title" id="title" value="{{$edit_slider->title}}">
            @error('title')
            <span class=" text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">description</label>
            <textarea class="form-control"  name="description">{{$edit_slider->description}}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Image</label>
            <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            @error('image')
            <span class=" text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <img id="output" src="{{asset($edit_slider->image)}}" height="100">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
        <!-- Vertical Form -->

      </div>
    </div>





  </div>
</div>

</div>
 @endsection