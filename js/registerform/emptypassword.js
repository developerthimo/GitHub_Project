$(document).ready(function() {
    $("#exampleModalCenter").modal("show");

    var emptypassword = $('<div class="alert alert-danger" role="alert">Vul alle velden in!</div>');

    $("#empty_password").after(emptypassword);
}) ;