-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2019 pada 08.34
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
  `fk_kode_kategori_induk` varchar(200) NOT NULL,
  `kode_kategori` varchar(20) NOT NULL,
  `tingkat_kegiatan` varchar(150) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `point` float(11,1) NOT NULL,
  `dasar_penilaian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori_point`, `fk_kode_kategori_induk`, `kode_kategori`, `tingkat_kegiatan`, `jabatan`, `point`, `dasar_penilaian`) VALUES
(1, '1A', '1A1', 'ORDIK POLINEMA', '-', 2.0, 'SERTIFIKAT/SK'),
(2, '1A', '1A2', 'LDK POLINEMA', '-', 5.0, 'SERTIFIKAT/SK'),
(3, '1A', '1A3', 'MENTORING KEAGAMAAN POLINEMA', '-', 2.0, 'SERTIFIKAT/SK'),
(4, '1B', '1B1', 'INTERNAL KAMPUS DPM', 'KETUA', 2.0, 'SK/ST'),
(5, '1B', '1B2', 'INTERNAL KAMPUS DPM', 'WAKIL KETUA', 1.0, 'SK/ST'),
(8, '1B', '1B13', 'INTERNAL KAMPUS DPM', 'SEKRETARIS', 1.0, 'SK / ST');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_induk`
--

CREATE TABLE `kategori_induk` (
  `kode_kategori_induk` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `wajib` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kategori_induk`
--

INSERT INTO `kategori_induk` (`kode_kategori_induk`, `jenis_kegiatan`, `wajib`) VALUES
('1A', 'KEGIATAN MAHASISWA BARU', 1),
('1B', 'KEANGGOTAAN ORAGANISASI INTERNAL KAMPUS', 1),
('2A', 'KEPENGURUSAN ORGANISASI', 0),
('2B', 'KEPANITIAAN', 0),
('2C', 'KEJUARAAN / KOMPETISI / PERLOMBAAN', 0),
('2D', 'PENELITIAN, PENGABDIAN MASYARAKAT, SEMINAR, KULIAH TAMU DAN KEGIATAN ILMIAH LAINNYA', 0),
('2E', 'PENGHARGAAN AKADEMIK DAN NON AKADEMIK', 0),
('2F', 'HAK PATEN, HAK CIPTA', 0),
('2G', 'PERTANDINGAN PERSAHABATAN ANTAR \r\nKAMPUS/JURUSAN/DENGAN PIHAK LAIN/INDUSTRI/INSTITUSI', 0),
('2H', 'KEGIATAN PENUNJANG AKADEMIK', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(5) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `fk_kategori_induk_kegiatan` varchar(20) NOT NULL,
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

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `fk_kategori_induk_kegiatan`, `fk_kategori_kegiatan`, `dibuat`, `tggl_kegiatan`, `kuota`, `gambar`, `tggl_buat`, `terbit`) VALUES
(13, 'seminar', '', 3, 1, '2019-12-31', 200, 'sem11.jpg', '2019-04-30 13:42:07', 't'),
(15, 'seminar 3', '', 5, 4, '2019-12-31', 200, 'foto1.jpg', '2019-05-25 14:50:56', 'y'),
(16, 'Android laa', '1B', 1, 4, '2019-12-31', 100, 'pamflet1.jpg', '2019-05-25 16:41:28', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_pengguna`
--

CREATE TABLE `kegiatan_pengguna` (
  `id_keg_pengguna` int(11) NOT NULL,
  `fk_id_keg` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  `tggl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `terdaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kegiatan_pengguna`
--

INSERT INTO `kegiatan_pengguna` (`id_keg_pengguna`, `fk_id_keg`, `fk_id_user`, `tggl_daftar`, `terdaftar`) VALUES
(1, 16, 10, '2019-05-26 15:09:49', 1),
(4, 15, 10, '2019-05-26 14:19:47', 0);

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
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `judul_notifikasi` varchar(100) NOT NULL,
  `tggl_notifikasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_id_user` int(11) NOT NULL,
  `dibaca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `judul_notifikasi`, `tggl_notifikasi`, `fk_id_user`, `dibaca`) VALUES
(3, 'Verifikasi poin dibatalkan', '2019-06-08 21:09:52', 10, 1),
(4, 'Poin diverifikasi Himpunan', '2019-06-08 21:10:21', 10, 1),
(5, 'Verifikasi poin dibatalkan', '2019-06-08 21:09:58', 10, 1),
(6, 'Poin di-Verifikasi Himpunan', '2019-06-08 21:10:18', 10, 1),
(7, 'Poin di-Verifikasi Himpunan', '2019-06-07 23:10:31', 73, 0),
(8, 'Verifikasi poin dibatalkan', '2019-06-07 23:10:41', 73, 0),
(9, 'Poin di-Verifikasi Himpunan', '2019-06-07 23:10:49', 73, 0),
(10, 'Poin di-Verifikasi Himpunan', '2019-06-07 23:10:52', 73, 0),
(11, 'Semua point anda telah dikirim ke BEM', '2019-06-07 23:18:57', 73, 0),
(12, 'Poin di-Verifikasi BEM', '2019-06-07 23:21:54', 73, 0),
(13, 'Poin di-Verifikasi BEM', '2019-06-07 23:22:01', 73, 0),
(14, 'Verifikasi poin dibatalkan', '2019-06-07 23:22:08', 73, 0),
(15, 'Poin di-Verifikasi BEM', '2019-06-07 23:22:14', 73, 0),
(16, 'Semua point anda telah dikirim ke DPK', '2019-06-07 23:22:41', 73, 0),
(17, 'Poin di-Verifikasi DPK', '2019-06-07 23:23:09', 73, 0),
(18, 'Poin di-Verifikasi DPK', '2019-06-07 23:23:18', 73, 0),
(19, 'Verifikasi poin dibatalkan', '2019-06-07 23:24:39', 73, 0),
(20, 'Verifikasi poin dibatalkan', '2019-06-07 23:24:41', 73, 0),
(21, 'Verifikasi poin dibatalkan', '2019-06-07 23:25:33', 73, 0),
(22, 'Verifikasi poin dibatalkan', '2019-06-07 23:25:37', 73, 0),
(23, 'Semua point di-Verifikasi DPK', '2019-06-07 23:26:04', 73, 0),
(24, 'Disetujui DPK untuk semua poin', '2019-06-08 21:09:14', 10, 1),
(25, 'Disetujui DPK untuk semua poin', '2019-06-08 21:02:54', 10, 1),
(26, 'DPK membatalkan persetujuan semua poin anda', '2019-06-08 07:46:37', 10, 1);

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
  `foto` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `data_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin` int(11) NOT NULL,
  `verif_him` int(11) NOT NULL,
  `verif_him_sdh` int(11) NOT NULL,
  `verif_bem` int(11) NOT NULL,
  `verif_bem_sdh` int(11) NOT NULL,
  `verif_dpk` int(11) NOT NULL,
  `verif_all` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `fk_level_id`, `username`, `password`, `nim`, `nama_lengkap`, `fk_id_jurusan`, `fk_id_prodi`, `tahun_masuk`, `telpon`, `foto`, `status`, `data_dibuat`, `admin`, `verif_him`, `verif_him_sdh`, `verif_bem`, `verif_bem_sdh`, `verif_dpk`, `verif_all`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 16326321, 'administrator', 1, 1, 2019, 81221222, '', 0, '2019-05-08 05:34:11', 0, 0, 0, 0, 0, 0, 0),
(2, 3, 'bem', 'd3c654d99bdfaf101e012bfe2810679e', 0, 'bem polinema', 1, 1, 0, 0, '', 0, '2019-06-02 15:44:55', 0, 0, 0, 0, 0, 0, 0),
(4, 2, 'dpk_ti', '8b46f11755d95b9e96e8c76df123adb0', 0, 'TEKNOLOGI INFORMASI', 1, 1, 0, 0, 'iconfinder_EditorTeacher_32_185533.png', 0, '2019-05-22 15:51:04', 0, 0, 0, 0, 0, 0, 0),
(10, 5, 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 1631710055, 'ade fajar', 1, 2, 2019, 2147483647, 'foto11.jpg', 0, '2019-06-07 23:41:04', 1, 1, 1, 1, 1, 1, 1),
(24, 2, 'dpk_an', '5773c4ccc6f53ccb7200aae4f3e93fb4', 0, 'AKUNTANSI', 7, 19, 0, 0, 'iconfinder_EditorTeacher_32_1855331.png', 0, '2019-05-22 15:51:40', 0, 0, 0, 0, 0, 0, 0),
(49, 4, 'himpunan_ti', 'b1a36e09f72e139960c1f0f1c118ae66', 0, 'Teknologi Informasi', 1, 2, 2019, 812, 'iconfinder_JD-01_26255263.png', 0, '2019-05-22 15:31:02', 0, 0, 0, 0, 0, 0, 0),
(50, 4, 'himpunan_ts', '9670e05b11e4c6520962ebd4d6bc0532', 0, 'Teknik Sipil', 2, 3, 2019, 0, 'iconfinder_JD-01_26255264.png', 0, '2019-05-22 15:36:37', 0, 0, 0, 0, 0, 0, 0),
(51, 4, 'himpunan_ak', '753dd24d21c05ad33d4e50f5f9fab7a7', 0, 'Akutansi', 6, 18, 2019, 0, 'iconfinder_JD-01_26255265.png', 0, '2019-05-22 15:45:13', 0, 0, 0, 0, 0, 0, 0),
(52, 4, 'himpunan_te', '01cdcee92866e01a12eee857d1678a3e', 0, 'Teknik Elektro', 4, 10, 2019, 0, 'iconfinder_JD-01_26255266.png', 0, '2019-05-22 17:51:02', 0, 0, 0, 0, 0, 0, 0),
(53, 4, 'himpunan_tekim', '7c0c64bc771e8ccfca9a59cb1cbf63fc', 0, 'Teknik Kimia', 5, 15, 2019, 0, 'iconfinder_JD-01_26255267.png', 0, '2019-05-22 15:44:37', 0, 0, 0, 0, 0, 0, 0),
(54, 4, 'himpunan_an', '3c471731c802c8e3b2685783d5854e59', 0, 'Administrasi Niaga', 7, 19, 2019, 0, 'iconfinder_JD-01_26255268.png', 0, '2019-05-22 15:46:39', 0, 0, 0, 0, 0, 0, 0),
(55, 4, 'himpunan_tm', '0e747b8f1619cc7a85bc9c41390f28d5', 0, 'Teknik Mesin', 3, 8, 2019, 0, 'iconfinder_JD-01_26255269.png', 0, '2019-05-22 15:47:20', 0, 0, 0, 0, 0, 0, 0),
(56, 2, 'dpk_ak', '45ba810f969bd0ce63f19db60b428eba', 0, 'AKUTANSI', 6, 18, 2019, 0, 'iconfinder_EditorTeacher_32_1855332.png', 0, '2019-05-22 15:52:43', 0, 0, 0, 0, 0, 0, 0),
(57, 2, 'dpk_te', 'e0e39f734f5e6d6664da1ccf42672bfe', 0, 'TEKNIK ELEKTRO', 4, 13, 2019, 0, 'iconfinder_EditorTeacher_32_1855333.png', 0, '2019-05-22 15:54:32', 0, 0, 0, 0, 0, 0, 0),
(58, 2, 'dpk_tekim', 'e8b9f5ebe58219368bd1ac738bf6a2a5', 0, 'TEKNIK KIMIA', 5, 19, 2019, 0, 'iconfinder_EditorTeacher_32_1855334.png', 0, '2019-05-22 15:55:12', 0, 0, 0, 0, 0, 0, 0),
(59, 2, 'dpk_tm', '841a8095ff39ae704918d72d349d1fb7', 0, 'TEKNIK MESIN', 3, 8, 2019, 0, 'iconfinder_EditorTeacher_32_1855335.png', 0, '2019-05-22 15:56:00', 0, 0, 0, 0, 0, 0, 0),
(60, 2, 'dpk_ts', '46d8beb2d9fd098c2ca0ccb160cbe507', 0, 'TEKNIK SIPIL', 2, 19, 2019, 0, 'iconfinder_EditorTeacher_32_1855336.png', 0, '2019-05-22 15:57:04', 0, 0, 0, 0, 0, 0, 0),
(72, 5, 'riska', 'fb059ad1c514876b15b3ec40df1acdac', 1631715599, 'riska novita', 1, 1, 2019, 0, 'default.png', 0, '2019-06-02 17:58:52', 1, 1, 0, 0, 0, 0, 0),
(73, 5, 'mendol', '068b46e5425f789f63bbe6593215349f', 163171994, 'mendol', 1, 1, 2019, 0, 'default.png', 0, '2019-06-07 23:41:04', 1, 1, 1, 1, 1, 1, 1),
(74, 5, 'am', 'c04cd38aeb30f3ad1f8ab4e64a0ded7b', 1634343434, 'ae', 1, 1, 2016, 0, 'default.png', 1, '2019-06-12 15:22:10', 1, 0, 0, 0, 0, 0, 0);

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
  `nama_kegiatan` varchar(111) NOT NULL,
  `foto_sertifikat` varchar(111) NOT NULL,
  `fk_kode_kategori_induk` varchar(10) NOT NULL,
  `fk_kode_kategori` varchar(20) NOT NULL,
  `tggl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verif_himp` int(11) NOT NULL,
  `verif_bemm` int(11) NOT NULL,
  `verif_dpka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `point`
--

INSERT INTO `point` (`id_point`, `fk_id_user`, `no_sertifikat`, `nama_kegiatan`, `foto_sertifikat`, `fk_kode_kategori_induk`, `fk_kode_kategori`, `tggl_dibuat`, `verif_himp`, `verif_bemm`, `verif_dpka`) VALUES
(34, 10, '5713/PL2.3/SE/2017', 'wqe', 'seritif61.jpg', '2A', '2A1', '2019-06-03 16:51:42', 1, 1, 1),
(39, 39, 'ewqwe', 'Timeline', 'sertif42.jpg', '1B', '1B1', '2019-05-22 16:02:56', 0, 1, 1),
(40, 39, '321', 'Seminar 2', 'sertif2.jpg', '2A', '2A1', '2019-05-22 16:02:53', 0, 1, 0),
(41, 48, '5713/PL2.3/SE/2018', 'Seminar 2', 'sertif21.jpg', '2A', '2A1', '2019-05-22 06:31:08', 0, 0, 0),
(42, 48, 'adw/123wqeew', 'Seminar', 'sertif5.jpg', '1A', '1A1', '2019-05-22 06:33:46', 0, 0, 0),
(43, 40, 'weqew1', 'adaw', 'sertif7.jpg', '1A', '1A1', '2019-05-22 16:58:55', 0, 0, 0),
(44, 10, '12321', 'wqeqw', 'sertif22.jpg', '1A', '1A1', '2019-06-03 16:51:42', 1, 1, 1),
(45, 10, 'adw/123wqe', 'ew', 'sertif52.jpg', '1A', '1A1', '2019-06-07 23:08:36', 1, 1, 1),
(46, 10, '1232121', 'Timeline', 'sertif9.jpg', '2A', '2A1', '2019-06-07 23:03:29', 1, 1, 1),
(49, 73, '1weqwe123', 'eqw', 'sertif1.jpg', '1A', '1A1', '2019-06-07 23:26:04', 1, 1, 1),
(50, 73, 'ewq', 'ewq', 'sertif53.jpg', '1B', '1B1', '2019-06-07 23:26:04', 1, 1, 1);

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
(1, 1, 'DIV-Teknik Informatika'),
(2, 1, 'DIII-Manajemen Informatika'),
(3, 2, 'DIII-Teknik Sipil'),
(5, 2, 'DIV-Manajemen Rekayasa Konstruksi'),
(6, 3, 'DIV-Teknik Otomotif Elektronik'),
(7, 3, 'DIV-Teknik Mesin Produksi dan Perawatan'),
(8, 3, 'DIII-Teknik Mesin'),
(9, 4, 'DIV-Sistem Kelistrikan'),
(10, 4, 'DIV-Teknik Elektronika'),
(11, 4, 'DIV-Jaringan Telekomunikasi Digital'),
(13, 4, 'DIII-Listrik Industri'),
(14, 4, 'DIII-Telekomunikasi'),
(15, 5, 'DIV-Teknik Kimia Industri'),
(16, 5, 'DIII-Teknik Kimia'),
(17, 6, 'DIV-Akuntansi Manajemen'),
(18, 6, 'DIII-Akuntansi'),
(19, 7, 'DIII-Administrasi Bisnis'),
(20, 4, 'DIII-Teknik Elektronika'),
(21, 7, 'DIV-Manajemen Pemasaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timeline`
--

CREATE TABLE `timeline` (
  `id_timeline` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `tggl_awal_upload` date NOT NULL,
  `tggl_trakhir_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `judul`, `gambar`, `tggl_awal_upload`, `tggl_trakhir_upload`) VALUES
(1, 'timeline', 'Satuan_kredit_kegiatan_mahasiswa.png', '2019-06-05', '2019-06-12');

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
-- Indexes for table `kategori_induk`
--
ALTER TABLE `kategori_induk`
  ADD PRIMARY KEY (`kode_kategori_induk`);

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
  ADD PRIMARY KEY (`id_keg_pengguna`),
  ADD KEY `keg` (`fk_id_keg`),
  ADD KEY `useeer` (`fk_id_user`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

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
  ADD KEY `kate` (`fk_kode_kategori`),
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
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kegiatan_pengguna`
--
ALTER TABLE `kegiatan_pengguna`
  MODIFY `id_keg_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id_point` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
-- Ketidakleluasaan untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `juru` FOREIGN KEY (`fk_id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
