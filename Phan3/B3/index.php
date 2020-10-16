<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Đọc dữ liệu</title>
 <link rel="stylesheet" href="style.css">
 </head>
<body>
<a href="insert.html">Thêm</a>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>ID</td>
    <td>Username</td>
    <td>Password</td>
    <td>Action</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td ><?php echo $row["id"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td>
        <a href="delete-process.php?id=<?php echo $row["id"]; ?>">Xóa</a>
        <a href="update.php">Sửa</a>
    </td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "Không có bản ghi nào";
}
?>
 </body>
</html>