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
            if(isset($_GET['selector']) && isset($_GET['token'])){
              // retrieve token and selector
              $selector = $_GET['selector'];
              $token = $_GET['token'];
            }
            else{
              echo "selector or token missing";
            }

            // ERROR: empty fields
            if(empty($selector) || empty($token)){
              echo "Please resubmit a password reset request.";
            }
            // CONTINUE: validate token
            else{
              echo "<p>selector: ".$selector."<br />Token: ".$token."</p>";
              if(ctype_xdigit($selector) !== false && ctype_xdigit($token) !== false){
          ?>
          <!-- Password Set Form(Password-1, Password-2) -->
          <form id="email-form" name="email-form" data-name="Email Form"
              action="techFit_php/includes/passSet.inc.php" method="post">
            <!-- selector -->
            <input type="hidden" value="<?php echo $selector; ?>"
              name="selector" data-name="selector" id="selector" required="">
            <!-- token -->
            <input type="hidden" value="<?php echo $token; ?>"
              name="token" data-name="token" id="token" required="">
            <!-- password-1 -->
            <label for="Password-1" class="field-label-3">Enter a new password</label>
            <input type="password" class="form-box w-input" maxlength="256"
              name="Password-1" data-name="Password-1" id="Password-1" required="">
            <!-- password-2 -->
            <label for="Password-2" class="field-label-3">Repeat new password</label>
            <input type="password" class="form-box w-input" maxlength="256"
              name="Password-2" data-name="Password-2" id="Password-2" required="">
            <!-- submit button -->
            <input type="submit" value="Submit" data-wait="Getting HUGE" class="w-button"
              name="passSet-submit">
          </form>
          <?php
              }
            }
          ?>
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
