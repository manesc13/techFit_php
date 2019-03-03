<?php
  session_start();
  include(techFit_php/includes/login.inc.php);
?>
<!DOCTYPE html>
<!--Mikey Mann-->
<!--TechFit Project-->
<html data-wf-page="5bfab871c176115730ae769b" data-wf-site="5bf2073cdf7c0950912d48c3">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <meta content="login" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/techfit.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
  </head>
  <body class="body-2">
    <div class="section">
      <div class="w-container">
  	    <div class="w-layout-grid grid-4">
          <!-- logo -->
          <img src="images/Tech-Fit-Transparent.png"
            srcset="images/Tech-Fit-Transparent-p-500.png 500w,
            images/Tech-Fit-Transparent-p-800.png 800w,
            images/Tech-Fit-Transparent-p-1080.png 1080w,
            images/Tech-Fit-Transparent-p-1600.png 1600w,
            images/Tech-Fit-Transparent.png 1920w"
            sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px"
            id="w-node-aafe958f74bc-30ae769b" alt="">
          <!-- message box -->
          <?php
            // error message
            if(isset($_GET['error'])) {
              // empty fields: 'emptyfield'
              if($_GET['error'] == "emptyfield"){
                echo "<p class='loginerror'>
                  Fill in all fields.</p>";
              }
              // invalid email / username: 'invalidlogin'
              else if($_GET['error'] == "invalidlogin"){
                echo "<p class='loginerror'>
                  Fill in all fields.</p>";
              }
              // user dne: 'dne'
              else if($_GET['error'] == "dne"){
                echo "<p class='loginerror'>
                  This user does not exist.</p>";
              }
              // password / authentication fail: 'faillogin'
              else if($_GET['error'] == "faillogin"){
                echo "<p class='loginerror'>
                  Login failed.</p>";
              }
              // sql error: 'sqlerror'
              else if($_GET['error'] == "sqlerror"){
                echo "<p class='loginerror'>
                  There was a problem connecting to the database. Try again.</p>";
              }
              // multiple entries
              else if($_GET['error'] == "collision"){
                  echo "<p class='loginerror'>
                    Login failed.</p>";
              }
            }
            // fill message
            else {
              echo '<p>Please enter your username/email and password.</p>';
            }
          ?>
          <!-- Login_Form(Email, Password) -->
          <div id="w-node-96bea4b3b95d-30ae769b" class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form"
              action="techFit_php/includes/login.inc.php" method="post">
              <!-- email / username -->
              <label for="Email-2" class="form-label">Email</label>
              <input type="text" class="text-field-2 w-input" autofocus="true" maxlength="256"
                name="Email" data-name="Email" id="Email-2" required="">
              <!-- password input -->
              <label for="Password" class="field-label-3">Password</label>
              <input type="password" class="text-field-3 w-input" maxlength="256"
                name="Password" data-name="Password" id="Password" required="">
              <!-- submit button -->
              <input type="submit" value="Login" data-wait="Getting HUGE" class="w-button"
                name="Login-Form">
              <!-- registration link -->
              <a href="register.php" class="button-3 w-button">Register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js">
      </script>
    <![endif] -->
  </body>
</html>
