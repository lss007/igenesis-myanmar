
    @extends('frontend.body.homemaster')
    @section('title', 'Join  Us')
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
        <div class="sectionSpace" id="whoarewe">
          <div class="container">
            <div class="cardSection" data-aos="fade-up" data-aos-duration="3000">
              <div class="row align-items-end g-0">
                <div class="col-md-6 order-md-last">
                  <div class="csImg contactImg">
                    <img src="{{asset('assets/images/career.jpg')}}" alt="...">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="csContent csContentLeft">          
                    <div class="csTextCol">
                      <div class="csText">
                        <div class="cardContact">
                          <form method="post" action="{{route('front.submitResume')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">     
                                    <div class="form-group">
                                    <label class="formLabel">Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    @error('name')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                  </div></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="formLabel">Email *</label>
                                        <input type="text" name="email" class="form-control" placeholder="Your Email">
                                        @error('email')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror
                                      </div>
                                </div>

                            </div>
                       
                            <div class="row">
                                <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="formLabel">Location *</label>
                              <input type="text" name="location" class="form-control" placeholder="location">
                              @error('location')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                            </div>
                        </div>
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label class="formLabel">Contact number *</label>
                                <input type="text" name="contact" class="form-control" placeholder="Contact Number">
                                @error('contact')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"> 
                              <div class="form-group">
                                <label class="formLabel"> Current Industry </label>
                                <select class="form-control" required="" name="current_industry">
                                    <option value="" selected="">Current Industry</option>
                                    <option value="Advertising">Advertising</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Chemicals">Chemicals</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Consumer Durables">Consumer Durables</option>
                                </select>
                                @error('current_industry')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                              </div>
                            </div>
                        <div class="col-md-6">
                              <div class="form-group">
                                <label class="formLabel">Current function</label>
                                <select class="form-control" required="" name="current_function">
                                    <option value="" selected="">Current function</option>
                                    <option value="Accounts / Finance">Accounts / Finance</option>
                                    <option value="Administration">Administration</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Consulting">Consulting</option>
                                    <option value="Content Development / Writing">Content Development / Writing</option>
                                </select>
                                @error('current_function')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="customFileUpload">
                                    <label for="file-upload" class="custom-file-upload">
                                        <i class="fa fa-cloud-upload"></i> Upload Resume
                                    </label>
                                    <input type="file"  id="file-upload" style="" name="resumeFile" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" > 
                                                                               
                                </div>
                            </div>

                            <div class="form-group">
                              <button class="btn btn_primary" data-text="Send Message" href="JavaScript:void(0)" data-reactid="107">
                                <span class="btn__overlay" data-reactid="108"></span>
                                <span class="btn__text" data-reactid="109">Submit Resume</span>
                              </button>
                            </div>
                          </form>
                        </div>
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
