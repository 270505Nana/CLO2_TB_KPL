<nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">
            @yield('page-title', 'Dashboard')
          </li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">@yield('page-title', 'Dashboard')</h6>
      </nav>
  
      {{-- ...navbar right items --}}
    </div>
  </nav>
  