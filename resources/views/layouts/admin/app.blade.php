<!doctype html>
<html lang="en" data-bs-theme="blue-theme">
<head>
  @include('layouts.admin.head')
</head>
<body>
@if($isAuthPage ?? false)
  @yield('content')
@else
  @include('layouts.admin.header')
  <main class="main-wrapper">
    <div class="main-content">
      @yield('content')
    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
  <div class="overlay btn-toggle"></div>
  <!--end overlay-->

  @include('layouts.admin.footer')
@endif
  @include('layouts.admin.scripts')
</body>
</html>