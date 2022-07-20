<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <title>@yield('title') - Genesis Myanmar</title>
          <!-- Toaster CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

  </head>
  <body>
{{-- Header  --}}
@include('frontend.body.header')
{{-- header close  --}}

{{-- body content  --}}
@yield('content')
{{-- end body content  --}}

{{-- footer section  --}}
   @include('frontend.body.footer')
{{-- footer section close  --}}

    <!-- Library Js -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <!-- Swiper js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom js -->
    <script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
     <!-- Toaster Javascript cdn -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
     case 'info':
     toastr.info(" {{ Session::get('message') }} ");
     break;
 
     case 'success':
     toastr.success(" {{ Session::get('message') }} ");
     break;
 
     case 'warning':
     toastr.warning(" {{ Session::get('message') }} ");
     break;
 
     case 'error':
     toastr.error(" {{ Session::get('message') }} ");
     break; 
  }
  @endif 
 </script>
  </body>
</html>