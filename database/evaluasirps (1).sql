-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2022 pada 05.57
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluasirps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`userid`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'surya', 'surya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(25) NOT NULL,
  `nidn` varchar(25) DEFAULT NULL,
  `namadosen` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `notelp` varchar(25) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `kodeprodi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nidn`, `namadosen`, `alamat`, `notelp`, `userid`, `kodeprodi`) VALUES
('111222', '765437', 'Sujiwo Tejo', 'singaraja', '0893456745', 7, 1100),
('122233311', '4546532421', 'Rahma Ardana', 'denpasar', '09876568756', 3, 1221),
('19289182', '29382398', 'Mega Darma', 'tabanan', '082923123', 2, 6633),
('22222', '345656', 'Muhamad Santoso', 'denpasar', '08934567', 9, 1100),
('333111', '432109', 'Putu Bagus', 'tabanan', '098123456', 0, 2299),
('335566', '56789878', 'Asep Akbar', 'klungkung', '08145693451', 12, 1111),
('888333', '210987', 'Supada', 'denpasar', '098675355', 0, 4321),
('8888881', '98885751', 'Rai Gayatri (sudah edit)', 'tabanan', '08145693451', 13, 1100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulumprodi`
--

CREATE TABLE `kurikulumprodi` (
  `kode` int(11) NOT NULL,
  `kurikulum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kurikulumprodi`
--

INSERT INTO `kurikulumprodi` (`kode`, `kurikulum`) VALUES
(78901, '2011'),
(67890, '2012'),
(23456, '2013'),
(89012, '2014'),
(43210, '2015'),
(34567, '2016'),
(45678, '2018'),
(90123, '2019'),
(98765, '2021'),
(12345, '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(25) NOT NULL,
  `namamahasiswa` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `notelp` varchar(50) DEFAULT NULL,
  `tahunditerima` int(11) DEFAULT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `kodeprodi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `namamahasiswa`, `alamat`, `notelp`, `tahunditerima`, `userid`, `kodeprodi`) VALUES
('2015354022', 'Ardhita', 'denpasar', '08934234', 2111, '8', 1111),
('2015354029', 'Surya Riski Dewanta', 'singaraja', '21414', 52542, '5', 5678),
('2015354040', 'Karina Gaya Tri', 'tabanan', '0869534856', 2020, '11', 6666);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemk` varchar(15) NOT NULL,
  `namamk` varchar(100) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `sksteori` int(11) DEFAULT NULL,
  `skspraktek` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kurikulum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kodemk`, `namamk`, `sks`, `sksteori`, `skspraktek`, `semester`, `kurikulum`) VALUES
('AM7', 'Aljabar Matriks', 3, 3, 0, 1, '2012'),
('BB12', 'Bahasa Bali', 3, 1, 2, 2, '2011'),
('BI123', 'Bahasa Inggris', 3, 2, 1, 3, '2022'),
('PO9', 'Pemrogaman Orientasi', 4, 2, 2, 4, '2015'),
('rf4a', 'aaaaaa', 3, 4, 5, 3, '2019'),
('WD1', 'web dasar', 4, 1, 3, 6, '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `programstudi`
--

CREATE TABLE `programstudi` (
  `kodeprodi` int(11) NOT NULL,
  `namaprodi` varchar(50) DEFAULT NULL,
  `nipkaprodi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `programstudi`
--

INSERT INTO `programstudi` (`kodeprodi`, `namaprodi`, `nipkaprodi`) VALUES
(1100, 'Sipil', '543219'),
(1111, 'TRPL', '098765'),
(1221, 'Manajemen Informasi', '345678'),
(2299, 'sastra Inggris', '210987'),
(4321, 'Listrik', '765432'),
(5678, 'Otomasi', '432109'),
(6633, 'Arsitektur', '654321'),
(6666, 'Pariwisata', '567890'),
(8899, 'Akuntansi', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rps`
--

CREATE TABLE `rps` (
  `noidrps` int(11) NOT NULL,
  `semesterr` varchar(50) DEFAULT NULL,
  `kodemk` varchar(15) DEFAULT NULL,
  `nip` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rps`
--

INSERT INTO `rps` (`noidrps`, `semesterr`, `kodemk`, `nip`) VALUES
(1234567908, '5', 'BI123', '333111'),
(1234567909, '2', 'WD1', '22222'),
(1234567910, '3', 'BI123', '888333'),
(1234567911, '1', 'BB12', '22222'),
(1234567912, '3', 'BB12', '19289182');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpsdetail`
--

CREATE TABLE `rpsdetail` (
  `noiddetail` int(11) NOT NULL,
  `noidrps` int(11) DEFAULT NULL,
  `minggu` int(11) DEFAULT NULL,
  `materi` varchar(255) DEFAULT NULL,
  `sesuai` tinyint(1) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rpsdetail`
--

INSERT INTO `rpsdetail` (`noiddetail`, `noidrps`, `minggu`, `materi`, `sesuai`, `keterangan`) VALUES
(3, 1234567909, 4, 'Aljabar', 0, 'Tidak'),
(5, 1234567908, 5, 'Aljabar', 1, 'Hadir'),
(6, 1234567908, 5, 'b ingris', 0, 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','mahasiswa','dosen') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'ega', 'ega', 'dosen'),
(3, 'rahma', 'rahma', 'dosen'),
(5, 'surya12', 'surya12', 'mahasiswa'),
(7, 'Sujiwo', 'test1', 'dosen'),
(8, 'ardhita', 'admin', 'mahasiswa'),
(11, 'Karina123', 'admin', 'mahasiswa'),
(12, 'asep', 'asep', 'dosen'),
(13, 'rai', 'rai', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indeks untuk tabel `kurikulumprodi`
--
ALTER TABLE `kurikulumprodi`
  ADD PRIMARY KEY (`kurikulum`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodemk`),
  ADD KEY `fk_kode_kurikulum` (`kurikulum`);

--
-- Indeks untuk tabel `programstudi`
--
ALTER TABLE `programstudi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Indeks untuk tabel `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`noidrps`),
  ADD KEY `kodemk` (`kodemk`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `rpsdetail`
--
ALTER TABLE `rpsdetail`
  ADD PRIMARY KEY (`noiddetail`),
  ADD KEY `noidrps` (`noidrps`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rps`
--
ALTER TABLE `rps`
  MODIFY `noidrps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567913;

--
-- AUTO_INCREMENT untuk tabel `rpsdetail`
--
ALTER TABLE `rpsdetail`
  MODIFY `noiddetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `programstudi` (`kodeprodi`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `programstudi` (`kodeprodi`);

--
-- Ketidakleluasaan untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `fk_kode_kurikulum` FOREIGN KEY (`kurikulum`) REFERENCES `kurikulumprodi` (`kurikulum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rps`
--
ALTER TABLE `rps`
  ADD CONSTRAINT `rps_ibfk_1` FOREIGN KEY (`kodemk`) REFERENCES `matakuliah` (`kodemk`),
  ADD CONSTRAINT `rps_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`);

--
-- Ketidakleluasaan untuk tabel `rpsdetail`
--
ALTER TABLE `rpsdetail`
  ADD CONSTRAINT `rpsdetail_ibfk_1` FOREIGN KEY (`noidrps`) REFERENCES `rps` (`noidrps`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
