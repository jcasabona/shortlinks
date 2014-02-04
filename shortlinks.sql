SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `shortlinks`
--

CREATE TABLE IF NOT EXISTS `shortlinks` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `desc` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 ;