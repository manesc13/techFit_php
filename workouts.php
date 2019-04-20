<?php
  session_start();
  include("techFit_php/includes/dbh_wo.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
  <!--head -->
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <title>TechFit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/web.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i|Roboto:400,400i,700,700i" rel="stylesheet">
  </head>
  <!-- header -->
  <header>
    <!-- nav bar -->
    <div class="containav">
      <div id="branding">
        <img src="images/TFLogo.png">
        <p>
        <!-- login status -->
        <section class="">
          <?php
            // logged in (username, logout)
            if (isset($_SESSION['username'])) {
              // grab username
              $username = $_SESSION['username'];
              // display username
              echo '<p>Welcome, '.$username.'. You are logged in.</p>';
              // logout button
              echo '<form action="techFit_php/includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
              }
              // NOT logged in (log in, register)
              else{
                // log in button
                echo '<a href="login.php">Log in </a>';
                // register button
                echo '<a href="register.php">Register </a>';
              }
          ?>
          </section>
        </p>
      </div>
    </div>
  </header>
  <!-- body -->
  <body>
    <!-- Photo-1: ropes / "ascend" -->
    <section id="frontpicture-ropes">
      <div class="photo">
        <img src="images/frontpage1.jpeg"></img>
        <div class="frontpagelogo">
          <!-- <img src="images/TFLogo.png"> -->
        </div>
        <div class="caption post_content">
          <div class="title">Workouts</div>
          <p class="caption"><br>"Committment towards reaching a goal
            characterized by complete independence from everything."</p>
        </div>
      </div>
    </section>
    <!-- techfit workout table -->
    <section id="body">
      <!-- wo_list -->
      <table class="table">
        <thead class="color">
          <tr class="table-head">
            <th scope="col">Exercise</th>
            <th scope="col">Muscle Group</th>
            <th scope="col">Proper Form</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT wo_name, wo_group, wo_gif FROM wo_list WHERE 1";

            $result = $db->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row['wo_name']."</td>".
                  "<td>".$row['wo_group']."</td>".
                  "<td><a href=\"".$row['wo_gif']."\">Link</a></td></tr>";
              }
            }
          ?>
        </tbody>
      </table>
    </section>
  </body>
  <!-- Footer -->
  <footer>
    <p>TechFit, Copyright © 2019</p>
  </footer>
  <!-- Footer -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
