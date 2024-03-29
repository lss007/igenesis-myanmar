<!DOCTYPE html>
<html lang="en">

<head>



    <title>@yield('title') Pages / Register</title>
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
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                  </div><!-- End Logo -->
    
                  <div class="card mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                        <p class="text-center small">Enter your personal details to create account</p>
                      </div>
    
               
                        
        <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
            @csrf
                        <div class="col-12">
                          <label for="yourName" class="form-label">Your Name</label>
                          <input  type="text" name="name" class="form-control" id="yourName" required>
                          <div class="invalid-feedback">Please, enter your name!</div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourEmail" class="form-label">Your Email</label>
                          <input  type="email" name="email" class="form-control" id="yourEmail" required>
                          <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                        </div>
    
             
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="yourPassword" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                    
                        <div class="col-12">
                            <label for="yourPassword" class="form-label">Password confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                            <div class="invalid-feedback">Please enter your confirmation password!</div>
                          </div>
                        {{-- <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                        </div> --}}
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Create Account</button>
                        </div>
                        <div class="col-12">
                          <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                        </div>
                      </form>
    
                    </div>
                  </div>
    

    
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main>
      <!-- End #main -->

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