<?php

    session_start();


    require_once "db.php";


    
    $username = $collection->users->findOne([       // create second query , which search password 
        'username' => $_POST['username'],
    ]);
    $password = $collection->users->findOne([       
        'password' => $_POST['pass'],
    ]);

    if ($username->username == $_POST['username'] && $password->password == $_POST['pass'])
    {
        $_SESSION['user'] = [
            'username' => $username->username,
        ];
        header("Location: /profile");
    }
    elseif ($username->username == $_POST['username'] && $password->password != $_POST['pass']) 
        echo "Forgot password?";
    else
        echo "User not exists! Registration!";

?>