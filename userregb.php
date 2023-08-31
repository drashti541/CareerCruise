<?php

if( isset($_POST['name']) && 
    isset($_POST['email']) && 
    isset($_POST['pass']) && 
    isset($_POST['cpass'])){

        include "inc/config.php";
  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $data = "name=".$name."&email=".$email."&pass=".$pass."&cpass=".$cpass;

        if(empty($name)) {
            $em = "Name is required";
            header("Location: userreg.php?error=$em&$data");
            exit;

        }else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $em = "Enter valid name";
            header("Location: userreg.php?error=$em&$data");
            exit;
        
        }else if(empty($email) == true){
            $em = "email is required";
            header("Location: userreg.php?error=$em&$data");
            exit;

        }else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $em = "enter valid email";
            header("Location: userreg.php?error=$em&$data");
            exit;

        /*}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
            emailexists();*/
           

        }else if(empty($pass)){
            $em = "Password is required";
            header("Location: userreg.php?error=$em&$data");
            exit;

        }else if(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass)){
            $em = "Please enter atleast 8 character with number, symbol, small and capital letter.";
            header("Location: userreg.php?error=$em&$data");
            exit;

        }else if(empty($cpass)) {
            $em = "Confirm Password is required";
            header("Location: userreg.php?error=$em&$data");
            exit;

        }else if($cpass != $pass){
            $em = "Confirm password should be same as password";
            header("Location: userreg.php?error=$em&$data");
            exit;
        }

        else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $cpass = password_hash($cpass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user_login(name, email, password, cpassword) VALUES(?,?,?,?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$name, $email, $pass, $cpass]);
            header("Location: userlogin.php?success=Account Created");
            exit;
        }    
    }else {
    header("Location: userreg.php?error=error");
    exit;
}
?>