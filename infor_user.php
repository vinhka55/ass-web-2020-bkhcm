<?php
    include 'config.php';
    //var_dump(isset($_POST['name'])) ;
    if($_GET["username"]){
        
        $username=$_GET["username"];
        
    }
    if(isset($_POST['name'])&&isset($_POST['number_phone'])&&isset($_POST['address'])&&isset($_POST['gender'])){
        $name=$_POST['name'];
        $number_phone=$_POST['number_phone'];
        $address=$_POST['address'];
        $gender= $_POST['gender'];
        $sql="UPDATE information SET name='$name', number_phone='$number_phone', address='$address' , gender='$gender' WHERE username='$username'";
        if(mysqli_query($conn,$sql)){
            echo 'success';
        }else{
            echo "error";
        }
    }
    
    
    //var_dump($result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1>Welcom <?php echo "<i style='color:green; '>".$username."</i>"?> to information page</h1>
            <form action="infor_user.php?username=<?php echo $username?>" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Họ tên</label>
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ví dụ : Nguyễn Văn A">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput1">Số điện thoại</label>
                    <input name="number_phone" type="text" class="form-control" id="formGroupExampleInput1" placeholder="Ví dụ : 0977419999">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Địa chỉ</label>
                    <input name="address" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ví dụ : Linh Trung , Thủ Đức , Hồ Chí Minh">
                </div>

                <p>Giới tính</p>
                <div class="form-check">                  
                    <input class="form-check-input" type="radio" name="gender" id="male" value="nam">
                    <label class="form-check-label" for="male">
                        Nam
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" name="gender" id="female" value="nữ">
                    <label class="form-check-label" for="female">
                        Nữ
                    </label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
                
            </form>  
            </div>
        </div>
    </div>
    
</body>
</html>