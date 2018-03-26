<?php
  $userrole = array("superadmin", "administrator",);
  include("./security.php");
?>
<main class="container">
  <h1>Administrator Startpagina</h1>
  <?php 
    //if (isset($_SESSION["email"]))  {
      echo "Welkom Administrator " . $_SESSION["email"];
    //}
  ?>
</main>