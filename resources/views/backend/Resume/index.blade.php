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
                  <td width="05%">{{$keys +1}} </td>

                  <th scope="row" width="20%">
                    {{isset($resumes->name) ? ucwords($resumes->name) : "NA"}}
                  </th>
                  <td width="20%">{{    ucwords($resumes->email)}} </td>
                  <td width="20%">
                      <a href="{{asset('storage/resume').'/'.$resumes->resumeFile}}" download="">
                        <img src="{{asset('assets/icons/pdf.png')}}" alt=""> Resume </a><br>
                        {{Carbon\Carbon::parse($resumes->created_at)->diffForHumans()}}
                   </td>
             
                  <td width="10%">
                {{$resumes->location}}
        
                  </td width="20%">
                  <td>

                  <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$resumes->id}}">
                      <i class="bi bi-eye"></i>
                  </a>

                      <div class="modal fade" id="largeModal{{$resumes->id}}" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"> View Detail</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <h5 class="fw-bolder"> Name:</h5>
                                  <p> {!! isset($resumes->name) ? html_entity_decode(ucwords($resumes->name)) : ""!!}</p>
                                  <h5 class="fw-bolder"> Email:</h5>
                                  <p> {!! isset($resumes->email) ? html_entity_decode($resumes->email) : ""!!}</p>
                                  <h5 class="fw-bolder"> location:</h5>
                                  <p> {!! isset($resumes->location) ? html_entity_decode($resumes->location) : ""!!}</p>
                                  <h5 class="fw-bolder"> Contact Number:</h5>
                                <p> {!! html_entity_decode($resumes->contact)!!}</p>
                                </div>
                                <div class="col-md-6">
                                <h5 class="fw-bolder" > Current Industry:</h5>
                                  <p> {!! isset($resumes->current_industry) ? html_entity_decode($resumes->current_industry) : ""!!}</p>
                                  <h5 class="fw-bolder"> Current function:</h5>
                                  <p> {!! isset($resumes->current_function) ? html_entity_decode($resumes->current_function) : ""!!}</p>
                                 <h5 class="fw-bolder"> Created at:</h5>
                                  {{Carbon\Carbon::parse($resumes->created_at)->diffForHumans()}}
                                <h5 class="fw-bolder">Resume:</h5>
                                <a href="{{asset('storage/resume').'/'.$resumes->resumeFile}}" download="">
                                     <img src="{{asset('assets/icons/pdf.png')}}" alt=""> Resume</a>
                                </div>
                              </div>
                               
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Large Modal-->
                      <a href="{{route('admin.deleteResume',$resumes->id)}}" class="btn btn-primary" > <i class="bi bi-trash"></i></a>
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