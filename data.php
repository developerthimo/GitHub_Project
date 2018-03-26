<?php
    include("./connect_db.php");
    include("./functions.php");

    if (isset($_POST['register'])) {
      // Form submitted;

      $registerError = false;

      if (!empty($_POST['email'])) {
        $email = sanitize($_POST["email"]);
      } else {
        header("Location: ./index.php?action=registerform&status=empty_email");
        $registerError = 'No e-mail';
      }

      if (!empty($_POST['conditions'])) {
        $conditions = (sanitize($_POST["conditions"]) == 'on' ? 1 : 0 );
      } else {
        header ("Location: ./index.php?action=registerform&status=conditions_not_checked");
        $registerError = 'No conditions';
      }
      
      if (!$registerError) {
        $sql = "SELECT * FROM `login` WHERE `email` = '{$email}'";
        $result = mysqli_query($conn, $sql);

        if ($number_of_rows = mysqli_num_rows($result)) {
          // email bestaat
          header ("location: ./index.php?action=registerform&status=emailexists");
        } else {
          // email bestaat niet. 
          $sql = "INSERT INTO `login`(`id`, 
                                    `email`, 
                                    `conditions`, 
                                    `userrole`,
                                    `password`,
                                    `activated`) 
                            VALUES (NULL,
                                    '{$email}',
                                    {$conditions},
                                    'subscriber',
                                    '',
                                    0)";
          
          mysqli_query($conn, $sql);

          $id = mysqli_insert_id($conn);
          
          if ($id != 0) {
            $subject = "Registratie dementie.nl";
            $message = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <meta http-equiv="X-UA-Compatible" content="ie=edge">
                      <title>Document</title>
                      <style>
                        body {
                          background-color : "yellow";
                        }
                      </style>
                    </head>
                    <body>
                      <p>Bedankt voor het registreren, klik <a href="http://www.dementie.nl/index.php?action=choosepassword&status=choosepassword&id=' . $id . '">hier</a> om uw account te activeren</p>
                      <p>Met vriendelijk groet,</p>
                      <p>Superadmin</p>
                    </body>
                    </html>';
      
              $headers =  "Content-Type: text/html; charset=UTF-8 \r\n";
              $headers .= "From: superadmin@dyslectie.nl \r\n";
              $headers .= "Cc: superadmin@dyslectie.nl, thimo5365@gmail.com \r\n";
              $headers .= "Bcc: subscriber@dyslectie.nl, 318526@student.mboutrecht.nl";

              mail($mail, $subject, $message, $headers);

              header("Location: ./index.php?action=registerform&status=succes");
          } else {
            // ER IS IETS FOUT GEGAAN, PROBEER OPNIEUW!
            header("Location: ./index.php?action=home");
          }
        }
      }
      exit;
    }
/*
      $email = sanitize($_POST["email"]);
      $conditions = sanitize($_POST["conditions"]);

        if (empty($_POST["email"])) {
          header("Location: ./index.php?action=registerform&status=empty_email");
        } 

        else {
      $sql = "SELECT * FROM `login` WHERE `email` = '{$email}'";
      $result = mysqli_query($conn, $sql);
      
       
      if($result && $number_of_rows = mysqli_num_rows($result)) {
        var_dump ($result);
       exit;
          
      if ($number_of_rows) {
            header ("location: ./index.php?action=registerform&status=emailexists");
      } 

    } else {
        $sql = "INSERT INTO `login`(`id`, 
                                    `email`, 
                                    `conditions`, 
                                    `userrole`,
                                    `password`,
                                    `activated`) 
                            VALUES (NULL,
                                    '{$email}',
                                    '{$conditions}',
                                    'subscriber',
                                    '',
                                    'no')";
    
        // echo $sql; exit();
      
        // Vuur de query af op de database
        mysqli_query($conn, $sql);
        
        //Zo vraag je het id op
        $id = mysqli_insert_id($conn);

        // Hiermee wordt de verbinding verbroken.
        mysqli_close($conn); 
        var_dump($number_of_rows);
        exit;
        $subject = "Registratie dementie.nl";
        $message = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <meta http-equiv="X-UA-Compatible" content="ie=edge">
                      <title>Document</title>
                      <style>
                        body {
                          background-color : "yellow";
                        }
                      </style>
                    </head>
                    <body>
                      <p>Bedankt voor het registreren, klik <a href="http://www.dementie.nl/index.php?action=choosepassword&status=choosepassword&id=' . $id . '">hier</a> om uw account te activeren</p>
                      <p>Met vriendelijk groet,</p>
                      <p>Superadmin</p>
                    </body>
                    </html>';
      
                $headers =  "Content-Type: text/html; charset=UTF-8 \r\n";
                $headers .= "From: superadmin@dyslectie.nl \r\n";
                $headers .= "Cc: superadmin@dyslectie.nl, thimo5365@gmail.com \r\n";
                $headers .= "Bcc: subscriber@dyslectie.nl, 318526@student.mboutrecht.nl";

        mail($mail, $subject, $message, $headers);

        header("Location: ./index.php?action=registerform&status=succes");
        }
      }
    }
    
    else {
      header ("Location: ./index.php?action=registerform&status=conditions_not_checked");
     }
     */
?>