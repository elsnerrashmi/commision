<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{$settings['site_name']}}</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
   @include('layout.stylesheet')
    @yield('custom_css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('layout.header')
        <div class="inner_content">
            <div class="w3l_agileits_breadcrumbs">
                <div class="w3l_agileits_breadcrumbs_inner">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="@yield('bread_1_link')">@yield('bread_1') </a></li>
                        <li>@yield('bread_2')</li>
                    </ul>
                </div>
            </div>
            <div style="margin-top: 10px;">
                @include('flash::message')
            </div>
            @yield('contents')
        </div>
        @include('layout.footer')
    </div>

   @include('layout.script')
    @yield('custom_js')
</body>
</html>