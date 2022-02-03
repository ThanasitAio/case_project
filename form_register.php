<?php
    session_start();
    require_once "db.php";
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $create_date = date("Y-m-d H:i:s");

    $sql ="SELECT * FROM `user` WHERE username = :username";
    $select_stmt = $db->query($sql);
    $select_stmt->bindParam(":username",username);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    $username_check = $row['username'];

     if($username_check == ''){
            $G_user = 'user';
            $new_password = password_hash($password, PASSWORD_DEFAULT);
            $sql1 = "INSERT INTO user (username, email, password, first_name, last_name, create_date, group_user) VALUES (:username,:email,:password,:first_name,:last_name,:create_date,:group_user)";
            $insert_stmt = $db->prepare($sql1);
            $insert_stmt->bindParam(":username",$username);
            $insert_stmt->bindParam(":email",$email);
            $insert_stmt->bindParam(":password",$new_password);
            $insert_stmt->bindParam(":first_name",$first_name);
            $insert_stmt->bindParam(":last_name",$last_name);
            $insert_stmt->bindParam(":group_user",$G_user);
            $insert_stmt->bindParam(":create_date",$create_date, PDO::PARAM_STR);
            $result = $insert_stmt->execute();
         
             $sql ="SELECT * FROM `user` WHERE username = :username";
            $select_stmt = $db->query($sql);
            $select_stmt->bindParam(":username",username);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            $new_username = $row['username'];
            if( $new_username == ''){
               echo 'ERROR FALSE';
               exit(); 
            }else{
                echo 'Register';
                exit(); 
            }
        }else {
             echo 'USERNAME FALSE';
             exit();
     }


        
   
?>
