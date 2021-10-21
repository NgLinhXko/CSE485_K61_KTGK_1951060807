-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 21, 2021 lúc 02:07 SA
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlnhm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_dornor`
--

CREATE TABLE `blood_dornor` (
  `bd_id` int(15) UNSIGNED NOT NULL,
  `bd_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bd_sex` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bd_age` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bd_bgroup` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bd_reg_date` date NOT NULL DEFAULT current_timestamp(),
  `bd_phno` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blood_dornor`
--

INSERT INTO `blood_dornor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
(1, 'NVA', 'Nam', '20', 'A+', '2021-10-21', '097999'),
(3, 'Đặng Thị Ngọc Linh', 'Nữ', '20', 'A+', '2021-10-21', '099999');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_dornor`
--
ALTER TABLE `blood_dornor`
  ADD PRIMARY KEY (`bd_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blood_dornor`
--
ALTER TABLE `blood_dornor`
  MODIFY `bd_id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
