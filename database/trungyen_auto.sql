-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2021 lúc 08:02 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

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
                           `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                           `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id`, `customer_name`, `phone`, `email`, `booking_time`, `status`, `customer_comment`, `remark`, `created_at`, `updated_at`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '2021-05-27 08:11:59', 3, '[value-7]', 'Khách báo hủy', '2021-05-28 02:32:52', '2021-05-27 19:32:52'),
(2, '[value-2]', '[value-3]', '[value-4]', '0000-00-00 00:00:00', 2, '[value-7]', '[value-8]', '2021-05-28 02:15:32', NULL);

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
(1, 'Sửa chữa', 0, '2021-05-27 21:56:06', '2021-05-27 21:56:06'),
(2, 'Chăm sóc', 1, '2021-05-27 21:57:23', '2021-05-27 21:57:23'),
(3, 'Đồng sơn', 3, '2021-05-27 21:57:34', '2021-05-27 21:57:34');

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
                        `image` varchar(255) DEFAULT NULL,
                        `created_at` timestamp NULL DEFAULT NULL,
                        `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `type`, `title`, `short_description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(4, 1, 'bài viết số 2', 'bài viết số 2', 'bài viết số 2', NULL, '2021-05-28 21:57:41', '2021-05-28 21:57:41'),
(5, 0, 'Bài viết số 1', 'Công ty TNHH Đầu tư Thương mại và Dịch vụ ô tô Hà Thành (Hà Thành Garage) chính thức ra đời ngày 14 tháng 02 năm 2017. Khởi đầu từ một xưởng sửa chữa, chăm sóc ô tô nhỏ, sau 5 năm xây dựng, hình thành và phát triển Hà Thành Garage đã khẳng định được uy tín trên thị trường dịch vụ ô tô tại Hà Nội nói riêng và Việt Nam nói chung.', '<h2><strong>H&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển</strong></h2>\r\n\r\n<p>Xưởng sơn sửa &ocirc; t&ocirc; nhỏ ban đầu chỉ v&agrave;i trăm m2, nhưng với niềm đam m&ecirc;,&nbsp;quyết t&acirc;m v&agrave; ki&ecirc;n tr&igrave; x&acirc;y dựng m&ocirc; h&igrave;nh&nbsp;<strong>Hệ thống dịch vụ Chăm s&oacute;c xe to&agrave;n diện</strong>&nbsp;c&oacute; chất lượng cao, lấy phương ch&acirc;m&nbsp;<strong>&quot;Kinh doanh bằng sự tử tế&quot;</strong>, &quot;<strong>Dịch vụ Tận T&acirc;m</strong>&quot;, H&agrave; Th&agrave;nh Garage&nbsp;đ&atilde; từng bước chinh phục niềm tin của kh&aacute;ch h&agrave;ng, được đ&ocirc;ng đảo người ti&ecirc;u d&ugrave;ng tin tưởng sử dụng.</p>\r\n\r\n<p>Năm 2015 cơ sở Garage đầu ti&ecirc;n được H&agrave; Th&agrave;nh mở tại Tr&iacute;ch S&agrave;i, H&agrave; nội với quy m&ocirc; 200m, 10 nh&acirc;n sự. Hạng mục dịch vụ tập trung chủ yếu v&agrave;o lĩnh vực M&aacute;y Gầm Điện v&agrave; Sửa chữa khung th&acirc;n vỏ.</p>\r\n\r\n<p>Năm 2016, nhận thấy tiềm năng của thị trường, cơ sở tại Tr&iacute;ch S&agrave;i kh&ocirc;ng c&ograve;n đ&aacute;p ứng được cầu ph&aacute;t triển, đ&atilde; được chuyển Cơ sở về địa chỉ 500 V&otilde; Ch&iacute; C&ocirc;ng - T&acirc;y Hồ - H&agrave; Nội, với diện t&iacute;ch gần 1000m2. Từ đ&acirc;y, H&agrave; Th&agrave;nh Garage mở&nbsp;rộng ph&aacute;t triển dịch vụ sang lĩnh vực chăm s&oacute;c xe b&ecirc;n cạnh c&aacute;c dịch vụ cốt l&otilde;i M&aacute;y Gầm Điện v&agrave; Sửa chữa khung th&acirc;n vỏ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://otohathanh.com/upload/images/hinh-anh-hoat-dong/ha-thanh-o-to-garage-500-co-chi-cong.jpg\" /></p>\r\n\r\n<p>Năm 2017, chỉ sau một thời gian ngắn, được sự tin tưởng của kh&aacute;ch h&agrave;ng, H&agrave; Th&agrave;nh&nbsp;mở Garage thứ 2, Cơ sở Sửa chữa, Bảo dưỡng v&agrave; Chăm s&oacute;c xe to&agrave;n diện tại 300 Trần Điền - Định C&ocirc;ng - H&agrave; Nội với quy m&ocirc; diện t&iacute;ch gần 1000m2 v&agrave;&nbsp;hơn 30 nh&acirc;n sự.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://otohathanh.com/upload/images/hinh-anh-hoat-dong/cham-soc-sua-chua-o-to-ha-thanh-garage-chi-nhanh-300-tran-dien-hoang-mai-ha-noi.jpg\" /></p>\r\n\r\n<p>C&ugrave;ng thời gian n&agrave;y, th&aacute;ng 02 năm 2017, C&ocirc;ng ty TNHH Đầu tư Thương mại v&agrave; Dịch vụ &ocirc; t&ocirc; H&agrave; Th&agrave;nh ch&iacute;nh thức được th&agrave;nh lập đ&aacute;nh dấu bước chuyển m&igrave;nh mạnh mẽ, từ 1 v&agrave;i cơ sở dịch vụ nhỏ lẻ, H&agrave; Th&agrave;nh Garage đ&atilde; vươn m&igrave;nh trở th&agrave;nh c&ocirc;ng ty c&oacute; đầy đủ hệ thống ph&ograve;ng ban chuy&ecirc;n nghiệp.</p>\r\n\r\n<p>Th&aacute;ng 5/2019, một cột mốc đ&aacute;ng nhớ với&nbsp;H&agrave; Th&agrave;nh Garage&nbsp;khi Cơ sở Chăm s&oacute;c xe số 3 tại Lạc Long Qu&acirc;n - T&acirc;y Hồ - H&agrave; Nội đi v&agrave;o hoạt động.&nbsp;</p>\r\n\r\n<h2><strong>Trở th&agrave;nh đối t&aacute;c hợp t&aacute;c tin cậy</strong></h2>\r\n\r\n<p>Th&aacute;ng 11/2019: Kh&ocirc;ng chỉ được kh&aacute;ch h&agrave;ng tin tưởng, uy t&iacute;n của H&agrave; Th&agrave;nh Garage đ&atilde; thuyết phục được c&aacute;c đối t&aacute;c trong ng&agrave;nh dịch vụ &ocirc; t&ocirc;, H&agrave; Th&agrave;nh đ&atilde; K&yacute; Hợp đồng hợp t&aacute;c to&agrave;n diện với UP Service trong việc sử dụng, chuyển giao, đ&agrave;o tạo theo Quy tr&igrave;nh chăm s&oacute;c xe độc quyền của Mafra - Italy tại Việt Nam.&nbsp;</p>\r\n\r\n<p>Uy t&iacute;n dẫn tới th&agrave;nh c&ocirc;ng, năm 2020, H&agrave; Th&agrave;nh đ&atilde; ho&agrave;n thiện Tầm nh&igrave;n v&agrave; Sứ mệnh của m&igrave;nh. Theo đ&oacute;, H&agrave; Th&agrave;nh hướng tới ph&aacute;t triển Hệ thống dịch vụ &ocirc; t&ocirc; nhượng quyền với 20 cơ sở từ nay cho đến 2022. L&acirc;u d&agrave;i hơn, H&agrave; Th&agrave;nh mong muốn x&acirc;y dựng v&agrave; trở th&agrave;nh Hệ thống nhượng quyền dịch vụ chăm s&oacute;c &ocirc; t&ocirc; to&agrave;n diện phủ khắp c&aacute;c tỉnh th&agrave;nh, Uy t&iacute;n H&agrave;ng đầu trong lĩnh vực chăm s&oacute;c, bảo dưỡng, sửa chữa xe &ocirc; t&ocirc;.</p>\r\n\r\n<p>Uy t&iacute;n trong quan hệ, chuy&ecirc;n nghiệp v&agrave; c&oacute; t&acirc;m trong mọi hoạt động, nhờ đ&oacute; H&agrave; Th&agrave;nh Garage &ldquo;lọt v&agrave;o mắt xanh&rdquo; của nh&agrave; đầu tư. Ngay đầu năm 2020 H&agrave; Th&agrave;nh đ&atilde; nhượng quyền th&agrave;nh c&ocirc;ng 02 Trung t&acirc;m chăm s&oacute;c xe tại &nbsp;Tố Hữu - H&agrave; Đ&ocirc;ng v&agrave; Vũ Quỳnh - Từ Li&ecirc;m - H&agrave; Nội. &nbsp;N&acirc;ng tổng số Trung t&acirc;m chăm s&oacute;c xe l&ecirc;n th&agrave;nh 05 Trung t&acirc;m chăm s&oacute;c xe với tổng diện t&iacute;ch hơn 3000m2 v&agrave; 120 nh&acirc;n sự.<br />\r\nGần 15 năm x&acirc;y dựng v&agrave; ph&aacute;t triển &Ocirc; t&ocirc; H&agrave; Th&agrave;nh đ&atilde; x&acirc;y dựng được Thương hiệu uy t&iacute;n tr&ecirc;n thị trường sửa chữa, bảo dưỡng &ocirc; t&ocirc; với những dịch vụ nổi bật như Đồng, sơn &ocirc; t&ocirc;, sửa chữa bảo dưỡng &ocirc; t&ocirc;, chăm s&oacute;c xe</p>\r\n\r\n<p>Hiện nay, H&agrave; Th&agrave;nh Garage&nbsp;đ&atilde; c&oacute; 8&nbsp;cơ sở&nbsp;tại H&agrave; Nội, 1 cơ sở tại Bắc Ninh. C&aacute;c cơ sở đều&nbsp;được trang bị m&aacute;y m&oacute;c hiện đại, sẵng s&agrave;ng phục vụ kh&aacute;ch h&agrave;ng 7 ng&agrave;y/tuần. B&ecirc;n cạnh đ&oacute;, đội ngũ nh&acirc;n vi&ecirc;n của H&agrave; Th&agrave;nh Garage lu&ocirc;n được đ&agrave;o tạo n&acirc;ng cao tay nghề, cải thiện bản th&acirc;n kh&ocirc;ng ngừng nhằm hướng tới 3 gi&aacute; trị cốt l&otilde;i trong chất lượng dịch vụ:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Kỹ năng, kỹ thuật th&agrave;nh thạo</li>\r\n	<li>Phong c&aacute;ch chuy&ecirc;n nghiệp&nbsp;</li>\r\n	<li>Th&aacute;i độ chuy&ecirc;n t&acirc;m&nbsp;</li>\r\n</ul>\r\n\r\n<p>Đ&acirc;y cũng l&agrave; 3 gi&aacute; trị cốt l&otilde;i đề &Ocirc; t&ocirc; H&agrave; Th&agrave;nh hướng tới cung cấp những dịch vụ tốt nhất c&oacute; thể cho kh&aacute;ch h&agrave;ng theo 3 ti&ecirc;u ch&iacute;:</p>\r\n\r\n<ul>\r\n	<li>An to&agrave;n</li>\r\n	<li>An t&acirc;m</li>\r\n	<li>Tiện lợi</li>\r\n</ul>\r\n\r\n<p>Nhờ chuy&ecirc;n t&acirc;m trong x&acirc;y dựng uy t&iacute;n, n&acirc;ng cao chất lượng dịch vụ, H&agrave; Th&agrave;nh Garage đ&atilde; từng bước chinh phục được những kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh nhất, với những d&ograve;ng xe từ th&ocirc;ng dụng cho đến những d&ograve;ng xe ở ph&acirc;n kh&uacute;c cao cấp nhất.</p>', NULL, '2021-05-28 22:25:00', '2021-05-28 22:59:36');

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
