-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 05:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dropdown`
--

CREATE TABLE `dropdown` (
  `dropdown_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `hall_number` int(11) DEFAULT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dropdown`
--

INSERT INTO `dropdown` (`dropdown_id`, `hall_id`, `hall_number`, `teacher_id`, `teacher_name`) VALUES
(1, 1, 111, 1, 'Peter Pitrovich'),
(2, 2, 222, 2, 'Johnson Blake'),
(3, 3, 333, 4, 'Marry Beard'),
(4, 5, 444, 5, 'Mario Adamo'),
(5, 6, 555, 6, 'Bill Gates'),
(6, 7, 666, 7, 'Mark Zukerberg'),
(7, 8, 777, 8, 'Cristiano Ronaldo'),
(8, 9, 888, 9, 'Neymar Barca'),
(9, 10, 999, 10, 'Diana Stelma'),
(10, 11, 414, 12, 'Vitalik Rudenko');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(11) NOT NULL,
  `hall_number` int(11) NOT NULL,
  `hall_status` enum('Taken','Returned','Locked') NOT NULL,
  `chairs` int(11) DEFAULT NULL,
  `tables` int(11) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `university_id` int(11) NOT NULL,
  `time` datetime(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `hall_number`, `hall_status`, `chairs`, `tables`, `size`, `university_id`, `time`) VALUES
(1, 111, 'Returned', 12, 12, 'small', 1, '2017-12-13 15:43:28.00000'),
(2, 222, 'Returned', 2425, 344, 'very big', 1, '2017-12-13 15:43:47.00000'),
(3, 333, 'Returned', 100, 50, 'average', 1, '2017-12-13 15:44:10.00000'),
(5, 444, 'Returned', 170, 123, 'normal', 1, '2017-12-13 15:44:25.00000'),
(6, 555, 'Returned', 234, 234, 'a bit large', 1, '2017-12-13 15:44:36.00000'),
(7, 666, 'Returned', 115, 115, 'normal', 1, '2017-12-13 15:44:51.00000'),
(8, 777, 'Returned', 901, 901, 'large', 1, '2017-12-13 15:45:10.00000'),
(9, 888, 'Returned', 546, 546, 'almost large', 1, '2017-12-13 15:45:27.00000'),
(10, 999, 'Returned', 25, 25, 'very small', 1, '2017-12-13 15:45:43.00000'),
(11, 414, 'Returned', 80, 40, 'average', 1, '2017-12-13 15:46:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `selecthall`
--

CREATE TABLE `selecthall` (
  `selecthall_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `hall_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `selecthall`
--

INSERT INTO `selecthall` (`selecthall_id`, `status`, `comment`, `time`, `hall_id`, `teacher_id`) VALUES
(1, 'Taken', 'I am taking this hall', '2017-12-13 18:55:36', 11, 2),
(2, 'Taken', 'I am taking the key now', '2017-12-13 19:21:03', 10, 8),
(3, 'Taken', 'I am taking the key', '2017-12-13 19:25:00', 7, 6),
(4, 'Taken', 'I am with the key to this hall', '2017-12-13 19:26:31', 9, 7),
(5, 'Taken', 'This is class is taking by me', '2017-12-13 19:30:28', 2, 9),
(6, 'Taken', 'This is class is taking by me', '2017-12-13 19:33:32', 2, 9),
(7, 'Taken', 'Having a lecture now', '2017-12-13 19:34:01', 3, 5),
(8, 'Returned', 'I just had a football lecture', '2017-12-15 23:20:34', 11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `university_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `phone`, `email`, `university_id`) VALUES
(1, 'Peter Pitrovich', 'Web Design', 925285, 'peter@gmail.com', 1),
(2, 'JohnsonBlake', 'Mathematics', 2987957, 'blake@gmail.com', 1),
(4, 'Mary Beard', 'English Language', 50052081, 'beard@gmail.com', 1),
(5, 'Mario Adamo', 'Sociology', 5858580, 'adamo@yahoo.co', 1),
(6, 'Bill Gates', 'Computer Science', 3608368, 'gates@richestman.com', 1),
(7, 'Mark Zukerberg', 'Hacking', 95275, 'mark@facebook.com', 1),
(8, 'Cristiano Ronaldo', 'Football', 30670620, 'ronaldo@football.com', 1),
(9, 'Neymar Barca', 'Singing', 38060, 'neymar@barca.com', 1),
(10, 'Diana Stelma', 'Film Making', 89725, 'diana@stelma.com', 1),
(12, 'Vitalik Rudenko', 'Technology Develoment', 820502, 'rudenko@smartestboy.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `university_name` varchar(45) NOT NULL,
  `founder_name` varchar(45) DEFAULT NULL,
  `address` varchar(45) NOT NULL,
  `total_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `university_name`, `founder_name`, `address`, `total_students`) VALUES
(1, 'MIIT - University ', 'Johnson Suleman', '123 james road canada', 3637),
(2, 'University Of Lagos', 'Obafemi Awolowo', '91 obafemi Road, lagos', 100000),
(3, 'Havard University', 'Ibitoye Best', '11a big mac way, james street', 1000031);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `university_id` int(11) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `status` enum('admin','sub-admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `user_name`, `phone_number`, `university_id`, `password`, `status`) VALUES
(1, 'Shella Tshicweka', 'shella', '+390772802', 1, 'shella', 'admin'),
(2, 'Chizzuroke  Nnaji', 'chizzy', '+19379362', 1, 'chizzy', 'sub-admin'),
(3, 'Samuel', 'sam', '02857025', 1, '8355e0', 'sub-admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dropdown`
--
ALTER TABLE `dropdown`
  ADD PRIMARY KEY (`dropdown_id`),
  ADD KEY `fk_dropdown_hall1_idx` (`hall_id`),
  ADD KEY `fk_dropdown_teacher1_idx` (`teacher_id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hall_university1_idx` (`university_id`);

--
-- Indexes for table `selecthall`
--
ALTER TABLE `selecthall`
  ADD PRIMARY KEY (`selecthall_id`),
  ADD KEY `fk_select_hall_hall1_idx` (`hall_id`),
  ADD KEY `fk_select_hall_teacher1_idx` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`,`university_id`),
  ADD KEY `fk_teacher_university1_idx` (`university_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`university_id`),
  ADD KEY `fk_student_university1_idx` (`university_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dropdown`
--
ALTER TABLE `dropdown`
  MODIFY `dropdown_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `selecthall`
--
ALTER TABLE `selecthall`
  MODIFY `selecthall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dropdown`
--
ALTER TABLE `dropdown`
  ADD CONSTRAINT `fk_dropdown_hall1` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dropdown_teacher1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `halls`
--
ALTER TABLE `halls`
  ADD CONSTRAINT `fk_hall_university1` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `selecthall`
--
ALTER TABLE `selecthall`
  ADD CONSTRAINT `fk_select_hall_hall1` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_select_hall_teacher1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `fk_teacher_university1` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_student_university1` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
