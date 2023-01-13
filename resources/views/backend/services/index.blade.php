@extends('backend.body.adminmaster')
@section('title', 'Manage Our Services')
@section('content')

@include('backend.body.breadcrumb')

    <!-- End Page Title -->
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
          

            <div class="card">
              <div class="card-body">
                
                  <h5 class="card-title">@yield('title')</h5>
                  <a href="{{route('add_our_services')}}" class="btn btn-success rounded-pill">Add Services</a>
          
                
    
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">image</th>
                      <th scope="col">Status </th>
                      <th scope="col">Action </th>
    
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($ourService) > 0)
                    @foreach($ourService as $keys => $value)
                    <tr>
                      <th scope="row" width="5%">{{$keys+1}}</th>
                      <td width="20%"> {{Str::limit(	$value->name,20,$end='....')}}<br> 
                     </td>
                      <td width="25%">
                          {{-- {!!html_entity_decode( 	)!!} --}}


                          {!! html_entity_decode(Str::limit(	$value->description,100,$end='....'))!!}
                        
                        <br>

                        <span class="text-success">  {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}</span>
                      </td>
                      <td width="20%"><img src="{{asset($value->image)}}" alt="{{$value->title}}" width="100"></td>
                      <td width="5%">
                        @if($value->status == '1')
                   
                      
                      <a href="{{route('our_services_inactive',$value->id)}}">
                        <span class="badge bg-warning">Inactive</span>
                      </a>
                      @else
                      <a href="{{route('our_services_active',$value->id)}}">
                        <span class="badge bg-success">Active</span>
                      </a>
                        @endif
                      </td width="25%">
                      <td>
    
                          <a href="{{route('our_services_edit',$value->id)}} " class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i>
                          </a>
    
                          <a href="{{route('our_services_delete',$value->id)}} " class="btn btn-primary">
    
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