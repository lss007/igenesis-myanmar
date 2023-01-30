<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin Dashboard</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
@php
    $get_allmessages = App\Models\Contact::latest('created_at')->get();
    $get_messages = App\Models\Contact::latest('created_at')->get()->take(3);

@endphp
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">@if(count($get_allmessages) > 0  ) {{count($get_allmessages)}}  @else 0 @endif </span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have @if(count($get_allmessages) > 0  ) {{count($get_allmessages) }}@else no @endif new messages
              <a href="{{route('contact.messages')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

      
@if(count($get_messages) > 0 )
@foreach($get_messages as $messages)
             <li class="message-item">
              <a href="{{route('contact.messages')}}">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>{{ ucwords($messages->name)}}</h4>
                  <p>
                    {{ucwords(Str::limit(	$messages->message,30,$end='....'))}}
                  </p>
                  <p>
                    {{Carbon\Carbon::parse($messages->created_at)->diffForHumans()}}
                  </p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
@endforeach
@else 
<li class="message-item">
  <a href="#">
    <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
    <div>
      <h4></h4>
      <p>
       No Message found
      </p>
    
    </div>
  </a>
</li>


        @endif

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{(!empty(auth()->guard('admin')->user()->profile_photo_path))  ? asset(auth()->guard('admin')->user()->profile_photo_path):url('assets/no_image.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ isset(auth()->guard('admin')->user()->name) ? auth()->guard('admin')->user()->name : ""  }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>{{ isset(auth()->guard('admin')->user()->name)  ? ucwords(auth()->guard('admin')->user()->name)  : "" }} </h6>
              <span>{{ isset(auth()->guard('admin')->user()->email) ? ucwords(auth()->guard('admin')->user()->email) : ""  }} </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


             <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('admin.editAdminProfile')}}">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> 


            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            
             
              <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.logout') }}"
              @click.prevent="$root.submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>

              </a>


           

             
        
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>