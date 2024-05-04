-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 11:01 PM
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
  `Context` varchar(1000) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `ID_Member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID_Member` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Account_Name` varchar(20) NOT NULL,
  `Account_Password` varchar(20) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(10, 'Màn hình MSI PRO MP275 27\" IPS 100Hz', 'Screen', 'MSI', 2890000, 'This is a description', 'hl_hz:100Hz;hl_res:Full HD (1920 x 1080);hl_panel:IPS;hl_lcd:27 inch');

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
(10, 'https://product.hstatic.net/200000722513/product/1024__3__58d9c7410135489ca44e24aef772002b.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID_Member` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID_News` int(11) NOT NULL AUTO_INCREMENT COMMENT 'News'' ID';

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Product''s ID', AUTO_INCREMENT=11;

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
