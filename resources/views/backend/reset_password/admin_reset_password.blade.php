<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') Admin Reset Password </title>
    @include('backend.body.head')
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
            
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block"> Admin Reset Password</span>
                </a>

              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
            @if (session('message'))
                <div class="text-success">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('error'))
                        <div class="text-danger">
                            {{ session('error') }}
                        </div>
            @endif
            
                    <p class="text-center small">Reset Admin login Password</p>
                  </div>


                    <form class="row g-3 needs-validation" method="POST" action="{{route('admin_updatePassword')}}">
                        @csrf       
                        <input type="hidden" name="token" value="{{ $token }}"> 
                        
                        <div class="col-12">
                      <label for="E-Mail Address" class="form-label">E-Mail Address</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="E-Mail Address">@</span>
                        <input  type="email" name="email" id="email" class="form-control"  autocomplete="email">
                 

                      </div>
                      @error('email')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>


                    <div class="col-12">
                        <label for="Password" class="form-label">Password</label>
                        <div class="input-group has-validation">
              
                          <input  type="password" name="password" id="password" class="form-control" >
                   
  
                        </div>
                        @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>

                      <div class="col-12">
                        <label for="Password" class="form-label">Confirm Password</label>
                        <div class="input-group has-validation">

                          <input  type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
                   
  
                        </div>
                        @error('password_confirmation')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>


            
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit"> Reset password</button>
                    </div>
            
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>

</body>

</html>