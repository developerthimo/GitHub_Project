$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $(".modal-body").empty();
    $(".modal-body").append("<p>U bent succesvol geregistreerd en uw wachtwoord is opgeslagen.</p>");
    $(".modal-footer").empty();

    setTimeout(function() {
        $("#exampleModalCenter").modal("hide");
        window.location.replace("./index.php");
    }, 3000);
});