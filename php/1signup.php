<?php

if(isset($_POST['name']) && 
   isset($_POST['email']) &&
   isset($_POST['password']) &&
   isset($_POST['cpassword'])){

    include "config.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $data = "name=".$name."&email=".$email;
    
    if(empty($name)){
        $em = "Name is required";
        header("Location: reg.php?error=$em&$data");
        exit;
    }else if(empty($email)){
        $em = "Email is required";
        header("Location: reg.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "Password is required";
        header("Location: reg.php?error=$em&$data");
        exit;
    }else if(empty($cpass)){
        $em = "Confirm Password is required";
        header("Location: reg.php?error=$em&$data");
        exit;
    }else{
        

        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $cpass = password_hash($cpass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_registration(name, email,password, cpassword)
        VALUES(?,?,?,?)";

        $stmt =  $conn->prepare($sql);
        $stmt->execute([$name, $email, $pass, $cpass]);
        header("Location: reg.php?success=Account Created");
        exit;
    }

}
else{
    header("Location: reg.php?error=error");
}


?>