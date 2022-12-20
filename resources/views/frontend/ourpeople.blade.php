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
                        <img src="{{asset('assets/images/siddhartha-bose.jpg')}}" alt="...">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="csUserText">
                        <h4>Siddhartha Bose </h4>
                        <span class="text-white">Head – Human Resource & Administration</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vmContent">
                <p>Siddhartha Bose began his career as an HR executive with the Xenitis group, after which he took an assignment as district manager with Ushacomm India, on the Rasthriya Swasthya Bima Yojana, a Govt. of India project. After a short stint with Global Automobiles, he further solidified his skills in the field of project management at the JayPee Nigrie Super Thermal Power Project while working with Ayoki Cembol Erectors Pvt. Ltd. In 2014 he moved to Myanmar as HR manager with Veneer and Plywood Pvt. Ltd, Sagaing. In 2017 he joined Iceberg Holding Group, a Singapore based company operating in Myanmar in the capacity of HR & Payroll Manager for their HR Services outsourcing business. Later in 2020 he was promoted to HR & Admin Operations Manager, where he was not only handling the HR and also the Operations of their Oil & Gas business with 40 petrol pumps all over Myanmar. With over 14 years as a seasoned HR professional, Siddhartha is an accomplished administrator and experienced at government compliance and liaison work. He holds a Master’s in Business Administration from ICFAI University(Dehradun), and is proficient in English and spoken Burmese. He has joined iGenesis Family as HR and Admin Head. Siddhartha joined with iGenesis family from November 2022.</p>                  
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
                        <img src="{{asset('assets/images/phyo.jpg')}}" alt="...">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="csUserText">
                        <h4>Phyo Phyo Zar Chi</h4>
                        <span class="text-white">Project Lead</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vmContent">
                <p>Ms. Phyo Phyo Zar Chi started her career as Layout Designer for a Publishing house in Yangon, she change her profile to HR & Admin with Golden Zenith Mining and Engineering Company where she worked as HR & Admin Manager. Then further to expand her experience and knowledge she joined Myanmar Mahar Dahna Company with the capacity of Management & Operation Manager, where she worked for Operation and Management of the resources for the Mobile Towers in different location all around Myanmar. From February 2019, with her brilliant experience in Tower Management she joined iGeneis Myanmar as Project Lead. She is a detailed oriented operations manager/project lead with more than 9 years of experience in Team handling with effective communication, problem solving and management skills.</p>
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