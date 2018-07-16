-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 04:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `book_count` (OUT `total` INT)  begin
select count(*) into total from book;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(4) NOT NULL,
  `b_nm` varchar(60) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_edition` varchar(20) NOT NULL,
  `b_isbn` varchar(10) NOT NULL,
  `b_page` int(5) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_img` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_nm`, `b_subcat`, `b_desc`, `b_publisher`, `b_edition`, `b_isbn`, `b_page`, `b_price`, `b_img`) VALUES
(5, 'YOGIS, DESTINY & THE WHEEL OF TIME ', '5', 'Contents: Dedication; Acknowledgements; About the author; Preface; Preface to the 2nd edition; 1. That great guru; 2. Profile of a guru\'s life; 3. Prabhu bejoy Krishna Goswami; 4. I meet my guru; 5. Awakened kundalini; 6. Astrological instruction; 7. Pre-destination: The negative side; 8. Rokadia Hanuman Baba; 9. My Jyotish guru-1; 10. My Jyotish guru-2; 11. Pre-destination & divine bliss; 12. Nagari Das Baba; 13. Ranga Avadhoot; 14. Religion of yogis; 15. Caution & warning; 16. Ecstasies spring from fire-1; 17. Ecstasies spring from fire-2; 18. Ecstasies spring from fire-3; 19. Ecstasies spring from fire-4; 20. Ecstasies spring from fire-5; 21. Ecstasies spring from fire-6; 22. The seers; 23. Astrology, when it is an illumination; 24. Memory glows; 25. Why astrology at all?; 26. Poetical guidance; 27. Bliss & confusion; Index.', 'K.N. Rao', '2005', '2589697 ', 285, 300, 'upload_image/ASTRO1.jpg'),
(7, 'Visual Basic 2005', '17', '\'VB connectivity\'', 'Pearson', '2009', 'VB111', 350, 120, 'upload_image/comp8.jpg'),
(8, 'Java & Xml', '17', '\'Complete Reference\'', 'TATA Mcgerw Hill', '2010', 'JJ123', 1800, 500, 'upload_image/comp9.jpg'),
(9, 'Microsoft Windows Powershell Step By Step', '29', '\'Learn Microsoft Windows PowerShell step by step with hands-on instruction from a leading Microsoft scripting trainer. This guide features self-paced labs, timesaving tips, and dozens of sample scripts', 'Wilson', '2006', '9788120332', 755, 295, 'upload_image/comp6.jpg'),
(10, 'C# Programming', '17', '\'C# is platform independent,includes namespace,garbage collection,automatic memory management', 'Pearson', '1999', 'c#abd', 450, 300, 'upload_image/1861004877.jpg'),
(11, 'Java Server Programming', '17', '\'jsp uses  html tags and run on java platform\'', 'BPB Prakashan', '2000', 'jsp123', 1800, 560, 'upload_image/1861004656.jpg'),
(12, 'Programming with Perl', '17', 'Perl is programming langauge which is not comfortable to handle.', 'Wrox', '1995', 'perl123', 560, 450, 'upload_image/0596000278.jpg'),
(13, 'HTML for world wide web', '19', 'html uses tags,it\'\'s  not case sensitive,work with own html tagswhich must be enclosed.', 'Elizabeth', '2005', 'htmlabc12', 560, 400, 'upload_image/0201354934.jpg'),
(14, 'ASP Server Pages 3.0', '17', 'Active server pages uses xml files ,it run on internet explorer or other browser..', 'Microsoft', '1995', 'asp123', 1150, 950, 'upload_image/1861003382.jpg'),
(15, 'Perl and CGI', '17', 'CGI for graphics purpose', 'Pearson', '1999', 'pc2343', 450, 300, 'upload_image/020135358X.gif'),
(16, 'A Biological Survey for the Nation', '27', 'The National Biological Survey will produce the map we need to avoid the\\r\\neconomic and environmental \"train wrecks\" we see scattered across the country.\\r\\nNBS will provide the scientific knowledge America needs to balance the\\r\\ncompatible goals of ecosystem protection and economic progress', 'National Research Council', '1994', '0-309-5860', 224, 450, 'upload_image/biology.gif'),
(18, 'Coffee : Scrumptious Drinks', '23', 'Every day, millions search for The Perfect Cup of Coffee in caf s, diners, and kitchens around the world. Here, coffee guru Betty Rosbottom offers easy-to-follow recipes guaranteed to please \\r\\nanyone who takes delight in sampling, sipping, and serving exquisite coffee concoctions.', 'Chronicle Books', '2007', 'cofee1', 96, 100, 'upload_image/cofee.jpg'),
(19, 'Stone Soup', '24', 'A hungry traveler tricks a little old lady into cooking him soup starting with a stone.', 'Marcia Brown', '1970', 'soup45', 120, 350, 'upload_image/stonesoup.jpg'),
(20, 'Pasta Perfection', '22', 'This new series will help you get back into the kitchen and experience the fun of creating sensationalmouth-watering meals thought he simplicity of easy-to-read, step-by-step ...', 'Belina Jeffer', '2004', 'p12', 80, 100, 'upload_image/pasta1.jpg'),
(21, 'Bhartiya Vynjano ka khajana', '25', 'Vyanjan made by Sanjeev kapoor,he makes very sweet and delicious dishes', 'Sanjeev Kapoor', '2009', 'vya12', 120, 350, 'upload_image/bhartiya.jpg'),
(22, 'Descriptious du Cafeier', '23', 'millions search for The Perfect Cup of Coffee in caf s, diners, and kitchens around the world. Here, coffee guru Betty Rosbottom offers easy-to-follow recipes guaranteed to please anyone who takes delight in sampling, sipping, and serving exquisite coffee concoctions.', 'International resource institute', '1996', 'caffee2', 96, 100, 'upload_image/cofee2.jpg'),
(28, 'Debugging Microsoft .NET 2.0 Applications', '17', 'Get hands-on instruction for using the tools in Microsoft Visual Studio? 2005 to debug, tune, and test applications. This guide features practical advice and code samples for developers at all levels from a leading authority on improving code. Traditionally, tools for performance tuning, testing applications, and debugging code have been expensive, hard to learn, and difficult to use. While previous versions of Microsoft Visual Studio? have included debuggers and other code-improvement tools, Visual Studio 2005 presents developers with robust and useful tools and processes to help ensure top-quality code. In this guide, an expert on improving code, John Robbins, steps back from the expert-level information that characterized his previous debugging books to present hands-on, practical advice for working developers on how to use the debugging, testing, and tuning features in Visual Studio 2005', 'John Robbins (Wintellect)', '2006', 'net-1', 464, 699, 'upload_image/comp2.jpg'),
(29, 'The Mad, Mad World of Cricket', '4', 'The funny side of the gentleman?s game?captured by a master cartoonist In India cricket is more than a game; it is a national obsession. And with a World Cup always around the corner, there is no better way to prepare for the excitement of seeing the men in blue in action than with renowned cartoonist Sudhir Dar?s creations.', 'Sudhir Dar', '2005', '0143101846', 96, 125, 'upload_image/c1.jpg'),
(30, 'Dream Team India: The Best World Cup Squad Ever !', '4', 'Are you one of those who just knows India will win the match the moment the game starts? Do you drown yourself in cricket and cricket-related trivia every four years and dream of seeing India win the World Cup? If the answer is ?yes? to any of the above, here is the team that will bring home the Cup for you. ', 'Book shop', '2007', '014333015', 147, 200, 'upload_image/c2.jpg'),
(31, 'HOW TO PREPARE FOR QUANTITATIVE APTITUDE FOR CAT', '33', 'More than 3000 questions categorised into three levels of difficulty - LOD1, LOD2 and LOD3 * Notes emphasising relative importance of topics in the CAT, at appropriate places in the book * Short-cut methods to aid faster solutions to problems * Five practice CAT tests (actual CAT questions based on memory)', 'Arun Sharma', '2006', '0070483493', 310, 325, 'upload_image/COMPETITIVE8.jpg'),
(32, 'Physics', '26', 'Get all you need to know with Super Reviews! Each Super Review is packed with in-depth, student-friendly topic reviews that fully explain everything about the subject.', 'Unknown', '1995', '08', 1000, 495, 'upload_image/p2.jpg'),
(33, 'Thermal Physics', '26', 'The book presents a lucid and systematic exposition of the fundamental principles of Thermal Physics.', 'S.C.Garg', '2001', '0074601342', 412, 163, 'upload_image/p6.jpg'),
(35, 'A TEXTBOOK OF COST AND MANAGEMENT ACCOUNTING 8th ed.', '6', ' Student friendly and examination oriented approach # Innovative, comprehensive and systematic presentation of the subject matter # Use of diagrams and exhibits to help students understand concepts easily and clearly # Around 500 solved problems and illustrations with working notes # Solved and unsolved practical questions from various university and professional examinations like BCom, MCom, CA, CS, ICWA, etc. # Objective type questions and select theory questions # Ideal for self study.', 'M N ARORA', '2006', '812910945', 400, 395, 'upload_image/busi7.jpg'),
(36, 'Computer Networks, 4th Ed', '20', '(38, \'Computer Networks, 4th Ed\', \'46\', \'updated, this classic bestseller, now in its fourth edition, reflects the newest and most important networking technologies with a special emphasis on wireless networking. The material on wireless networks includes detailed coverage of 802.11, wireless local loops, 2G and 3G cellular networks, BluetoothTM, WAP, i-mode, and others. It prepares students to work with wireless technologies in networks of all sizes-both local and wide area networks. There is also lots of new material on applications, including the Web, Internet radio, voice over IP, and video on demand. Finally, an entirely new chapter is devoted exclusively to security to help students deal with one of the most crucial topics in networking today. Despite a large amount of material added on wireless networks, fixed networks have not been ignored-topics covered include ADLS, Internet over cable, gigabit Ethernet, peer-to-peer networks, NAT, and MPLS. Each chapter follows a consistent approach. The author first presents the key principles-underlying hardware at the physical layer up through the top-level application layer-and then illustrates them utilizing real-world examples drawn from the Internet and wireless networks, all in Tanenbaum\'\'s classic entertaining style.', 'ANDREW S.TANENBAUM', '2007', '8120321758', 912, 325, 'upload_image/comp7.jpg'),
(37, 'Investing for Beginners', '6', 'Investment Risks and Rewards: How to overcome the fear of investment risk and how taking a few risks can reap long-term benefits. Your Starting Point: How to assess your investment goals. Diversification: How to allocate your money among various investment avenues for safety, steady income and capital growth. How to Pick Stocks: How to use fundamental indicators of value to pick good stocks. Investing in Bonds: Why you need bonds in your portfolio and which bonds to choose. Mutual Funds Primer: What they are and how to select the ones that suit your needs. Disinvesting: How to figure out when it\'\'s time to get out of an investment. Keeping in Touch: How to understand financial information. Keeping Track of Your Investments: Simple record-keeping tricks.', 'Kathy Kristof', '2006', '8170944821', 140, 195, 'upload_image/business.jpg'),
(40, 'HOW TO PREPARE FOR THE CAT, 2/E ', '33', 'More than 3000 questions categorised into three levels of difficulty - LOD1, LOD2 and LOD3 * Notes emphasising relative importance of topics in the CAT, at appropriate places in the book * Short-cut methods to aid faster solutions to problems * Five practice CAT tests (actual CAT questions based on memory)', 'MUNEER, MUHAMED', '2006', '0070528462', 380, 499, 'upload_image/CAT.jpg'),
(41, 'Safe and Simple Steps to Fruitful Meditation', '10', 'Meditation has been widely accepted as a tested method to reduce mental tensions and achieve inner peace and tranquillity, leading to spiritual growth. In this book, various techniques are presented in an easy step-by-step manner, starting with simple techniques that can be practised for just a few minutes', 'Dr. N. K. Srinivasan', '2003', '8122308910', 150, 80, 'upload_image/yoga1.jpg'),
(42, 'STATISTICS FOR BUSINESS AND ECONOMICS', '7', 'This book covers various aspects of the field of statistics in 20 chapters, making each topic relevant and useful. A unique feature of this book is the inclusion of databases to be utilized by computers and software statistical packages. Contents - Introduction ? Statistical Terms and Concepts ? Data Collection ? Data Presentation ? Data Characteristics: Descriptive Measures ? Basic Concepts of Probability ? Probability Distribution ? Sampling Distribution ? Statistical Inference: Estimation ? Hypothesis Testing I ? Hypothesis Testing II ? Hypothesis Testing III ? Hypothesis Testing IV (Comparing Several Proportions Chi Square Test) ? Hypothesis Testing V(Comparing Several Population Means) One-Way Analysis of Variance (ANOVA) ? Regression and Correlation Analysis ? Multiple Regression ? Non-Parametric Statistics ? Time Series Analysis ? Statistical Decision Making ? Statistical Quality.', 'J S CHANDAN ', '2007', '8125904182', 212, 372, 'upload_image/9062999.jpg'),
(45, 'SPIDER MAN', '16', 'second 100 issues as May Mayday Parker learns that she can\'t escape her great responsibilities! Featuring the original Hobgoblin, the Black Tarantula and more! Plus: the saga of Spider-Girl! Collects Amazing Spider-Girl #0-6. ', 'Marvel Comics ', '2001', '0785123415', 160, 606, 'upload_image/comic1.jpg'),
(50, 'Learning SQL on SQL Server 2005 : The Simplest Way', '18', 'Anyone who interacts with today?s modern databases needs to know SQL (Structured Query Language), the standard language for generating, manipulating, and retrieving database information. In recent years, the dramatic rise in the popularity of relational databases and multiuser databases has fueled a healthy demand for application devel?opers and others who can write SQL code efficiently and correctly. If you?re new to databases or need a SQL refresher, Learning SQL on SQL Server 2005 is an ideal step-by-step introduction to this database query tool, with everything you need for programming SQL using Microsoft?s SQL Server 2005?one of the most powerful and popular database engines used today. Plenty of books explain database theory. This guide lets you apply the theory as you learn SQL. You don?t need prior database knowledge, or even prior computer knowledge. Based on a popular university-level course designed by authors Sikha Saha Bagui and Richard Walsh Earp, Learning SQL on SQL Server 2005 starts with very simple SQL concepts, and slowly builds into more complex query development. Every topic, concept, and idea comes with examples of code and output, along with exercises to help you gain proficiency in SQL and SQL Server 2005. With this book, you?ll learn: * Beginning SQL commands, such as how and where to type an SQL query, and how to create, populate, alter, and delete tables * How to customize SQL Server 2005?s settings and about SQL Server 2005?s functions * About joins, a common database mechanism for combining tables * Query development, the use of views and other derived structures, and simple set operations * Subqueries, aggregate functions, and correlated subqueries, as well as indexes and constraints that can be added to tables in SQL Server 2005 Whether you?re a self-learner who has access to the new Microsoft database, working on SQL Server with access at your company, or a computer science student or MIS student, Learning SQL on SQL Server 2005 will get you up to speed on SQL in no time.\r\n\r\n', 'Sikha Saha Bagui, Richard Walsh Earp ', '2005', '9788184040', 360, 350, 'upload_image/comp10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(59, 'demo_category_1'),
(4, 'Sports'),
(5, 'Astrology'),
(6, 'Business'),
(7, 'Economics'),
(10, 'Yoga'),
(16, 'Comics'),
(17, 'Computer'),
(18, 'Cooking'),
(19, 'Science'),
(20, 'Competitive Exam');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(4) NOT NULL,
  `con_nm` varchar(25) NOT NULL,
  `con_email` varchar(35) NOT NULL,
  `con_phone` bigint(20) DEFAULT NULL,
  `con_query` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_nm`, `con_email`, `con_phone`, `con_query`) VALUES
(11, 'himaja', 'himaja@yahoo.com', 9876408347, 'When will the latest edition of java books be available'),
(2, 'reshma', 'reshma@gmail.com', 2147483647, 'comic books are unavailable'),
(12, 'reshma', 'remshims@gmail.com', 9876543210, 'When will the latest edition of DBMS textbook be available'),
(13, 'smrithi', 'smrithi@yahoo.com', 9047483647, 'There is something wrong with my account. My shipping details are  not being accepted.');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `address` text NOT NULL,
  `postal_code` bigint(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `Purchase_Amt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `name`, `address`, `postal_code`, `city`, `state`, `phone`, `f_id`, `Purchase_Amt`) VALUES
(1, 'shital', 'kundalahalli', 560037, 'bangalore', 'karnataka', 9845807878, 'shital', 4530),
(2, 'Tanmay', 'marathalli', 560098, 'pune', 'karnataka', 9845783582, 'kumar', 350),
(3, 'Hiren', 'mgroad', 780098, 'mumbai', 'karnataka', 9785783582, 'kumar', 3050),
(18, 'B.Reshma', 'marathalli', 560037, 'Bangalore', 'karnataka', 9876543210, 'reshma', 3826),
(19, 'B Reshma', 'Banshankari', 678900, 'Bangalore', 'karnataka', 9876543210, 'reshma', 725),
(20, 'sanjeev kumar', 'TNagar', 5600987, 'chennai', 'tamil nadu', 987543210, 'kumar', 895),
(21, 'r', 'r', 45, 'g', 'karnataka', 9987653, 'shital', 900),
(22, 'f', 'f', 2, 'b', 'b', 563356, 'shital', 480);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `subcat_id` int(4) NOT NULL,
  `parent_id` int(4) NOT NULL,
  `subcat_nm` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(4, 4, 'Sports'),
(5, 5, 'Astrology'),
(6, 6, 'Business'),
(7, 7, 'Economics'),
(10, 10, 'Yoga'),
(16, 16, 'Comics'),
(17, 17, 'Programming'),
(18, 17, 'Database'),
(19, 17, 'Web-Design'),
(20, 17, 'Networking'),
(22, 18, 'Pasta'),
(23, 18, 'Tea - Coffee'),
(24, 18, 'Soup - Sauce'),
(25, 18, 'Vegetarian Item'),
(26, 19, 'Physics'),
(27, 19, 'Biology'),
(28, 19, 'Medical'),
(29, 17, 'O.S.'),
(33, 20, 'CAT'),
(31, 20, 'GMAT'),
(32, 20, 'MBA'),
(73, 59, 'example_sub_1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL,
  `u_status` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`, `u_status`) VALUES
(1, 'Hiren Bhaliya', 'Hiren', 'hiru', 'Male', 'hiru@gmail.com', '9925136522', 'Rajkot', 'false'),
(2, 'shital', 'shital', 'shital', 'Female', 'shital@yahoo.com', '9985689856', 'Rajkot', 'false'),
(3, 'Lina', 'Lina123', '123', 'Female', 'lina123@gmail.com', '9456325663', 'Amreli', 'false'),
(4, 'admin', 'admin', 'admin123', 'Female', 'admin@gmail.com', '9859632561', 'Rajkot', 'false'),
(6, 'sanjeev', 'kumar', 'sanjeev', 'Male', 'sanjeevtech2@gmail.com', '9015501897', 'Ahmedabad', 'false'),
(19, 'B.Reshma', 'reshma', 'reshma', 'Female', 'reshma@gmail.com', '9876543210', 'Bangalore', 'false'),
(20, ' Veena Ravi', 'veena', 'veena', 'Female', 'veean@hotmail.com', '9807345612', 'Chennai', 'false'),
(21, 'satya', 'satya', 'satya', 'Male', 'satya@hotmail.com', '9876543221', 'Bangalore', 'false'),
(22, 'Smrithi Nail', 'Smrithi', 'smrithi', 'Female', 'smrithi@yahoo.com', '7896534210', 'bangalore', 'false');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `before_user_entry` BEFORE UPDATE ON `user` FOR EACH ROW begin
if old.u_status='false' then 
insert into user_entry
set action='last login',
u_id=old.u_id,
u_fnm=old.u_fnm,
u_unm=old.u_unm,
changedate=NOW();
elseif old.u_status='true' then
insert into user_entry
set action='last logout',
u_id=old.u_id,
u_fnm=old.u_fnm,
u_unm=old.u_unm,
changedate=NOW();
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_entry`
--

CREATE TABLE `user_entry` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_fnm` varchar(35) DEFAULT NULL,
  `u_unm` varchar(25) DEFAULT NULL,
  `changedate` datetime DEFAULT NULL,
  `action` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_entry`
--

INSERT INTO `user_entry` (`id`, `u_id`, `u_fnm`, `u_unm`, `changedate`, `action`) VALUES
(1, 21, 'satya', 'satya', '2017-12-01 21:02:08', 'last login'),
(2, 19, 'B.Reshma', 'reshma', '2017-12-01 21:02:19', 'last login'),
(3, 19, 'B.Reshma', 'reshma', '2017-12-01 21:03:40', 'last logout'),
(4, 21, 'satya', 'satya', '2017-12-01 21:04:13', 'last logout'),
(5, 4, 'admin', 'admin', '2017-12-01 21:06:32', 'last login'),
(6, 4, 'admin', 'admin', '2017-12-01 21:07:23', 'last logout'),
(7, 4, 'admin', 'admin', '2017-12-01 21:09:25', 'last logout'),
(8, 20, ' Veena Ravi', 'veena', '2017-12-01 21:38:11', 'last login'),
(9, 20, ' Veena Ravi', 'veena', '2017-12-01 21:39:58', 'last logout'),
(10, 4, 'admin', 'admin', '2017-12-01 23:05:02', 'last login'),
(11, 3, 'Lina', 'Lina123', '2017-12-01 23:30:20', 'last login'),
(12, 4, 'admin', 'admin', '2017-12-01 23:30:44', 'last logout'),
(13, 3, 'Lina', 'Lina123', '2017-12-01 23:30:47', 'last logout'),
(14, 4, 'admin', 'admin', '2017-12-03 08:51:28', 'last login'),
(15, 20, ' Veena Ravi', 'veena', '2017-12-03 09:25:25', 'last login'),
(16, 4, 'admin', 'admin', '2017-12-03 14:59:04', 'last logout'),
(17, 20, ' Veena Ravi', 'veena', '2017-12-03 14:59:08', 'last logout'),
(18, 6, 'sanjeev', 'kumar', '2017-12-03 15:00:34', 'last login'),
(19, 6, 'sanjeev', 'kumar', '2017-12-03 15:03:39', 'last logout'),
(20, 4, 'admin', 'admin', '2017-12-03 15:03:52', 'last login'),
(21, 2, 'shital', 'shital', '2017-12-03 15:04:11', 'last login'),
(22, 2, 'shital', 'shital', '2017-12-03 15:05:21', 'last logout'),
(23, 4, 'admin', 'admin', '2017-12-03 15:10:39', 'last logout'),
(24, 22, 'Smrithi Nail', 'Smrithi', '2017-12-03 15:12:52', 'last login'),
(25, 22, 'Smrithi Nail', 'Smrithi', '2017-12-03 15:13:39', 'last logout'),
(26, 4, 'admin', 'admin', '2017-12-03 16:08:49', 'last login'),
(27, 4, 'admin', 'admin', '2017-12-03 16:22:48', 'last logout'),
(28, 4, 'admin', 'admin', '2017-12-03 17:36:32', 'last login'),
(29, 4, 'admin', 'admin', '2017-12-03 18:04:22', 'last logout'),
(30, 22, 'Smrithi Nail', 'Smrithi', '2017-12-03 18:38:18', 'last login'),
(31, 22, 'Smrithi Nail', 'Smrithi', '2017-12-03 18:39:13', 'last logout'),
(32, 22, 'Smrithi Nail', 'Smrithi', '2017-12-03 18:39:15', 'last logout'),
(33, 22, 'Smrithi Nail', 'Smrithi', '2017-12-03 18:39:41', 'last login'),
(34, 22, 'Smrithi Nail', 'Smrithi', '2017-12-03 19:29:18', 'last logout'),
(35, 2, 'shital', 'shital', '2017-12-03 20:24:56', 'last login'),
(36, 2, 'shital', 'shital', '2017-12-03 20:29:29', 'last logout'),
(37, 2, 'shital', 'shital', '2017-12-04 15:51:59', 'last login'),
(38, 2, 'shital', 'shital', '2017-12-04 15:54:14', 'last logout'),
(39, 4, 'admin', 'admin', '2017-12-04 15:54:19', 'last login'),
(40, 2, 'shital', 'shital', '2017-12-04 15:57:09', 'last login'),
(41, 2, 'shital', 'shital', '2017-12-04 16:06:18', 'last logout'),
(42, 2, 'shital', 'shital', '2017-12-04 16:07:36', 'last logout'),
(43, 4, 'admin', 'admin', '2017-12-04 16:07:45', 'last logout'),
(44, 4, 'admin', 'admin', '2017-12-04 16:10:27', 'last logout');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_unm` (`u_unm`);

--
-- Indexes for table `user_entry`
--
ALTER TABLE `user_entry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `subcat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_entry`
--
ALTER TABLE `user_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
