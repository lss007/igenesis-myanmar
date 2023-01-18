@extends('backend.body.adminmaster')
@section('title', 'Manage Our Coustomer')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
              <a href="{{route('add_our_customer')}}" class="btn btn-success rounded-pill">Add Coustomer logo</a>
            <!-- Table with stripped rows -->
            <form action="{{route('all.delete')}}" method="post">
                <hr>
              
                <button class="btn btn-danger" type="submit" >All delete</button>
            @csrf
            @method('DELETE')
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  {{-- <th scope="col">Name</th> --}}
                  <th scope="col">Image</th>
                  <th scope="col">Created at </th>
                  <th scope="col">Status </th>
                  <th scope="col">Action </th>
                </tr>
              </thead>
              <tbody id="tablecontents">
                
                <input type='checkbox'  id='select_all' onclick="selectAll()"> Select All 
                @foreach($get_coustomer as $post)
                    <tr class="row1" data-id="{{ $post->id }}">
                      <td class="pl-3"><i class="fa fa-sort"></i> {{ $post->order_no}} <input type="checkbox" name="ids[]" value="{{$post->id}}" class='check_del'></td>
               
                      <td width="20%" class=" text-center">
                        <img src="{{(isset($post->image)) 
                        ? asset('assets/customers/'.$post->image) :asset('no_image.jpg')}}" 
                        alt="{{$post->title}}" style=" width: 50px;">

                      </td>
                      <td>{{ date('d-m-Y h:m:s',strtotime($post->created_at)) }}</td>
                      <td width="5%">
                        @if($post->status == '1')
                   
                      
                        <a href="{{route('our_inactive_customers',$post->id)}}">
                       
                        <span class="badge bg-success">Active</span>
                      </a>
                      @else
                      
                        <a href="{{route('our_active_customers',$post->id)}}">
                          <span class="badge bg-warning">Inactive</span>
                      </a>
                        @endif
                    </td>
                    <td>
                        <!-- Large Modal -->
                           <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$post->id}}">
                                   <i class="bi bi-eye"></i>
                                   </a>
           
                       <div class="modal fade" id="largeModal{{$post->id}}" tabindex="-1">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h5 class="modal-title"> View Our Customers</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                               <div class="row">
                                 <div class="col-md-6">
                                   <h5> Title:</h5>
                                   <p> {!! isset($post->name) ? html_entity_decode($post->name) : ""!!}</p>
                                 </div>
                                 <div class="col-md-6">
                                   <h5> Image:</h5>
                                   <img class=" p-3" src="{{asset('assets/customers/'.$post->image)}}" alt="{{$post->title}}" width="200">
                                 </div>
                               </div>
                            
                             </div>
                           </div>
                         </div>
                       </div><!-- End Large Modal-->
                                 <a href="{{route('edit_our_customers',$post->id)}} " class="btn btn-primary">
                                   <i class="bi bi-pencil-square"></i>
                                 </a>
                                 <a href="{{route('delete_our_customers',$post->id)}} " id="delete" class="btn btn-primary">
                                 <i class="bi bi-trash"></i>
                               </a>
                           </td>
                    </tr>
                @endforeach
              </tbody>  
              {{-- <tbody>
                @if(count($get_coustomer) > 0)
                @foreach($get_coustomer as $keys => $value)
                <tr>
                  <th scope="row" width="5%">{{$keys+1}}</th>
                  <td width="20%"> {{isset($value->name) ? Str::limit(	$value->name,20,$end='....'): ''}}<br> 
          
                </td>
         
                  <td>         
                     <span class="text-success">  
                    {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}</span></td>

                  <td width="20%" class=" text-center">
                    <img src="{{(isset($value->image)) 
                    ? asset('assets/customers/'.$value->image) :asset('no_image.jpg')}}" 
                    alt="{{$value->title}}" style=" width: 50px;">
                  </td>
                  <td width="5%">
                    @if($value->status == '1')
               
                  
                    <a href="{{route('our_inactive_customers',$value->id)}}">
                   
                    <span class="badge bg-success">Active</span>
                  </a>
                  @else
                  
                    <a href="{{route('our_active_customers',$value->id)}}">
                      <span class="badge bg-warning">Inactive</span>
                  </a>
                    @endif
                </td>
                  <td>
             <!-- Large Modal -->
                <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$value->id}}">
                        <i class="bi bi-eye"></i>
                        </a>

            <div class="modal fade" id="largeModal{{$value->id}}" tabindex="-1">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"> View Our Customers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h5> Title:</h5>
                        <p> {!! isset($value->name) ? html_entity_decode($value->name) : ""!!}</p>
                      </div>
                      <div class="col-md-6">
                        <h5> Image:</h5>
                        <img class=" p-3" src="{{asset('assets/customers/'.$value->image)}}" alt="{{$value->title}}" width="200">
                      </div>
                    </div>
                 
                  </div>
                </div>
              </div>
            </div><!-- End Large Modal-->
                      <a href="{{route('edit_our_customers',$value->id)}} " class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="{{route('delete_our_customers',$value->id)}} " id="delete" class="btn btn-primary">
                      <i class="bi bi-trash"></i>
                    </a>
                </td>
                </tr>
                @endforeach
                @endif
            </tbody> --}}
            </table>
            <!-- End Table with stripped rows -->

            {{-- card body start  --}}
     


          </div>
        </div>
   
      </div>
    </div>
  </section>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $("#table").DataTable();

      $( "#tablecontents" ).sortable({
        items: "tr",
        cursor: 'move',
        opacity: 0.6,
        update: function() {
            sendOrderToServer();
        }
      });

      function sendOrderToServer() {
        var order = [];
        var token = $('meta[name="csrf-token"]').attr('content');
        $('tr.row1').each(function(index,element) {
          order.push({
            id: $(this).attr('data-id'),
            position: index+1
          });
        });

        $.ajax({
          type: "POST", 
          dataType: "json", 
          url: "{{ route('updateArticle') }}",
              data: {
            order: order,
            _token: token
          },
          success: function(response) {
              if (response.status == "success") {
                console.log(response);
              } else {
                console.log(response);
              }
          }
        });
      }
    });
  </script>

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
        }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection