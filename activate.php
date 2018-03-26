<?php
    include ("./functions.php");

    $password = sanitize($_POST["password"]);
    $confirm_password = sanitize($_POST["confirm_password"]);
    $id = sanitize($_POST["id"]);

    //echo "check of het veld leeg is: " . empty($password);

    if (!empty($password) && !empty($confirm_password)) {

        if (!strcmp($password, $confirm_password)) {
            include("./connect_db.php");
            $password = password_hash($password, PASSWORD_BCRYPT);
            
            $sql = "UPDATE `login` SET `password` = '{$password}',
                                       `activated` = 1
                                 WHERE `id` = " . $id;
               // echo $sql; exit;
            mysqli_query($conn,$sql);

            header("Location: ./index.php?action=choosepassword&status=password_success&id=" . $id);

        } else {
            header("Location: ./index.php?action=choosepassword&status=not_equal_password&id=" . $id);
        }

    } else {
        header("Location: ./index.php?action=choosepassword&status=emptypassword&id=" . $id);
    }
?>

