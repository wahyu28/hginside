<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>HGI | Dashboard</title>

  @include('includes.admin.style')
  @stack('addon-style')

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    @include('includes.admin.navbar')

    @include('includes.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

@include('includes.admin.footer')
@include('includes.admin.script')
@stack('addon-script')
</body>
</html>
