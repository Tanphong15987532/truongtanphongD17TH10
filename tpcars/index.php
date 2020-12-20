<?php
session_start();
function loadClass($c)
{
    if (is_file("controllers/$c.php")) {
        include "controllers/$c.php";
    } else if (is_file("models/$c.php")) {
        include "models/$c.php";
    }
}

spl_autoload_register('loadClass');

//require("models/config.php");
// include_once('models/database.php');
// include('models/m_khachhang.php');
//include('controllers/khachhang.php');
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!--CSS&JS-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.js">

    <!--Icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!--Navbar-Menu-->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: rgb(226, 25, 25)">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home"><i class="fas fa-home"></i></a></li>
                    <li><a href="#gioithieu">Giới thiệu</a></li>
                    <li><a href="#hangxe">Hãng xe</a></li>
                    <li><a href="#banggia">Bảng giá</a></li>
                    <li><a href="#lienhe">Liên hệ</a></li>
                    <?php
                    if (isset($_SESSION['ten_kh'])) {
                        $tenKH=$_SESSION['ten_kh'];
                        echo '<li style="padding-top: 10px;">';
                        echo '<div class="dropdown">';
                        echo '<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-user-circle" style="font-size:20px"></i> Hi! ' . $tenKH;
                        echo '</button>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="views/v_profile.php">Thông tin</a></li>';
                        echo '<li><a href="views/v_logout.php">Đăng xuất</a></li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</li>';
                    } else {
                        echo '<li><a href="views/v_login.php">Đăng nhập</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--EndNav-Menu-->

    <!--Home-->
    <div class="jumbotron text-center">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" id="home">
                <div class="item active">
                    <img src="images/jum/pagani.jpg" alt="" width="1200" height="700">

                </div>
                <div class="item">
                    <img src="images/jum/ferrari.jpg" alt="" width="1200" height="700">

                </div>
                <div class="item">
                    <img src="images/jum/koenigsegg.jpg" alt="" width="1200" height="700">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--End-Home-->


    <!-- Container (giới thiệu) -->
    <div class="container-fluid" id="gioithieu">
        <div class="row">
            <div class="col-sm-12" id="content-gioithieu">
                <div id="name">
                    <h2 style="font-style: italic; font-family: 'Times New Roman', Times, serif;">TP CAS Việt Nam</h2>
                    <p>Vượt qua mọi thách thức với phong cánh riêng của mình</p>
                </div>
                <div class="container">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><strong>Giới
                                            thiệu TP Cars Việt Nam</strong></a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>
                                        <h4>Được thành lập vào năm 2020, công ty Tp Cars Việt Nam với ngành sản phẩm chính
                                            là bán xe ô tô. Sau hơn vài tháng có mặt tại Việt Nam, TP Cars Việt Nam đã không
                                            ngừng phát triển và trở thành một trong những công
                                            ty dẫn đầu trong lĩnh vực bán ô tô uy tín tại thị trường Việt Nam. Với hơn 500
                                            công nhân viên,10 chi nhánh khắp cả nước. TP Cars Việt Nam tự hào mang đến cho
                                            khách hàng những sản phẩm chất lượng cao, dịch vụ
                                            tận tâm và những đóng góp vì một xã hội giao thông lành mạnh. Với khẩu hiệu
                                            “Vượt qua mọi thách thức với phong cánh riêng của mình”, TP mong muốn được chia
                                            sẻ và cùng mọi người thực hiện ước mơ thông qua việc
                                            tạo thêm ra nhiều niềm vui mới cho người dân và xã hội. Đến với TP Cars bạn sẽ
                                            có cơ hội sở hữu những mẫu siêu xe hàng đầu thế giớ cùng với những dịch vụ chăm
                                            sóc khách hàng tốt nhất.</h4>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><strong>Nhiệm
                                            vụ và tầm nhìn của TP CARS</strong></a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        <h4><strong>Nhiệm vụ:</strong> Mục tiêu của TP Cars được đúc kết trong câu 'Vượt qua
                                            mọi thách thức với phong cách riêng của mình', có thể hiểu là động lực, là ý
                                            nghĩa của mọi việc chúng tôi thực hiện. 'Vượt qua mọi
                                            thách thức với phong cách riêng của mình' là lời thúc đẩy phải đạt được nhiều
                                            hơn, tiến xa hơn những mục tiêu ngay trước mắt. Tinh thần quả cảm đó là sức sống
                                            của thương hiệu, hoặc theo cách gọi của chúng tôi
                                            - ADN của thương hiệu.<br> <br>
                                            <strong>Tầm nhìn:</strong>Giữa những biến đổi, tinh thần ấy giúp định hướng cho
                                            chiến lược kinh doanh hòa hợp và bền vững, và cho mọi quyết định. Tinh thần đó
                                            được thể hiện qua Tầm nhìn 2039 – con đường đến
                                            với di chuyển bền vững, tìm các nguồn năng lượng xanh, and duy trì quan hệ đối
                                            tác chiến lược cho các hãng xe lớn của thế giới.
                                    </p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container (giới thiệu) -->


    <!--Container (Hãng xe)-->
    <div id="hangxe" class="container-hangxe" style="height: 617px; padding-top: 100px;">
        <h1 style="text-align: center;font-family: 'Times New Roman', Times, serif;"><strong style="color: rgb(226, 25, 25);">Hãy chọn hãng xe bạn quan tâm</strong></h1>
        <form action="views/v_search.php" method="POST" class="form-inline d-flex justify-content-center md-form form-sm mt-0" style="text-align: center; margin-top: 30px;">
            <input  class="form-control form-control-sm ml-3 w-75" size="40" type="text" placeholder="Nhập tên xe cần tìm..." aria-label="Search" name="text">
           <button type="submit" class="btn btn-danger" name="btn_search"><span class="glyphicon glyphicon-search"></span> Tìm
                kiếm</button>   
        </form>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" style="margin-top: 30px;">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=ast"><img src="images/logoHang/aston.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=ben"><img src="images/logoHang/bentley.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=bug"><img src="images/logoHang/bugatti.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=fer"><img src="images/logoHang/ferrari.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=koe"><img src="images/logoHang/koenigsegg.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=lam"><img src="images/logoHang/lambor.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=lan"><img src="images/logoHang/land-rover.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=may"><img src="images/logoHang/maybach.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=mcl"><img src="images/logoHang/mclaren.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=pag"><img src="images/logoHang/pagani.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=rol"><img src="images/logoHang/roll-royce.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="views/v_showxe.php?id=por"><img src="images/logoHang/porsche.jpg" alt="" style="text-align: center;"></a>
                    </div>
                </div>
            </div>

            <!--left right control-->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!--End Container (Hãng xe)-->


    <!--Container (Bảng giá)-->

    <?php

    //include_once('models/database.php');
    //include('models/m_xe.php'); 
    include 'views/v_giatheohangxe.php'
    ?>
    <!--End Container (Bảng giá)-->


    <!--Container (Liên hệ)-->
    <div id="lienhe" class="container-fluid bg-grey" style="height: 517px; padding-top: 100px;">
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