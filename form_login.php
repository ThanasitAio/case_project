<?php
    session_start();
    require_once "db.php";


    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = :username";
    $select_stmt = $db->query($sql);
    $insert_stmt->bindParam(":username",$username);
    $insert_stmt->bindParam(":password",$password);
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

    try {
        $select_stmt = $db->prepare("SELECT * FROM tbl_user WHERE username = :uname OR email = :uemail");
        $select_stmt->execute(array(':uname' => $username, ':uemail' => $email));
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

        if ($select_stmt->rowCount() > 0) {
            if ($username == $row['username'] OR $email == $row['email']) {
                if (password_verify($password, $row['password'])) {
                    echo 'LOGIN USER';
                    exit();
                } else {
                    $errorMsg[] = "Wrong password!";
                }
            } else {
                $errorMsg[] = "Wrong username or email";
            }
        } else {
            $errorMsg[] = "Wrong username or email";
        }
    } catch(PDOException $e) {
        $e->getMessage();
    }



    
    


    




?>