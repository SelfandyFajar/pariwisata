-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 09.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata_210032`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_wisata_210032`
--

CREATE TABLE `tempat_wisata_210032` (
  `id_wisata_210032` int(11) NOT NULL,
  `nama_tempat_210032` varchar(250) NOT NULL,
  `kota_210032` varchar(50) NOT NULL,
  `deskripsi_210032` text NOT NULL,
  `harga_tiket_210032` int(11) NOT NULL,
  `jam_operasional_210032` varchar(50) NOT NULL,
  `photo_wisata` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_wisata_210032`
--

INSERT INTO `tempat_wisata_210032` (`id_wisata_210032`, `nama_tempat_210032`, `kota_210032`, `deskripsi_210032`, `harga_tiket_210032`, `jam_operasional_210032`, `photo_wisata`) VALUES
(1, 'Masjid Raya Baiturrahman', 'Aceh', ' Dengan dinding putih cerah dan kubah hitam megah, masjid agung berusia 130 tahun ini adalah situs yang megah. Di sinilah ratusan orang mencari perlindungan selama tsunami 204 yang meratakan sebagian besar lanskap kota. Tsunami begitu merusak, menghancurkan struktur apa pun, lama dan baru, di sepanjang jalan gelombang yang merobek. Inilah fakta yang memberikan arti penting bagi Masjid Agung Baiturrahman di kota Banda Aceh. Ini lebih dari sekadar mahakarya arsitektur Islam di negara ini, kelangsungan hidupnya dari tsunami dipandang oleh banyak penduduk sebagai intervensi langsung dari yang ilahi.\r\n\r\nKitab suci kerajaan mengatakan bahwa masjid ini pertama kali dibangun dari kayu pada tahun 1612 di bawah pemerintahan Sultan Iskandar Muda. Ada yang mengatakan bahwa itu dibangun lebih awal pada tahun 1292 oleh Sultan Alaidin Mahmudsyah. Selama perang Aceh pada tahun 1873, masjid ini dibakar habis. Menyadari nilai dan pentingnya bagi rakyat Aceh, pada tahun 1879, Mayor Jenderal Vander yang bertindak sebagai jenderal militer saat ini, membangun kembali masjid seperti yang pernah dijanjikan oleh Gubernur Jenderal Van Lansberge pada tahun 1877. Dua kubah lagi ditambahkan oleh Belanda pada tahun 1936 dan dua kubah lagi oleh pemerintah Indonesia pada tahun 1957.\r\n\r\nMasjid Agung Baiturrahman terletak di pusat kota Banda Aceh. Ditandai dengan menara setinggi 35 meter, 7 kubah besar, dan 7 menara, Baiturrahman mungkin merupakan prototipe bagi banyak masjid di Indonesia dan semenanjung Malaysia; menggantikan masjid bergaya beratap berlapis.', 1000, ' Jam 07.00 WIB s.d 18.00 WIB', 'muhammad-ihsan-yVHjwfVlVoU-unsplash.jpg'),
(2, 'Pantai Lampuuk', ' Aceh', 'Pantai Lampuuk merupakan salah satu destinasi wisata terkenal di Aceh Besar dan menampilkan keindahan alam yang tak kalah dengan pantai-pantai di Bali. Pantai ini terletak di Desa Meunasah Masjid, Lhoknga Kabupaten Aceh Besar, Aceh berada di jalur Banda Aceh Calang atau Aceh Jaya atau sekitar 20 kilometer dari kota Banda Aceh. Akses untuk menuju ke kawasan wisata ini memang terbilang cukup sulit. Satu-satunya cara untuk menuju ke lokasi ini adalah dengan menggunakan kendaraan pribadi, karena di sekitar lokasi ini tidak terdapat angkutan umum yang menuju ke kawasan wisata pantai ini. Jangan khawatir untuk keadaan jalan menuju ke lokasi terbilang sudah bagus\r\n\r\nLokasi pantai ini dulunya merupakan salah satu tempat yang menjadi korban terparah akibat hantaman gelombang besar Tsunami pada tahun 2004 silam. Karena itu berbagai macam fasilitas yang ada di lokasi ini rusak parah. Namun jangan khawatir lokasi pantai yang langsung menghadap ke Samudra Hindia ini sudah menjalani rehabilitasi baik sarana dan prasaranya.', 150000, ' Jam 07.00 WIB s.d 18.00 WIB', 'default.png'),
(3, 'Museum Tsunami', ' Aceh', 'Museum Tsunami Aceh (Aksara Jawoë: موسيوم سونامي اچيه) adalah sebuah museum di Banda Aceh yang dirancang sebagai monumen simbolis untuk bencana gempa bumi dan tsunami Samudra Hindia 2004 sekaligus pusat pendidikan bencana dan tempat perlindungan darurat andai tsunami terjadi lagi.\r\n\r\n\r\nMuseum Tsunami di Banda Aceh yang dirancang oleh arsitek asal Bandung, Jawa Barat, Ridwan Kamil ini merupakan desain yang memenangkan sayembara tingkat internasional yang diselenggarakan pada 2007 dalam rangka memperingati musibah tsunami 2004. Bangunan tersebut berkonsep rumoh Aceh dan on escape hill dan sebagai referensi utamanya adalah nilai-nilai Islam, budaya lokal, dan abstraksi tsunami.[2] Museum ini merupakan sebuah struktur empat lantai dengan luas 2.500 m² yang dinding lengkungnya ditutupi relief geometris. Di dalamnya, pengunjung masuk melalui lorong sempit dan gelap di antara dua dinding air yang tinggi — untuk menciptakan kembali suasana dan kepanikan saat tsunami. Dinding museum dihiasi gambar orang-orang menari Saman, sebuah makna simbolis terhadap kekuatan, disiplin, dan kepercayaan religius suku Aceh.[3] Dari atas, atapnya membentuk gelombang laut. Lantai dasarnya dirancang mirip rumah panggung tradisional Aceh yang selamat dari terjangan tsunami.', 250000, ' Buka 24 Jam', 'julianto-saputra-8Z0Q_K8I7Tc-unsplash.jpg'),
(4, 'Taman Nasional Gunung Leuser', ' Aceh', ' Sejarah terbentuknya TNGL diawali pada tahun 1920-an atau zaman Pemerintah Kolonial Belanda, melalui serangkaian proses penelitian dan eksplorasi seorang ahli geologi Belanda bernama F.C. Van Heurn di Aceh. Dalam perkembangannya muncul inisiasi positif yang didukung para tokoh masyarakat untuk mendesak Pemerintah Kolonial Belanda agar memberikan status kawasan konservasi (Wildlife Sanctuary) dan status perlindungan terhadap kawasan yang terbentang dari Singkil (pada hulu Sungai Simpang Kiri) di bagian selatan, sepanjang Bukit Barisan, ke arah lembah Sungai Tripa dan Rawa Pantai Meulaboh, di bagian utara. Pada tanggal 6 Februari 1934, dilaksanakan Deklarasi Tapak Tuan yang merupakan tekad dari perwakilan masyarakat lokal di sekitar kawasan leuser untuk melakukan perlindungan lingkungan yang sekaligus mengatur sanksi pidana. Deklarasi ini juga ditandatangani oleh Gubernur Hindia Belanda. Berdasarkan hal tersebut, pada tanggal 3 Juli 1934 ditetapkan Suaka Margasatwa Gunung Leuser dengan luas 142.800 Ha berdasarkan Zelfbestuur Besluit (ZB) Nomor 317/35. Tahun 1936 ditetapkan kawasan Suaka Margasatwa Kluet di Provinsi Aceh dengan luas 20.000 Ha. Tahun 1938 ditetapkan kawasan Suaka Margasatwa Langkat di Provinsi Sumut dengan luas 51.000 Ha. Tahun 1976 ditetapkan kawasan Suaka Margasatwa Kappi di Provinsi Aceh dengan luas 142.000 Ha. Pada tanggal 6 Maret 1980 Menteri Pertanian mengumumkan keempat suaka margasatwa tersebut dan beberapa hutan wisata sebagai di sekitarnya sebagai kawasan taman nasional. Pada tahun 1984, wilayah kerja TNGL ditetapkan mencakup 5 kawasan Suaka Margasatwa dan 2 Hutan Wisata, seluas 862.975 Ha. Tanggal 23 Mei 1997 dilakukan penunjukan Taman Nasional Gunung Leuser dengan luas 1.094.692 hektar. Secara yuridis formal, keberadaan Taman Nasional Gunung Leuser untuk pertama kali dituangkan dalam Pengumuman Menteri Pertanian Nomor: 811/Kpts/Um/II/1980 tanggal 6 Maret 1980 tentang peresmian 5 (lima) Taman Nasional di Indonesia, yaitu; Taman Nasional Gunung Leuser, Taman Nasional Ujung Kulon, Taman Nasional Gede Pangrango, Taman Nasional Baluran, dan Taman Nasional Komodo. Berdasarkan Pengumuman Menteri Pertanian tersebut, ditetapkan luas Taman Nasional Gunung Leuser adalah 792.675 ha. Pengumuman Menteri Pertanian tersebut ditindaklanjuti dengan Surat Direktorat Jenderal Kehutanan Nomor: 719/Dj/VII/1/80, tanggal 7 Maret 1980 yang ditujukan kepada Sub Balai KPA Gunung Leuser. Dalam surat tersebut disebutkan bahwa diberikannya status kewenangan pengelolaan Taman Nasional Gunung Leuser kepada Sub. Balai KPA Gunung Leuser.', 7500, ' Jam 05.00 WIB s.d 15.00 WIB', 'arif-fadhila-GktttgRd7rs-unsplash.jpg'),
(5, 'Pulau Weh', ' Aceh', ' Pulau Weh (atau We) atau dikenal juga dengan Pulau Sabang adalah pulau vulkanik kecil yang terletak di barat laut Pulau Sumatra. Pulau ini pernah terhubung dengan Pulau Sumatra, namun kemudian terpisah oleh laut setelah meletusnya gunung berapi terakhir kali pada zaman Pleistosen. Pulau ini terletak di Laut Andaman. Kota terbesar di Pulau Weh, Sabang, adalah kota yang terletak paling barat di Indonesia. Pulau ini terkenal dengan ekosistemnya. Pemerintah Indonesia telah menetapkan wilayah sejauh 60 km² dari tepi pulau baik ke dalam maupun ke luar sebagai suaka alam. Hiu bermulut besar dapat ditemukan di pantai pulau ini. Selain itu, pulau ini merupakan satu-satunya habitat katak yang statusnya terancam, Bufo valhallae (genus Bufo). Terumbu karang di sekitar pulau diketahui sebagai habitat berbagai spesies ikan.\r\n\r\n\r\nPulau Weh terletak di Laut Andaman, tempat 2 kelompok kepulauan, yaitu Kepulauan Nikobar dan Kepulauan Andaman, tersebar dalam satu garis dari Sumatra sampai lempeng Burma. Laut Andaman terletak di lempeng tektonik kecil yang aktif. Sistem sesar yang kompleks dan kepulauan busur vulkanik telah terbentuk di sepanjang laut oleh pergerakan lempeng tektonik. Pulau ini terbentang sepanjang 15 kilometer (10 mil) di ujung paling utara dari Sumatra. Pulau ini hanya pulau kecil dengan luas 120,7 km², tetapi memiliki banyak pegunungan. Puncak tertinggi pulau ini adalah sebuah gunung berapi fumarolik dengan tinggi 617 meter (2024 kaki). Letusan terakhir gunung ini diperkirakan terjadi pada zaman Pleistosen. Sebagai akibat dari letusan ini, sebagian dari gunung ini hancur, terisi dengan laut dan terbentuklah pulau yang terpisah. Di kedalaman sembilan meter (29,5 kaki) dekat dari kota Sabang, fumarol bawah laut muncul dari dasar laut. Kerucut vulkanik dapat ditemui di hutan. Terdapat 3 daerah solfatara: satu terletak 750 meter bagian tenggara dari puncak dan yang lainnya terletak 5 km dan 11,5 km bagian barat laut dari puncak di pantai barat teluk Lhok Perialakot.', 7500, ' Jam 08.00 WIB s.d 16.00 WIB', 'default.png'),
(7, 'Candi Borobudur', ' Yogyakarta', ' fdhsfgsdjf', 15000, ' Jam 07.00 WIB s.d 18.00 WIB', 'reptil.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_210032`
--

CREATE TABLE `tiket_210032` (
  `id_tiket_210032` int(11) NOT NULL,
  `nama_210032` varchar(255) NOT NULL,
  `email_210032` varchar(255) NOT NULL,
  `no_tlp_210032` varchar(255) NOT NULL,
  `tanggal_210032` date NOT NULL,
  `id_wisata_210032` int(11) NOT NULL,
  `jumlah_tiket_210032` varchar(255) NOT NULL,
  `total_harga_210032` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket_210032`
--

INSERT INTO `tiket_210032` (`id_tiket_210032`, `nama_210032`, `email_210032`, `no_tlp_210032`, `tanggal_210032`, `id_wisata_210032`, `jumlah_tiket_210032`, `total_harga_210032`) VALUES
(3, 'Selfandy', ' selfandyfajarkautsara@gmail.com', ' 8987066095', '2023-01-09', 2, ' 2', ' 300000'),
(4, 'Selfandy', ' fandyfajar81@gmail.com', ' 0932487426', '2023-01-11', 7, ' 3', ' 45000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tempat_wisata_210032`
--
ALTER TABLE `tempat_wisata_210032`
  ADD PRIMARY KEY (`id_wisata_210032`);

--
-- Indeks untuk tabel `tiket_210032`
--
ALTER TABLE `tiket_210032`
  ADD PRIMARY KEY (`id_tiket_210032`),
  ADD KEY `id_wisata_210032` (`id_wisata_210032`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tempat_wisata_210032`
--
ALTER TABLE `tempat_wisata_210032`
  MODIFY `id_wisata_210032` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tiket_210032`
--
ALTER TABLE `tiket_210032`
  MODIFY `id_tiket_210032` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tiket_210032`
--
ALTER TABLE `tiket_210032`
  ADD CONSTRAINT `tiket_210032_ibfk_1` FOREIGN KEY (`id_wisata_210032`) REFERENCES `tempat_wisata_210032` (`id_wisata_210032`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
