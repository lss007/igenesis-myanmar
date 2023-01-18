@extends('frontend.body.homemaster')
@section('title', 'Services')
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
    <div class="sectionSpace">
      <div class="container">
        <div class="titleCol text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="lgTitle">Our <span class="themeClr">Services</span></h2>
        </div>
        <div class="cardSection">
          <div class="row g-4">
            @if(isset($getServices))
              @foreach($getServices as $val)
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
            @if(isset($getCoustomer ))
            @foreach($getCoustomer as $logo)
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