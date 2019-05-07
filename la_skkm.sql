-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2019 pada 05.35
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la_skkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknologi Informasi'),
(2, 'Teknik Sipil'),
(3, 'Teknik Mesin'),
(4, 'Teknik Elektro'),
(5, 'Teknik Kimia'),
(6, 'Akutansi'),
(7, 'Administrasi Niaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori_point` int(11) NOT NULL,
  `nama_kategori` varchar(111) NOT NULL,
  `point` float(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori_point`, `nama_kategori`, `point`) VALUES
(1, 'Seminar', 1.0),
(2, 'Workshop', 2.0),
(3, 'Penelitian', 2.0),
(4, 'Kompetisi', 1.0),
(5, 'Keanggotaan', 1.0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(5) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `fk_kategori_kegiatan` int(11) NOT NULL,
  `dibuat` int(11) NOT NULL,
  `tggl_kegiatan` date NOT NULL,
  `kuota` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tggl_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `terbit` enum('y','t','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `fk_kategori_kegiatan`, `dibuat`, `tggl_kegiatan`, `kuota`, `gambar`, `tggl_buat`, `terbit`) VALUES
(13, 'seminar', 3, 1, '2019-12-31', 200, 'sem11.jpg', '2019-04-30 13:42:07', 't'),
(15, 'seminar 3', 5, 3, '2019-12-31', 200, 'foto1.jpg', '2019-05-01 16:54:06', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_pengguna`
--

CREATE TABLE `kegiatan_pengguna` (
  `id_daftar_keg` int(11) NOT NULL,
  `fk_id_keg` int(11) NOT NULL,
  `nama_mhs` int(11) NOT NULL,
  `tggl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'administrator'),
(2, 'DPK'),
(3, 'BEM'),
(4, 'Himpunan'),
(5, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `fk_level_id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `nim` int(16) NOT NULL,
  `nama_lengkap` varchar(111) NOT NULL,
  `fk_id_jurusan` int(11) NOT NULL,
  `fk_id_prodi` int(11) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `telpon` int(12) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL,
  `data_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `fk_level_id`, `username`, `password`, `nim`, `nama_lengkap`, `fk_id_jurusan`, `fk_id_prodi`, `tahun_masuk`, `telpon`, `foto`, `status`, `data_dibuat`) VALUES
(3, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 123, 'administrator', 1, 2, 0, 812312313, '', 0, '2019-04-30 14:08:21'),
(4, 2, 'dpk1', '1fd4318fd3120a458cab89556f7d81ef', 0, 'TEKNOLOGI INFORMASI', 1, 1, 0, 0, 'iconfinder_JD-02_2625525.png', 0, '2019-05-01 17:51:25'),
(8, 3, 'bem', 'd3c654d99bdfaf101e012bfe2810679e', 123, 'nama bem\r\n\r\n', 4, 1, 0, 0, '', 0, '2019-04-30 14:08:21'),
(9, 4, 'himpunan', '35a9bb487886b44ef482487c79c16142', 123, 'cas', 2, 18, 0, 0, '', 0, '2019-04-30 14:08:21'),
(10, 5, 'mahasiswa', '5787be38ee03a9ae5360f54d9026465f', 123, 'ade fajar', 3, 19, 0, 0, '', 0, '2019-04-30 17:02:18'),
(12, 5, 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 12387, 'ade fajarr', 1, 19, 0, 0, '', 0, '2019-04-30 17:02:26'),
(20, 5, 'cas', 'f90721c90de9bd9ef516bea0b184fd30', 637, 'casita', 7, 19, 1, 1, 'foto11.jpg', 0, '2019-05-01 16:04:55'),
(21, 5, 'adeade', 'cd1d94ae4c7031077ce66ffdf0ee24bb', 12321, 'ade', 7, 19, 0, 0, 'default.jpg', 1, '2019-05-01 15:39:38'),
(24, 2, 'dpk2', 'cf7ec29490e14b5ea21508a6d24300df', 0, 'AKUNTANSI', 6, 17, 0, 0, 'iconfinder_JD-01_26255262.png', 0, '2019-05-01 17:51:42'),
(25, 5, 'yeah', '29814d7ba6b9db8d5ab57fd57ceb9c1a', 123, 'ade fajar', 4, 17, 2016, 123, 'foto12.jpg', 1, '2019-05-01 17:35:36'),
(28, 4, 'jnj', 'd41d8cd98f00b204e9800998ecf8427e', 23, 'e', 7, 6, 2012, 0, 'foto14.jpg', 0, '2019-05-02 17:56:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`) VALUES
(1, 'Pemberitahuan !!!', 'Sertifikat yang tidak ada namanya harap di beri nama sebelum di upload!\r\n<br><br>\r\nPenguploadan sertifikat, wajib dalam bentuk scan berwarna! Selain dalam bentuk scan, sertifikat tidak dapat diverikasi!\r\n<br><br>\r\nDiberitahukan kepada seluruh mahasiswa bahwa daftar kegiatan yang dapat diunggah di website SKKM adalah daftar kegiatan yang diikuti selama masa studi di Politeknik Negeri Malang. Daftar kegiatan di luar masa studi tidak dapat dihitung dalam angka kredit SKKM.\r\nDiwajibkan mengunggah foto formal di web SKKM karena akan tercetak di Form SKKM dan SK SKKM.\r\n<br><br>\r\nBerhak mendapatkan fasilitas percepatan birokrasi SKKM khusus mahasiswa yang diterima kerja lebih awal sebelum wisuda atau mahasiswa yang mengikuti sidang skripsi/TA jalur khusus karena diterima kerja, dengan menunjukkan bukti telah diterima kerja atau LOA (Letter of Acceptance) dari perusahaan secara tertulis kepada HMJ dan BEM.\r\n<br><br>\r\nUntuk mahasiswa alumni yang belum menyelesaikan tanggungan SKKM dimohon segera menghubungi HMJ dan BEM.\r\nPertanyaan lebih lanjut dapat menghubungi Himpunan Mahasiswa Jurusan (HMJ) masing-masing:<br>\r\nHME          :+62821-1474-6476   (Aditya)<br>\r\nHMM         :+62815-5509-130     (Yaksa)<br>\r\nHMS          :+62878-6548-4859  (Nirwan)<br>\r\nHMA          :+62812-3507-6406   (Rama)<br>\r\nHIMANIA:+62896-5262-7733     (Dita)<br>\r\nHMTK       :+62823-3778-6946  (Yasa)<br>\r\nHMTI        :+62823-3547-7259   (Fani)<br>\r\nCatatan Khusus:<br>\r\n<br>\r\nKHUSUS UNTUK SEGALA BENTUK PIAGAM SERTIFIKASI, TOEIC, TOEFL, IELTS, SERTIFIKAT TES URIN, DDM/DIPAM JURUSAN, PESERTA DIES NATALIS UKM/HMJ/LT, SERTIFIKAT MAGANG TIDAK DAPAT DIVERIFIKASI.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `point`
--

CREATE TABLE `point` (
  `id_point` int(10) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  `no_sertifikat` text NOT NULL,
  `nama_sertifikat` varchar(111) NOT NULL,
  `foto_sertifikat` varchar(111) NOT NULL,
  `fk_id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `point`
--

INSERT INTO `point` (`id_point`, `fk_id_user`, `no_sertifikat`, `nama_sertifikat`, `foto_sertifikat`, `fk_id_kategori`) VALUES
(1, 10, '123', 'Seminar 1', '123', 1),
(2, 10, 'wqei12', 'Workshop 2', 'qe', 2),
(3, 10, 'qw12', 'Penelitian 3', '12', 3),
(4, 10, 'qwe', 'kompetisi', 'weq', 4),
(5, 10, 'Keanggotaan', 'Anggota HMJ', 'ewq', 5),
(6, 9, 'qwe', 'Seminaaar', 'qwe', 1),
(7, 9, 'qwe', 'Workskoopp', 'wqe', 2),
(8, 9, 'eqw', 'Penel', 'qwe', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `point_pengguna`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `point_pengguna` (
`fk_id_user` int(11)
,`id_point` int(10)
,`id_kategori_point` int(11)
,`point` float(11,1)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `fk_id_jurusan` int(11) NOT NULL,
  `nama_prodi` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `fk_id_jurusan`, `nama_prodi`) VALUES
(1, 1, 'DV-Teknik Informatika'),
(2, 1, 'DIII-Manajemen Informatika'),
(3, 2, 'DIII-Teknik Sipil'),
(4, 2, 'DIII-Teknik Konstruksi Jalan, Jembatan, dan Bangunan Air'),
(5, 2, 'DIV-Manajemen Rekayasa Konstruksi'),
(6, 3, 'DIV-Teknik Otomotif Elektronik'),
(7, 3, 'DIV-Teknik Mesin Produksi dan Perawatan'),
(8, 3, 'DIII-Teknik Mesin'),
(9, 4, 'DIV-Sistem Kelistrikan'),
(10, 4, 'DIV-Teknik Elektronika'),
(11, 4, 'DIV-Jaringan Telekomunikasi Digital'),
(12, 3, 'DIII-Teknik Elektronika'),
(13, 4, 'DIII-Listrik Industri'),
(14, 4, 'Teknik Telekomunikasi'),
(15, 5, 'DIV-Teknik Kimia Industri'),
(16, 5, 'DIII-Teknik Kimia'),
(17, 6, 'DIV-Akuntansi Manajemen'),
(18, 6, 'DIII-Akuntansi'),
(19, 7, 'DIII-Administrasi Bisnis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timeline`
--

CREATE TABLE `timeline` (
  `id_timeline` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `judul`, `gambar`) VALUES
(1, 'timeline', 'sem1.jpg');

-- --------------------------------------------------------

--
-- Struktur untuk view `point_pengguna`
--
DROP TABLE IF EXISTS `point_pengguna`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `point_pengguna`  AS  select `p`.`fk_id_user` AS `fk_id_user`,`p`.`id_point` AS `id_point`,`k`.`id_kategori_point` AS `id_kategori_point`,`k`.`point` AS `point` from (`point` `p` join `kategori` `k` on((`p`.`fk_id_kategori` = `k`.`id_kategori_point`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori_point`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `user` (`dibuat`),
  ADD KEY `kategorr` (`fk_kategori_kegiatan`);

--
-- Indexes for table `kegiatan_pengguna`
--
ALTER TABLE `kegiatan_pengguna`
  ADD PRIMARY KEY (`id_daftar_keg`),
  ADD KEY `keg` (`fk_id_keg`),
  ADD KEY `useeer` (`nama_mhs`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`fk_level_id`),
  ADD KEY `jurusan` (`fk_id_jurusan`),
  ADD KEY `prodi` (`fk_id_prodi`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id_point`),
  ADD KEY `kate` (`fk_id_kategori`),
  ADD KEY `useer` (`fk_id_user`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `juru` (`fk_id_jurusan`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id_timeline`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kegiatan_pengguna`
--
ALTER TABLE `kegiatan_pengguna`
  MODIFY `id_daftar_keg` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id_point` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kategorr` FOREIGN KEY (`fk_kategori_kegiatan`) REFERENCES `kategori` (`id_kategori_point`);

--
-- Ketidakleluasaan untuk tabel `kegiatan_pengguna`
--
ALTER TABLE `kegiatan_pengguna`
  ADD CONSTRAINT `keg` FOREIGN KEY (`fk_id_keg`) REFERENCES `kegiatan` (`id_kegiatan`),
  ADD CONSTRAINT `useeer` FOREIGN KEY (`nama_mhs`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `jurusan` FOREIGN KEY (`fk_id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `level` FOREIGN KEY (`fk_level_id`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `prodi` FOREIGN KEY (`fk_id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Ketidakleluasaan untuk tabel `point`
--
ALTER TABLE `point`
  ADD CONSTRAINT `kate` FOREIGN KEY (`fk_id_kategori`) REFERENCES `kategori` (`id_kategori_point`),
  ADD CONSTRAINT `useer` FOREIGN KEY (`fk_id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `juru` FOREIGN KEY (`fk_id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
