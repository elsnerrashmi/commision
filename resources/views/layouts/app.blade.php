<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>CommisionApp</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //custom-theme -->
    @include('layout.stylesheet')
</head>
<body>
<!-- /pages_agile_info_w3l -->

<div class="pages_agile_info_w3l">
    <!-- /login -->
    <div class="over_lay_agile_pages_w3ls">
        @yield('contents')
    </div>
    <div class="copyrights_agile">
        <p>© 2018 CommisionPortal. All Rights Reserved.</p>
    </div>

</div>

@include('layout.script')

</body>
</html>