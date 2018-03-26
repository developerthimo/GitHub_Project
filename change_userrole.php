<?php
include("./connect_db.php");

$sql = "SELECT * FROM `login`";

$result = mysqli_query($conn, $sql);

$table_content = "";
    while ($records = mysqli_fetch_assoc($result)) {
      $table_content = $table_content . "<tr>
                                          <td>" . $records["id"] . "</td>
                                          <td>" . $records["email"] . "</td>
                                          <td>
                                            <form name='change_role_form' action='./change_role.php' method='post'>
                                              <input type='hidden' name='id' value='".$records['id']."'/>
                                              <div class='input-group'>
                                                <select name='userrole' class='custom-select' aria-label='small'>
                                                  <option value='superadmin' ".($records['userrole'] == 'superadmin' ? 'selected' : '').">super admin</option>
                                                  <option value='administrator' ".($records['userrole'] == 'administrator' ? 'selected' : '').">administrator</option>
                                                  <option value='subscriber' ".($records['userrole'] == 'subscriber' ? 'selected' : '').">subscriber</option> 
                                                </select>
                                                <div class='input-group-append'>
                                                  <input type='submit' value='opslaan' class='btn btn-warning'  aria-label='small'/>
                                                </div>
                                              </div>
                                              </form>
                                          </td>
                                          <td>
                                            <a href='index.php?action=delete_user&id=" . $records["id"] . "'>
                                              <img src='./images/b_drop.png' alt='kruis-delete-record'>
                                            </a>
                                          </td>
                                        </tr>";
    }
?>

<div class="container">
  <form method="post" action="./change_role.php">
      <table class="table table-hover table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Email</th>
          <th scope="col">Gebruikersrol</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        echo $table_content;
        ?>
      </tbody>
    </table>
  </form>
</div>