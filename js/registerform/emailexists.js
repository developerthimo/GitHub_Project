$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#emailHelp").after("<samll class='email_error_style'>Email bestaat al!</small>")
    $(".email_error_style").css({"color" : "red",
                                 "border" : "1px solid grey",
                                 "border-radius" : "4px",
                                 "padding" : "0.5em",
                                 "padding-left" : "1em"
                                });
});