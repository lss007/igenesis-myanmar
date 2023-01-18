@extends('backend.body.adminmaster')
@section('title', 'View Address')
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
      

        <div class="card">
          <div class="card-body">
            
              <h5 class="card-title">@yield('title')</h5>
              <a href="{{route('add_contact_address')}}" class="btn btn-success rounded-pill">Add Address</a>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
             
                  <th scope="col" width="45%">Address</th>

                  <th scope="col" width="20%">Status </th>
                  <th scope="col " width="20%">Action </th>
                </tr>
              </thead>
              <tbody>
                @if(count($get_contact_address) > 0)
                @foreach($get_contact_address as $keys => $value)
                <tr>
                  <th scope="row" width="5%">{{$keys+1}}</th>
             
                  <td>
                      {!! html_entity_decode(Str::limit(	$value->address,100,$end='....'))!!}
                    <br>

                <span class="text-success">  
                  {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}</span>
                </td>
             
                  <td width="5%">
                    @if($value->status == '1')
                    <a href="{{route('contact_address_inactive',$value->id)}}">
                    <span class="badge bg-success">Active</span>
                  </a>
                  @else
                    <a href="{{route('contact_address_active',$value->id)}}">
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
                            <h5 class="modal-title"> View Address</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <h5> Address:</h5>
                            <p> {!! html_entity_decode($value->address)!!}</p>
                        </div>
                        </div>
                    </div>
                    </div>
            <!-- End Large Modal-->
                      <a href="{{route('contact_address_edit', $value->id)}} " class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="{{route('contact_address_delete',$value->id)}} " id="delete" class="btn btn-primary">
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
@endsection