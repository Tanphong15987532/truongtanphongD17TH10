-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2020 lúc 04:49 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbtpcar2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_xe`
--

CREATE TABLE `hang_xe` (
  `id_hang` varchar(10) NOT NULL,
  `ten_hang` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang_xe`
--

INSERT INTO `hang_xe` (`id_hang`, `ten_hang`) VALUES
('ast', 'Aston Martin'),
('ben', 'Bentley'),
('bug', 'Buggati'),
('fer', 'Ferrari'),
('koe', 'Koenigsegg'),
('lam', 'Lamborghini'),
('lan', 'Land Rover'),
('may', 'Maybach'),
('mcl', 'Mclaren'),
('pag', 'Pagani'),
('por', 'Porsche'),
('rol', 'Rolls-Royce');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id_anh` varchar(15) NOT NULL,
  `img` varchar(40) DEFAULT NULL,
  `id_xe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id_anh`, `img`, `id_xe`) VALUES
('', NULL, NULL),
('astrapi2', 'ast-rapi2.jpg', 'astrapis10'),
('astvanq2', 'ast-vanq2.jpg', 'astvanq09'),
('astvant2', 'ast-vant2.jpg', 'astvant11'),
('benbent3', 'ben-bent3.jpg', 'benbent14'),
('bencont3', 'ben-cont3.jpg', 'bencontgt12'),
('benmuls3', 'ben-muls3.jpg', 'benmuls13'),
('buchir4', 'bug-chir4.jpg', 'buchir15'),
('bugveyr4', 'bug-veyr4.jpg', 'bugveyr16'),
('fer488p5', 'fer-488p5.jpg', 'fer488pista06'),
('fer488s5', 'fer-488s5.jpg', 'fer488spi08'),
('ferf8sp5', 'fer-f8sp5.jpg', 'ferf8spi07'),
('koeone16', 'koe-one16.jpg', 'koeone17'),
('koerege6', 'koe-rege6.jpg', 'koerege18'),
('lamaven1', 'lam-aven1.jpg', 'lamavens04'),
('lamhura1', 'lam-hura1.jpg', 'lamhura05'),
('lamurus1', 'lam-urus1.jpg', 'lamurus03'),
('landefe7', 'lan-defe7.jpg', 'randefe20'),
('lanevoq7', 'lan-evoq7.jpg', 'ranevoq19'),
('lanvela7', 'lan-vela7.jpg', 'ranvela21'),
('mays4508', 'may-s4508.jpg', 'mays45001'),
('mays6508', 'may-s6508.jpg', 'mays65002'),
('mcl650s9', 'mcl-650s9.jpg', 'mcl650spi24'),
('mcl720s9', 'mcl-720s9.jpg', 'mcl720spi23'),
('mclp19', 'mcl-p19.jpg', 'mclp122'),
('paghuay10', 'pag-huay10.jpg', 'paghuay25'),
('pagzond10', 'pag-zond10.jpg', 'panzond26'),
('por91111', 'por-91111.jpg', 'por91130'),
('pormaca11', 'por-maca11.jpg', 'pormaca32'),
('porpana11', 'por-pana11.jpg', 'porpana31'),
('rolcull12', 'rol-cull12.jpg', 'rolcull28'),
('rolghos12', 'rol-ghos12.jpg', 'rolghos29'),
('rolphan12', 'rol-phan12.jpg', 'rolphan27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_khuc_xe`
--

CREATE TABLE `phan_khuc_xe` (
  `id_phankhuc` varchar(10) NOT NULL,
  `phan_khuc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phan_khuc_xe`
--

INSERT INTO `phan_khuc_xe` (`id_phankhuc`, `phan_khuc`) VALUES
('se', 'Sedan'),
('sp', 'sport'),
('su', 'suv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_so`
--

CREATE TABLE `thong_so` (
  `id_thongso` varchar(20) NOT NULL,
  `ht_nhien_lieu` varchar(200) DEFAULT NULL,
  `ht_treo` varchar(50) DEFAULT NULL,
  `kich_thuoc` varchar(50) DEFAULT NULL,
  `momen_xoan_max` varchar(10) DEFAULT NULL,
  `cong_suat_max` varchar(20) DEFAULT NULL,
  `dung_tich_xi_lanh` varchar(10) DEFAULT NULL,
  `kieu_dong_co` varchar(50) DEFAULT NULL,
  `so_cho_ngoi` int(11) DEFAULT NULL,
  `chat_lieu_ghe` varchar(10) DEFAULT NULL,
  `hop_so` varchar(50) DEFAULT NULL,
  `cong_nghe_an_toan` varchar(1000) DEFAULT NULL,
  `toc_do_toi_da` int(11) DEFAULT NULL,
  `id_xe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thong_so`
--

INSERT INTO `thong_so` (`id_thongso`, `ht_nhien_lieu`, `ht_treo`, `kich_thuoc`, `momen_xoan_max`, `cong_suat_max`, `dung_tich_xi_lanh`, `kieu_dong_co`, `so_cho_ngoi`, `chat_lieu_ghe`, `hop_so`, `cong_nghe_an_toan`, `toc_do_toi_da`, `id_xe`) VALUES
('astrapis10ts', 'Tiêu thụ nhiên liệu: 11.8L/100km\r\nDung tích bình xăng: 90 Lít\r\nLoại nhiên liệu: xăng', 'Independent Double Wishbones', '5019 x 2141 x 1349 mm', '619 Nm', '552 mã lực', '5935', 'V12', 4, 'Bọc da', 'Tự động 8 cấp', 'Hệ thống lái: trợ lực tay lái\r\nHệ thống chống bó cứng phanh ABS)\r\nHệ thống hỗ trợ lực phanh khẩn cấp (BA)\r\nHệ thống phân phối lực phanh điện tử (EBD)\r\nHệ thống ổn định thân xe\r\nHệ thống kiểm soát độ bám đường (TRC)\r\nCamera lùi\r\nHệ thống cảnh báo áp suất lốp\r\nHệ thống cảnh báo trước va chạm', 327, 'astrapis10'),
('astvanq09ts', 'Mức tiêu thụ: 14.7L/100KM\r\nDung tích bình: 77,6 Lít', 'Double Wishbone', '4728 x 2067 x 1924 mm', '630 Nm', '568 mã lực', '5935', 'Premium Unleaded V-12 6.0L', 3, 'Premium le', '8AT', 'Hệ thống lái: trợ lực tay lái\r\nHệ thống chống bó cứng phanh (ABS)\r\nHệ thống hỗ trợ lực phanh khẩn cấp (BA)\r\nHệ thống ổn định thân xe\r\nHệ thống kiểm soát độ bám đường (TRC)\r\nCamera lùi\r\nHệ thống cảnh báo áp suất lốp', 323, 'astvanq09'),
('astvant11ts', 'Đang cập nhật', 'Skyhook', '4465 x 1942 x 1273 mm', '685 Nm', '500 mã lực', '4.0', 'Đang cập nhật', 2, 'Bọc da', 'Tự động 8 cấp ZF', 'Đang cập nhật', 314, 'astvant11'),
('benbent14ts', 'Mức tiêu thụ nhiên liệu	10.3L - 17.9L', 'Đang cập nhật', '5.144 x 2.222 x 1.728 mm', '770 Nm', '626 mã lực', '5.590', 'Twin – Turbo W12 TSI', 5, 'Bọc da', 'Đang cập nhật', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 306, 'benbent14'),
('bencontgt12ts', 'Mức tiêu thụ nhiên liệu	11,8L - 19,6L', 'Khí nén ba buồng', '4.806 x 2.227 x 1.403 mm', '900 Nm ', '626 mã lực', '5.998', 'Tăng áp kép W12 6.0L', 4, 'Bọc da', 'Tự động 8 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 333, 'bencontgt12'),
('benmuls13ts', 'Mức tiêu thụ nhiên liệu	12.8L - 21.3L', 'Xương đòn kép/đa liên kết với phản ứng chân và pha', '5575 x 2208 x 1521 mm', '1020 Nm', '505 mã lực ', '6.752', 'Động cơ V8 6,8 L', 4, 'Bọc da', 'Tự động 8 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 296, 'benmuls13'),
('buchir15ts', 'Mức tiêu thụ nhiên liệu	21.38L', 'Đang cập nhật', '4.544 x 2.038 x 1,212 mm', '1600 Nm', '1500 mã lực', '7993', 'W16 8.0L', 2, 'Bọc da', 'Đang cập nhật', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 500, 'buchir15'),
('bugveyr16ts', 'Mức tiêu thụ nhiên liệu	35L', 'Đang cập nhật', '4,462 x 1,998 x 1,204 mm', '1250 Nm', '999 mã lực', '7993', 'W16 8.0L', 2, 'Bọc da', 'Tự động 8 cấp ZF', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 407, 'bugveyr16'),
('fer488pista06ts', 'mức tiêu hao nhiên liệu cho quãng đường 100km vào khoảng 12,5 lít xăng', 'Đang cập nhật', 'Đang cập nhật', '770 Nm', '709 mã lực', '7.993', 'V8 3.9L loại Twin Turbo', 2, 'Bọc da', 'Đang cập nhật', 'Hệ thống các túi khí\r\ncông nghệ chống lật và ổn định thân xe\r\nChống bó cứng phanh(ABS)\r\nCông nghệ phanh khẩn cấp\r\nCamera hành trình\r\nCảnh báo mất tập trung\r\nCảnh báo vật cản', 340, 'fer488pista06'),
('fer488spi08ts', 'Mức tiêu thụ nhiên liệu	9.8L', 'Đang cập nhật', '4,568 x 1,952 x 1,213 mm', '760 Nm', '660 mã lực', '3.902', 'V8 3.9L', 2, 'Bọc da', ' hộp số 7 cấp ly hợp kép', 'Đang cập nhật', 330, 'fer488spi08'),
('ferf8spi07ts', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '770 Nm', '720 mã lực', '7993', 'V8 tăng áp kép 3.9L', 2, 'Bọc da', 'Tự động ly hợp kép 7 cấp', 'Đang cập nhật', 340, 'ferf8spi07'),
('koeone17ts', 'Mức tiêu thụ nhiên liệu	18L', 'Đang cập nhật', '4.500 x 2.060 x 1.150 mm', '1371 Nm', '1360 mã lực', '5065 ', 'V8 5.0L', 2, 'Bọc da', 'Đang cập nhật', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 433, 'koeone17'),
('koerege18ts', 'Mức tiêu thụ nhiên liệu	18L', 'Đang cập nhật', '4.560 x 2.050 x 1.110 mm', '2000 Nm', '1500 mã lực', '4998', 'V8 5.0L tăng áp kép đi kèm 3 mô tơ điện hỗ trợ', 2, 'Bọc da', 'Đang cập nhật', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau', 420, 'koerege18'),
('lamavens04ts', 'Mức tiêu thụ nhiên liệu	12L - 14L', 'Đang cập nhật', '4797 x 2265 x 1136 mm', '690 Nm', '740 mã lực', '6498', 'V12 6.5L', 2, 'Bọc da', 'Bán tự động 7 cấp', ' Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 350, 'lamavens04'),
('lamhura05ts', 'Đang cập nhật', 'Đang cập nhật', '4506 x 2236 x 1165 mm', '600 Nm', '631 mã lực', '5204', 'V10 5.2L', 2, 'Bọc da', '7 cấp ly hợp kép', 'Công nghệ Lamborghini Dynamic Vehicle Integration (LDVI): hệ thống kiểm soát động lực học của xe.\r\nHệ thống cân bằng Lamborghini Piattaforma Inerziale (LPI): giữ xe cân bằng mỗi khi tăng tốc đột ngột.\r\nHệ thống đánh lái trục sau và định hướng mô-men xoắn: tối ưu hóa độ bám của xe trên mặt đường.\r\nHệ thống treo từ tính \r\nHệ thống kiểm soát lực kéo\r\nHệ dẫn động 4 bánh\r\nHệ thống camera kép tầm nhìn xa', 320, 'lamhura05'),
('lamurus03ts', 'Mức tiêu thụ nhiên liệu	14.1L -19.2L', 'Khí nén', '5.112 x 2.016 x 1.638 mm', '850 Nm', '650 mã lực ', '6498', 'V8 Biturbo 4.0L', 4, 'Bọc da', 'Tự động 8 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Kiểm soát độ bám đường (TRC)\r\n Cảnh báo điểm mù', 305, 'lamurus03'),
('mays4501ts', 'Đang cập nhật', 'Đang cập nhật', '5453x1899x1498 mm', '500 Nm', '367 mã lực', '2996', '3.0L V6', 4, 'Bọc da', 'Tự động 9 cấp 9G-TRONIC', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Camera lùi\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 259, 'mays45001'),
('mays65002ts', 'Mức tiêu thụ nhiên liệu	11.7L', 'Đang cập nhật', '5462 x 1899 x 1498 mm', '1000 Nm ', '463 mã lực', '5980', '6.0L V12', 4, 'Bọc da', 'Tự động 7 cấp 7G-TRONIC Plus', ' Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Kiểm soát độ bám đường (TRC)\r\n Cảnh báo điểm mù', 250, 'mays65002'),
('mcl650spi24ts', 'Mức tiêu thụ nhiên liệu	9.2L', 'Đang cập nhật', '4511 x ? x 1203 mm', '680 Nm', '641 mã lực', '3799', 'M838T, dung tích 3.8 lít, V8, tăng áp kép', 2, 'Bọc da', 'hộp số 7 cấp ly hợp kép', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 330, 'mcl650spi24'),
('mcl720spi23ts', 'Mức tiêu thụ nhiên liệu	18L', 'Đang cập nhật', '4546 x 2159 x 1194 mm', '770Nm', '720 mã lực', '3994', 'V8 tăng áp kép 4.0L', 2, 'Bọc da', 'Tự động tuần tự 7 cấp', ' Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 341, 'mcl720spi23'),
('mclp122ts', 'Mức tiêu thụ nhiên liệu	8.3L', 'Đang cập nhật', '4.588 x 1.946 x 1.188 mm', '720 Nm', '986 mã lực', '3799', 'V8 3.8L', 2, 'Bọc da', 'hộp số 7 cấp li hợp kép', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù\r\nTúi khí	8', 330, 'mclp122'),
('paghuay25ts', 'Mức tiêu thụ nhiên liệu	18L', 'Đang cập nhật', '4.605 x 2.036 x 1.169 mm', '1000 Nm ', '730 mã lực', '5980', '6,0L V12', 2, 'Bọc da', ' hộp số tuần tự 7 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 378, 'paghuay25'),
('panzond26ts', 'Mức tiêu thụ nhiên liệu	18L', 'Đang cập nhật', 'Đang cập nhật', '780Nm', '760 mã lực', '5980', 'V12 6.0L Twin-Turbo', 2, 'Bọc da', 'hộp số sàn 6 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 380, 'panzond26'),
('por91130ts', 'Mức tiêu thụ nhiên liệu	8.6L', 'Đang cập nhật', '4519 x 1852 x 1300 mm', '450 Nm', '367 mã lực', '1981', 'Twin-turbocharged 3.0L', 4, 'Bọc da', 'Tự động 8 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Hỗ trợ khởi hành ngang dốc (HAS)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chệch làn\r\n Cảnh báo áp suất lốp\r\n Cảm biến khoảng cách\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 330, 'por91130'),
('pormaca32ts', 'Mức tiêu thụ nhiên liệu	8,9L', 'Khí nén', '4.681 x 1.923 x 1.624 mm', '370 Nm', '252 mã lực', '1984', '2.0 I4', 5, 'Bọc da', 'Tự động 7 cấp ly hợp kép PDK', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 227, 'pormaca32'),
('porpana31ts', 'Mức tiêu thụ nhiên liệu	7.5L', 'Đang cập nhật', '5049x1937x1423 mm', '770 Nm', '550 mã lực', '2995', '4.0L V8', 5, 'Bọc da', 'hộp số tự động 8 cấp lý hợp kép', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Kiểm soát độ bám đường (TRC)\r\n Cảnh báo điểm mù', 315, 'porpana31'),
('randefe20ts', 'Mức tiêu thụ nhiên liệu	8L', 'Đang cập nhật', '5019x 4549x 4506 mm', '295 Nm', '197-395 mã lực', 'Đang cập n', 'Diesel 2.0L tăng áp', 5, 'Bọc da', 'Tự động 8 cấp ZF', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 175, 'randefe20'),
('ranevoq19ts', 'Mức tiêu thụ nhiên liệu	9,1L - 9,7L', 'Khí nén', '4371 x 1996 x 1649 mm', '365 Nm', '246 mã lực', '1997', 'Tăng áp 2.0L Ingenium', 5, 'Bọc da', 'Tự động 9 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 225, 'ranevoq19'),
('ranvela21ts', 'Mức tiêu thụ nhiên liệu	6.5L', 'Khí nén điện tử', '4.797 x 2.145 x 1685 mm', '365-700 Nm', '178-548 mã lực', '1993', 'Xăng 2.0L 4 xy lanh thẳng hàng và Xăng V8 siêu nạp', 5, 'Bọc da', 'Tự động 8 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Cảnh báo chống trộm', 250, 'ranvela21'),
('rolcull28ts', 'Mức tiêu thụ nhiên liệu	15L', 'Khí nén điện tử', '5341 x 2164 x 1835 mm', '850 Nm', '563 mã lực', '6750', '6,8L V12', 4, 'Bọc da', 'Tự động 8 cấp ZF', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảnh báo chống trộm\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 250, 'rolcull28'),
('rolghos29ts', 'Mức tiêu thụ nhiên liệu	16.7L', 'Khí nén điện tử', '5.399 x 1.948 x 1.550 mm', '780Nm', '563 mã lực', '6598', '6,6L V12', 4, 'Bọc da', 'hộp số tự động 8 cấp', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Khoá cửa tự động khi xe di chuyển\r\n Cảm biến hỗ trợ đỗ xe sau\r\n Cảnh báo điểm mù', 250, 'rolghos29'),
('rolphan27ts', 'Mức tiêu thụ nhiên liệu	9.7L', 'Khí nén điện tử', '5.770 x 2.018 x 1.646 mm', '900 Nm ', '563 mã lực', '6749', '6,8L V12', 4, 'Bọc da', 'hộp số tự động 8 cấp.', 'Chống bó cứng phanh (ABS)\r\n Hỗ trợ phanh khẩn cấp (BA)\r\n Cân bằng điện tử (ESP)\r\n Phân bổ lực phanh điện tử (EBD)\r\n Trợ lực điện (EPS)\r\n Camera lùi\r\n Cảm biến hỗ trợ đỗ xe sau', 250, 'rolphan27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` varchar(10) NOT NULL,
  `ho_kh` varchar(50) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `dia_chi` varchar(60) NOT NULL,
  `tai_khoan` varchar(30) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `ho_kh`, `ten_kh`, `email`, `phone`, `dia_chi`, `tai_khoan`, `mat_khau`) VALUES
('kh1', 'Trương', 'Phong', 'abcd@gmail.com', 123456789, 'hcm city', 'khachhang1', '123a'),
('kh2', 'Trương', 'Tấn Phong', 'anhphongvjppro@yahoo.com', 97336576, 'hcm city ca', 'tanphong15987532', '97d44f40e0a57662ebeb9bc26ebfd2e7'),
('kh3', 'Nguyễn', 'Tấn Phú', 'tanphong159875@gmail.com', 973365778, 'hcm city', 'tanphong1999', '97d44f40e0a57662ebeb9bc26ebfd2e7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `id_xe` varchar(20) NOT NULL,
  `ten_xe` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `gia` double NOT NULL,
  `nam_sx` year(4) DEFAULT NULL,
  `id_hang` varchar(10) DEFAULT NULL,
  `id_phankhuc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`id_xe`, `ten_xe`, `gia`, `nam_sx`, `id_hang`, `id_phankhuc`) VALUES
('astrapis10', 'Aston Martin  Rapide S', 210000, 2017, 'ast', 'sp'),
('astvanq09', 'Aston Martin Vanquish', 300000, 2016, 'ast', 'sp'),
('astvant11', 'Aston Martin Vantage', 152000, 2020, 'ast', 'sp'),
('benbent14', 'Bentley Bentayga V8', 1569000, 2020, 'ben', 'sp'),
('bencontgt12', 'Bentley Continetal GT', 202000, 2020, 'ben', 'sp'),
('benmuls13', 'Bentley Mulsanne', 304670, 2020, 'ben', 'se'),
('buchir15', 'Bugatti Chiron', 2990000, 2019, 'bug', 'sp'),
('bugveyr16', 'Bugati Veyron', 1700000, 2014, 'bug', 'sp'),
('fer488pista06', 'Ferrari 488 Pista', 330000, 2019, 'fer', 'sp'),
('fer488spi08', 'Ferrari 488 Spider', 262000, 2018, 'fer', 'sp'),
('ferf8spi07', 'Ferrari F8 Spider', 274000, 2020, 'fer', 'sp'),
('koeone17', 'Koenigsegg One 1', 2850000, 2015, 'koe', 'sp'),
('koerege18', 'Koenigsegg Regera', 1900000, 2019, 'koe', 'sp'),
('lamavens04', 'Lamborghini Aventador S', 417000, 2016, 'lam', 'sp'),
('lamhura05', 'Lamborghini Huracan', 260000, 2019, 'lam', 'sp'),
('lamurus03', 'Lamborghini Urus', 200000, 2018, 'lam', 'su'),
('mays45001', 'Maybach S 450 4MATIC', 325000, 2020, 'may', 'se'),
('mays65002', 'Maybach S 650', 642000, 2020, 'may', 'se'),
('mcl650spi24', 'McLaren 650s Spyder ', 349500, 2016, 'mcl', 'sp'),
('mcl720spi23', 'McLaren 720S Spider', 315000, 2019, 'mcl', 'sp'),
('mclp122', 'McLaren P1', 1150000, 2013, 'mcl', 'sp'),
('paghuay25', 'Pagani Huayra', 3500000, 2011, 'pag', 'sp'),
('panzond26', 'Pagani Zonda', 1400000, 2019, 'pag', 'sp'),
('por91130', 'Porsche 911', 99200, 2020, 'por', 'sp'),
('pormaca32', 'Porsche Macan', 50900, 2020, 'por', 'su'),
('porpana31', 'Porsche Panamera', 98000, 2020, 'por', 'se'),
('randefe20', 'Range Rover Defender', 50000, 2020, 'lan', 'su'),
('ranevoq19', 'Range Rover Evoque', 55000, 2020, 'lan', 'su'),
('ranvela21', 'Range Rover Velar', 62200, 2020, 'lan', 'su'),
('rolcull28', 'Rolls-Royce Cullinan', 330000, 2020, 'rol', 'su'),
('rolghos29', 'Rolls-Royce Ghost ', 311900, 2020, 'rol', 'se'),
('rolphan27', 'Rolls-Royce Phantom', 450000, 2019, 'rol', 'se');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hang_xe`
--
ALTER TABLE `hang_xe`
  ADD PRIMARY KEY (`id_hang`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_anh`),
  ADD KEY `id_xe` (`id_xe`);

--
-- Chỉ mục cho bảng `phan_khuc_xe`
--
ALTER TABLE `phan_khuc_xe`
  ADD PRIMARY KEY (`id_phankhuc`);

--
-- Chỉ mục cho bảng `thong_so`
--
ALTER TABLE `thong_so`
  ADD PRIMARY KEY (`id_thongso`),
  ADD KEY `id_xe` (`id_xe`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `tai_khoan` (`tai_khoan`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id_xe`),
  ADD KEY `id_phankhuc` (`id_phankhuc`),
  ADD KEY `id_hang` (`id_hang`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_xe`) REFERENCES `xe` (`id_xe`);

--
-- Các ràng buộc cho bảng `thong_so`
--
ALTER TABLE `thong_so`
  ADD CONSTRAINT `thong_so_ibfk_1` FOREIGN KEY (`id_xe`) REFERENCES `xe` (`id_xe`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`id_phankhuc`) REFERENCES `phan_khuc_xe` (`id_phankhuc`),
  ADD CONSTRAINT `xe_ibfk_2` FOREIGN KEY (`id_hang`) REFERENCES `hang_xe` (`id_hang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
