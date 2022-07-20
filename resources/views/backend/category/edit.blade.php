@extends('backend.body.adminmaster')
@section('title', 'Edit Blog Category ')
@section('content')

@include('backend.body.breadcrumb')

<section class="section">
    <div class="row">
<div class="col-lg-6">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vertical Form</h5>

        <!-- Vertical Form -->
        <form class="row g-3" method="post" action="{{route('update.blog.category',$Category->id)}}">
            @csrf
      
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Category name:</label>
            <input type="name" name="name" id="name" class="form-control" value="{{$Category->name}}">
            @error('name')
            <span class=" text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        </form><!-- Vertical Form -->

      </div>
    </div>

  
  

  </div>
</div>

</div>

 @endsection