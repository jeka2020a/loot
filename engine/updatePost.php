<?php
    session_start();

    require_once "db.php";

    $_id = $_GET['id'];
    $objectID = $_SESSION['_id'];


    $service = $collection->service->find(['_id' => new MongoDB\BSON\ObjectID($_id != null ? $_id : $objectID )])->toArray();


    if (isset($_POST['send']))
    {

        $item_name = $_POST['item_name'];
        $price = $_POST['price'];
        $new_file = $_FILES['image'];
        $path = '../assets/img/service/';
        $old_file = $path . $service[0]['image'];
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
            
            $collection->service->updateOne(
                ['_id' => new MongoDB\BSON\ObjectID($objectID)],
                ['$set' => [
                    'item_name' => $item_name,
                    'price'     => $price,
                    'image'     => $full_time . $_FILES['image']['name'],
                ]],  
            );
            
            move_uploaded_file($_FILES['image']['tmp_name'] , $path . $full_time . $_FILES['image']['name']);
            header("Location: /profile");

            unset($objectID);
            
        }
        elseif ($_FILES['image']['name'] === null) {
            header("Location: /addservice");
            unset($objectID);
        }

    }


?>