<?php
function loadClass($c)
{
    if (is_file("../controllers/$c.php")) {
        include "../controllers/$c.php";
    } else if (is_file("../models/$c.php")) {
        include "../models/$c.php";
    }
}
spl_autoload_register('loadClass');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Cars & life</title>

    <!--Boostrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!--CSS&JS-->
    <link rel="stylesheet" href="../css_views/login.css">
    <!--Icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <?php
    /* funcion xu ly  */
    function postIndex($index, $value="")
    {
        if (!isset($_POST[$index]))	return $value;
        return trim($_POST[$index]);
    }

    function checkEmail($email){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)==true){
            return true;
        }
        else{
            return false;
        }  
    }
    function checkPhone($string){
        if (preg_match("/^([0-9]\d+)$/",$string)) 
        return true;
      return false;

    } 
    
    
    function checkPass($string)
    {
        /*có ít nhất: 1 số
                      1 viết hoa
                      1 ký tự đặc biệt
                      1 viêt thường  */
        if(preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#*$%]{8,20}$/", $string))
            return true;
        return false;
    }
    ?>
    <?php

        

    if(isset($_POST['btn_signup'])){
        // lấy thông tin người dùng
        $hoKH=postIndex("firstname");
        $tenKH=postIndex("lastname");
        $email=postIndex("email");
        $address=postIndex("address");
        $phone=postIndex("phone");
        $userName=postIndex("username");
        $passWord=postIndex("password");
        $confPassWord=postIndex("retypepassword");
        $error=0;
        if(checkEmail($email)==false){
            $error++;
            $alertMail='Email của bạn không hợp lệ';
        }
        else if(checkPass($passWord)==false){
            $error++;
            $alertPass='Password phải có ít nhất 1 ký tự số 1 ký tự thường 1 ký tự viết hoa và 1 ký tự đặc biệt';
        }
        else if(checkPhone($phone)==false){
            $error++;
            $alertPhone='số điện thoại không được có chữ cái';
        }
        else if(strcasecmp( $passWord, $confPassWord ) != 0 ){
            $error++;
            $alertConfPass='nhập lại Password chưa đúng';
        }
        else if($error==0){
            $user= new Users();
            $soLuongUser=$user->demUser()+1;
            $idUser="kh$soLuongUser";
            $passWordmd5=md5($passWord);
            $user->insertNewUserKhachHang($idUser,$hoKH,$tenKH,$email,$phone,$address,$userName, $passWordmd5);
            header('location:v_login.php');
        } 
        
    }
   
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 content-login">
                <form style="padding: 5px;"action="v_signup.php" method="POST" class="form" role="form">
                    <h2 style="text-align: center; font-family:Georgia, 'Times New Roman', Times, serif">Account Signup</h2>
                    <div class="imgcontainer">
                        <img src="../images/logo/logo.jpg" alt="Avatar" class="avatar">
                    </div>
                    <label>Thông tin</label>
                    <div class="row">
                        <div class="col-xs-6 col-md-6"> 
                            <input class="form-control" name="firstname" placeholder="Họ" required="" autofocus="" type="text">
                        </div>
                        <div class="col-xs-6 col-md-6"> 
                            <input class="form-control" name="lastname" placeholder="Tên" required="" type="text">
                        </div>
                    </div> 
                    <input class="form-control" name="email" placeholder=" Email" type="email">
                    <input class="form-control" name="address" placeholder="Address" type="text">  
                    <input class="form-control" name="phone" placeholder="Phone" type="text"> 
                    <label>Account</label> 
                    <input class="form-control" name="username" placeholder="Username" type="text">  
                    <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
                    <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"> 
                    <div>
                        <?php 
                         if(isset($alertName)){
                             echo $alertName;
                         }else if(isset($alertMail)){
                             echo $alertMail;
                         }else if(isset($alertPass)){
                             echo $alertPass;
                         }else if(isset( $alertPhone)){
                            echo  $alertPhone;
                        }else if(isset($alertPass)){
                            echo $alertPass;
                        }else if(isset($alertConfPass)){
                            echo $alertConfPass;
                        }else if(isset($alertEmty)){
                            echo $alertEmty;
                        }
                        ?>  
                    </div>
                    <button name="btn_signup" type="submit">Đăng ký</button>
                </form>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



    </body>

</html>