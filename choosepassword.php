<?php
  //include("./functions.php");
  if(!isset($_GET["id"])) {
    header("location: ./index.php?action=home");
    exit();
  }

    //$id = sanitize($_GET["id"]);

    include("./connect_db.php");
    $sql = "SELECT * FROM `login` WHERE `id` = " . $_GET["id"];

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_array($result);
    var_dump($_GET);
    if ($record["activated"] == 'yes') {
      header("Location: ./index.php?action=choosepassword&status=already_activated&id=" . $_GET["id"]);
    }

?>
<main class="container">

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="./activate.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Stel uw wachtwoord in!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Wachtwoord</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord" name="password">
              <small id="passwordHelp" class="form-text text-muted">Neem een geschikt wachtwoord!</small>
            </div>
            <div class="form-group" id="empty_password">
              <label for="exampleInputPassword2">Bevestig uw wachtwoord!</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Bevestig uw wachtwoord" name="confirm_password">
              <small id="passwordHelp" class="form-text text-muted">Herhaal uw gekozen wachtwoord.</small>
            </div>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Verzenden</button>
        </div>
      </form>
    </div>
  </div>
</div>
</main>