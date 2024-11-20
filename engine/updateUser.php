<?php

    session_start();
    require_once "db.php";

    $session__user = $_SESSION['user']['username'];
    $user          = $collection->users->find(['username' => $session__user])->toArray();
    

    

    if (isset($_POST['send']))
    {

        $item_name = $_POST['item_name'];
        $price = $_POST['price'];

        $name = $_POST['firstname'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];


        $new_file = $_FILES['image'];
        $path = '../assets/img/users/';
        $old_file = $path . $user[0]['image'];
        $hour = date("H"); 
        $minute = date("i");
        $username = $_SESSION['user']['username'];
        $day = date('w');
        $year = date('Y');
        $local_hour = (int) $hour - 1; // убрать после тестирования и оставить просто $hour (на локальном сервере отстает время)
        $full_time = $username . $day  . $local_hour . $minute . $year;



        

        //$category
        //$subcategory
        // add few files
        // delete old image ******************** and replace new image


        
        if ($_FILES['image']['name'] !== null)
        {
            unlink($old_file);
            
            $collection->users->updateOne(
                ['username' => $session__user],
                ['$set' => [
                    'name'      => $name,
                    'surname'   => $surname,
                    'image'     => $full_time . $_FILES['image']['name'],
                    //'birthday'  => $birthday,
                    'password'  => $password,
                ]],  
            );
            
            move_uploaded_file($_FILES['image']['tmp_name'] , $path . $full_time . $_FILES['image']['name']);
            header("Location: /profile");

            unset($objectID);
            
        }
        elseif ($_FILES['image']['name'] === null) {
            header("Location: /adjustment");
            unset($objectID);
        }

    }

?>