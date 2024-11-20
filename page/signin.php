<?php
  session_start();

  if($_SESSION['user'])
  {
      header("Location: /profile");
  }
    
?>
<!doctype html>
<html lang="en">
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="Googlebot-News" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="robots" content="noimageindex">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" media="all" href="assets/css/bootstrap.min.css?fdsfsf">
  <link rel="stylesheet" media="all" href="assets/css/slick.css?fdf">
  <link rel="stylesheet" media="all" href="assets/css/slick-theme.css?fsdfdsf">
  <link rel="stylesheet" media="all" href="assets/css/style.css?fsdfs">
  <link rel="icon" type="image/png" sizes="28x28" href="assets/img/favi.png">
  <meta name="theme-color" content="#sdfsf">
</head>
<body class="themebgcolor">
<div class="circlebg1"><img class="img-fluid" src="assets/img/circlebg19.svg" alt="img"></div>

<?php
  require_once "header.php";
?>

<!-- banner sec -->
<div class="bannerSec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="bannercntSec signcntsec">
          <div class="bannerImg d-none d-xl-flex">
            <div class="bannerimg01 d-none d-md-block">
              <img class="img-fluid" src="assets/img/joystick.png" alt="img">
            </div>


          </div>

          <div class="signctn">
            <h2 class="textwhitecolor signheading">Sign In for <span class="textbluecolor">Crypto</span></h2>
            <div class="sign-from">
              <form action="engine/login.php" method="post">
                <div class="input-box">
                  <input type="text" name="username" placeholder="Enter username" class="form-input" required>
                </div>
                <div class="input-box">
                  <input type="password" name="pass" placeholder="Enter password" class="form-input" required>
                </div>
                <div class="form-check d-none d-md-flex">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    I agree with Privacy Policy
                  </label>
                </div>
                <div class="sign-btn">
                  <button class="btn btnlightblue me-3" style="width: 100%; margin-bottom: 13px;">Sign In</button>
                  <button class="btn btndarkblue" style="width: 100%;">Forgot password</button>
                </div>
              </form>
            </div>
            
            <div class="divider">or</div>
            <div class="social-wrap">
              
              <a href="#" class="twiter">
                <img src="assets/img/twittericon.svg" alt="icon">
              </a>
              <a href="#" class="google">
                <img src="assets/img/googleicon.svg" alt="icon">
              </a>
              <a href="#" class="facebook">
                <img src="assets/img/facebookicon.svg" alt="icon">
              </a>
            </div>
            <div class="signup-link">
              Do not have an account? <a href="/signup">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 <div id="elevator_item"><a id="elevator" onclick="return false;" title="Back To Top"></a></div>


<!-- Optional JavaScript -->
<script src="assets/js/jquery-2.0.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/comman.js"></script>

</body>
</html>