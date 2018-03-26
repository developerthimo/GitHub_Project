<main class="container">
  <h1>Log hier in</h1>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="./index.php?action=login" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Inloggen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <div class="form-group">
              <label for="exampleInputEmail1">E-mailadres</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vul uw e-mailadres in" name="email">
              <small id="emailHelp" class="form-text text-muted">Wij geven uw e-mail niet aan derden.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Wachtwoord</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Vul uw wachtwoord in" name="password">
            </div>        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Log in</button>        
        </div>
      </form>
    </div>
  </div>
</div>
</main>

