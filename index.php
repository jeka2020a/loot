<?php
    session_start();

    require "engine/router.php";

    $url = key($_GET);

    $Router = new Router();

    $Router->addRoute("/" , "home.php");


    $Router->addRoute("/cart" , "account/cart.php");
    $Router->addRoute("/addservice" , "account/addservice.php");
    $Router->addRoute("/profile" , "account/profile.php");
    $Router->addRoute("/adjustment" , "account/editAccount.php");
    $Router->addRoute("/edit" , "account/edit.php");
    $Router->addRoute("/logout" , "logout.php");
    $Router->addRoute("/arbitration" , "arbitration.php");  
    $Router->addRoute("/seller" , "seller.php");  
    $Router->addRoute("/services" , "services.php");  
    $Router->addRoute("/faq" , "faq.php"); 
    $Router->addRoute("/service" , "service.php");  
    $Router->addRoute("/signin" , "signin.php");
    $Router->addRoute("/signup" , "signup.php");
    $Router->addRoute("/404" , "404.php");
    //$Router->addRoute("/blog" , "blog.php");    
    
    $Router->route("/" . $url);

?>