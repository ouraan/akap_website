-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 10:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akap`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `nomor_identitas` char(16) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `id_bus` char(2) NOT NULL,
  `jadwal` date NOT NULL,
  `penumpang_umum` int(11) NOT NULL,
  `penumpang_lansia` int(11) NOT NULL,
  `total_bayar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_pemesan`, `nomor_identitas`, `no_hp`, `id_bus`, `jadwal`, `penumpang_umum`, `penumpang_lansia`, `total_bayar`) VALUES
(1, 'Rizha Alfianita', '121672817918', '089686416396', 'EX', '2022-09-10', 3, 1, 195000);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id_bus` char(2) NOT NULL,
  `nama_bus` varchar(100) NOT NULL,
  `detail_bus` text NOT NULL,
  `link_detail` varchar(200) NOT NULL,
  `harga_bus` float NOT NULL,
  `img_cover` text NOT NULL,
  `img_detail_1` text NOT NULL,
  `img_detail_2` text NOT NULL,
  `img_detail_3` text NOT NULL,
  `img_detail_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id_bus`, `nama_bus`, `detail_bus`, `link_detail`, `harga_bus`, `img_cover`, `img_detail_1`, `img_detail_2`, `img_detail_3`, `img_detail_4`) VALUES
('BS', 'Bussines', 'Bus bisnis dengan AC buat Anda yang membutuhkan fasilitas lebih lengkap. Reclining seat dan AC sangat mempengaruhi kenyamanan penumpang yang hendak bepergian jarak jauh. Untuk tempat duduknya, ada yang memakai formasi seat 2-2, ada juga yang 3-2.', 'bussines/detail_bus.php', 30000, 'https://asset.kompas.com/crops/FTHbc9RbR1TMpPu6fKJls4AJIX8=/0x15:1280x868/780x390/data/photo/2020/03/07/5e63039b73124.jpg', 'https://awsimages.detik.net.id/community/media/visual/2017/06/05/45af118c-9796-4c40-897e-c32b31e90b47_169.jpg?w=620', 'http://blog.redbus.id/wp-content/uploads/2021/08/shutterstock_19287817.jpg', 'https://awsimages.detik.net.id/community/media/visual/2017/06/05/45af118c-9796-4c40-897e-c32b31e90b47_169.jpg?w=620', 'http://blog.redbus.id/wp-content/uploads/2021/08/shutterstock_19287817.jpg'),
('EC', 'Economy', 'Dibandingkan kelas bus lainnya, bus ekonomi adalah yang paling murah dan memiliki peminat banyak. Anda mungkin tak akan menerima fasilitas seperti AC, tetapi sejumlah penyedia bus sudah melengkapi armadanya dengan reclining atau footrest. Semenetara formasi kursi penumpang dalam kabinnya adalah 3-2.', 'economy/detail_bus.php', 10000, 'https://cdn.bookaway.com/media/files/5dd28202ded99b3e3f5f176a.jpeg?width=620', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-11732929/trac_bus_services_sewa_bus_pariwsata_48-59_seat_jakarta_-_padang_full04_puz8qmok.jpg', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-11732929/trac_bus_services_sewa_bus_pariwsata_48-59_seat_jakarta_-_padang_full03_sdn2kbex.jpg', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-11732929/trac_bus_services_sewa_bus_pariwsata_48-59_seat_jakarta_-_padang_full04_puz8qmok.jpg', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-11732929/trac_bus_services_sewa_bus_pariwsata_48-59_seat_jakarta_-_padang_full03_sdn2kbex.jpg'),
('EX', 'Executive', 'Dengan konfigurasi seat 2-1 yang nyaman dan empuk. Anda akan menerima sejumlah fasilitas dan layanan premium yang tak akan didapatkan di kelas bus lainnya.', 'executive/detail_bus.php', 50000, 'https://www.busharapanjaya.com/file/exec-1.jpg', 'https://asset.kompas.com/crops/BqyKXWcwtMXEKUxQB4FVDDv5j9A=/39x0:1119x720/750x500/data/photo/2019/07/21/5d3453d610cdd.jpeg', 'https://asset.kompas.com/crops/BqyKXWcwtMXEKUxQB4FVDDv5j9A=/39x0:1119x720/750x500/data/photo/2019/07/21/5d3453d610cdd.jpeg', 'https://asset.kompas.com/crops/BqyKXWcwtMXEKUxQB4FVDDv5j9A=/39x0:1119x720/750x500/data/photo/2019/07/21/5d3453d610cdd.jpeg', 'https://asset.kompas.com/crops/BqyKXWcwtMXEKUxQB4FVDDv5j9A=/39x0:1119x720/750x500/data/photo/2019/07/21/5d3453d610cdd.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_bus` (`id_bus`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
