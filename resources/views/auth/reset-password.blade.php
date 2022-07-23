<!DOCTYPE html>
<html lang="en">

<head>



    <title>@yield('title')  Reset  password</title>
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
                        <h5 class="card-title text-center pb-0 fs-4">Update your Password </h5>
                 
                      </div>
    
               
    <form method="POST" action="{{ route('password.update') }}">
            @csrf
      <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="col-12">
                          <label for="yourEmail" class="form-label">Your Email</label>
                          <input  class="form-control" id="email" type="email" name="email" value="{{old('email', $request->email)}}" required>
                          <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                        </div>
                        @error('email')
                        <span class=" text-danger">{{ $message }}</span>
                        @enderror
             
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input id="password"  type="password" name="password"  class="form-control" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                        @error('password')
                        <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    
                        <div class="col-12">
                            <label for="yourPassword" class="form-label">Password confirmation</label>
                            <input  class="form-control" id="password_confirmation" type="password" name="password_confirmation"  required>
                            <div class="invalid-feedback">Please enter your confirmation password!</div>
                          </div>
                          @error('password_confirmation')
                          <span class=" text-danger">{{ $message }}</span>
                          @enderror
 
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Reset Password</button>
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