<?php
  require("mHeader.php");
  // require("kHeader.php");
?>

<body>
  <p>
    <br />
    Where is my table?
    <br />
  </p>

  <?php
    require_once 'techFit_php/includes/dbh.inc.php';

    $sql = "SELECT * FROM users WHERE 1";
    $result = $db->query($sql);

    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "Username: ". $row['uidUsers'] ." | Password: ". $row['pwdUsers'] ."<br />";
      }
    }
    else {
      echo "no results.";
    }
    $db->close;
  ?>

  <p>
    <br />
    Dope.
    <br />
  </p>

  <form action="#" method="post">
    <input type="text" name="password" placeholder="pass"/>
    <input type="text" name="hash" placeholder="hash"/>
    <input type="submit" value="submit" name="hash-verify"/>
  </form>

  <?php
    if(isset($_POST['hash-verify'])){
      $pass = $_POST['password'];
      $hash =  $_POST['hash'];
      print($hash);

      // attempt password_verify()
      $verify = password_verify($pass, $hash);
      $con_verify = ($verify)?'true':'false';
      echo "<p>Attempt: ".$pass."<br />DB Hash: ".$hash."<br />Match? ".$con_verify."</p>";


      // extract hashing method, cost, salt, and hashedpwd
      /*
      $trim =
      $method = ;
      $cost = ;
      $salt = ;
      $hash = ;

      echo "<p>Method: ".$method."<br />Cost: ".$cost."<br />Salt: ".$salt.
        "<br />Hash: ".$hash."</p>";
      */

      // hash $pass with extracted method, cost, and salt
      //
    }
    else{
      echo "<p>
      oops. my fucking fault!
      </p>";
    }
  ?>
</body>

<?php
  require("mFooter.php");
?>
