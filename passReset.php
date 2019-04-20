<?php
  session_start();
  require 'mHeader.php';
?>
<body class="body-2">
  <div class="section">
    <div class="w-container">
      <div class="w-layout-grid grid-4">
        <!-- tectfit logo -->
        <img src="images/Tech-Fit-Transparent.png"
          srcset="images/Tech-Fit-Transparent-p-500.png 500w,
          images/Tech-Fit-Transparent-p-800.png 800w, images/Tech-Fit-Transparent-p-1080.png
          1080w, images/Tech-Fit-Transparent-p-1600.png 1600w, images/Tech-Fit-Transparent.png 1920w"
          sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px"
          id="w-node-aafe958f74bc-8e1b8b7f" alt="">
        <a id="w-node-0da204d56c39-8e1b8b7f" href="index.php"
          class="w-inline-block"></a>
        <!-- form division -->
        <div id="w-node-96bea4b3b95d-8e1b8b7f" class="w-form">
          <?php
            // check for successful redirect
            if(isset($_GET['reset'])){
              if($_GET['reset'] == "success"){
                echo "<p>Check your email for the password reset link.</p>";
                if(isset($_GET['selector']) && isset($_GET['token'])){
                  $selector = $_GET['selector'];
                  $token = $_GET['token'];
                  $url = "passSet.php?selector=".$selector."&token=".$token;
                  echo "<p><a href=$url>reset password</a></p>";
                }
                else {
                  echo "<p>selector or token missing.</p>";
                }
              }
            }
          ?>
          <!-- Password Reset Request Form(Email) -->
          <form id="reset-form" name="reset-form" data-name="Reset Form"
              action="techFit_php/includes/passReset.inc.php" method="post">
            <!-- email -->
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-box w-input" maxlength="256"
              name="Email" data-name="Email" id="Email" required="">
            <!-- submit button -->
            <input type="submit" value="Submit" data-wait="Getting HUGE" class="w-button"
              name="passReset-submit">
            <!-- login link -->
            <a href="login.php">Log in</a>
            <!-- login link -->
            <a href="register.php">Register</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js">
    </script>
  <![endif] -->
</body>

<?php
  require 'mFooter.php';
?>
