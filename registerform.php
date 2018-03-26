<main class="container">
    <h1>Registratie</h1>
    <p></p>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Klik hier om te registeren!
    </button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registreren</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="./data.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">E-mail adres</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer uw e-mailadres in" name="email" required>
                <small id="emailHelp" class="form-text text-muted">Uw e-mailadres wordt niet verder gedeeld.</small>
              </div>
              <div class="form-check" id="lbl_checkbox">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="conditions" required>
                <label class="form-check-label" for="exampleCheck1">U gaat akkoord met de algemene voorwaarden</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="register" class="btn btn-primary">Verstuur</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>