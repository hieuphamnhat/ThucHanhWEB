<html>
    <body>
        <h1>Form là GET</h1>
        <?php
            if(isset($_GET['name'])){
                echo "<b>Họ và tên:</b> " . $_GET['name'] . '<br>';
            }
            if(isset($_GET['month']) && isset($_GET['day']) && isset($_GET['year'])){
                echo "<b>Ngày sinh:</b> " . $_GET['day'] . '<br>';
                echo "<b>Tháng sinh:</b> " . $_GET['month'] . '<br>';
                echo "<b>Năm sinh:</b> " . $_GET['year'] . '<br>';
            }
            if(isset($_GET['sex'])){
                echo "<b>Giới tính:</b> " . $_GET['sex'] . '<br>';
            }
            if(isset($_GET['location'])){
                echo "<b>Quê quán:</b> " . $_GET['location'] . '<br>';
            }
            if(isset($_GET['email'])){
                echo "<b>Địa chỉ liên hệ:</b> " . $_GET['email'] . '<br>';
            }
            if(isset($_GET['ghichu'])){
                echo "<b>Ghi chú:</b> " . $_GET['ghichu'] . '<br>';
            }
            if(isset($_GET['level'])){
                echo "<b>Trình độ học vấn:</b> " . $_GET['level'] . '<br>';
            }
            echo "<b>Ngoại ngữ đã biết:</b> ";
            if(isset($_GET['lan'])){
                foreach($_GET['lan'] as $check) {
                    echo $check . ', '; 
                }
            }
            if(!empty($_GET['other'])){
                echo $_GET['other'] . '<br>'; 
            }
            if(isset($_GET['favourite'])){
                echo "<b>Sở thích:</b> " . $_GET['location'] . '<br>';
            }
            echo '<img src="gohan.jpg" class="img-thumbnail w-25 p-3" alt="Responsive image" name="">';
        ?>
    </body>
</html>