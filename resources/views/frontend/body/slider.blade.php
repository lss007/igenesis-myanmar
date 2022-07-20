<section>
    <div class="bannerSection">
      <div class="swiper bannerSlider">
        <div class="swiper-wrapper">
            @php 
            $slider = App\Models\Slider::get();
            @endphp
          @foreach( $slider as $values)
          <div class="swiper-slide" style="background-image: url('{{asset($values->image)}}');">
            <div class="bannerInner">
              <div class="container">
                <div class="bannerContent">
                  <h1>{{$values->title}}</h1>
                  <p>{{$values->description}}</p>
                  <div class="bannerBtn">
                     <div class="btn__wrap btn--fix-width" data-reactid="106">
                      <a class="btn btn_light" data-text="About Us" href="about.html" data-reactid="107">
                        <span class="btn__overlay" data-reactid="108"></span>
                        <span class="btn__text" data-reactid="109">About Us</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>          
          </div>
          @endforeach
  
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="bannerBtmShape">
        <img src="{{asset('assets/images/banner-bottom-shape.svg')}}" alt="...">
      </div>
    </div>
</section>