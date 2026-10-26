  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
<!--favicon--><link rel="icon" href="{{ asset('templates/admin/assets/images/favicon-32x32.png') }}" type="image/png">
<!-- loader--><link href="{{ asset('templates/admin/assets/css/pace.min.css') }}" rel="stylesheet">
<script src="{{ asset('templates/admin/assets/js/pace.min.js') }}"></script>
<!--plugins--><link href="{{ asset('templates/admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
@yield('styles_after_perfect_scrollbar')
<link rel="stylesheet" type="text/css" href="{{ asset('templates/admin/assets/plugins/metismenu/metisMenu.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('templates/admin/assets/plugins/metismenu/mm-vertical.css') }}">
@unless($isAuthPage ?? false)
<link rel="stylesheet" type="text/css" href="{{ asset('templates/admin/assets/plugins/simplebar/css/simplebar.css') }}">
@yield('styles_after_simplebar')
@endunless
<!--bootstrap css--><link href="{{ asset('templates/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
@yield('styles_after_bootstrap')
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
<!--main css--><link href="{{ asset('templates/admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
<link href="{{ asset('templates/admin/assets/sass/main.css') }}" rel="stylesheet">
<link href="{{ asset('templates/admin/assets/sass/dark-theme.css') }}" rel="stylesheet">
<link href="{{ asset('templates/admin/assets/sass/blue-theme.css') }}" rel="stylesheet">
@unless($isAuthPage ?? false)
<link href="{{ asset('templates/admin/assets/sass/semi-dark.css') }}" rel="stylesheet">
<link href="{{ asset('templates/admin/assets/sass/bordered-theme.css') }}" rel="stylesheet">
@endunless
<link href="{{ asset('templates/admin/assets/sass/responsive.css') }}" rel="stylesheet">
