<?php
session_start();
include('../config/db.php');
if(isset($_GET['email']))
{
$email=$_GET['email'];
$code=$_GET['code'];
$sql1="select * from users where email='$email'";
$query = mysqli_query($conn, $sql1);
if(mysqli_num_rows($query)==1)
{
    $row=mysqli_fetch_assoc($query);
    if($row['activation']==$code)
    {
     $sql2= "UPDATE users SET status = '1' WHERE email='$email'";
     mysqli_query($conn,$sql2); 
     echo "kích hoạt thành công vui lòng quay lại trang đăng nhập";  
     
    }
}
}
?>