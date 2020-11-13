<<<<<<< Updated upstream
$(function() {
    $("input[name=paymentType]").on( "change", function() {
         var test = $(this).val();
         $(".desc").hide();
         $("#"+ test).show();
    } );
});
=======
$(function () {
    $("input[name=paymentType]").on("change", function () {
        var test = $(this).val();
        $(".desc").hide();
        $("#" + test).show();
    });
});



$("#show").on("click", function () {
    $("#invoiceShow").show();
    $("hide").show();
    $("#show").hide();
})

$("#hide").on("click", function () {
    $("#invoiceShow").hide();
    $("#show").show();
    $("#hide").hide();
})
>>>>>>> Stashed changes
