- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2015 at 10:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_new_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Uncategorised'),
(2, 'Personal'),
(3, 'Tutorial'),
(4, 'Review');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE IF NOT EXISTS `category_post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned NOT NULL,
  `post_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `post_id` int(11) unsigned NOT NULL,
  `content` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Kishore ', 1, 'This is a nice SOP document! I shall use it for my future reference!', '2015-10-03 23:49:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'editor', 'User authorised to manage posts');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(5);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Learn from "Blogs"', '<p>You can learn some of the best things about blogging by looking at the world’s most popular blogs.\r\n\r\nThese blogs are popular for a reason. And they only get more popular as time goes on. Viral popularity feeds popularity, snowballing into a massive cultural force.\r\n\r\nI like learning from people and businesses who know what they’re doing. Some of the top features of the world’s most popular blogs demonstrate three powerful lessons that you can implement on your blog </p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://contentmarketinginstitute.com/wp-content/uploads/2015/05/learn-popular-blogs-cover-390x215.png" alt="blog" width="650" height="250" /></p>\r\n\r\n<p>A note about selection: These three blogs – The Huffington Post, TMZ, and Business Insider – are the most popular on the eBiz list, which collates data from Alexa, U.S. Traffic Rank, Compete, and Quantcast.\r\n\r\nAnd are websites truly blogs? Yes. A blog is bigger than you might think.\r\n<img style="display: block; margin-left: auto; margin-right: auto;" src="http://contentmarketinginstitute.com/wp-content/uploads/2015/05/blog-definition-image-1.png">\r\n\r\n<br>Each of these blogs is, indeed, a blog, but each includes a lot of writers and a massive output of content.</p>', '2015-10-06 20:32:32', NULL),
(2, 1, 'Nature', '<p>When we look around us , we find the beautiful sky , cool breeze , landscape. All tehse belong to us . The nature belongs to us! Man who has improved mother nature''s beauty has now become responsible for its destruction because of his selfish and careless attitude.He has setup many factories which liberate harmful chemicals such as, lead CO2, CO etc. As a result various health hazards! Earlier heaven is converted into hell now. </p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://i45.servimg.com/u/f45/17/35/23/43/dd_1111.jpg" alt="Save Nature" width="650" height="250" /></p>\r\n\r\n<p>Let us all pledge today , that we shall strive to protect mother nature and leave no stone unturned towards achieving it.</p>', '2015-10-07 23:49:47', NULL),
(3, 1, 'Woman Empowerment ', '<p>\r\n\r\nWhat is women empowerment? Women Empowerment refers to strengthening the social, economic and educational powers of women. It refers to an environment where there is no gender bias and have equal rights in community, society and workplaces. </p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://momitforward.com/wp-content/uploads/2013/04/EmpoweringWomen_logo_FINAL.jpg" alt="Woman power" width="650" height="250" /></p>\r\n\r\n<p>Why women empowerment is important?\r\n\r\nWomen population is around 50% of the total population of the world. They have every right to be treated equally with men in every spheres of life and society.The empowerment of women would result in overall development of society both at micro and macro level. Active participation of women in economic activities and decisions, would contribute towards overall economic development.</p>\r\n<br>\r\n<p>Challenges\r\n\r\nThe challenges/ barriers of women empowerment are the following:\r\n\r\nBecause of the inherent superiority complex among the males, they often doesn’t allow their female counter-part to rise as high as them.\r\nHigh level of domestic responsibilities.\r\nRestrictions to participate in social, economic and religious activities.\r\nIn our society, the boy-child often gets preference for education and healthy diet over the girl child.\r\nPreference for male-child still exist among many families in the society.\r\nSolution</p>\r\n<br>\r\n<p>\r\n\r\nThe solutions for empowerment of women includes the following:\r\n\r\nEducation through mass communication is very important. Both women and men should be made aware of their responsibilities to promote and practice gender-equality.\r\nGather national data and identify the areas where instances of violence and gender-inequality is the most. This data can be used by the Government, NGOs and field workers to raise the status of women.\r\nThe society should be made aware that both boy-child and girl-child are equal, and they both should have equal access to resources.</p>', '2015-10-10 00:29:31', NULL),
(4, 1, 'Wanna know about me?', '<p>I am a kind of person with clear understanding of my future goals and a strong determination to strive \r\ntowards achieving those. Down the line, five years , am sure people would recognize ‘Haritha’ in a wider range because of my achievements. </p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://api.ning.com/files/T8FFLqIrRnmhKE6aWHOWrw3P4dxWCft3-4UJ7ksbKBBfr0MQAndZtHm3SDOTcroijnYmORbqiz1M7StYRhtQKCmcVuANfzzW/documentation.jpg" alt="SOP DOC" width="650" height="250" /></p>\r\n\r\n<p>Innovation in the field of computers is what I choose , because computers is not a subject for me , it is my passion which started at the age of 10 when I first heard the word “computer” in my school and stepped into the computer lab and saw this enticing device. I won in \r\nnumber of elocutions, extempore, JAM sessions the same year when I choose the topic “computers”. </p>\r\n<p>I stood first in essay writing competition where the topic was “computer”, which provided me a great \r\nopportunity to meet Dr. APJ Abdul Kalam, President of India that time.I had determined to become a software engineer and completed my schooling in Central board of \r\n\r\nsecondary education and stood as a topper in south zone with 97%.\r\n\r\nPursuing my strong interest in Computer Science has over the years enabled me to develop keen \r\n\r\nanalytical and reasoning skills. Through the course of the four-year Bachelor of Technology degree \r\n\r\nprogram in Computer Science and Engineering at the prestigious Jawaharlal Nehru University, I acquired \r\n\r\nan overall perspective of this scientific discipline, with a particular interest in Object Oriented \r\n\r\nProgramming, Database Management, Operating systems, Network security that captured my attention. \r\n\r\nMy keen interest in the subjects translated into receiving an A+ grade in all subjects and stood as my \r\n\r\ncollege topper and was felicitated for the same. \r\n\r\nIn 2013, June, immediately after completing under graduate program I was selected in campus \r\n\r\nrecruitments from a whole bracket of 1500 folks, for many software companies like Mahendra Satyam , \r\n\r\nADP , Osmosis and Computer associates technologies with various profiles of work. Few areas of my \r\n\r\neducation have stimulated me to think on my role as a software admin, and thus I preferred CA \r\n\r\ntechnologies where I worked for one and a half years. \r\n\r\nThe MS program in Computer Science offered by the Boise state university will undoubtedly provide me \r\n\r\nwith the right knowledge, skills and experience to pursue that dream and exploit the opportunities to the \r\n\r\nfullest extent. The department web site revealed a very strong faculty involved in extensive research \r\n\r\nfacilities, pleasant university ambience and a balanced academic program. This has strengthened my \r\n\r\nresolve to study at Boise state University. \r\n\r\n I bring along a strong grasp of fundamentals in computer science, with a professional background and \r\n\r\nunderstanding the working of a corporate world, with an aptitude for teaching and team work, a zest for \r\n\r\nchallenges and an enthusiastic desire to learn all I can. \r\nIn conclusion, I would like to say that if granted admission into your university I would perform to the \r\n\r\nbest of my abilities and hope to acquire skills that will help me realize my dreams. I would therefore be \r\n\r\nvery thankful if I am offered a beneficial association with your esteemed university with full financial \r\n\r\nsupport..</p>\r\n', '2015-10-11 02:29:43', NULL),
(5, 1, 'Big Data – revolutionising sport in unexpected ways', '<p>You know analytics is serious in sport when the Massachusetts Institute of Technology shows an interest. Not only does it run a yearly conference on the topic, its boffins are busy figuring out fresh ways to revolutionise sport using Big Data.\r\n\r\n“Sports are watched by millions and millions of people - yet, pretty much all of the strategic decisions are made by humans in a split second. These decisions could definitely be enhanced by learning from past data, but humans can’t keep large databases in their heads. I wanted to build predictive analytics tools to help teams make these decisions,” Cynthia Rudin, associate professor of statistics at MIT, tells the Guardian. </p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2014/10/6/1412587040484/bb64af8e-88d9-4447-8aa3-57387ad5b717-2060x1236.jpeg?w=700&q=85&auto=format&sharp=10&s=34eef561a3b6be298b5a621b4a761a7b" alt="Save Nature" width="650" height="250" /></p>\r\n\r\n<p>Rudin believes Big Data analytics can help in various ways, from tweaking training plans to determining patterns about competitors. “If we know, for instance, that in certain circumstances, a particular coach on the opposition team tends to make a particular decision, then we can be ready for it,” she adds. “Another example - we can place sensors all over a car while it is in training for a race, and use the sensor data to help a driver learn how to race better.”\r\n\r\nThe ever-growing world of Big Data has already permeated the sporting arena in surprising ways. Player health and safety, for instance, is one increasingly attractive use case. “Particularly in high injury sports, you think about the health of player, how we can use data and analytics to look after their bodies,” Martin Houghton, managing partner from HP’s analytics and data management division in EMEA.And this is what Big Data should be about for any business - it’s the customers who make or break the company. They need to be impressed via information before anyone else</p>', '2015-10-13 13:39:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(16) NOT NULL DEFAULT '127.0.0.1',
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'akella.haritha91@gmail.com', '', 'bf6l9oR78RFqa89J4BmWxO4333f71fbec0dc9f9d', 1444774493, NULL, 1268889823, 1444839441, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
