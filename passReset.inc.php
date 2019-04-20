<?php
  session_start();
  // check for proper navigation
  if(isset($_POST['passReset-submit'])){
    // create selector, token, and url
    $selector = bin2hex(random_bytes(8));
    $token = bin2hex(random_bytes(32));
    $url = "www.techfit.media/passSet.php?selector=".$selector.
      "&token=".$token;
    // set token expiration
    $expires = date("U") + 900;
    // create table in techfitlogin pwdReset
    /*
    CREATE TABLE pwdReset (
      pwdResetID int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
      pwdResetEmail TEXT NOT NULL,
      pwdResetSelector TEXT NOT NULL,
      pwdResetToken LONGTEXT NOT NULL,
      pwdResetExpires TEXT NOT NULL
    );
    */
    // initialize variable
    $email = $_POST['Email'];
    // establish DB connection
    require_once("dbh.inc.php");

    // discard old token entry
    // prepare statement: DELETE pwdResetEmail
    // dbTable pwdReset(pwdResetID, pwdResetEmail, pwdResetSelector, pwdResetToken,
    //  pwdResetExpires)
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($db);
    // ERROR: check for failure
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../../passReset.php?error=sqlerror");
      exit();
    }
    // CONTINUE: DELETE pwdResetEmail
    else{
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
    }

    // create new token entry
    // prepare statement: INSERT pwdReset
    // dbTable pwdReset(pwdResetID, pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires)
    $sql = "INSERT INTO pwdReset(pwdResetEmail, pwdResetSelector, pwdResetToken,
      pwdResetExpires) VALUES (?, ?, ?, ?)";
    // ERROR: check for failure
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../../passReset.php?error=sqlerror");
      exit();
    }
    // CONTINUE: INSERT pwdReset
    else{
      // hash token
      $hashedtoken = password_hash($token, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedtoken,
        $expires);
      mysqli_stmt_execute($stmt);
    }
    // close DB connection
    mysqli_stmt_close($stmt);
    mysqli_close($db);

    // set up email notification
    // subject
    $subject = "Reset your password";
    // message body
    $message = "<p>We recieved a request to reset your password. Click the link
      to set up a new password.</p>";
    $message .= "<p><br /><a href='".$url."'>Reset password</a></p>";
    // headers
    $headers = "From: manny <mescamilla@techfit.media>\r\n";
    $headers .= "Reply-To: mescamilla@techfit.media\r\n";
    $headers .= "Content-Type: text/html\r\n";
    // send mail notification
    //mail($email, $subject, $message, $headers);


    // SUCCESS: redirect to passReset.php
    //
    // header("Location: ../../passReset.php?reset=success");
    header("Location: ../../passReset.php?reset=success&selector=".$selector."&token=".$token);
  }
  // redirect if improper navigation
  else{
    header("Location: ../../login.php");
  }
