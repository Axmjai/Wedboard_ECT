<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1 style="text-align: center;"> Login Wedboard Suphakorn</h1>
    <hr>
    <form action="verify.php" method="post">
    <table style="border:2px solid black;width: 30%;" align="center">
        <tr><td colspan="2" style="background-color: #bde2f1;text-align: center;">เข้าสู่ระบบ</td></tr>
        <tr><td>LOGIN</td><td><input type="text" name="login" size="50" required></td></tr>
        <tr><td>PASSWORD</td><td><input type="password" name="pwd" size="50" required></td></tr>
        
        <tr><td colspan="2" align="center"><input type="submit" value="LOGIN"> </td></tr>
    </table>
    <br>
    <div style="text-align: center;">
        ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a>
    </div>
               
</form>

</body>
</html>