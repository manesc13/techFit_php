<?php
  session_start();
  // check for proper navigation
  if(isset($_POST['Login-Form'])){
    require_once 'dbh.inc.php';
    // receive and sanitize input (Email, Password)
    $logname = $_POST['Email'];
    $password = $_POST['Password'];



    // form validation
    // ERROR: empty fields : emptyfield
    if(empty($logname) || empty($password)) {
      header("Location: ../../login.php?error=emptyfield");
      exit();
    }
    /*
    // ERROR: invalid email : invalidlogin
    // || !preg_match("/^(?=.{8,16}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/", $username)
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../../login.php?error=invalidlogin");
      exit();
    }
    */

    /*
    // ERROR: invalid username : invalidlogin
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)
    // || !preg_match("/^(?=.{8,16}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/", $username)
    ) {
      header("Location: ../../login.php?error=invalidlogin");
      exit();
    }
    */

    // ERROR: user dne OR
    // CONTINUE: check user record --> authenticate
    else {
      // prepare statement: SELECT uidUsers/emailUsers
      // dbTable users(idUsers, uidUsers, emailUsers, pwdUsers)
      $sql = "SELECT uidUsers, pwdUsers FROM users WHERE uidUsers=? OR emailUsers=?";
      $stmt = mysqli_stmt_init($db);
      // ERROR: check for failure
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../../login.php?error=sqlerror");
        exit();
      }
      // CONTINUE: SELECT pwdUsers
      else {
        mysqli_stmt_bind_param($stmt, "ss", $logname, $logname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        // ERROR: username dne 'dne'
        if (!$row = mysqli_fetch_assoc($result)) {
          header("Location: ../../login.php?error=dne");
          exit();
        }
        // CONTINUE: authenticate
        else {
          $passCheck = password_verify($password, $row['pwdUsers']);
          // ERROR
          if($passCheck === false){
            header("Location: ../../login.php?error=faillogin");
            exit();
          }
          // SUCCESS
          elseif($passCheck === true){
            // $username = $row["uidUsers"];
            // set session variable: $_SESSION['username']
            // $_SESSION['username'] = $username;
            $_SESSION['username'] = $row['uidUsers'];
            header("Location: ../../home.php?login=success");
            exit();
          }
        }

        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if($resultCheck < 1) {
          header("Location: ../../login.php?error=dne");
          exit();
        }
        // SUCCESS: test $hashPassword, authenticate
        else if ($resultCheck = 1){
          // parse users query in $stmt{idUsers, uidUsers, email, password}
          // retrieve password from $stmt
          $savedPassword = $stmt[3];
          // retrieve username from $stmt
          $username = $stmt[1];

          // encrypt password
          $hashPassword = password_hash($password, PASSWORD_DEFAULT);

          // test password:
          // ERROR: password fail
          if(!$hashPassword == $savedPassword){
            header("Location: ../../login.php?error=faillogin");
            exit();
          }
          // SUCCESS: autheniticate
          // set session_var
          //
          else {




            // set session variable: $_SESSION['username']
            $_SESSION['username'] = $username;
            header("Location: ../../login.php?login=success");
            exit();
          }
        }
        // ERROR: multiple entries found
        else {
          // ERROR: username collision
          header("Location: ../../login.php?error=faillogin");
          exit();
        }
      }
    }
    // close db connection
    mysqli_stmt_close($stmt);
    mysqli_close($db);
  }
  // redirect if improper navigation
  else {
    header("Location: ../../login.php");
  }
  //
  //
  //
/*
  $errors = array();

  // LOGIN USER
  if (isset($_POST['email-form'])) {
    // receive and sanitize all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['Email']);
    $password = mysqli_real_escape_string($db, $_POST['Password']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) != 0) {
      array_push($errors, "Processing error");
    }

    else {
      // encrypt the password before authenticating
      $salt = "usesalt";
      $saltPassword = $password + $salt;
      $hashPassword = hash('sha512', $saltPassword);

      // test username/password
      $user_check_sql = "SELECT * FROM users WHERE username='$username' AND password='$hashPassword'";
      $result = mysqli_query($db, $user_check_sql);
      if (!mysqli_num_rows($results) == 1) {
          array_push($errors, "Wrong username/password combination");
      }

      else {
            $_SESSION['username'] = $username;
            header('location: ../index.html?login=success');
        }
    }
  }
?>
*/
