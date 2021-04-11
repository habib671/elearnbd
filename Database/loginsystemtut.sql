-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 05:30 PM
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
-- Database: `loginsystemtut`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_data`
--

CREATE TABLE `blog_data` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_data`
--

INSERT INTO `blog_data` (`id`, `author`, `title`, `content`, `category`, `date`) VALUES
(8, 'Anonymous', 'Bootstrap Update', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat non nulla quis ultrices. Duis lectus velit, condimentum ut vehicula vel, mattis et ligula. Donec consequat nisl ac pretium posuere. Praesent elementum, augue a consectetur eleifend, mi velit feugiat enim, ut mattis tellus magna id orci. Nullam ornare ultricies volutpat. Vivamus venenatis viverra metus, quis lobortis dui sagittis a. Praesent tincidunt velit magna, in ullamcorper velit pharetra nec. Cras at augue at dolor feugiat rutrum. Cras tempus id ipsum eget consequat. Praesent aliquam gravida neque in efficitur. Aenean et nisi vitae risus pellentesque accumsan.\r\n\r\nNunc mollis scelerisque neque eu consequat. Praesent hendrerit congue venenatis. Integer vestibulum dolor at est feugiat, eget feugiat libero venenatis. Etiam ut felis ultrices quam rhoncus mollis id eu neque. Donec maximus quam in turpis consectetur facilisis. Nunc rutrum laoreet finibus. Morbi a tellus in tortor sagittis elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat viverra nunc ac mollis. Integer iaculis, nisl ut congue scelerisque, augue purus pulvinar nisi, ac volutpat elit lacus sit amet magna. Duis lobortis, odio nec venenatis tincidunt, elit lacus ultricies ante, condimentum fermentum erat turpis id ex. Donec et ultrices dolor. In efficitur hendrerit diam id faucibus. Ut convallis aliquet porta. Nunc eu justo dolor. Cras convallis tempus euismod.\r\n\r\nCras mollis purus ut porta semper. Nullam faucibus, velit vel tincidunt iaculis, purus quam mollis neque, vitae iaculis ligula nulla sed augue. Nunc odio sapien, iaculis ut metus a, pharetra consequat tortor. Fusce ornare tellus id dignissim consectetur. Pellentesque pellentesque ante eu scelerisque pretium. Etiam ultrices gravida urna. Nunc sit amet massa fringilla, bibendum mi ac, lobortis tellus. In tincidunt vel nulla vitae lobortis. Mauris vitae commodo tellus. Vestibulum dapibus, lorem nec aliquam tempor, ante magna sagittis velit, sed ultrices neque nibh at felis.\r\n\r\nDuis lobortis ligula nibh, ac convallis odio venenatis eget. In hac habitasse platea dictumst. Duis diam eros, blandit at tincidunt sit amet, egestas id sapien. Nam eu urna placerat, sodales sapien a, tristique lorem. Vestibulum porta elit eu sapien interdum accumsan. Praesent at tortor lorem. Aliquam dapibus arcu vel libero elementum cursus. Suspendisse luctus felis sed dui porta blandit. Donec feugiat fermentum facilisis. Duis consectetur tincidunt ipsum a pellentesque. Aenean sagittis arcu eget mi hendrerit, sit amet auctor nisi egestas. Nunc facilisis vulputate magna, ac commodo est eleifend in. Curabitur consequat eros ut sapien consectetur, sed vehicula neque varius. Aliquam in fermentum elit.\r\n\r\nNunc nibh eros, imperdiet nec consectetur quis, tempus et est. Donec pretium hendrerit molestie. Suspendisse congue, nisi at sollicitudin rhoncus, arcu tellus sollicitudin dolor, vel venenatis lacus turpis eu orci. Integer luctus, tortor vitae convallis hendrerit, mi massa dapibus tortor, id posuere leo ligula ac nisl. Integer sit amet lorem a justo dictum rhoncus. Sed dictum tortor bibendum, egestas eros scelerisque, ultricies felis. Donec in mattis neque, sed iaculis mauris.', 'School', '10 Apr, 2021'),
(9, 'Shayak', 'New Blog This is nasty', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n<br>Point 2\r\n<br>Point 3\r\n<br>Point 2\r\n<br>Point 3\r\n<br>Point 2\r\n<br>Point 3', 'Job', '10 Apr, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(40, 'School'),
(41, 'College'),
(42, 'University'),
(43, 'Medical'),
(44, 'Job');

-- --------------------------------------------------------

--
-- Table structure for table `imgupload`
--

CREATE TABLE `imgupload` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imgupload`
--

INSERT INTO `imgupload` (`id`, `userid`, `status`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'habib', 'ahsan@gmail.com', '$2y$10$fZwS9jUiUTsRKazXTdmfPuaOV9Y28d5trJu1C7SgoDVWC5bmtT1fm'),
(2, 'ahsan', 'habib@gmail.com', '$2y$10$zM7uHM/d/Rs6PgzfhD/oK.H2l6ZRfmv4unS75hFCu6X90joMoAq9m'),
(3, 'Shayak', 'shayak@g.co', '$2y$10$6yymY3uC7lfPQpmd3DgJcO4/0iVtJ86/6rRhuBhD3NEONrb/NUolK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_data`
--
ALTER TABLE `blog_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_data`
--
ALTER TABLE `blog_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
