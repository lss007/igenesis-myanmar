<footer>
  @php
    $getAddress=  DB::table('contact_addresses')->where('status',1)->first();
  @endphp
    <div class="footerSection">
      <div class="footerTopShape">
        <img src="{{asset('assets/images/footer-top-shape.svg')}}" alt="...">
      </div>
      <div class="container" data-aos="fade-up" data-aos-duration="3000">
        <div class="footerInner">
          <div class="row">
            <div class="col-lg-4">
              <div class="footerCol">
                <div class="footerLogo">
                  <a href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="..."></a>
                </div>
                 <div class="socialLinks d-none d-lg-block">
                  <ul>
                    <li><a href="https://www.facebook.com/GenesisTechnologyMyanmar" target="_blank"><img src="{{asset('assets/images/facebook-icon2.svg')}}" alt="..."></a></li>
                    <!-- <li><a href="javascript:void(0);"><img src="{{asset('assets/images/twitter-icon2.svg')}}" alt="..."></a></li> -->
                    <li><a href="https://mm.linkedin.com/company/igenesis-technologies-ltd-myanmar" target="_blank"><img src="{{asset('assets/images/linkedin-icon2.svg')}}" alt="..."></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-md-4">
                  <div class="footerCol">
                    <h2>Our Company</h2>
                    <div class="footerLinks">
                      <ul>
                        <li><a href="{{route('front.homepage')}}#whoarewe" class="scrollTo">Who We Are</a></li>
                        <li><a href="{{route('front.about.us')}}">About Company</a></li>
                        <li><a href="{{route('front.services')}}">Services We Provide</a></li>
                        <li><a href="{{route('front.whatare')}}">What We Have Done</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="footerCol">
                    <h2>Our Services</h2>
                    <div class="footerLinks">
                      <ul>
                        <li><a href="javascript:void(0);">Telecom Infra Services</a></li>
                        <li><a href="javascript:void(0);">Telecom Experience</a></li>
                        <li><a href="javascript:void(0);">SAQ Experience</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="footerCol">
                    <h2>Contact Details</h2>
                    <p class="text-white">{{$getAddress->address}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="socialLinks d-block d-lg-none">
            <ul>
              <li><a href="https://www.facebook.com/GenesisTechnologyMyanmar" target="_blank"><img src="{{asset('assets/images/facebook-icon2.svg')}}" alt="..."></a></li>
              <!-- <li><a href="javascript:void(0);"><img src="{{asset('assets/images/twitter-icon2.svg')}}" alt="..."></a></li> -->
              <li><a href="https://mm.linkedin.com/company/igenesis-technologies-ltd-myanmar" target="_blank"><img src="{{asset('assets/images/linkedin-icon2.svg')}}" alt="..."></a></li>
            </ul>
          </div>
        </div>
        <div class="footerBottom">
          <div class="row">
            <div class="col-md-auto order-md-last">
              <div class="footerLinks">
                <ul>
                  <li><a href="javascript:void(0);">Privacy Notice</a></li>
                  <li><a href="javascript:void(0);">Terms of Services</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="copyright">
                <p class="text-white mb-0">Copyright © {{date('Y')}} Genesis Myanmar</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="whatsappIcon">
        <a href="https://wa.me/+959797001345" target="_blank">
          <img src="{{asset('assets/images/whatsapp-icon.svg')}}" alt="...">
        </a>
      </div>
    </div>
  </footer>