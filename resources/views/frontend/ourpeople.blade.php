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
            <div class="teamCol" data-aos="fade-up" data-aos-duration="3000">
              <div class="row g-0 align-items-center">
                <div class="col-md-auto">
                  <div class="teamImg">
                    <img src="{{asset('assets/images/manish-shrivastava.jpg')}}" alt="...">
                  </div>
                </div>
                <div class="col-md">
                  <div class="teamText teamTextLeft lightBg">
                    <h4>Manish Shrivastava</h4>
                    <span class="themeClr">CEO/ASIA DIVISION HEAD</span>
                    <p>CEO & Asia Division Head at iGenesis is Mr Manish Shrivastava, who has served in armed services possessing rich and diverse experience in various sectors like Automobiles, Telecommunications and Infrastructures. In his career spanning over 25 plus years he has worked in companies like Tata Motors, Bharti, MTS, MAXIS, American Tower Corporation, Srei Infrastructure & Tata Communications at various leadership positions. Manish is an avid reader and traveller.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="teamCol cardSection" data-aos="fade-up" data-aos-duration="3000">
              <div class="row g-0 align-items-center">
                <div class="col-md-auto order-md-last">
                  <div class="teamImg">
                    <img src="{{asset('assets/images/anuj.jpg')}}" alt="...">
                  </div>
                </div>
                <div class="col-md">
                  <div class="teamText teamTextRight lightBg">
                    <h4>Anuj Dagar</h4>
                    <span class="themeClr">CHIEF OPERATING OFFICER - MYANMAR</span>
                    <p>MR ANUJ DAGAR IS THE COO at iGenesis Myanmar, He comes with a rich and diverse experience of 16+ years in Business Development, Strategic Planning , Project roll out, Project Management ,budgeting, costing, site acquisition, Site engineering, Contract negotiations & bidding, He held an experience in Cross-functiona l & Cultural in Countries like Myanmar, Indonesia, and England.</p>
                      <p>Mr. Dagar has been associated with Group since 2007 and in his mesmerizing tenure of 14 years he has successfully accomplished many tasks and contributed to the Organizational Growth and Development.</p>
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
    <div class="sectionSpace testimonialSec">
      <div class="container">
        <div class="row g-md-5">
          <div class="col-md-6">
            <div class="cardStyle1" data-aos="fade-right" data-aos-duration="3000">
              <div class="csUserCol">
                <div class="csUserInner">
                  <div class="row align-items-center">
                    <div class="col-sm-auto">
                      <div class="csUserImg">
                        <img src="{{asset('assets/images/hitendra-kawade.jpg')}}" alt="...">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="csUserText">
                        <h4>Hitendra Kawade</h4>
                        <span class="text-white">Head-Commercial & Supply Chain Management</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vmContent">
                <p>Hitendra Kawade is Head-Commercial & Supply Chain Management function at iGenesis Technologies Ltd (Myanmar).</p>
                <p>Kawade has been associated with iGenesis Myanmar since June 2015 and contributed to the various functional areas in Organization for Unbeaten Growthful Journey in Myanmar’s Business Operations.</p>
                <p>Kawade who is a Commerce Graduate & Master in Business Administration has more than 12 years of experience in the industry having the core competencies in Project Management, Financial Planning,Operational & Business Analysis, Techno-commercial & Supply Chain Management.</p>
                <p>At Genesis Myanmar, he is responsible for budget control by allocation of Capex, Opex, Business   Commercials and Vendor/ Partner Payments. He is also heading the Supply Chain Function & Managing End to End Processes along with the team.</p>
                <p>At Genesis Myanmar, he is responsible for budget control by allocation of Capex, Opex, Business   Commercials and Vendor/ Partner Payments. He is also heading the Supply Chain Function & Managing End to End Processes along with the team.</p>
                <p>Kawade Values the Commitment for Organization and Integrity and mention that these are two things ensured his Success and Achievements in Professional Career.</p>
                <div class="viewCol">
                  <a href="javascript:void(0);">
                    View
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cardStyle1" data-aos="fade-left" data-aos-duration="3000">
              <div class="csUserCol">
                <div class="csUserInner">
                  <div class="row align-items-center">
                    <div class="col-sm-auto">
                      <div class="csUserImg">
                        <img src="{{asset('assets/images/raman-singhal.jpg')}}" alt="...">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="csUserText">
                        <h4>Raman Singhal</h4>
                        <span class="text-white">Head – Human Resource & Administration</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vmContent">
                <p>Raman Singhal is Head of HR & Admin at iGenesis Technologies Ltd (Myanmar)</p>
                <p>He holds the rich industry experience of more than 19 years in the areas of Human Resources, Administration, IOT and AI products for Smart Home, Organizational Development & Team Management etc.</p>
                <p>Singhal has been associated with Group since 2022 and is constructively contributing to the Organizational Growth & Success</p>
                <p>Prior to joining at iGenesis Myanmar, Mr. Singhal was associated with organizations such as Increda Staffing, Trust Marketing (Gionee Mobiles), Sistema Shyam Teleservices Ltd. (MTS), Genpact and Bharti Airtel.</p>
                <p>He believes that for every organization, its employees are an asset, and businesses should engage with them on learning, development and best of the organizational practices which will result in efficient and more productive organization.</p>
                <div class="viewCol">
                  <a href="javascript:void(0);">
                    View
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cardStyle1" data-aos="fade-right" data-aos-duration="3000">
              <div class="csUserCol">
                <div class="csUserInner">
                  <div class="row align-items-center">
                    <div class="col-sm-auto">
                      <div class="csUserImg">
                        <img src="{{asset('assets/images/nitesh-joshi.jpg')}}" alt="...">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="csUserText">
                        <h4>Nitesh Joshi</h4>
                        <span class="text-white">Project Lead- Telecom Infra</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vmContent">
                <p>Nitesh Joshi is a Project Lead for telecom infrastructure projects at iGenesis Technologies Ltd (Myanmar)</p>
                <p>Joshi has more than 10 years of experience in the field of Project Delivery, Project RF Optimization,Fiber Planning, IBS Solution, RF Planning, Technical Support, Operations, Networking in Telecom industry</p>
                <p>Joshi has more than 10 years of experience in the field of Project Delivery, Project RF Optimization,Fiber Planning, IBS Solution, RF Planning, Technical Support, Operations, Networking in Telecom industry</p>
                <p>Prior to joining iGenesis Technologies (Myanmar) Ltd, he has worked with the companies such as Nxgenbio life sciences, MetroTel Works Pvt Ltd & Titiksha TeleTechnocrats Pvt Ltd etc.</p>
                <p>Joshi with his Knowledge, Experience, Passion & Innovation makes Genesis Myanmar Ltd an effective Delivery organization in Telecom Infra to serve better to our customers.</p>
                <div class="viewCol">
                  <a href="javascript:void(0);">
                    View
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cardStyle1" data-aos="fade-left" data-aos-duration="3000">
              <div class="csUserCol">
                <div class="csUserInner">
                  <div class="row align-items-center">
                    <div class="col-sm-auto">
                      <div class="csUserImg">
                        <img src="{{asset('assets/images/lakshminarayana.jpg')}}" alt="...">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="csUserText">
                        <h4>Lakshminarayana Chowdhury </h4>
                        <span class="text-white">Chief Financial Officer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vmContent">
                <p>Mr LN Chowdhury is the Chief Financial Officer at iGenesis. He is graduated and post graduated in Commerce(M.Com-Accounts, and MBA(Finance) and Certified Accountant from Apex Institute- Institute of Chartered Accountants of India. Having been associated with Manufacturing- Paper & Pulp, Telecom Operators, Equipment Manufacturer, and Telecom Service Sectors for renowned companies Like Ballarpur Industries Limited, Tata Teleservices Limited, Acme Cleantech Solutions limited, GTL Saudi Arabia Ltd, Genesis Myanmar Ltd for a period of 19 Years+ in the countries in India, Saudi Arabia, and Myanmar at different positions. He is having ample exposure and expertise in the areas of  Auditing and compliance. Risk assessment and governance,  E2E Finance management, and reporting.</p>
                <div class="viewCol">
                  <a href="javascript:void(0);">
                    View
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection