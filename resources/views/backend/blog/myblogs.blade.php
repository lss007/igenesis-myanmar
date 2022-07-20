@extends('backend.body.adminmaster')
@section('title', 'Add Blog')
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
              <div class="card-body">
                <h5 class="card-title"> Add Blog</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Blog</button>
              
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Publish  Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3"  action="{{route('user.publish.post')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                  <select class="form-select" name="catId" id="title" aria-label="State">
                                    <option disabled selected>Select  category</option>
                                    @foreach($blogCat as $key => $values)
                                    <option value="{{ $values->id}}">{{ $values->name}}</option>
                                    @endforeach
                                  </select>
                                  <label for="catId">Seelct Blog category</label>
                                  @error('catId')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                         
                              </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                  <div class="form-floating">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="City">
                                    <label for="title">Blog title</label>
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                         
                        
                         
                          
                            <div class="col-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Blog Summary" id="summary" name="summary" style="height: 100px;"></textarea>
                                <label for="summary">Blog Summary	</label>
                                @error('summary')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                  
                       
        
                            <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                            @error('image')
                            <span class=" text-danger">{{ $message }}</span>
                            @enderror
                         
                            <div class="form-group">
                                <img id="output" src="{{asset('assets/no_image.jpg')}}" height="100">
                            </div>
        
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary">Publish</button>
                          
                            </div>
                          </form><!-- End floating Labels Form -->

                    </div>
                  </div>
                </div>
    
       
    
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Slider</h5>
                <p>Mange slider </p>
                
    
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
                    @foreach($getMyblogs as $keys => $value)
                    <tr>
                      <th scope="row" width="5%">{{$keys+1}}</th>
                      <td width="20%"> {{Str::limit(	$value->title,20,$end='....')}}<br> 
                     <span class="text-success"> By: {{$value->user->name}}</span></td>
                      <td width="35%"> {{Str::limit(	$value->summary,30,$end='....')}}<br>
                        <span class="text-success">  {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}</span>
                      </td>
                      <td width="20%"><img src="{{asset($value->image)}}" alt="{{$value->title}}" width="100"></td>
                      <td width="5%">
                    @if($value->status == 1)
             
                    <span class="badge bg-success">Approved</span>
         
                    @else 
              
                    <span class="badge bg-warning">Pendings </span>
          
                    @endif
                      </td width="20%">
                      <td>
    
                          <a href="{{route('user.edit.post',$value->id)}} ">
                            <i class="bi bi-pencil-square"></i>
                          </a>
    
                          <a href="{{route('user.delete.post',$value->id)}} ">
    
                          <i class="bi bi-trash"></i>
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