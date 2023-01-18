@extends('backend.body.adminmaster')
@section('title', 'Add Our Coustomer')
@section('content')
<style>
    .gallery > img{
  display:inline-block;
  margin-left:5px;
}
</style>
@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                  {{-- <h5 class="card-title">@yield('title')</h5> --}}
                  <!-- Floating Labels Form -->
                  <form class="row g-3 mt-3"  action="{{route('store_our_customers')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="name"  placeholder="name">
                              <label for="name">Name </label>
                                @error('name')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                        <input type="number" class="form-control" name="order_no" id="order_no" placeholder="order no">
                                <label for="order_no">Order Number </label>
                            @error('order_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <label for="order_no">Can Upload Multiple </label>

                    <input type="file" class="form-control"  name="image[]" multiple  id="gallery-photo-add">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    {{-- <div class="form-group " >
                        <img id="output"  src="{{asset('assets/no_image.jpg')}}" height="100">
                    </div> --}}
                    <div class="gallery"></div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form><!-- End floating Labels Form -->
                </div>
              </div>
         </div>          
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(80);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
    </script>
 @endsection