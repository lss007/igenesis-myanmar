@extends('backend.body.adminmaster')
@section('title', 'Manage Our Team')
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
                  <a href="{{route('add_our_team')}}" class="btn btn-success rounded-pill">Add Team</a>
          
                
    
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">image</th>
                      <th scope="col">Status </th>
                      <th scope="col">Action </th>
    
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($ourTeam) > 0)
                    @foreach($ourTeam as $keys => $value)
                    <tr>
                      <th scope="row" width="5%">{{$keys+1}}</th>
                      <td width="20%"> {{Str::limit(	$value->name,20,$end='....')}}<br> 
                     </td>
                      <td width="25%">
                          {{-- {!!html_entity_decode( 	)!!} --}}
                          {!! html_entity_decode(Str::limit(	$value->description,100,$end='....'))!!}
                        
                        <br>

                    <span class="text-success">  
                      {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}</span>
                    </td>
                      

                      <td width="20%">
                        <img src="{{(isset($value->image)) 
                        ? asset('assets/ourteam/'.$value->image) :asset('no_image.jpg')}}" 
                        alt="{{$value->title}}" width="100">
                      </td>
                      <td width="5%">
                        @if($value->status == '1')
                   
                      
                        <a href="{{route('our_team_inactive',$value->id)}}">
                       
                        <span class="badge bg-success">Active</span>
                      </a>
                      @else
                      
                        <a href="{{route('our_team_active',$value->id)}}">
                          <span class="badge bg-warning">Inactive</span>
                      </a>
                        @endif
                      </td width="25%">
                      <td>
                 <!-- Large Modal -->
        <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$value->id}}">
                  <i class="bi bi-eye"></i>
                </a>
  
                <div class="modal fade" id="largeModal{{$value->id}}" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"> View Team</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6">
                      <h5> Name:</h5>
                      <p> {!! isset($value->name) ? html_entity_decode($value->name) : ""!!}</p>
                    <h5> Position:</h5>
                      <p> {!! isset($value->position) ? html_entity_decode($value->position) : ''!!}</p>
                          </div>
                          <div class="col-md-6">
                            <h5> Image:</h5>
                            <img src="{{asset('assets/ourteam/'.$value->image)}}" alt="{{$value->title}}" width="200">
                          </div>
                        </div>
 
            
                <h5> Description:</h5>
                       <p> {!! html_entity_decode($value->description)!!}</p>
                      </div>
               
                    </div>
                  </div>
                </div><!-- End Large Modal-->
                          <a href="{{route('our_team_edit',$value->id)}} " class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i>
                          </a>
    
                          <a href="{{route('our_team_delete',$value->id)}} " class="btn btn-primary">
    
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