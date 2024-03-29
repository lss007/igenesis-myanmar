@extends('backend.body.adminmaster')
@section('title', 'Add Social link')
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
                <h5 class="card-title"> Add Social link</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Social link</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Publish  Social link</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3"  action="{{route('store_social_link')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="col-md-6">
                                <div class="col-md-12">
                                  <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    <label for="name">Name </label>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                         
                              <div class="col-md-6">
                                <div class="col-md-12">
                                  <div class="form-floating">
                                    <input type="url" class="form-control" name="link" id="link" placeholder="link">
                                    <label for="link"> link</label>
                                    @error('link')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                            <input type="file" class="form-control"  name="logo" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                @error('logo')
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
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Link</th>
                      <th scope="col">image</th>
                      <th scope="col">Status </th>
                      <th scope="col">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($getSocialLinks) > 0)
                    @foreach($getSocialLinks as $keys => $value)
                    <tr>
                      <th scope="row" width="5%">{{$keys+1}}</th>
                      <td width="20%"> {{$value->name}}</td>
                      <td width="25%">
                        <a href=" {{isset($value->link) ? $value->link : '#'}}" target="_blank" title="{{$value->link}}">
                          {{isset($value->name) ? $value->name : ''}}
                         </a><br>
                        <span class="text-success">  
                            {{Carbon\Carbon::parse($value->created_at)->diffforHumans()}}
                        </span>
                      </td>
                      <td width="20%">
                        <img src="{{asset('assets/sociallogo/'.$value->logo)}}" alt="{{$value->title}}"  
                         style="width : 30px ;height: auto; background:black;">
                    </td>
                      <td width="5%">
                        @if($value->status == '1')
                        <a href="{{route('link_inactive',$value->id)}}">
                        <span class="badge bg-success">Active</span>
                      </a>
                      @else
                      <a href="{{route('link_active',$value->id)}}">
                        <span class="badge bg-warning">Inactive</span>
                      </a>
                        @endif
                      </td width="25%">
                      <td>
                          <a href="{{route('edit_social_link',$value->id)}} " class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i>
                          </a>
                          <a href="{{route('delete_social_link',$value->id)}} " class="btn btn-primary">
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