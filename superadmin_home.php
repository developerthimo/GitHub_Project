<?php
  $userrole = array("superadmin");
  include("./security.php");
?>
<main class="container">
  <h1>Superadmin Startpagina</h1>
  <?php 
    //if (isset($_SESSION["email"]))  {
      echo "Welkom superadmin " . $_SESSION["email"];
    //}
  ?>
</main>