@extends('frontend.body.homemaster')
@section('title', 'Life Genesis')
@section('content')

<section>
    <div class="bannerSection">
      <div class="bannerSlider">
        <div class="bannerInner innerBanner" style="background-image: url('{{asset('assets/images/banner-img1.jpg')}}');">
          <div class="container">
            <div class="bannerContent" data-aos="fade-up" data-aos-duration="3000">
              <h1>Life  @ Genesis</h1>
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
                    <h3>Life @ Igenesis Myanmar</h3>
                    <p>We at International Genesis Technology Myanmar Pvt. Ltd believe and dedicated towards our employees personal and professional growth and to achieve this we always ensure for following 3 Keys.</p>
                    <ul class="listStyle">
                      <li>Effective Trainings and Developmental Programs for our employees for Skill and Personal Development.</li>
                      <li>Open and Positive Working Culture for Better and Happy Workplace</li>
                      <li>Diverse Workplace which make us to acquire and retain best talent from Industry</li>
                    </ul>
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
                    <h3>Rewards & Recognition Programs @ iGenesis</h3>
                    <p>Rewards and Recognition Policy at iGenesis, is designed to encourage & motivate employees whose performance is outstanding either individually or through team that contribute to the overall objectives & growth of the organization. “Star Performer Award” is as an initiative intended to foster high performance culture covering individuals and teams.</p>
                    <p>The objectives of “Star Performer of the Quarter” and “Star Performer of the Year” Awards are:</p>
                    <ul class="listStyle">
                      <li>To recognize significant and outstanding value-added contributions of the employees while performing the duties in spite of various constraints.</li>
                      <li>To recognize and promote positive behaviors that support individual, work group, unit, team, department, organizational mission and business goals and objectives</li>
                      <li>To create “role models” for others to emulate and surpass.</li>
                      <li>To set standards of high performance and to encourage a team oriented work culture.</li>
                      <li>To provide timely recognition to employees to improve employee productivity and quality of work;</li>
                    </ul>
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
                    <h3>Employee Engagement Initiatives @ iGenesis (Myanmar)</h3>
                    <p>We at iGenesis believe in Effective Employee Engagement of our people through activities which are just not only fun but also a Life Experience, Team Building and Knowledge Sharing Initiatives</p>
                    <p>An “engaged employee” is one who is fully enthusiastic about their work and so takes positive actions towards the customer satisfaction and organizational goal and vision achievement.</p>
                    <p><strong>We All are contributing for Making Genesis Myanmar a Great Place to Work!</strong></p>
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