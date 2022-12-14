<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, Jane</h2>
          <a href="../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
            Sign Out
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
            aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="../index.html" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="{{ asset('theme\assets\img\favicon\favicon-Logo.png') }}" height="50" width="50" alt="Leo Logo">
          </span>
          <span class="mt-1 ms-1 tittle-app">Ventas</span>
        </a>
      </li>
      <li class="nav-item active">
        <a href="../pages/dashboard/dashboard.html" class="nav-link">         
          <img src="{{ asset('theme\assets\img\Icons\grid.svg') }}" class="me-2">
          <span class="sidebar-text">Categorias</span>
        </a>
      </li>     
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\box.svg') }}" class="me-2">
          <span class="sidebar-text">Productos</span>
        </a>
      </li>               
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\user-check.svg') }}" class="me-2">
          <span class="sidebar-text">Roles</span>
        </a>
      </li>               
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\key.svg') }}" class="me-2">
          <span class="sidebar-text">Permisos</span>
        </a>
      </li>               
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\user-svgrepo-com.svg') }}" class="me-2" height="40">
          <span class="sidebar-text">Asignar</span>
        </a>
      </li>               
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\users.svg') }}" class="me-2">
          <span class="sidebar-text">Usuarios</span>
        </a>
      </li>               
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\dollar-sign.svg') }}" class="me-2">
          <span class="sidebar-text">Monedas</span>
        </a>
      </li>               
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\calendar-svgrepo-com.svg') }}" class="me-2" height="40">
          <span class="sidebar-text">Cierres</span>
        </a>
      </li>               
      <li class="nav-item">
        <a href="../pages/settings.html" class="nav-link">          
          <img src="{{ asset('theme\assets\img\Icons\dashboard-4-svgrepo-com.svg') }}" class="me-2" height="40">
          <span class="sidebar-text">Reportes</span>
        </a>
      </li>               
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-pages">
          <span>
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
            </span> 
            <span class="sidebar-text">Page examples</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
        <div class="multi-level collapse " role="list"
          id="submenu-pages" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/sign-in.html">
                <span class="sidebar-text">Sign In</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/sign-up.html">
                <span class="sidebar-text">Sign Up</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/forgot-password.html">
                <span class="sidebar-text">Forgot password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/reset-password.html">
                <span class="sidebar-text">Reset password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/lock.html">
                <span class="sidebar-text">Lock</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/404.html">
                <span class="sidebar-text">404 Not Found</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/500.html">
                <span class="sidebar-text">500 Not Found</span>
              </a>
            </li>
          </ul>
        </div>
      </li>      
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>           
    </ul>
  </div>
</nav>