$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#lbl_checkbox").after("<small class='conditions_not_checked'>Algemene voorwaarden niet aangevinkt!</small>")
    $(".conditions_not_checked").css({"color" : "red",
                                      "display" : "block"
                                });
});