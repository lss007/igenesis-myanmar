@extends('backend.body.adminmaster')
@section('title', 'Contact messages')
@section('content')

@include('backend.body.breadcrumb')


<section class="section">
    <div class="row">
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
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Contact messages</h5>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
      
            <form action="{{route('all.delete.messages')}}" method="post">
              <hr>
              @if(count($get_messages ) > 0)
              <button class="btn btn-danger" type="submit" >All delete</button>
              @endif
          @csrf
          @method('DELETE')
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
                @if(count($get_messages ) > 0)
                <tr>
                  <th colspan="6">
                    <input type='checkbox'  id='select_all' onclick="selectAll()"> Select All 
                    <p id="demo"></p>
                  </th>
                </tr>
                @else
                @endif
                @foreach($get_messages as $keys => $value)
                <tr>
                  <th scope="row" width="5%">{{$keys+1}}
                    <input type="checkbox" name="ids[]" value="{{$value->id}}" class='check_del'  >
                  </th>
                  <td width="10%"> {{$value->name}}
          
               
                  </td>
                  <td width="10%">
                    {!!str_limit($value->email, $limit=20 ) !!}
                  </td>
                  <td width="15%">
                    {!!str_limit($value->subject, $limit=20 ) !!}
                  </td>
                  <td width="30%">
                 
                    {{Str::limit(	$value->message,30,$end='....')}}
               
                    {{Carbon\Carbon::parse($value->created_at)->diffForHumans()}}
                  </td>
                  <td width="25%">
                    {{-- view Message --}}

                    <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$value->id}}">
                      <i class="bi bi-eye"></i>
                      </a>

                      <div class="modal fade" id="largeModal{{$value->id}}" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"> View Message</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <h5> Name:</h5>
                                  <p> {!! isset($value->name) ? html_entity_decode($value->name) : ""!!}</p>
                                  <h5> Email:</h5>
                                  <p> {!! isset($value->email) ? html_entity_decode($value->email) : ""!!}</p>
                                </div>
                                <div class="col-md-6">
                                  <h5> Subject:</h5>
                                  <p> {!! isset($value->subject) ? html_entity_decode($value->subject) : ""!!}</p>
                                <br>  
                                Created At:
                                {{Carbon\Carbon::parse($value->created_at)->diffForHumans()}}
                                </div>
                              </div>
                                  <h5> Description:</h5>
                                <p> {!! html_entity_decode($value->message)!!}</p>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Large Modal-->

             
                    {{-- view Message --}}
                      <a href="{{route('delete.contact.messages',$value->id)}}"   class="btn btn-primary">
                      <i class="bi bi-trash" ></i>
                    </a>

                </td>

                </tr>
        @endforeach
              </tbody>
            </table>
            </form>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
  <script>

    function selectAll() 
        {
        var blnChecked = document.getElementById("select_all").checked;
        var check_invoices = document.getElementsByClassName("check_del");


        var intLength = check_invoices.length;
            for(var i = 0; i < intLength; i++) {
                var check_invoice = check_invoices[i];
                check_invoice.checked = blnChecked;
            }
          
    
            console.log(check_invoices.length);
        }


            
           
</script>

 @endsection