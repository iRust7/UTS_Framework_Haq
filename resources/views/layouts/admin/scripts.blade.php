  @if($isAuthPage ?? false)
@yield('auth_scripts')
@else
<!--bootstrap js--><script src="{{ asset('templates/admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins--><script src="{{ asset('templates/admin/assets/js/jquery.min.js') }}"></script>
<!--plugins--><script src="{{ asset('templates/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('templates/admin/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
@yield('scripts_before_simplebar')
<script src="{{ asset('templates/admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
@yield('scripts_before_main')
<script src="{{ asset('templates/admin/assets/js/main.js') }}"></script>
@yield('scripts_after_main')
@endif
