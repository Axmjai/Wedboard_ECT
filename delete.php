<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
        $id = $_GET['id'];
        echo "<br>ลบกระทู้ หมายเลข : $id <br>";
}
else{
    header("location:index.php");
    die();
}

?>