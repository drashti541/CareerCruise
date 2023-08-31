<?php
session_start();
if(isset($_POST['email']) &&
   isset($_POST['pass'])){

    include "../php/config.php";

    
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $data = "email=".$email."&pass=".$pass;
    
     if(empty($email)){
        $em = "Email is required";
        header("Location: userlogin.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "Password is required";
        header("Location: userlogin.php?error=$em&$data");
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

                        header("Location: homepage.php");
                        exit;

                }else{
            $em = "Incorrect password";
            header("Location: userlogin.php?error=$em&$data");
            exit;
    }
            }else{
            $em = "Incorrect email";
            header("Location: userlogin.php?error=$em&$data");
            exit;
    }

        }else{
            $em = "Email is not registered";
            header("Location: userlogin.php?error=$em&$data");
            exit;
    }

}


   }

?>