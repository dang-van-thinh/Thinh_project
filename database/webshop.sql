-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 06, 2023 lúc 06:32 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `innis`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_giohang`
--

CREATE TABLE `ct_giohang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_sanpham`
--

CREATE TABLE `ct_sanpham` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `baohanh` varchar(255) NOT NULL,
  `xuatxu` varchar(255) NOT NULL,
  `thuonghieu` varchar(255) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_sanpham`
--

CREATE TABLE `danhmuc_sanpham` (
  `id` int(11) NOT NULL,
  `ten_dm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_sanpham`
--

INSERT INTO `danhmuc_sanpham` (`id`, `ten_dm`) VALUES
(1, 'Dép'),
(2, 'Giày'),
(3, 'Thắt lưng'),
(4, 'Áo nam'),
(6, 'Quần nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(150) NOT NULL,
  `gia` int(11) NOT NULL,
  `gia_cu` int(11) DEFAULT NULL,
  `img` varchar(150) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `gia_cu`, `img`, `id_dm`) VALUES
(37, 'Áo Sơ Mi Nam Dior Grey With Pattern Printed 193C545A5797 888 Màu Xám', 520000, NULL, '../uploads/ao-dior.jpg', 4),
(39, 'Thắt lưng da bò khoá thép MITT4-04', 120000, NULL, '../uploads/thatlung-1.webp', 3),
(40, 'Thắt lưng da bò khoá kim bản nhỏ SMK3-02', 130000, NULL, '../uploads/thatlung-3.webp', 3),
(41, 'Thắt lưng bản nhỏ da bò Ý MIK3-04', 100000, NULL, '../uploads/thatlung-2.webp', 3),
(42, 'Thắt lưng da bò vân voi MVT4-37', 190000, NULL, '../uploads/thatlung-4.webp', 3),
(43, 'Thắt lưng da bò vân gỗ MGT4-40', 150000, NULL, '../uploads/thatlung-5.webp', 3),
(44, 'Thắt lưng da bò vân gỗ MGT4-38', 165000, NULL, '../uploads/thatlung-6.webp', 3),
(45, 'Dép nam - 7794 Dép Nam Quai Ngang Đế Bằng,Dép Nam Thời Trang Phong Cách Cá Tính,Trẻ Trung', 200000, NULL, '../uploads/dep-1.jpg', 1),
(46, 'Dép nam MWC NADE- 7724 Dép Nam Quai Ngang Phối Màu Cách Điệu Thời Trang Phong Cách Cá Tính', 190000, NULL, '../uploads/dep-2.jpg', 1),
(47, 'Dép nam MWC - 7567 Dép Kẹp Nam Đế Đúc Nguyên Khối Phong Cách Cá Tính, Dép Xỏ Ngón Nam Mẫu Mới Cao Cấ', 185000, NULL, '../uploads/dep-3.jpg', 1),
(49, 'Dép Nam Quai Ngang Dáng Thể Thao Hot Trend ,Dép Đúc Nguyên Khối Bền Đẹp Phong Cách, Mẫu Mới,Thời Tra', 210000, NULL, '../uploads/dep-5.jpg', 1),
(50, 'Giày Louis Vuitton Lv Trainer #54 Signature White Chuẩn Auth 99.99%', 450000, NULL, '../uploads/giay1.jpg', 2),
(51, 'Giày Nike Air Jordan 1 Low ‘Aluminum’ Ice Blue Like Auth', 840000, NULL, '../uploads/giay2.jpg', 2),
(52, ' Giày Nike Air Jordan 1 Low Panda Like Auth', 650000, NULL, '../uploads/giay3.jpg', 2),
(53, 'Giày Nike Air Jordan 1 Low Quilted ‘White’ Like Auth', 750000, NULL, '../uploads/giay4.jpg', 2),
(54, ' Giày Jd1 Paris Bản Trung Cực Nét 1:1', 450000, NULL, '../uploads/giay5.jpeg', 2),
(55, ' Giày Nike AF1 Trà Sữa Siêu Cấp', 350000, NULL, '../uploads/giay6.jpg', 2),
(57, 'Quần shorts chạy bộ Advanced Fast & Free Run', 350000, 390000, '../uploads/quan-short-1.webp', 6),
(58, 'Quần Âu Nam Cạp Chun Dây Rút', 390000, 420000, '../uploads/quan-dai-1.webp', 6),
(59, 'Thắt lưng Aristino ABL08402 màu Bạc- Đen', 260000, 300000, '../uploads/thatlung-7.webp', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_comment`
--

CREATE TABLE `user_comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ranting` int(5) NOT NULL,
  `comment` text NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  `uutien` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_login`
--

INSERT INTO `user_login` (`id`, `user`, `email`, `password`, `img`, `uutien`) VALUES
(1, 'admin', 'admin@gmail.com', '123', '../uploads/logo.jpg', 1),
(12, 'thinh', 'dangvanthinh372004@gmail.com', '456', '../uploads/logo-tiktokseller.png', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_giohang`
--
ALTER TABLE `ct_giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ctgh_user` (`id_user`),
  ADD KEY `fk_ctgh_sp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `ct_sanpham`
--
ALTER TABLE `ct_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ctsp_sp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cm_user` (`id_user`),
  ADD KEY `fk_cm_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ct_giohang`
--
ALTER TABLE `ct_giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ct_sanpham`
--
ALTER TABLE `ct_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ct_giohang`
--
ALTER TABLE `ct_giohang`
  ADD CONSTRAINT `fk_ctgh_sp` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_ctgh_user` FOREIGN KEY (`id_user`) REFERENCES `user_login` (`id`);

--
-- Các ràng buộc cho bảng `ct_sanpham`
--
ALTER TABLE `ct_sanpham`
  ADD CONSTRAINT `fk_ctsp_sp` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc_sanpham` (`id`);

--
-- Các ràng buộc cho bảng `user_comment`
--
ALTER TABLE `user_comment`
  ADD CONSTRAINT `fk_cm_sp` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_cm_user` FOREIGN KEY (`id_user`) REFERENCES `user_login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
