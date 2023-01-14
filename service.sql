-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 07.12
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_kendaraan`, `ket`, `gambar`) VALUES
(1, 3, 'gambar 1', 'gambar (1).jpg'),
(2, 3, 'gambar 2', 'gambar (2).jpg'),
(3, 3, 'gambar 3', 'gambar (3).jpg'),
(4, 3, 'gambar 4', 'gambar (4).jpg'),
(5, 3, 'gambar 5', 'gambar (5).jpg'),
(11, 2, 'Gambar 3', '7c6c3183baf8ec0e70c1050e94590274.png'),
(8, 2, 'ket 1', '007515200_1532563175-Jaringan_irigasi-ok.jpg'),
(12, 2, 'asdasd', 'Cadangan_Emas_Palsu_China_Jadi_Skandal_Terbesar_Dalam_Sejarah.jpg'),
(26, 1, 'depan', '2021-10-18-08-43-50_0.png'),
(27, 5, 'Samping', 'mobil4.jpg'),
(28, 6, '2', '9.jpg'),
(31, 31, 'what are you doing', '91.jpg'),
(22, 7, 'Xiaomi Mi Air 2S TWS 1', 'IMG_1497.jpg'),
(23, 7, 'Xiaomi Mi Air 2S TWS 2', 'xiaomi-mi-airdots-pro-2-tws-bluetooth-earphone-white-1.jpg'),
(24, 7, 'Xiaomi Mi Air 2S TWS 3', 'xiaomi-mi-airdots-pro-2-tws-earphone-white.jpg'),
(25, 8, 'Dinar', '81823543_a1468d3e-2b0d-4da7-9aa4-3314e51b75c6_700_700.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(12, 'Roda 2'),
(13, 'Roda 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `id_kendaraan` int(32) NOT NULL,
  `pemegang_kendaraan` varchar(32) NOT NULL,
  `merk` varchar(32) NOT NULL,
  `id_kategori` int(32) NOT NULL,
  `plat` varchar(9) NOT NULL,
  `daya_listrik` varchar(32) NOT NULL,
  `tahun_pembuatan` varchar(32) NOT NULL,
  `nomor_rangka` varchar(32) NOT NULL,
  `nomor_mesin` varchar(32) NOT NULL,
  `warna` varchar(32) NOT NULL,
  `nomor_bpkb` int(32) NOT NULL,
  `perpanjangan` varchar(32) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id_kendaraan`, `pemegang_kendaraan`, `merk`, `id_kategori`, `plat`, `daya_listrik`, `tahun_pembuatan`, `nomor_rangka`, `nomor_mesin`, `warna`, `nomor_bpkb`, `perpanjangan`, `gambar`) VALUES
(6, 'akarin', 'suzuki', 13, 'D200f', '200cc', '1987', '', '', '', 0, '2015', '123.jpg'),
(5, 'kisara', 'supra', 13, 'D256F', '150c', '2000', '', '', '', 0, '20000', 'mobil3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perawatan`
--

CREATE TABLE `tbl_perawatan` (
  `id_perawatan` int(11) NOT NULL,
  `pemegang_kendaraan` varchar(32) NOT NULL,
  `plat` varchar(11) NOT NULL,
  `pemeriksaan_suspansi` varchar(11) NOT NULL,
  `pemeriksaan_oli` varchar(11) NOT NULL,
  `pemeriksaan_rem` varchar(11) NOT NULL,
  `pemeriksaan_lampu` varchar(11) NOT NULL,
  `pemeriksaan_kelayakan_ban` varchar(11) NOT NULL,
  `pemeriksaan_aki` varchar(11) NOT NULL,
  `pemeriksaan_radiator` varchar(11) NOT NULL,
  `pemeriksaan_mesin` varchar(11) NOT NULL,
  `pemeriksaan_busi` varchar(11) NOT NULL,
  `pemeriksaan_atf` varchar(11) NOT NULL,
  `pemeriksaan_filter_udara` varchar(11) NOT NULL,
  `pemeriksaan_karet_wiper` varchar(11) NOT NULL,
  `km_terakhir` varchar(11) NOT NULL,
  `tanggal_perawatan` varchar(32) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `keterangan` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_perawatan`
--

INSERT INTO `tbl_perawatan` (`id_perawatan`, `pemegang_kendaraan`, `plat`, `pemeriksaan_suspansi`, `pemeriksaan_oli`, `pemeriksaan_rem`, `pemeriksaan_lampu`, `pemeriksaan_kelayakan_ban`, `pemeriksaan_aki`, `pemeriksaan_radiator`, `pemeriksaan_mesin`, `pemeriksaan_busi`, `pemeriksaan_atf`, `pemeriksaan_filter_udara`, `pemeriksaan_karet_wiper`, `km_terakhir`, `tanggal_perawatan`, `bukti`, `keterangan`) VALUES
(136, 'cek', 'test', 'Perbaiki', 'Ganti', 'Ganti', 'Perbaiki', 'Perbaiki', 'Perbaiki', 'Perbaiki', 'Perbaiki', 'Tidak', 'Perbaiki', 'Perbaiki', 'Tidak', '9999', '2022-01-06', '191.jpg', '00099'),
(138, 'gintoki', 'K4tsur4', 'Perbaiki', 'Ganti', 'Ganti', 'Perbaiki', 'Ganti', 'Perbaiki', 'Perbaiki', 'Perbaiki', 'Perbaiki', 'Perbaiki', 'Perbaiki', 'Ganti', '10000', '2022-01-07', 'cinta1.jpg', 'watsup bro'),
(139, 'akarin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '192.jpg', ''),
(140, 'akarin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '181.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'Mardalius', 'admin', 'admin', 1),
(2, 'Budi', 'user', 'user', 2),
(7, 'udin', 'udin', 'wat', 1),
(5, 'akarin', 'akarin', 'akarin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`) USING BTREE;

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indeks untuk tabel `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `tbl_perawatan`
--
ALTER TABLE `tbl_perawatan`
  ADD PRIMARY KEY (`id_perawatan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  MODIFY `id_kendaraan` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_perawatan`
--
ALTER TABLE `tbl_perawatan`
  MODIFY `id_perawatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
