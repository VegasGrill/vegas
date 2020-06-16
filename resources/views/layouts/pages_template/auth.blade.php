<div class="wrapper">
  @include('layouts.navbars.sidebar')
  <div class="main-panel">
    @include('layouts.navbars.navbar')
    @yield('content')
    @include('layouts.footers.footer')
  </div>
</div>
