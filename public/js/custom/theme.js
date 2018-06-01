/**
 * Created by Rashmi Dholakiya on 1/6/17.
 */
$(document).ready(function () {
    $(".required").parent().parent().find('.control-label').append('<span class="error"> *</span>');

    setTimeout(function () {
        $(".alert").fadeOut();
    }, 3000);

    $("#validate_submit").click(function () {
        $("#validate_form").validate();
    });
    /* $(".datepicker").datepicker({
     dateFormat: 'yy-mm-dd'
     });
     */
    $('#table').basictable();
    /* $("#datatable").DataTable({
     "order": [[ 0, "desc" ]]
     });*/

});
new gnMenu(document.getElementById('gn-menu'));
$(function () {
    $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

    if (!screenfull.enabled) {
        return false;
    }

    $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
    });
});
