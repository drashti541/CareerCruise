<?php
session_start();
if(isset($_POST['email']) &&
   isset($_POST['password'])){

    include "config.php";

    
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $data = "email=".$email."&password=".$pass;
    
     if(empty($email)){
        $em = "Email is required";
        header("Location: 0login.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "Password is required";
        header("Location: 0login.php?error=$em&$data");
        exit;
    }else{
        

        $sql = "SELECT * FROM user_registration WHERE email= ?";

        $stmt =  $conn->prepare($sql);
        $stmt->execute([$email]);

        if($stmt->rowCount()==1){
            $user = $stmt->fetch();

            $name = $user['name'];
            $emailid = $user['email'];
            $password = $user['password'];
            $cpass = $user['cpassword'];
            $id = $user['id'];

            if($email === $emailid){
                if(password_verify($pass,$password)){
                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $name;

                        header("Location: ../html/2homepage.php");
            exit;

                }else{
            $em = "Incorrect username or password";
            header("Location: 0login.php?error=$em&$data");
            exit;
    }
            }else{
            $em = "Incorrect username or password";
            header("Location: 0login.php?error=$em&$data");
            exit;
    }

        }else{
            $em = "Incorrect username or password";
            header("Location: 0login.php?error=$em&$data");
            exit;
    }

}


   }

?>