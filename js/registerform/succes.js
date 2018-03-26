$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $(".modal-body").empty();
    $(".modal-body").append("<p>U bent succesvol geregistreerd. U krijgt een email toegestuurd met een activatielink</p>");
    $(".modal-footer").empty();

    setTimeout(function() {
        $("#exampleModalCenter").modal("hide");
        window.location.replace("./index.php");
    }, 3000);
});