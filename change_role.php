<?php
    include('./connect_db.php');
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $userrole = sanitize($_POST["userrole"]);

    $sql = "UPDATE `login` SET `userrole` = '{$userrole}' 
                           WHERE    `id` = '{$id}'";
    // Vuur de query af op de database
    mysqli_query($conn, $sql);

    header("location:./index.php?action=change_userrole");

?>