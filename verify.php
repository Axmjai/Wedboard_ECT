<?php   
    session_start();
?>

<?php
 
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>

   <div style="text-align: center;">
   <?php
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    if($login == 'admin' && $pwd == '1234'){
        $_SESSION['username']='ADMIN';
        $_SESSION['role']='a';
        $_SESSION['id']=session_id();
        header("location:index.php");
        die();
   // echo "ยินดีต้อนรับคุณ ADMIN <br>";
    
    }
    elseif($login == 'member' && $pwd == '1234'){
        $_SESSION['username']='MEMBER';
        $_SESSION['role']='m';
        $_SESSION['id']=session_id();
        header("location:index.php");
        die();
    //    echo "ยินดีต้อนรับคุณ MEMBER <br>";
    }
    else{
        $_SESSION['error']='error';
        header("location:login.php");
        die();
      //  echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
    }
        ?>
        </div>
        
    
</body>
</html>