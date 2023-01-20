@extends('frontend.body.homemaster')
@section('title', 'Home')
@section('content')

{{-- slider start --}}
@include('frontend.body.slider')
{{-- slider end  --}}
@php

    
@endphp
  <section>
    <div class="sectionSpace" id="whoarewe">
      <div class="container">
        <div class="titleCol text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="lgTitle">Who are <span class="themeClr">we</span></h2>
        </div>
        <div class="cardSection" data-aos="fade-up" data-aos-duration="3000">
          <div class="row align-items-end g-0">
            <div class="col-md-6 order-md-last">
              <div class="csImg">
                <img src="{{asset('assets/images/igenesis-technologies.jpg')}}" alt="...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="csContent csContentLeft">
                <div class="csOverlayText">
                  <h2>Who are we</h2>
                </div>
                <div class="csTextCol">
                  <div class="csText">
                    <h3>iGenesis Technologies Limited, Myanmar</h3>
                    <p>iGenesis Technologies Limited, is a leading Telecom Services Provider Company in Myanmar offering services and solutions to address the Network Life Cycle requirements of Telecom Operators, Technology providers (OEM’s) and Tower Companies.</p>
                    <p>iGenesis is Contributing in Infrastructure, electrical and solar power by providing innovative and smart solutions and services across Myanmar.</p>
                    <p>iGenesis is committed to bring innovative engineering solutions to make human life easy and more comfortable.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <section>
    <div class="sectionSpace pt-0">
      <div class="container">
        <div class="titleCol text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="lgTitle">Our <span class="themeClr">Vision</span></h2>
          <div class="subTitle">
            <p> First Choice and One Stop Solution for Telco and Tower co in Myanmar. Make admirable presence in Infrastructure, Power and Engineering Services sectors in Myanmar.</p>
          </div>
        </div>
        <div class="cardSection" data-aos="fade-up" data-aos-duration="3000">
          <div class="row align-items-end g-0">
            <div class="col-md-6">
              <div class="csImg">
                <img src="{{asset('assets/images/organization-img.jpg')}}" alt="...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="csContent csContentRight">
                <div class="csOverlayText">
                  <h2 class="text-end">Our values</h2>
                </div>
                <div class="csTextCol">
                  <div class="csText">
                    <h3>Our Values</h3>
                    <ul class="listStyle">
                      <li>Integrity, Ethics and Transparency</li>
                      <li>Delight Customers through Superior Services</li>
                      <li>Proactively Manage Change</li>
                      <li>Build a Technologically Innovative</li>
                      <li>Organization</li>
                      <li>Share Knowledge and focus on end Result</li>
                      <li>Work as a One Team</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardSection" data-aos="fade-up" data-aos-duration="3000">
          <div class="row align-items-end g-0">
            <div class="col-md-6 order-md-last">
              <div class="csImg">
                <img src="{{asset('assets/images/teamwork.jpg')}}" alt="...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="csContent csContentLeft">
                <div class="csOverlayText">
                  <h2>Our culture</h2>
                </div>
                <div class="csTextCol">
                  <div class="csText">
                    <h3>Our Culture</h3>
                    <ul class="listStyle">
                      <li>We believe in an Environment that:</li>
                      <li>Promotes Performance</li>
                      <li>Create a Culture of Honesty</li>
                      <li>Nurtures Teamwork</li>
                      <li>Strengthens Quality Awareness</li>
                      <li>Encourage Transparency</li>
                      <li>Felicitates Professional Growth</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="sectionSpace p-0">
      <div class="container">
        <div class="titleCol text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="lgTitle">Management <span class="themeClr">Team</span></h2>
        </div>
      </div>
      <div class="teamSection">
        <div class="container">
          <div class="teamInner">
            <span class="circleShape" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
              <img src="{{asset('assets/images/circle-shape.svg')}}" alt="..."></span>
            <span class="dotsLeftShape"><img src="{{asset('assets/images/dots-shape.svg')}}" alt="..."></span>
            <span class="dotsRightShape"><img src="{{asset('assets/images/dots-shape.svg')}}" alt="..."></span>
            @if(isset($get_our_team ))
            @foreach($get_our_team as $top_member)
            @if($top_member->order_no == 1)
            <div class="teamCol" data-aos="fade-up" data-aos-duration="3000">
              <div class="row g-0 align-items-center">
                <div class="col-md-auto">
                  <div class="teamImg">
                    <img src="{{(isset($top_member->image)) 
                      ? asset('assets/ourteam/'.$top_member->image) :asset('no_image.jpg')}}" 
                      alt="{{$top_member->title}}">
                  </div>
                </div>
                <div class="col-md">
                  <div class="teamText teamTextLeft lightBg">
                    <h4>{{isset($top_member->name) ? $top_member->name : ''}}</h4>
                    <span class="themeClr"> {{isset($top_member->position) ?  
                    strtoupper($top_member->position) : ''}}</span>
                    <p>  {!! html_entity_decode($top_member->description)!!}</p>
                  </div>
                </div>
              </div>
            </div>
              @elseif($top_member->order_no == 2)
              <div class="teamCol cardSection" data-aos="fade-up" data-aos-duration="3000">
                <div class="row g-0 align-items-center">
                  <div class="col-md-auto order-md-last">
                    <div class="teamImg">
                      <img src="{{(isset($top_member->image)) 
                        ? asset('assets/ourteam/'.$top_member->image) :asset('no_image.jpg')}}" 
                        alt="{{$top_member->title}}">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="teamText teamTextRight lightBg">
                      <h4>{{isset($top_member->name) ? $top_member->name : ''}}</h4>
                      <span class="themeClr">
                          {{isset($top_member->position) ?  
                                   strtoupper($top_member->position) : ''}}</span>
                      <p>{!! html_entity_decode($top_member->description)!!}</p>
                    </div>
                  </div>
                </div>
              </div>
              @else
              
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
            @if(isset($get_our_team2 ))
              @foreach($get_our_team2 as $cards)
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

  <section>

    <div class="sectionSpace darkBg">
      <div class="container">
        <div class="titleCol text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="lgTitle text-white">Our <span class="themeClr">Services</span></h2>
        </div>
        <div class="cardSection">
          <div class="row g-4">
              @if(isset($get_Services))
                @foreach($get_Services as $val)
                  <div class="col-md-6 col-lg-4">
                    <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                      <div class="cardStyle2Inner">
                        <div class="cardStyle2Icon">
                          <img src="{{(isset($val->image)) 
                            ? asset('assets/services/'.$val->image) :asset('no_image.jpg')}}" alt="...">
                        </div>
                        <div class="lineShape">
                          <img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                        <div class="cs2ContentCol lMoreContent">
                          <div class="cs2Content">
                            <h3>  {!!isset($val->title) ? html_entity_decode( $val->title	) : ''!!}</h3>
                            <p class="text-white"> 
                              {!!isset($val->description) ? html_entity_decode( $val->description	) : ''!!}</p>
                          </div>
                        </div>
                      </div>
                      <div class="learnMoreCol">
                        <a href="javascript:void(0);" class="learnMore">Learn </a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
          </div>
          <div class="btnCol" data-aos="fade-up" data-aos-duration="3000">
            <div class="btn__wrap btn--fix-width" data-reactid="106">
              <a class="btn btn_primary" data-text="view more" href="JavaScript:void(0)" data-reactid="107">
                <span class="btn__overlay" data-reactid="108"></span>
                <span class="btn__text" data-reactid="109">view more</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="sectionSpace">
      <div class="container">
        <div class="titleCol text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="lgTitle">Our <span class="themeClr">Customers</span></h2>
        </div>
        <div class="pslogo cardSection" data-aos="fade-up" data-aos-duration="3000">
          <ul>
       
        @if(isset($get_coustomer ))
           @foreach($get_coustomer as $logo)
              <li><a href="javascript:void(0);">
                <img src="{{asset('assets/customers/'. $logo->image)}}" alt="..." title="{{$logo->order_no}}"></a></li>
          @endforeach
        @endif
    
         
          </ul>
        </div>
      </div>
    </div>
  </section>
  @endsection