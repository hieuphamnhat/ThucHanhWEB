<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Xóa</title>
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>Username</td>
<td>Password</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>