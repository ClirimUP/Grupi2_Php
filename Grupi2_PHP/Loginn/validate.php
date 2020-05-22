<?php

$myemail = 'clirimslim@gmail.com';
$mypass="12345";
$myemail = 'besianshabani3@gmail.com';
$mypass="besi123.";
$myemail = 'xhemailiadhurim@gmail.com';
$mypass="12345678";
if(isset($_POST['login'])){
    $email = $_POST['email'];
     $pass = $_POST['password'];
    if($email ==$myemail and $pass==$mypass){
        if(isset( $_POST['remember'])){
        setcookie('email', $email, time()+60*60*7);
        setcookie('pass', $pass, time()+60*60*7);
        }
        session_start();
        $_SESSION['email'] =$email;
        header("location: ../Home Page/HomePage.php");
    }
else{
        echo "Email is Invalid. <br> <a href='login.php'> try again</a>";
    }
}else{
    header("location: login.php");
}
?>

