<?php
  session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <title>CryptoN::Activity</title>
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
<div class="disbluebritbg"><img class="img-fluid" src="assets/img/discoverbluebrightbg.svg" alt="img"></div>
<?php 
    require_once "header.php";
?>
<!-- Authore Profile -->
<div class="activitySec mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="headingWh mb-2 mb-md-4">Activity</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-6">
        <div class="row">
          <div class="col-md-6 col-xl-4  mb-3 mt-2 mb-md-0 mt-md-0">
            <div class="btn-group">
              <button class="filterbtn dropdown-toggle text-start" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Event type
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Listings</a></li>
                <li><a class="dropdown-item" href="#">Sales</a></li>
                <li><a class="dropdown-item" href="#">Bids</a></li>
                <li><a class="dropdown-item" href="#">Transfers</a></li>
              </ul>
            </div>
          </div>


          <div class="col-md-6 col-xl-4">
           <div class="btn-group">
            <button class="filterbtn dropdown-toggle text-start" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              All chains
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Ethereum</a></li>
              <li><a class="dropdown-item" href="#">Polygon</a></li>
              <li><a class="dropdown-item" href="#">Klaytn</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 activityTags 1d-flex justify-content-end d-none d-lg-flex">
      <button class="btn btndarkblue">Bids</button>
      <button class="btn btndarkblue">Listings</button>
      <button class="btn btnlightblue">Clear All <img src="assets/img/closeicon.svg" alt="img"></button>
    </div>
  </div>  
    <div class="row mt-3 mt-md-5">
      <div class="col-md-12">
        <div class="activityTable">
          <table>
            <tbody><tr>
              <th>EVENT TYPE</th>
              <th>ITEM</th>
              <th class=" text-end">PRICE</th>
              <th class="text-center">QUANTITY</th>
              <th class=" text-end">FROM</th>
              <th class=" text-end">TO</th>
              <th class=" text-end">TIME</th>
            </tr>

            <tr>
              <td class="textwhitecolor offericon">
                <img src="assets/img/handicon.svg" alt="img"> Offer
              </td>
              <td class="textwhitecolor">
                <div class="actiCollect">
                  <div class="activitItem"><img class="img-fluid" src="assets/img/activityItem01.svg" alt="img"></div>
                  <div class="actiCnt">
                    <span class="textgraycolor">Jungle Freaks</span>
                    Jungle Freaks by Trosley
                    <div class="actiCntSm"><img class="img-fluid" src="assets/img/priceicon.svg" alt="img"> 0,002</div>
                  </div>
                </div>
              </td>
              <td class="textwhitecolor text-end"><img class="img-fluid" src="assets/img/priceicon.svg" alt="img"> 0,002</td>
              <td class="textwhitecolor text-center">1</td>
              <td class="textbluecolor text-end">alphabet</td>
              <td class="textbluecolor text-end">barbos2021</td>
              <td class="textbluecolor text-end"><div class="offericonSm"><img src="assets/img/handicon.svg" alt="img"> Offer</div>20 seconds ago</td>
            </tr>

            <tr>
              <td class="textwhitecolor offericon">
                <img src="assets/img/cart-icon.svg" alt="img"> Sale
              </td>
              <td class="textwhitecolor">
                <div class="actiCollect">
                  <div class="activitItem"><img class="img-fluid" src="assets/img/activityItem01.svg" alt="img"></div>
                  <div class="actiCnt">
                    <span class="textgraycolor">Jungle Freaks</span>
                    Jungle Freaks by Trosley
                    <div class="actiCntSm"><img class="img-fluid" src="assets/img/priceicon.svg" alt="img"> 0,002</div>
                  </div>
                </div>
              </td>
              <td class="textwhitecolor text-end"><img class="img-fluid" src="assets/img/priceicon.svg" alt="img"> 0,002</td>
              <td class="textwhitecolor text-center">1</td>
              <td class="textbluecolor text-end">alphabet</td>
              <td class="textbluecolor text-end">barbos2021</td>
              <td class="textbluecolor text-end"><div class="offericonSm"><img src="assets/img/handicon.svg" alt="img"> Offer</div>20 seconds ago</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
</div>



<div class="div__content" style="display: none;">
  <?php echo $_SESSION['user']['username'];?>
</div>


<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-xl-4">
        <div class="footsec">
          <div class="footlogocntSec">
          <a href="#" class="footlogo"><img class="img-fluid" src="assets/img/footlogo.svg" alt="img"></a>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
          <div class="joincommunity">
            <h3>Join the Community</h3>
            <ul>
              <li><a href="#"><img class="img-fluid" src="assets/img/discordbutton.svg" alt="img"></a></li>
              <li><a href="#"><img class="img-fluid" src="assets/img/twitter.svg" alt="img"></a></li>
              <li><a href="#"><img class="img-fluid" src="assets/img/insta.svg" alt="img"></a></li>
              <li><a href="#"><img class="img-fluid" src="assets/img/reditbutton.svg" alt="img"></a></li>
              <li><a href="#"><img class="img-fluid" src="assets/img/youtube.svg" alt="img"></a></li>
              <li><a href="#"><img class="img-fluid" src="assets/img/emailbutton.svg" alt="img"></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-xl-8 d-none d-md-flex justify-content-between">
        <div class="footlinks">
          <h2>My account</h2>
          <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Favorites</a></li>
            <li><a href="#">My collection</a></li>
            <li><a href="#">Settings</a></li>
          </ul>
        </div>

        <div class="footlinks">
          <h2>Discover</h2>
          <ul>
            <li><a href="#">Art</a></li>
            <li><a href="#">Phorography</a></li>
            <li><a href="#">Domain Names</a></li>
            <li><a href="#">Memes</a></li>
            <li><a href="#">Virtual Worlds</a></li>
            <li><a href="#">Trading  Cards</a></li>
          </ul>
        </div>

        <div class="footlinks">
          <h2>Inform Center</h2>
          <ul>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="blogstyle1.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="newsletter.html">Newsletter</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


 <div id="elevator_item"><a id="elevator" onclick="return false;" title="Back To Top"></a></div>


<!-- Optional JavaScript -->
<script src="assets/js/jquery-2.0.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/comman.js"></script>

</body>
</html>