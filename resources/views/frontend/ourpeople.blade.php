@extends('frontend.body.homemaster')
@section('title', 'Our people')
@section('content')
  <section>
    <div class="bannerSection">
      <div class="bannerSlider">
        <div class="bannerInner innerBanner" style="background-image: url('{{asset('assets/images/banner-img1.jpg')}}');">
          <div class="container">
            <div class="bannerContent" data-aos="fade-up" data-aos-duration="3000">
              <h1>@yield('title')</h1>
            </div>
          </div>
        </div> 
      </div>
      <div class="bannerBtmShape">
        <img src="{{asset('assets/images/banner-bottom-shape.svg')}}" alt="...">
      </div>
    </div>
  </section>


  <section>
    <div class="sectionSpace p-0 mt-5 pt-3">
      <div class="container">
        <div class="titleCol text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="lgTitle">Management <span class="themeClr">Team</span></h2>
        </div>
      </div>
      <div class="teamSection ourPeopleCol">
        <div class="container">
          <div class="teamInner">
            <span class="circleShape" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
              <img src="{{asset('assets/images/circle-shape.svg')}}" alt="..."></span>
            <span class="dotsLeftShape"><img src="{{asset('assets/images/dots-shape.svg')}}" alt="..."></span>
            <span class="dotsRightShape"><img src="{{asset('assets/images/dots-shape.svg')}}" alt="..."></span>
           
            @if(isset($getOurTeam ))
            @foreach( $getOurTeam as $row)
            @if($row->order_no == 1)
            <div class="teamCol" data-aos="fade-up" data-aos-duration="3000">
              <div class="row g-0 align-items-center">
                <div class="col-md-auto">
                  <div class="teamImg">
                    <img src="{{(isset($row->image)) 
                      ? asset('assets/ourteam/'.$row->image) :asset('no_image.jpg')}}" 
                      alt="{{$row->title}}">
                  </div>
                </div>
                <div class="col-md">
                  <div class="teamText teamTextLeft lightBg">
                    <h4>{{isset($row->name) ? $row->name : ''}}</h4>
                    <span class="themeClr">{{isset($row->position) ?  
                      strtoupper($row->position) : ''}}</span>
                    <p> {!! html_entity_decode($row->description)!!}</p>
                  </div>
                </div>
              </div>
            </div>
            @elseif($row->order_no == 2)
        
            <div class="teamCol cardSection" data-aos="fade-up" data-aos-duration="3000">
              <div class="row g-0 align-items-center">
                <div class="col-md-auto order-md-last">
                  <div class="teamImg">
                    <img src="{{asset('assets/images/anuj.jpg')}}" alt="...">
                  </div>
                </div>
                <div class="col-md">
                  <div class="teamText teamTextRight lightBg">
                    <h4>{{isset($row->name) ? $row->name : ''}}</h4>
                    <span class="themeClr">{{isset($row->position) ?  
                      strtoupper($row->position) : ''}}</span>
                    <p>{!! html_entity_decode($row->description)!!}</p>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="sectionSpace testimonialSec">
      <div class="container">
        <div class="row g-md-5">
            @if(isset($getOurTeam ))
              @foreach($getOurTeam->slice(2) as $cards)
                <div class="col-md-6">
                  <div class="cardStyle1" data-aos="fade-right" data-aos-duration="3000">
                    <div class="csUserCol">
                      <div class="csUserInner">
                        <div class="row align-items-center">
                          <div class="col-sm-auto">
                            <div class="csUserImg">
                              <img src="{{(isset($cards->image)) 
                                ? asset('assets/ourteam/'.$cards->image) :asset('no_image.jpg')}}" 
                                alt="{{$cards->title}}">
                            </div>
                          </div>
                          <div class="col-sm">
                            <div class="csUserText">
                              <h4>{{isset($cards->name) ? $cards->name : ''}}</h4>
                              <span class="text-white"> {{isset($cards->position) ?  
                                $cards->position : ''}}</span>
             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vmContent">
                      <p> {!! html_entity_decode($cards->description)!!} </p>
                      <div class="viewCol">
                        <a href="javascript:void(0);">
                          View
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif


        </div>
      </div>
      <div class="zigzagShape">
        <img src="{{asset('assets/images/zigzag-shape.svg')}}" alt="...">
      </div>
    </div>
  </section>

  @endsection