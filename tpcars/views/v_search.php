<?php
session_start();

function loadClass($c)
{
    if (is_file("../controllers/$c.php")) {
        include "../controllers/$c.php";
    } else if (is_file("../models/$c.php")) {
        include "../models/$c.php";
    }
}

spl_autoload_register('loadClass');
/*include('../controllers/image.php');
include('../models/config.php');
include('../models/m_xe.php');
include('../controllers/xe.php');
include('../models/m_khachhang.php');
include('../controllers/khachhang.php');*/
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
    <link rel="stylesheet" href="../css_views/showxe.css">
    <link rel="stylesheet" href="style.js">

    <!--Icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!--Navbar-Menu-->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: rgb(226, 25, 25);">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="#lienhe">Liên hệ</a></li>
                    <?php
                    if (isset($_SESSION['ten_kh'])) {
                        $tenKH = $_SESSION['ten_kh'];
                        echo '<li style="padding-top: 10px;">';
                        echo '<div class="dropdown">';
                        echo '<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-user-circle" style="font-size:20px"></i> Hi! ' . $tenKH;
                        echo '</button>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="v_profile.php">Thông tin</a></li>';
                        echo '<li><a href="v_logout.php">Đăng xuất</a></li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</li>';
                    } else {
                        echo '<li><a href="v_login.php">Đăng nhập</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--EndNav-Menu-->

    <!--content-->

    <div class="container text-center">
        <div class="panelgioithieu">
            <h2>TP Cars Việt Nam</h2>
            <p>TP CARS luôn mang đến trải nghiệm tuyệt vời nhất cho bạn </p>
        </div>
        <div class="row">
            <?php
             if (isset($_POST["btn_search"])) {

                $text = $_POST['text'];
                if($text!=''){
                $xe = new xe();
                $arrayxe = $xe->timXe($text);
                if($arrayxe!=null){
                $anh = new image();
                foreach ($arrayxe as $item) {
                    $arrAnh = $anh->dsTenAnhTheoIdXe($item['id_xe']);
                        foreach ($arrAnh as $value) {
                            foreach ($value as $value2) {
                                $tenAnh = $value2;
                            }
                        }
            ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    
                        <img <?php echo 'src="../images/hangxe/' . $item['id_hang'] . '/' . $tenAnh . '"' ?> style="width:100%">
                        <div class="caption">
                            <p><?php echo $item['ten_xe']?></p>
                            <p><?php echo '$' . number_format($item['gia']);?></p>
                            <a <?php echo 'href="v_chitietxe.php?idxe='.$item['id_xe'].'"'?> class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    
                </div>
            </div>
            <?php
                    }
                }else{
                    
                    echo"<h1>không tìm thấy xe tương ứng !!!</h1>";
                }
            }else{
                echo"<h1>bạn chưa nhập tên xe</h1>";
            }
            }
            ?>
          




    </div>
    <!--end container fluid-->


    <!--End content-->


    <!--Container (Liên hệ)-->
    <div id="lienhe" class="container-fluid bg-grey">
        <h1 class="text-center"><strong style="color: rgb(226, 25, 25);">Chăm sóc khách hàng</strong></h1>
        <div class="row" style="padding-top: 50px;">
            <div class="col-sm-5" style="font-size: 17px;">
                <p><strong style="color: rgb(226, 25, 25);">Thông tin liên lạc:</strong></p>
                <p><span class="glyphicon glyphicon-map-marker" style="color: rgb(226, 25, 25);"></span> Trụ sở
                    chính: 180 Đường Cao Lỗ, Phường 4, Quận 8, Thành phố Hồ Chí Minh, Việt Nam</p>
                <p><span class="glyphicon glyphicon-phone" style="color: rgb(226, 25, 25);"></span> 09080888888</p>
                <p><span class="glyphicon glyphicon-send" style="color: rgb(226, 25, 25);"></span> tpcars@gmail.com
                </p>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name " name="name" placeholder="Nhập họ và tên của bạn" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Nhập email của bạn" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Mời bạn để lại bình luận ..." rows="5"></textarea><br>
                <div class="row ">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit"><span class="glyphicon glyphicon-envelope" style="color: rgb(226, 25, 25);"></span>
                            Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Container (Liên hệ)-->
    <!--footer-->
    <footer class="container-fluid text-center" style="padding-top: 20px;">
        <a href="#home">
            <span class="glyphicon glyphicon-home" style="color: rgb(226, 25, 25);">
        </a>
        <p>Bản quyền © 2020 TP Cars Company</p>
    </footer>
    <!--footer-->
</body>

</html>