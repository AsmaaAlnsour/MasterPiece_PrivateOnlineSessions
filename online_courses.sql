-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 11:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_time`
--

CREATE TABLE `available_time` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `am_pm` varchar(30) NOT NULL,
  `available` int(11) NOT NULL DEFAULT 1,
  `delete_unavailable` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `available_time`
--

INSERT INTO `available_time` (`id`, `teacher_id`, `date`, `time`, `am_pm`, `available`, `delete_unavailable`) VALUES
(41, 17, '2023-02-22', 9, 'am', 0, 1),
(42, 17, '2024-05-03', 7, 'pm', 0, 1),
(43, 17, '2022-02-10', 5, 'am', 0, 1),
(44, 17, '2023-02-09', 4, 'am', 0, 1),
(45, 17, '2022-05-05', 3, 'am', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `card_number` int(30) NOT NULL,
  `earnings` int(11) NOT NULL DEFAULT 0,
  `link` varchar(255) NOT NULL DEFAULT '0',
  `delete_session` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `teacher_id`, `time_id`, `card_number`, `earnings`, `link`, `delete_session`) VALUES
(37, 3, 17, 41, 2147483647, 10, '0', 1),
(38, 3, 17, 42, 2147483647, 10, '0', 1),
(43, 3, 17, 43, 1234, 10, ' https://zoom.us/signin#/login', 1),
(44, 3, 17, 44, 1234, 10, '0', 1),
(45, 3, 17, 45, 1235, 10, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `delete_comment` int(11) NOT NULL DEFAULT 1,
  `date_insert` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `teacher_id`, `delete_comment`, `date_insert`) VALUES
(1, 'Good Teacher', 3, 17, 1, '2023-02-05'),
(6, 'Good Teacher', 3, 17, 1, '2023-02-05'),
(7, 'ooooooo', 3, 16, 1, '2023-02-05'),
(8, 'ooooooo', 3, 16, 1, '2023-02-05'),
(9, 'new comment', 3, 17, 0, '2023-02-05'),
(10, 'new comment', 3, 17, 1, '2023-02-05'),
(11, 'new comment', 3, 17, 1, '2023-02-05'),
(12, 'new comment', 3, 17, 1, '2023-02-05'),
(13, 'new comment', 3, 17, 1, '2023-02-05'),
(14, 'new comment', 3, 17, 1, '2023-02-05'),
(15, 'new comment', 3, 17, 1, '2023-02-05'),
(16, 'Woow', 7, 17, 1, '2023-02-05'),
(17, 'Woow', 2, 17, 1, '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `min_age` int(11) NOT NULL DEFAULT 3,
  `max_age` int(11) NOT NULL DEFAULT 70,
  `tuition_fee` int(11) NOT NULL DEFAULT 15,
  `delete_grade` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`, `description`, `img`, `min_age`, `max_age`, `tuition_fee`, `delete_grade`) VALUES
(7, 'Base Classes', 'This class includes children from the first, second, third, fourth and fifth classes', 'class-2.jpg', 5, 11, 15, 1),
(8, 'Preparatory classes', 'This class includes students the sixth, seventh, eighth, ninth and tenth classes', 'class-3.jpg', 11, 17, 15, 1),
(9, 'ٍSecondary classes', 'This class includes students the first grade is secondary and the second is secondary', 'class-1.jpg', 17, 19, 25, 1),
(10, 'Language lessons', 'This class includes children and students from all classes to learn new languages', 'blog-2.jpg', 3, 70, 10, 1),
(11, 'kindergarten', 'This class includes children from the KG1,KG2 classes ', 'blog-3.jpg', 2, 5, 10, 1),
(12, 'Coding', 'This class includes students with a passion for learning to code of all ages', 'download.jfif', 3, 70, 20, 1),
(13, 'def', 'mkd', 'testimonial-2.jpg', 83, 14, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `delete_message` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `delete_message`) VALUES
(1, 'Asmaa Al-Nsour', 'asmaa@gmail.com', 'Welcome', 'gbjhklm', 1),
(2, 'Asmaa Al-Nsour', 'asmaa@gmail.com', 'Welcome', 'nm,', 0),
(3, 'Asmaa Al-Nsour', 'alnsourasmaa@gmail.c', 'Welcome', 'n jmk,l', 1),
(4, 'Asmaa Al-Nsour', 'SuperAdmin@gmail.com', 'Welcome', 'dgfbhjkl', 1),
(5, 'Asmaa Al-Nsour', 'asmaa@gmail.com', 'Welcome', 'welcoooooooooooooooome', 1),
(6, 'Asmaa Al-Nsour', 'asmaa@gmail.com', 'Welcome', 'azsxdfgvhjkl', 1),
(7, 'Asmaa Al-Nsour', 'SuperAdmin@gmail.com', 'Welcome', 'xgfchvjbklhiiiiiiiiiiiiiiiiii', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `grades_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subject_img` varchar(150) DEFAULT NULL,
  `subject_keywords` varchar(255) NOT NULL,
  `delete_subject` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `grades_id`, `subject`, `subject_img`, `subject_keywords`, `delete_subject`) VALUES
(15, 9, 'math', 'math.png', 'math secondary classes', 1),
(17, 8, 'Arabic', 'arabic.jpg', 'arabic', 1),
(18, 11, 'English', 'english.jfif', 'english', 1),
(19, 11, 'math', 'math.png', 'math', 1),
(28, 8, 'English', 'english.jfif', 'English', 1),
(29, 10, 'English', 'english.jfif', 'English', 1),
(30, 10, 'Arabic', 'arabic.jpg', 'Arabic', 1),
(31, 7, 'Arabic', 'arabic.jpg', 'Arabic', 1),
(32, 9, 'New', 'testimonial-2.jpg', 'math base ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `degree_file` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `experience_file` varchar(255) NOT NULL,
  `approval` int(11) NOT NULL DEFAULT 0 COMMENT '0 is not approved',
  `suspend` int(11) NOT NULL DEFAULT 1 COMMENT '0 is suspended',
  `delete_teacher` int(11) NOT NULL DEFAULT 1 COMMENT '0 is Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `full_name`, `phone`, `email`, `password`, `subject_id`, `address`, `age`, `image`, `degree`, `degree_file`, `experience`, `experience_file`, `approval`, `suspend`, `delete_teacher`) VALUES
(15, 'Momen Ahmad Alnsour', '0771234567', 'momen@gmail.com', '123456789', 17, 'Salt,Jordan', 25, 'momen.jpg', 'bachelor\'s', 'hhh.jpg', '5', 'hhh.jpg', 1, 1, 1),
(16, 'Mohammad Ahmad AbdAlFattah', '0771234567', 'mohammad@gmail.com', '123456789', 19, 'Zarqaa,Jordan', 20, 'mohammad.jpg', 'bachelor\'s', 'Screenshot 2022-12-12 091558.jpg', '1', 'Screenshot 2022-12-12 091558.jpg', 1, 1, 1),
(17, 'Asmaa Ahmad Alnsour', '0771234567', 'Asmaa@gmail.com', '123456', 19, 'Amman,Jordan', 28, 'Screenshot 2022-12-22 113428.jpg', 'bachelor\'s', 'handshake-business-people-background-contract_609547-657.jpg', '2', 'Screenshot 2022-10-30 213822.jpg', 1, 1, 1),
(18, 'Noor Ali', '0771235869', 'Noor@gmail.com', 'Asmaa@13579', 18, 'new', 26, 'testimonial-1.jpg', '8', 'Screenshot 2022-12-12 091619.jpg', '5', 'Screenshot 2022-11-10 102730.jpg', 0, 1, 1),
(19, 'Anwar Ali Alzaareer', '07712345687', 'anwar@gmail.com', '123456', 15, 'Amman,Jordan', 28, 'n_jmlk6970xsdc-removebg-preview.png', 'Master', 'Screenshot 2022-10-24 224731.jpg', '5', 'Screenshot 2022-10-30 213822.jpg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user',
  `address` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `delete_user` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `age`, `password`, `phone`, `user_type`, `address`, `profile_pic`, `subject`, `delete_user`) VALUES
(2, 'Asmaa', 'asmaa@gmail.com', 27, 'Asmaa@13579', '07724567085', 'admin', ' Jordan , Salt, 60th', 'd6b5a429-5346-4ca5-92d2-8fbd62ab738f.jpg', NULL, 1),
(3, 'student1', 'student@gmail.com1', 2111, 'Student@1357911', '07712345671', 'user', ' Jordan , Salt, 60th1', 'di74f0jivvxwhelmqhof.png', NULL, 0),
(4, 'hi1', 'hi@gmail.com', 27, 'Asmaa@134', '0771234567', 'user', 'Jordan , Salt, 60th', 'handshake-business-people-background-contract_609547-657.webp', NULL, 0),
(6, 'klmkl', 'asklmlfgmaa@gmail.com', 45, 'Asmaa@135792468', '516516', 'user', 'jkk,.', 'download.jfif', NULL, 1),
(7, 'Anwar Ali Alzaareer', 'anwar@gmail.com', 28, 'Anwar@13579', '0771234567', 'user', 'Amman ', 'n jmlk6970xsdc.jpg', NULL, 1),
(8, 'New', 'new@gmail.com', 27, 'Asmaa@13579 ', '+962772456708', 'user', ' Amman,Jordan', '', NULL, 1),
(9, 'Admin', 'admin@gmail.com', 25, '123456', '0771234567', 'admin', 'Amman,Jordan', 'WhatsApp Image 2022-11-21 at 3.38.13 PM.jpeg', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_time`
--
ALTER TABLE `available_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `time_id` (`time_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grades_id` (`grades_id`) USING BTREE;

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_time`
--
ALTER TABLE `available_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `available_time`
--
ALTER TABLE `available_time`
  ADD CONSTRAINT `available_time_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`time_id`) REFERENCES `available_time` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`grades_id`) REFERENCES `grades` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
