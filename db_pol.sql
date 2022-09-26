-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2020 pada 09.05
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pol`
--

CREATE TABLE `tbl_pol` (
  `id` int(25) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `nama3` varchar(100) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pol`
--

INSERT INTO `tbl_pol` (`id`, `nama1`, `nama2`, `nama3`, `lat`, `lng`, `lokasi`, `keterangan`) VALUES
(4, 'BRIPKA MISBAHUDDIN', 'BIGPOL ZAHID NUR,SH', 'putaran smp 10', '-0.522066', '117.116215', 'Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur', 'Sementara'),
(5, 'AIPDA SLAMET EKO DARMO,SH', 'BRIPKA RAJAIHAT BANJAR,SH', 'depan MAPOLRESTA', '-0.5168377', '117.1161895', 'Jl. Slamet Riyadi No.1, Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75126', 'Sementara'),
(6, 'AIPTU MAS^UD ', 'BRIPTU RIDWAN RAHMAN', 'putaran masjid karang asam', '-0.512228', '117.1175782', 'JL. S. Riyadi, RT. 12, Karang Asam Ilir, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', 'Sementara'),
(7, 'AIPTU ACHMADI,SH', 'AIPDA SUPRIYANTO', 'NSS', '-0.5102705', '117.1172162', 'Jl. Slamet Riyadi, Karang Asam Ilir, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', 'Sementara'),
(8, 'AIPDA WAHYU IMAN TEGUH', 'BRIPDA BAGAS HERLAMBANG', 'putaran masjid islamic center', '-0.5025565', '117.1221009', 'Tlk. Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur', 'Sementara'),
(9, 'AIPDA SENO AGUS K,SH', 'BRIGPOL ARIE SOEHARYADI', 'simpang raudah', '-0.4997585', '117.130461', 'Tlk. Lerong Ilir, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', 'Sementara'),
(10, 'AIPTU SUREDY', 'BRIPKA USMAN HARIYANTO', 'simpang 3 cermai', '-0.500807', '117.135211', 'Jl. Gajah Mada, Jawa, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243', 'Sementara'),
(11, 'AIPTU HERRY SISWANTO,SH', 'AIPTU DODI ERWAN SUSILO', 'putaran kantor gubernur', '-0.5013961', '117.1391323', 'Jawa, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242', 'Sementara'),
(12, 'AIPTU SUPRI DWI YANTA', 'I PUTU YUDIANA P,SH', 'simpang kantor pos', '-0.5024588', '117.1430078', 'Jl. Gajah Mada No.15, Bugis, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75111', 'Sementara'),
(13, 'AIPTU HERRY HENDRAYANTO', 'BRIPKA ANTONIUS SUSILO', 'simpang 4 colorado', '-0.4990637', '117.1438074', 'Jl. W.R. Supratman No.3, Bugis, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75121', 'Sementara'),
(14, 'AIPTU PUTUT WIBOWO', 'BRIPKA ANDI SUPRIYANTO', 'simpang 3 hotel mesra', '-0.4895841', '117.1456368', 'Jl. Kesuma Bangsa, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242', 'Sementara'),
(15, 'AIPTU BASRI ', 'AIPDA ARIP WAHYUDI , SH', 'simpang 3 am sangaji', '-0.4902211', '117.152919', 'Bandara, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242', 'Sementara'),
(16, 'AIPDA DUDI HERMANTO', 'BRIPTU BASOFI ZOHARANA', 'putaran smk 1 pahlawan', '-0.4875204', '117.1472284', 'Jl. Pahlawan No.04, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242', 'Sementara'),
(17, 'AIPDA SIRAYUM MUNIRI', 'BRIPKA RENDRA NUR', 'putaran perniagaan', '-0.4840592', '117.1498876', 'Jl. Perniagaan No.1, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75117', 'Sementara'),
(18, 'AIPDA SUGENG RIYANTO', 'BRIPTU ALEX SUBAGIYO', 'simpang cendana', '-0.5021044', '117.1169289', 'Jl. Ulin, Karang Anyar, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', 'Sementara'),
(19, 'BRIPKA MUJIANTO', 'BRIPTU M. REZKY RENALDY', 'simpang 4 air putih', '-0.4849446', '117.1240704', 'Jl. P Antasari, Air Putih, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75124', 'Sementara'),
(20, ' BRIPKA RUSMANTO', 'BRIGPOL RUT PRASWONO', 'simpang 4 bone', '-0.4724007', '117.1364011', 'Jl. Ahmad Yani, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243', 'Sementara'),
(21, 'BRIPKA SUHAIBAR KHOLID,SH', 'BRIPKA PRASETYONO,SH', 'simpang 3 anggur', '-0.4730239', '117.140977', 'Jl. Anggur No.39, RT.57, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75123', 'Sementara'),
(22, 'AIPDA ANDIK BUDIARTO', 'BRIPTU M.SUFYAN AT SAURI', 'simpang 4 lai', '-0.4742421', '117.143957', 'Jl. Lai,Gn. Kelua,Kec. Samarinda Ulu,Kota Samarinda,Kalimantan Timur 75243', 'Sementara'),
(23, 'AIPDA IRAWAN CHANDRA', 'BRIGPOL PANDANG GIOVANI', 'depan pasar segiri', '-0.4821007', '117.1487185', 'Ruko Permata Kaltim Jl. Pahlawan No.14, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242', 'Sementara'),
(24, 'BRIPKA HADI MARTONO ,SH', 'BRIPTU ANDI ANA PUTRA S.,SH', 'gunung mangga', '-0.5076357', '117.1636415', 'Jl. Sultan Alimuddin, Selili, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75251', 'Sementara'),
(25, 'BRIPKA HANDONNY SETIAWAN', 'BRIPTU EKA SAFI^I NURIYANTO', 'sungai dama', '-0.5027905', '117.1582496', 'Jl. Jelawat, Sungai Dama, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75115', 'Sementara'),
(28, 'AIPTU HARIYADI', 'BRIPKA WAHTUDI', 'pos meranti', '-0.5053582', '117.1197673', 'Jl. Slamet Riyadi, Tlk. Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', 'Tetap'),
(29, 'BRIPKA AGUS K', 'BRIPKA YUDIANSYAH', 'pos jembatan', '-0.5193282', '117.1166225', 'Jl. Slamet Riyadi No.268, Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', 'Tetap'),
(30, 'AIPDA AGUS R', 'BRIPTU PATTY RICARDO', 'pos suryansyah', '-0.5031075', '117.1584804', 'Jl. Pangeran Suriansyah No.4, Karang Mumus, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242', 'Tetap'),
(31, 'BRIPKA BAYU EKO S', 'BRIPKA YUDI S', 'pos vorvo', '-0.475059', '117.1457769', 'Samarinda, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243', 'Tetap'),
(32, 'BRIPKA BUDI S', 'BRIPKA ZIA K', 'pos darjat', '-0.4949351', '117.1486782', 'Jl. Dahlia No.4, Bugis, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242', 'Tetap'),
(33, 'AIPDA M.MUNIP NANANG', 'BRIPKA BAMBANG P', 'pos muara', '-0.500482', '117.1259095', 'Jl. Slamet Riyadi No.13, Tlk. Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75127', 'Tetap'),
(34, 'AIPDA IWAN P', 'BRIGPOL M.ROBIANSYAH', 'pos bank kaltim', '-0.5013268', '117.1435806', 'Jl. Jend. Sudirman, Bugis, Samarinda, Kota Samarinda, Kalimantan Timur 75111', 'Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pos`
--

CREATE TABLE `tb_pos` (
  `id` int(11) NOT NULL,
  `nama1` varchar(255) NOT NULL,
  `nama2` varchar(255) NOT NULL,
  `nama3` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pos`
--

INSERT INTO `tb_pos` (`id`, `nama1`, `nama2`, `nama3`, `lat`, `lng`, `lokasi`, `keterangan`) VALUES
(2, ' Nursalam', 'irsham', 'pos slamet riyadi', '-0.4637598', '117.146178', 'klfsl', 'kjsdj'),
(3, 'gaduk', 'aldy', 'perjuangan', '-0.505437', '117.1529038', 'perjuangan 9', 'sehari aja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pol`
--
ALTER TABLE `tbl_pol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pos`
--
ALTER TABLE `tb_pos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pol`
--
ALTER TABLE `tbl_pol`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pos`
--
ALTER TABLE `tb_pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
