
    @extends('frontend.body.homemaster')
    @section('title', 'Contact Us')
    @section('content')
    
    @include('frontend.body.banner')
     
    <section>
        <div class="sectionSpace" id="whoarewe">
          <div class="container">
            <div class="cardSection" data-aos="fade-up" data-aos-duration="3000">
              <div class="row align-items-end g-0">
                <div class="col-md-6 order-md-last">
                  <div class="csImg contactImg">
                    <img src="{{asset('assets/images/contact.jpg')}}" alt="...">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="csContent csContentLeft">          
                    <div class="csTextCol">
                      <div class="csText">
                        <div class="cardContact">
                          <form method="post" action="{{route('front.storecontact')}}">
                            @csrf
                            <div class="form-group">
                              <label class="formLabel">Name *</label>
                              <input type="text" name="name" class="form-control" placeholder="Your Name">
                              @error('name')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label class="formLabel">Email *</label>
                              <input type="text" name="email" class="form-control" placeholder="Your Email">
                              @error('email')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label class="formLabel">Subject *</label>
                              <input type="text" name="subject" class="form-control" placeholder="Subject">
                              @error('subject')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label class="formLabel">Message *</label>
                              <textarea class="form-control" placeholder="Message" name="msg"></textarea>
                              @error('msg')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <button class="btn btn_primary" data-text="Send Message" href="JavaScript:void(0)" data-reactid="107">
                                <span class="btn__overlay" data-reactid="108"></span>
                                <span class="btn__text" data-reactid="109">Send Message</span>
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-5 pt-5 mb-5">
                <div class="col-lg-12">
                  <div class="titleCol text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                    <h2 class="lgTitle">Global <span class="themeClr">Footprint</span></h2>                    
                  </div>
                </div>
                <div class="col-lg-12 text-center mt-4">
                  <img src="{{asset('assets/images/globalfootprint.jpg')}}" alt="...">                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection
  