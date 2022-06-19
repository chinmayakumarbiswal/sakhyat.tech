-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 10:06 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `email`, `password`) VALUES
(1, 'Chinmaya Kumar Biswal', 'situ@chinmayakumarbiswal.in', 'Chinmaya@12345');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'GADGETS'),
(2, 'WEB'),
(3, 'TRENDING'),
(4, 'ELECTRONICS'),
(5, 'BOOKS');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `image`) VALUES
(1, 6, 'E3-2021-GAMES.jpg'),
(2, 3, 'best-smartphone-under-15000.jpg'),
(3, 2, 'best-laptop-for-video-editing-2022.jpg'),
(4, 4, 'cheap-web-hosting-india-2021.jpg'),
(5, 5, 'dusk-smart-glass.png'),
(6, 1, 'google-photos-backup-tutorial.jpg'),
(8, 15, 'best-minimalist-books-768x435.jpg'),
(9, 16, 'E3-2021-GAMES.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `category_id`) VALUES
(1, 'How to Take Backup of Google Photos', 'Google Photos has been a free storage for many users worldwide for all of their photos on their phone.\r\n\r\nEven I personally used to dump all of my photos to it and just cleanup my phone and access anywhere anytime from Google Photos cloud. I loved Google Photos but not sure why Google is ending the product and its support. Since Google Photos is ending its unlimited photo service on June 1, 2021. It’s time to take a backup of your photos to your local drive.\r\nHere is the step by step method, how to do it :\r\n\r\n1) Navigate to this URL: https://takeout.google.com\r\n2) Make sure you are logged in to your Google account.\r\n3) De-select all products\r\n4) Select Google photos\r\n5) Select option “All photo albums included”\r\n6) Select all photos which you need to download\r\n7) Scroll down and click Next step\r\n8) Select the option to export and click Create export\r\n9) Google will notify you once your archive is ready to download.\r\n\r\nGoodluck!\r\nShare the tutorial with your friends and family, who are still confused about this process.', '2022-06-07 18:53:54', 2),
(2, '10 Best Laptops for 4K Video Editing in India ??', 'Here are the 10 best high-end laptop computers for 1080p 4K 6K 8K Video editing, available right on Amazon India with free shipping.\r\nIn case you are looking for a portable computer that you can carry everywhere and still not compromise on its power and capabilities, we strongly recommend going for an Apple Laptops, for Da Vinci Resolve or Apple Final Cut Pro Editing workflow.\r\nBut if you use Adobe Premiere Pro, then it’s recommended to go for Intel i9 Windows laptops only.\r\nHere we have shortlisted a few great options for you, which are available right now on Amazon India with free shipping.\r\n\r\n2020 Apple MacBook Pro (13.3-inch/33.78 cm, Apple M1 chip with 8?core CPU and 8?core GPU, 8GB RAM, 512GB SSD) - Silver\r\n\r\n2020 Apple MacBook Air Laptop: Apple M1 chip, 13.3-inch/33.74 cm Retina Display, 8GB RAM, 256GB SSD Storage, Backlit Keyboard, FaceTime HD Camera, Touch ID. Works with iPhone/iPad; Gold\r\n\r\nAcer Predator Helios 300 11th Gen Intel Core i9-11900H 15.6 inches FHD IPS Display Gaming Laptop (16GB/1TB SSD/Windows 11 Home/6GB Graphics/NVIDIA GeForce RTX 3060/300 Hz, Black, 2.3Kg) PH315-54\r\n\r\nDell G7 7500 10th Gen Intel i9-10885H 15.6 inches FHD 300 Hz Display Gaming Laptop (16 GB/1TB SSD/NVIDIA RTX 2070 8GB Graphics/Windows 10 Home + MS Office H&S 2019) D560233WIN9B, Black, 2.5Kg\r\n\r\nASUS ROG Strix Scar 15 (2022), 15.6-inch (39.62 cms) 2K WQHD 240Hz/3ms, Core i9-12900H 12th Gen, RTX 3070 Ti 8GB Graphics, Gaming Laptop (32GB/2TB SSD/Win 11/Office 2021/Black/2.3 Kg), G533ZW-LN106WS\r\n\r\n', '2022-06-07 18:53:54', 1),
(3, '5 Best Smartphones under ?15000 in India in 2022', 'Here is the list of Best Smartphones under ?15000 in India in 2022, available on Amazon India with free shipping.\r\nThere are few things which you should consider when buying a smartphone – MEMORY, CAMERA, BATTERY, PROCESSOR, and PRICE of course. Keeping all those factors in mind, we have shortlisted a few best ones for you.\r\n\r\nOPPO A31 (Mystery Black, 6GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers\r\n\r\n\r\nSamsung Galaxy M32 (Black, 4GB RAM, 64GB | FHD+ sAMOLED 90Hz Display | 6000mAh Battery | 64MP Quad Camera\r\n\r\nRedmi Note 11 (Space Black, 6GB RAM, 64GB Storage) | 90Hz FHD+ AMOLED Display | Qualcomm® Snapdragon™ 680-6nm | Alexa Built-in | 33W Charger Included | Get 2 Months of YouTube Premium Free!\r\n\r\nRedmi Note 10T 5G (Metallic Blue, 4GB RAM, 64GB Storage) | Dual 5G | 90Hz Adaptive Refresh Rate | MediaTek Dimensity 700 7nm Processor | 22.5W Charger Included\r\n\r\nRedmi 10 Prime (Phantom Black 6GB RAM 128GB ROM |Helio G88 with extendable RAM Upto 2GB |FHD+ 90Hz Adaptive Sync Display)\r\n\r\n', '2022-06-09 17:41:52', 1),
(4, 'Cheap Web Hosting For Small Business', 'Start small and spend less. Ideal for setting up your personal website, WordPress blog or business landing page, these hosting plans are simple and affordable from those top 5 cheap web hosting providers.\r\n\r\nIf you are just starting up with a  new website, its always recommended to start small and once you start getting some good traffic load, then it makes sense to upgrade to a VPS or cloud hosting provider.\r\n\r\nChoosing  the right web hosting provider for your website can be a tedious job, as there are 100s of providers but here is our top picks whom we have personally used and also for our clients who were just starting up.\r\n\r\nBluehost\r\nInMotion Hosting\r\nHostgator\r\nLiquidWeb\r\nNamecheap\r\nBigRock', '2022-06-09 17:41:52', 2),
(5, 'DUSK -App Enabled Electrochromic Smart Sunglasses', 'Dusk is a pair of smart sunglasses with app-controlled electrochromic lenses, which allow you to adjust the tint when you want, instantly. Dusk frames also come with hidden built-in speakers and a microphone — providing crystal clear audio and voice assistance for both Apple and Android devices. Dusk’s rechargeable travel case is designed to house Apple’s AirTag, so you can track the glasses down using the Find My App on your iPhone.\r\nDusk is a breakthrough pair of smart sunglasses with app-enabled dynamic lenses, an open-ear audio system, and accessories designed to be integrated with Apple AirTags.\r\n\r\nUnlike traditional photochromic lenses (aka transitional lenses) that react to the light, Dusk’s lenses are electrochromic, allowing you to electrically adjust the tint level in just 0.1 seconds to your desired tint. It’s the same powerful technology used in luxury cars but in your sunglasses. With the Ampere App, you’ll be able to pair your frames, set the exact tint level of the lenses, and even save your preferred settings. When away from your smartphone, you can simply adjust between three tint levels via touch controls on the left-hand side of the frame or set them to adjust automatically.', '2022-06-09 17:43:14', 3),
(6, 'E3 2021 – How to Watch Online & Games Expected', 'E3 2021 is expected to shed more light on games such as Halo Infinite, new Pokemon titles, Far Cry 6, a Resident Evil reboot, a GTA 5 remaster and many, many more.\r\n\r\nThis year, the biggest reveals of E3 2021 is expected to come from the likes of Ubisoft, Microsoft, Square Enix, Take-Two, Capcom and Nintendo, while both Sony and Electronic Arts may have a few things to add in the sidelines of the event. All things considered, here’s looking at the biggest expectations we have in sight, for the upcoming four days of E3 2021.\r\nUbisoft is expected to showcase Far Cry 6, and Microsoft may unveil Halo: Infinite, among major reveals.\r\nTake-Two is likely to showcase a remastered GTA 5, while Capcom might reboot Resident Evil 4.\r\nNintendo is expected to launch the Nintendo Switch Pro, featuring a larger OLED display.', '2022-06-09 17:43:14', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
