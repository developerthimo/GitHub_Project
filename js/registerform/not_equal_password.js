$(document).ready(function() {
    $("#exampleModalCenter").modal("show");

    var not_equal_password = $('<div class="alert alert-danger" role="alert">Wachtwoorden komen niet overeen!</div>');

    $("#empty_password").after(not_equal_password);
});