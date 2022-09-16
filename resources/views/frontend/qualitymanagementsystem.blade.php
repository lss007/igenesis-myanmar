@extends('frontend.body.homemaster')
@section('title', 'Quality & Health & Safety')
@section('content')

<section>
    <div class="bannerSection">
      <div class="bannerSlider">
        <div class="bannerInner innerBanner" style="background-image: url('{{asset('assets/images/banner-img1.jpg')}}');">
          <div class="container">
            <div class="bannerContent" data-aos="fade-up" data-aos-duration="3000">
              <h1>Quality & Health & Safety</h1>
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
            <div class="col-md-12">
              <div class="csContent csContentLeft">
                <div class="csTextCol">
                  <div class="csText">
                    <h3>Quality Management System (QMS)</h3>
                    <p>iGenesis follows QMS guidelines of ISO 9001:2015</p>
                    <p>QMS is a formalized system that documents processes, procedures, and responsibilities for achieving quality policies and objectives to meet customer and regulatory requirements and improve its effectiveness and efficiency on a continuous basis.</p>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardSection mt-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="3000">
          <div class="row align-items-end g-0">
            <div class="col-md-12">
              <div class="csContent csContentLeft">
                <div class="csTextCol">
                  <div class="csText">
                    <h3>HSE Management System</h3>
                    <p>We at Genesis believe in sustainable development and are committed to effective management of health, safety, environment and community development as an integral part of our business.</p>
                    <p>We shall continually improve HSE compliance by deploying/achieving following objectives.</p>
                  </div>                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardSection mt-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="3000">
          <div class="row align-items-end g-0">
            <div class="col-md-12">
              <div class="csContent csContentLeft">
                <div class="csTextCol">                 
                  <div class="csText">
                    <h3>HSE Responsibility</h3>
                    <p>We are committed to minimize impacts on the environment & to minimize occupational health & safety risk with respect to our facilities and services Health and Safety is one of the core elements of our values. Safety is our first priority. We have set yearly compliance criteria related to HSE, of which few are listed below</p>
                    <ul class="listStyle mb-4">
                      <li>Site assessment for complying health & safety requirements</li>
                      <li>Site assessment for complying health & safety requirements</li>
                      <li>Monitoring & minimize number of accidents/incidents in the facility</li>
                      <li>Do's & Don'ts</li>
                    </ul>
                    <p>We have set a goal of ‘Zero Losses’ for which we have formed the Health & Safety Team for periodic review of fatalities, accidents, near misses, incidents.</p>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardSection mt-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="3000">
          <div class="row align-items-end g-0">
            <div class="col-md-12">
              <div class="csContent csContentLeft">
                <div class="csTextCol">
                  <div class="csText">
                    <h3>HSE Objectives</h3>
                    <p>Ensure optimum utilization of renewable & nonrenewable resources romote awareness amongst employees to work in a manner, which ensures protection of environment prevent pollution and occupational health & safety for all.</p>
                    <p>To monitor & minimize number of accidents/incidents in the facility. Encourage contractors and suppliers to adopt principles and practices adopted by us.</p>
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