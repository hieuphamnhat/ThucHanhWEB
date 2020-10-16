<?php
include_once 'database.php';
if(count($_POST)>0) {

mysqli_query($conn,"UPDATE users set  username='" . $_POST['username'] . "', password='" . $_POST['password'] . "' where id='".$_POST['id']."'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Danh sách User</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="username"  value="<?php echo $row['username']; ?>">
<br>
Password: <br>
<input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>