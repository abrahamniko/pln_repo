-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2018 at 12:40 PM
-- Server version: 5.6.30-1
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_area`
--

CREATE TABLE `tb_area` (
  `no_id` int(3) NOT NULL,
  `id_area` varchar(20) NOT NULL,
  `nama_area` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0:nonaktif, 1:aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_area`
--

INSERT INTO `tb_area` (`no_id`, `id_area`, `nama_area`, `alamat`, `status`) VALUES
(1, 'APD', 'Area Pengatur Distribusi', 'Jl. Embong Wungu No.4, Surabaya', 1),
(2, 'BGR', 'Bojonegoro', 'Jl. Teuku Umar No.3, Bojonegoro', 1),
(3, 'BWG', 'Banyuwangi', 'Jl. Nusantara No.1 Banyuwangi', 1),
(4, 'GRK', 'Gresik', 'Jl. Dr. Wahidin Sudiro Husodo No.134 Gresik', 1),
(5, 'JBR', 'Jember', 'Jl. Gajah Mada No.198 Jember', 1),
(6, 'KDR', 'Kediri', 'Jl. Basuki Rahmad No.03 Kediri', 1),
(7, 'MDN', 'Madiun', 'Jl. MT Haryono No.30, Madiun', 1),
(8, 'MJK', 'Mojokerto', 'Jl. Ra. Basuni 67 Mojokerto', 1),
(9, 'MLG', 'Malang', 'Jl. Basuki Rahmat No.100 Malang', 1),
(10, 'PKS', 'Pamekasan', 'Jl. Joko Tole 127-A, Pamekasan', 1),
(11, 'PNG', 'Ponorogo', 'Jl. Dr. Soetomo No.34, Ponorogo', 1),
(12, 'PSR', 'Pasuruan', 'Jl. Pb Sudirman No. 69, Pasuruan', 1),
(13, 'SBB', 'Surabaya Barat', 'Jl Raya Taman No. 48D Sepanjang Surabaya', 1),
(14, 'SBS', 'Surabaya Selatan', 'Jl. Ngagel Timur 14 - 16 Surabaya', 1),
(15, 'SBU', 'Surabaya Utara', 'Jl. Gemblongan 64 Surabaya', 1),
(16, 'SDA', 'Sidoarjo', 'Jl. A. Yani No.47-49,Sidoarjo', 1),
(17, 'STB', 'Situbondo', 'Jl. Cempaka No.35, Situbondo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bangunan`
--

CREATE TABLE `tb_bangunan` (
  `id_tanah` varchar(16) DEFAULT NULL,
  `id_bangunan` varchar(20) NOT NULL,
  `nama_bangunan` varchar(100) DEFAULT NULL,
  `harga_bangunan` varchar(20) DEFAULT NULL,
  `luas_bangunan` varchar(10) DEFAULT NULL,
  `no_imb_bangunan` varchar(50) DEFAULT NULL,
  `status_layer` varchar(3) DEFAULT NULL,
  `status_terjual` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bangunan`
--

INSERT INTO `tb_bangunan` (`id_tanah`, `id_bangunan`, `nama_bangunan`, `harga_bangunan`, `luas_bangunan`, `no_imb_bangunan`, `status_layer`, `status_terjual`) VALUES
('T-510100001-001', 'B-510100001-001-0001', 'BANGUNAN GEDUNG UTAMA & LAHTA', ' 1334318419', ' 6575', '188.45/813-95/402.5.09/1992', '22', '18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `id_tanah` varchar(16) DEFAULT NULL,
  `id_gudang` varchar(20) NOT NULL,
  `nama_gudang` varchar(100) DEFAULT NULL,
  `harga_gudang` varchar(20) DEFAULT NULL,
  `luas_gudang` varchar(10) DEFAULT NULL,
  `no_imb_gudang` varchar(50) DEFAULT NULL,
  `status_terjual` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gudang`
--

INSERT INTO `tb_gudang` (`id_tanah`, `id_gudang`, `nama_gudang`, `harga_gudang`, `luas_gudang`, `no_imb_gudang`, `status_terjual`) VALUES
('T-510100001-001', 'G-510100004-001-0001', 'GUDANG TAMBAK LANGON', ' 325510545 ', '2619', '188/1668.94/402.5.09/1995', '18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` varchar(9) NOT NULL,
  `id_plant` varchar(4) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `id_plant`, `nama_lokasi`, `alamat`, `id_provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `lat`, `lng`) VALUES
('510100001', '5101', 'LOKASI KANTOR DISTRIBUSI', 'JL. EMBONG TRENGGULI 9 - 21', 16, 'SURABAYA', 'GENTENG', '60271', -7.265226, 112.744);

-- --------------------------------------------------------

--
-- Table structure for table `tb_notif`
--

CREATE TABLE `tb_notif` (
  `id_notif` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `kategori` int(1) DEFAULT NULL COMMENT '1: pengajuan oleh area, 2: pengajuan oleh admin(distribusi), 3:persetujuan oleh aset, 4: persetujuan oleh distribusi',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0: menunggu, 1: disetujui, 2: ditolak',
  `dilihat` int(1) NOT NULL DEFAULT '0' COMMENT '0: blm diliat, 1: sudh diliat',
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_notif`
--

INSERT INTO `tb_notif` (`id_notif`, `id_user`, `id_proyek`, `kategori`, `status`, `dilihat`, `last_update`) VALUES
(4, 8, 12, 1, 0, 1, '2018-04-11 22:14:28'),
(5, 9, 12, 1, 0, 1, '2018-04-11 22:14:28'),
(9, 3, 12, 3, 0, 1, '2018-04-11 23:10:12'),
(10, 4, 12, 3, 1, 1, '2018-04-11 23:10:12'),
(11, 3, 13, 2, 0, 1, '2018-04-11 23:14:37'),
(12, 4, 12, 4, 1, 1, '2018-04-11 23:19:22'),
(13, 1, 13, 4, 1, 1, '2018-04-11 23:20:39'),
(14, 3, 1, 3, 0, 1, '2018-04-12 22:45:08'),
(15, 3, 1, 3, 0, 1, '2018-04-12 22:50:04'),
(16, 4, 1, 3, 1, 1, '2018-04-12 22:50:04'),
(17, 4, 4, 4, 1, 1, '2018-04-12 22:56:18'),
(18, 3, 1, 3, 0, 1, '2018-04-14 21:57:38'),
(19, 4, 1, 3, 1, 1, '2018-04-14 21:57:38'),
(20, 1, 7, 4, 1, 1, '2018-04-14 21:57:53'),
(21, 8, 14, 1, 0, 1, '2018-04-16 21:26:19'),
(22, 9, 14, 1, 0, 1, '2018-04-16 21:26:19'),
(23, 3, 14, 3, 0, 1, '2018-04-16 21:27:54'),
(24, 4, 14, 3, 2, 1, '2018-04-16 21:27:54'),
(25, 8, 15, 1, 0, 0, '2018-04-20 08:46:35'),
(26, 9, 15, 1, 0, 0, '2018-04-20 08:46:36'),
(27, 3, 1, 3, 0, 1, '2018-04-20 09:18:50'),
(28, 4, 1, 3, 1, 0, '2018-04-20 09:18:50'),
(29, 3, 15, 3, 0, 1, '2018-04-20 09:19:10'),
(30, 1, 15, 3, 2, 0, '2018-04-20 09:19:10'),
(31, 4, 16, 4, 1, 0, '2018-04-20 09:20:04'),
(32, 8, 17, 1, 0, 1, '2018-04-23 12:21:52'),
(33, 9, 17, 1, 0, 1, '2018-04-23 12:21:52'),
(34, 10, 17, 1, 0, 1, '2018-04-23 12:21:52'),
(35, 8, 18, 1, 0, 1, '2018-04-23 12:25:33'),
(36, 9, 18, 1, 0, 1, '2018-04-23 12:25:33'),
(37, 10, 18, 1, 0, 1, '2018-04-23 12:25:34'),
(38, 3, 17, 3, 0, 0, '2018-04-23 12:33:30'),
(39, 11, 17, 3, 2, 1, '2018-04-23 12:33:30'),
(40, 8, 19, 1, 0, 1, '2018-04-23 13:08:45'),
(41, 9, 19, 1, 0, 1, '2018-04-23 13:08:46'),
(42, 10, 19, 1, 0, 1, '2018-04-23 13:08:46'),
(43, 8, 20, 1, 0, 1, '2018-04-23 13:09:38'),
(44, 9, 20, 1, 0, 1, '2018-04-23 13:09:38'),
(45, 10, 20, 1, 0, 1, '2018-04-23 13:09:39'),
(46, 14, 1, 3, 0, 1, '2018-04-25 15:25:11'),
(47, 4, 1, 3, 1, 0, '2018-04-25 15:25:11'),
(48, 10, 21, 1, 0, 1, '2018-04-25 19:46:34'),
(49, 14, 1, 3, 0, 1, '2018-04-25 20:02:37'),
(50, 4, 1, 3, 1, 0, '2018-04-25 20:02:37'),
(51, 13, 21, 4, 1, 1, '2018-04-25 20:03:27'),
(52, 1, 20, 4, 2, 0, '2018-04-25 20:03:49'),
(53, 14, 1, 3, 0, 1, '2018-04-25 20:04:39'),
(54, 4, 1, 3, 1, 0, '2018-04-25 20:04:39'),
(55, 14, 1, 3, 0, 1, '2018-04-25 20:12:38'),
(56, 4, 1, 3, 1, 0, '2018-04-25 20:12:38'),
(57, 14, 1, 3, 0, 1, '2018-04-25 22:08:37'),
(58, 4, 1, 3, 1, 0, '2018-04-25 22:08:37'),
(59, 13, 22, 4, 1, 0, '2018-04-25 22:10:10'),
(60, 1, 19, 4, 2, 0, '2018-04-25 22:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_pengajuan` text NOT NULL,
  `distribusi` varchar(200) DEFAULT NULL,
  `thn_pengajuan` year(4) NOT NULL,
  `id_rayon` varchar(20) DEFAULT NULL,
  `id_area` varchar(20) DEFAULT NULL,
  `lokasi_pengajuan` text NOT NULL,
  `nilai_pengajuan` varchar(20) NOT NULL,
  `data_pendukung` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0:nunggu, 1:setujui by dist, 2:tolak by dist, 3: setujui by aset, 4: tolak by aset',
  `alasan_tolak` text NOT NULL,
  `tgl_pengajuan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request_id` int(11) NOT NULL,
  `approval_id` int(11) NOT NULL,
  `nilai_persetujuan` float NOT NULL,
  `kategori` int(1) NOT NULL COMMENT '1: area, 2:rayon, 3:distribusi',
  `approval_aset_id` int(11) DEFAULT NULL,
  `approval_aset_reason` text,
  `approval_aset_date` datetime DEFAULT NULL,
  `persetujuan_setengah` int(1) NOT NULL DEFAULT '0',
  `id_tanah` varchar(20) NOT NULL,
  `id_wisma` varchar(20) NOT NULL,
  `id_gudang` varchar(20) NOT NULL,
  `id_bangunan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `nama_pengajuan`, `distribusi`, `thn_pengajuan`, `id_rayon`, `id_area`, `lokasi_pengajuan`, `nilai_pengajuan`, `data_pendukung`, `status`, `alasan_tolak`, `tgl_pengajuan`, `request_id`, `approval_id`, `nilai_persetujuan`, `kategori`, `approval_aset_id`, `approval_aset_reason`, `approval_aset_date`, `persetujuan_setengah`, `id_tanah`, `id_wisma`, `id_gudang`, `id_bangunan`) VALUES
(1, 'pengajuan 1', '', 2018, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '1000', '1520787782Avilon.zip', 2, 'kamu tidak cocok', '2017-02-10 00:03:02', 4, 1, 0, 1, NULL, NULL, NULL, 0, '', '', '', ''),
(2, 'pengajuan 1', '', 2018, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '700', '1520787870Avilon.zip', 1, '', '2017-03-11 00:04:30', 4, 1, 700, 1, NULL, NULL, NULL, 0, '', '', '', ''),
(3, 'pengajuan 1', '', 2018, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '1000', '1523547908.zip', 0, '', '2018-03-12 00:08:29', 4, 0, 0, 1, 8, 'asdasdasd', '2018-04-12 22:45:08', 0, '', '', '', ''),
(4, 'pengajuan 2', '', 2019, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '12000', '1523548204.zip', 1, '', '2018-03-12 08:18:17', 4, 3, 12000, 1, 8, 'aisudgieurbva', '2018-04-12 22:50:04', 0, '', '', '', ''),
(5, 'perbaikan pos satpam', 'surabaya', 2018, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '15000000', '1520945669.zip', 0, '', '2018-03-13 19:54:29', 4, 0, 0, 1, NULL, NULL, NULL, 0, '', '', '', ''),
(6, 'aksdjghaksdjhg', 'ksajdkasdjf', 2018, NULL, 'JBR', 'Jl. Gajah Mada No.198 Jember', '1000000', '1521731711.zip', 0, '', '2018-03-22 22:15:11', 4, 0, 0, 3, NULL, NULL, NULL, 0, '', '', '', ''),
(7, 'testing dis', 'dis', 2018, NULL, 'BWG', 'Jl. Raya Plaosan No. 73 Babat', '1000000', '1523717858.zip', 1, '', '2018-03-27 20:47:45', 1, 3, 450000, 3, 8, 'disetujui setengah dulu', '2018-04-14 21:57:38', 1, '', '', '', ''),
(12, 'test', 'Distribusi Jawa Timur', 2018, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '1000000', '1523459668.zip', 1, '', '2018-04-11 22:14:28', 4, 3, 1000000, 1, 8, NULL, '2018-04-11 23:10:12', 0, '', '', '', ''),
(13, 'testing admin', 'Distribusi Jawa Timur', 2018, NULL, 'BWG', 'asjdfbkasjdbfkjsbdfkj', '12000000', '1523463277.zip', 1, '', '2018-04-11 23:14:37', 1, 3, 11000000, 3, NULL, NULL, NULL, 0, '', '', '', ''),
(14, 'testing pengajuan', 'Distribusi Jawa Timur', 2018, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '1500', '1523888779.zip', 4, 'testing dulu', '2018-04-16 21:26:19', 4, 0, 0, 1, 8, NULL, '2018-04-16 21:27:54', 0, '', '', '', ''),
(15, 'perbaikan Gudang 2', 'Distribusi Jawa Timur', 2018, NULL, NULL, 'Jl. Embong Trengguli 19-21 Surabaya', '150000000', '1524188795.zip', 4, 'belum siap', '2018-04-20 08:46:35', 1, 0, 0, 3, 10, NULL, '2018-04-20 09:19:10', 0, '', '', '', ''),
(16, 'Perbaikan Arena Parkir', 'Distribusi Jawa Timur', 2018, '', 'JBR', 'Jl. Gajah Mada No.198 Jember', '20000000', '1524190730.zip', 1, '', '2018-04-20 08:48:07', 4, 3, 20000000, 1, 10, 'kerjakan dalam waktu yang sesingkat singkatnya', '2018-04-20 09:18:50', 0, '', '', '', '0'),
(17, 'perbaikan Parkir Belakang', 'Distribusi Jawa Timur', 2018, '51603', '', 'Jl. Dr. Wahidin No. 20 Kalisat', '20000000', '1524460911.zip', 4, 'belum siap', '2018-04-23 12:21:52', 11, 0, 0, 2, 10, NULL, '2018-04-23 12:33:30', 0, '', '', '0', ''),
(18, 'perbaikan mushola', 'Distribusi Jawa Timur', 2018, '51604', '', 'Jl. Mangunsarkoro No. 42 Rambipuji', '10000000', '1524661957.zip', 3, '', '2018-04-23 12:25:33', 11, 0, 10000000, 2, 10, '', '2018-04-25 20:12:37', 0, '', '', '', '0'),
(19, 'pembangunan rumah dinas 2', 'Distribusi Jawa Timur', 2018, NULL, NULL, 'Jl. Dr. Wahidin No. 20 Kalisat', '25000000', '1524661479.zip', 2, 'nanti saja', '2018-04-23 13:08:45', 1, 14, 25000000, 3, 10, '', '2018-04-25 20:04:39', 1, '', '', '', ''),
(20, 'pembangunan rumah dinas 2', 'Distribusi Jawa Timur', 2018, NULL, NULL, 'Jl. Dr. Wahidin No. 20 Kalisat', '25000000', '1524644710.zip', 2, 'udah tunggu waktu aja', '2018-04-23 13:09:38', 1, 14, 25000000, 3, 10, '', '2018-04-25 15:25:10', 0, '', '', '', ''),
(21, 'bangun rumah ', 'Distribusi Jawa Timur', 2018, '51605', '', 'Jl. Manggar No. 125 Ambulu', '12000000', '1524661357.zip', 1, '', '2018-04-25 19:46:34', 13, 14, 12000000, 2, 10, '', '2018-04-25 20:02:37', 0, '0', 'W-510100005-001-00', '0', '0'),
(22, 'bangun gudang', 'Distribusi Jawa Timur', 2018, '51606', 'JBR', 'Jl. Raya Klakah No. 120 Klakah', '90000000', '1524668917.zip', 1, '', '2018-04-25 22:04:07', 13, 14, 80000000, 2, 10, '', '2018-04-25 22:08:37', 1, 'T-510100001-001', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_plant`
--

CREATE TABLE `tb_plant` (
  `id_plant` varchar(4) NOT NULL,
  `nama_plant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_plant`
--

INSERT INTO `tb_plant` (`id_plant`, `nama_plant`) VALUES
('5101', 'asd3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `provinsi_nama`) VALUES
(16, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rayon`
--

CREATE TABLE `tb_rayon` (
  `no_id` int(11) NOT NULL,
  `no_id_area` int(11) NOT NULL,
  `id_rayon` varchar(20) NOT NULL,
  `nama_rayon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0:nonaktif, 1:aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rayon`
--

INSERT INTO `tb_rayon` (`no_id`, `no_id_area`, `id_rayon`, `nama_rayon`, `alamat`, `status`) VALUES
(1, 15, '51101', 'Indrapura', 'Jl. Indrapura No.48, Krembangan Sel., Krembangan, Kota SBY, Jawa Timur 60164', 1),
(2, 15, '51102', 'Ploso', 'Jalan Ploso Timur III No.1, Ploso, Tambaksari, Ploso, Surabaya, Kota SBY, Jawa Timur 60133', 1),
(3, 15, '51103', 'Tandes', 'Komplek pergudangan SuriMulya KavE4 MargoMulyo Kota SBY, Jawa Timur 60183', 1),
(4, 15, '51104', 'Perak', 'Jl. Tanjung Sadari No.82, Perak Bar., Krembangan, Kota SBY, Jawa Timur 60177', 1),
(5, 15, '51105', 'Kenjeran', 'Jl. Wiratno No.53 Surabaya', 1),
(6, 15, '51106', 'Embong Wungu', 'Jl. Embong Wungu No.4, Embong Kaliasin, Genteng, Kota SBY, Jawa Timur 60271', 1),
(7, 4, '51120', 'Giri', 'Jl. Dr Wahidin Sudiro Husodo No. 134 Gresik, Jawa Timur 61114', 1),
(8, 4, '51121', 'Sidayu', 'Jl. Pahlawan No.10 Sedayu, Kabupaten Gresik, Jawa Timur 61153', 1),
(9, 4, '51122', 'Benjeng', 'Jl. Raya Munggugianti No.42, Bengkelolor, Benjeng, Kabupaten Gresik, Jawa Timur 61172', 1),
(10, 4, '51123', 'Bawean', 'Jl. Pendidikan No.10 Sangkapura Bawean, Kabupaten Gresik, Jawa Timur 61181', 1),
(11, 14, '51140', 'Darmo Permai', 'Jl. Raya Darmo Permai Utara No.5, Pradahkalikendal, Dukuh Pakis, Kota SBY, Jawa Timur 60216', 1),
(12, 14, '51141', 'Dukuh Kupang', 'Jl. Raya Dukuh Kupang No.157, Pakis, Kec. Sawahan, Kota SBY, Jawa Timur 60225', 1),
(13, 14, '51142', 'Ngagel', 'Jl. Ngagel Timur No.14-16, Pucang Sewu, Gubeng, Kota SBY, Jawa Timur 60283', 1),
(14, 14, '51143', 'Rungkut', 'Jl. Rungkut Industri VIII No.27, Rungkut Kidul, Rungkut, Kota SBY, Jawa Timur 60291', 1),
(15, 14, '51146', 'Gedangan', 'Jl. Sawo Tratap Km.15, Sidoarjo', 1),
(16, 13, '51161', 'Taman', 'Jl. Raya Taman No. 48D Sepanjang Surabaya', 1),
(17, 13, '51162', 'Karang Pilang', 'Jl. Raya Mastrip No.114, Kebraon, Karang Pilang, Kota SBY, Jawa Timur 60222', 1),
(18, 13, '51163', 'Menganti', 'Jl. Raya Menganti No.29, Kedurus, Karang Pilang, Kota SBY, Jawa Timur 60228', 1),
(19, 16, '51180', 'Sidoarjo Kota', 'Jalan Kombespol. M. Duryat No. 9, Sidoarjo, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61218', 1),
(20, 16, '51181', 'krian', 'JL. Ki Hajar Diwantoro No.11, Krian, Sidoarjo Regency, East Java 61262', 1),
(21, 16, '51182', 'Porong', 'Jl. Raya Porong, Mindi, Porong, Kabupaten Sidoarjo, Jawa Timur 61274', 1),
(22, 9, '51301', 'Lawang', 'Jl. Diponegoro N.10, Lawang, Malang', 1),
(23, 9, '51302', 'Bululawang', 'Jl. Raya Wandanpuro Bululawang, Malang Jawa Timur', 1),
(24, 9, '51303', 'Batu', 'Jl. Trunojoyo No. 14-A Batu, Malang Jawa Timur', 1),
(25, 9, '51304', 'Singosari', 'Jl. Kertanegara No. 64, Singosari, Malang Jawa Timur', 1),
(26, 9, '51305', 'Kepanjen', 'Jl. Panji No. 2 Kepanjen, Malang Jawa Timur', 1),
(27, 9, '51306', 'Tumpang', 'Jl. Tulusayu, Tumpang, Malang Jawa Timur', 1),
(28, 9, '51307', 'Gondanglegi', 'Jl. Pangeran Diponegoro No. 16, Gondanglegi, Malang Jawa Timur', 1),
(29, 9, '51308', 'Dampit', 'Jl. Gunung Jati No. 11 Dampit,Malang Jawa Timur', 1),
(30, 9, '51309', 'Ngantang', 'Jl. Raya Ngantang No. 4 Ngantang, malang Jawa Timur', 1),
(31, 9, '51310', 'Sumber Pucung', 'Jl. Raya Basuki Rahmad No. 9 Karangkates, Sumberpucung, Malang Jawa Timur', 1),
(32, 9, '51311', 'Dinoyo', 'Jl. MT. Haryono No. 189 Dinoyo, Malang', 1),
(33, 9, '51312', 'Blimbing', 'Jl. Raya Mangliawan No. 3 Blimbing, Malang', 1),
(34, 9, '51313', 'Malang Kota', 'Jl. Basuki Rahmad No. 100, Malang', 1),
(35, 9, '51314', 'Kebon Agung', 'Jl. Satsui Tubun Kebonagung Malang', 1),
(36, 12, '51350', 'Pasuruan Kota', 'Jl. Diponegoro No.1, Pasuruan, Jawa Timur 67114', 1),
(37, 12, '51351', 'Gondang Wetan', 'Jl. Raya Pasuruan-Malang km 7, Kajayan', 1),
(38, 12, '51352', 'Grati', 'Jl. Raya pasuruan-Probolinggo km 8 Desa. Kedung Pasuruan, Jawa Timur 67181', 1),
(39, 12, '51353', 'Bangil', 'Jl. Mangga No.68, Pogar, Bangil, Pasuruan, Jawa Timur 67153', 1),
(40, 12, '51354', 'Pandaan', 'Jl. Raya Kasri No.48, Petungasri, Pandaan, Pasuruan, Jawa Timur 67156', 1),
(41, 12, '513355', 'Prigen', 'Jl. Taman Wisata No.543 Prigen Kota Pasuruan, Jawa Timur 67114', 1),
(42, 12, '51356', 'Probolinggo', 'Jl. Dr Sutomo No.60 Probolinggo', 1),
(43, 12, '51357', 'Kraksaan', 'Jl. Rengganis No.99 Kraksaan', 1),
(44, 12, '51358', 'Sukorejo', 'Jl. Raya Bulu Agung No.56 Purwosari Pasuruan', 1),
(45, 6, '51401', 'Kediri Kota', 'Jl. Basuki Rahmat No.03 Kediri', 1),
(46, 6, '51402', 'Blitar', 'Jl. Ahmad Yani No.23, Blitar', 1),
(47, 6, '51403', 'Tulungagung', 'Jl. Kapten Kasihin No.55 Tulungagung', 1),
(48, 6, '51404', 'Ngunut', 'Jln. Adil No.44 Ngunut', 1),
(49, 6, '51405', 'Srengat', 'Jl. Raya Togogan No.24 Srengat', 1),
(50, 6, '51406', 'Pare', 'Jl. Panglima Sudirman No.25 Pare', 1),
(51, 6, '51408', 'Wlingi', 'Jl. Panglima Sudirman No.02 Wlingi Blitar', 1),
(52, 6, '51409', 'Sutojayan', 'Jl. Raya Utara Sutojayan No.54 Blitar', 1),
(53, 6, '51410', 'Ngadiluwih', 'Jl. Raya Rembang No.151 Ngadiluwih', 1),
(54, 6, '51411', 'Grogol', 'Jl. Raya Gringging No.15 grogol', 1),
(55, 6, '51412', 'Campur Darat', 'Jl. Kanigoro No.12 Campur Darat', 1),
(56, 8, '51450', 'Mojoagung', 'Jl. Raya Veteran No.347 Mojoagung', 1),
(57, 8, '51452', 'Mojokerto', 'Jl. Jend A.Yani No.06 Mojokerto ', 1),
(58, 8, '51453', 'Jombang', 'Jl. KH. Wachid Hasyim No.73 Jombang', 1),
(59, 8, '51454', 'Ngoro', 'Jl. Suropati No.05 Ngoro Jombang', 1),
(60, 8, '51455', 'Ploso', 'Jl. Raya Ploso Babat No.3 Ploso Jombang ', 1),
(61, 8, '51456', 'Mojosari', 'Jl. Pemuda No.78 Mojosari Mojokerto', 1),
(62, 8, '51457', 'Pacet', 'Jl. Komand Hayam Wuruk Pacet', 1),
(63, 8, '51458', 'Kertosono', 'Jl. PB Sudirman No. 18 Kertosono', 1),
(64, 8, '51459', 'Warujayeng', 'Jl. Basuki Rachmad No.17 Warujeng Tanjung Anom', 1),
(65, 8, '51460', 'Nganjuk', 'Jl. Dr Sutomo No.54 Nganjuk', 1),
(66, 7, '51501', 'Madiun Kota', 'Jl. MT. Haryono No.30 Madiun', 1),
(67, 7, '51503', 'Magetan', 'Jl. Basuki Rachmad No.7 Magetan', 1),
(68, 7, '51504', 'Ngawi', 'Jl. Jaksa Agung Suprapto No.37 Ngawi', 1),
(69, 7, '51505', 'Maospati', 'Jl. Raya Maospati Madiun', 1),
(70, 7, '51507', 'Caruban', 'Jl. Raya Caruban Madiun', 1),
(71, 7, '51508', 'Dolopo', 'Jl. Raya Ponorogo No.246 Madiun', 1),
(72, 7, '51509', 'Mantingan', 'Jl. Raya Solo Madiun', 1),
(73, 11, '51540', 'Ponorogo', 'Jl. Dr. Soetomo No.34 Ponorogo', 1),
(74, 11, '51541', 'Balong', 'Jl. Pemuda No.86 Balong', 1),
(75, 11, '51542', 'Pacitan', 'Jl. Achmad Yani No.94 Pacitan', 1),
(76, 11, '51543', 'Trenggalek', 'Jl. Ki Mangunsarkoro No. 7 Trenggalek', 1),
(77, 5, '51601', 'Jember Kota', 'Jl. PB Sudirman No. 24 Jember', 1),
(78, 5, '51602', 'Lumajang', 'Jl. Jend. Sudirman N0. 24 Lumajang', 1),
(79, 5, '51603', 'Kalisat', 'Jl. Dr. Wahidin No. 20 Kalisat', 1),
(80, 5, '51604', 'Rambipuji', 'Jl. Mangunsarkoro No. 42 Rambipuji', 1),
(81, 5, '51605', 'Ambulu', 'Jl. Manggar No. 125 Ambulu', 1),
(82, 5, '51606', 'Klakah', 'Jl. Raya Klakah No. 120 Klakah', 1),
(83, 5, '51607', 'Tanggul', 'Jl. PB Sudirman No. 147-A Tanggul', 1),
(84, 5, '51608', 'Kencong', 'Jl. Kartini No. 4 Ds Wonorejo Kencong', 1),
(85, 5, '51609', 'Tempeh', 'Jl. Sukarno-Hatta depan kec. Tempeh', 1),
(86, 17, '51650', 'Panarukan', 'Jl. Cempaka No. 35 Situbondo', 1),
(87, 17, '51651', 'Besuki', 'Jl. Gunung Ijen No. 30 Besuki', 1),
(88, 17, '51652', 'Asembagus', 'Jl. Raya Asembagus No. 7 Asembagus', 1),
(89, 17, '51653', 'Bondowoso', 'Jl. Kol. Sugiono No. 30 Bondowoso', 1),
(90, 17, '51654', 'Wonosari', 'Ds Wonosari Kab. Situbondo', 1),
(91, 3, '51670', 'Banyuwangi Kota', 'Jl. Nusantara No.1 Banyuwangi', 1),
(92, 3, '51671', 'Rogojampi', 'Jl. Raya Lugonto No. 21 Rogojampi', 1),
(93, 3, '51672', 'Muncar', 'Jl. Raya Kedungrejo No. 60 Muncar', 1),
(94, 3, '51673', 'Genteng', 'Jl. Raya Gambiran No. 340 Genteng', 1),
(95, 3, '51675', 'Jajag', 'Jl. A. Yani No. 47 Jajak', 1),
(96, 10, '51700', 'Pamekasan', 'Jl. Kesehatan No. 1 Pamekasan', 1),
(97, 10, '51710', 'Sumenep', 'Jl. Urip Sumoharjo No. 3 Sumenep', 1),
(98, 10, '51720', 'Sampang', 'Jl. Trunojoyo No. 63 Sampang', 1),
(99, 10, '51730', 'Bangkalan', 'Jl. Letnan Mestu No. 4 Bangkalan', 1),
(100, 10, '51740', 'Kamal', 'Jl. Jeruk Raya Kamal', 1),
(101, 10, '51750', 'Ketapang', 'Jl. Raya Ketapang Barat No. 2 Ketapang', 1),
(102, 10, '51760', 'Blega', 'Jl. Jagalan No. 10 Blega', 1),
(103, 10, '51770', 'Prenduan', 'Jl. Raya Prenduan', 1),
(104, 10, '51780', 'Waru', 'Jl. Raya Waru No. 120 Waru', 1),
(105, 10, '51790', 'Ambunten', 'Jl. KH. As\'ari No. 22 Ambuten', 1),
(106, 2, '51801', 'Bojonegoro Kota', 'Jl. KH. Hasyim Ashari No. 3 Bojonegoro', 1),
(107, 2, '51802', 'Tuban', 'Jl. AKBP Suroko No. 36 Tuban', 1),
(109, 2, '51803', 'Lamongan', 'Jl. Veteran No. 36 Lamongan', 1),
(110, 2, '51804', 'Babat', 'Jl. Raya Plaosan No. 73 Babat', 1),
(111, 2, '51805', 'Padangan', 'Jl. Dr. Sutomo No. 4 Padangan', 1),
(112, 2, '51806', 'Brondong', 'Jl. Raya Paciran km 35 Paciran', 1),
(113, 2, '51807', 'Jatirogo', 'Jl. Raya Blora No. 621 Jatirogo', 1),
(114, 2, '51808', 'Sumber Rejo', 'Ds Sumberrejo kec. Sumberrejo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_kepemilikan`
--

CREATE TABLE `tb_status_kepemilikan` (
  `id_status` varchar(5) NOT NULL,
  `deskripsi_kepemilikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_kepemilikan`
--

INSERT INTO `tb_status_kepemilikan` (`id_status`, `deskripsi_kepemilikan`) VALUES
('14', 'HGB'),
('15', 'HPL'),
('16', 'Hak Pakai'),
('17', 'Pinjam Pakai'),
('3', 'Milik Sendiri'),
('4', 'Sewa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_layak`
--

CREATE TABLE `tb_status_layak` (
  `id_layak` varchar(3) NOT NULL,
  `deskripsi_layak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_layak`
--

INSERT INTO `tb_status_layak` (`id_layak`, `deskripsi_layak`) VALUES
('19', 'Layak'),
('20', 'Tidak Layak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_layer`
--

CREATE TABLE `tb_status_layer` (
  `id_layer` varchar(3) NOT NULL,
  `deskripsi_layer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_layer`
--

INSERT INTO `tb_status_layer` (`id_layer`, `deskripsi_layer`) VALUES
('21', 'Bangunan/Instansi'),
('22', 'Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_pendayagunaan`
--

CREATE TABLE `tb_status_pendayagunaan` (
  `id_pendayagunaan` varchar(3) NOT NULL,
  `deskripsi_pendayagunaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_pendayagunaan`
--

INSERT INTO `tb_status_pendayagunaan` (`id_pendayagunaan`, `deskripsi_pendayagunaan`) VALUES
('1', 'Dipakai Sendiri'),
('11', 'BOT/BTO'),
('12', 'KSU'),
('13', 'Pinjam Pakai'),
('2', 'Disewakan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_rumah`
--

CREATE TABLE `tb_status_rumah` (
  `id_rumah` varchar(3) NOT NULL,
  `deskripsi_rumah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_rumah`
--

INSERT INTO `tb_status_rumah` (`id_rumah`, `deskripsi_rumah`) VALUES
('23', 'Rumah Jabatan'),
('24', 'Rumah Operasional 1'),
('25', 'Rumah Operasional 2'),
('26', 'Rumah Operasional 3'),
('27', 'Wisma');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_tanah`
--

CREATE TABLE `tb_status_tanah` (
  `id_tanah` varchar(5) NOT NULL,
  `nama_tanah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_terjual`
--

CREATE TABLE `tb_status_terjual` (
  `id_terjual` varchar(5) NOT NULL,
  `deskripsi_terjual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_terjual`
--

INSERT INTO `tb_status_terjual` (`id_terjual`, `deskripsi_terjual`) VALUES
('10', 'Proses Lelang'),
('18', 'Tidak Dijual'),
('8', 'Belum Terjual'),
('9', 'Terjual');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanah`
--

CREATE TABLE `tb_tanah` (
  `id_lokasi` varchar(9) DEFAULT NULL,
  `id_tanah` varchar(16) NOT NULL,
  `nama_tanah` varchar(100) DEFAULT NULL,
  `alamat_tanah` varchar(100) DEFAULT NULL,
  `harga_tanah` varchar(20) DEFAULT NULL,
  `luas_tanah` varchar(10) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `no_pbb` varchar(50) DEFAULT NULL,
  `biaya_pbb` varchar(50) DEFAULT NULL,
  `no_bphtb` varchar(50) DEFAULT NULL,
  `biaya_bphtb` varchar(50) DEFAULT NULL,
  `no_sertifikat` varchar(50) DEFAULT NULL,
  `tgl_berlaku_sertifikat` date DEFAULT NULL,
  `tgl_berakhir_sertifikat` date DEFAULT NULL,
  `status_pendayagunaan` varchar(3) DEFAULT NULL,
  `status_kepemilikan` varchar(3) DEFAULT NULL,
  `status_tanah` varchar(3) DEFAULT NULL,
  `status_terjual` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tanah`
--

INSERT INTO `tb_tanah` (`id_lokasi`, `id_tanah`, `nama_tanah`, `alamat_tanah`, `harga_tanah`, `luas_tanah`, `latitude`, `longitude`, `no_pbb`, `biaya_pbb`, `no_bphtb`, `biaya_bphtb`, `no_sertifikat`, `tgl_berlaku_sertifikat`, `tgl_berakhir_sertifikat`, `status_pendayagunaan`, `status_kepemilikan`, `status_tanah`, `status_terjual`) VALUES
(NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01', '1970-01-01', NULL, NULL, NULL, NULL),
('510100001', 'T-510100001-001', 'TANAH KANTOR DISTRIBUSI 1 (GEDUNG UTAMA & LAHTA)', 'JL. EMBONG TRENGGULI 19 - 21', ' 3837518322', ' 1885 ', '-7.265226', '112.744', '35.78.110.001.005.0058-0', '260752872', '35.78.110.001.005.0058-0', '105400716000', '12.39.07.01.3.00928', '2015-04-14', '2035-01-19', '1', '14', '6', '18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(21) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0:nonaktif, 1:aktif',
  `jabatan` varchar(100) NOT NULL COMMENT 'admin, distribusi, area',
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `register_user` int(11) NOT NULL,
  `edit_user` int(11) NOT NULL,
  `edit_date` datetime DEFAULT NULL,
  `id_area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `alamat`, `nohp`, `jenkel`, `email`, `username`, `password`, `status`, `jabatan`, `register_date`, `register_user`, `edit_user`, `edit_date`, `id_area`) VALUES
(1, 'Administrator', 'Jember', '812345678', 'Perempuan', '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'admin', '2018-03-27 19:53:04', 1, 0, NULL, '0'),
(10, 'Sheilla Rosysonya', 'Jember', '82257715035', 'Perempuan', 'sheillasonyam@gmail.com', 'sela', '01ab646f286b552a4608db8f940cee9c4eca2151', 1, 'aset', '2018-04-20 09:10:31', 1, 0, NULL, ''),
(12, 'Sri Handayani', 'probolinggo', '821234321', 'Perempuan', 'sri@pln.id', 'sri', '0dc2351fdb3264075987894be2f3fed5a0fa86e7', 1, 'admin', '2018-04-25 09:01:05', 1, 0, NULL, ''),
(13, 'Ifa Rusdiana', 'Bangsalsari Jember', '85749176532', 'Perempuan', 'ifa@pln.id', 'ifa', 'd229938239c637262c41fb2eb22a1f45f5e5eb55', 1, 'area', '2018-04-25 09:02:38', 1, 0, NULL, 'JBR'),
(14, 'Sheila sonya', 'Jl. Anjasmoro Rambipuji', '08976543356', 'Perempuan', 'sonya@pln.id', 'sonya', 'e661eef3d257c97e827ce331afcc11274586c6a9', 1, 'distribusi', '2018-04-25 09:06:20', 1, 0, NULL, ''),
(15, 'bayu', 'tes', '66544', 'Laki-laki', 'bayu@pln.co.id', 'bayu', '21bd12dc183f740ee76f27b78eb39c8ad972a757', 1, 'admin', '2018-04-26 16:16:19', 12, 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisma`
--

CREATE TABLE `tb_wisma` (
  `id_tanah` varchar(16) DEFAULT NULL,
  `id_wisma` varchar(18) NOT NULL,
  `nama_wisma` varchar(100) DEFAULT NULL,
  `harga_wisma` varchar(20) DEFAULT NULL,
  `luas_wisma` varchar(10) DEFAULT NULL,
  `no_imb_wisma` varchar(50) DEFAULT NULL,
  `status_rumah` varchar(3) DEFAULT NULL,
  `status_terjual` varchar(3) DEFAULT NULL,
  `status_layak` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wisma`
--

INSERT INTO `tb_wisma` (`id_tanah`, `id_wisma`, `nama_wisma`, `harga_wisma`, `luas_wisma`, `no_imb_wisma`, `status_rumah`, `status_terjual`, `status_layak`) VALUES
('T-510100005-001', 'W-510100005-001-00', 'RUMAH JABATAN GENERAL MANAGER', ' 27549164 ', '1332', '188/0400.92/402.05.09/2001', '23', '18', '19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_bangunan`
-- (See below for the actual view)
--
CREATE TABLE `view_bangunan` (
`id_bangunan` varchar(20)
,`nama_bangunan` varchar(100)
,`harga_bangunan` varchar(20)
,`luas_bangunan` varchar(10)
,`no_imb_bangunan` varchar(50)
,`status_layer_bangunan` varchar(3)
,`status_terjual_bangunan` varchar(3)
,`id_lokasi` varchar(9)
,`id_tanah` varchar(16)
,`nama_tanah` varchar(100)
,`alamat_tanah` varchar(100)
,`harga_tanah` varchar(20)
,`luas_tanah` varchar(10)
,`latitude` varchar(20)
,`longitude` varchar(20)
,`no_pbb` varchar(50)
,`biaya_pbb` varchar(50)
,`no_bphtb` varchar(50)
,`biaya_bphtb` varchar(50)
,`no_sertifikat` varchar(50)
,`tgl_berlaku_sertifikat` date
,`tgl_berakhir_sertifikat` date
,`status_pendayagunaan` varchar(3)
,`status_kepemilikan` varchar(3)
,`status_tanah` varchar(3)
,`status_terjual` varchar(3)
,`id_plant` varchar(4)
,`nama_lokasi` varchar(100)
,`alamat` varchar(100)
,`id_provinsi` int(11)
,`kabupaten` varchar(50)
,`kecamatan` varchar(50)
,`kode_pos` varchar(10)
,`lat` double
,`lng` double
,`nama_plant` varchar(50)
,`provinsi_nama` varchar(50)
,`deskripsi_pendayagunaan` varchar(50)
,`deskripsi_kepemilikan` varchar(50)
,`deskripsi_tanah` varchar(50)
,`deskripsi_terjual` varchar(50)
,`deskripsi_layer_bangunan` varchar(50)
,`deskripsi_terjual_bangunan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_gudang`
-- (See below for the actual view)
--
CREATE TABLE `view_gudang` (
`id_gudang` varchar(20)
,`nama_gudang` varchar(100)
,`harga_gudang` varchar(20)
,`luas_gudang` varchar(10)
,`no_imb_gudang` varchar(50)
,`status_terjual_gudang` varchar(3)
,`deskripsi_terjual_gudang` varchar(50)
,`id_lokasi` varchar(9)
,`id_tanah` varchar(16)
,`nama_tanah` varchar(100)
,`alamat_tanah` varchar(100)
,`harga_tanah` varchar(20)
,`luas_tanah` varchar(10)
,`latitude` varchar(20)
,`longitude` varchar(20)
,`no_pbb` varchar(50)
,`biaya_pbb` varchar(50)
,`no_bphtb` varchar(50)
,`biaya_bphtb` varchar(50)
,`no_sertifikat` varchar(50)
,`tgl_berlaku_sertifikat` date
,`tgl_berakhir_sertifikat` date
,`status_pendayagunaan` varchar(3)
,`status_kepemilikan` varchar(3)
,`status_tanah` varchar(3)
,`status_terjual` varchar(3)
,`id_plant` varchar(4)
,`nama_lokasi` varchar(100)
,`alamat` varchar(100)
,`id_provinsi` int(11)
,`kabupaten` varchar(50)
,`kecamatan` varchar(50)
,`kode_pos` varchar(10)
,`lat` double
,`lng` double
,`nama_plant` varchar(50)
,`provinsi_nama` varchar(50)
,`deskripsi_pendayagunaan` varchar(50)
,`deskripsi_kepemilikan` varchar(50)
,`deskripsi_tanah` varchar(50)
,`deskripsi_terjual` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_lokasi`
-- (See below for the actual view)
--
CREATE TABLE `view_lokasi` (
`id_lokasi` varchar(9)
,`id_plant` varchar(4)
,`nama_lokasi` varchar(100)
,`alamat` varchar(100)
,`id_provinsi` int(11)
,`kabupaten` varchar(50)
,`kecamatan` varchar(50)
,`kode_pos` varchar(10)
,`lat` double
,`lng` double
,`nama_plant` varchar(50)
,`provinsi_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_tanah`
-- (See below for the actual view)
--
CREATE TABLE `view_tanah` (
`id_lokasi` varchar(9)
,`id_tanah` varchar(16)
,`nama_tanah` varchar(100)
,`alamat_tanah` varchar(100)
,`harga_tanah` varchar(20)
,`luas_tanah` varchar(10)
,`latitude` varchar(20)
,`longitude` varchar(20)
,`no_pbb` varchar(50)
,`biaya_pbb` varchar(50)
,`no_bphtb` varchar(50)
,`biaya_bphtb` varchar(50)
,`no_sertifikat` varchar(50)
,`tgl_berlaku_sertifikat` date
,`tgl_berakhir_sertifikat` date
,`status_pendayagunaan` varchar(3)
,`status_kepemilikan` varchar(3)
,`status_tanah` varchar(3)
,`status_terjual` varchar(3)
,`id_plant` varchar(4)
,`nama_lokasi` varchar(100)
,`alamat` varchar(100)
,`id_provinsi` int(11)
,`kabupaten` varchar(50)
,`kecamatan` varchar(50)
,`kode_pos` varchar(10)
,`lat` double
,`lng` double
,`nama_plant` varchar(50)
,`provinsi_nama` varchar(50)
,`deskripsi_pendayagunaan` varchar(50)
,`deskripsi_kepemilikan` varchar(50)
,`deskripsi_tanah` varchar(50)
,`deskripsi_terjual` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_wisma`
-- (See below for the actual view)
--
CREATE TABLE `view_wisma` (
`id_wisma` varchar(18)
,`nama_wisma` varchar(100)
,`harga_wisma` varchar(20)
,`luas_wisma` varchar(10)
,`no_imb_wisma` varchar(50)
,`status_rumah_wisma` varchar(3)
,`status_terjual_wisma` varchar(3)
,`status_layak_wisma` varchar(3)
,`deskripsi_rumah_wisma` varchar(50)
,`deskripsi_terjual_wisma` varchar(50)
,`deskripsi_layak_wisma` varchar(50)
,`id_lokasi` varchar(9)
,`id_tanah` varchar(16)
,`nama_tanah` varchar(100)
,`alamat_tanah` varchar(100)
,`harga_tanah` varchar(20)
,`luas_tanah` varchar(10)
,`latitude` varchar(20)
,`longitude` varchar(20)
,`no_pbb` varchar(50)
,`biaya_pbb` varchar(50)
,`no_bphtb` varchar(50)
,`biaya_bphtb` varchar(50)
,`no_sertifikat` varchar(50)
,`tgl_berlaku_sertifikat` date
,`tgl_berakhir_sertifikat` date
,`status_pendayagunaan` varchar(3)
,`status_kepemilikan` varchar(3)
,`status_tanah` varchar(3)
,`status_terjual` varchar(3)
,`id_plant` varchar(4)
,`nama_lokasi` varchar(100)
,`alamat` varchar(100)
,`id_provinsi` int(11)
,`kabupaten` varchar(50)
,`kecamatan` varchar(50)
,`kode_pos` varchar(10)
,`lat` double
,`lng` double
,`nama_plant` varchar(50)
,`provinsi_nama` varchar(50)
,`deskripsi_pendayagunaan` varchar(50)
,`deskripsi_kepemilikan` varchar(50)
,`deskripsi_tanah` varchar(50)
,`deskripsi_terjual` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_bangunan`
--
DROP TABLE IF EXISTS `view_bangunan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_bangunan`  AS  select `b`.`id_bangunan` AS `id_bangunan`,`b`.`nama_bangunan` AS `nama_bangunan`,`b`.`harga_bangunan` AS `harga_bangunan`,`b`.`luas_bangunan` AS `luas_bangunan`,`b`.`no_imb_bangunan` AS `no_imb_bangunan`,`b`.`status_layer` AS `status_layer_bangunan`,`b`.`status_terjual` AS `status_terjual_bangunan`,`t`.`id_lokasi` AS `id_lokasi`,`t`.`id_tanah` AS `id_tanah`,`t`.`nama_tanah` AS `nama_tanah`,`t`.`alamat_tanah` AS `alamat_tanah`,`t`.`harga_tanah` AS `harga_tanah`,`t`.`luas_tanah` AS `luas_tanah`,`t`.`latitude` AS `latitude`,`t`.`longitude` AS `longitude`,`t`.`no_pbb` AS `no_pbb`,`t`.`biaya_pbb` AS `biaya_pbb`,`t`.`no_bphtb` AS `no_bphtb`,`t`.`biaya_bphtb` AS `biaya_bphtb`,`t`.`no_sertifikat` AS `no_sertifikat`,`t`.`tgl_berlaku_sertifikat` AS `tgl_berlaku_sertifikat`,`t`.`tgl_berakhir_sertifikat` AS `tgl_berakhir_sertifikat`,`t`.`status_pendayagunaan` AS `status_pendayagunaan`,`t`.`status_kepemilikan` AS `status_kepemilikan`,`t`.`status_tanah` AS `status_tanah`,`t`.`status_terjual` AS `status_terjual`,`t`.`id_plant` AS `id_plant`,`t`.`nama_lokasi` AS `nama_lokasi`,`t`.`alamat` AS `alamat`,`t`.`id_provinsi` AS `id_provinsi`,`t`.`kabupaten` AS `kabupaten`,`t`.`kecamatan` AS `kecamatan`,`t`.`kode_pos` AS `kode_pos`,`t`.`lat` AS `lat`,`t`.`lng` AS `lng`,`t`.`nama_plant` AS `nama_plant`,`t`.`provinsi_nama` AS `provinsi_nama`,`t`.`deskripsi_pendayagunaan` AS `deskripsi_pendayagunaan`,`t`.`deskripsi_kepemilikan` AS `deskripsi_kepemilikan`,`t`.`deskripsi_tanah` AS `deskripsi_tanah`,`t`.`deskripsi_terjual` AS `deskripsi_terjual`,`sl`.`deskripsi_layer` AS `deskripsi_layer_bangunan`,`st`.`deskripsi_terjual` AS `deskripsi_terjual_bangunan` from (((`tb_bangunan` `b` left join `view_tanah` `t` on((`t`.`id_tanah` = `b`.`id_tanah`))) left join `tb_status_layer` `sl` on((`sl`.`id_layer` = `b`.`status_layer`))) left join `tb_status_terjual` `st` on((`st`.`id_terjual` = `b`.`status_terjual`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_gudang`
--
DROP TABLE IF EXISTS `view_gudang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_gudang`  AS  select `g`.`id_gudang` AS `id_gudang`,`g`.`nama_gudang` AS `nama_gudang`,`g`.`harga_gudang` AS `harga_gudang`,`g`.`luas_gudang` AS `luas_gudang`,`g`.`no_imb_gudang` AS `no_imb_gudang`,`g`.`status_terjual` AS `status_terjual_gudang`,`st`.`deskripsi_terjual` AS `deskripsi_terjual_gudang`,`t`.`id_lokasi` AS `id_lokasi`,`t`.`id_tanah` AS `id_tanah`,`t`.`nama_tanah` AS `nama_tanah`,`t`.`alamat_tanah` AS `alamat_tanah`,`t`.`harga_tanah` AS `harga_tanah`,`t`.`luas_tanah` AS `luas_tanah`,`t`.`latitude` AS `latitude`,`t`.`longitude` AS `longitude`,`t`.`no_pbb` AS `no_pbb`,`t`.`biaya_pbb` AS `biaya_pbb`,`t`.`no_bphtb` AS `no_bphtb`,`t`.`biaya_bphtb` AS `biaya_bphtb`,`t`.`no_sertifikat` AS `no_sertifikat`,`t`.`tgl_berlaku_sertifikat` AS `tgl_berlaku_sertifikat`,`t`.`tgl_berakhir_sertifikat` AS `tgl_berakhir_sertifikat`,`t`.`status_pendayagunaan` AS `status_pendayagunaan`,`t`.`status_kepemilikan` AS `status_kepemilikan`,`t`.`status_tanah` AS `status_tanah`,`t`.`status_terjual` AS `status_terjual`,`t`.`id_plant` AS `id_plant`,`t`.`nama_lokasi` AS `nama_lokasi`,`t`.`alamat` AS `alamat`,`t`.`id_provinsi` AS `id_provinsi`,`t`.`kabupaten` AS `kabupaten`,`t`.`kecamatan` AS `kecamatan`,`t`.`kode_pos` AS `kode_pos`,`t`.`lat` AS `lat`,`t`.`lng` AS `lng`,`t`.`nama_plant` AS `nama_plant`,`t`.`provinsi_nama` AS `provinsi_nama`,`t`.`deskripsi_pendayagunaan` AS `deskripsi_pendayagunaan`,`t`.`deskripsi_kepemilikan` AS `deskripsi_kepemilikan`,`t`.`deskripsi_tanah` AS `deskripsi_tanah`,`t`.`deskripsi_terjual` AS `deskripsi_terjual` from ((`tb_gudang` `g` left join `view_tanah` `t` on((`g`.`id_tanah` = `t`.`id_tanah`))) left join `tb_status_terjual` `st` on((`st`.`id_terjual` = `g`.`status_terjual`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_lokasi`
--
DROP TABLE IF EXISTS `view_lokasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_lokasi`  AS  select `l`.`id_lokasi` AS `id_lokasi`,`l`.`id_plant` AS `id_plant`,`l`.`nama_lokasi` AS `nama_lokasi`,`l`.`alamat` AS `alamat`,`l`.`id_provinsi` AS `id_provinsi`,`l`.`kabupaten` AS `kabupaten`,`l`.`kecamatan` AS `kecamatan`,`l`.`kode_pos` AS `kode_pos`,`l`.`lat` AS `lat`,`l`.`lng` AS `lng`,`p`.`nama_plant` AS `nama_plant`,`r`.`provinsi_nama` AS `provinsi_nama` from ((`tb_lokasi` `l` left join `tb_plant` `p` on((`p`.`id_plant` = `l`.`id_plant`))) left join `tb_provinsi` `r` on((`r`.`id_provinsi` = `l`.`id_provinsi`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_tanah`
--
DROP TABLE IF EXISTS `view_tanah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_tanah`  AS  select `t`.`id_lokasi` AS `id_lokasi`,`t`.`id_tanah` AS `id_tanah`,`t`.`nama_tanah` AS `nama_tanah`,`t`.`alamat_tanah` AS `alamat_tanah`,`t`.`harga_tanah` AS `harga_tanah`,`t`.`luas_tanah` AS `luas_tanah`,`t`.`latitude` AS `latitude`,`t`.`longitude` AS `longitude`,`t`.`no_pbb` AS `no_pbb`,`t`.`biaya_pbb` AS `biaya_pbb`,`t`.`no_bphtb` AS `no_bphtb`,`t`.`biaya_bphtb` AS `biaya_bphtb`,`t`.`no_sertifikat` AS `no_sertifikat`,`t`.`tgl_berlaku_sertifikat` AS `tgl_berlaku_sertifikat`,`t`.`tgl_berakhir_sertifikat` AS `tgl_berakhir_sertifikat`,`t`.`status_pendayagunaan` AS `status_pendayagunaan`,`t`.`status_kepemilikan` AS `status_kepemilikan`,`t`.`status_tanah` AS `status_tanah`,`t`.`status_terjual` AS `status_terjual`,`l`.`id_plant` AS `id_plant`,`l`.`nama_lokasi` AS `nama_lokasi`,`l`.`alamat` AS `alamat`,`l`.`id_provinsi` AS `id_provinsi`,`l`.`kabupaten` AS `kabupaten`,`l`.`kecamatan` AS `kecamatan`,`l`.`kode_pos` AS `kode_pos`,`l`.`lat` AS `lat`,`l`.`lng` AS `lng`,`l`.`nama_plant` AS `nama_plant`,`l`.`provinsi_nama` AS `provinsi_nama`,`p`.`deskripsi_pendayagunaan` AS `deskripsi_pendayagunaan`,`k`.`deskripsi_kepemilikan` AS `deskripsi_kepemilikan`,`tn`.`nama_tanah` AS `deskripsi_tanah`,`st`.`deskripsi_terjual` AS `deskripsi_terjual` from (((((`tb_tanah` `t` left join `view_lokasi` `l` on((`t`.`id_lokasi` = `l`.`id_lokasi`))) left join `tb_status_pendayagunaan` `p` on((`p`.`id_pendayagunaan` = `t`.`status_pendayagunaan`))) left join `tb_status_kepemilikan` `k` on((`k`.`id_status` = `t`.`status_kepemilikan`))) left join `tb_status_tanah` `tn` on((`tn`.`id_tanah` = `t`.`status_tanah`))) left join `tb_status_terjual` `st` on((`st`.`id_terjual` = `t`.`status_terjual`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_wisma`
--
DROP TABLE IF EXISTS `view_wisma`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_wisma`  AS  select `w`.`id_wisma` AS `id_wisma`,`w`.`nama_wisma` AS `nama_wisma`,`w`.`harga_wisma` AS `harga_wisma`,`w`.`luas_wisma` AS `luas_wisma`,`w`.`no_imb_wisma` AS `no_imb_wisma`,`w`.`status_rumah` AS `status_rumah_wisma`,`w`.`status_terjual` AS `status_terjual_wisma`,`w`.`status_layak` AS `status_layak_wisma`,`sr`.`deskripsi_rumah` AS `deskripsi_rumah_wisma`,`st`.`deskripsi_terjual` AS `deskripsi_terjual_wisma`,`sl`.`deskripsi_layak` AS `deskripsi_layak_wisma`,`t`.`id_lokasi` AS `id_lokasi`,`t`.`id_tanah` AS `id_tanah`,`t`.`nama_tanah` AS `nama_tanah`,`t`.`alamat_tanah` AS `alamat_tanah`,`t`.`harga_tanah` AS `harga_tanah`,`t`.`luas_tanah` AS `luas_tanah`,`t`.`latitude` AS `latitude`,`t`.`longitude` AS `longitude`,`t`.`no_pbb` AS `no_pbb`,`t`.`biaya_pbb` AS `biaya_pbb`,`t`.`no_bphtb` AS `no_bphtb`,`t`.`biaya_bphtb` AS `biaya_bphtb`,`t`.`no_sertifikat` AS `no_sertifikat`,`t`.`tgl_berlaku_sertifikat` AS `tgl_berlaku_sertifikat`,`t`.`tgl_berakhir_sertifikat` AS `tgl_berakhir_sertifikat`,`t`.`status_pendayagunaan` AS `status_pendayagunaan`,`t`.`status_kepemilikan` AS `status_kepemilikan`,`t`.`status_tanah` AS `status_tanah`,`t`.`status_terjual` AS `status_terjual`,`t`.`id_plant` AS `id_plant`,`t`.`nama_lokasi` AS `nama_lokasi`,`t`.`alamat` AS `alamat`,`t`.`id_provinsi` AS `id_provinsi`,`t`.`kabupaten` AS `kabupaten`,`t`.`kecamatan` AS `kecamatan`,`t`.`kode_pos` AS `kode_pos`,`t`.`lat` AS `lat`,`t`.`lng` AS `lng`,`t`.`nama_plant` AS `nama_plant`,`t`.`provinsi_nama` AS `provinsi_nama`,`t`.`deskripsi_pendayagunaan` AS `deskripsi_pendayagunaan`,`t`.`deskripsi_kepemilikan` AS `deskripsi_kepemilikan`,`t`.`deskripsi_tanah` AS `deskripsi_tanah`,`t`.`deskripsi_terjual` AS `deskripsi_terjual` from ((((`tb_wisma` `w` left join `view_tanah` `t` on((`t`.`id_tanah` = `w`.`id_tanah`))) left join `tb_status_rumah` `sr` on((`sr`.`id_rumah` = `w`.`status_rumah`))) left join `tb_status_terjual` `st` on((`st`.`id_terjual` = `w`.`status_terjual`))) left join `tb_status_layak` `sl` on((`sl`.`id_layak` = `w`.`status_layak`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_area`
--
ALTER TABLE `tb_area`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `tb_bangunan`
--
ALTER TABLE `tb_bangunan`
  ADD PRIMARY KEY (`id_bangunan`);

--
-- Indexes for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_notif`
--
ALTER TABLE `tb_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_plant`
--
ALTER TABLE `tb_plant`
  ADD PRIMARY KEY (`id_plant`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_rayon`
--
ALTER TABLE `tb_rayon`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `tb_status_kepemilikan`
--
ALTER TABLE `tb_status_kepemilikan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_status_layak`
--
ALTER TABLE `tb_status_layak`
  ADD PRIMARY KEY (`id_layak`);

--
-- Indexes for table `tb_status_layer`
--
ALTER TABLE `tb_status_layer`
  ADD PRIMARY KEY (`id_layer`);

--
-- Indexes for table `tb_status_pendayagunaan`
--
ALTER TABLE `tb_status_pendayagunaan`
  ADD PRIMARY KEY (`id_pendayagunaan`);

--
-- Indexes for table `tb_status_rumah`
--
ALTER TABLE `tb_status_rumah`
  ADD PRIMARY KEY (`id_rumah`);

--
-- Indexes for table `tb_status_tanah`
--
ALTER TABLE `tb_status_tanah`
  ADD PRIMARY KEY (`id_tanah`);

--
-- Indexes for table `tb_status_terjual`
--
ALTER TABLE `tb_status_terjual`
  ADD PRIMARY KEY (`id_terjual`);

--
-- Indexes for table `tb_tanah`
--
ALTER TABLE `tb_tanah`
  ADD PRIMARY KEY (`id_tanah`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wisma`
--
ALTER TABLE `tb_wisma`
  ADD PRIMARY KEY (`id_wisma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_area`
--
ALTER TABLE `tb_area`
  MODIFY `no_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_notif`
--
ALTER TABLE `tb_notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_rayon`
--
ALTER TABLE `tb_rayon`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
