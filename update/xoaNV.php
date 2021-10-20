<?php
require("../config/db.php");
if(isset($_REQUEST['manv']) and $_REQUEST['manv']!=""){
$manv=$_GET['manv'];
$sql = "DELETE FROM db_nhanvien WHERE manv='$manv'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
header("Location: /MyProject");
?>