-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 07:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID_Comment` int(11) NOT NULL,
  `Context` varchar(1000) DEFAULT NULL,
  `ID_Product` int(11) NOT NULL,
  `ID_Member` int(11) NOT NULL,
  `Rating` float NOT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID_Comment`, `Context`, `ID_Product`, `ID_Member`, `Rating`, `Image`, `Date`) VALUES
(1, 'Quá tuyệt vời', 1, 2, 5, NULL, '2024-05-06'),
(2, 'Máy không dùng để đập maimai được. Quá tệ!', 1, 1, 1, NULL, '2024-05-06'),
(3, 'Cũng được nhưng máy không nướng sườn được', 1, 3, 3, NULL, '2024-05-06'),
(4, 'Máy cấu hình đẹp, chạy nhanh, thích hợp cho việc chơi game, giá tiền hơi chát xíu', 1, 4, 4, NULL, '2024-05-06'),
(5, 'Cho hỏi máy này bên shop còn không?', 1, 5, 5, NULL, '2024-05-06'),
(6, 'Laptop chơi game này phù hợp giá sinh viên', 2, 1, 5, 'someImagePath', '2024-05-06'),
(7, 'Cho mình hỏi máy này có giảm giá không?', 2, 5, 5, NULL, '2024-05-06'),
(8, 'Máy xài chạy khá nóng, nướng sườn OK', 2, 3, 5, NULL, '2024-05-06'),
(9, 'Máy xài RAM 16GB Onboard, thường mình phải xài trên 16GB RAM nên giờ mình muốn nâng cấp thêm cũng không được', 2, 4, 3, 'someImagePath', '2024-05-06'),
(10, NULL, 2, 2, 4, NULL, '2024-05-06'),
(11, 'Màn hình rộng, chạy mượt như sunsilk', 9, 1, 5, 'someImagePath', '2024-05-06'),
(12, 'Với kích thước màn này rất vừa với bàn của mình', 9, 3, 5, 'someImagePath', '2024-05-06'),
(13, 'Màn rộng quá', 9, 5, 1, '', '2024-05-06'),
(14, 'Màn phù hợp túi tiền của các game thủ', 9, 2, 4, '', '2024-05-06'),
(15, 'Cho hỏi máy này có cài sẵn bộ Office chưa?', 4, 5, 5, NULL, '2024-05-06'),
(16, NULL, 4, 4, 4, NULL, '2024-05-06'),
(17, 'Mình vừa mua con màn này với con laptop gaming TUF, phải gọi là một sự kết hợp quá hoàn hảo ', 6, 1, 5, NULL, '2024-05-06'),
(18, 'Mình vừa mua con màn này với con màn hình gaming TUF, phải gọi là một sự kết hợp quá hoàn hảo ', 5, 1, 5, NULL, '2024-05-06'),
(26, 'Máy siêu ngon', 32, 11, 5, NULL, '2024-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID_Member` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address_1` varchar(255) DEFAULT NULL,
  `Address_2` varchar(255) DEFAULT NULL,
  `Address_3` varchar(255) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Account_Password` varchar(255) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Hash_ID` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID_Member`, `Name`, `Phone_Number`, `Email`, `Address_1`, `Address_2`, `Address_3`, `Gender`, `Account_Password`, `Image`, `Role`, `Hash_ID`, `Status`) VALUES
(1, 'Lê Minh Chánh', '0835599955', 'chanh.leminh@hcmut.edu.vn', '', '', '', 'male', 'kekwlmao', 'images/snipee3007.gif', 'admin', '', 'active'),
(2, 'Phạm Nguyễn Nam', '0937113543', 'nam.phamnguyen1512@hcmut.edu.vn', '', '', '', 'male', 'lmaolmao', 'images/fazect.png', 'admin', '', 'active'),
(3, 'Lê Thiên Ân', '0356556216', 'an.lethien@hcmut.edu.vn', '', '', '', 'male', 'kekwkekw', 'images/founder.png', 'admin', '', 'active'),
(4, 'Lê Hồng Minh', '0704927263', 'minh.lehong2003@hcmut.edu.vn', '', '', '', 'male', 'lmaokekw', 'images/junvalentine.png', 'admin', '', 'active'),
(5, 'Trần Nhân Khánh', '0961322985', 'khanh.tran2003csejpn@hcmut.edu.vn', '', '', '', 'male', 'Lmouse', 'images/khartist.jpg', 'user', '', 'active'),
(6, 'Phạm Quang Minh', '0812676767', 'minh.phamquang@hcmut.edu.vn', '', '', '', 'female', 'LmaoKekw', 'images/masamuneee.png', 'user', '', 'active'),
(9, 'BKISC2', '77777777777', 'bedge@gmail.com', '', '', '', 'female', '$2y$10$lBGZSho0DwKlIY.QckRcuOAljBRyWj1Utj7cTaOSogxxj6eIvYSra', 'images/logoBK.png', 'admin', '$2y$10$fyLRGntQm1xvTrmMBp2.W.3gkvIsxc6/lLHzYyNmVqb5Kujpj.RZi', 'active'),
(10, '123', '1231231231', '1@gmail.com', '', '', '', 'male', '$2y$10$.xEGwLIJ/iKjgzqGM4eE2.97Y3Axso99cd7tgDvA6bQlvHHMVCXgi', 'images/logoBK.png', 'user', '$2y$10$jMXdRAO8/NcWTPM2vAEMMujSc2tqUK6b5z1duSM/wp/xui0o.53uC', 'active'),
(11, 'Le Chanh', '0835599955', 'helloworld@gmail.com', '', '', '', 'null', '$2y$10$BNo8.7fRr9fwbq8cPCVZRu1HGxwBNL8aXN7RvyTaA65YFeWXXDGtq', 'images/doc_icon_(2000-03).svg.png', 'user', '$2y$10$/YKMokjr2dY6fsfhVsqjq.jGGmdXZx76RrqiOBC0R6WKbqvrbe0YW', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID_News` int(11) NOT NULL COMMENT 'News'' ID',
  `Category` varchar(100) NOT NULL COMMENT 'News'' Category',
  `Title` varchar(100) NOT NULL COMMENT 'News'' Title',
  `Context` varchar(1000) NOT NULL COMMENT 'News'' Context',
  `Image` varchar(100) NOT NULL COMMENT 'News'' Image',
  `ID_Member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID_Product` int(11) NOT NULL COMMENT 'Product''s ID',
  `Name` varchar(100) NOT NULL COMMENT 'Product''s Name',
  `Category` varchar(100) NOT NULL COMMENT 'Product''s Category',
  `Brand` varchar(100) NOT NULL COMMENT 'Product''s brand',
  `Price` int(11) NOT NULL COMMENT 'Product''s price',
  `Description` varchar(1000) NOT NULL COMMENT 'Product''s description',
  `Tags` varchar(1000) NOT NULL COMMENT 'Product''s components',
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID_Product`, `Name`, `Category`, `Brand`, `Price`, `Description`, `Tags`, `slug`) VALUES
(1, 'Laptop ASUS Zenbook Duo OLED UX8406MA PZ307W', 'Laptop', 'ASUS', 48990000, 'Nếu bạn đang muốn tìm cho mình một chiếc laptop có thiết kế độc đáo và linh hoạt mà vẫn đảm bảo hiệu năng ổn định thì đừng bỏ qua Asus Zenbook Duo UX8406MA PZ307W. Mẫu laptop Asus Zenbook này sở hữu màn hình duo 120Hz và con chip thế hệ mới nhất hứa hẹn sẽ mang tới cho bạn trải nghiệm xử lý công việc hiệu quả và bền bỉ. ', 'hl_ssd:512 GB;hl_lcd:14 inch 3K OLED TOUCH;hl_cpu:Ultra 7 155H;spec_VGA:Intel Arc;hl_hz:120 Hz;hl_ram:16 GB;hl_vga:Intel Arc', 'laptop-asus-zenbook-duo-oled-ux8406ma-pz307w'),
(2, 'Laptop MSI Summit E14 Evo A12M 211VN', 'Laptop', 'MSI', 22490000, 'Laptop MSI Summit E14 Evo A12M i7 1280P (211VN) mới nhất đến từ MSI đã có mặt tại CoChaGear, không chỉ có ngoại hình thời thượng đúng chuẩn một chiếc laptop cao cấp mà còn được trang bị các tính năng ấn tượng đáp ứng tốt nhu cầu của người dùng trong cả công việc và giải trí.', 'hl_ram:16 GB;hl_ssd:512 GB;hl_cpu:i7-1280P;hl_vga:Onboard;hl_lcd:14 inch FHD+ IPS', 'laptop-msi-summit-e14-evo-a12m-211vn'),
(3, 'Laptop MSI Modern 14 C13M 609VN', 'Laptop', 'MSI', 13990000, 'Thị trường laptop văn phòng chưa bao giờ là hết nhiệt, dòng sản phẩm MSI Modern 14 xuất hiện như một sự hoàn hảo về hiệu suất và thiết kế! Với thiết kế mỏng gọn nhẹ và trẻ trung, năng động, Modern 14 là người bạn đồng hành đáng tin cậy cho công việc và giải trí. CPU Intel thế hệ 13 và SSD tốc độ cao giúp máy khởi động nhanh và xử lý dữ liệu mượt mà. Hỗ trợ đồ họa 2D, bạn có thể sử dụng mượt mà nhiều phần mềm thiết kế. ', 'hl_ram:8 GB;hl_cpu:i5-1335U;hl_ssd:512 GB;hl_lcd:14 inch FHD IPS;hl_sticker:asus-vp;hl_vga:Onboard', 'laptop-msi-modern-14-c13m-609vn'),
(4, 'Laptop ASUS Vivobook 14 OLED A1405VA KM095W', 'Laptop', 'ASUS', 17790000, 'Laptop Asus Vivobook 14 OLED A1405VA-KM095W có sự nổi bật nhất là màn hình OLED, chuẩn điện ảnh, đem lại trải nghiệm về thị giác cực kỳ tốt. Bên cạnh đó, chiếc laptop Asus Vivobook này thiết kế theo dạng bản lề xoay 180 độ, để điều chỉnh phù hợp với tầm nhìn của người dùng. ', 'hl_cpu:i5-13500H;hl_ssd:512 GB;hl_ram:16 GB;hl_vga:Onboard;hl_lcd:14 inch 2K8 OLED', 'laptop-asus-vivobook-14-oled-a1405va-km095w'),
(5, 'Laptop gaming ASUS TUF Gaming F15 FX507VI LP088W', 'Laptop', 'ASUS', 43990000, 'Laptop Gaming Asus TUF F15 FX507VI LP088W là chiếc laptop chơi game thực sự mạnh mẽ với sự xuất hiện của bộ vi xử lý Intel Core i7 13620H, GPU RTX 4060 và dung lượng lên đến 16GB DDR5 đi cùng giá bán 37,890,000₫ giúp anh em game thủ tha hồ thể hiện bản lĩnh trong các game AAA đời mới với chất lượng đồ họa tuyệt đỉnh và trải nghiệm mượt mà trên một sản phẩm di động.', 'hl_hz:144 Hz;hl_ram:16 GB;hl_vga:RTX 4070;hl_cpu:i7-13620H;hl_lcd:15.6 inch FHD;spec_VGA:RTX 4070;hl_ssd:512 GB\"', 'laptop-gaming-asus-tuf-gaming-f15-fx507vi-lp088w'),
(6, 'Màn hình Asus TUF GAMING VG279Q3A 27\" Fast IPS 180Hz', 'Screen', 'ASUS', 4490000, 'Màn hình chơi game TUF Gaming VG279Q3A Full HD 27 inch có tấm nền Fast IPS để chơi game tốc độ 180 Hz cực nhanh. ASUS Extreme Low Motion Blur Sync (ELMB Sync) và AMD FreeSync™ Premium, tương thích với G-SYNC, các công nghệ VESA AdaptiveSync cho phép chơi game mượt mà. Ngoài ra, nó còn có gam màu sRGB 99% để mang lại màu sắc và độ tương phản vượt trội.', 'hl_hz:180Hz;hl_panel:IPS;hl_lcd:27 inch;hl_res:Full HD (1920 x 1080)', 'màn-hình-asus-tuf-gaming-vg279q3a-27\"-fast-ips-180hz-gsync-chuyên-game'),
(7, 'Màn hình cong GIGABYTE G34WQC A 34 Inch 2K 144Hz HDR400 chuyên game', 'Screen', 'GIGABYTE', 8590000, 'Màn Hình Cong Gigabyte G34WQC Gaming cung cấp các thông số kỹ thuật và chất lượng tối ưu, người dùng có thể thực sự tận hưởng hiệu suất cao cấp mà không cần tốn quá nhiều chi phí.', 'hl_lcd:34 inch;hl_res:2K (3440 x 1440);hl_hz:144Hz;hl_panel:VA', 'màn-hình-cong-gigabyte-g34wqc-a-34-inch-2k-144hz-hdr400-chuyên-game'),
(8, 'Màn hình cong GIGABYTE GS27FC 27 Inch 180Hz chuyên game', 'Screen', 'GIGABYTE', 3990000, 'Màn hình Gaming Gigabyte GS27FC là một sản phẩm được thiết kế đặc biệt để đáp ứng nhu cầu chơi game cao cấp và cung cấp trải nghiệm hình ảnh sắc nét và mượt mà. Tấm nền VA cong 1500R giúp bao quát tầm nhìn cùng tần số quét 180Hz. Công nghệ AMD FreeSync Premium cùng Adaptive Sync đồng bộ nội dung hiển thị một cách mượt mà nhất', 'hl_res:Full HD (1920 x 1080);hl_lcd:27 inch;hl_hz:180Hz;hl_panel:VA', 'màn-hình-cong-gigabyte-gs27fc-27-inch-180hz-chuyên-game'),
(9, 'Màn hình cong Asus ROG Strix XG49VQ 49 Inch VA 144Hz', 'Screen', 'ASUS', 24990000, 'Màn hình chuyên game ROG Strix XG49VQ 49 inch với độ cong 1800R cho trải nghiệm chơi game đắm chìm tột đỉnh và mức độ linh hoạt hơn đối với xử lý đa tác vụ. Với tỷ lệ khung hình 32:9, màn hình siêu siêu rộng cho khung hình hiển thị bằng với hai màn hình 27-inch đặt cạnh nhau không có khe hở và viền màn hình trong tầm nhìn của bạn.', 'hl_res:Full HD (3840 x 1080);hl_hz:144Hz;hl_lcd:49 inch;hl_panel:VA', 'màn-hình-cong-asus-rog-strix-xg49vq-49-inch-va-144hz'),
(10, 'Màn hình MSI PRO MP275 27 Inch IPS 100Hz', 'Screen', 'MSI', 2890000, 'Với kích thước không gian hiển thị lên đến 27 inch và tần số quét 100Hz, Màn hình MSI PRO MP275 - Chính hãng mang lại trải nghiệm hình ảnh rộng lớn và mượt mà, tạo nên không gian hiển thị thân thiện và chuyên nghiệp cho người dùng. Thiết bị không chỉ là nơi hiển thị hình ảnh, mà còn là người bạn đồng hành quan trọng trong mọi hoạt động. Bởi tại đây, MSI đã tích hợp nhiều công nghệ tiên tiến như Eye-Q Check, lọc ánh sáng xanh và chống nhấp nháy. Điều này giúp giảm căng thẳng cho mắt, tối ưu hóa trải nghiệm làm việc, học tập và giải trí của bạn.', 'hl_hz:100Hz;hl_res:Full HD (1920 x 1080);hl_panel:IPS;hl_lcd:27 inch', 'màn-hình-msi-pro-mp275-27-inch-ips-100hz'),
(11, 'Laptop gaming Gigabyte G7 KE 52VN263SH', 'Laptop', 'GIGABYTE', 27490000, 'Gigabyte G7 KE-52VN263SH trang bị bộ vi xử lý intel Core thế hệ 12th với hiệu suất vượt trội cho phép thực hiện các tác vụ hàng ngày nhanh chóng và mượt mà. Để bạn có thể tự do sáng tạo nội dung, livestream hay chơi game bất cứ khi nào bạn muốn.', 'hl_hz:144 Hz;hl_ram:8 GB;hl_cpu:i5-12500H;hl_ssd:512 GB;hl_vga:RTX 3060;hl_lcd:15.6 inch FHD', 'laptop-gaming-gigabyte-g7-ke-52vn263sh'),
(12, 'Laptop Acer Aspire 5 A515 58P 71EJ', 'Laptop', 'ACER', 18990000, 'ới độ phủ sóng trên toàn thế giới, Acer luôn luôn xuất hiện với những dòng sản phẩm mới vô cùng ấn tượng và phù hợp với nhu cầu khách hàng. Không chỉ là tập đoàn đa quốc gia về thiết bị điện tử và phần cứng máy tính, Acer còn đặc biệt đầu tư sản xuất máy tính cá nhân. Trong lần trình làng mới này, nhà sản xuất đã cho ra mắt chiếc Laptop Acer Aspire 5 A515-58P-71EJ NX.KHJSV.00A (Intel Core i7-1355U | 16GB | 1TB | Intel UHD Graphics | 15.6 inch FHD | Win 11 | Steel Gray), đặc biệt phù hợp với dân văn phòng cùng những thông số kỹ thuật hiện đại đáng bất ngờ. ', 'hl_ssd:1 TB;hl_cpu:i7-1335U;hl_vga:Onboard;hl_lcd:15.6 inch FHD;hl_ram:16 GB', 'laptop-acer-aspire-5-a515-58p-71ej'),
(13, 'Laptop Dell Inspiron T7430 N7430I58W1 Silver', 'Laptop', 'DELL', 22990000, 'Laptop Dell Inspiron T7430 N7430I58W1 là một sản phẩm rất thú vị, với khả năng gập 360 độ của bản lề, bạn có thể sử dụng như một chiếc tablet, cùng màn hình cảm ứng đầy nhạy bén, cho bạn trả nghiệm laptop đấy thời thượng, đẳng cấp. Kích thước nhỏ gọn 314 x 226 x 17.4 mm cùng cân nặng 1,64kg, sẽ là chiếc laptop đầy tiện lợi dành cho bạn, có thể đồng hành cùng bạn trên mọi chặng đường thành công. Phần nắp và phần nghỉ tay được sử dụng vật liệu kim loại cho bạn cảm giác thoải mái khi sử dụng laptop. Bạn còn được Dell ưu ái tặng 1 chiếc bút, cho bạn sử dụng màn hình cảm ứng hiệu quả hơn. Cài đặt sẵn hệ điều hành Windows 11 Home + Office Student cho bạn không cần tốn thêm chi phí khi muốn sử hửu sản phẩm cao cấp này.', 'hl_cpu:i5-1335U;hl_vga:Onboard;hl_ssd:512 GB;hl_ram:8 GB;hl_lcd:14 inch FHD+', 'laptop-dell-inspiron-t7430-n7430i58w1-silver'),
(14, 'Laptop Dell Vostro 3530 V5I5267W1 Gray', 'Laptop', 'DELL', 15490000, 'Bạn đang cần một chiếc laptop phục vụ cho nhu cầu học tập, hay bạn dân văn phòng thì hiệu năng của Dell Vostro 3530 V5I5267W1 đều xử lý các tác vụ ổn định nhất. Thiết kế tinh tế nhỏ gọn 358 x 235 x 16.69 mm, phù hợp với tính chất công việc linh động của bạn, chỉ nhẹ có 1,66kg dễ dàng cho bạn mang đi bất kỳ đâu. Phục vụ nhu cầu của bạn xuyên suốt  khoảng 3 đến 4 tiếng với pin 3-cell cho bạn thời gian sử dụng vừa đủ cho một buổi làm việc. ', 'hl_cpu:i5-1335U;hl_hz:120 Hz;hl_ssd:256 GB;hl_ram:8 GB;hl_lcd:15.6 inch FHD IPS;hl_vga:Onboard', 'laptop-dell-vostro-3530-v5i5267w1-gray'),
(15, 'Laptop gaming Acer Aspire 7 A715 76G 5806', 'Laptop', 'ACER', 20990000, 'Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H (NH.QMFSV.002) đến từ nhà Acer với các thông số cấu hình đầy mạnh mẽ, card rời RTX 30 series cũng như sở hữu một mức giá thành lý tưởng, chắc chắn sẽ mang đến cho anh em những trải nghiệm tuyệt vời.', 'hl_ssd:512 GB;hl_hz:144 Hz;hl_vga:RTX 3050;hl_cpu:i5-12450H;hl_ram:16 GB;hl_lcd:15.6 inch FHD', 'laptop-gaming-acer-aspire-7-a715-76g-5806'),
(16, 'Bàn phím E-Dra EK312 Alpha Blue Switch', 'Keyboard', 'E-DRA', 579000, 'E-Dra EK312 là dòng sản phẩm bàn phím cơ chủ đạo của hãng, chính vì vậy mà phím được trang bị ngay dòng switch E-Dra (chính hãng sản xuất) mới nhất với đầy đủ cả 3 loại switch cơ bản: Blue - Brown - Red. Loại switch mới này có stem vuông, chống bụi cực tốt và tăng độ chắc chắn, giảm rung lắc khi gõ. Được trang bị loại switch mới này, E-Dra EK312 cho chất lượng phím bấm cực tốt, có thể nói là chất lượng phấm bấm tốt nhất, mượt mà nhất trong phân khúc giá.', 'hl_keycap:ABS;hl_size:Full size;hl_connect:Có dây', 'bàn-phím-e-dra-ek312-alpha-blue-switch'),
(17, 'Bàn phím chơi game cơ E-Dra EK384 Triple Mode Beta Red Switch', 'Keyboard', 'E-DRA', 749000, 'E-Dra EK384 Triple Mode có thể coi là một bản nâng cấp lớn từ mẫu bàn phím cơ EK384 RGB trước đây, với đủ 3 chế độ kết nối \"hợp thời\" nhất là Wireless 2.4Ghz (dùng đầu nhận USB), Bluetooth và Có dây (dây tháo rời). Với đầy đủ các mode kết nối đa dạng tời vậy, E-Dra EK384 Triple Mode có thể thương thích với tất cả các thiết bị từ PC, Laptop cho tới máy MAC, Smartphone...... Và đây cũng đang là phím cơ không dây 3 mode có giá tốt nhất trên thị trường hiện tại.', 'hl_connect:Wireless;hl_keycap:ABS;hl_size:TKL', 'bàn-phím-chơi-game-cơ-e-dra-ek384-triple-mode-beta-red-switch'),
(18, 'Bàn phím Rapoo V500 Pro Multimode TKL Blue Switch', 'Keyboard', 'RAPOO', 890000, 'Bàn phím cơ không dây Rapoo V500 Pro Multimode TKL 87 được trang bị switch phím cơ độc quyền của Rapoo cùng khả năng kết nối không dây Wireless 2.4Ghz. Bàn phím còn tích hợp đầy đủ các phím Multimedia kèm đèn LED nhiều màu tuyệt đẹp. Bên cạnh đó, sản phẩm sở hữu viên pin có dung lượng lên đến 4000mAh mang lại thời lượng sử dụng ổn định.', 'hl_connect:Wireless;hl_keycap:ABS;hl_size:TKL', 'bàn-phím-rapoo-v500-pro-multimode-tkl-blue-switch'),
(19, 'Bàn phím cơ Corsair K100 RGB Opx Switch', 'Keyboard', 'CORSAIR', 5390000, 'Thiết kế tinh tế của bàn phím cơ Corsair K100 RGB có khung nhôm bền và đèn nền RGB động cho mỗi phím được tạo điểm nhấn bởi Đèn RGB ba mặt 44 vùng.\n\nNút bánh xe điều khiển iCUE đa chức năng, hoàn toàn có thể lập trình để thực hiện các hành động tùy chỉnh trong trò chơi và ứng dụng.\n\nVới sáu phím macro chuyên dụng, hoàn toàn có thể lập trình cho các macro phức tạp và tùy chỉnh lại phím trong phần mềm iCUE.', 'hl_size:Full size;hl_keycap:PBT;hl_connect:Có dây', 'bàn-phím-cơ-corsair-k100-rgb-opx-switch'),
(20, 'Bàn phím Razer BlackWidow V4 X Green Switch', 'Keyboard', 'RAZER', 3290000, 'Chạy trạm chiến đấu của bạn ở công suất tối ưu với trung tâm điều khiển hoàn hảo cho thiết lập PC của bạn. Được trang bị các phím macro và phím đa phương tiện, có quyền truy cập vào các lệnh và phím tắt nâng cao khi bạn đắm mình trong bàn phím cơ cải tiến cao, kết hợp hoàn hảo với Razer Chroma™ RGB.', 'hl_connect:Có dây;hl_size:Full size;hl_keycap:ABS', 'bàn-phím-razer-blackwidow-v4-x-green-switch'),
(21, 'Chuột Logitech G Pro X Superlight 2 Black', 'Mouse', 'LOGITECH', 3390000, 'Tiếp nối sự thành công vang dội của siêu phẩm G Pro X Superlight, phiên bản tiếp theo của dòng chuột Logitech đình đám này đã chính thực được ra mắt với tên gọi Logitech G Pro X Superlight 2 Wireless. Nhanh hơn, nhẹ hơn, chính xác hơn, bền bỉ hơn, không quá khi khẳng định Logitech G Pro X Superlight 2 Wireless chính là mẫu chuột Gaming số 1 hiện tại.', 'hl_led:Led RGB;hl_connect:Wireless;hl_pin:Pin sạc', 'chuột-logitech-g-pro-x-superlight-2-black'),
(22, 'Chuột công thái học Logitech Lift Vertical Pink', 'Mouse', 'LOGITECH', 1290000, 'Bạn là một nhân viên nữ đang tìm kiếm mã chuột công thái học vừa vặn với bàn tay nhỏ hoặc vừa. Tìm hiểu ngay mã chuột Logitech Lift Vertical màu Hồng này nhé. Gọn nhẹ, cuộn- nhấp vô cùng êm ái, tốc độ có thể điều chỉnh từ thấp đến cao, nói chung những gì được thiết kế với sản phẩm này là hướng tới chăm sóc sức khỏe và bảo vệ môi trường.', 'hl_connect:Wireless;hl_pin:Pin rời;hl_led:DPI - 4000', 'chuột-công-thái-học-logitech-lift-vertical-pink'),
(23, 'Chuột Logitech MX Anywhere 3S Graphite', 'Mouse', 'LOGITECH', 1690000, 'Chuột không dây Logitech MX Anywhere 3S với thiết kế kết nối không dây tiện lợi cùng màu đen huyền bí sẽ hài hòa với máy tính bàn hay laptop của bạn. Với tính năng Quiet Clicks của chuột Logitech giúp bạn tập trung vào công việc mà không bị mất tập trung. Trải nghiệm cảm biến 8k DPI nhanh chóng, chuẩn trong từng cú nhấp chuột.', 'hl_pin:Pin sạc;hl_connect:Wireless;hl_led:DPI - 8000', 'chuột-logitech-mx-anywhere-3s-graphite'),
(24, 'Chuột E-DRA EM623W Wireless RGB Trắng', 'Mouse', 'E-DRA', 279000, 'Với mức giá không thể hợp lý hơn, chỉ chưa tới 300.000d mà bạn đã có thể sở hữu một sản phẩm chuột gaming với những tính năng vượt trội, bạn có tin được không? Không gì là không thể với E-Dra EM623W – sản phẩm chuột gaming mới ra mắt nhà E-Dra hỗ trợ chơi game hoàn hảo với 03 chế độ kết nối, có tích hợp LED RGB rực rỡ. Không để bạn chờ đợi lâu, hãy cùng Phúc Anh tìm hiểu thêm các thông tin chi tiết về sản phẩm Gaming Gear này!', 'hl_led:RGB;hl_pin:Pin sạc;hl_connect:Wireless', 'chuột-e-dra-em623w-không-dây-rgb-trắng'),
(25, 'Chuột DareU EM901X RGB Superlight Wireless Pink', 'Mouse', 'DAREU', 790000, 'DareU EM901X là phiên bản nâng cấp từ EM901 khi tích hợp một số tính năng và phụ kiện kèm theo. Trong đó nổi bật nhất chính là đi kèm dock sạc rất cao cấp và tiện lợi. DareU EM901X là mẫu chuột gaming không dây duy nhất có mức giá dưới 1 triệu đồng - có tích hợp dock sạc. Dock đi kèm của chuột được kết nối với PC thông qua dây USB, dock có LED gầm RGB tự động đồi màu rất đẹp (có thể tắt - bật led theo ý muốn). Trên dock có khe cắm đầu USB Receiver tháo lắp dễ dàng, để biến dock thành trạm thu tín hiệu, giúp cho DareU EM901X cực kỳ linh hoạt khi người dùng có thể mang chuột theo laptop mà không cần phải mang theo cả dock.', 'hl_connect:Wireless;hl_pin:Pin sạc;hl_led:Led RGB', 'chuột-dareu-em901x-rgb-superlight-wireless-pink'),
(26, 'Tai nghe Razer Barracuda X 2022', 'Headphone', 'RAZER', 2390000, 'Đã từ lâu, Razer luôn được biết tới như một thương hiệu rất chiều lòng khách hàng. Để mang tới một lựa chọn chất lượng, Razer cùng đội ngũ thiết kế chuyên nghiệp đã nghiên cứu, phát triển và cho ra mắt chiếc tai nghe gaming không dây mới nhất của mình. Chiếc tai nghe Razer Barracuda X Wireless.', 'hl_connect:Wireless;hl_typehp:Chụp tai;hl_connector:USB-A', 'tai-nghe-razer-barracuda-x-2022'),
(27, 'Tai nghe Gaming Rapoo VH160', 'Headphone', 'RAPOO', 390000, 'Là chiếc tai nghe lý tưởng dành cho các tín đồ eSports, Rapoo VH160 sở hữu cúp tai mềm cách âm tốt, đồng thời thể hiện chất âm xuất sắc nhờ công nghệ âm thanh vòm 7.1 sống động. Bạn sẽ dễ dàng kết nối sản phẩm với laptop, PC và khơi dậy cảm hứng gaming qua đèn LED RGB độc đáo.', 'hl_typehp:Chụp tai;hl_connector:USB-A;hl_connect:Có dây', 'tai-nghe-gaming-rapoo-vh160'),
(28, 'Tai nghe Corsair HS35 V2 Xanh', 'Headphone', 'CORSAIR', 990000, 'Bạn đang tìm kiếm một tai nghe chơi game mang lại âm thanh sống động, thoải mái khi đeo và tương thích đa nền tảng? Tai nghe Corsair HS35 Surround v2, Carbon chính là lựa chọn hoàn hảo dành cho bạn. Với thiết kế hiện đại, chất lượng âm thanh tuyệt vời và micro thu âm rõ ràng, HS35 Surround v2 sẽ giúp bạn chinh phục mọi trận chiến một cách dễ dàng.', 'hl_typehp:Chụp tai;hl_connector:Jack 3.5mm;hl_connect:Có dây', 'tai-nghe-corsair-hs35-v2-xanh'),
(29, 'Tai nghe Asus ROG Delta Core', 'Headphone', 'ASUS', 1990000, 'Tai nghe Asus ROG Delta Core', 'hl_connect:Có dây;hl_typehp:Chụp tai;hl_connector:Jack 3.5mm', 'tai-nghe-asus-rog-delta-core'),
(30, 'Tai nghe Edifier Wireless W820NB Plus Trắng Ngà', 'Headphone', 'EDIFIER', 1090000, 'Tai nghe bluetooth Edifier W820NB Plus là một bản nâng cấp rất đáng giá, trang bị nhiều tính năng hiện đại. Và nhà sản xuất hoàn thiện thiết bị tai nghe Edifier cực kỳ tối ưu, đơn giản, thiết kế trẻ trung. ', 'hl_connect:Wireless;hl_connector:USB-C;hl_typehp:Chụp tai', 'tai-nghe-edifier-không-dây-w820nb-plus-trắng-ngà'),
(31, 'PC CCG AMD R5-5600X/ VGA RTX 3050', 'PC', 'COCHAGEAR', 17990000, 'Nếu bạn là một người thường phải làm việc nhiều với các phần mềm dựng phim nhưng vẫn cần chơi game thì chắc chắn là bạn phải xem qua PC GVN AMD R5-5600X/ VGA RTX 3050 - một dàn PC toàn năng vừa cho hiệu năng làm việc xuất sắc, vừa có card đồ họa đủ mạnh để bạn cân tốt mọi game hiện nay.', 'hl_ram:16GB;hl_cpu:R5 5600X;hl_main:B550;hl_vga:RTX 3050;hl_ssd:500GB', 'pc-ccg-amd-r5-5600x--vga-rtx-3050'),
(32, 'PC CCG G-STUDIO Intel i7-13700/ VGA RTX 3060', 'PC', 'COCHAGEAR', 35490000, 'Sở hữu tổng thể đẹp mắt, hiệu năng đỉnh cao PC GVN G-STUDIO Intel i7-13700/ VGA RTX 3060 sẽ là cấu hình PC đồ họa bạn đang tìm kiếm.', 'hl_main:B760;hl_ssd:1TB;hl_cpu:i7 13700;hl_ram:16GB;hl_vga:RTX 3060\"', 'pc-ccg-g-studio-intel-i7-13700--vga-rtx-3060'),
(33, 'PC CCG Intel i7-14700F/ VGA RTX 4070 Ti', 'PC', 'COCHAGEAR', 52990000, 'PC GVN Intel i7-14700F/ VGA RTX 4070 Ti bộ máy PC chơi game cấu hình cao, thiết kế đẹp mắt ấn tượng mang đến cho người chơi những trải nghiệm thú vị giải trí với những tựa game AAA, game Moba & FPS,..mình yêu thích.', 'hl_vga:RTX 4070 Ti;hl_ram:32GB;hl_ssd:500GB;hl_main:Z790;hl_cpu:i7 14700F', 'pc-ccg-intel-i7-14700f--vga-rtx-4070-ti'),
(34, 'PC CCG AMD R9-7900X/VGA RTX 4080', 'PC', 'COCHAGEAR', 99990000, 'Đặt nền móng cho nguồn sức mạnh khổng lồ trên PC GVN AMD R9-7900X/VGA RTX 4080, cái tên được lựa chọn chính là ASUS ROG CROSSHAIR X670E HERO (DDR5). Là sản phẩm thuộc về dòng sản phẩm mainboard cao cấp từ ASUS, ASUS ROG CROSSHAIR X670E HERO (DDR5) trang bị gần như mọi công nghệ tối tân nhất cho khả năng khai thác sức mạnh từ linh kiện trên bo mạch. Chipset X670 cao cấp cho khả năng tương thích cùng thế hệ vi xử lý tiên tiến nhất với mục tiêu tạo nên bộ PC AMD cao cấp nhất.', 'hl_cpu:R9 7900X;hl_main:X670;hl_ssd:1TB;hl_vga:RTX 4080;hl_ram:32GB', 'pc-ccg-amd-r9-7900x-vga-rtx-4080'),
(35, 'PC CCG AMD R9-7950X/VGA RTX 4090', 'PC', 'COCHAGEAR', 115990000, 'Sở hữu thiết kế một cách hiện đại và mọi thông số được cải tiến gấp nhiều lần so với phiên bản tiền nhiệm trước. Dòng mainboard ASUS với những nâng cấp trong phiên bản ASUS ROG CROSSHAIR X670E HERO (DDR5) hứa hẹn PC GVN AMD R9-7950X/VGA RTX 4090 sẽ tăng hiệu suất lên đáng kể.', 'hl_main:X670;hl_ram:32GB;hl_cpu:R9 7950X;hl_vga:RTX 4090;hl_ssd:1TB', 'pc-ccg-amd-r9-7950x-vga-rtx-4090');

-- --------------------------------------------------------

--
-- Table structure for table `products' images`
--

CREATE TABLE `products' images` (
  `ID_Product` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products' images`
--

INSERT INTO `products' images` (`ID_Product`, `Image`) VALUES
(1, 'https://product.hstatic.net/200000722513/product/7_27_a3f6dfa7a8854d958953ad81268880d2.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_1_fb9426a5bbe4414d8b06fb7f2abb445f_2cea6361a38f4f02af2dbeb9ac9adff8.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_2_d5c079025f074dbd94b457ad53695f63_98c6a1465b5c487a8cdc104304a9cd8d.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_3_35af0f843889402ca7eef5c38b67862b_6247317935c341c0978fa1630f654abd.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_4_c7dd7175a46a4339b41c32ad950de86d_ff9d44cded2347babb8f41626edd1b29.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_5_1395ecee77ac47768a99f4b3cf77fc04_b41bc7bd9c854d69b84f5f1da0ee1be7.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_6_f98a79a286ef4e82bef95da67b59a782_93551e91c2d84a319fb70462bc0d6849.png'),
(1, 'https://product.hstatic.net/200000722513/product/asus-zenbook-duo-oled-ux8406ma-pz307w_6f9ca3c214cf44efb3711c515400e508_80a87396502c47ec88d6fe4217d12209.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_7_8de8ff07101e45e780d3a118f52dac79_14ff9fa1832641659b47b1d2687af8ad.png'),
(1, 'https://product.hstatic.net/200000722513/product/us-zenbook-duo-oled-ux8406ma-pz307w_8_20737d3b152345888d89ef0d2edc2169_ebe42f1014db4388873622577e0ceed0.png'),
(1, 'https://product.hstatic.net/200000722513/product/s-zenbook-duo-oled-ux8406ma-pz307w_10_6094d7bf7dc54c6aaa985c6a653b24ea_1d33458f0bd84b64b994e5377c1190c3.png'),
(1, 'https://product.hstatic.net/200000722513/product/s-zenbook-duo-oled-ux8406ma-pz307w_11_7d43b01efbae42eab8207a2414a2630c_edf510ed3b4f4b1ab8e3c7b1cd5f8390.png'),
(1, 'https://product.hstatic.net/200000722513/product/s-zenbook-duo-oled-ux8406ma-pz307w_12_bd7b5fabd1974460a92ad5d963865d0a_36ad885aa94c447fbbc29cfe162e02f5.png'),
(1, 'https://product.hstatic.net/200000722513/product/s-zenbook-duo-oled-ux8406ma-pz307w_17_1c29034e304c486d86b1bdb76c635f02_01907592b2e2405aad016f211f101711.png'),
(1, 'https://product.hstatic.net/200000722513/product/s-zenbook-duo-oled-ux8406ma-pz307w_18_b960ff005f494d93b4cf9775c32f5947_92c120603cf1442ca8f1c93339c03bc0.png'),
(1, 'https://product.hstatic.net/200000722513/product/s-zenbook-duo-oled-ux8406ma-pz307w_19_f10f7917a15d4917b5d63c997d58b66d_153879b948f04c8998619b60ba96787e.png'),
(2, 'https://product.hstatic.net/200000722513/product/aptop-msi-summit-e14-evo-a12m-211vn-1_5fc0898020c44422b37c9293db1c3edb_d48b2ea8b32449e09f359198932f6f25.png'),
(2, 'https://product.hstatic.net/200000722513/product/aptop-msi-summit-e14-evo-a12m-211vn-2_69ccefa31f57426ebf16dded817bb852_d891f6d91a1a43f1b70917c9a4d9b299.png'),
(2, 'https://product.hstatic.net/200000722513/product/aptop-msi-summit-e14-evo-a12m-211vn-3_875f2f516a024be599d8b66bde2aab15_5b325a96e4f34ef28b6daa69b3604f11.png'),
(2, 'https://product.hstatic.net/200000722513/product/aptop-msi-summit-e14-evo-a12m-211vn-4_e2acbb7c590b4b6099ba40c816eeb19c_32b6f2a5cc674fc5b864be8706c8eb1f.png'),
(2, 'https://product.hstatic.net/200000722513/product/aptop-msi-summit-e14-evo-a12m-211vn-5_592a62fc3c1d4b65b2828a47e436db66_cca5a2cc7f1948479dc4539cd0e5def5.png'),
(3, 'https://product.hstatic.net/200000722513/product/modern-14-silver_99af27c3bebd44339a8601e7c5ea6820.png'),
(3, 'https://product.hstatic.net/200000722513/product/609vn_c01f1c6c165a40868c25fad1c0c1415d_7fe2203e9ca54b93a4592daf00ba60ac.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_1_7970d4af253e4a068208f7c90918d134_eb314d67db4e4739a349a6782624286a_ef6fcdccb79342e28dc94ef53e723cc7.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_2_f2b52f20035046999e58bb5166d096f6_70db9079681f440aa4859dbfee394659_a82b6709ebcf465f835b2f15adb4c995.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_3_fcfbd2806bf3478ab0aa6e4363881a8a_d1f46a28c6f547e6906a63bf35249c4b_c69069a6ee3c4c7086b46063ec3d06c4.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_4_35e16a65b6e84184ac0b261ea40e87dc_f345e57f9ef140978ea43a2bea8739ca_d53d9705b715412cbc06b0cb601194eb.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_7_47b93be5a02a4bdaa7aa736ecb38f28f_7053e3ed0d4d4acfa2fabe0e814ff65a_c0643a7a477c49909a3e1d3920ee8c07.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_5_1c6ee87a4cfe47deba3e7ee0686a8931_7fbf22b94e4141b89ebaaf96e4c957a0_f9ee427119ad496d82ff86f31f5729f9.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_8_195a89c678bf49dda433c682cb00ba86_7ace52bf6be74d01b8cc0715b0992915_afedb486db5b41eabea65a82093d513f.png'),
(3, 'https://product.hstatic.net/200000722513/product/5u_6_2896fff53c354d31b794b91a19cfae17_f77c0663265940979fb65e6376035ae9_25a2ba52a7af473584efdf6746ddaa14.png'),
(4, 'https://product.hstatic.net/200000722513/product/km095w_9e26278b10f642f18dd9855f30828c43.png'),
(4, 'https://product.hstatic.net/200000722513/product/vobook_14_oled_x1405v_m1405y_cool_silver_black_keyboard_12_fingerprint_e0c64103cf8e411b8934a5abd92ea7c4.png'),
(4, 'https://product.hstatic.net/200000722513/product/vobook_14_oled_x1405v_m1405y_cool_silver_black_keyboard_07_fingerprint_776fe1c0bfb7488e90ef8f1737c06abb.png'),
(4, 'https://product.hstatic.net/200000722513/product/vobook_14_oled_x1405v_m1405y_cool_silver_black_keyboard_08_fingerprint_23951ef8f70f40c2a1b505f2d862b3fd.png'),
(4, 'https://product.hstatic.net/200000722513/product/vobook_14_oled_x1405v_m1405y_cool_silver_black_keyboard_13_fingerprint_d48fac641f1f4f0bbecd3ef4ef61e570.png'),
(4, 'https://product.hstatic.net/200000722513/product/vobook_14_oled_x1405v_m1405y_cool_silver_black_keyboard_05_fingerprint_3834af82e862489189bc2e3b98c8cfb5.png'),
(4, 'https://product.hstatic.net/200000722513/product/w800__4__646ff4c56ef24741bf06250ddfa9fd36.png'),
(4, 'https://product.hstatic.net/200000722513/product/1405v_product_photo_1s_cool_silver_01_1c4d9724621f4f8797df8aef589da8d6_8ae99c98b240400d9d6871324fb98d94.png'),
(4, 'https://product.hstatic.net/200000722513/product/1405v_product_photo_1s_cool_silver_02_8de5e9437e654d6c83a3b6f1b8182698_4b7aebbc7ad245bebab303902719a526.png'),
(5, 'https://product.hstatic.net/200000722513/product/ava_1c80143505ff44069919123d18968d5c.png'),
(5, 'https://product.hstatic.net/200000722513/product/03_fx507_1_ca8924a13157430aaa815b63d899308e.png'),
(5, 'https://product.hstatic.net/200000722513/product/04_fx507_953c67f40bf240c9ba3988cb1d4df490.png'),
(5, 'https://product.hstatic.net/200000722513/product/05_fx507_2_2eac879941fe430385d3dab264bc80c4.png'),
(5, 'https://product.hstatic.net/200000722513/product/01_fx507_2_9ad32d0ee51a4029a26fc1ed8a7040a8.png'),
(5, 'https://product.hstatic.net/200000722513/product/20_fx507_2_1aae3b711ccd4cb3bb5d01bdf1f99141.png'),
(5, 'https://product.hstatic.net/200000722513/product/10_fx507_b_1_de93c9a7a8394133beda5ea60c3a6070.png'),
(5, 'https://product.hstatic.net/200000722513/product/11_fx507_b_1_39f1488f22af487a8fb95df955a4d5d8.png'),
(6, 'https://product.hstatic.net/200000722513/product/download.png_4e477d7687504da981305f394bd912ab.jpg'),
(6, 'https://product.hstatic.net/200000722513/product/an-hinh-asus-tuf-gaming-vg279q3a-27-fast-ips-180hz-gsync-chuyen-game-1_38984a83af5f47f9bdc46ae1b2bd058f.jpg'),
(6, 'https://product.hstatic.net/200000722513/product/an-hinh-asus-tuf-gaming-vg279q3a-27-fast-ips-180hz-gsync-chuyen-game-2_00784738d2bd45b29e3f698f865e4dce.jpg'),
(6, 'https://product.hstatic.net/200000722513/product/an-hinh-asus-tuf-gaming-vg279q3a-27-fast-ips-180hz-gsync-chuyen-game-3_76313ca212944116878e79d368ae1490.jpg'),
(6, 'https://product.hstatic.net/200000722513/product/an-hinh-asus-tuf-gaming-vg279q3a-27-fast-ips-180hz-gsync-chuyen-game-4_016964d45d9e4505b04d2a2cccd069ea.jpg'),
(6, 'https://product.hstatic.net/200000722513/product/an-hinh-asus-tuf-gaming-vg279q3a-27-fast-ips-180hz-gsync-chuyen-game-5_cc748fd5bef24752ac00c31317bd1c7e.jpg'),
(6, 'https://product.hstatic.net/200000722513/product/an-hinh-asus-tuf-gaming-vg279q3a-27-fast-ips-180hz-gsync-chuyen-game-6_ac1fb7255d2b4056a9c1d48a8b78b088.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/gigabyte_g34wqc_a_gearvn_37e0a35baeaf44b798e477d217613b54_1f34a74e2ee7402d869992a273948a2f.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/qc-a-34-2k-144hz-hdr400-chuyen-game-1_909a29f8e01d42f2894ca4ad1ec4a2e6_4abc5559c09647bca9c6bb7532fcc6c2.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/qc-a-34-2k-144hz-hdr400-chuyen-game-1_909a29f8e01d42f2894ca4ad1ec4a2e6_4abc5559c09647bca9c6bb7532fcc6c2.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/qc-a-34-2k-144hz-hdr400-chuyen-game-2_4f765b4b0e864b1c98f4a3f49351beef_7f77b8df249f41ef8e5dc4c096d79b9f.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/qc-a-34-2k-144hz-hdr400-chuyen-game-3_d4570912172c48008b18ea23fc65339b_20cfa404fcc84ed392be038f7c216504.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/qc-a-34-2k-144hz-hdr400-chuyen-game-4_59e1cab0f8504d28a6ae2df64ff8f94f_9792c932664c431796f90be916fb2994.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/qc-a-34-2k-144hz-hdr400-chuyen-game-5_0ad4f383bdf34e8f8fa38a549fa225c9_8fca21d5ae764c5d989b3f8ffbee311e.jpg'),
(7, 'https://product.hstatic.net/200000722513/product/qc-a-34-2k-144hz-hdr400-chuyen-game-6_384c816122514d9885aa9e9207268d7a_3922957ec7984e6b91a5599df7ef017b.jpg'),
(8, 'https://product.hstatic.net/200000722513/product/gearvn-man-hinh-cong-gigabyte-gs27fc-27-180hz-chuyen-game-1_21da6b46fd9044448d11e02416cb90ec.png'),
(8, 'https://product.hstatic.net/200000722513/product/gearvn-man-hinh-cong-gigabyte-gs27fc-27-180hz-chuyen-game-5_6886415ca7934e8aba1a5b121f00b671.png'),
(8, 'https://product.hstatic.net/200000722513/product/gearvn-man-hinh-cong-gigabyte-gs27fc-27-180hz-chuyen-game-3_8a3f3b6d5dac4e459a3d0c4788e3c812.png'),
(8, 'https://product.hstatic.net/200000722513/product/gearvn-man-hinh-cong-gigabyte-gs27fc-27-180hz-chuyen-game-2_0165ba493d9c4001930dc69d5f815a67.png'),
(8, 'https://product.hstatic.net/200000722513/product/gearvn-man-hinh-cong-gigabyte-gs27fc-27-180hz-chuyen-game-4_af4a07c3dae14a15a1ca4fa479e22031.png'),
(8, 'https://product.hstatic.net/200000722513/product/gearvn-man-hinh-cong-gigabyte-gs27fc-27-180hz-chuyen-game-6_6f6a98eac98642ff8e7887b3c955e10a.png'),
(9, 'https://product.hstatic.net/200000722513/product/asus_xg49vq_144hz_7cf2f37ec4534fb5b37216b0d40fbc73_ef806183224844dd8e20b7c0f5b28867.jpg'),
(9, 'https://product.hstatic.net/200000722513/product/eyecare_xg_series_aa43f4b4c7bd4ea881eb47d26d1c7734_0f0da6c1dac34686bf24a86a83fe2598.jpg'),
(9, 'https://product.hstatic.net/200000722513/product/asus-rog-xg49vq-08_be1b80c6c2ab4d2eb62e2fada7166a16_317ace1cbe064c1abe7ffba59918bdeb.png'),
(9, 'https://product.hstatic.net/200000722513/product/asus-rog-xg49vq-10_9c9bf8726adf4a1aa2de1eb65fd9a374_112d2dc1b73a442d9a0ca219c6a3fc42.png'),
(9, 'https://product.hstatic.net/200000722513/product/asus-rog-xg49vq-11_6cd1afe3a49e4e4dafe3ba382545dafc_30f45de3114e462295216f03b6420530.png'),
(9, 'https://product.hstatic.net/200000722513/product/asus-rog-xg49vq-06_89c16d15caeb4c03b4536e8a3fcdcb9a_70282c9d973240a992c7c73af128e714.png'),
(10, 'https://product.hstatic.net/200000722513/product/1024_ae68483fa4f142558f1c0b0d8baab688.png'),
(10, 'https://product.hstatic.net/200000722513/product/1024__1__136cc86302aa4898ae8048ce30c35b77.png'),
(10, 'https://product.hstatic.net/200000722513/product/1024__2__27c1d0bdc83c44bd83865fb9b8c8f253.png'),
(10, 'https://product.hstatic.net/200000722513/product/product_1693980419f7f6800b10eacdfbb16cab889c814ba0_c60460cafcb545239e377803b4213a6c.png'),
(10, 'https://product.hstatic.net/200000722513/product/1024__4__bee0ed68cf83472caf24bc4aaa41b167.png'),
(10, 'https://product.hstatic.net/200000722513/product/1024__3__58d9c7410135489ca44e24aef772002b.png'),
(11, 'https://product.hstatic.net/200000722513/product/top-gaming-gigabyte-g7-ke-52vn263sh-1_534bcc4059944bd9941c419281e7b23c_acb1cac548584041acd0c1176050b547.png'),
(11, 'https://product.hstatic.net/200000722513/product/top-gaming-gigabyte-g7-ke-52vn263sh-2_09b7c4cb700d4a2f99c0bab98688752d_b5bbb5bf7a0846d5b1bb99fdd0384d33.png'),
(11, 'https://product.hstatic.net/200000722513/product/top-gaming-gigabyte-g7-ke-52vn263sh-3_84b7f81803ce4c9586b29990b75921c7_b258f25e51ae48aa861e61a480d040bd.png'),
(11, 'https://product.hstatic.net/200000722513/product/top-gaming-gigabyte-g7-ke-52vn263sh-4_297069bf67f94580aa43807d0570fc46_dd9a432e53bf4ac9a4e6cbe36ac3d555.png'),
(11, 'https://product.hstatic.net/200000722513/product/top-gaming-gigabyte-g7-ke-52vn263sh-5_1702ece873ab44ee9b8ebd57ffb372ca_8d6cb246ecea4f68af73372fc02dbba5.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-1_e9e697ec1a934534891d0129e495e9b9.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-2_cf332b9be35e4974bad323aac17a4f9a.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-3_14d9c51b2e4545abb018edf17604da04.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-4_256cd42ce244420c9f774e99f70859f4.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-5_0bf9279d69794995bcbe9bd6bfce91ab.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-6_e6c5d104890e45978e7d6f99e2cbf5c5.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-7_1fef261e1daf469cb1caddf1e6ad569b.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-8_6f691d481e4449579a94d20120718605.png'),
(12, 'https://product.hstatic.net/200000722513/product/gearvn-laptop-acer-aspire-5-a515-58p-71ej-9_545b6ee0867244888e3a6b66a9d159e7.png'),
(13, 'https://product.hstatic.net/200000722513/product/n7430i58w1_97351009345a4702bf2d4edbf560bc3f.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-fpr-gallery-2_775d712dd05041e7b1cdabfcee5579ac.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-fpr-gallery-5_a67556c51bef417db7384474189ff584.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-gallery-1_cee09245e30b468683f9310775b3b60a.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7435-t-silver-gallery-11_10ddf5611e9441e7aefb790fa5527629.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-gallery-2_51463e28df074ca2bee91592fa5296ba.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-gallery-4_51dd62e0ff3b4652a9e20a569448d713.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-gallery-7_af2482f990984a72b4f9263b5341e530.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-gallery-8_b2a9388d91b6483b9d8fd9f8c790f906.png'),
(13, 'https://product.hstatic.net/200000722513/product/notebook-inspiron-14-7430-silver-gallery-12_73210fec250843e69fcbfcce0c6fa0e7.png'),
(14, 'https://product.hstatic.net/200000722513/product/vostro-3530_7a36c45673a54b8cb130f07130d1af0d.gif'),
(14, 'https://product.hstatic.net/200000722513/product/gray-aluminum-fpr-gallery-1_eb897d0b3d224bc1a20aba564da865f6_1024x1024_a06db015558d4e73acc553223994cdcd.png'),
(14, 'https://product.hstatic.net/200000722513/product/gray-aluminum-fpr-gallery-2_bdaaa90de42c4b13b75a3984747eaa98_1024x1024_ff5cb7ee1178478cbc8e8f5546a8e3ac.png'),
(14, 'https://product.hstatic.net/200000722513/product/gray-aluminum-fpr-gallery-9_3b019daf77f04f7db163398a0253c844_1024x1024_34bc78c663bc4a38b3c31fc857ec85b4.png'),
(14, 'https://product.hstatic.net/200000722513/product/ray-aluminum-fpr-gallery-10_2fd49555d17348e69c04e2908ce7e09f_1024x1024_e48b41dd4c86496891181adedebccd13.png'),
(14, 'https://product.hstatic.net/200000722513/product/gray-aluminum-fpr-gallery-4_4272458c77214a0a8027c7656e4110d0_1024x1024_af9a088e989a4daf8555020141b6eea3.png'),
(14, 'https://product.hstatic.net/200000722513/product/gray-aluminum-fpr-gallery-5_87b07f58af8d420fb6cbdf2cd8db1ae1_1024x1024_4c93e138f7524a5b85e5cb2b35e0cda7.png'),
(14, 'https://product.hstatic.net/200000722513/product/gray-aluminum-fpr-gallery-6_ff3fb22d23e84048b6930574ac1a8c50_1024x1024_c02ae38dcc50445ba0c129564bd3003e.png'),
(14, 'https://product.hstatic.net/200000722513/product/gray-aluminum-fpr-gallery-7_8eea00b7e585481e8ee402e486355310_1024x1024_76c18cd363284caea6642186b9ecf505.png'),
(15, 'https://product.hstatic.net/200000722513/product/5806_c7b77a20dc234b98a9ae5c1289728814.png'),
(15, 'https://product.hstatic.net/200000722513/product/c74499a310d44709fb6d41b882f68c8_275ee33f2a01496095b715fc1be60638_large_059e8615432d4f909bf3d662f6eeed38.jpg'),
(15, 'https://product.hstatic.net/200000722513/product/b3f29729975431fa497bdf282c836b7_98f154a3842d4df1b0190bff7986b8da_large_3e6f9a80989f4fc8b9b5ca35939f3ce8.jpg'),
(15, 'https://product.hstatic.net/200000722513/product/e4bfc5668a547969331f8d1af45c907_998b1fe06f544acdac1ac40094dae452_large_cdd7b8c10d1a468099ec8dcfb5162474.jpg'),
(15, 'https://product.hstatic.net/200000722513/product/4046d08cb9a4bae8aa644980f0d8186_4a3bcc95b50549b0afa019c24ba529a1_large_5f36410588e940ac976193508c744832.jpg'),
(15, 'https://product.hstatic.net/200000722513/product/9493d712d5b42b993cbdf2c26542c9d_2dbd7c3a58cf499ba4a3da8b5a6c05c5_large_0c3bff9c51af4bf2b67989e736a39f65.jpg'),
(15, 'https://product.hstatic.net/200000722513/product/9a9f6d623584acfa92523b0ed717a19_13c3b0679f564e55b387e14f0bb382be_large_14a535a18fb640a8af8f24c4b6cb8d7f.jpg'),
(15, 'https://product.hstatic.net/200000722513/product/38b41bf896b4627b39cacc5f2c52da8_6094b1df14dc42558e61b2b03a8a5e57_large_1c875c1aba6d47cbbd94ddb96547424f.jpg'),
(15, 'https://product.hstatic.net/200000722513/product/a3596b657f54da2953e1755242f7af2_dddf8aec3c684c0f920a506cf552b478_large_f01ca91fa6fe407bb4088f5eac5167d6.jpg'),
(16, 'https://product.hstatic.net/200000722513/product/477_z4737225210234_d9b90d52e2046c3875dd947b1e7f9a8a__1__54b47bd360ac472785a924b8b9a76788.jpg'),
(16, 'https://product.hstatic.net/200000722513/product/477_ek312_png_465a76482fb046569b4a9ed2bff3e8e8.png'),
(17, 'https://product.hstatic.net/200000722513/product/1_f8b0db520e574123b8e57d8086f5dfab.jpg'),
(17, 'https://product.hstatic.net/200000722513/product/3_7fe19ba872224d02b4751270b5d6f0b4.jpg'),
(17, 'https://product.hstatic.net/200000722513/product/4_1c2694631ed647f987b80ce0ab080ec9.jpg'),
(17, 'https://product.hstatic.net/200000722513/product/thumbphim_dcdf1894d4b5456e85057aed956746d5.jpg'),
(18, 'https://product.hstatic.net/200000722513/product/phim_3bce80fc41904417a26f49a3dceb15b0_6414ffcb5eab40e299c1c6e7fe4d456e_72c5b891f09248a2ac422449fd77b2df.png'),
(18, 'https://product.hstatic.net/200000722513/product/0155_3542fbb6cd544537bea1311c6dbe7e01_7550772dea074c19a46713142d6c2de6_6fdce93127064a9a928483a49c9009a3.jpg'),
(18, 'https://product.hstatic.net/200000722513/product/0684_f7c1e2acfae440e59a3eda4be39a6539_d6b8075be87b48459db18a23043ee5cc_3d47597ef9944ef297406b97c1fbe052.jpg'),
(18, 'https://product.hstatic.net/200000722513/product/9660_a5b5baa9f1584c6f80fe261b91e7f8cf_82708a15599547dbb291a1fc9ec413ca_68b8d560e8f8441aaa25241d6cbe98fa.jpg'),
(18, 'https://product.hstatic.net/200000722513/product/1147_e483976fd9ee41bf96d1d260c26d7af9_3c7f8850143f4a29b9ef1b82f0d081e3_145d57cf526548489ac80be13614920b.jpg'),
(19, 'https://product.hstatic.net/200000722513/product/phim_2ceafcd3b71942409b4724616258c73b_d44aa7fb2a70454d99b01bc9c1117f4f_32c45c81f8ae45858df5c00ccacc8056.png'),
(19, 'https://product.hstatic.net/200000722513/product/gb-4_5f8aa0cb982a4438afec52f8dfb87c12_dae24eebe34349c59588136c8d26d27c_be7cd2c9a064405fb3847cc540fc174f.png'),
(19, 'https://product.hstatic.net/200000722513/product/gb-2_d6cd7853237a45fe8083b031702eed17_984e477caa1e46f68bb21b0bca425312_7e036da377d84766a48841a3b41713da.png'),
(19, 'https://product.hstatic.net/200000722513/product/gb-3_c9b8829ce5434c4d9da6b2f0a7874abc_8557b05901e64a6d98d0ab393b3db13b_15e0103aa0164dea8d9d7141031820c1.png'),
(19, 'https://product.hstatic.net/200000722513/product/gb-1_3acef0197e654548a2114db3ae6e69cb_006cb8f68cf3449fb6ff3db593c6cd8b_4aeabc846ba84b85b7c0551e6014ba65.png'),
(19, 'https://product.hstatic.net/200000722513/product/gb-6_f086eb11aece48d597ca227aaa6d6b3c_0e1f2dd10da143449bc4d1e68e8ec897_39e91693995c4caeba20be9752849551.png'),
(19, 'https://product.hstatic.net/200000722513/product/-rgb_3fec26f9aeb748e3872c03dfe5439d04_0d1af098b33448b58dc0e7a7048e1f43_3d33faca18c549adb0b2c848e0e81ecf.png'),
(20, 'https://product.hstatic.net/200000722513/product/2_0d44b2aba78a4de4b8a0dc4cd7c8eb66.jpg'),
(20, 'https://product.hstatic.net/200000722513/product/thumbphim_f81dad72933546f2a2d78782149b8897.jpg'),
(20, 'https://product.hstatic.net/200000722513/product/z4571450737160_2334de0074ebbfea277f8780519c46ac_99f38086415f45f583e4e6f7d0fb4b49.jpg'),
(20, 'https://product.hstatic.net/200000722513/product/z4571453724049_38fee4cd392684bac3f5f2c9f131aaf8_ce17e6e3ed5944b1b5aac748c28d808a.jpg'),
(21, 'https://product.hstatic.net/200000722513/product/3_7c1bf2ff4e504450a42de78e6cc48087.jpg'),
(21, 'https://product.hstatic.net/200000722513/product/1_4f53124df4294b659bf0777a4439ace3.jpg'),
(21, 'https://product.hstatic.net/200000722513/product/2_a349d6ed143d48ce885ceb61ea783fbc.jpg'),
(21, 'https://product.hstatic.net/200000722513/product/4_16452b61a14f4b56ad054275af359862.jpg'),
(21, 'https://product.hstatic.net/200000722513/product/5_ac663497c93048e8ac68cbc8dcaabeaf.jpg'),
(22, 'https://product.hstatic.net/200000722513/product/lift-gallery-rose-1_a9d640124acd453f9f6028f96958566f_5defc115e6b2445ea5538917c6be393b.png'),
(22, 'https://product.hstatic.net/200000722513/product/lift-gallery-rose-5_56ed1a4c8aa446fd985ee789a6cd7436_b0f40a5aa267480bb2ed7d076c2ef3f6.png'),
(22, 'https://product.hstatic.net/200000722513/product/lift-gallery-rose-4_c9a1ff20dd51485c9742906206492ff2_37abfb5afc2e43d280c56b9195061a78.png'),
(22, 'https://product.hstatic.net/200000722513/product/lift-gallery-rose-3_72ab498dc844428387d7e496d0381f6a_0066f6322f934a8ebb5f7274daef1417.png'),
(22, 'https://product.hstatic.net/200000722513/product/lift-gallery-rose-2_41237e7db46849a7b43e187c29e06a4a_9d8cb1f4d161467e8325283051190c21.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-top-view-graphite_c766ef28d410408c9a24442cf7ab7940.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-3qtr-back-graphite_a1e3668aa5844e3f9c23623efe28cc19.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-side-right-graphite_85416b2d820d4821a0448e91a38df737.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-side-left-graphite_dd1dde4e26e5424fa2dc9950d5abf422.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-3qtr-front-graphite_34fdd45fd8d24427b4d3ccc106559dd8.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-front-view-graphite_cd4405ca86fa4eea82b97fb48f6a34ad.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-fob-graphite_fbebb14b8e7441e29e2a9b9a0af2018c.png'),
(23, 'https://product.hstatic.net/200000722513/product/mx-anywhere-3s-mouse-bottom-view-graphite_63980e20665c448ebdf3a0e1fea9505f.png'),
(24, 'https://product.hstatic.net/200000722513/product/482_623w___web___1_80f2db2cb87542d9a3bdfeb270bd0f02.jpg'),
(24, 'https://product.hstatic.net/200000722513/product/482_623w___web___2_3c2b9c2b25074f4b97059f201a4d35c5.jpg'),
(25, 'https://product.hstatic.net/200000722513/product/khong-day-gaming-dareu-em901x-pink-01_542ff31224024dd3813ed701f4926555_02f0e97ca40347fabb5ca635370597a5.jpg'),
(25, 'https://product.hstatic.net/200000722513/product/khong-day-gaming-dareu-em901x-pink-02_7633cc3b5fb0412e9f1712c8da247bd1_385a644c39be485188446be48726ab0e.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/thumbtainghe_2dabdc1c9373434ab81022d11552600c_a27bc61bd0564a69b22b79b5c08aa857.png'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-5_4e32c8395f2e4a908182de7be63375b6_5eb98aba178c40c9bc2041a0b9350489.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-6_d49cac9fd075497987b72fc23b30e020_d51f1719e81a40ad83ee2c2469c02a85.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-4_aec8d51f27a44546a6a31fc6b30e2b55_589dc33f899b4239a53d230475482c91.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-8_78bc27df494d471ab4287e3d453d56cd_8508e93ea208476f969652122d2f30b0.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-9_d9805b390c9740b3ba120b7aeca73b8b_9b8d9ec5e10b43b4af40c5bab0b7665b.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-10_beb6e4a0ae25495da3c8d53a28c80287_583a290843e441a98f60b9782a43bc02.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-1_1bf080b2dd2e44ff9bc69d9611b91ec8_c7c80cbc2434433cba44accb8282bb56.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-2_e38c7c8978694032b83918864d803bf3_42140f433de140cfb3de7834f0cdc444.jpg'),
(26, 'https://product.hstatic.net/200000722513/product/tai-nghe-razer-barracuda-x-2022-3_bd252b57ba254cb6ade72d1161a17c90_9618b54eae074cafb95e2fdd4810323e.jpg'),
(27, 'https://product.hstatic.net/200000722513/product/gearvn-tai-nghe-gaming-rapoo-vh160-1_03c10c9a8cdd46039cc536c3292f663f_9288f6c2b45f4996892b94306f135188.png'),
(27, 'https://product.hstatic.net/200000722513/product/gearvn-tai-nghe-gaming-rapoo-vh160-3_106a064cafeb48b0a87cd95e0ea49efa_c183fa4ca7b94392ac72400a6fe771f9.png'),
(27, 'https://product.hstatic.net/200000722513/product/gearvn-tai-nghe-gaming-rapoo-vh160-4_3a66563695144db0b9a93946f4bca8c2_eacb0ec703344cb883cdee785d3973a7.png'),
(27, 'https://product.hstatic.net/200000722513/product/gearvn-tai-nghe-gaming-rapoo-vh160-5_d41ed90f7cf64ddd9c5df06e288e083a_416333e7b20d4c96a0d8734deb3881ff.png'),
(27, 'https://product.hstatic.net/200000722513/product/gearvn-tai-nghe-gaming-rapoo-vh160-6_63af39d3fc464536a5e5d88547aede76_fb785f2c46c645a69d3b69c599c66f95.png'),
(28, 'https://product.hstatic.net/200000722513/product/7q3arvrl_34a2259ac9714da0adad025b0d38ea51.png'),
(28, 'https://product.hstatic.net/200000722513/product/erp3oqhr_80cbadeab93b41e6aa78456f2b7773eb.png'),
(28, 'https://product.hstatic.net/200000722513/product/vyketuqd_5b40700b42e14b3b9388f7444b8eb53e.png'),
(28, 'https://product.hstatic.net/200000722513/product/53po5epr_ae9a64bda0e44118ae58264b73bb912a.png'),
(28, 'https://product.hstatic.net/200000722513/product/e9a8v9j4_0fe7d72995a34d60a4f3f014d6a690ad.png'),
(28, 'https://product.hstatic.net/200000722513/product/zmwv7iat_da1238b7592e44d1985ea3d0037d4b25.png'),
(29, 'https://product.hstatic.net/200000722513/product/oducts-tai-nghe-asus-rog-delta-core-3_dc4b599ee33b4de5bf4b92541b23245d_0782d52f0fcd4b17a9f2bf0835bdc5f8.jpg'),
(29, 'https://product.hstatic.net/200000722513/product/oducts-tai-nghe-asus-rog-delta-core-1_18e22a063a824fa2827a633d40c13ac5_cbd669d4aca74b128a5e35e6e9f31ea5.jpg'),
(29, 'https://product.hstatic.net/200000722513/product/oducts-tai-nghe-asus-rog-delta-core-2_24f469a28b5a4d0985132c3a7161853f_7f651d14bb854cf7ac495968fc7bf6f8.jpg'),
(29, 'https://product.hstatic.net/200000722513/product/oducts-tai-nghe-asus-rog-delta-core-4_f7abeccde9e34b88b9cb7786cf6e1f18_0341e10059374a99b1c47706f5d22bca.jpg'),
(29, 'https://product.hstatic.net/200000722513/product/oducts-tai-nghe-asus-rog-delta-core-6_b095758a1f8c4522992566f160e73906_dfcc70e1967c40b397ef32a411ca1935.jpg'),
(29, 'https://product.hstatic.net/200000722513/product/oducts-tai-nghe-asus-rog-delta-core-7_d3bed4fce4884d09a6b61192674089b8_5e91e73bbf4641769966ef0c4b60f1bd.jpg'),
(29, 'https://product.hstatic.net/200000722513/product/oducts-tai-nghe-asus-rog-delta-core-8_c01e2ad8c98549f5b6107af25ef6d50a_905f9807beae4102be7de94320c1f10c.jpg'),
(30, 'https://product.hstatic.net/200000722513/product/8fb4d7148326dbafe6c7949eeea20d43_10f0e89552c74fcfbaf376e82ab53397.png'),
(30, 'https://product.hstatic.net/200000722513/product/1b1860fde9515420018d19fd952e1649_ef5ea9af636b4568911591f11594b49b.png'),
(30, 'https://product.hstatic.net/200000722513/product/e3d09fcb22a7670053dc86c0f1a03f04_32e33466cca64e18b5802f9b119d3a7d.png'),
(30, 'https://product.hstatic.net/200000722513/product/35b93338bb7dbe1f6aad175512dc9409_38dea188c4e4472487c79f3332a7cfed.png'),
(30, 'https://product.hstatic.net/200000722513/product/376ba97f2aa9ed06a85fcf7b659bc08c_b7a74eba8b0846b0a4a1ef0baeabb56d.png'),
(31, 'https://product.hstatic.net/200000722513/product/luxs_44f7416f99e54134a7820f1168275f5f_1024x1024_756d5d077691485292e2d608fe2c7826.png'),
(31, 'https://product.hstatic.net/200000722513/product/8_3cf949a2efb742bda02ffe3ad2352306.png'),
(31, 'https://product.hstatic.net/200000722513/product/pba-banner-2023-1200x1200px_15d9daf2c33443d08172543b14e75811.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-01_7c50dd137c63451e8991699aa7478117.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-02_04ab15995a4f4763bfcec7dde112b693.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-03_cee04d686ea242e8b37ccbc81f78dfca.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-05_2871751a822745ada71de9daf5ed1137.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-06_332a0837c72b450494a49fca1dd5bef4.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-07_c0aaeb7098da4992827e598fb8104810.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-08_bb9b581f9f244cc8850eec4133d70fbc.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-12_45f9fe8b566f4444a8231c6482407b64.jpg'),
(31, 'https://product.hstatic.net/200000722513/product/post-14_40a514bd8f98497899272d7f752d4402.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/4000d_artic_cddd2a53b453427e90f8dbd4295e5265.png'),
(32, 'https://product.hstatic.net/200000722513/product/post-01_c54336ecb0e74fd0bf79b39cce2f9835.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-05_851d5cc7fc9d44bd8ce4999a7f822d19.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-03_8a9e99c8edb64135b5f454a6aee3b870.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-06_8ba74f92950a43908e712ba125e5c20a.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-07_118bb18c08924ff9be31a453929d7f5b.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-08_4321b06713794782b96612e14c8551ca.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-09_464a262e0b714968b636519db635e01a.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-11_c9deeb670740422b85161b7eefbe3742.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-12_931d5536e4c44ca69579bd9f9c07b348.jpg'),
(32, 'https://product.hstatic.net/200000722513/product/post-13_7bf687950857459196dd4534108f9665.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/ck560_sup_86bfab34891948f3b39038bdbc81f665.png'),
(33, 'https://product.hstatic.net/200000722513/product/post-01_eccba1b69b694c3b885aaee2265a2de7.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-05_8da8279fafec461d869f46f72bf8a6fb.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-06_ecc156c481ec463497b9ac4e620b0bf9.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-15_f0cca2d23c9f4d4e89dd8b471132a9cd.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-03_8fc252cc75a241d1b69a0ac755080719.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-02_e6357c82128c454f8a80488ade4963ba.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-04_dc57c0b29b064dedbba140913778af62.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-09_7143408ab64346b089acce719da67545.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-11_d845bc6bf100442499c0e2420eee85f4.jpg'),
(33, 'https://product.hstatic.net/200000722513/product/post-10_7845c5a3d1ca45519b697f4d1ebdc6c9.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-05_4c79434b431a4431be98511461235f98.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/helios_2180a1acaa8e4be7a652795f28ae5e92.png'),
(34, 'https://product.hstatic.net/200000722513/product/post-14_dd9d3ce1a9f34847a934282b1ee39dce.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-19_b0f4360f429941fd999fd65a2f4415d8.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-01_fdebea8ab3dd4b63aee794e5acc689be.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-07_72744b3b05f84eec9fe9a884c1d77718.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-08_f3c90f848bdf4df999ba79fd18eaa56e.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-02_9f31b4d486fa4393a6025fdc9837a2dd.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-03_63ad245153cc412b9ec799f5a610ef57.jpg'),
(34, 'https://product.hstatic.net/200000722513/product/post-04_15198189e8fa4dd1bc79d622ccb95a23.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/helios_5b9b0d2e13404338856f864ecbfc8a61.png'),
(35, 'https://product.hstatic.net/200000722513/product/post-01_be37dfc6d8bf42198b537318da2d875c.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-19_c5afad9b17f94ebf9509411a8c095d95.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-14_2787ecf213604a91b2fff8056f48a42a.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-17_95845e9519ba4669a086ab05987a6629.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-18_78c922f36f7e4d80aa906aaf9649ebc7.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-03_46c859534a2a4ea2acd5c1852bdca2f0.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-04_a1d8e8fa393845c3b3d59a0b60132d2e.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-05_d324c6f14f15491589ee4e13e8b84c2a.jpg'),
(35, 'https://product.hstatic.net/200000722513/product/post-06_ae984d29f1cf4eddbbbf5e587e90f5a9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID_Comment`),
  ADD KEY `ID_Product` (`ID_Product`),
  ADD KEY `ID_Member` (`ID_Member`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID_Member`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID_News`),
  ADD KEY `ID_Member` (`ID_Member`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID_Product`);

--
-- Indexes for table `products' images`
--
ALTER TABLE `products' images`
  ADD KEY `ID_Product` (`ID_Product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID_Comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID_Member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID_News` int(11) NOT NULL AUTO_INCREMENT COMMENT 'News'' ID';

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Product''s ID', AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ID_Product`) REFERENCES `products` (`ID_Product`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`ID_Member`) REFERENCES `members` (`ID_Member`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`ID_Member`) REFERENCES `members` (`ID_Member`);

--
-- Constraints for table `products' images`
--
ALTER TABLE `products' images`
  ADD CONSTRAINT `products' images_ibfk_1` FOREIGN KEY (`ID_Product`) REFERENCES `products` (`ID_Product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
