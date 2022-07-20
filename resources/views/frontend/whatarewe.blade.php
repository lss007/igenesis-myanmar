@extends('frontend.body.homemaster')
@section('title', 'What we have done')
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
        <div class="cardSection" data-aos="fade-up" data-aos-delay="200" data-aos-duration="3000">
          <div class="row align-items-end g-0">
            <div class="col-md-12">
              <div class="csContent csContentLeft">
                <div class="csTextCol">
                  <div class="csText">
                    <h3>What we have done</h3>
                    <ul class="listStyle">
                      <li>Helped Telenor to expand their footprint by delivering end to end supply and services for building more than 2000 sites across Myanmar</li>
                      <li>Made electricity power available at more than 2000 sites of Telenor, Orredoo and Mytel</li>
                      <li>Supply and deployed Hybrid Solar Power Solution at more than 500 sites of Telenor saving huge cost on power</li>
                      <li>Site Acquisition, Construction of tower foundation, supply and erection of tower for most of the telecom operators and tower companies in Myanmar</li>
                      <li>Planning, Survey and Telecom Installation at more than 5000 sites of various telecom operators across Myanmar</li>
                      <li>Tower supply and erection for CCTV Camera at Adani Port, Yangon</li>
                      <li>Manpower supply to telecom and other sectors</li>
                      <li>Fuel filling and EPC bill management for more than 2500 sites of Telenor across Myanmar</li>
                      <li>Passive Infra Maintenance of more than 2000 sites of Telenor across Myanmar</li>
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
  @endsection