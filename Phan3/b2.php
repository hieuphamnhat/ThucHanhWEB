<html>
    <body>
        <h1>Form là POST</h1>
        <?php
            if(isset($_POST['name'])){
                echo "<b>Họ và tên:</b> " . $_POST['name'] . '<br>';
            }
            if(isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year'])){
                echo "<b>Ngày sinh:</b> " . $_POST['day'] . '<br>';
                echo "<b>Tháng sinh:</b> " . $_POST['month'] . '<br>';
                echo "<b>Năm sinh:</b> " . $_POST['year'] . '<br>';
            }
            if(isset($_POST['sex'])){
                echo "<b>Giới tính:</b> " . $_POST['sex'] . '<br>';
            }
            if(isset($_POST['location'])){
                echo "<b>Quê quán:</b> " . $_POST['location'] . '<br>';
            }
            if(isset($_POST['email'])){
                echo "<b>Địa chỉ liên hệ:</b> " . $_POST['email'] . '<br>';
            }
            if(isset($_POST['ghichu'])){
                echo "<b>Ghi chú:</b> " . $_POST['ghichu'] . '<br>';
            }
            if(isset($_POST['level'])){
                echo "<b>Trình độ học vấn:</b> " . $_POST['level'] . '<br>';
            }
            echo "<b>Ngoại ngữ đã biết:</b> ";
            if(isset($_POST['lan'])){
                foreach($_POST['lan'] as $check) {
                    echo $check . ', '; 
                }
            }
            if(!empty($_POST['other'])){
                echo $_POST['other'] . '<br>'; 
            }
            if(isset($_POST['favourite'])){
                echo "<b>Sở thích:</b> " . $_POST['location'] . '<br>';
            }
            echo '<img src="gohan.jpg" class="img-thumbnail w-25 p-3" alt="Responsive image" name="">';
        ?>
    </body>
</html>