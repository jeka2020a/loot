<?php
  session_start();
  if ($_SESSION['user']['username'] != null)
  {
    header("Location: /profile");
  }
    //$_SESSION['error'] = "<p class='error'>User exists!</p>";
?>
<!doctype html>
<html lang="en">
<head>
  <title>Sign Up</title>
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
  <link rel="stylesheet" href="assets/css/custom.css">
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
        <div class="bannercntSec signupsec">
          

          <div class="bannercnt signctn">
            <h2 class="textwhitecolor signheading">Sign Up for <span class="textbluecolor">Crypto</span></h2>
            <div class="sign-from signup-form">


              <form action="engine/registration.php" method="post" enctype="multipart/form-data">

              
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
              

              <div class="row input-box">
                  <div class="col-md-6">
                    <input type="text" name="surname" id="surname" placeholder="Enter surname" class="form-input" required>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="name" id="name" placeholder="Enter name" class="form-input" required>
                  </div>
                </div>

                

                <div class="input-box">
                  <input type="text" name="username" id="username" placeholder="Enter username" class="form-input" required>
                </div>
                <!--
                <div class="input-box">
                  <label name="avatar" class="custom-file-upload">
                      Choose image
                      <input  type="file" class="file-upload" id="fileInput" required />
                  </label>
                </div>
                -->
                <div class="input-box">
                  <input type="email" name="email" id="email" placeholder="Enter e-mail" class="form-input" required>
                </div>
                <div class="input-box">
                  <label for="birthday" style="color: #fff;">Enter birthday</label>
                  <input type="date" name="birthday" id="birthday" placeholder="Enter birthday" class="form-input" required>
                </div>
                <div class="input-box">
                  <input type="text" name="country" id="country" placeholder="Enter country" class="form-input" required>
                </div>
                <div class="input-box">
                  <label for="role" style="color: #fff;">Role</label>
                  <select class="form-input" name="role" id="role" required>
                    <option value="seller">seller</option>
                    <option value="client">client</option>
                  </select>
                </div>




                <div class="row input-box">
                  <div class="col-md-6">
                    <input type="password" name="pas" id="password" placeholder="Enter password" class="form-input" required>
                  </div>
                  <div class="col-md-6">
                    <input type="password" name="cpass" placeholder="Confirm password" class="form-input" required>
                  </div>
                </div>
                
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    I agree with Privacy Policy
                  </label>
                </div>

                <div class="sign-btn" style="display: flex;">
                  <button name="" class="btn btnlightblue me-3" style="width: 100%;">Sign Up</button>
                  <!--<button class="btn btndarkblue">Sign In by e-mail</button>-->
                </div>
              </form>




            </div>
            
            <!--
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
-->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    const fileInput = document.getElementById('fileInput');

    fileInput.addEventListener('change', (event) => {
        const fileName = event.target.files[0] ? event.target.files[0].name : 'Не выбран файл';

        console.log(fileName);
    });
</script>

<!-- Optional JavaScript -->
<script src="assets/js/jquery-2.0.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/comman.js"></script>

</body>
</html>