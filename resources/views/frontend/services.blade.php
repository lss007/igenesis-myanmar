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
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/network-planning-icon.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>NETWORK PLANNING & DESIGN</h3>
                      <p class="text-white">NPD services deliver value by designing the high Quality of network to support the current and future technology and capacity requirements of the operators. To satisfy this, iGenesis use technology expertise, sophisticated algorithms, world-class tools and disciplined design processes to provide end-to-end, multi-vendor design solutions. NPD services cover Radio Frequency (RF) and Transmission Engineering, Fixed and Core Network Engineering for GSM, CDMA, Microwave Transmission, SDH, DWDM, WiMAX and Broadband networks.</p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/maintenance-icon.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>OPERATIONS & MAINTENANCE</h3>
                      <p class="text-white">iGenesis Network O&M services portfolio enables operators to focus on their core areas of business while iGenesis manages Network O&M activities. This approach helps the operators in owning a high performance network at reduced operational expenses (OPEX).iGenesis has extensive experience on multi-technology products across geographies, maintenance systems and right shoring of operations. This enables iGenesis to manage operators’ critical task of Network seamlessly.</p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/network-rollout.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>NETWORK ROLLOUT</h3>
                      <p class="text-white">iGenesis benchmarking and Optimization solutions are aimed at improving the performance of an operators network, post the network roll out. With ever changing data traffic demands with the usage of and pressures on managing the operational costs, service providers are increasingly looking at Benchmarking and Optimization services for meeting the needs of customers and save on capital and operational expenditure.</p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/optimization.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>BENCHMARKING & OPTIMIZATION</h3>
                      <p class="text-white">iGenesis myanmar’s benchmarking and Optimization solutions are aimed at improving the performance of an operators network, post the network roll out. With ever changing data traffic demands with the usage of smart phones and pressures on managing the operational costs, service providers are increasingly looking at Benchmarking and Optimization services for meeting the needs of customers and save on capital and operational expenditure.</p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/managed-services.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>MANAGED SERVICES</h3>
                      <p class="text-white">iGenesis managed services allow operators to free themselves from non-differentiating tasks of building and operating their network and focus on their customers and products. iGenesis Managed Services offerings are based on the Build-Operate-Manage (BOM) model and offer KPI/SLA based end to end services from Network Planning & Design, System Engineering, Installation and commissioning, System Integration, Optimization, Network Operations and Field Maintenance. </p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/energy-management.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>ENERGY MANAGEMENT</h3>
                      <p class="text-white">Energy is an indispensable resource in any Organization, as well as an increasingly critical cost factor. Better management of energy has thus become vital. Energy management in the changing business scenario needs to consider technology development, planning, optimization, monitoring and dissemination of the energy products and services to the Telecom Operators and OEMs.</p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/site-acquisition.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>SITE ACQUISITION SERVICES</h3>
                      <p class="text-white">For Telecom Operators, Time-to-market depends on effectively optimizing the acquisition process. The iGenesis Myanmar Site Acquisition Team understands the technical, engineering and business aspects of site acquisition services. Our capabilities include pre-construction leasing, entitlement activities and difficult zoning / permitting scenarios. iGenesis Myanmar has met the acquisition challenges of acquiring sites for many Telecom Operators for over 5 years, our team has provided a proven process to ensure we meet the client’s scope, cost and schedule requirements.</p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>  
            <div class="col-md-6 col-lg-4"> 
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000"> 
                <div class="cardStyle2Inner"> 
                  <div class="cardStyle2Icon">  
                    <img src="{{asset('assets/images/consulting-solutions.svg')}}" alt="..."> 
                  </div>  
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div> 
                  <div class="cs2ContentCol lMoreContent">  
                    <div class="cs2Content">  
                      <h3>CONSULTING SOLUTIONS</h3> 
                      <p class="text-white">iGenesis provides a holistic approach that helps Operators to remain competitive in a market defined by rapidly evolving technology, a steady stream of new players and increasingly demanding consumers. iGenesis understands the Telecom market and business evolution and help Operators to identify user needs and address them through business model evolution, service-management innovation and technology strategies.</p>  
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="cardStyle2 lMoreColMain" data-aos="fade-up" data-aos-duration="3000">
                <div class="cardStyle2Inner">
                  <div class="cardStyle2Icon">
                    <img src="{{asset('assets/images/professional-services.svg')}}" alt="...">
                  </div>
                  <div class="lineShape"><img src="{{asset('assets/images/line-gradient.svg')}}" alt="..."></div>
                  <div class="cs2ContentCol lMoreContent">
                    <div class="cs2Content">
                      <h3>PROFESSIONAL SERVICES</h3>
                      <p class="text-white">iGenesis ability to capitalize on new thinking, new workforce models and new possibilities has made it one of the most recognized and respected workforce solutions providers in the world. iGenesis expertise, experience and unmatched global footprint allows it to deliver solutions to help its clients achieve better business results in local market.</p>
                    </div>
                  </div>
                </div>
                <div class="learnMoreCol">
                  <a href="javascript:void(0);" class="learnMore">Learn </a>
                </div>
              </div>
            </div>
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
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo1.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo9.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo10.jpg')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo11.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo12.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo13.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo2.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo3.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo4.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo5.jpg')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo7.png')}}" alt="..."></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('assets/images/customers-logo8.png')}}" alt="..."></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  @endsection