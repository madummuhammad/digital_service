-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2022 at 04:27 PM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1118394_digitalservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_partner`
--

CREATE TABLE `about_partner` (
  `id` int(11) NOT NULL,
  `logo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_partner`
--

INSERT INTO `about_partner` (`id`, `logo`) VALUES
(1, 'partner4.jpg'),
(2, 'partner6.jpg'),
(3, 'partner7.jpg'),
(4, 'partner5.jpg'),
(5, 'partner8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `logo`, `judul`, `isi`) VALUES
(1, 'icon_12.svg', 'Nama Agency 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),
(7, 'icon-4.svg', 'Nama Agency 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),
(8, 'icon-5.svg', 'Nama Agency 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua');

-- --------------------------------------------------------

--
-- Table structure for table `harga_fitur`
--

CREATE TABLE `harga_fitur` (
  `id_harga_fitur` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tagline` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_fitur`
--

INSERT INTO `harga_fitur` (`id_harga_fitur`, `nama`, `tagline`, `harga`, `id_produk`) VALUES
(1, 'Basic', 'Cocok untuk UMKM/ Bisnis baru', '2 Juta', 1),
(2, 'Medium', 'Cocok untuk Bisnis yang sedang berkembang', '3,8 juta', 1),
(3, 'Pro', 'Cocok untuk Perusahaan Yang ingin Fitur Profesional', '5,5 juta', 1),
(4, 'Basic', 'Cocok untuk UMKM/ Bisnis baru', '2,5 juta', 2),
(5, 'Medium', 'Cocok untuk Bisnis yang sedang berkembang', '4,2 juta', 2),
(6, 'Pro', 'Cocok untuk Perusahaan Yang ingin Fitur Profesional', '6 juta', 2),
(7, 'Toko Online', '', '7 Juta', 3),
(8, 'Tools System', '', '10 juta', 3),
(9, 'Lifestyle Apps', '', '15 juta', 3),
(10, 'Toko Online', '', '3 Juta', 4),
(11, 'Tools System', '', '5 juta', 4),
(12, 'Lifestyle Apps', '', '7 juta', 4),
(13, 'Basic', 'Cocok untuk UMKM/ Bisnis baru', '1 juta', 5),
(14, 'Medium', 'Bagi Anda yang sudah memiliki Website', '3.8 juta', 5),
(15, 'Pro', 'Cocok untuk Perusahaan Yang ingin Fitur Profesional', '5.5 juta', 5);

-- --------------------------------------------------------

--
-- Table structure for table `home_counter`
--

CREATE TABLE `home_counter` (
  `id` int(11) NOT NULL,
  `satu` varchar(11) NOT NULL,
  `dua` varchar(11) NOT NULL,
  `tiga` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_counter`
--

INSERT INTO `home_counter` (`id`, `satu`, `dua`, `tiga`) VALUES
(1, '100', '10', '75');

-- --------------------------------------------------------

--
-- Table structure for table `home_klien`
--

CREATE TABLE `home_klien` (
  `id` int(11) NOT NULL,
  `logo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_klien`
--

INSERT INTO `home_klien` (`id`, `logo`) VALUES
(5, 'logo5.jpg'),
(14, 'logo7.jpg'),
(16, 'logo9.jpg'),
(19, 'logo8.png'),
(22, 'logo3.jpeg'),
(23, 'logo10.jpg'),
(24, 'logo12.jpg'),
(27, 'logo15.jpg'),
(28, 'logo16.jpg'),
(29, 'logo17.jpg'),
(32, 'logo20.jpg'),
(33, 'logo21.jpg'),
(34, 'logo22.jpg'),
(35, 'logo23.jpg'),
(36, 'logo24.jpg'),
(38, 'logo26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_section2`
--

CREATE TABLE `home_section2` (
  `id` int(11) NOT NULL,
  `satu` varchar(11) NOT NULL,
  `dua` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_section2`
--

INSERT INTO `home_section2` (`id`, `satu`, `dua`) VALUES
(1, '100', '10');

-- --------------------------------------------------------

--
-- Table structure for table `isi_fitur`
--

CREATE TABLE `isi_fitur` (
  `id_isi_fitur` int(11) NOT NULL,
  `isi` text NOT NULL,
  `id_sub_fitur` int(11) NOT NULL,
  `coret` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_fitur`
--

INSERT INTO `isi_fitur` (`id_isi_fitur`, `isi`, `id_sub_fitur`, `coret`) VALUES
(1, 'Gratis Domain (.com/.id/.net/.org)', 1, 0),
(2, 'Disk Space … GB SSD', 1, 0),
(7, 'Jumlah halaman ?', 3, 0),
(8, 'RAM', 1, 0),
(10, 'CPU', 1, 0),
(11, 'Unlimited Bandwith', 1, 0),
(12, 'Gratis Domain (.com/.id/.net/.org)', 4, 0),
(13, 'Gratis Domain (.com/.id/.net/.org)', 5, 0),
(14, 'Disk Space … GB SSD', 4, 0),
(15, 'Disk Space … GB SSD', 5, 0),
(16, 'SSL Certificate (Security)', 1, 0),
(17, 'cPanel/Direct Admin', 1, 0),
(18, 'Atomatic Data Backup', 1, 1),
(19, 'Email Bisnis', 1, 0),
(20, 'Custom Design', 3, 0),
(21, 'Responsive Mobile', 3, 0),
(22, 'Revisi Minor', 3, 0),
(23, 'Desain Logo', 3, 1),
(24, 'Desain Banner/Slider', 3, 1),
(25, 'Akses Halaman Admin', 13, 0),
(26, 'Multi-Admin', 13, 0),
(27, 'Akses Kelola Konten & Statistik Pengunjung', 13, 0),
(28, 'SEO On Page (Title, Meta, Image)', 14, 0),
(29, 'Google Analytics', 14, 1),
(30, 'Google Search Console', 14, 0),
(31, 'Google My Business (Bisnisku)', 14, 1),
(32, 'Email Newsletter', 14, 1),
(33, 'Facebook Pixel', 14, 1),
(34, 'Free 1 bulan Google Ads Mgt', 14, 1),
(35, 'Integrasi WooCommerce/Shopify', 15, 0),
(36, 'Payment System', 15, 0),
(37, 'Shipping System', 15, 0),
(38, 'Membership', 15, 0),
(39, 'Google Index', 16, 0),
(42, 'Share Sosmed', 16, 0),
(43, 'Integrasi Chat Online', 16, 0),
(44, 'Update Fitur, Content & Design …. Kali/bulan', 16, 0),
(45, '1x Training Online', 16, 0),
(46, 'Tutorial General', 16, 0),
(47, 'Backup & Restore', 16, 0),
(48, 'Garansi Proyek Selesai', 16, 0),
(49, 'Free Maintenance', 16, 0),
(51, 'Free ... Artikel', 17, 0),
(52, 'Revisi Major  …. X', 17, 0),
(53, 'Promo Diskon …..% Digital Marketing', 17, 0),
(54, 'Free 3 template Landing Page', 17, 0),
(55, 'RAM', 4, 0),
(56, 'CPU', 4, 0),
(57, 'Unlimited Bandwith', 4, 0),
(58, 'SSL Certificate (Security)', 4, 0),
(59, 'cPanel/Direct Admin', 4, 0),
(60, 'Atomatic Data Backup', 4, 0),
(61, 'Email Bisnis', 4, 0),
(62, 'Jumlah halaman ?', 11, 1),
(63, 'Custom Design', 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `landing_page_logo`
--

CREATE TABLE `landing_page_logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landing_page_logo`
--

INSERT INTO `landing_page_logo` (`id`, `logo`) VALUES
(1, 'logo-1.png'),
(2, 'logo-2.png'),
(3, 'logo-3.png'),
(4, 'logo-4.png'),
(5, 'logo-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_apps`
--

CREATE TABLE `layanan_apps` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_apps`
--

INSERT INTO `layanan_apps` (`id`, `gambar`, `link`) VALUES
(2, 'img_19.jpg', 'service.com'),
(4, 'portofolio3.jpg', 'ansol.id'),
(5, 'portofolio4.jpg', 'ansol.id');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_digital_marketing`
--

CREATE TABLE `layanan_digital_marketing` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `agency` text NOT NULL,
  `tagline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_digital_marketing`
--

INSERT INTO `layanan_digital_marketing` (`id`, `gambar`, `judul`, `agency`, `tagline`) VALUES
(2, 'img_41.jpg', 'Email Marketing', 'by Agency XX', 'Dapatkan diskon s/d 30%'),
(3, 'img_42.jpg', 'FB/IG Ads', 'by Agency XX', 'Dapatkan diskon s/d 30%'),
(5, 'digital_marketing.jpg', 'Jasa Konten Artikel ', 'by Agency xxx', 'Dapatkan diskon s/d 30%'),
(6, 'digital_marketing1.jpg', 'Google Ads Management', 'by Agency XX', 'Dapatkan diskon s/d 30%');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_digital_marketing_logo`
--

CREATE TABLE `layanan_digital_marketing_logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_digital_marketing_logo`
--

INSERT INTO `layanan_digital_marketing_logo` (`id`, `logo`) VALUES
(1, 'logo-1.png'),
(2, 'logo-2.png'),
(3, 'logo-3.png'),
(4, 'logo-4.png'),
(5, 'logo-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_landing_page`
--

CREATE TABLE `layanan_landing_page` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_landing_page`
--

INSERT INTO `layanan_landing_page` (`id`, `gambar`, `link`) VALUES
(3, 'landing_page1.jpg', 'Apps.com'),
(4, 'landing_page2.jpg', 'service.com'),
(6, 'landing_page4.jpg', 'service.com'),
(7, 'landing_page5.jpg', 'Apps.com');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_website_toko_online`
--

CREATE TABLE `layanan_website_toko_online` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_website_toko_online`
--

INSERT INTO `layanan_website_toko_online` (`id`, `gambar`, `link`) VALUES
(7, 'portofolio6.jpg', 'www.totalenviro.co.id'),
(11, 'portofolio1.jpg', 'https://iibcprasmul.com/'),
(16, 'portofolio2.jpg', 'https://asricon.com');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama`) VALUES
(1, 'Website & Toko Online'),
(2, 'Custom Apps'),
(3, 'Landing Page');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `link` text NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `gambar`, `link`, `id_jenis`) VALUES
(1, 'portofolio5.jpg', 'https://totalenviro.co.id', 1),
(2, 'portofolio1.jpg', 'https://iibcprasmul.com/', 1),
(5, 'portofolio2.jpg', 'https://asricon.com', 1),
(6, 'portofolio3.jpg', 'https://bosquebarbers.com', 1),
(18, 'portofolio6.jpg', 'https://mcpp-indonesia.com', 1),
(20, 'portofolio7.jpg', 'https://viviannefayehome.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio_jenis`
--

CREATE TABLE `portofolio_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio_jenis`
--

INSERT INTO `portofolio_jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Website'),
(2, 'Toko Online'),
(3, 'Custom Apps'),
(4, 'Landing Page');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `id_paket`) VALUES
(1, 'Website', 1),
(2, 'Toko Online', 1),
(3, 'Android/Ios', 2),
(4, 'Webwiew', 2),
(5, 'Landing Page', 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_added` int(11) NOT NULL,
  `last_modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `date_added`, `last_modified`) VALUES
(1, 'Super Admin', 0, 0),
(2, 'User', 0, 0),
(3, 'User', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_fitur`
--

CREATE TABLE `sub_fitur` (
  `id_sub_fitur` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_harga_fitur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_fitur`
--

INSERT INTO `sub_fitur` (`id_sub_fitur`, `nama`, `id_harga_fitur`) VALUES
(1, 'Core Feature', 1),
(3, 'Desain', 1),
(4, 'Core Feature', 2),
(5, 'Core Feature', 3),
(6, 'Scope', 7),
(11, 'Desain', 2),
(12, 'Desain', 3),
(13, 'Fitur Kelola Website', 1),
(14, 'Fitur Bisnis', 1),
(15, 'Fitur E-Commerce', 1),
(16, 'Support', 1),
(17, 'Promo Tambahan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `gambar`) VALUES
(66, 'Admin', 'admin@gmail.com', '$2y$10$JoM5SgwG9N8p7A8UH0gXNu.iL0C46Lwd/8DzfFvPVXCJTJgu0WeyO', 1, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_partner`
--
ALTER TABLE `about_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_fitur`
--
ALTER TABLE `harga_fitur`
  ADD PRIMARY KEY (`id_harga_fitur`),
  ADD KEY `fk_paket` (`id_produk`);

--
-- Indexes for table `home_counter`
--
ALTER TABLE `home_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_klien`
--
ALTER TABLE `home_klien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section2`
--
ALTER TABLE `home_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_fitur`
--
ALTER TABLE `isi_fitur`
  ADD PRIMARY KEY (`id_isi_fitur`),
  ADD KEY `fk_sub_fitur` (`id_sub_fitur`);

--
-- Indexes for table `landing_page_logo`
--
ALTER TABLE `landing_page_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_apps`
--
ALTER TABLE `layanan_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_digital_marketing`
--
ALTER TABLE `layanan_digital_marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_digital_marketing_logo`
--
ALTER TABLE `layanan_digital_marketing_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_landing_page`
--
ALTER TABLE `layanan_landing_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_website_toko_online`
--
ALTER TABLE `layanan_website_toko_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jenis` (`id_jenis`);

--
-- Indexes for table `portofolio_jenis`
--
ALTER TABLE `portofolio_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_produk` (`id_paket`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_fitur`
--
ALTER TABLE `sub_fitur`
  ADD PRIMARY KEY (`id_sub_fitur`),
  ADD KEY `fk_harga_fitur` (`id_harga_fitur`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_partner`
--
ALTER TABLE `about_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `harga_fitur`
--
ALTER TABLE `harga_fitur`
  MODIFY `id_harga_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_counter`
--
ALTER TABLE `home_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_klien`
--
ALTER TABLE `home_klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `home_section2`
--
ALTER TABLE `home_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `isi_fitur`
--
ALTER TABLE `isi_fitur`
  MODIFY `id_isi_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `landing_page_logo`
--
ALTER TABLE `landing_page_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `layanan_apps`
--
ALTER TABLE `layanan_apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `layanan_digital_marketing`
--
ALTER TABLE `layanan_digital_marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `layanan_digital_marketing_logo`
--
ALTER TABLE `layanan_digital_marketing_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layanan_landing_page`
--
ALTER TABLE `layanan_landing_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `layanan_website_toko_online`
--
ALTER TABLE `layanan_website_toko_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `portofolio_jenis`
--
ALTER TABLE `portofolio_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_fitur`
--
ALTER TABLE `sub_fitur`
  MODIFY `id_sub_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harga_fitur`
--
ALTER TABLE `harga_fitur`
  ADD CONSTRAINT `fk_paket` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `isi_fitur`
--
ALTER TABLE `isi_fitur`
  ADD CONSTRAINT `fk_sub_fitur` FOREIGN KEY (`id_sub_fitur`) REFERENCES `sub_fitur` (`id_sub_fitur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `portofolio_jenis` (`id_jenis`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `sub_fitur`
--
ALTER TABLE `sub_fitur`
  ADD CONSTRAINT `fk_harga_fitur` FOREIGN KEY (`id_harga_fitur`) REFERENCES `harga_fitur` (`id_harga_fitur`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
