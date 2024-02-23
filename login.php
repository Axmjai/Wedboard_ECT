<?php
    session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    
    }
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
    <title>LOGIN</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center;" class="mt-3"> Login <br>Wedboard Suphakorn</h1>

    <?php include "nav.php" ?>
    
    <div class="row mt-4">
        <div class="col-lg-4 col-md-3 col-sm-2 col-1" ></div>
        <div class="col-lg-4 col-md-6 col-sm-8 col-10">
            <?php    
                    if(isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger">ชื่อบัชญีหรือรหัสผ่านไม่ถูกต้อง</div>
                  <?php  }  unset($_SESSION['error']) ?>         
            
            <div class="card">
                <div class="card-header"> เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="verify.php" method="post">
                    <div class="form-group">
                        <label for="user" class="form-lable ">Login:</label>
                        <input type="text" id="user" class="form-control mt-2" name="login" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="pwd" class="form-label mt-1 ">Password:</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" required>
                    </div>
                    <div class="mt-3 d-flex justify-content-center">

                        <button type="submit" class="btn btn-secondary btn-sm me-2">Login</button>
                        <button type="reset"  class="btn btn-danger btn-sm">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
    </div>
    </form>
    <br>
    <div style="text-align: center;">
        ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a>
    </div>
               
</form>
</div>
</body>
</html>