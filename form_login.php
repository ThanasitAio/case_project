<?php
    session_start();
    require_once "db.php";


    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
    $select_stmt = $db->query($sql);
    $insert_stmt->bindParam(":username",$username);
    $insert_stmt->bindParam(":password",$new_password);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
 
    if ($select_stmt->rowCount() > 0) {  
                $_SESSION['username'] = $row['user_id'];
              
                if($row['group_user'] == 'admin'){
                    echo 'LOGIN ADMIN';
                    exit();
                }else if($row['group_user'] == 'user'){
                    echo 'LOGIN USER';
                    exit();
                }       
    }else{
        echo 'ERROR USERNAME OR PASSWORD';
        exit();
    }

   



    
    


    




?>
