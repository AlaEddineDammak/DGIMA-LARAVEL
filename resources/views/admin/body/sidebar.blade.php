<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        DGIMA<span>Admin</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">web apps</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Actualities</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.actualities')}}" class="nav-link">All Actualities</a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.actualities')}}" class="nav-link">Add Actualities</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">Users</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.users')}}" class="nav-link">All User</a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.users')}}" class="nav-link">Add User</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>