<script type="text/javascript" src="{{asset('public/js/jquery-2.1.4.min.js')}}"></script>

    <!-- /amcharts -->
    <script src="{{ asset('public/js/amcharts.js') }}"></script>
   <script src="{{ asset('public/js/serial.js') }}"></script>
    <script src="{{ asset('public/js/export.js') }}"></script>
    <script src="{{ asset('public/js/light.js') }}"></script>


<!-- //js -->
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
<script src="{{ asset('public/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('public/js/scripts.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/js/bootstrap-3.1.1.min.js') }}"></script>

