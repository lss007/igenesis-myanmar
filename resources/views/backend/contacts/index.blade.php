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
                  <br>
                  {{Carbon\Carbon::parse($value->created_at)->diffForHumans()}}
                  </td>
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