<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Wedboard</title>
</head>
<body>
    <div class="container">
    <h1 style="text-align: center;" class="mt-3">Wedboard Suphakorn</h1>
    <?php include "nav.php" ?>

<div class="mt-3 d-flex justify-content-between">
    <div>
        <label> หมวดหมู่ </label>
            <span class="dropdown" >
  <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    --ทั้งหมด--
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
    <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
    <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
  </ul>
</span>
    </div>
            <?php if(isset($_SESSION['id'])){ ?>
                <div><a href="newpost.php" class="btn btn-success btn-sm">
                    <i class="bi bi-plus"></i> สร้างกระทู้ใหม่</a></div>
                <?php } ?>
                </div>
        <?php
   // if(!isset($_SESSION['id'])){
   //     echo "<a href=login.php style='float: right;'>เข้าสู่ระบบ</a>";
   // }
   // else{
   //     echo "<div style='float: right;'>
   //     ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;&nbsp;
    //    <a href=logout.php>ออกจากระบบ</a>
   //     </div>";
   // }
        ?>
    
</form>     
        <table class="table table-striped mt-4">
           
           <?php 
                for($n = 1 ;$n <=10;$n++){
                    echo "<tr><td class='d-flex justify-content-between'><a href=post.php?id=$n style=text-decoration:none>กระทู้ที่ $n</a>";
                        if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
                            echo "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$n class='btn btn-danger btn-sm me-2'><i class='bi bi-trash3-fill'></i></a>"; 
                    }
                    echo "</td></tr>";
                }
                
            
            ?>
        </table>
            </div>

</body>
</html>