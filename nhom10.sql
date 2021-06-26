-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th6 25, 2021 lúc 06:34 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom10`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Samsung'),
(2, 'Oppo'),
(3, 'Apple'),
(4, 'Realme'),
(5, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manu_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `pro_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`) VALUES
(1, 'Samsung Galaxy A32', 1, 1, 6690000, 'samsung_galaxy32.jpg', 'Samsung Galaxy A32 4G là chiếc điện thoại thuộc phân khúc tầm trung nhưng sở hữu nhiều ưu điểm vượt trội về màn hình lớn sắc nét, bộ bốn camera 64 MP cùng vi xử lý hiệu năng cao và được bán ra với mức giá vô cùng tốt.', 1, '2021-05-08 04:22:50'),
(2, 'OPPO Reno5', 2, 1, 8690000, 'oppo_reno5.jpg', 'là sự kết hợp đầy ấn tượng giữa hiệu năng và thiết kế, mang đến cho người dùng một chiếc điện thoại tích hợp nhiều công nghệ camera, sạc pin hàng đầu của OPPO trong một mức giá tầm trung.', 1, '2021-05-01 17:00:00'),
(3, 'iPhone 12 Pro Max 128GB', 3, 1, 31000000, 'iphone12_promax.jpg', 'Nếu không có gì thay đổi, iPhone 12 Pro Max 128 GB siêu phẩm smartphone đang được mong chờ nhất của Apple sẽ được ra mắt và khoảng nửa cuối năm nay (2020). Hứa hẹn đây sẽ là một sự thay đổi ngoạn mục của iPhone cả về thiết kế lẫn hiệu năng.', 1, '2021-05-02 04:26:08'),
(4, 'Realme 6 Pro', 4, 1, 6990000, 'realme_6.jpg', 'Realme 6 Pro là mẫu smartphone cao cấp hơn trong bộ đôi Realme 6 Series mới ra mắt của Realme. Vẫn với tiêu chí smartphone cấu hình mạnh - giá tốt, Realme 6 Pro còn nổi bật với cụm 6 camera ấn tượng, màn hình siêu mượt 90 Hz theo xu hướng', 1, '2021-05-01 04:28:53'),
(5, ' Xiaomi Mi 11 5G', 5, 1, 20000000, 'xaome.jpg', 'Đặc điểm nổi bật của Xiaomi Mi 11 5G\r\n\r\nBộ sản phẩm chuẩn: Hộp, Sách hướng dẫn, Jack chuyển tai nghe 3.5mm, Cây lấy sim, Ốp lưng, Cáp Type C, Củ sạc nhanh rời đầu Type A\r\n\r\nXiaomi chốt năm 2020 cực đỉnh và mở đầu năm mới không thể nào ấn tượng hơn với siêu phẩm mang tên Xiaomi Mi 11. Trải nghiệm hiệu năng hàng đầu với vi xử lý Qualcomm Snapdragon 888, cùng loạt công nghệ đỉnh cao, khiến bất kỳ ai cũng sẽ choáng ngợp về smartphone này.', 1, '2021-05-01 04:30:23'),
(6, 'Tai nghe nhét tai Samsung EG920B', 1, 2, 280000, 'tainghe_samsung.jpg', 'Giới thiệu sản phẩm\r\nTai nghe nhét trong Samsung EG920B có đi nút đệm tai nghe dạng móc\r\nGiúp người đeo khi vận động mạnh sẽ không bị rớt ra.', 0, '2021-05-16 04:32:00'),
(7, 'Tai nghe Bluetooth AirPods 2 Oppo MV7N2\r\n\r\n', 2, 2, 3790000, 'tainghe_apple.jpg', 'Tai nghe Bluetooth AirPods 2 oppo MV7N2 Trắng vẫn giữ cho mình thiết kế hiện đại, cao cấp, hợp thời trang', 0, '2021-05-08 08:02:13'),
(8, 'Tai nghe chụp tai Bluetooth Apple', 3, 2, 13990, 'tainghe_Apple_chuptai.jpg', 'Sang trọng với lớp vỏ kim loại sáng bóng, bền bỉ, lựa chọn dễ dàng theo sở thích cho 3 phiên bản màu xanh dương, bạc và xám', 0, '2021-05-08 07:21:36'),
(9, 'Tai nghe Bluetooth Realme ', 4, 2, 360000, 'tainghe_mozard.jpg', 'Thiết kế đầy cá tính, 2 phiên bản màu xanh - hồng cực kỳ bắt mắt\r\nTai nghe được làm tinh xảo, bộ khung cứng cáp, có hệ thống treo đến chụp tai phủ bên ngoài bởi lớp chất liệu mềm mại, đeo vào đầu nhẹ nhàng, không làm mỏi, đau đầu - cổ - tai', 1, '2021-05-15 04:10:29'),
(10, 'Tai nghe chụp tai Bluetooth Xiaomi WH-CH510/BC', 5, 2, 1990000, 'tainghe_sony.jpg', 'Tai nghe chụp tai Bluetooth Sony WH-CH510/BC đen có thiết kế đơn giản gọn nhẹ, phù hợp với các người yêu âm nhạc và hay di chuyển. Thiết kế vành tai nghe kiểu gập, giúp bạn dễ dàng cất gọn trong túi để mang theo khi đi du lịch.', 1, '2021-05-08 08:04:40'),
(11, 'Loa thanh Samsung HW-Q70', 1, 3, 12990000, 'loa_samsung.jpg', 'khong co gi hot', 0, '2021-05-11 04:40:45'),
(12, 'Loa Tháp Oppo MX-T40/XV', 2, 3, 12999000, 'loa_loathap.png', 'SẢN PHẨM KHÔNG KINH DOANH', 0, '2021-05-08 08:05:02'),
(13, 'Loa bluetooth Apple Charge ', 3, 3, 7777366, 'loa_blu.jpg', 'Thiết kế chất liệu vải bền và vỏ cao su chắc chắn.\r\nKết nối Bluetooh 4.2 kết nối đến 10m.\r\nÂm thanh chất lượng cao bởi bộ tản âm độc quyền của JBL.', 1, '2021-05-08 08:05:56'),
(14, 'Loa bluetooth Realme Extra Bass SRS-XB23\r\n\r\n', 4, 3, 999888, 'loa_galaxy.jpg', 'Thiết kế đẹp mắt, nhiều màu sắc, có dây treo.\r\nÂm thanh sôi động nhờ công nghệ Extra Bass.\r\nMàng loa độc đáo cho âm thanh chi tiết, hạn chế méo tiếng.\r\nKết nối 100 loa cùng lúc với tính năng Party Connect.', 0, '2021-05-08 08:06:16'),
(15, 'Loa Bluetooth Xiaomi BM01', 5, 3, 999999, 'loa-bluetooth-mozardx-bm01-den-add-2-600x600-1-600x600.jpg', 'Thiết kế gọn nhẹ, thời trang tiện lợi cho việc mang đi.\r\nCó đèn Led đổi màu cực kì nổi bật.\r\nCông nghệ Bluetooth V5.0 cho kết nối ổn định, mượt mà lên đến 10 m.\r\nTrang bị khả năng chống thấm nước IPX5.', 0, '2021-05-08 08:05:32'),
(16, 'Pin sạc dự phòng Samsung 10.000mAh', 1, 4, 392000, 'hydrus-pj-jp196-ava-600x600.jpg', 'Dung lượng pin 10.000 mAh, hiệu suất sạc đến 65%.\r\nSử dụng lõi pin Polymer an toàn.\r\nTrang bị 1 cổng vào Micro USB và 2 cổng ra USB cho dòng sạc 5V - 2A.\r\nThiết kế đẹp mắt, 2 màu sắc thời thượng, phù hợp cho học sinh, sinh viên, dân văn phòng,...', 0, '2021-05-08 08:06:56'),
(17, 'Pin sạc dự phòng Polymer 10.000mAh Xiaomi', 5, 4, 499000, 'pin-sac-du-phong-polymer-10000mah-xiaomi-mi-18w-avatar-1-600x600.jpg', 'Mua Đồng hồ thời trang giảm 40% cho Đồng hồ dưới 3 triệu, giảm 30% cho Đồng hồ từ 3 triệu trở lên (Không kèm khuyến mãi khác', 1, '2021-05-08 08:07:54'),
(18, 'Pin sạc dự phòng Apple 10.000mAh Type C', 3, 4, 999000, '217992-600x600.jpg', 'hiết kế nhỏ gọn, tiện dụng, dung lượng lớn lên tới 10.000mAh.\r\nSạc mạnh mẽ, an toàn với công nghệ sạc thông minh AiPower cho tốc độ sạc nhanh nhất.\r\nCổng Type-C có thể sạc điện thoại di động USB-C ở tốc độ 15W.', 1, '2021-05-08 08:08:36'),
(19, 'Pin sạc dự phòng Realme 10.000mAh AVA PJ ', 4, 4, 360000, 'pin-sac-du-phong-polymer-10000mah-ava-pj-jp196-den-avatar-1-600x600.jpg', 'Thiết kế đẹp mắt và chắc tay.\r\nDung lượng pin 10.000 mAh, hiệu suất sạc 65%.\r\nSử dụng lõi pin Polymer an toàn.\r\nTrang bị cổng sạc vào Micro USB 5V - 2A và 2 cổng ra USB 5V - 2A.\r\nSạc được cho mọi điện thoại và máy tính bảng.', 0, '2021-05-08 08:08:51'),
(20, 'Pin sạc dự phòng Oppo Polymer 10.000mAh AVA', 2, 4, 360000, 'pin-sac-du-phong-polymer-10000mah-ava-pa-w11-x-avatar-1-600x600.jpg', 'Thiết kế nhỏ gọn, tiện lợi.\r\nDung lượng 10.000 mAh với hiệu suất lên đến 64%.\r\nĐược trang bị 4 đền led dễ dàng kiểm tra dung lượng pin.\r\nSử dụng lõi pin Polymer an toàn, bền bỉ.\r\nSử dụng 1 cổng sạc đầu vào micro USB và 2 cổng USB đầu ra.', 0, '2021-05-15 04:09:51'),
(21, 'Laptop Samsung Slim 3 15IIL05 i3', 1, 5, 25423453, 'lenovo-ideapad-3-15iil05-i3-81we003rvn-211520-101539-600x600.jpg', 'Laptop Lenovo IdeaPad 3 15IIL05 là sản phẩm hướng đến người dùng văn phòng, học sinh sinh viên, xử lý ổn định các tác vụ cơ bản hằng ngày.', 1, '2021-05-08 08:10:23'),
(22, 'Laptop Oppo VivoBook X415EA i3 1115G4/4GB/51', 2, 5, 6690000, 'asus-vivobook-x415ea-i5-ek044t-1-600x600.jpg', 'aptop Asus VivoBook X415EA i3 (EK044T) là một trong những chiếc máy tính xách tay nhỏ gọn nhất thế giới, đi kèm hiệu năng mạnh mẽ và chất lượng hình ảnh vô cùng sắc nét, chắc chắn là sự lựa chọn tốt nhất cho những người năng động và di chuyển nhiều', 1, '2021-05-08 08:10:08'),
(23, 'Laptop Apple 348 G7 i3 8130U/4GB/512GB/Win10', 3, 5, 12390000, 'hp-348-g7-i3-1a0z1pa-1-225549-600x600.jpg', 'Thiết kế hiện đại, độ bền chuẩn quân đội\r\nHP 348 G7 mang đến ngôn ngữ thiết kế hiện đại và thanh thoát. Với tông màu bạc sang trọng, thân máy mỏng, HP 348 G7 cho cảm giác sang trọng mặc dù chỉ được làm từ vỏ nhựa.\r\n\r\nMáy có trọng lượng chỉ 1.5 kg, gọn nhẹ tiện lợi khi di chuyển. ', 0, '2021-05-08 08:09:55'),
(24, 'Laptop realme 348 G7 i3 8130U/4GB/512GB/Win10', 4, 5, 12390000, 'hp-348-g7-i5-9ph06pa-kg2-1-218439-600x600.jpg', 'Nắm bắt được sự thay đổi về công nghệ chiếc laptop HP cũng được trang bị CPU Intel Core i5 thế hệ thứ 10 (vừa ra mắt cuối năm 2019) và dung lượng RAM 8 GB.\r\n\r\nVới cấu hình này, máy đủ sức xử lí mượt mà các ứng dụng văn phòng từ cơ bản như Word, Exel,... và khả năng xử lí hình ảnh chuyên sâu hơn với Photoshop, Ai….', 1, '2021-05-08 08:09:41'),
(25, 'Laptop Xiaomi AN515 44 R9JM R5 4600H/8', 5, 5, 22950000, 'acer-nitro-an515-44-r9jm-r5-nhq9msv003-15-600x600.jpg', 'Với card đồ họa rời GTX 1650, Acer Nitro AN515 44 R9JM R5 (NH.Q9MSV.003) trở thành một con laptop đáng gờm bởi hiệu năng vô cùng mạnh mẽ. Đây sẽ là laptop được săn đón trong năm 2021 cũng bởi thiết kế hầm hố đậm chất game thủ của mình.\r\n', 0, '2021-05-08 08:09:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện Thoại'),
(2, 'Tai Nghe'),
(3, 'Loa'),
(4, 'Sạc Dự Phòng'),
(5, 'Laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_role`) VALUES
(1, 'doanngochuy', '123456', 1),
(2, 'vancongnam', '123456', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
