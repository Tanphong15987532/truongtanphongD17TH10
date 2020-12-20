<?php
session_start();
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

    /*include('../models/config.php');
    include('../controllers/login.php');*/

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
    <?php
    if (isset($_POST["btn_submit"])) {
        // lấy thông tin người dùng
        $userName = $_POST["username"];
        $passWord = md5($_POST["password"]);
        $loginAcc = new users();
        $result = $loginAcc->checkAccont($userName, $passWord);
        if (empty($userName) || empty($passWord)) {
            $alert = "Username và Password không được rỗng !!!";
        } else {
            if ($result == false) {
                $alert = "Username và Password chưa đúng !!!";
            } else {
                $result2 = $loginAcc->getTenUser($userName, $passWord);
                $idUser=$loginAcc->getIdUser($userName, $passWord);
                $_SESSION['ten_kh'] = $result2;
                $_SESSION['id_user']=$idUser;
                header('Location:../index.php');
            }
        }
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 content-login">


                <form action="v_login.php" method="POST">
                    <h2 style="text-align: center; font-family:Georgia, 'Times New Roman', Times, serif">Account Login</h2>
                    <div class="imgcontainer">
                        <img src="../images/logo/logo.jpg" alt="Avatar" class="avatar">
                    </div>

                    <div class="alert">
                        <p>
                            <?php
                            if (isset($alert))
                                echo $alert;

                            ?>
                        </p>
                        <div>

                            <div class="container">
                                <label for="username"><b>Username</b></label><br>
                                <input type="text" placeholder="Enter Username" name="username"><br>

                                <label for="password"><b>Password</b></label><br>
                                <input type="password" placeholder="Enter Password" name="password">

                                <button type="submit" name="btn_submit">Login</button>
                                <div style="text-align: center; padding-top: 20px;">
                                    <p>Create an account? <a href="v_signup.php">Sign up</a> </p>
                                </div>
                            </div>
                </form>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



</body>

</html>