<script type="text/javascript" src="{{asset('public/js/jquery-2.1.4.min.js')}}"></script>

<!-- /amcharts -->
<script src="{{ asset('public/js/amcharts.js') }}"></script>
<script src="{{ asset('public/js/serial.js') }}"></script>
<script src="{{ asset('public/js/export.js') }}"></script>
<script src="{{ asset('public/js/light.js') }}"></script>


<!-- //js -->

<!-- ***********************  ScreenFUll start************************************* -->
<script src="{{ asset('public/js/screenfull.js') }}"></script>
<script>
$(function () {
    $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

    if (!screenfull.enabled) {
        return false;
    }

    $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
    });
});
</script>
<!-- ***********************  ScreenFUll end ************************************* -->

<script src="{{ asset('public/js/chart1.js') }}"></script>
<script src="{{ asset('public/js/Chart.min.js') }}"></script>
<script src="{{ asset('public/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('public/js/classie.js') }}"></script>

<!-- *********************** sidebar mobile menu gn-menu start ************************************* -->
<script src="{{ asset('public/js/gnmenu.js') }}"></script>
<script>
    new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<!-- ***********************  sidebar mobile menu gn-menu  end ************************************* -->


<!-- ***********************  nicescroll start ************************************* -->

<script src="{{ asset('public/js/jquery.nicescroll.js') }}"></script>

<!-- *********************** nicescroll end************************************* -->

<script src="{{ asset('public/js/scripts.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/js/bootstrap-3.1.1.min.js') }}"></script>

<!-- ***********************j query validation start************************************* -->

<script type="text/javascript" src="{{ asset('public/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/custome/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/custome/form-validation.js') }}"></script>

<!-- ***********************j query validation end ************************************* -->

<!-- ***********************boostrape data tbale start ************************************* -->
<script type="text/javascript" src="{{ asset('public/js/datatable/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/datatable/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/custome/datatable.js') }}"></script>
<!-- ***********************boostrape data tbale end  ************************************* -->
