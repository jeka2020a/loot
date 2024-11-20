<?php
    session_start();

    require_once "db.php";

    $file = $_FILES['image'];
    $path = '../assets/img/service/';


    $hour = date("H"); 
    $minute = date("i");


    $data = $_POST;
    $username = $_SESSION['user']['username'];
    $time_create = date("H:i:s");
    $date_create = date("Y-m-d");
    $day = date('w');
    $year = date('Y');
    $local_hour = (int) $hour - 1; // убрать после тестирования и оставить просто $hour

    $full_name = $username . $day  . $local_hour . $minute . $year;

    
        if ($_FILES['image']['name'] !== null)
        {
            $insertOneResult = $collection->service->insertOne([
                'item_name' => $data['item_name'],
                'description' => $data['description'],
                'creator' => $username,
                'price' => $data['price'],
                'time_create' => $time_create,
                'date_create'  => $date_create,
                'category'      => $data['category'],
                'category_id' => (int) $data['category_id'],
                'subcategory' => $data['subcategory'],
                'subcategory_id'    => (int) $data['subcategory_id'],
                'image' => $full_name . $_FILES['image']['name'],
             ]);

            move_uploaded_file($_FILES['image']['tmp_name'] , $path . $full_name . $_FILES['image']['name']);
            header("Location: /profile");
        }
        elseif ($_FILES['image']['name'] === null) {
            header("Location: /addservice");
        }
     

?>