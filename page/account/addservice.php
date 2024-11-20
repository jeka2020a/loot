<?php
  session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>CryptoN::Create item</title>
    <meta charset="utf-8">
    <meta name="Googlebot-News" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="robots" content="noimageindex">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" media="all" href="assets/css/bootstrap.min.css?fdsfsf">
    <link rel="stylesheet" media="all" href="assets/css/slick.css?fdf">
    <link rel="stylesheet" media="all" href="assets/css/slick-theme.css?fsdfdsf">
    <link rel="stylesheet" media="all" href="assets/css/style.css?fsdfdsf">
    <link rel="icon" type="image/png" sizes="28x28" href="assets/img/favi.png">
    <link rel="stylesheet" href="assets/css/scrollbar.css">
    <meta name="theme-color" content="#sdfsf">

</head> 

<body class="themebgcolor">
<?php 
    require_once "header.php";
?>
<div class="div__content" style="display: none;">
  <?php echo $_SESSION['user']['username'];?>
</div>
    <div class="create-items mt-3 pt-3 mt-md-4 pt-md-4 mt-lg-5 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 create-form-outer">
                    <div class="title-heading mb-4 pb-2 pb-lg-0 ">
                        <h2 class="headingWh ">Add new service</h2>
                    </div>
                    <div class="create-form">
                        <form action="engine/addPost.php" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <!--
                                <div class="col-6 pb-md-4 pb-3 ">
                                    <div class="img-choosen">
                                        <img src="assets/img/single.svg" class="img-fluid" alt="choose img">
                                        <label>Single Image</label>
                                    </div>
                                </div>
                                <div class="col-6 pb-md-4 pb-3 ">
                                    <div class="img-choosen">
                                        <img src="assets/img/multiple.svg" class="img-fluid" alt="choose img">
                                        <label>Multiple Image</label>
                                    </div>
                                </div>
                                -->

                                <div class="col-lg-12 pb-md-4 pb-3">
                                    <label>Upload file</label>
                                    <div class="custom-file-upload">
                                        <div class="file-upload">
                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" id="image" type='file' onchange="readURL(this);" name="image" accept="image/*"  />
                                                <div class="drag-text">
                                                    <img src="assets/img/upload-icon.svg" class="img-fluid" alt="upload icon">
                                                </div>
                                            </div>
                                            <div class="file-upload-content mt-3">
                                                <div class="title-wrapouter">
                                                    <div class="uploaded-img">
                                                        <img class="file-upload-image" src="#" alt="your image" />
                                                    </div>
                                                    <div class="image-title-wrap">
                                                        <span class="image-title">Uploaded Image Title</span>
                                                        <button type="button" onclick="removeUpload()" class="remove-image"> Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-6 pb-md-4 pb-3">
                                    <label>Price</label>
                                    <input id="price" name="price" type="text" placeholder="Price" class="form-control">
                                </div>
                                <div class="col-md-5 col-6 pb-md-4 pb-3">
                                    <label>Open for Bids</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" checked>
                                    </div>
                                </div>






























                                <div class="col-md-7 pb-md-4 pb-3">
                                    <label>Choose category</label>
                                    <div class="btn-group w-100 pb-md-4">
                                        <input name="category" type="text" placeholder="category" class="filterbtn dropdown-toggle text-start category" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <ul class="dropdown-menu category-menu w-100" aria-labelledby="dropdownMenuButton" style="height: 300px; overflow-y: scroll; overflow-x: hidden; box-shadow: 0px 0px 8px #000;">
                                        </ul>
                                        <input name="category_id" class="category_id hide" type="text">
                                    </div>
                                    <label>Choose subcategory</label>
                                    <div class="btn-group w-100">
                                        <input name="subcategory" type="text" placeholder="subcategory" class="filterbtn dropdown-toggle text-start subcategory" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <ul class="dropdown-menu subcategory-menu" aria-labelledby="dropdownMenuButton" style="height: 300px; overflow-y: scroll; overflow-x: hidden; box-shadow: 0px 0px 8px #000;">
                                            <li><a class="dropdown-item" href="#"></a></li>
                                        </ul>
                                        <input name="subcategory_id" class="subcategory_id hide" type="text">
                                    </div>
                                </div>


















































                                <div class="col-xl-9 pb-md-4 pb-3">
                                    <label>Service name</label>
                                    <input id="service" name="item_name" type="text" placeholder="Enter Name" class="form-control">
                                </div>
                                <div class="col-xl-9 pb-md-4 pb-3">
                                    <label>Description</label>
                                    <textarea id="desc" name="description" class="form-control" placeholder="Enter the description" style="color: #FFF;"></textarea>
                                </div>
                                <!--
                                <div class="col-md-7 col-6 pb-md-4 pb-3">
                                    <label>Royalties</label>
                                    <input type="text" placeholder=" 0,10,20% or more" class="form-control">
                                </div>
                                <div class="col-md-5 col-6 pb-md-4 pb-3">
                                    <label>Unlock once purchased</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    </div>
                                </div>
                                    -->
                                <div class="col-lg-12 pt-3 d-none d-lg-block ">
                                    <button onclick="addPost()" name="send" class="btn btnlightblue m-auto m-md-0 d-table d-md-block">Create</button>
                                </div>
                            </div>
                        </from>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="title-heading mb-4">
                        <h2 class="headingWh ">Preview of service</h2>
                    </div>
                    <div class="aboutitem">
                        <div class="aboutitemImg"><img class="file-upload-image" src="assets/img/item-prev.png" alt="img"></div>
                        <div class="bgdarkbluecolor aboutitemcnt">
                            <div class="itemtitlecode">
                                <h2 class="textgraycolor">Cryptosharks</h2>
                                <h3 class="textwhitecolor">Cryptosharks #92991</h3>
                            </div>
                            <div class="itemtitlePrice">
                                <h2 class="textgraycolor">Price</h2>
                                <h3 class="textwhitecolor"> <strong>0, 006</strong></h3>
                                <!--<h4 class="textgraycolor"><span><img src="assets/img/hearticon.svg"></span> 56</h4>-->
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-1 mb-2 ">
                       <button class="btn btnlightblue savebtn d-block m-auto d-lg-none">Save</button>
                    </div>


                </div>
            </div>
        </div>
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
    <!--  -->
    <div id="elevator_item"><a id="elevator" onclick="return false;" title="Back To Top"></a></div>
    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-2.0.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/comman.js"></script>
    <script>
    function readURL(input) { 
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            removeUpload();
        }
    }
    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
    </script>

    <script src="assets/js/livesearch.js"></script>


</body>

</html>