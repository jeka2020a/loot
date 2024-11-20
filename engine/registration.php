<?php
    session_start();
    require_once "db.php";

    $data = $_POST;
    
    if ($data['pas'] === $data['cpass'])
    {
        $find_username = $collection->users->findOne([
            'username'  => $data['username'],
        ]);
        $find_email = $collection->users->findOne([
            'email'     => $data['email'],
        ]);
        

        if ($find_username->username == $data['username'] || $find_email->email == $data['email'])
        {
            $_SESSION['error'] = "<p class='error'>User exists! Change @username or email!</p>";
            header("Location: /signup");
        }
        elseif ($find_username->username == null && $find_email->email == null)
        {
            //$path = "assets/img/users/" . time() . $_FILES['avatar']['name'];

            //move_uploaded_file($_FILES['avatar']['tmp_name'] , $path);
            
            //print_r($_FILES);

            $collection->users->insertOne([
                
                'surname'   => $data['surname'],
                'name'      => $data['name'],
                'username'  => $data['username'],
                'image'     => $data['avatar'],
                'email'     => $data['email'],
                'password'  => $data['pas'],
                'birthday'  => $data['birthday'],
                'country'   => $data['country'],
                'role'      => $data['role'],
                'image'     => "avatar.png",
                'comments'  => "",
                'rating'    => "",
            ]);

            //$_SESSION['user'] = $data['username'];

            header("Location: /signin");
        }
    }
    else
    {
        $_SESSION['error'] = "<p class='error'>password not correct!</p>";
        header("Location: /signup");
    }
    

?>