<?php
    require_once "../db.php"; 
    $ITEM_CODE = $_POST['ITEM_CODE'];
    $ITEM_NAME = $_POST['ITEM_NAME'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $COLOR = $_POST['COLOR'];
    $COST = $_POST['COST'];
    $CURRENCY = $_POST['CURRENCY'];
    $PRICE = $_POST['PRICE'];
    $CATEGORY = $_POST['CATEGORY'];
    $BRAND = $_POST['BRAND'];
    $VERSION = $_POST['VERSION'];
    $CREATE_BY = $_POST['CREATE_BY'];
    $SUPPLIER = $_POST['SUPPLIER'];
    $STOCK = $_POST['STOCK'];

    
    $image_file = $_FILES['IMAGE']['name'];
    $type = $_FILES['IMAGE']['type'];
    $size = $_FILES['IMAGE']['size'];
    $temp = $_FILES['IMAGE']['tmp_name'];

    $path = "../img/" . time() . $image_file;

     if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
        if (!file_exists($path)) { 
            if ($size < 5000000) { 
               move_uploaded_file($temp, '../img/' . $image_file); 
            }else{
                echo 'Your file too large';
                exit();
            }
        }else{
            echo 'File already exists';
            exit();
        }
    }else{
        echo 'Upload';
        exit();
    }

/*
    $select_stmt = $db->prepare("SELECT * FROM product WHERE Item_code  = :Item_code ");
    $select_stmt->bindParam(":Item_code ",$ITEM_CODE);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    $Item_code_check = @$row['Item_code'];
*/
?>