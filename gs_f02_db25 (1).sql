-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 年 3 月 07 日 14:25
-- サーバのバージョン： 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_f02_db25`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `camp_reserve`
--

CREATE TABLE `camp_reserve` (
  `id` int(11) NOT NULL,
  `camp_ground_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `adlut_number` int(11) NOT NULL,
  `child_number` int(11) NOT NULL,
  `comment` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `camp_reserve`
--

INSERT INTO `camp_reserve` (`id`, `camp_ground_name`, `name`, `checkin`, `checkout`, `adlut_number`, `child_number`, `comment`) VALUES
(1, '蔵迫温泉さくらオートキャンプ場', 'きのこ', '2019-03-04 12:00:00', '2019-03-05 12:00:00', 1, 0, ''),
(2, '蔵迫温泉さくらオートキャンプ場', 'きのこ', '2019-03-05 12:00:00', '2019-03-06 13:00:00', 1, 1, 'たのしみです。'),
(3, '志高湖キャンプ', 'きのこ', '2019-03-04 12:00:00', '2019-03-05 16:00:00', 2, 0, '朝ごはん希望'),
(4, '志高湖キャンプ', 'きのこ2', '2019-03-10 12:00:00', '2019-03-10 14:00:00', 2, 2, '2'),
(5, '志高湖キャンプ', 'うめこ', '2019-03-08 14:00:00', '2019-03-09 11:00:00', 5, 1, '車は何台駐車可能でしょうか？'),
(6, '久住ボイボイキャンプ場', 'kkkk', '2019-03-16 12:00:00', '2019-03-09 11:00:00', 4, 1, 'チェックアウト遅くなります。');

-- --------------------------------------------------------

--
-- テーブルの構造 `goods_rental`
--

CREATE TABLE `goods_rental` (
  `id` int(11) NOT NULL,
  `set_rental` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `set_rental_number` int(11) NOT NULL,
  `rental_start` date NOT NULL,
  `rental_end` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(12, '２回目のキャンプ', 'https', '２回目らしいおもしろ荘。', '2019-02-26'),
(13, 'オートキャンプ場', 'https', 'ぴぽぽぽぽ', '2019-02-26'),
(14, '３回目のキャンプ', 'amazon.jp', 'おもろー', '2019-02-27'),
(15, '辞典', 'あまぞん', 'おもしろい', '2019-02-27');

-- --------------------------------------------------------

--
-- テーブルの構造 `jumanji_table`
--

CREATE TABLE `jumanji_table` (
  `id` int(12) NOT NULL,
  `country` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer1` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer2` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `jumanji_table`
--

INSERT INTO `jumanji_table` (`id`, `country`, `question`, `answer1`, `answer2`, `indate`) VALUES
(11, 1, '主食は？米である！', '◯', '×', '2019-02-11 13:45:13'),
(12, 1, '人口は２億万にである！', NULL, NULL, '2019-02-11 14:24:01'),
(13, 3, 'カナダの国旗の葉っぱはカエデである', NULL, NULL, '2019-02-11 14:24:27'),
(14, 4, '大統領はトランプである', NULL, NULL, '2019-02-11 14:25:00'),
(15, 5, '今冬である', NULL, NULL, '2019-02-11 14:25:15'),
(16, 6, 'インドネシアは飛行機で行かなければならない', NULL, NULL, '2019-02-11 14:25:50'),
(17, 7, 'ワインが豊富である', NULL, NULL, '2019-02-11 14:26:01'),
(18, 8, '首都はキャンベラである', NULL, NULL, '2019-02-11 14:26:24'),
(19, 9, 'あまり知られていない国である', NULL, NULL, '2019-02-11 14:26:47'),
(20, 10, '休み明けである', NULL, NULL, '2019-02-11 14:27:10'),
(21, 2, '人口は２億万にである！', NULL, NULL, '2019-02-11 15:12:02'),
(22, 13, '民主主義国家である', NULL, NULL, '2019-02-12 18:30:08'),
(24, 2, '人口は２億万にである！', NULL, NULL, '2019-02-16 14:34:28');

-- --------------------------------------------------------

--
-- テーブルの構造 `php_02table`
--

CREATE TABLE `php_02table` (
  `id` int(12) NOT NULL,
  `task` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `image` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php_02table`
--

INSERT INTO `php_02table` (`id`, `task`, `deadline`, `comment`, `image`, `indate`) VALUES
(2, '課題', '2019-02-27', 'むずかしい', NULL, '2019-02-26 19:32:29'),
(3, 'php08', '2019-02-28', '大変でした', NULL, '2019-02-26 19:33:00'),
(4, '課題', '2019-03-23', 'kkkk', 'upload/20190302070638d41d8cd98f00b204e9800998ecf8427e.png', '2019-03-02 16:06:38'),
(5, 'kadai', '2019-03-30', 'kkkk', 'upload/20190302070830d41d8cd98f00b204e9800998ecf8427e.jpeg', '2019-03-02 16:08:30'),
(6, '焼肉', '2019-03-23', 'たべたいね', NULL, '2019-03-02 16:24:22'),
(7, 'aaa', '2019-03-02', 'aaa', NULL, '2019-03-02 16:24:37'),
(8, '課題', '2019-03-23', 'dddd', NULL, '2019-03-02 17:50:29'),
(9, '唐揚げ', '2019-03-30', '食べる日', NULL, '2019-03-02 17:54:03'),
(10, 'かれー', '2019-03-30', 'かれーーーーー', NULL, '2019-03-02 18:04:37'),
(11, 'php08', '2019-03-09', 'っgっっっy\n', NULL, '2019-03-02 18:05:01'),
(12, '宿題', '2019-03-09', '頑張るよ', NULL, '2019-03-02 18:14:30'),
(13, '課題', '2019-03-16', 'dddd', NULL, '2019-03-02 18:35:31'),
(14, 'qqqqqqq', '2019-03-31', 'qqqqqqq', NULL, '2019-03-02 18:35:52'),
(15, 'キャンプ場予約', '2019-03-15', 'いいね', 'upload/20190303050914d41d8cd98f00b204e9800998ecf8427e.jpeg', '2019-03-03 14:09:14');

-- --------------------------------------------------------

--
-- テーブルの構造 `php_ajax_table`
--

CREATE TABLE `php_ajax_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php_ajax_table`
--

INSERT INTO `php_ajax_table` (`id`, `name`, `comment`, `indate`) VALUES
(1, 'かれん', 'ohayo', '2019-03-08 02:08:11'),
(2, 'umeco', 'gn', '2019-03-16 10:25:22'),
(3, 'kinoco', 'konnitiha', '2019-03-27 09:33:24');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) DEFAULT NULL,
  `life_flg` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(17, 'かに', 'かに', '1234', 0, 0),
(18, 'きききりん', 'kiki', 'kirin', 1, 0),
(19, 'gs', 'gs', 'gs', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp_reserve`
--
ALTER TABLE `camp_reserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods_rental`
--
ALTER TABLE `goods_rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumanji_table`
--
ALTER TABLE `jumanji_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php_02table`
--
ALTER TABLE `php_02table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php_ajax_table`
--
ALTER TABLE `php_ajax_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp_reserve`
--
ALTER TABLE `camp_reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `goods_rental`
--
ALTER TABLE `goods_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jumanji_table`
--
ALTER TABLE `jumanji_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `php_02table`
--
ALTER TABLE `php_02table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `php_ajax_table`
--
ALTER TABLE `php_ajax_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
