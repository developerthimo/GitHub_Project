<!--navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Dementie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <?php
            if (isset($_SESSION["id"])) {
                switch ($_SESSION["userrole"]) {
                  case 'superadmin':
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="http://dementie.nl/index.php?action=superadmin_home">Home</a>
                        </li>';
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="http://dementie.nl/index.php?action=administrator_home">Home Admin</a>
                        </li>';
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="http://dementie.nl/index.php?action=subscriber_home">Home Sub</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a class="nav-link" href="http://dementie.nl/index.php?action=change_userrole">Verander gebruikersrol</a>
                        </li>';
                  break;
                  case 'administrator':
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="http://dementie.nl/index.php?action=administrator_home">Home</a>
                        </li>';
                  break;
                  case 'subscriber':
                  echo '<li class="nav-item active">
                          <a class="nav-link" href="http://dementie.nl/index.php?action=subscriber_home">Home</a>
                        </li>';
                  break;
                  default:
                    header("Location: ./index.php?action=logout");
                  break;
                }
                echo '<li class="nav-item">
                        <a class="nav-link" href="http://dementie.nl/index.php?action=games">Games</a>
                      </li>';
                echo '<li class="nav-item">
                        <a class="nav-link" href="http://dementie.nl/index.php?action=logout">Uitloggen</a>
                      </li>';
            } else {
              echo '<li class="nav-item active">
                      <a class="nav-link" href="http://dementie.nl/index.php?action=home">Home</a>
                    </li>';
              echo '<li class="nav-item">
                      <a class="nav-link" href="http://dementie.nl/index.php?action=registerform">Registreren</a>
                    </li>';
              echo '<li class="nav-item">
                      <a class="nav-link" href="http://dementie.nl/index.php?action=loginform&amp;status=loginform">Inloggen</a>
                    </li>';
            }
            ?>




          </ul>
        </div>
      </div>
    </nav>

<!-- Header with Background Image -->
<header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3 text-center text-dark mt-4"><b>Dementie</b></h1>
          </div>
        </div>
      </div>
    </header>
    
<?php
  // echo  '<a class="nav-link" href="http://dementie.nl/index.php?action=home">Home</a>';

  // if (isset($_SESSION["id"])) {
  //   echo '<a href="./index.php?action=games">Spelletjes</a>';
  //   switch ($_SESSION["userrole"]) {
  //     case "subscriber":
  //       echo '
  //       <a href="./index.php?action=games">Spelletjes</a> 
  //       ';        
  //       break;
  //     case "administrator":
  //       echo '<a href="./index.php?action=userprogress">Voortgang gebruikers</a> | ';        
  //       break;
  //     case "superadmin":
  //       echo '<a href="./index.php?action=changeuserrole">Gebruikerrollen</a> | ';        
  //       break;
  //     default:
  //       header("Location: ./logout.php");            
  //       break; 
  //   }
  //   echo '<a href="./logout.php">Uitloggen</a> | ';
  // } else {
  //   echo '<a href="./index.php?action=registerform&status=registerform">Registreer</a> | ';
  //   echo '<a href="./index.php?action=loginform&status=loginform">Inloggen</a> | ';
  // }
?>