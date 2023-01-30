
@php
  $get_banner=  DB::table('all_banners')->where('status',1)->first();
@endphp

    <section>
        <div class="bannerSection">
          <div class="bannerSlider">
            <div class="bannerInner innerBanner" style="background-image: url('{{asset('assets/banner/'.$get_banner->image) }}')">
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