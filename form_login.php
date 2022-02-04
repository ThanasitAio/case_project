<?php
  session_start();
  require_once "db.php";


  $username = $_POST['username'];
  $password = $_POST['password'];
  $hash = password_hash($password, PASSWORD_DEFAULT);


  $stmt = $db->prepare("SELECT * FROM user WHERE username = :username");
  $stmt->bindParam(":username",$username);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if($stmt->rowCount() > 0){
      if($username == @$row['username']){
          $checked = password_verify($password, $hash);
          if($checked){
              if(@$row['group_user'] == 'admin'){
                  echo 'LOGIN ADMIN';
                  exit();
              }else if(@$row['group_user'] == 'user'){
                  echo 'LOGIN USER';
                  exit();
              }  
          }else{
              echo 'ERROR USERNAME';
              exit();
          }
      }else{
          echo 'ERROR USERNAME OR PASSWORD';
          exit();
      }
    }else{
        echo 'ERROR USERNAME OR PASSWORD';
        exit();
    }
     
?>
