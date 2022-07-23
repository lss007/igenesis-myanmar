<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') Forgot  Password </title>
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
             
              

              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"> Reset  Your Password</h5>
                    <p>
                      Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                    </p>
                    @if (session('status'))
                    <p class="text-center small text-success font-weight-bold"   >
                            {{ session('status') }}
                    </p>
                    @endif
                  </div>

              

                      
                        <form method="POST" class="row g-3 needs-validation" action="{{ route('password.email') }}">
                            @csrf
                        <div class="col-12">
                      <label for="Useremail" class="form-label">Useremail</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input id="email"  type="email" name="email" value="{{old('email')}}" class="form-control" required>
                        <div class="invalid-feedback">Please enter your Useremail.</div>

                      </div>
                      @error('email')
                      <span class=" text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">
                        Email Password Reset Link</button>
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