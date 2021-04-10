-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 05:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdf_resource`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_question`
--

CREATE TABLE `bank_question` (
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_question`
--

INSERT INTO `bank_question` (`name`, `link`) VALUES
('Bangladesh Bank AD- 2016', 'https://drive.google.com/file/d/1ljaE6YG7r6H4EIHsBGJP-PDj7u8P9gr-/view?usp=sharing'),
('Bangladesh Bank AD- 2017', 'https://drive.google.com/file/d/12xs9bNmbGty1jBLD7Wrzq1mvwY18RAsl/view?usp=sharing'),
('Bangladesh Bank  Question (2001-2015)', 'https://drive.google.com/file/d/10BGAqw93Xj-sLERH3UWA3lD9Mu58eYEG/view?usp=sharing'),
('Bangladesh Bank  Question (2001-2019)', 'https://drive.google.com/file/d/1-UmPXyAl5fn6k9k5NG4zAbsPGJfECPFD/view?usp=sharing'),
('Agrani Bank - 2017', 'https://drive.google.com/file/d/1aOu-LqZ4qlD89shHW4LqGKKIrk8BXQBj/view?usp=sharing'),
('Agrani Bank So - 2015', 'https://drive.google.com/file/d/1YltaBCQdOLV4VUKxZ9r3MYPR381yoWIw/view?usp=sharing'),
('Rupali Bank Cash - 2018', 'https://drive.google.com/file/d/1JRsRuWngI2LTd_ekyLCJU3f5gn2axPia/view?usp=sharing'),
('Rupali Bank SO - 2019', 'https://drive.google.com/file/d/10KafqgOpWpLnG1qpgAY9-K76_FAOq82q/view?usp=sharing'),
('Sonali Bank Cash - 2018', 'https://drive.google.com/file/d/1kvKVUj__mMiiBtSU30aJqwCtlcO7hvl3/view?usp=sharing'),
('Sonali Bank IT - 2018', 'https://drive.google.com/file/d/1eSUQTITASQfO4ApXK2PWm-3S5A06RAPg/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `cse_question`
--

CREATE TABLE `cse_question` (
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse_question`
--

INSERT INTO `cse_question` (`name`, `link`) VALUES
('Bangladesh Bank - AP -2016', 'https://drive.google.com/file/d/19HWr1c_-oGqdD4t245cwVlIoBClGr6sM/view?usp=sharing'),
('BPSC- AP - 2016', 'https://drive.google.com/file/d/1zYxdCa2OToUk2B3CRfsl1bdHJnbYgV42/view?usp=sharing'),
('Sonali Bank- AP - 2016', 'https://drive.google.com/file/d/18oTghSs02NiSwA5eD8VrOI_T4XBpUWkZ/view?usp=sharing'),
('BKKB- AP - 2017', 'https://drive.google.com/file/d/19GcRbmLBUKLlzUjCmFbSVGoXmrevjYG3/view?usp=sharing'),
('ICB- AP - 2017', 'https://drive.google.com/file/d/1B4FfUTpgKUZESuNbJimzwgEzzpdr6GOo/view?usp=sharing'),
('ICT Ministry - AP(Non Cadre) - 2017', 'https://drive.google.com/file/d/1ahLu8KgL-VuzNjioHFqmdDp086XIqLhj/view?usp=sharing'),
('Sonali Bank- IT - 2018', 'https://drive.google.com/file/d/1ltY_uMeJ9wtrZIXLMz5nFyFmPaMhmikW/view?usp=sharing'),
('BWDB- AP - 2018', 'https://drive.google.com/file/d/1eso6YNmAI3uFnQZcrQ5gQ5aRLBxYpmBP/view?usp=sharing'),
('BPDB-AP - 2018', 'https://drive.google.com/file/d/1vmNYP8R1tfy4yqPldQxlBx-ZrtN_3jTD/view?usp=sharing'),
('PGCB- AP - 2018', 'https://drive.google.com/file/d/10OumIraRTSoPm1VjaxCAtSYWUq7k0k4a/view?usp=sharing'),
('PKB- AP - 2019', 'https://drive.google.com/file/d/1MzN-c-clxunggfHTKwrg7lnl_OaWdb2b/view?usp=sharing'),
('PSC NON CADRE ANE 2019', 'https://drive.google.com/file/d/1SN_hHLiGfC9XoGzBqJOJqJ2fjH2W2Znr/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `eee_question`
--

CREATE TABLE `eee_question` (
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eee_question`
--

INSERT INTO `eee_question` (`name`, `link`) VALUES
('BADC- SAE - 2018', 'https://drive.google.com/file/d/159X_xfx_J-7EereIemiXZRbL-AgLlcMA/view?usp=sharing'),
('BPDB- SAE - 2018', 'https://drive.google.com/file/d/1d96VomydkGW8LMoQO3UI9SOee1eJ0HNK/view?usp=sharing'),
('BSEC-SAE -2018', 'https://drive.google.com/file/d/1bFcqxN8KqSDhqtglZz2Do9JLBgJ1-8oe/view?usp=sharing'),
('Summit Power Electrical JSAM - 2019', 'https://drive.google.com/file/d/1HkNQ7BW773b9NDKU0t-hErmGfyQyZLP5/view?usp=sharing'),
('WASA-SAE - 2019', 'https://drive.google.com/file/d/156fZE-qtj1r6y_xVUqdS7lizpWo0wzKC/view?usp=sharing'),
('TGTCL-SAE - 2019', 'https://drive.google.com/file/d/19qkVG7OmA7kZB8fdijiyp8jOodQkAs53/view?usp=sharing'),
('BP POWER GEN-SAE - 2019', 'https://drive.google.com/file/d/1SWO9kwpltSmplwOEXnZNDCtdnJGWaEcc/view?usp=sharing'),
('BPDB-RPCL-SAE - 2019', 'https://drive.google.com/file/d/18yM_rwxSuKmmOaN2fJ0kbsqP6dJouFUb/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `mixed_question`
--

CREATE TABLE `mixed_question` (
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mixed_question`
--

INSERT INTO `mixed_question` (`name`, `link`) VALUES
('BADC ASSISTANT ADMIN 2017', 'https://drive.google.com/file/d/1h1u7KKD4-siU2lRK65IIhiwYEnGqe2P6/view?usp=sharing'),
('BANGLADESH BETAR QUESTIONS', 'https://drive.google.com/file/d/1UsQCOIy379tfVoJFhi1BYzO-EFWdGPcU/view?usp=sharing'),
('BADC ASSISTANT ADMIN 2017', 'https://drive.google.com/file/d/1h1u7KKD4-siU2lRK65IIhiwYEnGqe2P6/view?usp=sharing'),
('BANGLADESH BETAR QUESTIONS', 'https://drive.google.com/file/d/1UsQCOIy379tfVoJFhi1BYzO-EFWdGPcU/view?usp=sharing'),
('BBS SA 2020', 'https://drive.google.com/file/d/1pKDilcSXgabZmDsaRX8qwSNisQEgUj1w/view?usp=sharing'),
('BBS THANA STAT 2019', 'https://drive.google.com/file/d/1YS6zV8FN5_HADLyiOWHRvYuHGpGiJam2/view?usp=sharing'),
('BBS Junior Statistical Assistant- 2020', 'https://drive.google.com/file/d/1UPiZB5rwi4vMgcuisOB4D-JcltjT-3qI/view?usp=sharing'),
('BD RAIL ASM 2018', 'https://drive.google.com/file/d/1vUr1Peyi-Muhnrw9s4CsINdXWBvr3LMM/view?usp=sharing'),
('BD RAIL MC 2017', 'https://drive.google.com/file/d/1EFo3kU7raWbwoozVN9q6NCBQn5QxMX4X/view?usp=sharing'),
('BD RAIL TC 2018', 'https://drive.google.com/file/d/1G0ZZ5P_M7DTvCbT_Yo4SCU5BasFXgJpr/view?usp=sharing'),
('BD RAIL TNT 2017', 'https://drive.google.com/file/d/1r-PMB4FCgQtaaT4mAcxSeuzm4ycWVsOj/view?usp=sharing'),
('BREB COM TYPIST 2017', 'https://drive.google.com/file/d/1LJm04w_bs_b9AABfrBJrFoXFKCn0-rlA/view?usp=sharing'),
('CGDF AUDITOR 2017', 'https://drive.google.com/file/d/11YhiShmzgY5jDIGoES9Cx55zP2mjKhhT/view?usp=sharing'),
('MINISTRY OF DEFENCE AD 2018', 'https://drive.google.com/file/d/1woYlbj0PMAiqCGOgAI3X4ClWtrySSoGf/view?usp=sharing'),
('EBEK UPOZILLA COORDINATOR 2017', 'https://drive.google.com/file/d/1e-ywyd8eD0ZFy4qiVokOLcOytQJltAwc/view?usp=sharing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
