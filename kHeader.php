<!-- header -->
<header>
  <!-- nav bar -->
  <div class="containav">
    <div id="branding">
      <img src="images/TFLogo.png">
      <h1><span></span></h1>
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
    </div>
  </div>
</header>
