-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 10:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aple`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_contents`
--

CREATE TABLE `about_contents` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desp` varchar(200) NOT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_contents`
--

INSERT INTO `about_contents` (`id`, `sub_title`, `title`, `desp`, `image`) VALUES
(8, 'Introduce ', 'I am a professional web designer', 'I am a professional web designerI am a professional web designerI am a professional web designer', '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner_contents`
--

CREATE TABLE `banner_contents` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desp` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_contents`
--

INSERT INTO `banner_contents` (`id`, `sub_title`, `title`, `desp`, `status`) VALUES
(40, 'Hey', 'I am Dilip Raj bongshi', 'sdgfasfkljafasjfkajflsafjasfljskafj', 1),
(43, 'Hey', 'i am Web developer', 'Obcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et reprehe', 0),
(44, 'Hey', 'I am fullstack web developer', 'sdgfasfkljafasjfkajflsafjasfljskafjsdgfasfkljafasjfkajflsafjasfljskafj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner_images`
--

CREATE TABLE `banner_images` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_images`
--

INSERT INTO `banner_images` (`id`, `banner_image`, `status`) VALUES
(24, '24.png', 1),
(25, '25.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `logo`, `status`) VALUES
(9, '9.png', 0),
(11, '11.png', 0),
(12, '12.jpg', 1),
(13, '13.jpg', 1),
(14, '14.jpg', 1),
(15, '15.jpg', 1),
(16, '16.png', 1),
(17, '17.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts_info`
--

CREATE TABLE `contacts_info` (
  `id` int(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts_info`
--

INSERT INTO `contacts_info` (`id`, `address`, `phone`, `email`) VALUES
(2, 'Velit quos quod nos', '24132552352523523', 'wunupirov@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `number` int(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `icon_class`, `title`, `number`, `status`) VALUES
(7, 'fa-pinterest-p', 'Pinterest', 111, 1),
(8, 'fa-twitter', 'Twitter', 3455, 1),
(9, 'fa-apple', 'Apple', 5555, 1),
(10, 'fa-facebook-f', 'Facebook', 4444, 0),
(11, 'fa-facebook', 'Face-book', 5, 0),
(12, 'fa-facebook-f', 'face-bbok', 563, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `status`) VALUES
(2, '2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Hayden Merritt', 'dipi@mailinator.com', 'Eiusmod voluptas lab'),
(2, 'Sierra Collier', 'nawetujul@mailinator.com', 'Non ullamco blanditi'),
(3, 'Emily Gutierrez', 'wanowaq@mailinator.com', 'Quia proident et id'),
(4, 'Ingrid Boone', 'qujuzohe@mailinator.com', 'Natus expedita deser');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desp` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon_class`, `title`, `desp`, `status`) VALUES
(6, 'fa-twitter', 'twitter', 'I never use twitter', 1),
(14, 'fa-twitter', 'twiter', 'ljkskfasdfaf', 1),
(17, 'fa-twitter', 'Twitter', 'szgsgsgdsgsgf', 1),
(18, 'fa-facebook', 'face-book', 'I use face-book', 1),
(19, 'fa-facebook-f', 'face-book', 'asfsasdfdasfffffffffff', 1),
(20, 'fa-twitter', 'twitter', 'I use twitter', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `desp` varchar(200) NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `topic`, `desp`, `percentage`, `status`) VALUES
(5, 'wwww', 'Labore vel et explic', 40, 0),
(6, 'HTML', 'Obcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et reprehe', 90, 1),
(7, 'CSS', 'Obcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et reprehe', 80, 1),
(8, 'JAVA SCRIPT', 'Obcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et reprehe', 20, 1),
(9, 'PHP', 'Obcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et reprehe', 50, 1),
(10, 'PSD', 'Obcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et repreheObcaecati et reprehe', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `icon_class`, `link`, `status`) VALUES
(4, 'fa-universal-access', 'https://www.facebook.com/', 0),
(9, 'fa-twitter', 'https://www.facebook.com/', 1),
(10, 'fa-twitter', 'https://www.facebook.com/', 1),
(11, 'fa-facebook-f', 'https://www.facebook.com/', 1),
(12, 'fa-twitter', 'https://www.facebook.com/', 1),
(13, 'fa-keyboard-o', 'https://www.facebook.com/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testy`
--

CREATE TABLE `testy` (
  `id` int(11) NOT NULL,
  `desp` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `profile_photo` varchar(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testy`
--

INSERT INTO `testy` (`id`, `desp`, `title`, `sub_title`, `profile_photo`, `status`) VALUES
(5, 'Blanditiis ea verita', 'Ea quis ullamco libe', 'Et deserunt voluptas', '5.jpg', 0),
(6, 'Deserunt error eum iDeserunt error eum iDeserunt error eum iDeserunt error eum iDeserunt error eum iDeserunt error eum iDeserunt error eum i', 'Officiis illo earum ', 'Harum quo facilis qu', '6.jpg', 1),
(7, 'Autem in tempor doloDeserunt error eum iDeserunt error eum iDeserunt error eum iDeserunt error eum i', 'Autem facilis incidu', 'Quam laborum volupta', '7.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0',
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_photo`, `status`, `role`) VALUES
(18, 'raj', 'apple@gmail.com', '$2y$10$BLDVDLx1vOSlbmes7vXY/uqMqUD9Dm4QGoF2hgsvJTA/SoYXkWBPu', '18.png', '0', 1),
(19, 'mubekazoq@mailinator.com', 'wugajuwyqi@mailinator.com', '$2y$10$loRCbJeG0Xs.ZlVNfDwjHux1KFzVXOO1PJ8kuJyTNCApN8TFlAcEO', '19.jpg', '0', 2),
(20, 'Don', 'guzenah@mailinator.com', '$2y$10$jGi5pJ3i8Iw1P3CqwcV3je8D4nwqTOC5yTWSbcqfi3qMis2WzRwem', '20.jpg', '0', 3),
(21, 'jon', 'muhi@mailinator.com', '$2y$10$KcrEoE0GlCECkuolzv2zL.1Ek3FkKeVQK0eELe.uIYY4AmgwlHMAi', '21.png', '0', 4);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(60) NOT NULL,
  `desp` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `user_id`, `title`, `category`, `desp`, `image`, `status`) VALUES
(4, 18, 'Aperiam earum exerci', 'Sequi vitae dignissi', 'Occaecat pariatur D', '4.png', 0),
(6, 18, 'Eiusmod fugit ut no', 'Laborum hic minus hi', 'Accusantium dolores ', '6.jpg', 0),
(7, 18, 'Dolores ipsum magni', 'Vel nihil vel deseru', 'Nostrud ad debitis a', '7.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_contents`
--
ALTER TABLE `about_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_contents`
--
ALTER TABLE `banner_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_images`
--
ALTER TABLE `banner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_info`
--
ALTER TABLE `contacts_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testy`
--
ALTER TABLE `testy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_contents`
--
ALTER TABLE `about_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner_contents`
--
ALTER TABLE `banner_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `banner_images`
--
ALTER TABLE `banner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts_info`
--
ALTER TABLE `contacts_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testy`
--
ALTER TABLE `testy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
