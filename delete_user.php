<?php
    include("./connect_db.php");

    if (is_numeric($_GET["id"])) {
        $sql = "DELETE FROM `login` 
                WHERE `login`.`id` = " . $_GET["id"];
    //Met deze query selecteren we uit de tabel users het *
    mysqli_query($conn, $sql);
    }

    header("Location: ./index.php?action=change_userrole");

?>