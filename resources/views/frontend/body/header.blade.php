
<header>
      <div class="headerCol">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-auto">
              <div class="logo">
                <a href="{{route('front.homepage')}}">
                  <img class="lightLogo" src="{{asset('assets/images/logo.svg')}}" alt="...">
                  <img class="darkLogo" src="{{asset('assets/images/logo2.svg')}}" alt="...">
                </a>
              </div> 
            </div>
            <div class="col"> 
              <div class="navCol">
                <div class="navLinks">
                  <ul>  
                    <li>
                      <a href="{{route('front.homepage')}}">Home</a>
                    </li>
                    <li>
                      <a href="{{route('front.about.us')}}">About</a>
                    </li>
                    <li>
                      <a href="{{route('front.our.people')}}">Our People</a>
                    </li>
                    <li>
                      <a href="{{route('front.services')}}">Services</a>
                    </li>
                    <li>
                      <a href="#">Credentials</a>
                    </li>
                    <li>
                      <p>
                        <a href="javascript:void(0)">Our Commitment</a>
                        <img src="{{asset('assets/images/chevron-down.svg')}}" alt="Arrow" />
                      </p>
                      <ul class="subMenu">
                        <li>
                          <a href="{{route('front.quality.health')}}">
                            Quality & Health & Safety
                          </a>
                        </li>
                        <li>
                          <a href="{{route('front.view.blogs')}}">
                           Blog page 
                          </a>
                        </li>
                        
                      </ul>
                    </li>
                    <li>
                      <a href="{{route('front.lifeat.Genesis')}}">Life @ Genesis</a>
                    </li>
                    <li>
                      <a href="{{route('front.contact')}}">Contact Us</a>
                    </li>
                    <li>
                      <p>
                        <a href="javascript:void(0)">Join Us</a>
                        <img src="{{asset('assets/images/chevron-down.svg')}}" alt="Arrow" />
                      </p>
                      <ul class="subMenu">
                        <li>
                          <a href="{{route('front.view.joinUs')}}">
                            Submit Your CV
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="menuTogle d-block d-lg-none">
                <a href="javascript:void(0)" class="toggle">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menuBackDrop"></div>
    </header>