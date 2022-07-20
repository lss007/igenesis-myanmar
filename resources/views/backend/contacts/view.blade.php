

@extends('backend.body.adminmaster')
@section('title', 'View messages')
@section('content')

@include('backend.body.breadcrumb')



  <section class="section">
    <div class="row">
      <div class="col-lg-10">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">View Message </h5>
            <h5 class="card-title">Name : {{$view_messages->name}} </h5>

            @if($view_messages->phone)
            <p><b>Phone : </b>{{$view_messages->phone}} </p>
            @else 
            <p><b>Phone :</b>   <span class="badge bg-danger">NA</span> </p>
            @endif

            
            <p><b>Email : </b>{{$view_messages->email}} </p>
            
            <p><b>Subject : </b>{{$view_messages->subject}} </p>
            <p><b>Message : </b>
            
                {!!html_entity_decode($view_messages->message)!!}	</p>
          </div>
        </div>

      </div>

 
    </div>
  </section>
  @endsection