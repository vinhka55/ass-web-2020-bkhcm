<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
?>


<?php
        
        include('config.php');

        $username =$_POST['username'];
        $password =$_POST['password'];
        $sql = "SELECT * FROM tai_khoan WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $id = $row = '';
            while($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $loai = $row['loai'];
            }
            echo "1";
            $_SESSION['id_login'] = $id;
            $_SESSION['type_login'] = $loai;
          
        }
        $conn->close();   
?>