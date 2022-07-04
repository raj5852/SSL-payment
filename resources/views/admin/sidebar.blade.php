  <!--start sidebar -->
  <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Onedash</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
      <li>
          <a href="{{ route('dashboard') }}" class="">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>

        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
