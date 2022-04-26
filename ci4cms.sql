-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 10:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_schema` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `description`, `thumb`, `meta_key`, `meta_des`, `meta_schema`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Category', 'Category101 Category101 Category101 Category101 Category101 Category101 Category101 Category101 Category101 Category101 Category', '01.png', 'Category', '', 'Category101 ', 0, '2022-01-02 07:31:24', '2022-01-01 08:41:17'),
(6, 'Fashion ', 'Fashion Fashion Fashion Fashion Fashion Fashion Fashion Fashion Fashion Fashion Fashion Fashion ', 'cat_1641109099_1.jpg', 'Fashion 101', '', '', 0, '2022-01-11 12:29:21', '0000-00-00 00:00:00'),
(7, 'Career', 'Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 Career 101 ', 'cat_1648977459_size_guide_1648127303_Size Chart.jpg', 'Career', '', '', 0, '2022-04-03 09:17:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `email`, `name`, `first_name`, `last_name`, `subject`, `message`, `status`, `created_at`) VALUES
(13, 'mamunhossain@gmail.com', '', 'Mamun', 'hossain', 'Test Message', 'Test Message check.', 0, '2022-02-28 10:23:28'),
(14, 'testdata@gmail.com', '', 'test', 'data', 'Test Message', 'hello', 0, '2022-02-28 10:24:44'),
(15, 'martinezpaco625@gmail.com', '', 'Paco  Martinez', 'Paco  Martinez', 'Kindly acknowledge to indicate receipt', 'I am  a solicitor at law. I am the personal attorney to the late Mrs. Anna  who used to work with Shell - development company . Hereafter shall be  referred to as my client. \r\n \r\nOn the 29th  December  2009, my client, his husband and their three  children were involved in a car accident. All occupants of the vehicle unfortunately lost their lives. Since then I have made several enquiries to your embassy to locate any of my clients extended  relatives. \r\n \r\nAfter these several unsuccessful attempts, I decided to track his last  name over the Internet, to locate any member of his family hence I  contacted you. \r\n \r\nThe finance company where the deceased had an account valued at about  9.5 million euros has issued me a notice to provide the next of kin or have the account confiscated within the next ten  official working days. \r\n \r\nSincerely, \r\nBarrister   Paco  Martinez (Esq) \r\nTel/Fax:  0034-604-197-938 \r\nReply To:  Pacomartinezconsultant@gmail.com', 0, '2022-03-09 11:23:55'),
(16, 'bakhrashkandaurov1988861gib+2626@inbox.ru', '', 'MichaelsalAR', 'MichaelsalAR', 'Hello world', 'melalifestyle.store uriefeodeighrkfldjiijofofjmvkdnsisdiehiusfiajfhweiuioidjsjsbfiadjasifaijdfifijsaaiwghifadja', 0, '2022-03-12 01:26:20'),
(17, 'legitanonymousfada@gmail.com', '', 'Anonymous Pharmacy', 'Anonymous Pharmacy', 'Buy GHB (gamma hydroxybutyrate) and Gamma butyrolactone (GBL) for sale online', 'Buy GHB and GBL online - GHB (gamma hydroxybutyrate) for sale online \r\n4-mmc \r\n5-meo dmt \r\nTramadol 50mg online \r\nDMT, \r\nCrystal Meth \r\nA-pvp \r\nKetamine \r\nLSD \r\necstasy/molly \r\nMDPV \r\nU-47700 \r\nAdderall \r\nCrack/uncrack cocaine \r\nMethylone \r\nOxycodone \r\nNembutal powder/solution and pills \r\nPotassium cyanide \r\nMephedrone (4-MMC) \r\nXanax 2 mg \r\nDiazepam \r\nAdderall \r\nAll inquiries are welcome 24/7. \r\nwebsite:https://anonymousalphapharmacy.com/ \r\nWhatsApp Number +1(469) 431-3201 \r\nWickR \r\nID(anonymousfada) \r\nE-mail:anonymousalphapharmacy@gmail.com', 0, '2022-03-12 20:14:59'),
(18, 'zummkke@icloud.com', '', 'Christian Djurit', 'Christian Djurit', 'Business Reply', 'We provide funding  through our venture company to both startups and existing businesses either looking for expansion or to accelerate their company growth. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early prepayment penalties. \r\nEmail: chris.djurit@protonmail.com \r\nchris.djurit@alconmcl.com \r\nChristian Djurit \r\nDirector/Investment Head \r\nAlcon Management Company LTD UK.', 0, '2022-03-16 08:28:51'),
(19, 'no-replyma@gmail.com', '', 'Mike Becker\r\n', 'Mike Becker\r\n', 'whitehat monthly SEO plans', 'Good Day \r\n \r\nI have just verified your SEO on  melalifestyle.store for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Becker\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 0, '2022-03-16 18:24:09'),
(20, 'tbformleads@gmail.com', '', 'Kevin JohnsonHS', 'Kevin JohnsonHS', 'Quick question', 'Hello \r\nDo you want to increase sales for your business 24/7? \r\nThen you might want to get an Animated Explainer Video that you can put on your website, post on social media and send out to potential clients in an email. \r\nAnd today we have slashed our price from $497 to just $97. So, you are saving $400 when you order this week. \r\nBut this offer is only good this week, for the first 20 clients, so you need to order now, before you miss out. \r\nClick Here Now To Watch Our Video About Our Great Offer  (  https://bit.ly/Xpress97offer  ) \r\nFor less than you spend on coffee each month, you get an American Owned Video company that can write your script, create your story board, lay-in a good soundtrack and produce an awesome video that brings home the bacon. \r\nDid you know: \r\n \r\n•	64% of customers are more likely to buy a product online after watching a video about it... \r\n•	Putting videos on landing pages and websites can increase conversion rates by 80%... \r\n•	92% of people who watch videos share them with other people... \r\nAgain, this $97 promotion is for this week only. Don’t miss out!!! The normal price is $497, so today you are saving $400. Get your video today before the 20 discounted video slots are gone. \r\nClick Here Now And Claim Your $97 Video (  https://bit.ly/Xpress97offer  ) \r\nBest, \r\nKevin Johnson \r\nBusiness Development Manager', 0, '2022-03-20 20:08:39'),
(21, 'no-replyma@gmail.com', '', 'Mike Calhoun\r\n', 'Mike Calhoun\r\n', 'Get more dofollow backlinks for melalifestyle.store', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Calhoun\r\n \r\nsupport@digital-x-press.com', 0, '2022-03-22 07:11:13'),
(22, 'no-replyma@gmail.com', '', 'Mike Haig\r\n', 'Mike Haig\r\n', 'Strengthen your Domain Authority', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your melalifestyle.store to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Haig\r\n', 0, '2022-03-23 15:41:19'),
(23, 'no-replyma@gmail.com', '', 'Mike Hamphrey\r\n', 'Mike Hamphrey\r\n', 'NEW: Semrush Backlinks', 'Howdy \r\n \r\nThis is Mike Hamphrey\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your melalifestyle.store SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Hamphrey\r\n \r\nmike@strictlydigital.net', 0, '2022-03-29 15:02:29'),
(24, 'jacky.chen@fairchildsemi.com', '', 'JarodTooseAD', 'JarodTooseAD', 'SMM Panel, The Best and Cheapest SMM Services', 'GlobalSMM: Cheapest SMM Panel and fastest smm panel https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2FccgQZt&sa=D&sntz=1&usg=AOvVaw07lL_kc7zZcksNSSYY3kMA', 0, '2022-03-29 15:43:42'),
(25, 'hivemailers@gmail.com', '', 'MichaelFK', 'MichaelFK', 'I have a question', 'Hello, \r\n \r\nI would like to schedule a quick call to discuss our marketing system that can bring you leads daily. \r\n \r\nWe use a robust email application that mimics real people sending emails, so we get a huge delivery rate. \r\n \r\nSTART GETTING HOT LEADS NOW: \r\n \r\n- We create the content for the email(s) \r\n- We forward leads to you daily. \r\n- We send to 500 new contacts a day M-F (10k monthly), then we send 5 follow up emails (that is 50k emails a month) \r\n \r\nPlus!! Monthly, we provide the 10,000 targeted new email addresses that we will email to. That email list is worth over $2,000 a month, but you get that free with our service. \r\n \r\nJust imagine, you will start getting hot leads within days of getting started with us. Get started now for a $47.00 setup fee and just $997 per month (month-to-month/no long-term contract) \r\n \r\nBook a 10 min call with me now: https://calendly.com/msinclair-myaa/myaa-overview \r\n \r\nNOTE: To hire a person to send one-to-one emails (like our system does) would cost around $2,500 a month, but with us, you pay just $997. \r\n \r\nOffer good for the first 20 clients, start getting quality leads now, don’t miss out. \r\n \r\nSincerely, \r\n \r\n-	Michael', 0, '2022-03-29 19:09:07'),
(26, 'hrhmbambi@gmail.com', '', 'Bah Mbi', 'Bah Mbi', 'Bulk supply', 'Dear Director, \r\n \r\nWe are interested in your products. Please contact us if your company can handle a bulk supply of your products to Cameroon. \r\nPlease send your reply to \r\nRegards hrhbah-mbi@aghemfondom.com \r\nHRM Bah Mbi', 0, '2022-03-31 05:26:33'),
(27, 'lenderintegratedsolution@gmail.com', '', 'WesleybeabeCG', 'WesleybeabeCG', 'Do you need funding for a business or project', 'Hello do you have pending deals that needs urgent fundings, \r\nWe provide private money loans with lower rates/better terms to real estate investors, builders, developers and business owners to solve their capital challenges, support business growth and revitalize. If you\'re interested in our services, please respond with your email for more info or forward your loan request to   info@lendersintegratedsolutions.com You can also visit our website At: https://lendersintegratedsolutions.com \r\nTelephone: +1(401) 721-4212', 0, '2022-04-01 10:51:07'),
(29, 'iberguay62@hotmail.es', '', 'ThomasVakJT', 'ThomasVakJT', 'Only your Cryptocurrency income from 1585 USDT per day', 'Reliable and automatic income on Binary Options from 1565 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02?3yc', 0, '2022-04-05 02:22:13'),
(30, 'iberguay62@hotmail.es', '', 'ThomasVakJT', 'ThomasVakJT', 'Only your Cryptocurrency income from 1585 USDT per day', 'Reliable and automatic income on Binary Options from 1565 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02?3yc', 0, '2022-04-05 02:22:16'),
(31, 'iberguay62@hotmail.es', '', 'ThomasVakJT', 'ThomasVakJT', 'Only your Cryptocurrency income from 1585 USDT per day', 'Reliable and automatic income on Binary Options from 1565 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02?3yc', 0, '2022-04-05 02:22:18'),
(32, 'iberguay62@hotmail.es', '', 'ThomasVakJT', 'ThomasVakJT', 'Only your Cryptocurrency income from 1585 USDT per day', 'Reliable and automatic income on Binary Options from 1565 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02?3yc', 0, '2022-04-05 02:22:20'),
(33, 'iberguay62@hotmail.es', '', 'ThomasVakJT', 'ThomasVakJT', 'Only your Cryptocurrency income from 1585 USDT per day', 'Reliable and automatic income on Binary Options from 1565 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02?3yc', 0, '2022-04-05 02:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_replay`
--

CREATE TABLE `tbl_contact_replay` (
  `id` int(11) NOT NULL,
  `contact_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact_replay`
--

INSERT INTO `tbl_contact_replay` (`id`, `contact_id`, `email`, `subject`, `message`, `status`, `created_at`) VALUES
(1, '6', 'islamhossainwork@gmail.com', 'sdfsdaf ', 'sdfasd', 0, '2022-02-16 12:00:05'),
(2, '6', 'islamhossainwork@gmail.com', 'sdfsdaf ', 'test', 0, '2022-02-16 12:03:04'),
(3, '6', 'islamhossainwork@gmail.com', 'sdfsdaf ', 'gyujgy', 0, '2022-02-27 08:50:04'),
(4, '6', 'islamhossainwork@gmail.com', 'sdfsdaf ', '', 0, '2022-02-28 09:45:41'),
(5, '6', 'islamhossainwork@gmail.com', 'sdfsdaf ', 'gju', 0, '2022-02-28 09:45:51'),
(6, '27', 'lenderintegratedsolution@gmail.com', 'Do you need funding for a business or project', 'gyjfm', 0, '2022-04-03 09:03:44'),
(7, '27', 'lenderintegratedsolution@gmail.com', 'Do you need funding for a business or project', '', 0, '2022-04-03 09:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `menu_html` text NOT NULL,
  `link_url` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `location`, `type`, `title`, `menu_html`, `link_url`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Menu_Location_01', 'page', 'Contact Us', '', '33', 0, '2022-03-01 05:25:20', '0000-00-00 00:00:00'),
(9, 'Menu_Location_03', 'page', 'SHIPPING INFORMATION', '', '48', 0, '2022-03-03 07:21:05', '0000-00-00 00:00:00'),
(15, 'Menu_Location_02', 'page', 'Contact Us', '', '33', 0, '2022-03-03 10:35:05', '0000-00-00 00:00:00'),
(16, 'Menu_Location_02', 'page', 'FAQS', '', '40', 0, '2022-03-03 10:35:17', '0000-00-00 00:00:00'),
(17, 'Menu_Location_02', 'page', 'SIZE GUIDE', '', '42', 0, '2022-03-03 10:35:28', '0000-00-00 00:00:00'),
(18, 'Menu_Location_03', 'page', 'RETURN POLICY', '', '45', 0, '2022-03-03 10:35:51', '0000-00-00 00:00:00'),
(19, 'Menu_Location_04', 'page', 'OUR STORY', '', '44', 0, '2022-03-03 10:36:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `customer_details` text NOT NULL,
  `billing_address` text NOT NULL,
  `delivery_cost` varchar(255) NOT NULL,
  `order_details` text NOT NULL,
  `order_total` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `order_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `order_id`, `order_type`, `customer_id`, `customer_details`, `billing_address`, `delivery_cost`, `order_details`, `order_total`, `discount`, `total`, `notes`, `order_status`, `status`, `created_at`) VALUES
(43, 'MB-1649066616', 'cash', '1', '<h4>ontor</h4> mail@mail.com &nbsp; 0147852369', 'dhaka - 1207', '80', '<tr><td><img src=\"http://localhost/uploads/product_1648461640_p1.jpg\" style=\"width:50px; height:50px;\"></td><td>Kurti</td><td>1000</td><td>2</td><td>2000</td></tr><tr><td><img src=\"http://localhost/uploads/product_1648461640_p1.jpg\" style=\"width:50px; height:50px;\"></td><td>Kurti</td><td>1000</td><td>2</td><td>2000</td></tr>', '4000', '0', '4000', 'n/a', 0, 0, '2022-03-28 10:03:36'),
(44, 'MB-1649194975', 'cash', '40', '<h4>sabbirshahrier</h4>\r\nDhaka, Bangladesh.\r\nsabbir.shahrier@gmail.com <br/>\r\n01822493881', 'AB Bank, Bandura Branch, Government Super Market, Hasnabad, Nawabganj', '80', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648461640_p1.jpg\" style=\"width:50px; height:50px;\"></td><td>Kurti</td><td>1000</td><td>1</td><td>1000</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648460615_e7d2d2435d3103e0b0b40605d0042aad.jpg\" style=\"width:50px; height:50px;\"></td><td> New exclusive designed Gown 1piece long kurti different koti, Gown long</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648460615_e7d2d2435d3103e0b0b40605d0042aad.jpg\" style=\"width:50px; height:50px;\"></td><td>NEW EXCLUSIVE DESIGNED GOWN 1PIECE LONG KURTI DIFFERENT KOTI, GOWN LONG</td><td>1200</td><td>1</td><td>1200</td></tr>', '3400', '0', '3400', '', 0, 0, '2022-04-04 09:31:08'),
(45, 'MB-1649346555', 'cash', '40', '<h4>sabbirshahrier</h4>\r\nDhaka, Bangladesh.<br/> sabbir.shahrier@gmail.com <br/>\r\n01533570779', 'House 9, Road 1, Block B, Mirpur-6', '80', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648723149_p1.jpg\" style=\"width:50px; height:50px;\"></td><td>ELOISE DRESS</td><td>1100</td><td>1</td><td>1100</td></tr>', '1100', '0', '1100', '', 0, 0, '2022-04-04 09:32:47'),
(46, 'MB-1649666193', 'cash', '1', '<h4>rtvhrt</h4> \r\nDhaka, Bangladesh.<br/>\r\nislamhossainwork@gmail.com<br/>\r\n5684531', 'rthrt6buhyty', '80', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>RED KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721350_37.jpg\" style=\"width:50px; height:50px;\"></td><td>Blue Kamiz</td><td>800</td><td>1</td><td>800</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648723149_p1.jpg\" style=\"width:50px; height:50px;\"></td><td>ELOISE DRESS</td><td>1100</td><td>1</td><td>1100</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648728283_20.jpg\" style=\"width:50px; height:50px;\"></td><td>MAROON KAMIZ</td><td>1100</td><td>1</td><td>1100</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721723_14.jpg\" style=\"width:50px; height:50px;\"></td><td>Green Kamiz</td><td>950</td><td>1</td><td>950</td></tr>', '7550', '0', '7550', 'gvryhb te', 0, 0, '2022-04-04 09:36:56'),
(47, 'MB-1649666683', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', 'asdasda', 0, 0, '2022-04-04 08:44:43'),
(48, 'MB-1649668326', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', 'at home', 0, 0, '2022-04-04 09:12:06'),
(49, 'MB-1649669940', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', '', 0, 0, '2022-04-04 09:39:00'),
(50, 'MB-1649670875', 'cash', '34', '<h4>saddam</h4> saddam@gmail.com &nbsp; 01625119965', 'farmgate', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>Red Kamiz</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>2</td><td>2400</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721723_14.jpg\" style=\"width:50px; height:50px;\"></td><td>GREEN KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '4550', '0', '4550', 'Test', 0, 0, '2022-04-04 09:54:35'),
(51, 'MB-1649671133', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', '', 0, 0, '2022-04-04 09:58:53'),
(52, 'MB-1649672566', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr>', '4800', '0', '4800', 'na', 0, 0, '2022-04-04 10:22:46'),
(53, 'MB-1649672960', 'cash', '1', '<h4>saddam</h4> lenderintegratedsolution@gmail.com &nbsp; 01625119965', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>Red Kamiz</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>2</td><td>2400</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721723_14.jpg\" style=\"width:50px; height:50px;\"></td><td>GREEN KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '4550', '0', '4550', 'ftgjhg', 0, 0, '2022-04-04 10:29:20'),
(54, 'MB-1649673189', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr>', '4800', '0', '4800', '', 0, 0, '2022-04-04 10:33:09'),
(55, 'MB-1649674798', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'mirpur', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr>', '4800', '0', '4800', 'na', 0, 0, '2022-04-04 10:59:58'),
(56, 'MB-1649676455', 'cash', '1', '<h4>saddam</h4> saddam@gmail.com &nbsp; 01625119965', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>Red Kamiz</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>2</td><td>2400</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721723_14.jpg\" style=\"width:50px; height:50px;\"></td><td>GREEN KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '4550', '0', '4550', 'jhygsdjc', 0, 0, '2022-04-04 11:27:35'),
(57, 'MB-1649676561', 'cash', '1', '<h4>saddam</h4> saddam@gmail.com &nbsp; 01625119965', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>Red Kamiz</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>2</td><td>2400</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721723_14.jpg\" style=\"width:50px; height:50px;\"></td><td>GREEN KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '4550', '0', '4550', 'fghjnyr', 0, 0, '2022-04-04 11:29:21'),
(58, 'MB-1649676723', 'cash', '1', '<h4>saddam</h4> saddam@gmail.com &nbsp; 01625119965', 'farmgate', '80', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>Red Kamiz</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>2</td><td>2400</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721723_14.jpg\" style=\"width:50px; height:50px;\"></td><td>GREEN KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '4550', '0', '4550', 'ersyfg56', 0, 0, '2022-04-04 11:32:03'),
(59, 'MB-1649677444', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 58743854534', 'tyhtyhj', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721350_37.jpg\" style=\"width:50px; height:50px;\"></td><td>BLUE KAMIZ</td><td>800</td><td>1</td><td>800</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721350_37.jpg\" style=\"width:50px; height:50px;\"></td><td>BLUE KAMIZ</td><td>800</td><td>1</td><td>800</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>Red Kamiz</td><td>1200</td><td>1</td><td>1200</td></tr>', '2800', '0', '2800', 'rtytuty', 0, 0, '2022-04-04 11:44:04'),
(60, 'MB-1649677805', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721350_37.jpg\" style=\"width:50px; height:50px;\"></td><td>BLUE KAMIZ</td><td>800</td><td>1</td><td>800</td></tr>', '5600', '0', '5600', 'ghujnyg', 0, 0, '2022-04-04 11:50:05'),
(61, 'MB-1649678116', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>Kamiz </td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721350_37.jpg\" style=\"width:50px; height:50px;\"></td><td>BLUE KAMIZ</td><td>800</td><td>1</td><td>800</td></tr>', '5600', '0', '5600', '', 0, 0, '2022-04-04 11:55:16'),
(62, 'MB-1649678307', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'farmgate', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', '', 0, 0, '2022-04-04 11:58:27'),
(63, 'MB-1649678472', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'khilkhet', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', 'na', 0, 0, '2022-04-04 12:01:12'),
(64, 'MB-1649678528', 'cash', '39', '<h4>saddam</h4> saddam@gmail.com &nbsp; 0125445566', 'khilkhet', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', 'as', 0, 0, '2022-04-04 12:02:08'),
(65, 'MB-1649734078', 'cash', '1', '<h4>IslamHossain</h4> islamhossainwork@gmail.com &nbsp; 01914441334', 'dhaka - 12', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>RED KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721350_37.jpg\" style=\"width:50px; height:50px;\"></td><td>BLUE KAMIZ</td><td>800</td><td>1</td><td>800</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648722081_21.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '2950', '0', '2950', '', 0, 0, '2022-04-05 03:27:58'),
(66, 'MB-1649734381', 'cash', '1', '<h4>IslamHossain</h4> islamhossainwork@gmail.com &nbsp; 01914441334', 'dhaka - 12', '80', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>RED KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721350_37.jpg\" style=\"width:50px; height:50px;\"></td><td>BLUE KAMIZ</td><td>800</td><td>1</td><td>800</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648722081_21.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '2950', '0', '2950', '', 0, 0, '2022-04-05 03:33:01'),
(67, 'MB-1649740173', 'cash', '39', '<h4>saddam hossain</h4> saddam@gmail.com &nbsp; 01625119965', 'mirpur', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', '', 0, 0, '2022-04-05 05:09:33'),
(68, 'MB-1649740280', 'cash', '39', '<h4>saddam hossain</h4> saddam@gmail.com &nbsp; 01625119965', 'mirpur', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', '', 0, 0, '2022-04-05 05:11:20'),
(69, 'MB-1649740777', 'cash', '39', '<h4>saddam hossain</h4> saddam@gmail.com &nbsp; 01625119965', 'mirpur', '100', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>5</td><td>6000</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729106_9.jpg\" style=\"width:50px; height:50px;\"></td><td>GRAY KAMIZ</td><td>950</td><td>1</td><td>950</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648728493_19.jpg\" style=\"width:50px; height:50px;\"></td><td>BROWN KAMIZ</td><td>1000</td><td>1</td><td>1000</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648728283_20.jpg\" style=\"width:50px; height:50px;\"></td><td>MAROON KAMIZ</td><td>1100</td><td>1</td><td>1100</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729106_9.jpg\" style=\"width:50px; height:50px;\"></td><td>GRAY KAMIZ</td><td>950</td><td>1</td><td>950</td></tr>', '10000', '0', '10000', 'n/a', 0, 0, '2022-04-05 05:19:37'),
(70, 'MB-1649740927', 'cash', '1', '<h4>IslamHossain</h4> islamhossainwork@gmail.com &nbsp; 01914441334', 'Dhaka', '80', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648721123_36.jpg\" style=\"width:50px; height:50px;\"></td><td>Red Kamiz</td><td>1200</td><td>1</td><td>1200</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648722871_1.jpg\" style=\"width:50px; height:50px;\"></td><td>Pink Kamiz</td><td>1000</td><td>1</td><td>1000</td></tr><tr><td><img src=\"https://melalifestyle.store/uploads/product_1648722871_1.jpg\" style=\"width:50px; height:50px;\"></td><td>Pink Kamiz</td><td>1000</td><td>1</td><td>1000</td></tr>', '3200', '0', '3200', 'test', 0, 0, '2022-04-05 05:22:07'),
(71, 'MB-1649744936', 'cash', '1', '<h4>IslamHossain</h4> islamhossainwork@gmail.com &nbsp; 01914441334', 'khulna', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', 'n/a', 0, 0, '2022-04-05 06:28:56'),
(72, 'MB-1649745061', 'cash', '1', '<h4>IslamHossain</h4> islamhossainwork@gmail.com &nbsp; 01914441334', 'khulna', '200', '<tr><td><img src=\"https://melalifestyle.store/uploads/product_1648729128_48.jpg\" style=\"width:50px; height:50px;\"></td><td>KAMIZ</td><td>1200</td><td>1</td><td>1200</td></tr>', '1200', '0', '1200', 'n/a', 0, 0, '2022-04-05 06:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `template` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_schema` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `template`, `title`, `content`, `thumb`, `meta_key`, `meta_des`, `meta_schema`, `status`, `created_at`, `updated_at`) VALUES
(33, 'contact', 'Contact Us', 'Contact Us', '', 'Contact Us', 'Contact Us', 'Contact Us', 0, '2022-02-28 07:11:42', '0000-00-00 00:00:00'),
(40, 'default', 'FAQS', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p>', 'page_1645948077_Mela-Bangladesh-(Logo).png', 'IMPORT', 'IMPORT', 'IMPORT', 0, '2022-02-27 07:48:01', '0000-00-00 00:00:00'),
(42, 'default', 'SIZE GUIDE', '<p style=\"list-style: none; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); line-height: 1.6; font-family: Lato, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem atque mollitia repudiandae maiores sit aspernatur, aliquid magnam quae et unde natus architecto optio deserunt ullam accusantium temporibus commodi eum ab officiis. Unde soluta ad temporibus hic, necessitatibus eos nisi iure minus repudiandae molestiae rem tenetur accusantium illum aperiam dignissimos sunt consequatur error reprehenderit odit ut obcaecati? Illum facilis cupiditate eaque vitae nihil, praesentium, iusto sequi quis deserunt animi inventore recusandae fuga vero aspernatur adipisci ipsum. Deserunt architecto accusamus atque assumenda, alias eveniet rem cupiditate similique nobis, vero ex laudantium optio possimus minus laborum autem nihil officia beatae libero nam. Enim.</p><p style=\"list-style: none; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); line-height: 1.6; font-family: Lato, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem atque mollitia repudiandae maiores sit aspernatur, aliquid magnam quae et unde natus architecto optio deserunt ullam accusantium temporibus commodi eum ab officiis. Unde soluta ad temporibus hic, necessitatibus eos nisi iure minus repudiandae molestiae rem tenetur accusantium illum aperiam dignissimos sunt consequatur error reprehenderit odit ut obcaecati? Illum facilis cupiditate eaque vitae nihil, praesentium, iusto sequi quis deserunt animi inventore recusandae fuga vero aspernatur adipisci ipsum. Deserunt architecto accusamus atque assumenda, alias eveniet rem cupiditate similique nobis, vero ex laudantium optio possimus minus laborum autem nihil officia beatae libero nam. Enim.</p>', 'page_1645948051_Mela-Bangladesh-(Logo).png', 'CMR', 'CMR', 'CMR', 0, '2022-02-27 07:47:31', '0000-00-00 00:00:00'),
(44, 'default', 'OUR STORY', '<p style=\"list-style: none; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); line-height: 1.6; font-family: Lato, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem atque mollitia repudiandae maiores sit aspernatur, aliquid magnam quae et unde natus architecto optio deserunt ullam accusantium temporibus commodi eum ab officiis. Unde soluta ad temporibus hic, necessitatibus eos nisi iure minus repudiandae molestiae rem tenetur accusantium illum aperiam dignissimos sunt consequatur error reprehenderit odit ut obcaecati? Illum facilis cupiditate eaque vitae nihil, praesentium, iusto sequi quis deserunt animi inventore recusandae fuga vero aspernatur adipisci ipsum. Deserunt architecto accusamus atque assumenda, alias eveniet rem cupiditate similique nobis, vero ex laudantium optio possimus minus laborum autem nihil officia beatae libero nam. Enim.</p><p style=\"list-style: none; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); line-height: 1.6; font-family: Lato, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem atque mollitia repudiandae maiores sit aspernatur, aliquid magnam quae et unde natus architecto optio deserunt ullam accusantium temporibus commodi eum ab officiis. Unde soluta ad temporibus hic, necessitatibus eos nisi iure minus repudiandae molestiae rem tenetur accusantium illum aperiam dignissimos sunt consequatur error reprehenderit odit ut obcaecati? Illum facilis cupiditate eaque vitae nihil, praesentium, iusto sequi quis deserunt animi inventore recusandae fuga vero aspernatur adipisci ipsum. Deserunt architecto accusamus atque assumenda, alias eveniet rem cupiditate similique nobis, vero ex laudantium optio possimus minus laborum autem nihil officia beatae libero nam. Enim.</p>', 'page_1645948006_Mela-Bangladesh-(Logo).png', 'TRADING', 'TRADING', 'TRADING', 0, '2022-02-27 07:46:50', '0000-00-00 00:00:00'),
(45, 'default', 'RETURN POLICY', '<ul class=\"center-text\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(34, 34, 34); font-family: Montserrat;\"><li style=\"list-style: none; padding-bottom: 3px;\"><a href=\"file:///C:/Users/Aveenir/Desktop/Fatema%20Jannat%20AVEENIR%20IT/mela_bangladesh_final_design_20_02_2022/index.html#\" style=\"color: rgb(88, 87, 87); text-decoration: none; transition: all 0.4s ease-in-out 0s; font-size: 12px; text-transform: uppercase; font-weight: 600;\">RETURN POLICY</a></li></ul>', '', 'Support', 'Support', 'Support', 0, '2022-02-27 07:47:07', '0000-00-00 00:00:00'),
(48, 'default', 'SHIPPING INFORMATION', '<p>Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 Test page 101 <br></p>', 'page_1644898048_Fotor-AI-photo-enhancement-tool.webp', 'Test page 101 ', 'Test page 101 ', 'Test page 101 ', 0, '2022-02-27 07:46:14', '0000-00-00 00:00:00'),
(49, 'default', 'NEW', '<p>NEW<br></p>', 'page_1646112039_p_sq_5.jpg', 'NEW', 'NEW', 'NEW', 0, '2022-03-01 05:20:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `thumb` text NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_schema` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat_id`, `tags`, `title`, `content`, `thumb`, `meta_key`, `meta_des`, `meta_schema`, `status`, `created_at`, `updated_at`) VALUES
(3, '1', '', 'Test Page 101 ', 'Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 ', '003.jpg', 'Test Page 101 Test Page 101 ', 'Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 ', '', 0, '2022-01-10 08:44:18', '2022-01-02 08:41:05'),
(4, '1', '', 'Test Page 202 ', 'Test Page 202 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 ', '003.jpg', 'Test Page 101 Test Page 101 ', 'Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 202 ', '', 0, '2022-01-10 08:44:24', '2022-01-02 08:41:05'),
(5, '7', '', 'Test Page 303 ', 'Test Page 303 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 ', 'post_1648977533_size_guide_1648127303_Size Chart.jpg', 'Test Page 101 Test Page 101 ', 'Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 303 ', '', 0, '2022-04-03 09:18:53', '2022-01-02 08:41:05'),
(6, '6', '', 'Test Page 505', 'Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 101 ', 'post_1648977515_size_guide_1648127303_Size Chart.jpg', 'Test Page 101 Test Page 101 ', 'Test Page 101 Test Page 101 Test Page 101 Test Page 101 Test Page 404 ', '', 0, '2022-04-03 09:18:35', '2022-01-02 08:41:05'),
(10, '6', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy ', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'post_1642929809_45678.jpg', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy ', 'Lorem Ipsum is simply dummy ', 0, '2022-01-23 09:23:29', '0000-00-00 00:00:00'),
(11, '6', 'Test post 101 ', 'Test post 101 ', '<p>Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 Test post 101 <br></p>', 'post_1644898706_56454.webp', 'Test post 101 ', 'Test post 101 ', 'Test post 101 ', 0, '2022-02-15 04:18:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `size_description` text NOT NULL,
  `shipping_details` text NOT NULL,
  `return_policy` text NOT NULL,
  `thumb` text NOT NULL,
  `product_gallery` text NOT NULL,
  `tags` text NOT NULL,
  `media_html` text NOT NULL,
  `buy_price` varchar(255) NOT NULL,
  `sell_price` varchar(255) NOT NULL,
  `offer_price` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `shipping_inside_city` varchar(255) NOT NULL,
  `shipping_outside_city` varchar(255) NOT NULL,
  `shipping_outside_country` varchar(255) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_schema` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `trend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `cat_id`, `product_code`, `product_color`, `product_size`, `title`, `description`, `short_description`, `size_description`, `shipping_details`, `return_policy`, `thumb`, `product_gallery`, `tags`, `media_html`, `buy_price`, `sell_price`, `offer_price`, `unit`, `shipping_inside_city`, `shipping_outside_city`, `shipping_outside_country`, `meta_key`, `meta_des`, `meta_schema`, `status`, `created_at`, `updated_at`, `trend`) VALUES
(61, '27', '1', 'Red', '38-40-46-', 'Red Kamiz', '<p>This is very beautiful dress.</p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648721123_36.jpg', 'pro_11648721123_20.jpg##pro_21648721123_22.jpg##pro_31648721123_35.jpg##pro_41648721123_36.jpg##pro_51648721123_41.jpg##', 'N/a', '', '1000', '1500', '1200', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 10:17:02', '0000-00-00 00:00:00', 0),
(62, '21', '2', 'Blue', '32-34-36-38-46-50-', 'Blue Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648721350_37.jpg', 'pro_11648721350_46.jpg##pro_21648721350_47.jpg##', 'N/a', '', '500', '1000', '800', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 10:17:22', '0000-00-00 00:00:00', 0),
(63, '19', '3', 'Green', '32-36-42-46-50-52-', 'Green Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648721723_14.jpg', 'pro_11648721723_7.jpg##', 'N/a', '', '700', '1000', '950', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 10:15:23', '0000-00-00 00:00:00', 0),
(64, '18', '4', 'Sky', '34-40-44-48-50-', 'Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648722081_21.jpg', 'pro_11648722081_32.jpg##', 'N/a', '', '700', '1000', '950', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 10:24:35', '0000-00-00 00:00:00', 0),
(67, '17', '5', 'Yellow', '32-34-40-46-50-', 'Yellow Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648722508_7.jpg', 'pro_11648722508_23.jpg##pro_21648722508_25.jpg##', 'N/a', '', '900', '1500', '1200', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 10:28:28', '0000-00-00 00:00:00', 0),
(68, '16', '6', 'Pink', '32-38-44-48-52-', 'Pink Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648722871_1.jpg', 'pro_11648722871_7.jpg##', 'N/a', '', '600', '1200', '1000', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 10:34:31', '0000-00-00 00:00:00', 0),
(69, 'Default', '7', 'Black', '38-', 'ELOISE DRESS', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648723149_p1.jpg', 'pg_11648969165_p1.jpg##pg_21648969165_p2.jpg##pg_31648969165_p3.jpg##', 'N/a', '', '800', '1500', '1100', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-04-03 06:59:25', '0000-00-00 00:00:00', 3),
(70, 'Default', '8', 'Black', '32-34-40-44-48-50-52-', 'PIA DRESS', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648723451_p2.jpg', 'pro_11648723451_p1.jpg##pro_21648723451_p3.jpg##', 'N/a', '', '400', '1000', '900', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', 3),
(71, 'Default', '7', 'Purple', '38-44-46-50-', 'CARLY DRESS', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648725047_p3.jpg', 'pro_11648725047_p1.jpg##pro_21648725047_p2.jpg##', 'N/a', '', '800', '1700', '1500', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 11:10:47', '0000-00-00 00:00:00', 3),
(72, 'Default', '8', 'Black', '36-40-44-50-', 'Black Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648725851_30.jpg', 'pro_11648725851_8.jpg##pro_21648725851_9.jpg##pro_31648725851_13.jpg##pro_41648725851_19.jpg##pro_51648725851_26.jpg##pro_61648725851_27.jpg##pro_71648725851_31.jpg##pro_81648725851_44.jpg##', 'N/a', '', '800', '1400', '1200', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 11:24:11', '0000-00-00 00:00:00', 1),
(73, 'Default', '9', 'Purple', '38-42-48-52-', 'Purple Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648727247_5.jpg', 'pro_11648727247_3.jpg##pro_21648727247_17.jpg##pro_31648727247_29.jpg##', 'N/a', '', '600', '1200', '1000', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 11:47:27', '0000-00-00 00:00:00', 2),
(74, 'Default', '10', 'White', '32-40-44-48-', 'White Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648727670_6.jpg', 'pro_11648727670_16.jpg##pro_21648727670_18.jpg##pro_31648727670_24.jpg##pro_41648727670_45.jpg##', 'N/a', '', '300', '800', '750', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 11:54:30', '0000-00-00 00:00:00', 1),
(75, 'Default', '11', 'Pink', '36-38-40-46-48-', 'Pink Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648727964_38.jpg', 'pro_11648727934_40.jpg##', 'N/a', '', '800', '1400', '1200', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 11:59:24', '0000-00-00 00:00:00', 1),
(76, 'Default', '8', 'Maroon', '36-40-44-48-', 'Maroon Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648728283_20.jpg', 'pro_11648728283_11.jpg##pro_21648728283_22.jpg##pro_31648728283_41.jpg##', 'N/a', '', '600', '1300', '1100', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 12:04:43', '0000-00-00 00:00:00', 2),
(77, 'Default', '13', 'Brown', '36-42-46-50-', 'Brown Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648728493_19.jpg', 'pro_11648728493_10.jpg##pro_21648728493_42.jpg##', 'N/a', '', '300', '800', '1000', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 12:08:13', '0000-00-00 00:00:00', 2),
(78, 'Default', '7', 'Gray', '42-44-48-50-', 'Gray Kamiz', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648729106_9.jpg', 'pro_11648729106_8.jpg##pro_21648729106_31.jpg##', 'N/a', '', '400', '1000', '950', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 12:18:26', '0000-00-00 00:00:00', 1),
(79, 'Default', '14', 'Voilet', '38-44-48-', 'Kamiz ', '<p>This is very beautiful dress.<br></p>', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'This is very beautiful dress.', 'product_1648729128_48.jpg', 'pro_11648729128_3.jpg##pro_21648729128_15.jpg##', 'N/a', '', '700', '1500', '1200', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-03-31 12:18:48', '0000-00-00 00:00:00', 2),
(80, '27', '2', 'Merun', '32-34-36-38-40-', 'Merun Dress', '<p>This is a beautiful dress.</p>', 'This is a beautiful dress.', 'This is a beautiful dress.', 'This is a beautiful dress.', 'This is a beautiful dress.', 'product_1649143059_274819517_1613110989049006_7597226742383028760_n.jpg', 'pro_11649143059_274732728_1613109519049153_3608640287883344554_n.jpg##pro_21649143059_274819517_1613110989049006_7597226742383028760_n.jpg##pro_31649143059_275432001_1618591975167574_5534708106099662022_n.jpg##', 'N/a', '', '2000', '1500', '1400', 'pcs', '', '', '', 'Test', 'Test', 'Test', 0, '2022-04-05 07:17:39', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_schema` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`id`, `title`, `description`, `thumb`, `meta_key`, `meta_des`, `meta_schema`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Dresses', 'Dresses Dresses Dresses', 'procat_1646805569_s3.jpg', 'Dresses', '', '', 0, '2022-03-09 05:59:29', '0000-00-00 00:00:00'),
(17, 'Lounge', 'Lounge Lounge Lounge', 'procat_1646805564_s2.png', 'Lounge', '', '', 0, '2022-03-09 05:59:24', '0000-00-00 00:00:00'),
(18, 'Top', 'Top TopTop', 'procat_1646805555_s2.jpg', 'Top', '', '', 0, '2022-03-09 05:59:15', '0000-00-00 00:00:00'),
(19, 'Bottom', 'Bottom Bottom Bottom', 'procat_1646805547_s1.png', 'Bottom', '', '', 0, '2022-03-09 05:59:07', '0000-00-00 00:00:00'),
(21, 'Sleeve', 'Sleeve Sleeve Sleeve', 'procat_1646805520_p3.jpg', 'Sleeve', '', '', 0, '2022-03-09 05:58:40', '0000-00-00 00:00:00'),
(27, 'All', 'All All All.', 'procat_1646805514_p2.jpg', 'All', '', '', 0, '2022-03-09 05:58:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_size`
--

CREATE TABLE `tbl_product_size` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_size`
--

INSERT INTO `tbl_product_size` (`id`, `title`, `size`, `status`, `created_at`) VALUES
(1, 'Size 32', '32', 0, '2022-03-27 11:38:11'),
(5, 'Size 34', '34', 0, '2022-03-27 11:57:32'),
(6, 'Size 36', '36', 0, '2022-03-27 11:58:05'),
(7, 'Size 38', '38', 0, '2022-03-27 11:58:31'),
(8, 'Size 40', '40', 0, '2022-03-27 11:58:48'),
(9, ' Size 42', '42', 0, '2022-03-27 11:59:01'),
(10, ' Size 44', '44', 0, '2022-03-27 11:59:17'),
(11, 'Size 46', '46', 0, '2022-03-27 11:59:30'),
(12, ' Size 48', '48', 0, '2022-03-27 11:59:43'),
(13, ' Size 50', '50', 0, '2022-03-27 11:59:54'),
(14, 'Size 52', '52', 0, '2022-03-27 12:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping_charge`
--

CREATE TABLE `tbl_shipping_charge` (
  `id` int(11) NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `charge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_shipping_charge`
--

INSERT INTO `tbl_shipping_charge` (`id`, `district`, `charge`, `status`, `created_at`) VALUES
(1, 'Dhaka', '80', 0, '2022-04-03 09:14:17'),
(4, 'Gazipur', '100', 0, '2022-03-24 13:07:41'),
(5, 'khulna', '200', 0, '2022-04-04 09:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siteinfo`
--

CREATE TABLE `tbl_siteinfo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `logo_header` varchar(255) NOT NULL,
  `logo_footer` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `size_guide` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `web_link` text NOT NULL,
  `map_html` text NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_schema` text NOT NULL,
  `license` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siteinfo`
--

INSERT INTO `tbl_siteinfo` (`id`, `title`, `name`, `email`, `phone`, `fax`, `address`, `description`, `logo_header`, `logo_footer`, `icon`, `size_guide`, `copyright`, `web_link`, `map_html`, `meta_key`, `meta_des`, `meta_schema`, `license`, `status`, `created_at`, `update_at`) VALUES
(1, 'Ci4 CMS', 'Ci4 CMS', 'info@islamhossain.info', '01710001337', '+1 323 555 1234 </br>\r\n+1 267 555 12342', 'Dhaka - 1207 ', 'Ci4 CMS', 'logoh_1650662717_logo.png', 'logof_1650662717_logo.png', 'icon_1650662717_logo.png', 'size_guide_1648977366_size_guide_1648127303_Size Chart.jpg', '', 'https://islamhossain.info', 'n/a', 'meta_key', 'meta_des', 'meta_schema', 'n/a', 0, '2022-04-26 04:13:48', '2021-12-27 10:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `link_url` text NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_schema` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `type`, `title`, `content`, `thumb`, `link_url`, `meta_key`, `meta_des`, `meta_schema`, `status`, `created_at`, `updated_at`) VALUES
(22, 'thumb', 'slider 01 ', 'slider 01 ', 'slider_1648054567_slider1.jpg', 'slider 01 ', 'slider 01 ', 'slider 01 ', '', 0, '2022-03-23 16:56:07', '0000-00-00 00:00:00'),
(24, 'thumb', 'slider 03  ', 'slider 02', 'slider_1648054552_slider2.jpg', 'slider 02', 'slider 02', 'slider 02', '', 0, '2022-03-23 16:55:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ux_type` varchar(255) NOT NULL,
  `ux_html` text NOT NULL,
  `link_url` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `title`, `ux_type`, `ux_html`, `link_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Facebook', 'Icon', '<i class=\"fab fa-facebook\"></i>', 'https://www.facebook.com/', 0, '2022-04-03 09:02:14', '0000-00-00 00:00:00'),
(13, 'Youtube', 'Icon', '<i class=\"fab fa-youtube\"></i>', 'https://youtube.com/', 1, '2022-02-27 07:45:22', '0000-00-00 00:00:00'),
(14, 'Twitter', 'Icon', '<i class=\"fab fa-twitter\"></i>', 'https://twitter.com/', 1, '2022-02-27 07:45:29', '0000-00-00 00:00:00'),
(16, 'Instagram', 'Icon', '<i class=\"fab fa-instagram\"></i>', 'https://instagram.com/', 0, '2022-02-10 11:20:18', '0000-00-00 00:00:00'),
(17, 'Linked-in', 'Icon', '<i class=\"fab fa-linkedin\"></i>', 'https://linked-id.com/', 1, '2022-02-27 07:45:25', '0000-00-00 00:00:00'),
(19, 'Whatsapp', 'Icon', '<i class=\"fab fa-whatsapp\"></i>', 'https://whatsapp.com/', 1, '2022-02-05 11:18:03', '0000-00-00 00:00:00'),
(20, 'Pinterest', 'Icon', '<i class=\"fab fa-pinterest\"></i>', 'https://pinterest.com/', 0, '2022-02-27 07:45:32', '0000-00-00 00:00:00'),
(21, 'Snapchat', 'Icon', '<i class=\"fab fa-snapchat\"></i>', 'https://snapchat.com/', 1, '2022-02-27 08:29:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `stock_key` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `buy_price` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`id`, `product_id`, `stock_key`, `product_size`, `quantity`, `buy_price`, `details`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(26, '53', '5340', '40', '0', '0', '', 0, '2022-03-28 09:40:28', '0000-00-00 00:00:00', ''),
(27, '53', '5342', '42', '0', '0', '', 0, '2022-03-28 09:40:28', '0000-00-00 00:00:00', ''),
(28, '54', '5440', '40', '0', '0', '', 0, '2022-03-28 09:43:35', '0000-00-00 00:00:00', ''),
(29, '54', '5442', '42', '0', '0', '', 0, '2022-03-28 09:43:35', '0000-00-00 00:00:00', ''),
(30, '54', '5446', '46', '0', '0', '', 0, '2022-03-28 09:43:35', '0000-00-00 00:00:00', ''),
(31, '54', '5448', '48', '0', '0', '', 0, '2022-03-28 09:43:35', '0000-00-00 00:00:00', ''),
(32, '54', '5452', '52', '06', '6000', '', 0, '2022-03-28 09:43:35', '0000-00-00 00:00:00', ''),
(33, '55', '5532', '32', '05', '10000', '', 0, '2022-03-28 09:45:52', '0000-00-00 00:00:00', ''),
(34, '55', '5534', '34', '04', '8000', '', 0, '2022-03-28 09:45:52', '0000-00-00 00:00:00', ''),
(35, '55', '5538', '38', '0', '0', '', 0, '2022-03-28 09:45:52', '0000-00-00 00:00:00', ''),
(36, '55', '5542', '42', '03', '6000', '', 0, '2022-03-28 09:45:52', '0000-00-00 00:00:00', ''),
(37, '55', '5546', '46', '0', '0', '', 0, '2022-03-28 09:45:52', '0000-00-00 00:00:00', ''),
(38, '55', '5550', '50', '07', '14000', '', 0, '2022-03-28 09:45:52', '0000-00-00 00:00:00', ''),
(39, '56', '5640', '40', '0', '0', '', 0, '2022-03-28 09:47:59', '0000-00-00 00:00:00', ''),
(40, '57', '5732', '32', '01', '8000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(41, '57', '5734', '34', '0', '0', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(42, '57', '5736', '36', '02', '16000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(43, '57', '5738', '38', '03', '24000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(44, '57', '5740', '40', '04', '32000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(45, '57', '5742', '42', '05', '40000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(46, '57', '5744', '44', '06', '48000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(47, '57', '5746', '46', '07', '56000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(48, '57', '5748', '48', '08', '64000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(49, '57', '5750', '50', '09', '72000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(50, '57', '5752', '52', '010', '80000', '', 0, '2022-03-28 09:52:33', '0000-00-00 00:00:00', ''),
(51, '58', '5840', '40', '0', '0', '', 0, '2022-03-28 09:54:53', '0000-00-00 00:00:00', ''),
(52, '58', '5842', '42', '0', '0', '', 0, '2022-03-28 09:54:53', '0000-00-00 00:00:00', ''),
(53, '58', '5844', '44', '0', '0', '', 0, '2022-03-28 09:54:53', '0000-00-00 00:00:00', ''),
(54, '59', '5938', '38', '0', '0', '', 0, '2022-03-28 09:57:14', '0000-00-00 00:00:00', ''),
(55, '59', '5940', '40', '0', '0', '', 0, '2022-03-28 09:57:14', '0000-00-00 00:00:00', ''),
(56, '59', '5942', '42', '0', '0', '', 0, '2022-03-28 09:57:14', '0000-00-00 00:00:00', ''),
(57, '60', '6032', '32', '4', '2400', '', 0, '2022-03-28 10:00:40', '0000-00-00 00:00:00', ''),
(58, '60', '6036', '36', '0', '0', '', 0, '2022-03-28 10:00:40', '0000-00-00 00:00:00', ''),
(59, '60', '6032', '32', '05', '', '', 0, '2022-03-28 10:01:12', '0000-00-00 00:00:00', ''),
(60, '60', '6036', '36', '5', '', '', 0, '2022-03-28 10:01:12', '0000-00-00 00:00:00', ''),
(61, '61', '6138', '38', '0', '0', '', 0, '2022-03-31 10:05:23', '0000-00-00 00:00:00', ''),
(62, '61', '6140', '40', '0', '0', '', 0, '2022-03-31 10:05:23', '0000-00-00 00:00:00', ''),
(63, '61', '6146', '46', '0', '0', '', 0, '2022-03-31 10:05:23', '0000-00-00 00:00:00', ''),
(64, '62', '6232', '32', '02', '1000', '', 0, '2022-03-31 10:09:10', '0000-00-00 00:00:00', ''),
(65, '62', '6234', '34', '05', '2500', '', 0, '2022-03-31 10:09:10', '0000-00-00 00:00:00', ''),
(66, '62', '6236', '36', '06', '3000', '', 0, '2022-03-31 10:09:10', '0000-00-00 00:00:00', ''),
(67, '62', '6238', '38', '07', '3500', '', 0, '2022-03-31 10:09:10', '0000-00-00 00:00:00', ''),
(68, '62', '6246', '46', '0', '0', '', 0, '2022-03-31 10:09:10', '0000-00-00 00:00:00', ''),
(69, '62', '6250', '50', '0', '0', '', 0, '2022-03-31 10:09:10', '0000-00-00 00:00:00', ''),
(70, '63', '6332', '32', '0', '0', '', 0, '2022-03-31 10:15:23', '0000-00-00 00:00:00', ''),
(71, '63', '6336', '36', '0', '0', '', 0, '2022-03-31 10:15:23', '0000-00-00 00:00:00', ''),
(72, '63', '6342', '42', '0', '0', '', 0, '2022-03-31 10:15:23', '0000-00-00 00:00:00', ''),
(73, '63', '6346', '46', '0', '0', '', 0, '2022-03-31 10:15:23', '0000-00-00 00:00:00', ''),
(74, '63', '6350', '50', '0', '0', '', 0, '2022-03-31 10:15:23', '0000-00-00 00:00:00', ''),
(75, '63', '6352', '52', '0', '0', '', 0, '2022-03-31 10:15:23', '0000-00-00 00:00:00', ''),
(76, '67', '6732', '32', '08', '7200', '', 0, '2022-03-31 10:28:28', '0000-00-00 00:00:00', ''),
(77, '67', '6734', '34', '07', '6300', '', 0, '2022-03-31 10:28:28', '0000-00-00 00:00:00', ''),
(78, '67', '6740', '40', '0', '0', '', 0, '2022-03-31 10:28:28', '0000-00-00 00:00:00', ''),
(79, '67', '6746', '46', '0', '0', '', 0, '2022-03-31 10:28:28', '0000-00-00 00:00:00', ''),
(80, '67', '6750', '50', '05', '4500', '', 0, '2022-03-31 10:28:28', '0000-00-00 00:00:00', ''),
(81, '68', '6832', '32', '01', '600', '', 0, '2022-03-31 10:34:31', '0000-00-00 00:00:00', ''),
(82, '68', '6838', '38', '0', '0', '', 0, '2022-03-31 10:34:31', '0000-00-00 00:00:00', ''),
(83, '68', '6844', '44', '0', '0', '', 0, '2022-03-31 10:34:31', '0000-00-00 00:00:00', ''),
(84, '68', '6848', '48', '02', '1200', '', 0, '2022-03-31 10:34:31', '0000-00-00 00:00:00', ''),
(85, '68', '6852', '52', '0', '0', '', 0, '2022-03-31 10:34:31', '0000-00-00 00:00:00', ''),
(86, '69', '6938', '38', '0', '0', '', 0, '2022-03-31 10:39:09', '0000-00-00 00:00:00', ''),
(87, '70', '7032', '32', '0', '0', '', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', ''),
(88, '70', '7034', '34', '0', '0', '', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', ''),
(89, '70', '7040', '40', '0', '0', '', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', ''),
(90, '70', '7044', '44', '0', '0', '', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', ''),
(91, '70', '7048', '48', '0', '0', '', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', ''),
(92, '70', '7050', '50', '0', '0', '', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', ''),
(93, '70', '7052', '52', '0', '0', '', 0, '2022-03-31 10:44:11', '0000-00-00 00:00:00', ''),
(94, '71', '7138', '38', '0', '0', '', 0, '2022-03-31 11:10:47', '0000-00-00 00:00:00', ''),
(95, '71', '7144', '44', '0', '0', '', 0, '2022-03-31 11:10:47', '0000-00-00 00:00:00', ''),
(96, '71', '7146', '46', '0', '0', '', 0, '2022-03-31 11:10:47', '0000-00-00 00:00:00', ''),
(97, '71', '7150', '50', '02', '1600', '', 0, '2022-03-31 11:10:47', '0000-00-00 00:00:00', ''),
(98, '72', '7236', '36', '0', '0', '', 0, '2022-03-31 11:24:11', '0000-00-00 00:00:00', ''),
(99, '72', '7240', '40', '0', '0', '', 0, '2022-03-31 11:24:11', '0000-00-00 00:00:00', ''),
(100, '72', '7244', '44', '02', '1600', '', 0, '2022-03-31 11:24:11', '0000-00-00 00:00:00', ''),
(101, '72', '7250', '50', '0', '0', '', 0, '2022-03-31 11:24:11', '0000-00-00 00:00:00', ''),
(102, '73', '7338', '38', '0', '0', '', 0, '2022-03-31 11:47:27', '0000-00-00 00:00:00', ''),
(103, '73', '7342', '42', '0', '0', '', 0, '2022-03-31 11:47:27', '0000-00-00 00:00:00', ''),
(104, '73', '7348', '48', '0', '0', '', 0, '2022-03-31 11:47:27', '0000-00-00 00:00:00', ''),
(105, '73', '7352', '52', '09', '5400', '', 0, '2022-03-31 11:47:27', '0000-00-00 00:00:00', ''),
(106, '74', '7432', '32', '06', '1800', '', 0, '2022-03-31 11:54:30', '0000-00-00 00:00:00', ''),
(107, '74', '7440', '40', '0', '0', '', 0, '2022-03-31 11:54:30', '0000-00-00 00:00:00', ''),
(108, '74', '7444', '44', '0', '0', '', 0, '2022-03-31 11:54:30', '0000-00-00 00:00:00', ''),
(109, '74', '7448', '48', '0', '0', '', 0, '2022-03-31 11:54:30', '0000-00-00 00:00:00', ''),
(110, '75', '7536', '36', '0', '0', '', 0, '2022-03-31 11:58:55', '0000-00-00 00:00:00', ''),
(111, '75', '7538', '38', '0', '0', '', 0, '2022-03-31 11:58:55', '0000-00-00 00:00:00', ''),
(112, '75', '7540', '40', '0', '0', '', 0, '2022-03-31 11:58:55', '0000-00-00 00:00:00', ''),
(113, '75', '7546', '46', '0', '0', '', 0, '2022-03-31 11:58:55', '0000-00-00 00:00:00', ''),
(114, '75', '7548', '48', '0', '0', '', 0, '2022-03-31 11:58:55', '0000-00-00 00:00:00', ''),
(115, '76', '7636', '36', '0', '0', '', 0, '2022-03-31 12:04:43', '0000-00-00 00:00:00', ''),
(116, '76', '7640', '40', '0', '0', '', 0, '2022-03-31 12:04:43', '0000-00-00 00:00:00', ''),
(117, '76', '7644', '44', '0', '0', '', 0, '2022-03-31 12:04:43', '0000-00-00 00:00:00', ''),
(118, '76', '7648', '48', '0', '0', '', 0, '2022-03-31 12:04:43', '0000-00-00 00:00:00', ''),
(119, '77', '7736', '36', '0', '0', '', 0, '2022-03-31 12:08:13', '0000-00-00 00:00:00', ''),
(120, '77', '7742', '42', '0', '0', '', 0, '2022-03-31 12:08:13', '0000-00-00 00:00:00', ''),
(121, '77', '7746', '46', '0', '0', '', 0, '2022-03-31 12:08:13', '0000-00-00 00:00:00', ''),
(122, '77', '7750', '50', '0', '0', '', 0, '2022-03-31 12:08:13', '0000-00-00 00:00:00', ''),
(123, '78', '7842', '42', '0', '0', '', 0, '2022-03-31 12:18:26', '0000-00-00 00:00:00', ''),
(124, '78', '7844', '44', '0', '0', '', 0, '2022-03-31 12:18:26', '0000-00-00 00:00:00', ''),
(125, '78', '7848', '48', '0', '0', '', 0, '2022-03-31 12:18:26', '0000-00-00 00:00:00', ''),
(126, '78', '7850', '50', '0', '0', '', 0, '2022-03-31 12:18:26', '0000-00-00 00:00:00', ''),
(127, '79', '7938', '38', '0', '0', '', 0, '2022-03-31 12:18:48', '0000-00-00 00:00:00', ''),
(128, '79', '7944', '44', '0', '0', '', 0, '2022-03-31 12:18:48', '0000-00-00 00:00:00', ''),
(129, '79', '7948', '48', '0', '0', '', 0, '2022-03-31 12:18:48', '0000-00-00 00:00:00', ''),
(130, '70', '7032', '32', '02', '', '', 0, '2022-04-03 09:08:11', '0000-00-00 00:00:00', ''),
(131, '70', '7034', '34', '08', '', '', 0, '2022-04-03 09:08:11', '0000-00-00 00:00:00', ''),
(132, '70', '7040', '40', '01', '', '', 0, '2022-04-03 09:08:11', '0000-00-00 00:00:00', ''),
(133, '70', '7044', '44', '015', '', '', 0, '2022-04-03 09:08:11', '0000-00-00 00:00:00', ''),
(134, '70', '7048', '48', '05', '', '', 0, '2022-04-03 09:08:11', '0000-00-00 00:00:00', ''),
(135, '70', '7050', '50', '06', '', '', 0, '2022-04-03 09:08:11', '0000-00-00 00:00:00', ''),
(136, '70', '7052', '52', '01', '', '', 0, '2022-04-03 09:08:11', '0000-00-00 00:00:00', ''),
(137, '79', '7938', '38', '12', '', '', 0, '2022-04-05 06:49:33', '0000-00-00 00:00:00', ''),
(138, '79', '7944', '44', '10', '', '', 0, '2022-04-05 06:49:33', '0000-00-00 00:00:00', ''),
(139, '79', '7948', '48', '25', '', '', 0, '2022-04-05 06:49:33', '0000-00-00 00:00:00', ''),
(140, '80', '8032', '32', '0', '0', '', 0, '2022-04-05 07:17:39', '0000-00-00 00:00:00', ''),
(141, '80', '8034', '34', '0', '0', '', 0, '2022-04-05 07:17:39', '0000-00-00 00:00:00', ''),
(142, '80', '8036', '36', '0', '0', '', 0, '2022-04-05 07:17:39', '0000-00-00 00:00:00', ''),
(143, '80', '8038', '38', '0', '0', '', 0, '2022-04-05 07:17:39', '0000-00-00 00:00:00', ''),
(144, '80', '8040', '40', '0', '0', '', 0, '2022-04-05 07:17:39', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store`
--

CREATE TABLE `tbl_store` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_store`
--

INSERT INTO `tbl_store` (`id`, `title`, `phone`, `email`, `address`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Store 01: Khaja market', '78945610000', 'store@mail.com', 'Khaja Market, Dhaka - 1207', 0, '2022-01-20 10:01:09', '0000-00-00 00:00:00'),
(3, 'Store 303', '78945612345', 'Store2@mail.com', 'Motijheel, Dhaka - 1208', 0, '2022-01-20 10:01:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`id`, `name`, `email`, `phone`, `description`, `status`, `created_at`) VALUES
(1, 'cmsPro ', 'reliancedeliverybd@gmail.com', '', '', 0, '2022-02-12 11:57:47'),
(2, 'test', 'testparvr1325@gmail.com', '', '', 0, '2022-02-12 11:58:13'),
(3, '', 'fate@ma.com', '', '', 0, '2022-03-03 07:56:42'),
(4, '', 'saddam@gmail.com', '', '', 0, '2022-04-03 09:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `profile` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `access` int(11) NOT NULL,
  `active_functions` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `phone`, `email`, `password`, `firstname`, `lastname`, `address`, `profile`, `role`, `access`, `active_functions`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IslamHossain', '01914441334', 'islamhossainwork@gmail.com', '$2y$10$u8ipf9qXNV1EOlyOKDrV5.JOOp7xWi6WhKih3TctVk5LEVf1Mk8SS', 'Islam', 'Hossain', '84/1 c, Shwapna Dhara Housing, Mohammadpur, Dhaka-1207.', 'profile_1644481760_03.jpg', 'SUPERADMIN', 0, 'User Options - Site Settings - Social Settings - Slider Options - Message Options - Menu Settings - Pages - Posts - Product Options - Subscribe Settings - Quote Settings - Media Options - Business Settings - Teams Options - ', 0, '2022-04-03 08:44:19', '2022-01-04 12:58:35'),
(30, 'ARahman', '01914441004', 'testthree@mail.com', '', 'Abdur', 'Rahman', 'Dhaka-1207', 'profile_1644481760_03.jpg', 'ADMIN', 0, 'Site Settings - Social Settings - Slider Options - Message Options - Menu Settings - Pages - Posts - User Options - Stock Options - ', 0, '2022-02-27 11:46:08', '0000-00-00 00:00:00'),
(32, 'MdFahad', '01618180022', 'mdfahad01618@gmail.com', '$2y$10$jxPWIV1ZFyFIH.wsHuAamOPChS71eF5uHKqgLqqwDLmIIOdlk2Zyy', 'Md', 'Fahad', 'Dhaka-1207', 'profile_1644481760_03.jpg', 'ADMIN', 0, 'Site Settings - Social Settings - Slider Options - Message Options - Menu Settings - Pages - Posts - User Options - ', 0, '2022-02-27 11:46:15', '0000-00-00 00:00:00'),
(34, 'FatemaJannat', '01853580954', 'fatemajannat.cse@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'fatema', 'jannat', 'Dhaka - 1209.', 'profile_1644481760_03.jpg', 'ADMIN', 0, 'User Options - Site Settings - Social Settings - Slider Options - Message Options - Menu Settings - Pages - Posts - Product Options - Subscribe Settings - Media Options - Business Settings - Teams Options - ', 0, '2022-02-28 05:36:29', '0000-00-00 00:00:00'),
(36, 'ImruzHasan', '02-9891499', 'imruzhasan@gmail.com', '$2y$10$u8ipf9qXNV1EOlyOKDrV5.JOOp7xWi6WhKih3TctVk5LEVf1Mk8SS', 'Imruz', 'Hasan', 'Dhaka-1207.', 'profile_1645957232_s3.jpg', 'PUBLISHER', 0, 'Pages - Posts - ', 0, '2022-02-27 10:20:32', '0000-00-00 00:00:00'),
(37, 'TestName', '01478523698', 'testname@mail.com', '$2y$10$hldgGTt/89Bjoqsn.Q3bEur3Y6OYjsXzNjVs85vSvjv23jtwBk0sC', 'Test', 'Name', '', '', 'MERCHANT', 0, '', 0, '2022-03-07 06:38:56', '0000-00-00 00:00:00'),
(38, 'TestName202', '', 'test2@mail.com', '$2y$10$qmFfnUpT5XJ48QuPG7kYaeP6./HUhFyxjmcqT3FKA3CWCpxmslKya', '', '', '', '', 'CUSTOMER', 0, '', 0, '2022-03-03 09:36:28', '0000-00-00 00:00:00'),
(39, 'saddam hossain', '01625119965', 'saddam@gmail.com', '$2y$10$NpBLbVyIxaX25yQb7ARbMOEknzA/4XQCIdXRIXJG0GgMbCo1G5vv.', '', '', '59/a Shekhertek, Farmgate', '', 'CUSTOMER', 0, '', 0, '2022-03-24 05:36:07', '0000-00-00 00:00:00'),
(40, 'SabbirShahrier', '+8801777803743', 'sabbir.shahrier@gmail.com', '$2y$10$etjWBOKhXE7UaFo0YyKFWOfWQkVqe00QvhhHPjW9Or9XmQaF4yqIe', 'Kh. Mahabub-E-Hasib', 'Shahrier', 'n/a', '', 'ADMIN', 0, 'User Options - Site Settings - Social Settings - Slider Options - Message Options - Menu Settings - Pages - Posts - Product Options - Subscribe Settings - Quote Settings - Media Options - Business Settings - Teams Options - ', 0, '2022-03-29 10:41:32', '0000-00-00 00:00:00'),
(41, 'Fatema Jannat', '', 'fatemajannat.cse@gmail.com', '$2y$10$PfYhNca0eDzt.i8FoYFycuzSP3NLK/14ftiipcnE9UxrtCq4u9Qwu', '', '', '', '', 'CUSTOMER', 0, '', 0, '2022-04-03 08:47:58', '0000-00-00 00:00:00'),
(42, 'Fatema Jannat', '', 'fatemajannat.cse@gmail.com', '$2y$10$UurR34dszjeosj1nuzAnQ.Fg60R6hiRUMxHERDfs44Rcld1emS1le', '', '', '', '', 'CUSTOMER', 0, '', 0, '2022-04-03 08:49:16', '0000-00-00 00:00:00'),
(43, 'saddam', '01625119965', 'saddam@gmail.com', '$2y$10$QIJ0sAFWK7yi6D.WRi7DW.dPYof2aOippTa20U10ZNsTpEqQ5ecs.', 'saddam', 'hossain', 'rthty', 'profile_1648977627_size_guide_1648127303_Size Chart.jpg', 'ADMIN', 1, 'User Options - Site Settings - Social Settings - Slider Options - Menu Settings - ', 0, '2022-04-03 09:21:53', '0000-00-00 00:00:00'),
(44, 'Azan', '', 'azan@gmail.com', '$2y$10$M9byXIjuECBVEc7cQTxLmeoepMmuk5hr/XoE9Kf9AscJusTzHY7ze', '', '', '', '', 'CUSTOMER', 0, '', 0, '2022-04-04 06:25:11', '0000-00-00 00:00:00'),
(45, 'saddam', '', 'saddam2@gmail.com', '$2y$10$l6.UJwuY4EbAdJcrKSl14O1ukZXlb.mX5039Hv/b02B.opoW344Dq', '', '', '', '', 'CUSTOMER', 0, '', 0, '2022-04-05 08:43:03', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_replay`
--
ALTER TABLE `tbl_contact_replay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_size`
--
ALTER TABLE `tbl_product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shipping_charge`
--
ALTER TABLE `tbl_shipping_charge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siteinfo`
--
ALTER TABLE `tbl_siteinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_store`
--
ALTER TABLE `tbl_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_contact_replay`
--
ALTER TABLE `tbl_contact_replay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_product_size`
--
ALTER TABLE `tbl_product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_shipping_charge`
--
ALTER TABLE `tbl_shipping_charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_siteinfo`
--
ALTER TABLE `tbl_siteinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `tbl_store`
--
ALTER TABLE `tbl_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
