-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 01:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Through droplets that come from your mouth and nose when you cough or breathe out', 1),
(2, 'In sexual fluids, including semen, vaginal fluids or anal mucous', 1),
(3, 'By drinking unclean water', 1),
(4, 'All of the above', 1),
(5, 'A new and continuous cough', 2),
(6, 'Fever', 2),
(7, 'Tiredness', 2),
(8, 'All of the above', 2),
(9, 'No – not everyone with COVID-19 has symptoms', 3),
(10, 'Yes – it will be obvious, a person with COVID-19 coughs a lot', 3),
(11, 'Yes – you can tell just by where a person comes from, their race and ethnicity', 3),
(12, 'None of These', 3),
(13, 'Yes – but only if you use a strong bleach', 4),
(14, 'Yes – normal soap and water or hand sanitizer is enough', 4),
(15, 'No – Washing your hands doesn’t stop COVID-19', 4),
(16, 'None of these', 4),
(17, 'Children', 5),
(18, 'Older people – especially those aged 70 and above', 5),
(19, 'People with certain underlying health conditions', 5),
(20, 'European people', 5),
(21, 'You stop going to crowded places and visiting other people’s houses', 6),
(22, 'You stop talking to the people you live with', 6),
(23, 'You stop speaking to your friends on the phone', 6),
(24, 'All of the above', 6);

-- --------------------------------------------------------

--
-- Table structure for table `coronacase`
--

CREATE TABLE `coronacase` (
  `id` int(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `symp` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coronacase`
--

INSERT INTO `coronacase` (`id`, `username`, `email`, `mobile`, `symp`, `message`) VALUES
(1, '0', 'saloni@gmail.com', 2147483647, 'cold,Fever,', 'please help me!!!'),
(2, '0', 'saloni@gmail.com', 2147483647, 'cold,Fever,', 'please help me!!!'),
(3, 'Laxmi', 'laxmi@gmail.com', 2147483647, 'tired,', 'Call me ASAP!!!');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'How is COVID-19 passed on? ', 1),
(2, 'What are the common symptoms of COVID-19? ', 8),
(3, 'Can you always tell if someone has COVID-19? ', 9),
(4, 'Can washing your hands protect you from COVID-19? ', 14),
(5, 'Which of the following people is COVID-19 more dangerous for?', 18),
(6, 'Which of the following is an example of physical distancing? ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `quizregistration`
--

CREATE TABLE `quizregistration` (
  `uid` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizregistration`
--

INSERT INTO `quizregistration` (`uid`, `user`, `pass`) VALUES
(1, 'Rahul Kalyankar', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `usersession`
--

CREATE TABLE `usersession` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answerscorrect` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersession`
--

INSERT INTO `usersession` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(1, 'Rahul Kalyankar', NULL, NULL),
(2, 'Rahul Kalyankar', NULL, NULL),
(3, 'Rahul Kalyankar', NULL, NULL),
(4, 'Rahul Kalyankar', NULL, NULL),
(5, 'Rahul Kalyankar', 6, 2),
(6, 'Rahul Kalyankar', 6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `coronacase`
--
ALTER TABLE `coronacase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quizregistration`
--
ALTER TABLE `quizregistration`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `usersession`
--
ALTER TABLE `usersession`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coronacase`
--
ALTER TABLE `coronacase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quizregistration`
--
ALTER TABLE `quizregistration`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usersession`
--
ALTER TABLE `usersession`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
