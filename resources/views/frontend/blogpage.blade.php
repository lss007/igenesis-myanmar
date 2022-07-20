@extends('frontend.body.homemaster')
@section('title', 'Blog page')
@section('content')
{{-- slider start --}}
@include('frontend.body.slider')
{{-- slider end  --}}

<section class="text-center">
    <div class="sectionSpace" id="whoarewe">
        <div class="container">
    <h4 class="mb-5 main_heading"><strong><u>Latest posts</u></strong></h4>

    <div class="row">
                 <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://www.webbeingdigital.com/projects/mandeep/blog/1719924237928842.jpg" class="img-fluid">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="card-body">
               <p class="d-flex justify-content-between"> <i class="fa fa-user-o" aria-hidden="true"> By Admin</i></p> 

            <h5 class="card-title blog_heading"> <a href="https://www.blogger.com/" class="text-decoration-none">
          Where can I get some? </a> </h5>


            <p class="card-text blog_text">
               There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
            </p>

             <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: 6 months ago </p>
             <div class="text-right">
            <a href="https://www.blogger.com/" class="text-decoration-none "><i class="fa fa-book" aria-hidden="true"></i> Read more...</a></div>
          </div>

        </div>
      </div>
           <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://www.webbeingdigital.com/projects/mandeep/blog/1719924188281575.jpg" class="img-fluid">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="card-body">
               <p class="d-flex justify-content-between"> <i class="fa fa-user-o" aria-hidden="true"> By Admin</i></p> 

            <h5 class="card-title blog_heading"> <a href="http://image.intervention.io/api/fit" class="text-decoration-none">
          fit — Crop and resize combined </a> </h5>


            <p class="card-text blog_text">
               Combine cropping and resizing to format image in a smart way. The method will find the best fitting aspect ratio of your given width and height on the current image automatically, cut it out and resize it to the given
            </p>

             <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: 6 months ago </p>
             <div class="text-right">
            <a href="http://image.intervention.io/api/fit" class="text-decoration-none "><i class="fa fa-book" aria-hidden="true"></i> Read more...</a></div>
          </div>

        </div>
      </div>
           <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://www.webbeingdigital.com/projects/mandeep/blog/1719924113877317.jpg" class="img-fluid">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="card-body">
               <p class="d-flex justify-content-between"> <i class="fa fa-user-o" aria-hidden="true"> By Admin</i></p> 

            <h5 class="card-title blog_heading"> <a href="http://image.intervention.io/api/resize" class="text-decoration-none">
          resize — Resize current image </a> </h5>


            <p class="card-text blog_text">
               Resizes current image based on given width and/or height. To constraint the resize command, pass an optional Closure callback as third parameter.
            </p>

             <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: 6 months ago </p>
             <div class="text-right">
            <a href="http://image.intervention.io/api/resize" class="text-decoration-none "><i class="fa fa-book" aria-hidden="true"></i> Read more...</a></div>
          </div>

        </div>
      </div>
           <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://www.webbeingdigital.com/projects/mandeep/blog/1719924011273278.jpg" class="img-fluid">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="card-body">
               <p class="d-flex justify-content-between"> <i class="fa fa-user-o" aria-hidden="true"> By Aman</i></p> 

            <h5 class="card-title blog_heading"> <a href="https://www.blogger.com/" class="text-decoration-none">
          Where does it come from? </a> </h5>


            <p class="card-text blog_text">
               Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
            </p>

             <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: 6 months ago </p>
             <div class="text-right">
            <a href="https://www.blogger.com/" class="text-decoration-none "><i class="fa fa-book" aria-hidden="true"></i> Read more...</a></div>
          </div>

        </div>
      </div>
           <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://www.webbeingdigital.com/projects/mandeep/blog/1719923974664059.jpg" class="img-fluid">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="card-body">
               <p class="d-flex justify-content-between"> <i class="fa fa-user-o" aria-hidden="true"> By Aman</i></p> 

            <h5 class="card-title blog_heading"> <a href="https://www.blogger.com/" class="text-decoration-none">
          Why do we use it? </a> </h5>


            <p class="card-text blog_text">
               It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
            </p>

             <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: 6 months ago </p>
             <div class="text-right">
            <a href="https://www.blogger.com/" class="text-decoration-none "><i class="fa fa-book" aria-hidden="true"></i> Read more...</a></div>
          </div>

        </div>
      </div>
           <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://www.webbeingdigital.com/projects/mandeep/blog/1719923923066149.jpg" class="img-fluid">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="card-body">
               <p class="d-flex justify-content-between"> <i class="fa fa-user-o" aria-hidden="true"> By Aman</i></p> 

            <h5 class="card-title blog_heading"> <a href="https://www.blogger.com/" class="text-decoration-none">
          What is Lorem Ipsum? </a> </h5>


            <p class="card-text blog_text">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>

             <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: 6 months ago </p>
             <div class="text-right">
            <a href="https://www.blogger.com/" class="text-decoration-none "><i class="fa fa-book" aria-hidden="true"></i> Read more...</a></div>
          </div>

        </div>
      </div>
  
     

    </div>
</div>
</div>
  </section>
  @endsection