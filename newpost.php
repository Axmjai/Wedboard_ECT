<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION['id']) && $_SESSION['username']){
            echo "<br><div style='float: left;'>       
            ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;&nbsp;<br><br>
                </div>";
        }
        else{
            header("location:index.php");
            die();
        }

?>
<br><br>
   <hr>   
    <br><form style="text-align: left;">
    หมวดหมู่ : 
    <select name="Category">
        <option value="all">--ทั้งหมด--</option>
        <option value="General">เรื่องทั่วไป</option>
        <option value="Study">เรื่องเรียน</option>
    </select>
    <table align="left"><tr><td> หัวข้อ : </td>
    <td>  <input type="text">  </td></tr>
    <tr><td>เนื้อหา : </td> <td><textarea name="MS" rows="5px" cols="21px">
        </textarea> 
    </td></tr> <br>

    
<tr><td></td><td colspan="2"><input type="submit" value="บันทึกข้อความ"></td></tr>
    <br>
    </table>

    </form>
</hr>



    </form>
 </body>
</html>