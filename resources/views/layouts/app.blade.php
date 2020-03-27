
@include('admin.layout.head')
<body>

<section id="container">
    <!--header start-->

@include('admin.layout.header')

<!--header end-->

    <!--sidebar start-->

@include('admin.layout.sidebar')

<!--sidebar end-->
    <!--main content start-->
@yield('content')

<!--main content end-->

    <!--footer start-->
@include('admin.layout.footer')
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
@include('admin.layout.jsfile')
