<?php
  session_start();
  // check for proper navigation
  if(isset($_POST['passSet-submit'])){
    // retrieve input (selector, token, password-1, password-2)
    $selector = $_POST['selector'];
    $token = $_POST['token'];
    $password_1 = $_POST['Password-1'];
    $password_2 = $_POST['Password-2'];

    // form validation
    // ERROR: empty fields
    if(empty($selector) || empty($token) || empty($password_1) || empty($password_2)){
      header("Location: ../../passSet.php?error=emptyfields");
      exit();
    }
    // ERROR: invalid password
    //
    // ERROR: password mismatch
    else if($password_1 != $password_2){
      header("Location: ../../passSet.php?error=passwordfail");
      exit();
    }
    // CONTINUE: input validated
    // expiration validator
    $currentDate = date("U");
    require 'dbh.inc.php';
    // prepare statement: SELECT pwdReset
    // pwdReset()
    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=?
      AND pwdResetExpires >= $currentDate";
    $stmt = mysqli_stmt_init($db);
    // ERROR: check for failure
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../../passSet.php?error=sqlerror35");
      exit();
    }
    // CONTINUE: execute SELECT
    else{
      mysqli_stmt_bind_param($stmt, "s", $selector);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      // ERROR: resetRequest dne
      if(!$row = mysqli_fetch_assoc($result)){
        header("Location: ../../passSet.php?error=requestdne");
        exit();
      }
      // CONTINUE:
      else {
        $tokenBin = hex2bin($token);
        $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
        // ERROR: token match fail
        if($tokenCheck == false){
          header("Location: ../../passSet.php?error=tokenmatch&selector=$selector&token=$token");
          exit();
        }
        // CONTINUE: token match
        elseif ($tokenCheck === true) {
          // retrieve email from resetRequest
          $tokenEmail = $row['pwdResetEmail'];
          // prepare statement: SELECT users
          $sql = "SELECT * FROM users WHERE emailUsers=?";
          $stmt = mysqli_stmt_init($db);
          // ERROR: check for failure
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../passSet.php?error=sqlerror66");
            exit();
          }
          // CONTINUE: execute SELECT
          else{
            mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // ERROR: emailUsers dne
            if(!$row = mysqli_fetch_assoc($result)){
              header("Location: ../../passSet.php?error=emaildne");
              exit();
            }
            // CONTINUE: UPDATE users(pwdUsers)
            else{
              // prepare statement: UPDATE users(pwdUsers)
              $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?";
              //$stmt = mysqli_stmt_init($db);
              // ERROR: check for failure
              if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../../passSet.php?error=sqlerror86");
                exit();
              }
              // CONTINUE: execute UPDATE
              else{
                // hash newPwd
                $newHash = password_hash($password_1, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "s", $newHash, $tokenEmail);
                mysqli_stmt_execute($stmt);

                // clear pwdReset request
                // prepare statement: DELETE pwdReset
                $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=$tokenEmail";
                //$stmt = mysqli_stmt_init($db);
                // ERROR: check for failure
                if(!mysqli_stmt_prepare($stmt, $sql)){
                  header("Location: ../../passSet.php?error=sqlerror102");
                  exit();
                }
                // CONTINUE: execute DELETE
                // SUCCESS: redirect to login
                else{
                  mysqli_stmt_execute($stmt);
                  // close DB connection
                  mysqli_stmt_close($stmt);
                  mysqli_close($db);
                  // redirect to login
                  header("Location: ../../login.php?newpwd=success");
                }

                // redirect to login
                header("Location: ../../login.php?newpwd=success");
              }
            }
          }
        }
        // ERROR: token match fail catchall
        else{
          header("Location: ../../passSet.php?error=tokenerror");
          exit();
        }
      }
    }
  }
  else{
    header("Location: ../../passReset.php");
  }
