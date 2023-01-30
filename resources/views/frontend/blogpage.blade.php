@extends('frontend.body.homemaster')
@section('title', 'Blog')
@section('content')
  

@include('frontend.body.banner')

<section class="text-center">
    <div class="sectionSpace" id="whoarewe">
        <div class="container">
    <h4 class="mb-5 main_heading"><strong><u>Latest Blog posts</u></strong></h4>

    <div class="row">
      @if(count($getBlogData) >0 )
      @foreach($getBlogData as $blogs)
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="{{asset($blogs->image)}}" class="img-fluid">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="card-body">
               <p class="d-flex justify-content-between"> <i class="fa fa-user-o" aria-hidden="true"> By {{$blogs->user->name}}</i></p> 

            <h5 class="card-title blog_heading"> <a href="#" class="text-decoration-none">
          {{$blogs->title}} </a> </h5>


            <p class="card-text blog_text justify-content-between">
         

               {!!html_entity_decode(str_limit($blogs->summary, $limit=200 ) )!!}
            </p>

             <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: 6 months ago </p>
             <div class="text-right">
            <a href="https://www.blogger.com/" class="text-decoration-none "><i class="fa fa-book" aria-hidden="true"></i> Read more...</a></div>
          </div>

        </div>
      </div>
      @endforeach
      @else 
      <p class="text-center">   No Blog record found  </p>
      @endif
   
    </div>
</div>
</div>
  </section>
  @endsection