<?php
 if (isset($_GET["status"])) {
    $whitelist = array("registerform" =>  array("succes", 
                                                "empty_email", 
                                                "emailexists", 
                                                "conditions_not_checked",
                                                "choosepassword",
                                                "emptypassword",
                                                "not_equal_password",
                                                "password_success",
                                                "already_activated"),
                       "loginform"  => array("loginform",
                                             "accessdenied"));
    
    include("./functions.php");
    
    $status = sanitize($_GET["status"]);

   foreach ($whitelist as $key => $value) { 
    //echo in_array($status, $whitelist);
if (in_array($status, $value)) {
    echo "<script src='./js/{$key}/{$status}.js'></script>";
        }
    }
 }
?>