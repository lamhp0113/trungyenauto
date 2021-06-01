-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2021 lúc 12:18 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trungyen_auto`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `booking_time` datetime DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `customer_comment` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id`, `customer_name`, `phone`, `email`, `booking_time`, `status`, `customer_comment`, `remark`, `service_id`, `created_at`, `updated_at`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '2021-05-27 08:11:59', 3, '[value-7]', '23123', 3, '2021-05-31 08:32:01', '2021-05-31 01:32:01'),
(2, '[value-2]', '[value-3]', '[value-4]', '0000-00-00 00:00:00', 2, '[value-7]', '[value-8]', 3, '2021-05-31 08:10:13', NULL),
(3, '123', '123123123123', 'lamhp0115@gmail.com', '2021-05-08 11:51:00', 1, '222', NULL, 3, '2021-05-31 08:10:12', '2021-05-30 22:15:10'),
(7, '123', '123123123123', 'lamhp0113@gmail.com', '2021-04-29 12:01:00', 0, '2222222', NULL, 3, '2021-05-31 08:10:10', '2021-05-30 22:02:03'),
(8, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-06 12:14:00', 0, '2222222', NULL, 3, '2021-05-31 08:10:09', '2021-05-30 22:14:20'),
(9, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-06 12:14:00', 2, '2222222', 'ww', 3, '2021-05-31 08:31:19', '2021-05-31 01:31:19'),
(10, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-06 12:14:00', 0, '2222222', NULL, 3, '2021-05-31 08:10:05', '2021-05-30 22:14:55'),
(11, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-31 15:28:00', 0, '1', NULL, 3, '2021-05-31 08:10:03', '2021-05-31 00:28:44'),
(12, 'z', '123123123123', 'lamhp0113@gmail.com', '2021-05-01 14:54:00', 0, '2', NULL, 3, '2021-05-31 00:54:30', '2021-05-31 00:54:30'),
(13, 'ngUYEN TÙNG LÂM', '123123123123', 'lamhp0113@gmail.com', '2021-05-08 17:00:00', 0, '123123123123', NULL, 3, '2021-05-31 03:01:23', '2021-05-31 03:01:23'),
(14, '123', '123123123123', '12312@yahoo.com', '2021-05-02 17:06:00', 0, '1231223', NULL, 4, '2021-05-31 03:06:53', '2021-05-31 03:06:53'),
(15, 'tiep test', '123123123123', 'lamhp0113@gmail.com', '2021-05-01 17:12:00', 0, 'đasadsad', NULL, 1, '2021-05-31 10:19:05', '2021-05-31 03:17:18'),
(16, '123', '123123123123', 'lamhp0113@gmail.com', '2021-04-30 06:08:00', 0, '123123', NULL, 3, '2021-05-31 04:08:14', '2021-05-31 04:08:14'),
(17, '123', '123123123123', 'lamhp0113@gmail.com', '2021-04-30 06:08:00', 0, '123123', NULL, 3, '2021-05-31 04:09:07', '2021-05-31 04:09:07'),
(18, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-14 18:12:00', 0, '1', NULL, 3, '2021-05-31 04:12:45', '2021-05-31 04:12:45'),
(19, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-02 18:16:00', 0, 'ádasd', NULL, 3, '2021-05-31 04:16:56', '2021-05-31 04:16:56'),
(20, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-02 18:16:00', 0, 'ádasd', NULL, 3, '2021-05-31 04:20:06', '2021-05-31 04:20:06'),
(21, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-02 18:16:00', 0, 'ádasd', NULL, 3, '2021-05-31 04:20:58', '2021-05-31 04:20:58'),
(22, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-02 18:16:00', 0, 'ádasd', NULL, 3, '2021-05-31 04:23:40', '2021-05-31 04:23:40'),
(23, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-02 18:16:00', 0, 'ádasd', NULL, 3, '2021-05-31 04:24:33', '2021-05-31 04:24:33'),
(24, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-02 18:16:00', 0, 'ádasd', NULL, 3, '2021-05-31 04:26:00', '2021-05-31 04:26:00'),
(25, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-02 18:16:00', 0, 'ádasd', NULL, 4, '2021-05-31 04:28:50', '2021-05-31 04:28:50'),
(26, 'ngUYEN TÙNG LÂM', '123123123123', 'lamhp0113@gmail.com', '2021-05-01 18:30:00', 0, 'lam', NULL, 3, '2021-05-31 04:30:13', '2021-05-31 04:30:13'),
(27, 'ngUYEN TÙNG LÂM', '123123123123', 'lamhp0113@gmail.com', '2021-05-31 21:34:00', 0, 'a', NULL, 3, '2021-05-31 04:31:29', '2021-05-31 04:31:29'),
(28, '123', '123123123123', 'lamhp0113@gmail.com', '2021-05-15 22:25:00', 0, 'kkk', NULL, 3, '2021-05-31 08:22:49', '2021-05-31 08:22:49'),
(29, 'z', '222222222222', 'lamhp0113@gmail.com', '2021-06-10 10:31:00', 0, '22222222', NULL, 0, '2021-05-31 20:31:59', '2021-05-31 20:31:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `priority` smallint(6) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `priority`, `updated_at`, `created_at`) VALUES
(1, 'Sửa chữa', 3, '2021-05-31 02:28:40', '2021-05-27 21:56:06'),
(2, 'Chăm sóc', 1, '2021-05-27 21:57:23', '2021-05-27 21:57:23'),
(3, 'Đồng sơn', 2, '2021-05-30 19:41:06', '2021-05-27 21:57:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `type`, `title`, `short_description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(4, 0, 'bài viết số 2', 'bài viết số 2', '<p>D&acirc;n tr&iacute;</p>\r\n\r\n<h2>&nbsp;Tối 30/5, C&ocirc;ng an huyện Xu&acirc;n Lộc (tỉnh Đồng Nai) x&aacute;c nhận đ&atilde; đưa 5 chiến sĩ cảnh s&aacute;t giao th&ocirc;ng - trật tự đi c&aacute;ch ly tập trung v&igrave; c&oacute; tiếp x&uacute;c gần với một ca nghi mắc Covid-19 tại TPHCM.</h2>\r\n\r\n<p>Th&ocirc;ng tin ban đầu, v&agrave;o ng&agrave;y 23/5, Nguyễn Xu&acirc;n G.T. (sinh năm 2004, qu&ecirc; B&igrave;nh Thuận, thường tr&uacute; ở quận G&ograve; Vấp, TPHCM) chạy xe m&aacute;y từ B&igrave;nh Thuận về TPHCM.</p>\r\n\r\n<p>Khi đến địa phận x&atilde; Gia L&agrave;o, huyện Xu&acirc;n Lộc (tỉnh Đồng Nai), T. bị tổ tuần tra giao th&ocirc;ng C&ocirc;ng an huyện Xu&acirc;n Lộc y&ecirc;u cầu dừng xe để kiểm tra giấy tờ.</p>\r\n\r\n<p>Do x&aacute;c định T. vi phạm nhiều lỗi giao th&ocirc;ng n&ecirc;n lực lượng CSGT đ&atilde; tiến h&agrave;nh lập bi&ecirc;n bản, tạm giữ phương tiện. Sau đ&oacute; T. đ&atilde; l&ecirc;n chiếc xe kh&aacute;ch C&uacute;c Phương để tiếp tục h&agrave;nh tr&igrave;nh v&agrave;o TPHCM.</p>\r\n\r\n<p>Đến ng&agrave;y 29/5, Cơ quan chức năng TPHCM đ&atilde; c&oacute; th&ocirc;ng b&aacute;o T. l&agrave; ca nghi nhiễm do c&oacute; li&ecirc;n quan đến ca mắc&nbsp;<a href=\"https://dantri.com.vn/suc-khoe/dai-dich-covid-19.htm\">Covid-19</a>&nbsp;tại TPHCM. Sau đ&oacute;, người nh&agrave; T. đ&atilde; b&aacute;o cho lực lượng chức năng huyện Xu&acirc;n Lộc.</p>\r\n\r\n<p><img alt=\"5 CSGT phải đi cách ly vì vô tình xử phạt một ca nghi mắc Covid-19 - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2021/05/31/5-csgt-phai-di-cach-ly-vi-1622416896350.jpeg\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Lực lượng y tế tỉnh Đồng Nai thực hiện nhiệm vụ tại một khu c&aacute;ch ly tập trung.</p>\r\n\r\n<p>Sau khi tiếp nhận tin b&aacute;o, lực lượng chức năng huyện Xu&acirc;n Lộc đ&atilde; nhanh ch&oacute;ng tiến h&agrave;nh x&aacute;c minh được 5 c&aacute;n bộ chiến sĩ CSGT c&oacute; tiếp x&uacute;c gần với T. Ngo&agrave;i ra c&ograve;n c&aacute;c F1 kh&aacute;c c&oacute; li&ecirc;n quan l&agrave; t&agrave;i xế xe C&uacute;c Phương v&agrave; h&agrave;nh kh&aacute;ch tr&ecirc;n xe.</p>\r\n\r\n<p>Hiện lực lượng y tế huyện Xu&acirc;n Lộc đ&atilde; tiến h&agrave;nh đưa 5 c&aacute;n bộ chiến sĩ n&oacute;i tr&ecirc;n c&ugrave;ng những người li&ecirc;n quan kh&aacute;c đi c&aacute;ch ly tập trung v&agrave; lấy mẫu&nbsp;x&eacute;t nghiệm Covid-19.</p>\r\n\r\n<p>C&ocirc;ng an huyện Xu&acirc;n Lộc cũng đang y&ecirc;u cầu c&aacute;c đơn vị tiếp tục r&agrave; so&aacute;t c&aacute;c trường hợp F2 để tiến h&agrave;nh cho c&aacute;ch ly tại nh&agrave;.</p>\r\n\r\n<p><strong>Đồng Nai tạm dừng karaoke, qu&aacute;n bar, ph&ograve;ng tr&agrave;, chợ đ&ecirc;m...</strong></p>\r\n\r\n<p>Cũng trong ng&agrave;y 30/5, UBND tỉnh Đồng Nai cũng đ&atilde; c&oacute; văn bản hỏa tốc về việc tiếp tục tạm dừng c&aacute;c hoạt động kh&ocirc;ng thiết yếu như: karaoke, qu&aacute;n bar, vũ trường, ph&ograve;ng tr&agrave;, c&aacute;c lễ hội, khu chợ đ&ecirc;m, c&aacute;c điểm biểu diễn nghệ thuật, rạp chiếu phim, điểm h&aacute;t với nhau, c&aacute;c cơ sở massage, x&ocirc;ng hơi, cơ sở l&agrave;m đẹp, c&aacute;c điểm kinh doanh tr&ograve; chơi điện tử, hoạt động thể dục thể thao trong kh&ocirc;ng gian k&iacute;n (gym, fitness, billliards, yoga).</p>\r\n\r\n<p>Đồng thời, từ 0h ng&agrave;y 31/5, UBND tỉnh Đồng Nai sẽ cho tạm dừng th&ecirc;m c&aacute;c loại h&igrave;nh hoạt động như: C&aacute;c hoạt động, nghi lễ t&ocirc;n gi&aacute;o tại c&aacute;c cơ sở t&ocirc;n gi&aacute;o, t&iacute;n ngưỡng, thờ tự tr&ecirc;n địa b&agrave;n tỉnh (khuyến kh&iacute;ch sinh hoạt, lễ nghi t&ocirc;n gi&aacute;o theo h&igrave;nh thức trực tuyến), c&aacute;c địa điểm du lịch, tham quan, di t&iacute;ch; c&aacute;c tụ điểm, khu vui chơi, giải tr&iacute;, s&acirc;n golf, c&aacute;c điểm tập thể dục thể thao ngo&agrave;i trời tập trung tr&ecirc;n 10 người, c&aacute;c hoạt động tại phố đi bộ, c&ocirc;ng vi&ecirc;n c&ocirc;ng cộng, c&aacute;c điểm truy cập Internet, c&aacute;c cơ sở spa, cơ sở l&agrave;m đẹp (cắt - uốn t&oacute;c nam nữ, l&agrave;m m&oacute;ng&hellip;).</p>\r\n\r\n<p>Đối với c&aacute;c cơ sở, c&aacute;c hộ gia đ&igrave;nh hoạt động kinh doanh dịch vụ ăn uống, kinh doanh thức ăn, thức uống đường phố, vỉa h&egrave;, nh&agrave; h&agrave;ng sẽ kh&ocirc;ng được phục vụ qu&aacute; 10 kh&aacute;ch c&ugrave;ng một thời điểm, phải đảm bảo thực hiện đầy đủ c&aacute;c biện ph&aacute;p ph&ograve;ng, chống dịch v&agrave; giữ khoảng c&aacute;ch c&aacute;c b&agrave;n 2 m&eacute;t, tăng cường h&igrave;nh thức b&aacute;n h&agrave;ng mang về, đặt h&agrave;ng v&agrave; thanh to&aacute;n trực tuyến.</p>\r\n\r\n<p>Theo văn bản tr&ecirc;n, UBND tỉnh cũng sẽ cho dừng c&aacute;c hoạt động vận chuyển của c&aacute;c tuyến vận tải h&agrave;nh kh&aacute;ch cố định li&ecirc;n tỉnh, c&aacute;c hoạt động vận tải của xe hợp đồng, xe du lịch, xe taxi, xe bu&yacute;t li&ecirc;n tỉnh đi v&agrave; đến TPHCM, H&agrave; Nội, Long An, Bắc Giang, Bắc Ninh v&agrave; c&aacute;c tỉnh, th&agrave;nh c&oacute; dịch bệnh, trừ c&aacute;c trường hợp đặc biệt v&igrave; l&yacute; do c&ocirc;ng vụ, xe chở bệnh nh&acirc;n, xe chở người hết thời gian c&aacute;ch ly, xe đưa đ&oacute;n c&ocirc;ng nh&acirc;n, chuy&ecirc;n gia của c&aacute;c doanh nghiệp, xe vận chuyển phục vụ ph&ograve;ng chống dịch v&agrave; c&aacute;c trường hợp cung cấp lương thực, thực phẩm, nhu yếu phẩm cần thiết, xe chuy&ecirc;n chở vật liệu sản xuất, h&agrave;ng h&oacute;a.</p>\r\n\r\n<p>Ngo&agrave;i ra, khuyến c&aacute;o người tr&ecirc;n 60 tuổi&nbsp;hạn chế ra khỏi nh&agrave; khi kh&ocirc;ng c&oacute; nhu cầu cấp b&aacute;ch. Kh&ocirc;ng tụ tập qu&aacute; 20 người ở b&ecirc;n ngo&agrave;i c&aacute;c c&ocirc;ng sở, trường học, bệnh viện. Đồng thời y&ecirc;u cầu người d&acirc;n thực hiện giữ khoảng c&aacute;ch tối thiểu 2 m&eacute;t giữa người với người tại c&aacute;c địa điểm c&ocirc;ng cộng.</p>', '', '2021-05-28 21:57:41', '2021-05-30 19:53:27'),
(5, 0, 'Bài viết số 1', 'Công ty TNHH Đầu tư Thương mại và Dịch vụ ô tô Hà Thành (Hà Thành Garage) chính thức ra đời ngày 14 tháng 02 năm 2017. Khởi đầu từ một xưởng sửa chữa, chăm sóc ô tô nhỏ, sau 5 năm xây dựng, hình thành và phát triển Hà Thành Garage đã khẳng định được uy tín trên thị trường dịch vụ ô tô tại Hà Nội nói riêng và Việt Nam nói chung.', '<h2><strong>H&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển</strong></h2>\r\n\r\n<p>Xưởng sơn sửa &ocirc; t&ocirc; nhỏ ban đầu chỉ v&agrave;i trăm m2, nhưng với niềm đam m&ecirc;,&nbsp;quyết t&acirc;m v&agrave; ki&ecirc;n tr&igrave; x&acirc;y dựng m&ocirc; h&igrave;nh&nbsp;<strong>Hệ thống dịch vụ Chăm s&oacute;c xe to&agrave;n diện</strong>&nbsp;c&oacute; chất lượng cao, lấy phương ch&acirc;m&nbsp;<strong>&quot;Kinh doanh bằng sự tử tế&quot;</strong>, &quot;<strong>Dịch vụ Tận T&acirc;m</strong>&quot;, H&agrave; Th&agrave;nh Garage&nbsp;đ&atilde; từng bước chinh phục niềm tin của kh&aacute;ch h&agrave;ng, được đ&ocirc;ng đảo người ti&ecirc;u d&ugrave;ng tin tưởng sử dụng.</p>\r\n\r\n<p>Năm 2015 cơ sở Garage đầu ti&ecirc;n được H&agrave; Th&agrave;nh mở tại Tr&iacute;ch S&agrave;i, H&agrave; nội với quy m&ocirc; 200m, 10 nh&acirc;n sự. Hạng mục dịch vụ tập trung chủ yếu v&agrave;o lĩnh vực M&aacute;y Gầm Điện v&agrave; Sửa chữa khung th&acirc;n vỏ.</p>\r\n\r\n<p>Năm 2016, nhận thấy tiềm năng của thị trường, cơ sở tại Tr&iacute;ch S&agrave;i kh&ocirc;ng c&ograve;n đ&aacute;p ứng được cầu ph&aacute;t triển, đ&atilde; được chuyển Cơ sở về địa chỉ 500 V&otilde; Ch&iacute; C&ocirc;ng - T&acirc;y Hồ - H&agrave; Nội, với diện t&iacute;ch gần 1000m2. Từ đ&acirc;y, H&agrave; Th&agrave;nh Garage mở&nbsp;rộng ph&aacute;t triển dịch vụ sang lĩnh vực chăm s&oacute;c xe b&ecirc;n cạnh c&aacute;c dịch vụ cốt l&otilde;i M&aacute;y Gầm Điện v&agrave; Sửa chữa khung th&acirc;n vỏ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://otohathanh.com/upload/images/hinh-anh-hoat-dong/ha-thanh-o-to-garage-500-co-chi-cong.jpg\" /></p>\r\n\r\n<p>Năm 2017, chỉ sau một thời gian ngắn, được sự tin tưởng của kh&aacute;ch h&agrave;ng, H&agrave; Th&agrave;nh&nbsp;mở Garage thứ 2, Cơ sở Sửa chữa, Bảo dưỡng v&agrave; Chăm s&oacute;c xe to&agrave;n diện tại 300 Trần Điền - Định C&ocirc;ng - H&agrave; Nội với quy m&ocirc; diện t&iacute;ch gần 1000m2 v&agrave;&nbsp;hơn 30 nh&acirc;n sự.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://otohathanh.com/upload/images/hinh-anh-hoat-dong/cham-soc-sua-chua-o-to-ha-thanh-garage-chi-nhanh-300-tran-dien-hoang-mai-ha-noi.jpg\" /></p>\r\n\r\n<p>C&ugrave;ng thời gian n&agrave;y, th&aacute;ng 02 năm 2017, C&ocirc;ng ty TNHH Đầu tư Thương mại v&agrave; Dịch vụ &ocirc; t&ocirc; H&agrave; Th&agrave;nh ch&iacute;nh thức được th&agrave;nh lập đ&aacute;nh dấu bước chuyển m&igrave;nh mạnh mẽ, từ 1 v&agrave;i cơ sở dịch vụ nhỏ lẻ, H&agrave; Th&agrave;nh Garage đ&atilde; vươn m&igrave;nh trở th&agrave;nh c&ocirc;ng ty c&oacute; đầy đủ hệ thống ph&ograve;ng ban chuy&ecirc;n nghiệp.</p>\r\n\r\n<p>Th&aacute;ng 5/2019, một cột mốc đ&aacute;ng nhớ với&nbsp;H&agrave; Th&agrave;nh Garage&nbsp;khi Cơ sở Chăm s&oacute;c xe số 3 tại Lạc Long Qu&acirc;n - T&acirc;y Hồ - H&agrave; Nội đi v&agrave;o hoạt động.&nbsp;</p>\r\n\r\n<h2><strong>Trở th&agrave;nh đối t&aacute;c hợp t&aacute;c tin cậy</strong></h2>\r\n\r\n<p>Th&aacute;ng 11/2019: Kh&ocirc;ng chỉ được kh&aacute;ch h&agrave;ng tin tưởng, uy t&iacute;n của H&agrave; Th&agrave;nh Garage đ&atilde; thuyết phục được c&aacute;c đối t&aacute;c trong ng&agrave;nh dịch vụ &ocirc; t&ocirc;, H&agrave; Th&agrave;nh đ&atilde; K&yacute; Hợp đồng hợp t&aacute;c to&agrave;n diện với UP Service trong việc sử dụng, chuyển giao, đ&agrave;o tạo theo Quy tr&igrave;nh chăm s&oacute;c xe độc quyền của Mafra - Italy tại Việt Nam.&nbsp;</p>\r\n\r\n<p>Uy t&iacute;n dẫn tới th&agrave;nh c&ocirc;ng, năm 2020, H&agrave; Th&agrave;nh đ&atilde; ho&agrave;n thiện Tầm nh&igrave;n v&agrave; Sứ mệnh của m&igrave;nh. Theo đ&oacute;, H&agrave; Th&agrave;nh hướng tới ph&aacute;t triển Hệ thống dịch vụ &ocirc; t&ocirc; nhượng quyền với 20 cơ sở từ nay cho đến 2022. L&acirc;u d&agrave;i hơn, H&agrave; Th&agrave;nh mong muốn x&acirc;y dựng v&agrave; trở th&agrave;nh Hệ thống nhượng quyền dịch vụ chăm s&oacute;c &ocirc; t&ocirc; to&agrave;n diện phủ khắp c&aacute;c tỉnh th&agrave;nh, Uy t&iacute;n H&agrave;ng đầu trong lĩnh vực chăm s&oacute;c, bảo dưỡng, sửa chữa xe &ocirc; t&ocirc;.</p>\r\n\r\n<p>Uy t&iacute;n trong quan hệ, chuy&ecirc;n nghiệp v&agrave; c&oacute; t&acirc;m trong mọi hoạt động, nhờ đ&oacute; H&agrave; Th&agrave;nh Garage &ldquo;lọt v&agrave;o mắt xanh&rdquo; của nh&agrave; đầu tư. Ngay đầu năm 2020 H&agrave; Th&agrave;nh đ&atilde; nhượng quyền th&agrave;nh c&ocirc;ng 02 Trung t&acirc;m chăm s&oacute;c xe tại &nbsp;Tố Hữu - H&agrave; Đ&ocirc;ng v&agrave; Vũ Quỳnh - Từ Li&ecirc;m - H&agrave; Nội. &nbsp;N&acirc;ng tổng số Trung t&acirc;m chăm s&oacute;c xe l&ecirc;n th&agrave;nh 05 Trung t&acirc;m chăm s&oacute;c xe với tổng diện t&iacute;ch hơn 3000m2 v&agrave; 120 nh&acirc;n sự.<br />\r\nGần 15 năm x&acirc;y dựng v&agrave; ph&aacute;t triển &Ocirc; t&ocirc; H&agrave; Th&agrave;nh đ&atilde; x&acirc;y dựng được Thương hiệu uy t&iacute;n tr&ecirc;n thị trường sửa chữa, bảo dưỡng &ocirc; t&ocirc; với những dịch vụ nổi bật như Đồng, sơn &ocirc; t&ocirc;, sửa chữa bảo dưỡng &ocirc; t&ocirc;, chăm s&oacute;c xe</p>\r\n\r\n<p>Hiện nay, H&agrave; Th&agrave;nh Garage&nbsp;đ&atilde; c&oacute; 8&nbsp;cơ sở&nbsp;tại H&agrave; Nội, 1 cơ sở tại Bắc Ninh. C&aacute;c cơ sở đều&nbsp;được trang bị m&aacute;y m&oacute;c hiện đại, sẵng s&agrave;ng phục vụ kh&aacute;ch h&agrave;ng 7 ng&agrave;y/tuần. B&ecirc;n cạnh đ&oacute;, đội ngũ nh&acirc;n vi&ecirc;n của H&agrave; Th&agrave;nh Garage lu&ocirc;n được đ&agrave;o tạo n&acirc;ng cao tay nghề, cải thiện bản th&acirc;n kh&ocirc;ng ngừng nhằm hướng tới 3 gi&aacute; trị cốt l&otilde;i trong chất lượng dịch vụ:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Kỹ năng, kỹ thuật th&agrave;nh thạo</li>\r\n	<li>Phong c&aacute;ch chuy&ecirc;n nghiệp&nbsp;</li>\r\n	<li>Th&aacute;i độ chuy&ecirc;n t&acirc;m&nbsp;</li>\r\n</ul>\r\n\r\n<p>Đ&acirc;y cũng l&agrave; 3 gi&aacute; trị cốt l&otilde;i đề &Ocirc; t&ocirc; H&agrave; Th&agrave;nh hướng tới cung cấp những dịch vụ tốt nhất c&oacute; thể cho kh&aacute;ch h&agrave;ng theo 3 ti&ecirc;u ch&iacute;:</p>\r\n\r\n<ul>\r\n	<li>An to&agrave;n</li>\r\n	<li>An t&acirc;m</li>\r\n	<li>Tiện lợi</li>\r\n</ul>\r\n\r\n<p>Nhờ chuy&ecirc;n t&acirc;m trong x&acirc;y dựng uy t&iacute;n, n&acirc;ng cao chất lượng dịch vụ, H&agrave; Th&agrave;nh Garage đ&atilde; từng bước chinh phục được những kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh nhất, với những d&ograve;ng xe từ th&ocirc;ng dụng cho đến những d&ograve;ng xe ở ph&acirc;n kh&uacute;c cao cấp nhất.</p>', '', '2021-05-28 22:25:00', '2021-05-28 22:59:36'),
(6, 0, 'qưe', 'ưqe', '<p>ưqe</p>', '', '2021-05-30 20:25:44', '2021-05-30 20:25:44'),
(9, 1, '123123', '123123', '<p>123123123</p>', '', '2021-05-31 08:10:52', '2021-05-31 08:10:52'),
(10, 1, 'auto', 'sad', '<p>1233</p>', '', '2021-05-31 20:01:20', '2021-05-31 20:01:20'),
(11, 0, '1', '2', '<p>3</p>', 'images/lam456123.jpg', '2021-05-31 20:04:41', '2021-05-31 20:04:41'),
(12, 0, 'qưe', '123', '<p>123</p>', 'images/lam456123.jpg', '2021-05-31 20:05:57', '2021-05-31 20:05:57'),
(13, 0, '123123', '123', '<p>23</p>', 'images/lam456123.jpg.jpg', '2021-05-31 20:06:38', '2021-05-31 20:06:38'),
(14, 0, '123123', '22', '<p>2</p>', 'images/lam456123.jpg', '2021-05-31 20:10:44', '2021-05-31 20:38:20'),
(15, 0, '2', '213', '<p>23</p>', 'images/lam456123.jpg', '2021-05-31 20:13:47', '2021-05-31 20:38:01'),
(16, 1, '2', '3333', '<p>23213</p>', 'images/lam456123.jpg', '2021-05-31 20:18:31', '2021-05-31 20:18:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `category_id`, `name`, `short_description`, `long_description`, `price`, `images`) VALUES
(11, 2, 'Đánh bóng sơn xe', 'ok', NULL, NULL, NULL),
(12, 2, 'Dọn nội thất ô tô', 'ok', NULL, NULL, NULL),
(13, 2, 'Dán chống ồn , cách âm chống ồn wurth', 'ok', NULL, NULL, NULL),
(14, 2, 'Phủ bóng ô tô ( Phủ Ceramic )', 'ok', NULL, NULL, NULL),
(15, 2, 'Rửa và bảo dưỡng khoang máy ô tô', 'ok', NULL, NULL, NULL),
(16, 1, 'Bảo dưỡng ô tô định kỳ', 'ok', NULL, NULL, NULL),
(17, 1, 'Bảo dưỡng điều hòa ô tô - Công nghệ nội soi', '1', NULL, NULL, NULL),
(18, 1, 'Sửa chữa khung gầm ô tô', '1', NULL, NULL, NULL),
(19, 1, 'Đại tu động cơ ô tô', '1', NULL, NULL, NULL),
(20, 1, 'Chẩn đoán, xử lý hệ thống điện ô tô', 'ok', NULL, NULL, NULL),
(21, 1, 'Sửa chữa Máy - Gầm - Điện', '1', NULL, NULL, NULL),
(22, 1, 'Sửa chữa hộp số tự động', '1', NULL, NULL, NULL),
(23, 3, 'Sơn ô tô - Sơn dặm, Sơn Vá', 'ok', NULL, NULL, NULL),
(24, 1, 'Phục hồi xe tai nạn', '2', '<p>3</p>', NULL, NULL),
(25, 3, 'Sơn phủ gầm chống rỉ', 'kkkkk', NULL, NULL, NULL),
(26, 3, 'Sơn Lazang', 'a', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
