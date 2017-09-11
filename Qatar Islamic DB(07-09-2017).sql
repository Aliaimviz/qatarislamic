-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 07:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qatar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about-mission`
--

CREATE TABLE `about-mission` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `ourmission` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about-mission`
--

INSERT INTO `about-mission` (`id`, `heading`, `ourmission`) VALUES
(1, 'OUR MISSION & PHILOSOPHY', 'The company would provide purely creativity engineering with an emphasis on providing the best prices to meet our customer’s desires. The company, as a result, contributes to the development of Qatar and proves its ability to compete in global levels.\r\nWe are committed to ensure that the customer receives the best value for their money with our diverse and cost efficient spectrum of services .We confident that we can meet any construction challenge within any location in Qatar.We provide the expertise to co\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `about-who`
--

CREATE TABLE `about-who` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `whoweare` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about-who`
--

INSERT INTO `about-who` (`id`, `heading`, `whoweare`) VALUES
(1, 'WHO WE ARE', 'Qatar Islamic Trading and Contracting launched to operate under the philosophy of a new project management and adopt modern concepts in the construction. It aims to gain the trust of customers and satisfy their needs with professional and high standards.\r\nWe use of the latest and safest techniques in construction to preserve the future of coming generations. It also relies on looking for skillful workforce to build in the desired standards.We provide the expertise to co\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `abouttop`
--

CREATE TABLE `abouttop` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouttop`
--

INSERT INTO `abouttop` (`id`, `heading`, `description`) VALUES
(1, 'ABOUT US', 'Qatar Islamic trading & contracting is a general engineering construction company since 1996. During the course of our company history, we have been able to build strong relationships with many owners. Our focus on each project is to build a good quality project for the owner on time and on budget.  We work hard to earn your satisfaction and respect.  It’s our goal to develop a long lasting relationship with you through honesty and professionalism, so that we can continue to be the sole source for all your contracting needs.');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus-meta`
--

CREATE TABLE `aboutus-meta` (
  `id` int(11) NOT NULL,
  `meta_keywords` longtext NOT NULL,
  `meta_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus-meta`
--

INSERT INTO `aboutus-meta` (`id`, `meta_keywords`, `meta_description`) VALUES
(1, 'asd2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie');

-- --------------------------------------------------------

--
-- Table structure for table `calculatebottom`
--

CREATE TABLE `calculatebottom` (
  `id` int(11) NOT NULL,
  `heading1` varchar(100) NOT NULL,
  `description1` longtext NOT NULL,
  `heading2` varchar(100) NOT NULL,
  `description2` longtext NOT NULL,
  `heading3` varchar(100) NOT NULL,
  `description3` longtext NOT NULL,
  `heading4` varchar(100) NOT NULL,
  `description4` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculatebottom`
--

INSERT INTO `calculatebottom` (`id`, `heading1`, `description1`, `heading2`, `description2`, `heading3`, `description3`, `heading4`, `description4`) VALUES
(1, 'SUBMIT YOUR CONSTRUCTION PROJECT DETAILS', 'Qatar Islamic trading & contracting company would love the opportunity to review or quote your upcoming building project. The form here is only a general information collection form to give us an idea of your project so it can be reviewed by the proper personnel.We provide the expertise to co', 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here,We provide the expertise to co', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,We provide the expertise to co', 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem IpsumWe provide the expertise to co');

-- --------------------------------------------------------

--
-- Table structure for table `calculatecost_meta`
--

CREATE TABLE `calculatecost_meta` (
  `id` int(11) NOT NULL,
  `meta_keywords` longtext NOT NULL,
  `meta_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculatecost_meta`
--

INSERT INTO `calculatecost_meta` (`id`, `meta_keywords`, `meta_description`) VALUES
(1, 'asd4', 'asd4');

-- --------------------------------------------------------

--
-- Table structure for table `calculatetestimonial`
--

CREATE TABLE `calculatetestimonial` (
  `id` int(11) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `name1` varchar(75) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `name2` varchar(75) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `name3` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculatetestimonial`
--

INSERT INTO `calculatetestimonial` (`id`, `description1`, `name1`, `description2`, `name2`, `description3`, `name3`) VALUES
(1, 'asd1', 'asd1', 'asd2', 'asd2', 'asd3', 'asd3');

-- --------------------------------------------------------

--
-- Table structure for table `calculatetop`
--

CREATE TABLE `calculatetop` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculatetop`
--

INSERT INTO `calculatetop` (`id`, `heading`, `description`) VALUES
(1, 'BUILD YOUR DREAM HOME', 'Thinking about building new home? Here are the tips we follow to integrate your vision with our experience \n<ul>\n        <li>Choose a contractor based on their reputation and quality of work, rather than on lowest price.</li><br>\n       <li>Visit sites built by the potential contractor to examine their quality.</li><br>\n       <li>Be sure to contract with a reliable consultancy firm.</li><br>\n       <li>Draw a timeline outlining all phases of the project and the date of delivery in agreement with the contractor and the consultant.</li><br>\n       <li>Understand the property boundaries</li><br>\n      <li>Don\'t Build The Most Expensive Home</li><br>\n      <li>Plan For Outdoor Living Space</li><br>\n      <li>Include Energy Efficient Features</li><br>\n      <li>Get a quick cost estimate in an instant with our calculation feature</li><br>\n</ul>\n');

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `id` int(11) NOT NULL,
  `skeleton` int(30) NOT NULL DEFAULT '1100',
  `turnkey` int(30) NOT NULL DEFAULT '1700'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`id`, `skeleton`, `turnkey`) VALUES
(6, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `contacttop`
--

CREATE TABLE `contacttop` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttop`
--

INSERT INTO `contacttop` (`id`, `heading`, `description`) VALUES
(1, 'MEET US', 'QITCC is here to provide you with more information, answer any questions you may have and create effective solutions for your constructional needs. Please use the contact form on the right side if you have any questions or requests concerning our services.\r\nWe will respond to your message within 24 Hours..');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_meta`
--

CREATE TABLE `contactus_meta` (
  `id` int(11) NOT NULL,
  `meta_keywords` longtext NOT NULL,
  `meta_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus_meta`
--

INSERT INTO `contactus_meta` (`id`, `meta_keywords`, `meta_description`) VALUES
(1, 'asd6', 'asd6');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `subject` varchar(75) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(19, 'Shahzaib Imran', 'Shahzaib199imran@gmail.com', 3362642935, 'fi', 'a'),
(20, 'Shahzaib Imran', 'Shahzaib.imran.aimviz@gmail.com', 3362642935, 'Testing Subject', 'asd'),
(21, 'asd', 'asd@gmail.com', 123456, 'asd', 'asd'),
(22, 'test', 'testing@testing.com', 654321, 'test', 'test'),
(23, 'dsd', 'Shahzaib199imran@gmail.com', 1234567, 'Testing Subject', 'dsa'),
(24, 'Contact Us Page', 'contactus@gmail.com', 12345678, 'asd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(25, 'sdd', 'fdf@gfg', 1234, 'dfs', 'fdsf'),
(26, 'Test O Test', 'testotest@testotest.com', 12345678901, 'Test O Test', 'Test O Test'),
(27, 'PRIVYA', 'privya@gmail.com', 1234567, 'hssjasa', 'ansbansas'),
(28, 'PRIVYA', 'privya@gmail.com', 1234567, 'hssjasa', 'ansbansas'),
(29, 'ssdsd', 'ssdsd@gmail.com', 1234566, ' s,ms', 'sdmsmds'),
(30, 'Adrain', 'Adrain@gmil.com', 1234567, 'fghshjhds', 'dsndsmd sdsdbsdsndbsdbsdnsdbsndbsnsdbsndsdnsbds'),
(31, 'James ', 'Jmaes@gmail.com', 78976543, 'hdhfjdd jfdb', 'dfbhdghd fdhfghdfbjdhfdj'),
(32, 'Janu', 'Janu@gmail.com', 3456789, 'hjahjsas a', 'snabbsahs asjasba'),
(33, 'Sudhi', 'Sudhi@gmail.com', 1234567, 'jjfddj ', 'dfbhdfbhdf'),
(34, 'sssjdsds', 'privyasudhi@gmail.com', 6789900, 'snnjs', 'sdsjds'),
(35, 'privya sudhi', 'privyasudhi@gmail.com', 12345678, 'abcde', 'hai hello................'),
(36, 'QA TEST', 'test@gmail.com', 1234567890, 'Testing Email ', 'Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email Testing Email '),
(37, 'Sudhi', 'peeyes3511@gmail.com', 12345678, 'sdsssd', 'dsdsdsd'),
(38, 'Rohini', 'rohini@gmail.com', 12345678, 'wwkwew', 'sdsdsds'),
(39, 'prem', 'prem@gmail.com', 1234566, 'jjwew', 'wejwejwe'),
(40, 'Privya', 'privya@gmail.com', 13456, 'V', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `email_category`
--

CREATE TABLE `email_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_category`
--

INSERT INTO `email_category` (`id`, `cat_name`) VALUES
(1, 'Category 1'),
(2, 'Category 2'),
(3, 'Category 3'),
(4, 'Category 4'),
(5, 'Category 5'),
(6, 'new user'),
(7, 'user'),
(8, 'August'),
(9, 'Test Category'),
(10, 'new category'),
(11, 'Latest'),
(12, 'SEPTEMBER');

-- --------------------------------------------------------

--
-- Table structure for table `email_category_relations`
--

CREATE TABLE `email_category_relations` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `email_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_category_relations`
--

INSERT INTO `email_category_relations` (`id`, `cat_id`, `email_id`) VALUES
(54, 4, 19),
(55, 4, 21),
(56, 7, 19),
(57, 7, 20),
(58, 7, 21),
(59, 7, 22),
(60, 5, 19),
(61, 5, 20),
(62, 5, 21),
(63, 5, 22),
(64, 5, 23),
(65, 1, 28),
(66, 6, 21),
(67, 6, 22),
(68, 1, 19),
(69, 6, 34),
(70, 8, 35),
(71, 1, 35),
(72, 8, 35),
(73, 1, 33),
(74, 1, 32),
(75, 9, 19),
(76, 9, 20),
(77, 10, 34),
(78, 11, 37),
(79, 12, 35);

-- --------------------------------------------------------

--
-- Table structure for table `footer_copyright`
--

CREATE TABLE `footer_copyright` (
  `id` int(11) NOT NULL,
  `copy_right` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_copyright`
--

INSERT INTO `footer_copyright` (`id`, `copy_right`) VALUES
(1, 'All rights reserved');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(60) NOT NULL,
  `description` longtext NOT NULL,
  `project_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `imageurl`, `name`, `location`, `description`, `project_cat`) VALUES
(286, '1504239665.jpg', 'Recent Project Name 2', 'QATAR', 'abcedfghjik  ', 1),
(287, '1502964560.jpg', 'r3', 'r3', 'r3', 1),
(288, '1502964571.jpg', 'a1', 'a1', 'a1', 2),
(289, '1502964581.jpg', 'a2', 'a2', 'a2', 2),
(290, '1502964591.jpg', 'a3', 'a3', 'a3', 2),
(291, '1502964607.jpg', 'f1', 'f1', 'f1', 3),
(292, '1502964621.jpg', 'f2', 'f2', 'f2', 3),
(293, '1502966195.jpg', 'f3', 'f3', 'f3', 3),
(294, '1503029405.jpg', 'r4', 'r4', 'r4', 1),
(295, '1503029417.jpg', 'a4', 'a4', 'a4', 2),
(296, '1503029433.jpg', 'f4', 'f4', 'f4', 3),
(297, '1503029506.jpg', 'r5', 'r5', 'r5', 1),
(298, '1503029523.jpg', 'a5', 'a5', 'a5', 2),
(299, '1503029538.jpg', 'f5', 'f5', 'f5', 3),
(306, '1503549003.jpg', 'r6', 'r6', 'r6', 1),
(307, '1503549025.jpg', 'f6', 'f6', 'f6', 3),
(309, '1503917242.jpg', 'asd', 'asd', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1),
(311, '1504731087.jpg', 'active 1', 'Doha', 'xcxcxc', 2),
(312, '1504731130.jpg', 'Recent Project 5', 'Rayyan', 'cncjhjcnfd', 1),
(313, '1504731194.jpg', 'FUTURE 1', 'Wakrah', 'cmvnncjvcvcnvcvcnv', 3);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `fb` varchar(70) NOT NULL,
  `twitter` varchar(70) NOT NULL,
  `insta` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `fb`, `twitter`, `insta`, `email`, `number`) VALUES
(7, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'Info@qatarislamic.com', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `hometop`
--

CREATE TABLE `hometop` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hometop`
--

INSERT INTO `hometop` (`id`, `heading`, `description`) VALUES
(1, 'YOUR DREAM HOME', 'The whole idea of establishing the QITCC carries was based on an economical perspective. The company provides wide-range and comprehensive solutions with economical dimensions based on solid foundations and extensive studies Thus, the company would provide purely creativity engineering with an emphasis on providing the best prices to meet our customer’s desires. The company, as a result, contributes to the development of Qatar and proves its ability to compete in global levels. ');

-- --------------------------------------------------------

--
-- Table structure for table `home_meta`
--

CREATE TABLE `home_meta` (
  `id` int(11) NOT NULL,
  `meta_keywords` longtext NOT NULL,
  `meta_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_meta`
--

INSERT INTO `home_meta` (`id`, `meta_keywords`, `meta_description`) VALUES
(1, '\"qatar\" ,   \"qatar islamic', 'asd1');

-- --------------------------------------------------------

--
-- Table structure for table `howwork`
--

CREATE TABLE `howwork` (
  `id` int(11) NOT NULL,
  `heading1` varchar(50) NOT NULL,
  `heading2` varchar(50) NOT NULL,
  `heading3` varchar(50) NOT NULL,
  `heading4` varchar(50) NOT NULL,
  `planning` varchar(175) NOT NULL,
  `estimation` varchar(175) NOT NULL,
  `technical` varchar(175) NOT NULL,
  `design` varchar(175) NOT NULL,
  `mainheading` varchar(175) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `howwork`
--

INSERT INTO `howwork` (`id`, `heading1`, `heading2`, `heading3`, `heading4`, `planning`, `estimation`, `technical`, `design`, `mainheading`) VALUES
(5, 'Planning', 'Estimated', 'Technical', 'design', 'We plan and schedule your project with the required resource to complete the client project on time', 'Prior to the project contract commencemnt, we detail out the cost and provide option of delivering the project including sekelton and turn key.\r\n', 'We provide the expertise to co', 'With the consultant guidance, we provide the right construction approach and in compliance with the client requirement', 'HOW WE WORK');

-- --------------------------------------------------------

--
-- Table structure for table `linksorting`
--

CREATE TABLE `linksorting` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `name` varchar(70) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linksorting`
--

INSERT INTO `linksorting` (`id`, `link`, `name`, `order`) VALUES
(1, 'http://site.startupbug.net:6999/qatarislamic/', 'Home ', 1),
(2, 'http://site.startupbug.net:6999/qatarislamic/home/about_view', 'About Us', 2),
(3, 'http://site.startupbug.net:6999/qatarislamic/home/project_view', 'OUR PROJECTS', 3),
(4, 'http://site.startupbug.net:6999/qatarislamic/home/calculate_view', 'CALCULATE COST', 4),
(5, 'http://site.startupbug.net:6999/qatarislamic/home/servicesmen_view', 'OUR SERVICES', 5),
(6, 'http://site.startupbug.net:6999/qatarislamic/home/contact_view', 'CONTACT', 6);

-- --------------------------------------------------------

--
-- Table structure for table `linksortingfooter`
--

CREATE TABLE `linksortingfooter` (
  `id` int(11) NOT NULL,
  `link` varchar(150) NOT NULL,
  `name` varchar(70) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linksortingfooter`
--

INSERT INTO `linksortingfooter` (`id`, `link`, `name`, `order`) VALUES
(1, 'http://site.startupbug.net:6999/qatarislamic/', 'Home ', 1),
(2, 'http://site.startupbug.net:6999/qatarislamic/home/calculate_view', 'Calculate Cost', 2),
(3, 'http://site.startupbug.net:6999/qatarislamic/home/contact_view', 'Our Location', 3),
(4, 'http://site.startupbug.net:6999/qatarislamic/home/project_view', 'Our Projects', 4),
(5, 'http://site.startupbug.net:6999/qatarislamic/home/contact_view', 'Contact Us', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ourprojects_meta`
--

CREATE TABLE `ourprojects_meta` (
  `id` int(11) NOT NULL,
  `meta_keywords` longtext NOT NULL,
  `meta_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourprojects_meta`
--

INSERT INTO `ourprojects_meta` (`id`, `meta_keywords`, `meta_description`) VALUES
(1, 'asd3', 'asd3');

-- --------------------------------------------------------

--
-- Table structure for table `ourservices_meta`
--

CREATE TABLE `ourservices_meta` (
  `id` int(11) NOT NULL,
  `meta_keywords` longtext NOT NULL,
  `meta_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourservices_meta`
--

INSERT INTO `ourservices_meta` (`id`, `meta_keywords`, `meta_description`) VALUES
(1, 'Our Services', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurieWe provide the expertise to co');

-- --------------------------------------------------------

--
-- Table structure for table `projectbottom`
--

CREATE TABLE `projectbottom` (
  `id` int(11) NOT NULL,
  `heading` varchar(30) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectbottom`
--

INSERT INTO `projectbottom` (`id`, `heading`, `description`) VALUES
(1, 'OUR PROJETCS', 'Since 1996 QITCC completed successful high profile projects in construction filed. We believe that the key to a successful project lies in the skill and experience of the management team and utilization of technology available to closely control all work to the client’s satisfaction.We provide the expertise to co');

-- --------------------------------------------------------

--
-- Table structure for table `projecttop`
--

CREATE TABLE `projecttop` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projecttop`
--

INSERT INTO `projecttop` (`id`, `heading`, `description`) VALUES
(1, 'WE BUILD TRUST ', 'We provide constructive solution for any building project. See our recent, active, future projects here.We provide the expertise to co');

-- --------------------------------------------------------

--
-- Table structure for table `quoteproject`
--

CREATE TABLE `quoteproject` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(180) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `message` longtext NOT NULL,
  `user_ip` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quoteproject`
--

INSERT INTO `quoteproject` (`id`, `name`, `email`, `phone`, `file`, `message`, `user_ip`, `date_time`) VALUES
(16, 'Shahzaib Imran', 'Shahzaib199imran@gmail.com', 3362642935, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/LOG@201706231.rtf', 'final Test :)', '128.10.1.1', '0000-00-00 00:00:00'),
(17, 'Shujaat Hussain', 'info@syeditechnologies.com', 2147483647, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/Basicprojectdetails1.docx', 'final Test :)', '128.10.1.1', '0000-00-00 00:00:00'),
(18, 'irfanmumtaz', 'im.irfanmumtaz21@gmail.com', 2147483647, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20170806_1940371.jpg', 'final Test :)', '103.228.157.159', '0000-00-00 00:00:00'),
(19, 'Irfan Mumtaz', 'Mumtaz@irfan.com', 12345678901, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/future_15.jpg', 'final Test :)', '128.10.1.1', '2017-08-09 14:52:36'),
(20, 'asd', 'asd@gmail.com', 1234567, 'F:/xampp/htdocs/qatarislamic/assets/uploads/email/avtive_31.jpg', 'dfdsf', '128.10.1.1', '2017-08-12 12:15:46'),
(21, 'ffdfdfdf', 'privyasudhi@gmail.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/flipped_classroom1.pdf', 'vccvcdcd', '37.211.79.225', '2017-08-15 09:37:52'),
(33, 'asd', 'asd@fgfg', 1565, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/', 'sdasds', '128.10.1.1', '2017-08-28 06:38:32'),
(34, 'asd', 'asd@fgfg', 1565, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/', 'sdasds', '128.10.1.1', '2017-08-28 06:39:36'),
(35, 'Qatar ', 'Qatar@qatar.com', 1234567, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/', 'asd', '128.10.1.1', '2017-08-28 06:40:10'),
(36, 'Qatar ', 'Qatar@qatar.com', 1234567, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/', 'asd', '128.10.1.1', '2017-08-28 06:45:34'),
(37, 'test', 'test@testing.com', 1234567, NULL, 'asd', '128.10.1.1', '2017-08-28 09:26:15'),
(38, 'gmail', 'email@gmail.com', 445646, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/active_21.jpg', 'sadsadsad', '128.10.1.1', '2017-08-28 09:28:18'),
(39, 'asdsd', 'sdsds@gfgfd', 46465, NULL, 'sddsad', '128.10.1.1', '2017-08-28 10:11:20'),
(40, 'asd', 'asd@asd', 23232, NULL, 'sdsad', '128.10.1.1', '2017-08-28 10:13:05'),
(41, 'asd', 'asd@asd', 23232, NULL, 'sdsad', '128.10.1.1', '2017-08-28 10:13:31'),
(42, 'asdas', 'sada@fdsfadf', 455456, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/recent_33.jpg', 'sdsadsadsa', '128.10.1.1', '2017-08-28 10:13:59'),
(43, 'asd', 'asd@asd.com', 546654, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/future_11.jpg', 'dsadsad', '128.10.1.1', '2017-09-05 14:58:31'),
(44, 'Quote your Page', 'quote_your_page@quoteyourpage.com', 1234567, NULL, 'asd', '128.10.1.1', '2017-09-06 10:07:59'),
(45, 'asdsad', 'dsad@dfd', 5645646, NULL, 'sdsadasd', '128.10.1.1', '2017-09-06 14:54:55'),
(46, 'privya sudhi', 'privyasudhi@gmail.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20708376_1560916540671295_8725099048741472987_n1.jpg', 'sdsjdhjsds jsdsd', '37.211.79.225', '2017-09-06 21:19:44'),
(47, 'prindhya', 'prindhyaathul@gmail.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20914599_1369952543103437_5833824955988109163_n1.jpg', 'sdsjdhjsds jsdsd', '37.211.79.225', '2017-09-06 21:21:32'),
(48, 'prindhya', 'prindhyaathul@gmail.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20914599_1369952543103437_5833824955988109163_n3.jpg', 'sdsjdhjsds jsdsd', '37.211.79.225', '2017-09-06 21:23:14'),
(49, 'prindhya', 'prindhyaathul@gmail.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20914599_1369952543103437_5833824955988109163_n5.jpg', 'sdsjdhjsds jsdsd', '37.211.79.225', '2017-09-06 21:23:40'),
(50, 'sdsdsds', 'dsssddj@gmail.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20708376_1560916540671295_8725099048741472987_n3.jpg', 'sdssds', '37.211.79.225', '2017-09-06 21:31:49'),
(51, 'sdsdsds', 'dsssddj@gmail.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20708376_1560916540671295_8725099048741472987_n5.jpg', 'sdssds', '37.211.79.225', '2017-09-06 21:33:03'),
(52, 'Adrain', 'Adrain@gmil.com', 12345678, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/20708376_1560916540671295_8725099048741472987_n7.jpg', 'wewewew', '37.211.79.225', '2017-09-06 21:37:41'),
(53, 'Privya', 'privya@gmail.com', 13456, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/19453128_119748518628190_7921786187223635050_o1.jpg', 'Fghh', '37.211.79.225', '2017-09-07 06:14:25'),
(54, 'Privya', 'privya@gmail.com', 13456, 'D:/xampp/htdocs/qatarislamic/assets/uploads/email/19453128_119748518628190_7921786187223635050_o3.jpg', 'Fghh', '37.211.79.225', '2017-09-07 06:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `description1` longtext NOT NULL,
  `name2` varchar(50) NOT NULL,
  `description2` longtext NOT NULL,
  `name3` varchar(50) NOT NULL,
  `description3` longtext NOT NULL,
  `name4` varchar(50) NOT NULL,
  `description4` longtext NOT NULL,
  `subheading1` varchar(50) NOT NULL,
  `subheading2` varchar(50) NOT NULL,
  `subheading3` varchar(50) NOT NULL,
  `subheading4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name1`, `description1`, `name2`, `description2`, `name3`, `description3`, `name4`, `description4`, `subheading1`, `subheading2`, `subheading3`, `subheading4`) VALUES
(38, 'General contracting for buildings ', 'We work based on modern philosophy to integrate latest technology and best practices in order to complete projects efficiently and in a timely manner. We take a partnership approach to our client relationships tailoring our services to suit our client’s requirements guiding them through each step of the construction process. We provide construction, construction-management services to our clients; we will also manage your programme requirements through to successful delivery.We provide the expertise to co', 'Building Materials Trading', 'We provide a range of construction material, tools and machinery for the industry. We host the best brands in the field.We provide the expertise to co', 'Selling and Purchasing Real Estate', 'We have a good experience and knowledge in selling and purchasing of real estate We provide the expertise to co', 'Workmanship Resourcing', 'We provide professional services for mason, carpentry, steel fixing and others utilizing best and latest practices in the market.We provide the expertise to co', 'Contract', 'Trading', 'Real State', 'Services Provider');

-- --------------------------------------------------------

--
-- Table structure for table `servicestop`
--

CREATE TABLE `servicestop` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicestop`
--

INSERT INTO `servicestop` (`id`, `heading`, `description`) VALUES
(1, 'OUR SERVICES', 'QITCC offers standard construction and construction related services to meet the client and market requirements of the sector. Our construction expertise, project approach and our value engineering ability can provide significant cost savings to our clients.\r\nPresently we have the following tailored services for our clients to choose from;We provide the expertise to co\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `status`, `user_email`, `user_password`) VALUES
(1, 1, 'admin@qatar.com', 'admin_123');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `mainheading` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `image2` varchar(150) NOT NULL,
  `name2` varchar(30) NOT NULL,
  `description2` longtext NOT NULL,
  `image3` varchar(150) NOT NULL,
  `name3` varchar(30) NOT NULL,
  `description3` longtext NOT NULL,
  `image4` varchar(150) NOT NULL,
  `name4` varchar(30) NOT NULL,
  `description4` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `mainheading`, `image`, `name`, `description`, `image2`, `name2`, `description2`, `image3`, `name3`, `description3`, `image4`, `name4`, `description4`) VALUES
(1, 'Our Team Members', '1504728816.jpg', 'Team Member 1', 'Ahmed Jassim Mohammed Al-Fehani He graduated in 1981 from an American University majoring in Civil Engineering and Architecture. He worked in Qatar for 22 years and supervised many of Qatar government projects such as schools. He also worked for 14 years in the private sector and still working there ', '1504728794.jpg', 'Team Member 2', 'Team Member Description 2', '1504728731.jpg', 'Team Member 3', 'Team Member Description 3', '1504728690.jpg', 'Team Member Name 4 ', 'team member description 4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `user_email`, `user_password`) VALUES
(1, 1, 'admin@qatar.com', 'admin_123'),
(23, 0, 'developer1@gmail.com', 'employee'),
(24, 0, 'developer2@gmail.com', 'employee'),
(25, 0, 'developer3@gmail.com', 'employee'),
(26, 0, 'developer5@gmail.com', 'employee'),
(27, 0, 'developer4@gmail.com', 'employee'),
(28, 0, 'editor1@gmail.com', 'employee'),
(29, 0, 'editor2@gmail.com', 'employee'),
(30, 0, 'editor3@gmail.com', 'employee'),
(31, 0, 'editor4@gmail.com', 'employee'),
(32, 0, 'editor5@gmail.com', 'employee'),
(33, 0, 'poster1@gmail.com', 'employee'),
(34, 0, 'poster2@gmail.com', 'employee'),
(35, 0, 'poster3@gmail.com', 'employee'),
(36, 0, 'poster4@gmail.com', 'employee'),
(37, 0, 'poster5@gmail.com', 'employee'),
(38, 0, 'qa1@gmail.com', 'employee'),
(39, 0, 'qa2@gmail.com', 'employee'),
(40, 0, 'qa3@gmail.com', 'employee'),
(41, 0, 'qa4@gmail.com', 'employee'),
(43, 0, 'qa5@gmail.com', 'employee'),
(45, 0, 'admin1@qatar.com', 'employee'),
(46, 0, 'admin2@qatar.com', 'employee'),
(47, 0, 'admin3@qatar.com', 'employee'),
(48, 0, 'admin4@qatar.com', 'employee'),
(50, 0, 'admin5@qatar.com', 'employee'),
(53, 0, 'shahzaib@qatar.com', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `webapp_title`
--

CREATE TABLE `webapp_title` (
  `id` int(11) NOT NULL,
  `home` varchar(50) NOT NULL,
  `about_us` varchar(50) NOT NULL,
  `our_projects` varchar(50) NOT NULL,
  `calculate_cost` varchar(50) NOT NULL,
  `our_services` varchar(50) NOT NULL,
  `contact_us` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webapp_title`
--

INSERT INTO `webapp_title` (`id`, `home`, `about_us`, `our_projects`, `calculate_cost`, `our_services`, `contact_us`) VALUES
(1, 'QITCC Home Page', 'QITCC About Us Page', 'QITCC Project Page', 'QITCC Calculate Cost page', 'QITCC Our Services page', 'QITCC Contact Us page');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about-mission`
--
ALTER TABLE `about-mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about-who`
--
ALTER TABLE `about-who`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouttop`
--
ALTER TABLE `abouttop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus-meta`
--
ALTER TABLE `aboutus-meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculatebottom`
--
ALTER TABLE `calculatebottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculatecost_meta`
--
ALTER TABLE `calculatecost_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculatetestimonial`
--
ALTER TABLE `calculatetestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculatetop`
--
ALTER TABLE `calculatetop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacttop`
--
ALTER TABLE `contacttop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_meta`
--
ALTER TABLE `contactus_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_category`
--
ALTER TABLE `email_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `email_category_relations`
--
ALTER TABLE `email_category_relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_copyright`
--
ALTER TABLE `footer_copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hometop`
--
ALTER TABLE `hometop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_meta`
--
ALTER TABLE `home_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howwork`
--
ALTER TABLE `howwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linksorting`
--
ALTER TABLE `linksorting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linksortingfooter`
--
ALTER TABLE `linksortingfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourprojects_meta`
--
ALTER TABLE `ourprojects_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourservices_meta`
--
ALTER TABLE `ourservices_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectbottom`
--
ALTER TABLE `projectbottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecttop`
--
ALTER TABLE `projecttop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quoteproject`
--
ALTER TABLE `quoteproject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicestop`
--
ALTER TABLE `servicestop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webapp_title`
--
ALTER TABLE `webapp_title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about-mission`
--
ALTER TABLE `about-mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about-who`
--
ALTER TABLE `about-who`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `abouttop`
--
ALTER TABLE `abouttop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aboutus-meta`
--
ALTER TABLE `aboutus-meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calculatebottom`
--
ALTER TABLE `calculatebottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calculatecost_meta`
--
ALTER TABLE `calculatecost_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calculatetestimonial`
--
ALTER TABLE `calculatetestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calculatetop`
--
ALTER TABLE `calculatetop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calculator`
--
ALTER TABLE `calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contacttop`
--
ALTER TABLE `contacttop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactus_meta`
--
ALTER TABLE `contactus_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `email_category`
--
ALTER TABLE `email_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `email_category_relations`
--
ALTER TABLE `email_category_relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `footer_copyright`
--
ALTER TABLE `footer_copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hometop`
--
ALTER TABLE `hometop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_meta`
--
ALTER TABLE `home_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `howwork`
--
ALTER TABLE `howwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `linksorting`
--
ALTER TABLE `linksorting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `linksortingfooter`
--
ALTER TABLE `linksortingfooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `ourprojects_meta`
--
ALTER TABLE `ourprojects_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ourservices_meta`
--
ALTER TABLE `ourservices_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projectbottom`
--
ALTER TABLE `projectbottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projecttop`
--
ALTER TABLE `projecttop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quoteproject`
--
ALTER TABLE `quoteproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `servicestop`
--
ALTER TABLE `servicestop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `webapp_title`
--
ALTER TABLE `webapp_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
