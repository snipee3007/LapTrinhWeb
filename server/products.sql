-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 12:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `Image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID_Comment`, `Context`, `ID_Product`, `ID_Member`, `Rating`, `Image`) VALUES
(1, 'Quá tuyệt vời', 1, 2, 5, NULL),
(2, 'Máy không dùng để đập maimai được. Quá tệ!', 1, 1, 1, NULL),
(3, 'Cũng được nhưng máy không nướng sườn được', 1, 3, 3, NULL),
(4, 'Máy cấu hình đẹp, chạy nhanh, thích hợp cho việc chơi game, giá tiền hơi chát xíu', 1, 4, 4, NULL),
(5, 'Cho hỏi máy này bên shop còn không?', 1, 5, 5, NULL),
(6, 'Laptop chơi game này phù hợp giá sinh viên', 2, 1, 5, 'someImagePath'),
(7, 'Cho mình hỏi máy này có giảm giá không?', 2, 5, 5, NULL),
(8, 'Máy xài chạy khá nóng, nướng sườn OK', 2, 3, 5, NULL),
(9, 'Máy xài RAM 16GB Onboard, thường mình phải xài trên 16GB RAM nên giờ mình muốn nâng cấp thêm cũng không được', 2, 4, 3, 'someImagePath'),
(10, NULL, 2, 2, 4, NULL),
(11, 'Màn hình rộng, chạy mượt như sunsilk', 9, 1, 5, 'someImagePath'),
(12, 'Với kích thước màn này rất vừa với bàn của mình', 9, 3, 5, 'someImagePath'),
(13, 'Màn rộng quá', 9, 5, 1, ''),
(14, 'Màn phù hợp túi tiền của các game thủ', 9, 2, 4, ''),
(15, 'Cho hỏi máy này có cài sẵn bộ Office chưa?', 4, 5, 5, NULL),
(16, NULL, 4, 4, 4, NULL),
(17, 'Mình vừa mua con màn này với con laptop gaming TUF, phải gọi là một sự kết hợp quá hoàn hảo ', 6, 1, 5, NULL),
(18, 'Mình vừa mua con màn này với con màn hình gaming TUF, phải gọi là một sự kết hợp quá hoàn hảo ', 5, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID_Member` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Account_Name` varchar(20) NOT NULL,
  `Account_Password` varchar(20) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID_Member`, `Name`, `Phone Number`, `Email`, `Account_Name`, `Account_Password`, `Image`, `Role`) VALUES
(1, 'Lê Minh Chánh', '0835599955', 'chanh.leminh@hcmut.edu.vn', 'ShiroSnipee', 'kekwlmao', 'hmmge', 'admin'),
(2, 'Phạm Nguyễn Nam', '0937113543', 'nam.phamnguyen1512@hcmut.edu.vn', 'FazeCT', 'lmaolmao', 'bedge', 'admin'),
(3, 'Lê Thiên Ân', '0356556216', 'an.lethien@hcmut.edu.vn', 'Ittoday', 'kekwkekw', 'gayge', 'admin'),
(4, 'Lê Hồng Minh', '0704927263', 'minh.lehong2003@hcmut.edu.vn', 'Onirique', 'lmaokekw', 'sleep', 'admin'),
(5, 'Trần Nhân Khánh', '0961322985', 'khanh.tran2003csejpn@hcmut.edu.vn', 'Khartist', 'Lmouse', 'dedge', 'user');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Tags` varchar(1000) NOT NULL COMMENT 'Product''s components'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID_Product`, `Name`, `Category`, `Brand`, `Price`, `Description`, `Tags`) VALUES
(1, 'Laptop ASUS Zenbook Duo OLED UX8406MA PZ307W', 'Laptop', 'ASUS', 48990000, 'This is a description', 'hl_ssd:512 GB;hl_lcd:14 inch 3K OLED TOUCH;hl_cpu:Ultra 7 155H;spec_VGA:Intel Arc;hl_hz:120 Hz;hl_ram:16 GB;hl_vga:Intel Arc'),
(2, 'Laptop MSI Summit E14 Evo A12M 211VN', 'Laptop', 'MSI', 22490000, 'This is a description', 'hl_ram:16 GB;hl_ssd:512 GB;hl_cpu:i7-1280P;hl_vga:Onboard;hl_lcd:14 inch FHD+ IPS'),
(3, 'Laptop MSI Modern 14 C13M 609VN', 'Laptop', 'MSI', 13990000, 'This is a description', 'hl_ram:8 GB;hl_cpu:i5-1335U;hl_ssd:512 GB;hl_lcd:14 inch FHD IPS;hl_sticker:asus-vp;hl_vga:Onboard'),
(4, 'Laptop ASUS Vivobook 14 OLED A1405VA KM095W', 'Laptop', 'ASUS', 17790000, 'This is a description', 'hl_cpu:i5-13500H;hl_ssd:512 GB;hl_ram:16 GB;hl_vga:Onboard;hl_lcd:14 inch 2K8 OLED'),
(5, 'Laptop gaming ASUS TUF Gaming F15 FX507VI LP088W', 'Laptop', 'ASUS', 43990000, 'This is a description', 'hl_hz:144 Hz;hl_ram:16 GB;hl_vga:RTX 4070;hl_cpu:i7-13620H;hl_lcd:15.6 inch FHD;spec_VGA:RTX 4070;hl_ssd:512 GB\"'),
(6, 'Màn hình Asus TUF GAMING VG279Q3A 27\" Fast IPS 180Hz Gsync chuyên game', 'Screen', 'ASUS', 4490000, 'This is a description', 'hl_hz:180Hz;hl_panel:IPS;hl_lcd:27 inch;hl_res:Full HD (1920 x 1080)'),
(7, 'Màn hình cong GIGABYTE G34WQC A 34\" 2K 144Hz HDR400 chuyên game', 'Screen', 'GIGABYTE', 8590000, 'This is a description', 'hl_lcd:34 inch;hl_res:2K (3440 x 1440);hl_hz:144Hz;hl_panel:VA'),
(8, 'Màn hình cong GIGABYTE GS27FC 27\" 180Hz chuyên game', 'Screen', 'GIGABYTE', 3990000, 'This is a description', 'hl_res:Full HD (1920 x 1080);hl_lcd:27 inch;hl_hz:180Hz;hl_panel:VA'),
(9, 'Màn hình cong Asus ROG Strix XG49VQ 49\" VA 144Hz', 'Screen', 'ASUS', 24990000, 'This is a description', 'hl_res:Full HD (3840 x 1080);hl_hz:144Hz;hl_lcd:49 inch;hl_panel:VA'),
(10, 'Màn hình MSI PRO MP275 27\" IPS 100Hz', 'Screen', 'MSI', 2890000, 'This is a description', 'hl_hz:100Hz;hl_res:Full HD (1920 x 1080);hl_panel:IPS;hl_lcd:27 inch'),
(11, 'Laptop gaming Gigabyte G7 KE 52VN263SH', 'Laptop', 'GIGABYTE', 27490000, 'This is a description', 'hl_hz:144 Hz;hl_ram:8 GB;hl_cpu:i5-12500H;hl_ssd:512 GB;hl_vga:RTX 3060;hl_lcd:15.6 inch FHD'),
(12, 'Laptop Acer Aspire 5 A515 58P 71EJ', 'Laptop', 'ACER', 18990000, 'This is a description', 'hl_ssd:1 TB;hl_cpu:i7-1335U;hl_vga:Onboard;hl_lcd:15.6 inch FHD;hl_ram:16 GB'),
(13, 'Laptop Dell Inspiron T7430 N7430I58W1 Silver', 'Laptop', 'DELL', 22990000, 'This is a description', 'hl_cpu:i5-1335U;hl_vga:Onboard;hl_ssd:512 GB;hl_ram:8 GB;hl_lcd:14 inch FHD+'),
(14, 'Laptop Dell Vostro 3530 V5I5267W1 Gray', 'Laptop', 'DELL', 15490000, 'This is a description', 'hl_cpu:i5-1335U;hl_hz:120 Hz;hl_ssd:256 GB;hl_ram:8 GB;hl_lcd:15.6 inch FHD IPS;hl_vga:Onboard'),
(15, 'Laptop gaming Acer Aspire 7 A715 76G 5806', 'Laptop', 'ACER', 20990000, 'This is a description', 'hl_ssd:512 GB;hl_hz:144 Hz;hl_vga:RTX 3050;hl_cpu:i5-12450H;hl_ram:16 GB;hl_lcd:15.6 inch FHD');

-- --------------------------------------------------------

--
-- Table structure for table `products' images`
--

CREATE TABLE `products' images` (
  `ID_Product` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, 'https://product.hstatic.net/200000722513/product/a3596b657f54da2953e1755242f7af2_dddf8aec3c684c0f920a506cf552b478_large_f01ca91fa6fe407bb4088f5eac5167d6.jpg');

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
  ADD PRIMARY KEY (`ID_Member`),
  ADD UNIQUE KEY `Account_Name` (`Account_Name`);

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
  MODIFY `ID_Comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID_Member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID_News` int(11) NOT NULL AUTO_INCREMENT COMMENT 'News'' ID';

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Product''s ID', AUTO_INCREMENT=16;

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
