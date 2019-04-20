<?php
  session_start();
  //include('techFit_php/includes/register.inc.php');
?>
<!DOCTYPE html>
<!--Mikey Mann-->
<!--TechFit Project-->
<html data-wf-page="5c061d1be4235a6a8e1b8b7f" data-wf-site="5bf2073cdf7c0950912d48c3">
  <head>
    <meta charset="utf-8">
    <title>woInsert</title>
    <meta content="register" property="og:title">
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
          <!-- tectfit logo
          <img src="images/Tech-Fit-Transparent.png"
            srcset="images/Tech-Fit-Transparent-p-500.png 500w,
            images/Tech-Fit-Transparent-p-800.png 800w, images/Tech-Fit-Transparent-p-1080.png
            1080w, images/Tech-Fit-Transparent-p-1600.png 1600w, images/Tech-Fit-Transparent.png 1920w"
            sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px"
            id="w-node-aafe958f74bc-8e1b8b7f" alt="">
          <a id="w-node-0da204d56c39-8e1b8b7f" href="index.php"
            class="w-inline-block"></a>
            -->
          <!-- form division -->
          <div id="w-node-96bea4b3b95d-8e1b8b7f" class="w-form">
            <!-- message box -->
            <?php
              // error message
              if(isset($_GET['error'])){
                // empty fields: 'emptyfields'
                if($_GET['error'] == "emptyfields"){
                  echo "<p class='signuperror'>
                    Fill in all fields.</p>";
                }
                // invalid email and username: 'invalidemailusername'
                else if($_GET['error'] == "invalidemailusername"){
                  echo "<p class='signuperror'>
                    Invalid email and/or username. Please review your email to ensure you entered
                    it correctly. Your username must have at least 6 charachters
                    and may include: uppercase alphabet, lowercase alphabent, numbers,
                    '_' or '.'</p>";
                }
                // invalid email: 'invalidemail'
                else if($_GET['error'] == "invalidemail"){
                  echo "<p class='signuperror'>
                    Invalid email. Please review your email to ensure you entered
                    it correctly.</p>";
                }
                // invalid username: 'invalidusername'
                else if($_GET['error'] == "invalidusername"){
                  echo "<p class='signuperror'>
                    Invalid username. Your username must have at least 6 charachters
                    and may include: uppercase alphabet, lowercase alphabent, numbers,
                    '_' or '.' </p>";
                }
                // username taken: 'usernametaken'
                else if($_GET['error'] == "usernametaken"){
                  echo "<p class='signuperror'>
                    This username has already been claimed. Try another.</p>";
                }
                // email taken:

                // invalid password: 'invalidpassword'
                else if($_GET['error'] == "invalidpassword"){
                  echo "<p class='signuperror'>
                    Invalid password. Your password must have at least 8 characters
                    and least one: uppercase alphabet, lowercase alphabet, number,
                    and symbol. Please try again.</p>";
                }
                // password mismatch: 'passwordmatch'
                else if($_GET['error'] == "passwordmatch"){
                  echo "<p class='signuperror'>
                    Please make sure both passwords match.</p>";
                }
                // sql error: 'sqlerror'
                else if($_GET['error'] == "sqlerror"){
                  echo "<p class='signuperror'>
                    There was a problem connecting to the database. Try again later.</p>";
                }
              }
              // fill message
              else {
                echo '<p>Please enter a workout name and select a workout group.</p>';
              }
            ?>
            <!-- Reg Form(wo_name, wo_group, wo_gif) -->
            <form id="email-form" name="email-form" data-name="Email Form"
                action="techFit_php/includes/woInsert.inc.php" method="post">
              <!-- wo_name -->
              <label for="wo-Name" class="form-label">Workout Name</label>
              <input type="text" class="form-box w-input" maxlength="256"
                name="wo-Name" data-name="Username" id="User-Name" required=""><br />
              <!-- wo_group -->
              <label for="wo-Group" class="form-label">Muscle Group</label>
              <input type="radio" name="wo-Group" value="chest"> chest<br />
              <input type="radio" name="wo-Group" value="back"> back<br />
              <input type="radio" name="wo-Group" value="shoulders"> shoulders<br />
              <input type="radio" name="wo-Group" value="traps"> traps<br />
              <input type="radio" name="wo-Group" value="triceps"> triceps<br />
              <input type="radio" name="wo-Group" value="biceps"> biceps<br />
              <input type="radio" name="wo-Group" value="legs"> legs<br />
              <input type="radio" name="wo-Group" value="abs"> abs<br />
              <input type="radio" name="wo-Group" value="forearms"> forearms<br />
              <input type="radio" name="wo-Group" value="full body"> full body<br /><br />
              <!-- wo_gif
              <label for="wo-GIF" class="field-label-3">GIF Link</label>
              <input type="password" class="form-box w-input" maxlength="256"
                name="Password-1" data-name="Password-1" id="Password-1" required="">
              -->
              <!-- submit button -->
              <input type="submit" value="Submit" data-wait="Getting HUGE" class="w-button"
                name="Reg-Form">
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

</html>
