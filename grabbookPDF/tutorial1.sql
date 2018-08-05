-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: tutorial
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

CREATE TABLE `penerbit_tahun` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlahpenerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit_tahun`
--

INSERT INTO `penerbit_tahun` (`id`, `tahun`, `jumlahpenerbit`) VALUES
(1, 2012, 1518),
(2, 2013, 1228),
(3, 2014, 1309),
(4, 2015, 1328);

-- --------------------------------------------------------

--
-- Table structure for table `penjualanbuku`
--

CREATE TABLE `penjualanbuku` (
  `id` int(11) NOT NULL,
  `jenisbuku` varchar(50) NOT NULL,
  `persentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualanbuku`
--

INSERT INTO `penjualanbuku` (`id`, `jenisbuku`, `persentase`) VALUES
(1, 'Buku Anak', 39),
(2, 'Buku Religi', 13),
(3, 'Buku Fiksi', 12),
(4, 'Buku Referensi', 6),
(5, 'Lain-lain', 17);

-- --------------------------------------------------------

--
-- Table structure for table `provinsipenerbit`
--

CREATE TABLE `provinsipenerbit` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsipenerbit`
--

INSERT INTO `provinsipenerbit` (`id`, `provinsi`, `jumlah`) VALUES
(1, 'Jakarta', 504),
(2, 'Jawa Barat', 278),
(3, 'Jawa Timur', 159),
(4, 'Jawa Tengah', 145),
(5, 'Yogyakarta', 91);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerbit_tahun`
--
ALTER TABLE `penerbit_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualanbuku`
--
ALTER TABLE `penjualanbuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsipenerbit`
--
ALTER TABLE `provinsipenerbit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerbit_tahun`
--
ALTER TABLE `penerbit_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penjualanbuku`
--
ALTER TABLE `penjualanbuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `provinsipenerbit`
--
ALTER TABLE `provinsipenerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

-- Dump completed on 2017-10-19 20:39:12
