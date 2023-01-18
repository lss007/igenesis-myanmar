<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('front.homepage')}}" target="_blank">
          <i class="bi bi-globe2"></i>
          <span>Website</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

   
 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Home-nav" data-bs-toggle="collapse" href="#">

          <i class="bi bi-layout-text-window-reverse"></i><span>Home page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.homeslider')}}">

              <span>Manage slider</span>
            </a>
          
          </li>
        
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('view_our_team')}}">
          
              <span>Manage Our Team  </span>
            </a>
          </li>
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('view_our_services')}}">
     
              <span>Manage Our Services </span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('view_our_customer')}}">
   
              <span>Manage Our Customer </span>
            </a>
          </li>
   
        </ul>
      </li><!-- End Blog Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Blog-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Blog-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('view.blog.category')}}">
           
              <span>Add Blog Category</span>
            </a>
          </li>
          <!-- End Profile Page Nav -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.view.myblog')}}">
      
              <span>View Blogs </span>
            </a>
          </li>
     
        </ul>
      </li><!-- End Icons Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Contact-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
 
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('view_contact_address')}}">
       
              <span>Manage Contact Address </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('contact.messages')}}"  >
      
              <span>View Messages</span>
            </a>
          
          </li>
        </ul>
      </li><!-- End Contact Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.manageResume')}}">
          <i class="bi bi-card-image"></i>
          <span>View Resumes </span>
        </a>
      </li>

    </ul>

  </aside>