<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') - Dashboard </title>
  @include('backend.body.head')
</head>
<body>

  <!-- ======= Header ======= -->
  @include('backend.body.header')
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  @include('backend.body.sidebar')
  <!-- End Sidebar-->
  <main id="main" class="main">
 @yield('content')
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
@include('backend.body.footer')
  <!-- End Footer -->
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
 <!-- Toaster Javascript cdn -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
$(function(){
  $(document).on('click','#delete',function(e){
    e.preventDefault();
    var link = $(this).attr("href");

Swal.fire({
  title: 'Are you sure?',
  text: "Delete This Data!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})


  });
});
</script>
</body>

</html>