<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="{{ asset("/assets/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="{{ asset("/assets/css/ionicons.min.css") }}" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{ asset("/assets/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/assets/css/skins/skin-red.min.css")}}" rel="stylesheet" type="text/css"/>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-red sidebar-mini sidebar-collapse">
<div class="wrapper">

    <!-- Main Header -->
    @include('header')

    <!-- Sidebar -->
    @include('sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" ui-view></div>

    <!-- Main Footer -->
    @include('footer')

    <!-- Control Sidebar -->
    @include('control-sidebar')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset ("/assets/js/jquery.min.js") }}"></script>
<!-- AngularJS -->
<script src="{{ asset ("/assets/js/angular.min.js") }}"></script>
<script src="{{ asset ("/assets/js/angular-ui-router.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/assets/js/bootstrap.min.js") }}"></script>
<!-- AdminLTE App -->
<script>
    var AdminLTEOptions = {
        //Enable sidebar expand on hover effect for sidebar mini
        //This option is forced to true if both the fixed layout and sidebar mini
        //are used together
        sidebarExpandOnHover: true
    };
</script>
<script src="{{ asset ("/assets/js/app.min.js") }}"></script>

<script src="{{ asset ("/assets/js/app.js") }}"></script>

</body>
</html>
