<?php
  if  ( !isset($_SESSION["id"])) {
    header("Location: ./index.php?action=home");
    exit();
  } else if (!in_array($_SESSION["userrole"], $userrole)) {
    header("Location: ./index.php?action=home");
    exit();
  }
?>