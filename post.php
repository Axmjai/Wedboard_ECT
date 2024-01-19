<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<h1 style="text-align: center;">Wedboard Suphakorn</h1>
    <hr>   
<div style="text-align: center;">
<?php 
    $id = $_GET['id']; 
    echo "ต้องการดูกระทู้หมายเลข $id <br>";
    if(($id %2)==0){
        echo "เป็นกระทู้หมายเลขคู่";
    }
    else{
        echo"เป็นกระทู้หมายเลขคี่";
    }
    
    ?>
        
</div>

<table style="border:2px solid black;width: 40%;" align="center">

      <tr><td colspan="2" style="background-color: #6cd2fe;">เเสดงความคิดเห็น</td></tr><br>
       <tr><td colspan="1"><textarea name="MS" rows="20%" cols="100%">
        </textarea>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"> </td></tr>
    </td></tr> 
        

      </table>
      <div style="text-align: center;">
      <br>
                 <a href="index.php">กลับไปหน้าหลัก</a>
            </div>
      <Form>
        
    </Form>
</body>
</html>