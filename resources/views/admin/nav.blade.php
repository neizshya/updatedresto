<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="{{route('admin')}}"><img src="logo/mini tem.png" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            {{-- <li><a class="nav-link" href="{{route('home')}}" border-left><i class="mdi mdi-view-grid"></i> </a></li> --}}
            <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="{{route('home')}}">
                  <i class="mdi mdi-view-grid"></i>
                </a>
                </li>
            <x-app-layout>

            </x-app-layout>


        </ul>
      </div>
    </nav>

