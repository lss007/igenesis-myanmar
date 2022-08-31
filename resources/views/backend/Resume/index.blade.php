@extends('backend.body.adminmaster')
@section('title', 'Manage Resumes')
@section('content')

@include('backend.body.breadcrumb')


  
<section class="section">
    <div class="row">
      <div class="col-lg-12">
    @if(session('sucess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session('sucess')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{session('error')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif(session('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              {{session('info')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">@yield('title')</h5>
            <p>Mange @yield('title') </p>
            

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Resume</th>
                  <th scope="col">Location </th>
                  <th scope="col">Action </th>
                </tr>
              </thead>
              <tbody>
                @if(count($getResume) > 0 )
                @foreach($getResume as $keys => $resumes)
                <tr>
                  <td width="20%">{{$keys +1}} </td>

                  <th scope="row" width="5%">
                    {{$resumes->name}}
                  </th>
                  <td width="20%">{{$resumes->email}} </td>
                  <td width="30%">
                      <a href="{{asset($resumes->resumeFile)}}" download="">
                        <img src="{{asset('assets/icons/pdf.png')}}" alt="">
                        Resume
                    </a>
                  
                </td>
             
                  <td width="10%">
                {{$resumes->location}}
        
                  </td width="20%">
                  <td>

                 

                      <a href="{{route('admin.deleteResume',$resumes->id)}}" class="btn btn-primary" >

                      <i class="bi bi-trash"></i>
                    </a>

                </td>

                </tr>
                @endforeach
                @endif

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

 @endsection