@extends('backend.body.adminmaster')
@section('title', 'Edit Our Coustomer')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                  {{-- <h5 class="card-title">@yield('title')</h5> --}}
                  <!-- Floating Labels Form -->
                  <form class="row g-3 mt-3"  action="{{route('update_our_customers',$edit_coustomer->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="name" value="{{$edit_coustomer->name}}"  placeholder="name">
                              <label for="name">Name </label>
                                @error('name')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                        <input type="number" class="form-control" name="order_no" value="{{$edit_coustomer->order_no}}" placeholder="order no">
                                <label for="order_no">Order Number </label>
                            @error('order_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <div class="form-group" >
                        <img id="output"  src="{{isset($edit_coustomer->image) ? asset('assets/customers/'.$edit_coustomer->image) :asset('assets/no_image.jpg')}}" height="100">
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