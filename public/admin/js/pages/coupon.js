$(document).ready( function () {

    $("#free_shipping").change( function () {
        if ($(this).is(":checked")) {
            $(".free_shipping_hide").hide();
            $("#amount_type").val("0");
            $("#value").val("0");
        } else {
            $(".free_shipping_hide").show();
        }
    });

    $("#amount_type").change( function () {
        $(".currency").toggleClass("d-none");
        $(".percent").toggleClass("d-none");
    });

});
