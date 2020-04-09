
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Coral - Onepage portfolio Template">
    <meta name="author" content="esrat">
    <title>HGI INSIDE | @yield('title')</title>

    @include('includes.style')
</head>

<body id="page-top">

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    @include('includes.script')

</body>

</html>
