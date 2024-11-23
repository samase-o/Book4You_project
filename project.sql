-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 08:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `book` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `book`, `image`) VALUES
(142, 'Mariem Sayed Fathi', 'حكايات مسافر', 'images/author7.jpg'),
(143, '', '', 'images/'),
(144, '', '', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `bookyou`
--

CREATE TABLE `bookyou` (
  `id` int(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `publisher_code` int(40) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookyou`
--

INSERT INTO `bookyou` (`id`, `title`, `author`, `publisher`, `price`, `publisher_code`, `image`) VALUES
(1097, 'دعاء الكروان', 'طه حسين', 'دار النشر العربية', '50', 0, 'images/download (6).jfif'),
(1098, 'سلسلة ما وراء الطبيعة', 'أحمد خالد توفيق', 'القومية العربية', '1000', 0, 'images/images.jfif'),
(1099, 'كرولاين', 'نيل غيمان', 'دار النشر و التوزيع العربية', '100', 0, 'images/download (5).jfif'),
(1100, 'اولاد حارتنا', 'نجيب محفوظ', 'مكتبة مصر', '40', 0, 'images/download (1).jfif'),
(1102, 'أرض زيكولا', ' عمرو عبد الحميد', 'عصير الكتب', '50', 0, 'images/download.jfif'),
(1103, 'حوار مع صديقي الملحد', 'مصطفى محمود', 'دار النشر العربية', '30', 0, 'images/download (4).jfif'),
(1104, 'فن اللأمبالاة', 'مارك مانسون', 'دار النشر العربية', '85', 0, 'images/download (3).jfif'),
(1105, 'المسكون', 'تامر عطوه', 'ساحر الكتب', '70', 0, 'images/download (7).jfif'),
(1106, 'سارة', 'عباس محمود العقاد', 'دار النشر العربية', '30', 0, 'images/download (8).jfif'),
(1107, 'Green mile', 'Stephen King ', 'United publisher', '90', 0, 'images/download (9).jfif'),
(1108, 'صانع الظلال', 'تامر ابراهيم', 'الكرمة', '40', 0, 'images/download (10).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_name`, `id`, `quantity`) VALUES
('Mariem Sayed Fathi ', 1038, 1),
('Mariem Sayed Fathi ', 0, 1),
('Mariem Sayed Fathi k', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(132, 'Mariem Sayed Fathi ', 'marymsayedfathi712@gmail.com', '01118218775', 'nmksld,kpvk,sd'),
(133, 'Mariem Sayed Fathi ', 'marymsayedfathi712@gmail.com', '01118218775', 'nmksld,kpvk,sd'),
(134, 'Mariem Sayed Fathi ', 'marymsayedfathi712@gmail.com', '01118218775', 'nmksld,kpvk,sd'),
(135, 'Mariem Sayed Fathi ', 'marymsayedfathi712@gmail.com', '01118218775', 'nmksld,kpvk,sd'),
(136, 'Mariem Sayed Fathi ', 'marymsayedfathi712@gmail.com', '01118218775', 'nmksld,kpvk,sd'),
(137, 'RGRV', 'mero@gmaill.com', '5214', 'يبلبي'),
(138, 'RGRV', 'mero@gmaill.com', '5214', 'يبلبي'),
(139, 'vvvvvvvvvvv', '', '', 'bbbbbbbbbbbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `feed-back`
--

CREATE TABLE `feed-back` (
  `id` int(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(30) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`) VALUES
(173, 'manal salem'),
(256, ''),
(257, ''),
(258, ''),
(259, ''),
(260, 'fgh'),
(261, 'fgh'),
(262, 'fgh'),
(263, 'fgh'),
(264, 'fgh'),
(265, ''),
(266, ''),
(267, ''),
(268, ''),
(269, ''),
(270, ''),
(271, ''),
(272, ''),
(273, ''),
(274, ''),
(275, ''),
(276, ''),
(277, ''),
(278, ''),
(279, ''),
(280, ''),
(281, ''),
(282, ''),
(283, ''),
(284, ''),
(285, ''),
(286, ''),
(287, ''),
(288, ''),
(289, ''),
(290, ''),
(291, ''),
(292, ''),
(293, ''),
(294, ''),
(295, ''),
(296, ''),
(297, ''),
(298, ''),
(299, ''),
(300, ''),
(301, ''),
(302, ''),
(303, ''),
(304, ''),
(305, ''),
(306, ''),
(307, ''),
(308, ''),
(309, ''),
(310, ''),
(311, ''),
(312, ''),
(313, ''),
(314, ''),
(315, ''),
(316, ''),
(317, ''),
(318, ''),
(319, ''),
(320, ''),
(321, ''),
(322, ''),
(323, ''),
(324, ''),
(325, ''),
(326, ''),
(327, ''),
(328, ''),
(329, ''),
(330, ''),
(331, ''),
(332, ''),
(333, ''),
(334, ''),
(335, ''),
(336, ''),
(337, ''),
(338, ''),
(339, ''),
(340, ''),
(341, ''),
(342, ''),
(343, '');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `national_id` varchar(100) DEFAULT NULL,
  `phone_number` int(100) NOT NULL,
  `site` varchar(100) DEFAULT NULL,
  `pay_way` varchar(100) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `national_id`, `phone_number`, `site`, `pay_way`, `days`) VALUES
(142, 'Mariem Sayed Fathi ', '30312070103326', 118218775, 'B38', 'vodafonecash', 'three'),
(246, 'Mariem Sayed Fathi', '', 0, '', '', ''),
(247, 'Mariem Sayed Fathi', '30312070103326', 0, '', '', ''),
(248, 'Mariem Sayed Fathi', '30312070103326', 0, '', '', ''),
(249, 'Mariem Sayed Fathi', '', 118218775, '', '', ''),
(250, 'ahmed', '', 0, '', '', ''),
(251, 'mostafa', '', 0, '', '', ''),
(252, 'ahmed', '', 118218775, 'A11', 'master_card', ''),
(253, 'ahmed', '', 118218775, 'A11', 'master_card', ''),
(254, 'Mariem Sayed Fathi ', '30312070103326', 2021212524, 'C1', 'master_card', 'five'),
(255, 'Mariem Sayed Fathi ', '30312070103326', 2021212524, 'C1', 'master_card', 'five'),
(256, 'Mariem Sayed Fathi', '', 118218775, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_image` varchar(200) DEFAULT NULL,
  `PUBLISHER ID [INT]` int(50) NOT NULL,
  `publisher_name` varchar(200) DEFAULT NULL,
  `publisher_place` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_image`, `PUBLISHER ID [INT]`, `publisher_name`, `publisher_place`) VALUES
('images/الراتب.jpg', 144, 'دار الراتب ناشرون', 'صالة 1 - بلوك B1'),
('images/الراتب.jpg', 146, 'دار الراتب ناشرون', 'صالة 3 - بلوك A76'),
('images/author5.webp', 150, 'KFGH', 'DGHJ'),
('images/', 151, '', ''),
('images/', 152, '', ''),
('images/', 153, '', ''),
('images/', 154, '', ''),
('images/', 155, '', ''),
('images/', 156, '', ''),
('images/author6.jpg', 157, 'sfg', 'dgh'),
('images/', 158, '', ''),
('images/Writers_Logo.png', 159, 'الشروق ', 'ش5'),
('images/', 160, '', ''),
('images/', 161, 'mero', 'wss'),
('images/', 162, '', ''),
('images/', 163, 'kkkkkk', 'kkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `publisher` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `whatsapp`, `age`, `publisher`) VALUES
(142, 'Mariem Sayed Fathi', 'marymsayedfathi712@gmail.com', '20120379', '01118218775', '20', '1'),
(144, 'hoda sayed', 'drsh_fox2010@yahoo.com', '45678+', '011488225566', '15', '0'),
(145, 'ahmed', 'mero@gmaill.com', '789456', '789654', '4', '1'),
(146, 'Mariem Sayed Fathi k', 'marymsdfathi712@ail.com', '789456', '01118218771', '15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `pay_way` varchar(20) NOT NULL,
  `day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `first_name`, `last_name`, `email`, `phone`, `gender`, `pay_way`, `day`) VALUES
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', 'marymsayedfathi712@gmail.com', '0', 'Female', 'visa', '0000-00-00'),
(0, 'mariem ', 'sayed', 'Marymsayedfathi712@gmail.com', '1118218775', '', 'visa', '2023-04-27'),
(0, 'mariem ', 'sayed', 'Marymsayedfathi712@gmail.com', '01118218775', '', 'visa', '2023-04-27'),
(0, 'mariem ', 'sayed', 'Marymsayedfathi712@gmail.com', '01118218775', 'Female', 'visa', '2023-04-27'),
(0, 'mariem ', 'sayed', 'Marymsayedfathi712@gmail.com', '01118218775', 'Female', 'visa', '2023-04-27'),
(0, 'mariem ', 'sayed', 'marymsayedfathi712@gmail.com', '01118218775', 'Female', 'vodafone', '2023-04-27'),
(0, 'mariem ', 'sayed', 'marymsayedfathi712@gmail.com', '01118218775', 'Female', 'vodafone', '2023-04-27'),
(0, 'mariem ', 'sayed', 'marymsayedfathi712@gmail.com', '01118218775', 'Female', 'vodafone', '2023-04-27'),
(0, 'mariem ', 'sayed', 'marymsayedfathi712@gmail.com', '01118218775', 'Female', 'vodafone', '2023-04-27'),
(0, '', '', '', '01118218775', '', 'visa', '0000-00-00'),
(0, '', '', '', '01118218775', '', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', '', '', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', '', '', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', '', '', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', '', '', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', '', '', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', '', '', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', '', '', '', 'Female', 'visa', '0000-00-00'),
(0, 'mariem sayed', 'sayed', 'marymsayedfathi712@gmail.com', '', 'Female', 'vodafone', '2023-05-02'),
(0, 'mariem sayed', '', 'Marymsayedfathi712@gmail.com', '', 'Female', 'visa', '2023-05-26'),
(0, 'mariem sayed', '', 'Marymsayedfathi712@gmail.com', '114', 'Female', 'visa', '2023-05-26'),
(0, 'blabla', 'bla', 'bla@nn', '', 'Female', 'visa', '2023-05-24'),
(0, 'blabla', 'bla', 'marymsayedfathi712@gmail.com', '', 'Female', 'visa', '2023-05-18'),
(0, 'blabla', 'bla', '', '01118218775', 'Female', 'visa', '2023-05-15'),
(0, 'blabla', 'bla', '', '5', 'Female', 'visa', '2023-05-26'),
(0, 'blabla', 'bla', '', '01118218775', 'Female', 'visa', '2023-05-18'),
(0, 'blabla', 'bla', '', '01118218775', 'Female', 'visa', '2023-05-18'),
(0, 'blabla', 'bla', '', '01118218775', 'Female', 'visa', '2023-05-24'),
(0, 'blabla', 'bla', '', '01118218775', 'Female', 'visa', '2023-05-18'),
(0, 'blabla', 'bla', 'marymsayedfathi712@gmail.com', '01118218775', 'Female', 'visa', '2023-05-18'),
(0, 'mariem sayed', 'bla', 'marymsayedfathi712@gmail.com', '', 'Female', 'visa', '2023-05-18'),
(0, 'mariem sayed', 'bla', 'marymsayedfathi712@gmail.com', '789654123', 'Female', 'visa', '2023-05-18'),
(0, 'mariem sayed', 'bla', 'marymsayedfathi712@gmail.com', '789654123', 'Female', 'visa', '2023-05-18'),
(0, 'mariem sayed', 'bla', 'marymsayedfathi712@gmail.com', '789654123', 'Female', 'visa', '2023-05-18'),
(0, 'mariem sayed', 'bla', 'marymsayedfathi712@gmail.com', '789654123', 'Female', 'visa', '2023-05-18'),
(0, 'mariem sayed', 'bla', 'marymsayedfathi712@gmail.com', '789654123', 'Female', 'visa', '2023-05-18'),
(0, 'mariem sayed', 'bla', 'marymsayedfathi712@gmail.com', '789654123', 'Female', 'visa', '2023-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `دور النشر`
--

CREATE TABLE `دور النشر` (
  `publisher id` int(11) NOT NULL,
  `publisher name` varchar(200) NOT NULL,
  `publisher place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `دور النشر`
--

INSERT INTO `دور النشر` (`publisher id`, `publisher name`, `publisher place`) VALUES
(1, 'دار الراتب ناشرون', ' 3بلوك- صالة D21'),
(2, 'شركة المؤسسة الحديثة للكتاب', '3بلوك -صالة C40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookyou`
--
ALTER TABLE `bookyou`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed-back`
--
ALTER TABLE `feed-back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`PUBLISHER ID [INT]`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `دور النشر`
--
ALTER TABLE `دور النشر`
  ADD PRIMARY KEY (`publisher id`),
  ADD KEY `publisher id` (`publisher id`,`publisher name`,`publisher place`),
  ADD KEY `publisher id_2` (`publisher id`,`publisher name`,`publisher place`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `bookyou`
--
ALTER TABLE `bookyou`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `PUBLISHER ID [INT]` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `دور النشر`
--
ALTER TABLE `دور النشر`
  MODIFY `publisher id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
