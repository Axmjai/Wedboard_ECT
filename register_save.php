<?php      
    
    $login=$_POST['login'];
    $password=$_POST['pwd'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];

    $con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql="INSERT INTO user (login,password,name,gender,email,role)
    VALUES ('$login','$password','$name','$gender','$email','m')";
    $con->exec($sql);
    $con=null;
    header("location:login.php");

?>