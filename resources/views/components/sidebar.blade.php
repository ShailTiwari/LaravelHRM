    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('department')}}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Department</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('employee')}}">
              <i class="menu-icon mdi  mdi-account-multiple"></i>
              <span class="menu-title">Employee</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('project')}}">
              <i class="menu-icon mdi  mdi-animation"></i>
              <span class="menu-title">Project</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('activity')}}">
              <i class="menu-icon mdi mdi-altimeter"></i>
              <span class="menu-title">Activity</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('holiday')}}">
              <i class="menu-icon mdi mdi mdi-calendar"></i>
              <span class="menu-title">holiday</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('event')}}">
              <i class="menu-icon mdi  mdi-brightness-auto"></i>
              <span class="menu-title">Event</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('payroll')}}">
              <i class="mdi mdi-calculator  menu-icon"></i>
              <span class="menu-title">Payroll</span>
            </a>
          </li>
          <li class="nav-item nav-category">Masters</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-settings  menu-icon"></i>
              <span class="menu-title">Settings</span>
               <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('setting')}}">Config Settings</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->