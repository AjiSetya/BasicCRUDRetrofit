-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 01:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_peminjamanjumbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `mb_nama` varchar(20) NOT NULL,
  `mb_alamat` text NOT NULL,
  `mb_merk` varchar(20) NOT NULL,
  `mb_tglpeminjaman` date NOT NULL,
  `mb_tglpengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `mb_nama`, `mb_alamat`, `mb_merk`, `mb_tglpeminjaman`, `mb_tglpengembalian`) VALUES
(1514602584, 'ilham', 'kebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalemkebondalem\n\nkebondalem\nkebondalem', 'mitsubishi ', '2017-12-27', '2017-12-31'),
(1514602958, 'ehuuuuuemeh', 'kokomo\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalemkebondalem\n\nkebondalem\nkebondalemkebondalem\n\nkebondalem\nkebondalemkebondalem', 'huhu', '2017-12-22', '2017-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_motor`
--

CREATE TABLE `tb_motor` (
  `id_motor` int(11) NOT NULL,
  `mt_nama` varchar(20) NOT NULL,
  `mt_alamat` text NOT NULL,
  `mt_merk` varchar(20) NOT NULL,
  `mt_tglpeminjaman` date NOT NULL,
  `mt_tglpengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_motor`
--

INSERT INTO `tb_motor` (`id_motor`, `mt_nama`, `mt_alamat`, `mt_merk`, `mt_tglpeminjaman`, `mt_tglpengembalian`) VALUES
(1514602233, 'jumbo', 'kebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem\nkebondalem', 'honda', '2017-12-27', '2018-01-02'),
(1514602824, 'hihi', 'eheheheh', 'hoho', '2017-12-21', '2017-12-28'),
(1514696215, 'ehehe', 'kdjfjc', 'hdhdh', '2017-12-30', '2017-12-31'),
(1514944139, 'gggg', 'ggggg', 'gggg', '2018-01-03', '2018-01-04'),
(1514944596, 'ooo', 'ooo', 'ooo', '2018-01-03', '2018-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tb_motor`
--
ALTER TABLE `tb_motor`
  ADD PRIMARY KEY (`id_motor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
