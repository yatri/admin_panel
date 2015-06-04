-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2015 at 07:08 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_admin_panel`
--
CREATE DATABASE IF NOT EXISTS `db_admin_panel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_admin_panel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_sessions`
--

CREATE TABLE IF NOT EXISTS `admin_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_sessions`
--

INSERT INTO `admin_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('03046d49b9cb1828f0dd37c00ded6e3aa46a8155', '::1', 1433440682, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434303338333b),
('082db245dd90b5eb7dc6de163d3b8e5eb5fb46e7', '::1', 1433444362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434343036363b),
('0da3f3aef62b29d2d3230fbb9e1f0990333d0b02', '::1', 1433441458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434313139363b),
('149066a5c2f351e68395f3524a5f092ab14d7ae5', '::1', 1433443736, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434333435363b),
('3acdb7474dea4d2cf3a9faaf538cca9e5495576f', '::1', 1433442326, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434323136383b),
('41e8ff043a4347cd9bc60ce7e1f04e1ed201cad6', '::1', 1433444705, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434343432383b),
('45c81e54b78538dd05706ae45e8c6606a3749bb3', '::1', 1433444036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434333736303b),
('4d60ec8685065bf4d38801a07673b8e7d79e6723', '::1', 1433437640, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433373534383b),
('511423062d9cc9514860449fe837c9ab67bc3d2b', '::1', 1433439235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433383936313b),
('64cdfe1b0456063503edb28fb0f44db883f4a8ae', '::1', 1433436461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433363335393b),
('838fb8a9369d3711567434f9f7d932a0b5d45cc2', '::1', 1433443434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434333135303b),
('87f780ebb6d0ffb2b9b18f88026c608ddcec27bf', '::1', 1433435104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433343833303b),
('8ab2958e077b93c05b050eae46206d0dce071160', '::1', 1433437139, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433373032373b),
('8bdaf9e53dd78cbfd4fcad48aba33a038ba910b5', '::1', 1433439333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433393331393b),
('c91772bc9a09e2a3f4e9ad211267c4b5756b4190', '::1', 1433438155, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433383039303b),
('d4e0bd0289413a0d35267cc5157300f24f8e7e4d', '::1', 1433443142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434323834313b),
('e1fe365df9e885148c8c51b8e1da843d484b172b', '::1', 1433442659, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434323531323b),
('e697161b5fec21bef3d5b539e27cddd89cc95a1f', '::1', 1433436883, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433363636373b),
('e7f73c3a235325d3361970652c13221aa3536a60', '::1', 1433435872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433353837323b),
('ea065674137126f690719b21f9bb6d7186efed03', '::1', 1433435154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433353135343b),
('ef743cc7c70c7c1a5074327e9492f1bfb286e558', '::1', 1433441807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434313630393b),
('fb0b877fd93bcfe2eddb7753f34b34514bb1732f', '::1', 1433439828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333433393639303b),
('fba013e163ee3d771567104278848352870cff52', '::1', 1433440162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434303037323b),
('fd20c3894e71f032a732951595730a648d202913', '::1', 1433441138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333434303833373b);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;