@extends('backend.body.adminmaster')
@section('title', 'Admin')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
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
  
          @endif
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

              

                <div class="card-body">
                  <h5 class="card-title">Total  </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      @php
                      $users = App\Models\User::get();
                      @endphp
                      <h6>
                        {{count($users)}} <span>| Users</span>
                      </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
 


            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

          
                <div class="card-body">
                  <h5 class="card-title">Total  </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      @php
                      $post = App\Models\BlogPost::latest('created_at')->get();
                      @endphp
                      <h6>
                        {{count($post)}} <span>| Post's</span>
                      </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

                       {{-- approved  --}}
                       <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
          
                        
          
                          <div class="card-body">
                            <h5 class="card-title">Approved  </h5>
          
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person"></i>
                              </div>
                              <div class="ps-3">
                                @php
                                $approved = App\Models\BlogPost::where('status','=','1')->get();
                                @endphp
                                <h6>
                                  {{count($approved)}} <span>| Post's</span>
                                </h6>
          
                              </div>
                            </div>
                          </div>
          
                        </div>
                      </div><!-- End Sales Card -->
                      {{-- end approved  --}}
   

       

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent post <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col" width="35%">Summary</th>
                        <th scope="col">Image</th>
                        <th scope="col">time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach( $post as $key => $values ) 
                      <tr>
                        <th scope="row"><a href="#">{{$key +1}}</a></th>
                        <td>{{$values->user->name}}</td>
                        <td><a href="#" class="text-primary">
                          {{-- {{Str::limit(	$values->summary,200,$end='....')}} --}}
                          {!!html_entity_decode(str_limit($values->summary, $limit=200 ) )!!}
                        </a></td>
                        <td><img src="{{asset($values->image)}}" alt="{{$values->image}}" width="100"></td>
                        <td> {{Carbon\Carbon::parse($values->created_at)->diffforHumans()}}</td>
                        <td>
                          @if($values->status == 1)
                          <a href="{{route('user.rejected.post',$values->id)}}">
                          <span class="badge bg-success">Approved</span>
                        </a>
                        @else
                        <a href="{{route('user.approved.post',$values->id)}}">
                          <span class="badge bg-warning">Pending</span>
                        </a>
                          @endif
                        </td>
                        <td>

                          <a href="{{route('user.remove.blog',$values->id)}} " class="btn btn-primary">

                            <i class="bi bi-trash"></i>
                          </a>
                      
                        </td>
                      </tr>

                      @endforeach
                   
                     
                
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

       
          </div>
        </div><!-- End Left side columns -->

  

      </div>
    </section>


 @endsection