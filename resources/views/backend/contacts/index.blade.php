@extends('backend.body.adminmaster')
@section('title', 'Contact messages')
@section('content')

@include('backend.body.breadcrumb')


<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Contact messages</h5>
  
          
            
         

   

          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Slider</h5>
        
            

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Message </th>
                  <th scope="col">Action </th>

                </tr>
              </thead>
              <tbody>
                @foreach($get_messages as $keys => $value)
                <tr>
                  <th scope="row" width="5%">{{$keys+1}}</th>
                  <td width="10%"> {{$value->name}}</td>
                  <td width="10%"> {{$value->email}}</td>
                  <td width="15%">{{$value->subject}}</td>
                  <td width="30%">
                 
                    {{Str::limit(	$value->message,30,$end='....')}}
                  </td>
                  <td width="25%">
                    {{-- view Message --}}
                    <a href="{{route('view.contact.messages',$value->id)}} " class="btn btn-primary">
                        <i class="bi bi-eye"></i>
                      </a>
                    {{-- view Message --}}


                      <a href="{{route('delete.contact.messages',$value->id)}}"  id="delete" class="btn btn-primary">
                      <i class="bi bi-trash" ></i>
                    </a>

                </td>

                </tr>
        @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>


 @endsection