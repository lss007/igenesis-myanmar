@extends('backend.body.adminmaster')
@section('title', 'Add Address')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Add Address</h5>
    
                  <!-- Floating Labels Form -->
                  <form class="row g-3"  action="{{route('store_contact_address')}}" method="post">
                    @csrf
                    <!-- Quill Editor Full -->
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="address" placeholder="Contact footer address" id="address"  style="height: 200px;"></textarea>
                            <label for="address">Footer Address </label>
                        </div>
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Quill Editor Full -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form><!-- End floating Labels Form -->
                </div>
              </div>
        </div>          
    </section>
 @endsection