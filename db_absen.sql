-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2020 pada 17.21
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawaia`
--

CREATE TABLE `tbl_pegawaia` (
  `nip` varchar(20) NOT NULL,
  `id_user` int(5) NOT NULL,
  `kd_agama` int(5) NOT NULL,
  `kd_jabatan` int(5) NOT NULL,
  `kd_status` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int(11) NOT NULL,
  `nip` char(10) NOT NULL,
  `tgl_absensi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jam_masuk` time NOT NULL,
  `jam_pulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'kristen'),
(3, 'Khatolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Kepercyaan Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(146, 'Direktur'),
(147, 'Manager'),
(148, 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` varchar(10) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `kd_agama` int(11) NOT NULL,
  `kd_jabatan` int(11) NOT NULL,
  `kd_status` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmpt_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `id_user`, `kd_agama`, `kd_jabatan`, `kd_status`, `nama`, `tmpt_lahir`, `tgl_lahir`, `alamat`) VALUES
('12345', NULL, 1, 146, 1, 'Andi', 'Cilacap', '2020-10-09', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'aktif'),
(2, 'tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Direktur','Manager','Staff','Karyawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
('12345', 'awal', '973090d208b119f93d00f73d176477900675ec32', 'Direktur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pegawaia`
--
ALTER TABLE `tbl_pegawaia`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kd_agama` (`kd_agama`),
  ADD KEY `kd_jabatan` (`kd_jabatan`),
  ADD KEY `kd_status` (`kd_status`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`kd_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pegawai_ibfk_2` FOREIGN KEY (`kd_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pegawai_ibfk_3` FOREIGN KEY (`kd_status`) REFERENCES `tb_status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
