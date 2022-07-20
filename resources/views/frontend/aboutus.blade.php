@extends('frontend.body.homemaster')
@section('title', 'About us')
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
                  <h2>About Us</h2>
                </div>
                <div class="csTextCol">
                  <div class="csText">
                    <h3>About Us</h3>
                    <p>IGenesis Technologies Ltd, is a leading Telecom Services Provider Company in Myanmar offering services and solutions to address the Network Life Cycle requirements of Telecom Operators.</p>
                    <ul class="listStyle">
                      <li>Integrity, Ethics and Transparency</li>
                      <li>Proactively Manage Change </li>
                      <li>Work as a One Team</li>
                      <li>Delight Customers through Superior Services</li>
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


  @endsection