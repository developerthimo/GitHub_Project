$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#emailHelp").after("<small class='email_error_style'>U heeft geen emailadres ingevuld.</small>");
    $(".email_error_style").css({"color"  : "red",
                                 "padding" : "0.5em",
                                 "padding-left" : "1em",
                                 "margin-top" : "2em" });
  });