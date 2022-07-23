@extends('frontend.body.homemaster')
@section('title', 'Blog page')
@section('content')
{{-- slider start --}}
@include('frontend.body.slider')
{{-- slider end  --}}
@php
$blogs = App\Models\post::latest()->where('status','=',1)->get();
@endphp
  <section>
    <div class="sectionSpace testimonialSec">
      <div class="container">
        <div class="row g-md-5">
          @foreach( $blogs as $keys => $value)
          <div class="col-md-4">
            <div class="cardStyle1" data-aos="fade-right" data-aos-duration="3000">
              <div class="">
                <div class="csUserInner">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{asset( $value->image)}}" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vmContent">
                <span >{{ $value->Category->name}}	</span><br>
               <a href=""> <h6>{{ $value->title}}</h6>
               </a>
               <br>
                <p>{{ $value->summary}}</p>
                <hr>
                <p class="text-left">&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> Posted on: {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}} </p>
                <div class="viewCol">
                  <a href="javascript:void(0);">
                    View
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
   
         
          
        </div>
      </div>
      
    </div>
  </section>
  @endsection