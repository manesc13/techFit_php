<?php
  session_start();
  // check for proper navigation
  if(isset($_POST['Reg-Form'])){
    require_once 'dbh.inc.php';
    // retrieve input (User-Name, Email, Password-1, Password-2)
    $username = $_POST['User-Name'];
    $email = $_POST['Email'];
    $password_1 = $_POST['Password-1'];
    $password_2 = $_POST['Password-2'];

    // form validation: ensure that the form is correctly filled ...
    // ERROR: empty fields
    if(empty($username) || empty($email) || empty($password_1) || empty($password_2)){
      header("Location: ../../register.php?error=emptyfields&User-Name=".$username."&Emaill=".$email);
      exit();
    }
    // ERROR: invalid email and username
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)
        && !preg_match("/^(?=.{8,16}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/",
        $username)){
      header("Location: ../../register.php?error=invalidemailusername");
      exit();
    }
    // ERROR: invalid email
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: ../../register.php?error=invalidemail&User-Name=".$username);
      exit();
    }
    // ERROR: invalid username: restrict _., ._, ; allow upper, lower, numeric, period, underscore, min6:len
    else if (!preg_match("/^(?=.{6,}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]*(?<![_.])$/",
        $username)){
      header("Location: ../../register.php?error=invalidusername&Email=".$email);
      exit();
    }
    // ERROR: invalid password: require min1:upper, min1:lower, min1:numeric, min1:symbol, min8:len
    else if (!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$/",
        $password_1)){
      header("Location: ../../register.php?error=invalidpassword&User-Name=".$username."&Email=".$email);
      exit();
    }
    // ERROR: password missmatch
    else if ($password_1 !== $password_2){
      header("Location: ../../register.php?error=passwordmatch&User-Name=".$username."&Email=".$email);
      exit();
    }
    // ERROR: username taken
    // SUCCESS: valid input --> check user record --> register
    else {
      // prepare statement: SELECT
      // dbTable users(idUsers, uidUsers, emailUsers, pwdUsers)
      $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
      $stmt = mysqli_stmt_init($db);
      // check for failure
      if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../../register.php?error=sqlerror");
        exit();
      }



      // CONTINUE: execute SELECT
      else {
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        // ERROR: username exists 'usernametaken'
        if ($resultCheck > 0){
          header("Location: ../../register.php?error=usernametaken&Email=".$email);
          exit();
        }
        // SUCCESS: register, authenticate
        else {
          // prepare statement: INSERT
          // dbTable users(idUsers, uidUsers, emailUsers, pwdUsers)
          $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?) ";
          $stmt = mysqli_stmt_init($db);





          if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../register.php?error=sqlerror");
            exit();
          }
          // SUCCESS: register, authenticate
          // execute statement: INSERT
          // authenticate: set $_SESSION['username']
          else {
            // encrypt password
            $hashPassword = password_hash($password_1, PASSWORD_DEFAULT);
            // execute statement: INSERT
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPassword);
            mysqli_stmt_execute($stmt);
            // set session variable: username
            $_SESSION['username'] = $username;
            header("Location: ../../home.php?register=success");
            exit();
          }
        }


      }
    }
    // close db connection
    mysqli_stmt_close($stmt);
    mysqli_close($db);
  }
  // redirect if improper navigation
  else {
    header("Location: ../../register.php");
  }
