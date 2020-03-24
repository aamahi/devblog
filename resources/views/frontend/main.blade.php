{{--head start--}}
@include('frontend.head')
{{--Head end --}}
<body>
{{--    header seciton--}}
    @include('frontend.header')
{{--header section end--}}

{{--Main wrapper start--}}
    @yield('content')
<!--//main-wrapper-->




    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
    @include('frontend.config')
    <!--//configure-panel-->



    <!-- Javascript -->
@include('frontend.footer')
