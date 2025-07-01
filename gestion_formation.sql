-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2025 at 07:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_formation`
--

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `audience` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `testIncluded` tinyint(1) DEFAULT NULL,
  `testContent` text DEFAULT NULL,
  `logo` blob DEFAULT NULL,
  `sujet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`id`, `name`, `content`, `description`, `audience`, `duration`, `testIncluded`, `testContent`, `logo`, `sujet_id`) VALUES
(1, 'JEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(2, 'Web Technologies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(3, 'Hadoop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(4, 'Sparke', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(5, 'CISCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(6, 'COBIT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(7, 'ITIL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(8, 'Scrum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 'Scrum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `domaine`
--

CREATE TABLE `domaine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domaine`
--

INSERT INTO `domaine` (`id`, `name`, `description`) VALUES
(2, 'Computer Science', NULL),
(3, 'Management', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formateur`
--

CREATE TABLE `formateur` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formateur`
--

INSERT INTO `formateur` (`id`, `firstName`, `lastName`, `description`, `photo`) VALUES
(1, 'younes', 'khamlichi', 'formateur java', NULL),
(2, 'lamiae', 'abouzid', 'formatrice python', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `mode` enum('Présentiel','En ligne','Hybride') NOT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `formateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`id`, `price`, `mode`, `ville_id`, `formateur_id`) VALUES
(1, '500.00', 'Présentiel', 1, 1),
(2, '100.00', 'En ligne', 2, 2),
(3, '300.00', 'Hybride', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `formationdate`
--

CREATE TABLE `formationdate` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formationdate`
--

INSERT INTO `formationdate` (`id`, `date`, `formation_id`) VALUES
(2, '2025-07-12', 1),
(3, '2025-07-12', 2),
(4, '2025-05-07', 3);

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL,
  `formationDate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `value`) VALUES
(1, 'maroc'),
(2, 'canada'),
(3, 'spain');

-- --------------------------------------------------------

--
-- Table structure for table `sujet`
--

CREATE TABLE `sujet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `shortDescription` text DEFAULT NULL,
  `longDescription` text DEFAULT NULL,
  `individualBenefit` text DEFAULT NULL,
  `businessBenefit` text DEFAULT NULL,
  `logo` blob DEFAULT NULL,
  `domaine_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sujet`
--

INSERT INTO `sujet` (`id`, `name`, `shortDescription`, `longDescription`, `individualBenefit`, `businessBenefit`, `logo`, `domaine_id`) VALUES
(1, 'Management de Projet', NULL, NULL, NULL, NULL, NULL, 3),
(2, 'Management de Services', NULL, NULL, NULL, NULL, NULL, 3),
(3, 'IT', NULL, NULL, NULL, NULL, NULL, 2),
(4, 'Big Data', NULL, NULL, NULL, NULL, NULL, 2),
(5, 'Reseau', NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `pays_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id`, `value`, `pays_id`) VALUES
(1, 'rabat', 1),
(2, 'fes', 1),
(3, 'othawa', NULL),
(4, 'barcelona', 3),
(5, 'madrid', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sujet_id` (`sujet_id`);

--
-- Indexes for table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ville_id` (`ville_id`),
  ADD KEY `formateur_id` (`formateur_id`);

--
-- Indexes for table `formationdate`
--
ALTER TABLE `formationdate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formation_id` (`formation_id`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formationDate_id` (`formationDate_id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domaine_id` (`domaine_id`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pays_id` (`pays_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formationdate`
--
ALTER TABLE `formationdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`sujet_id`) REFERENCES `sujet` (`id`);

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`),
  ADD CONSTRAINT `formation_ibfk_2` FOREIGN KEY (`formateur_id`) REFERENCES `formateur` (`id`);

--
-- Constraints for table `formationdate`
--
ALTER TABLE `formationdate`
  ADD CONSTRAINT `formationdate_ibfk_1` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`);

--
-- Constraints for table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`formationDate_id`) REFERENCES `formationdate` (`id`);

--
-- Constraints for table `sujet`
--
ALTER TABLE `sujet`
  ADD CONSTRAINT `sujet_ibfk_1` FOREIGN KEY (`domaine_id`) REFERENCES `domaine` (`id`);

--
-- Constraints for table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
