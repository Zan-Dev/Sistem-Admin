<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="{{ request()->is('dashboard') ? 'nav-link' : 'nav-link collapsed' }}" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="{{ request()->is('dataPenduduk') ? 'nav-link' : 'nav-link collapsed' }}" href="{{ route('dataPenduduk') }}">
          <i class="bi bi-menu-button-wide"></i>
          <span>Source Data</span>
        </a>        
      </li><!-- End Source Data Nav -->  
      
      <li class="nav-item">
        <a class="{{ request()->is('profile') ? 'nav-link' : 'nav-link collapsed' }}" href="{{ route('profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
      
      @if (Auth::user()->role == 'Admin')
        <li class="nav-item">
          <a class="{{ request()->is('users') ? 'nav-link' : 'nav-link collapsed' }}" href="{{ route('users') }}">
            <i class="bi bi-people"></i>
            <span>Users</span>
          </a>
        </li><!-- End Profile Page Nav -->
      @endif      
    </ul>

  </aside>