$(function() {
    $("input[name=paymentType]").on( "change", function() {
         var test = $(this).val();
         $(".desc").hide();
         $("#"+ test).show();
    } );
});