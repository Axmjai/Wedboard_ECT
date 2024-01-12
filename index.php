<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedboard</title>
</head>
<body>
    <h1 style="text-align: center;">Wedboard Suphakorn</h1>
    <hr>   
    <form>
    หมวดหมู่ : 
    <select name="Category">
        <option value="all">--ทั้งหมด--</option>
        <option value="General">เรื่องทั่วไป</option>
        <option value="Study">เรื่องเรียน</option>
    </select>
    <a href="login.html" style="float: right ;">เข้าสู่ระบบ</a>
</form>     
       
       
            <?php 

                for($n = 1 ;$n <=10;$n++){
                    echo "<li><a href=post.php?id=$n>กระทู้ที่ $n</a></li>";
                }
                
            ?>
            






</body>
</html>