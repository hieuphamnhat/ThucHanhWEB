<html>
<body>
Content in textbox is:  
<?php
if(isset($_POST["content"])){
    echo $_POST["content"];
}
?>
</body>
</html>