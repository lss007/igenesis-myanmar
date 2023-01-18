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
                  <div class="modal-dialog  modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Publish  Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3"  action="{{route('user.publish.post')}}" enctype="multipart/form-data" method="post">
                            @csrf
                  <div class="row">
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
                    <div class="col-6">
                      <div class="form-floating">
                  
                        {{-- <textarea class="form-control" placeholder="Blog Summary" id="summary" name="summary" style="height: 100px;"></textarea> --}}
                            <textarea class="tinymce-editor"  name="summary" style="height: 200px;" id="summary" ></textarea>
                            <label for="summary">Blog Summary	</label>
                            @error('summary')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                            @error('image')
                            <span class=" text-danger">{{ $message }}</span>
                            @enderror
                 
                        <div class="form-group">
                            <img id="output" src="{{asset('assets/no_image.jpg')}}" height="100">
                        </div>
                    </div>
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
                <h5 class="card-title">@yield('title')</h5>
          
                
    
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
                    @if(isset($getMyblogs))
                    @foreach($getMyblogs as $keys => $value)
                    <tr>
                      <th scope="row" width="5%">{{$keys+1}}</th>
                      <td width="20%">  {!!isset($value->title) ? html_entity_decode(str_limit($value->title, $limit=100 ) ) : ''!!}<br> 
                     <span class="text-success"> By: {{$value->user->name}}</span></td>
                    
                      <td width="25%">  {!!html_entity_decode(str_limit($value->summary, $limit=100 ) )!!}<br>
                        <span class="text-success">  {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}</span>
                      </td>
                      <td width="20%"><img src="{{asset($value->image)}}" alt="{{$value->title}}" width="100"></td>
                      <td width="5%">
                        @if($value->status == '1')
                        <a href="{{route('user.rejected.post',$value->id)}}">
                        <span class="badge bg-success">Approved</span>
                      </a>
                      @else
                      <a href="{{route('user.approved.post',$value->id)}}">
                        <span class="badge bg-warning">Pending</span>
                      </a>
                        @endif
                      </td width="25%">
                      <td>
    
                        <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal{{$value->id}}">
                          <i class="bi bi-eye"></i>
                        </a>
    
                  <div class="modal fade" id="largeModal{{$value->id}}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"> View Blog</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-6">
                              <h5> Name:</h5>
                                <p> {!! isset($value->title) ? html_entity_decode($value->title) : ""!!}</p>
                            
                            </div>
                            <div class="col-md-6">
                              <h5> Image:</h5>
                                <img src="{{asset($value->image)}}" alt="{{$value->title}}" width="200">
                            </div>
                          </div>
                             <h5> Description:</h5>
                              <p> {!! html_entity_decode($value->summary)!!}</p>
                        </div>
                 
                      </div>
                    </div>
                  </div><!-- End Large Modal-->
                          <a href="{{route('user.edit.post',$value->id)}} " class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i>
                          </a>
    
                          <a href="{{route('user.delete.post',$value->id)}} " class="btn btn-primary">
    
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