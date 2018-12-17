-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2017 at 01:18 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(15) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL,
  `halaman` int(4) NOT NULL,
  `id_kategori` int(15) NOT NULL,
  `sinopsis` text NOT NULL,
  `stok` int(15) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL DEFAULT '0',
  `best` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `harga`, `halaman`, `id_kategori`, `sinopsis`, `stok`, `cover`, `rating`, `best`) VALUES
(1, 'Assassins Creed Unity', 'Oliver Bowden', 'Fantasious', 99500, 400, 8, '&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;strong&gt;&lt;em&gt;&quot;Aku telah dihabisi, ditipu, dan dikhianati. Mereka membunuh ayahku dan aku akan membalaskan dendam ini, apa pun risikonya!&quot;&lt;/em&gt;&lt;/strong&gt; 1789 : kota Paris yang megah menyaksikan terbitnya Revolusi Prancis. Jalanan batu berubah menjadi sungai darah ketika rakyat bangkit menentang golongan bangsawan yang menindas mereka. Tapi keadilan revolusi harus dibayar dengan sangat mahal... Pada masa jurang antara si kaya dan si miskin mencapai jarak terjauh, dan sebuah negara menghancurkan dirinya sendiri, seorang pemuda dan seorang gadis berjuang untuk membalaskan apa saja yang telah direnggut dari mereka. Segera Arno dan Elise terseret ke dalam pertarungan antara Assassin dan Templar yang sudah berlangsung ratusan tahun, sebuah dunia yang penuh dengan bahaya lebih mematikan daripada jangkauan imajinasi mereka.&lt;/p&gt;', 15, 'Unity_novel.jpg', 4, '0'),
(2, 'Shaman King 03', 'Hiroyuki Takei', 'M&C', 22500, 14, 5, '"Satu persatu para Shaman menantang bertarung Yoh Asakura dan Roh Samurai miliknya yang bernama Amidamaru berkat hasil latihannya.\r\n\r\nYoh berhasil mengalahkan mereka semua. Pada suatu hari, roh yang mendendam pada Amidamaru sejak 600 tahun lalu, muncul di depan Yoh dan kawan-kawan!\r\n"Shaman-King-03_4415.jpg', 40, 'Shaman-King-03_4415.jpg', 5, '1'),
(3, 'Pelaut yang Ternoda', 'Yukio Mishima', 'Ea Books', 66000, 68, 8, '&lt;p&gt;Pelaut yang Ternoda - Kedua matanya berkeliaran di ruangan temaram itu dan ia dibuat kagum oleh jam berwarna keemasan pada rak di atas perapian, tempat lilin kaca berukir yang menggantung dari lelangit, vas-vas berwarna hijau kebiruan yang ditaruh dalam kondisi hampir jatuh di atas rak terbuka: semuanya rawan, dalam keheningan keheningan paripurna. Ia bertanya-tanya berkah apakah yang menjauhkan ruangan itu dari goncangan. Sampai hari kemarin, barang-barang itu tak mempunyai makna apa pun baginya, dan kini ia dan semua barang itu telah terhubungkan. Perantaranya adalah satu lirikan mata seorang perempuan, sebuah sinyal yang dipancarkan dari balik jalinan urat, tenaga hewani dari kelelakiannya sendiri; dan setelah pengetahuan ini ia terselubung misteri seolah matanya melihat sebuah kapal tak dikenal di lautan bebas. Meski tubuhnya sendiri mengatur ikatan ini dengan sengaja namun ketidaknyataan mengagumkan tentang ruangan ini membuatnya gemetar.&lt;/p&gt;', 12, 'asddasdas_4400.jpg', 3, '0'),
(4, 'The Silmarillion', 'J.R.R Tolkien', 'Gramedia Pustaka Utama', 130000, 574, 8, 'Karya epik legendaris Tolkien yang mendahului `THE LORD OF THE RINGS`\r\nKetiga Silmaril adalah batu-batu permata sempurna buatan Feanor, Elf yang paling cemerlang di antara seluruh rasnya. Ketika permata-permata itu dicuri Morgoth, Penguasa Kegelapan pertama, untuk memenuhi maksud dan tujuannya sendiri, Feanor dan kaum kerabatnya mengangkat senjata dan mengobarkan perang dahsyat yang berlangsung sangat lama, untuk merebut kembali ketiga Silmaril. Inilah kisah tentang pemberontakan mereka melawan dewa-dewa, dan sejarah Zaman Pertama yang penuh kepahlawanan di Middle-earth.', 76, 'silmarillion-_the-silmarillion_.jpg', 5, '0'),
(5, 'Devil Survivor 07', 'Matsuba Satoru', 'Komik Warna', 22500, 14, 5, 'Naoya adalah orang yang misterius. Dia seakan tahu segalanya, tapi Kazuya tak pernah tahu apa rahasia yang disimpan saudaranya itu, seperti kenapa Naoya menginginkan Kazuya mennjadi raja Bel.', 78, 'Devil-Survivor-07_4414.jpg', 4, '1'),
(6, 'Dracula', 'Bram Stoker', 'Dian Rakyat', 65000, 525, 8, '&lt;p&gt;Buku ini berisi tentang &lt;em&gt;&lt;strong&gt;&quot;DRACULA&quot;&lt;/strong&gt;&lt;/em&gt;&lt;/p&gt;', 10, 'dracula-cover.jpg', 1, '0'),
(7, 'Perjalanan Lain Menuju Bulan', 'M. Aan Mansyur', 'Bentang', 60000, 112, 8, '&lt;p&gt;Berisi kumpulan puisi yang terinspirasi dari film Another Trip to the Moon karya Ismail Basbeth. Puisi-puisinya akan ditemani dengan ilustrasi, foto-foto, dan lagu-lagu yang juga diinspirasikan dari film tersebut.&lt;/p&gt;', 54, 'perjalanan-lainnya_4444.jpg', 4, '0'),
(8, 'Manajemen Dakwah', 'M. Munir, Wahyu Ilaihi', 'Kencana Prenada Media Group', 44000, 0, 1, '&lt;p style=&quot;text-align: center;&quot;&gt;Manajemen Dakwah&lt;/p&gt;', 14, 'manajemen.jpg', 4, '1'),
(9, 'Seri Cerita Balita: Aku Sayang Adik', 'Eka Wardana', 'DAR! Mizan', 39000, 20, 2, '&lt;p&gt;Buku Aku Sayang Adik menceritakan Ali yang sangat menyayangi adik. Kenapa, ya, Ali sayang adik? Oh, ternyata adik sangat menggemaskan. Wah, seperti apa, ya? Yuk, baca saja!&lt;/p&gt;', 7, 'sayang adik.jpg', 5, '0'),
(14, 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', 68000, 318, 8, '<p>Tentang Persahabatan.</p>\r\n<p>Tentang Cinta.</p>\r\n<p>Tentang Perpisahan.</p>\r\n<p>Tentang Melupakan.</p>\r\n<p>Tentang Hujan.</p>', 45, 'hujan.jpg', 5, '1'),
(15, 'Sherlock Holmes: Koleksi Kasus 1', 'Sir Arthur Conan Doyle', 'Gramedia Pustaka Utama', 127000, 832, 8, '&lt;div class=&quot;texform&quot;&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;Sejak muncul pertama kali tahun 1887, Sherlock Holmes menjadi tokoh fiksi yang paling fenomenal. Dia menjadi jagoan klasik yang legendaris dan menginspirasi dalam budaya pop bahkan hingga abad ke-21. Bersama Dr. John Watson, Sherlock Holmes memecahkan kasus-kasus rumit berdasarkan kemampuannya menemukan petunjuk-petunjuk yang sering diabaikan orang lain.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;&lt;br /&gt;Koleksi Kasus Sherlock Holmes 1 ini dimulai dengan novel pertama Penelusuran Benang Merah yang memperkenalkan Sherlock Holmes si eksentrik yang genius ini dengan Dr. Watson. Empat Pemburu Harta yang menyajikan kejutan penuh teka-teki. Perjumpaannya dengan wanita yang sangat dikaguminya di Petualangan Sherlock Holmes. Peristiwa pertama yang mempertemukannya dengan musuh bebuyutannya, Dr. Moriarty, di Memoar Sherlock Holmes. Dan petualangan dalam Anjing Setan Sherlock Holmes yang menegakkan bulu kuduk.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;&lt;br /&gt;Koleksi Kasus #1 terdiri dari:&lt;/span&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;- Penelusuran Benang Merah&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;- Empat Pemburu Harta&lt;br /&gt;&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;- Petualangan Sherlock Holmes&lt;br /&gt;&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;- Memoar Sherlock Holmes&lt;br /&gt;&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span id=&quot;freeText11301406540223632291&quot;&gt;- Anjing Setan Sherlock Holmes&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;', 14, '24452572.jpg', 5, '1'),
(16, 'Sherlock Holmes a Study in Scarlet', 'Sir Arthur Conan Doyle', 'Shira Media', 35000, 207, 8, '&lt;p style=&quot;text-align: justify;&quot;&gt;Sherlock Holmes Begins: A Study in Scarlet menceritakan segala mula petualangan duet dari Sherlock Holmes dan Dokter Watson. Pengenalan kedua karakter tersebut dibeberkan dengan detail, juga tentang alur dan motif kejadian pembunuhan yang sedang ditangani mereka. Tak ada yang mustahil untuk diungkap oleh seorang Sherlock Holmes.&amp;nbsp;&lt;/p&gt;', 40, '8629085_0fd04602-db34-4342-ad89-4f7d5c7b3d2d.jpg', 3, '0'),
(17, 'Sherlock Holmes The Valley of Fear', 'Sir Arthur Conan Doyle', 'Shira Media', 49000, 290, 8, '&lt;div class=&quot;texform&quot;&gt;\r\n&lt;p&gt;Buku ini berisi tentang Sherlock Holmes The Valley Of Fear.&lt;/p&gt;\r\n&lt;/div&gt;', 47, 'sherlock_holmes_the_valley_of_fear.jpg', 3, '0'),
(18, 'Why? Italy', 'Yearimdang', ' Elex Media Komputindo', 95000, 185, 3, '&lt;p style=&quot;text-align: justify;&quot;&gt;Italia adalah negara yang memiliki sejarah panjang. Di negara ini, kita bisa menemukan jejak Romawi Kuno yang berjaya ribuan tahun lalu dan melihat suasana megah di zaman Renaisans di mana Leonardo da Vinci dan Michelangelo beraksi. Saat ini Italia telah berkembang menjadi negara adikuasa bahkan menjadi anggota G8. Why? Italy akan menjelaskan berbagal hal tentang Italia, mulai dari sejarah, lingkungan alam, sosial budaya, dan politiknya.&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;br /&gt;Yuk, kita ikuti petualangan Ami dan Mir ke negara pizza dan pasta!&lt;/p&gt;', 7, 'Why Italy-500x500.jpg', 2, '0'),
(19, 'Why? Social Contract (Rousseau)', 'Yearimdang', 'Elex Media Komputindo', 95000, 203, 3, '&lt;p style=&quot;text-align: justify;&quot;&gt;Karena muncul hal-hal sulit yang tidak bisa diselesaikan oleh Rousseau seorang diri, maka mau tidak mau Rousseau mengadakan kontrak sosial demi membuat orang-orang bisa menjalani hidup yang lebih baik. Namun, menurut Rousseau &amp;lsquo;Kembali ke Alam&amp;rsquo; merupakan situasi yang paling ideal untuk sebuah negara. Dengan kata lain, Rousseau menginginkan masyarakat yang bebas dan damai dalam keadaan alami.&amp;nbsp;&lt;/p&gt;', 3, 'WHY THE SOCIAL-500x500.jpg', 4, '0'),
(20, '29 Resep Ala Fastfood', 'Kamikoki', 'Gramedia Pustaka Utama', 76000, 0, 4, '&lt;p style=&quot;text-align: justify;&quot;&gt;Pasti banyak gerai dan resto fast food yang sering Anda kunjungi untuk mencicipi beragam menu favorit seperti fried chicken, lasagna, pasta, dan lainnya. Kamikoki mengajak Anda mencoba membuat sajian ala resto fast food sendiri di rumah.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Buku ini berisi 29 resep ala fast food yang beberapa di antaranya pasti menjadi menu kesukaan Anda dan keluarga. Selain dapat berhemat, soal rasa juga tidak kalah dengan resto fast food favorit Anda. Bahkan bisa jadi lebih sehat karena lebih terjamin bahan dan kebersihannya.&lt;/p&gt;', 4, '97135_f.jpg', 1, '0'),
(21, 'Kumpulan Terlengkap Lagu Wajib Nasional', 'Harris S Yulianto', 'Puspa Swara', 45000, 185, 4, '&lt;p style=&quot;text-align: justify;&quot;&gt;Musik dan lagu tidak dapat di sangkal dapat mempengaruhi pendengarnya.jadi,tidak salah bila para komponis zaman perjuangan dahulu menciptakan lagu-lagu untuk membangkitkan gelora semangat perjuangan dalam usaha melepaskan diri dari penjajahan yang bergema di seluruh indonesia.buku ini hadir mendokumentasikan lagau-lagu tersebut.ada lebih dari 130 lau kami persembahkan disertai not angka dan lirik yang mudah diikuti.&lt;/p&gt;', 14, 'C3748139-1483254529364041large.jpg', 5, '0'),
(22, 'Life Healthy With Diabetes (Diabetes Mengapa dan B', 'Hans Tandra', 'Andi Publishing', 36000, 112, 6, '&lt;p style=&quot;text-align: justify;&quot;&gt;Jadi pasien diabetes itu tidak enak, menyusahkan, dan sengsara karena Anda harus mulai menjalani kehidupan yang penuh disiplin. Makan minum harus dijaga, olahraga perlu teratur, obat tidak boleh dilupakan. Apabila Anda lalai melakukannya, bermacam-macam komplikasi akan bermunculan. Sakit jantung, stroke, gagal ginjal, mata buta, kaki membusuk, atau impotensi, adalah sebagian dari komplikasi diabetes yang menakutkan.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Tiap 10 detik ada satu orang atau tiap satu menit ada 6 orang yang meninggal akibat penyakit yang berkaitan dengan diabetes. Penyakit diabetes adalah penyakit seumur hidup. Pengidap diabetes harus terus berurusan dengan periksa darah dan dokter.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Diabetes itu serius, diabetes itu pembunuh!! Diabetes telah menelan korban jauh lebih banyak dari pada penyakit lainnya. Diabetes bisa merusak semua organ tubuh, dari kepala sampai ke ujung kaki, semua bisa terkena.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Jika Anda bisa menguasai diabetes, mengerti apa itu diabetes, memahami cara mengatasi problem gula darah tinggi dengan benar, Anda tetap bisa hidup sehat dan berbahagia, sama seperti orang lain yang bukan pengidap diabetes.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Bacalah buku ini. Selain membahas apa dan bagaimana tentang penyakit diabetes, buku ini juga merinci beberapa komplikasi penting yang bisa timbul lantaran diabetes. Tentang jantung, otak, kaki, mata, dan ginjal, bagaimana mencegah dan mengatasinya.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Jangan takut!Diabetes bisa dikendalikan. Gula darah yang terkontrol menjamin Anda terhindar dari berbagai komplikasi sehingga Anda bisa berumur panjang.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Buku ini memberi petunjuk praktis bagaimana diet yang benar, info tentang cara berolahraga yang seharusnya Anda lakukan, dan apa sebenarnya gaya hidup yang sehat itu. Bertindaklah mulai sekarang, melangkahlah. Pelajari buku ini dengan sungguh-sungguh. Kendalikan diabetes, cegah dan kalahkan komplikasi. Anda pasti bisa.&lt;/p&gt;', 11, '231968_24e63d56-7330-11e4-b8ba-9fe64908a8c2.jpg', 2, '0'),
(23, 'The Power of When', 'Michael Breus', 'Bentang', 89000, 400, 7, '&lt;div class=&quot;texform&quot;&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Kebanyakan dari kita tidak paham jika tubuh memiliki jam biologisnya sendiri. Organ dalam seperti jantung, paru-paru, usus, ginjal, hingga hormon punya waktu-waktu tertentu untuk bangun, bekerja maksimal, dan beristirahat. Betapa kasihannya lambung jika kita tetap makan sembari bekerja sementara itu adalah waktunya untuk bersantai-santai.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;Michael Breus, Ph.D. secara khusus meneliti tentang cara menyeimbangkan jam biologis dengan rutinitas harian. Breus membagi ritme aktivitas manusia ke dalam empat kategori: singa, beruang, serigala, dan lumba-lumba. Dari sini kita akan mengetahui kapan waktu yang tepat untuk melakukan segala sesuatu sehingga hasilnya menjadi lebih optimal. Alih-alih mencari tahu bagaimana cara menyelesaikan pekerjaan lebih cepat, hanya dengan mengetahui kapan waktu bekerja paling optimal pun, otomatis pekerjaan kita akan selesai dengan lebih cepat dan lebih bagus. Dan tentunya, tetap ada waktu untuk bersosialisasi dan bersenang-senang.&lt;/p&gt;\r\n&lt;/div&gt;', 38, 'cover.jpg', 4, '0'),
(24, 'Akuntasi Transaksi Syariah', 'Wiroso', 'Ikatan Akuntan Indonesia', 190000, 574, 9, '&lt;p&gt;Akuntansi Transaksi Syariah dilengkapi Daftar Akun (Chart of Account).&lt;/p&gt;', 3, 'cover lengkap_00005.jpg', 2, '0'),
(25, 'Sejarah Duni yang Disembunyikan', 'Jonathan Black', 'Alvabet', 135000, 620, 10, '&lt;p style=&quot;text-align: justify;&quot;&gt;Banyak orang mengatakan bahwa sejarah ditulis oleh para pemenang. Hal ini sama sekali tak mengejutkan alias wajar belaka. Tetapi, bagaimana jika sejarah&amp;mdash;atau apa yang kita ketahui sebagai sejarah&amp;mdash;ditulis oleh orang yang salah? Bagaimana jika semua yang telah kita ketahui hanyalah bagian dari cerita yang salah tersebut?&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Dalam buku kontroversial yang sangat tersohor ini, Jonathan Black mengupas secara tajam penelusurannya yang brilian tentang misteri sejarah dunia. Dari mitologi Yunani dan Mesir kuno sampai cerita rakyat Yahudi, dari kultus Kristiani sampai Freemason, dari Karel Agung sampai Don Quixote, dari George Washington sampai Hitler, dan dari pewahyuan Muhammad hingga legenda Seribu Satu Malam, Jonathan menunjukkan bahwa pengetahuan sejarah yang terlanjur mapan perlu dipikirkan kembali secara revolusioner. Dengan pengetahuan alternatif ihwal sejarah dunia selama lebih dari 3.000 tahun, dia mengungkap banyak rahasia besar yang selama ini disembunyikan.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Buku ini akan membuat Anda mempertanyakan kembali segala sesuatu yang telah diajarkan kepada Anda. Dan, berbagai pengetahuan baru yang diungkapkan sang penulis benar-benar akan membuka dan mencerahkan wawasan Anda.&lt;/p&gt;', 32, '4503004_b90a6022-2c84-4a15-9ae9-138ab2ea4421_2048_0.jpg', 5, '1'),
(26, 'Pemrograman PHP dan MySQL untuk Pemula', 'Madcoms', 'Andi Offset', 69000, 230, 17, '&lt;p style=&quot;text-align: justify;&quot;&gt;Meskipun buku ini lebih dikhususkan untuk para pemula, namun ini materi yang dibahas cukup kompleks, yaitu meliputi:&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&amp;bull; Mengenal tentang apa dan bagaimana pemrograman PHP dan MySQL itu serta Software Pendukungnya.&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Mengenal Tag, Variabel dan tipe Data di dalam PHP&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Mengenal Operator-operator HP serta penggunaan Variabel form&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Menggunakan Fungsi Logika dan Perulangan dalam PHP&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Memaksimalkan Pengolahan Data Array&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Fungsi-fungsi pengolahan file di dalam PH&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Bagaimana mengolah data String, Tanggal, dan Waktu di dalam PHP&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Bagaimana memaksimalkan Fungsi-fungsi Modularitas di Dalam PHP&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Bekerja dengan Data Session dan cookie&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Bekerja dengan database MySQL&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Bagaimana mengolah Database dengan Jendela PhpMyAdmin&lt;/li&gt;\r\n&lt;li&gt;&amp;bull; Membuat aplikasi buku tamu dan pencarian data&lt;/li&gt;\r\n&lt;/ul&gt;', 39, '1088349_bb0c0e98-f133-4c30-a7bf-5fc1c62d9196.jpg', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(15) NOT NULL,
  `judul_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `judul_kategori`) VALUES
(1, 'Agama'),
(2, 'Buku Anak'),
(3, 'Buku Pelajaran'),
(4, 'Hobi / Keterampilan'),
(5, 'Komik'),
(6, 'Kesehatan'),
(7, 'Motivasi & Bisnis'),
(8, 'Fiksi'),
(9, 'Perguruan Tinggi'),
(10, 'Sosial Politik & Budaya'),
(17, 'Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(15) NOT NULL,
  `id_buku` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi_komentar` text NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_buku`, `nama`, `isi_komentar`, `hapus`, `tgl`) VALUES
(1, 1, 'Rino Ridlo Julianto', 'Wah, bukunya bagus sekali. Ceritanya menarik, berkaitan dengan sejarah yang dibumbui dengan cerita fiksi', 0, '2017-06-20 08:51:00'),
(4, 6, 'Rino Ridlo Julianto', 'Cerintanya bagus, namun banyak hal yang susah dicerna karena sudut pandang novel yang tidak biasa', 0, '2017-06-20 05:41:02'),
(5, 1, 'Renanda Yudha Prasetya', 'Lumayan sih novelnya, tapi sayang yang tidak mengikuti franchise Assasins Creed sebelumnya pasti kesulitan mengikuti alurnya.', 0, '2017-06-20 05:42:23'),
(6, 1, 'Yulia Atika Rahmawati', 'Bagus bukunya, saya penggemar sejak lama serial Assassin''s Creed baik game maupun novelnya', 0, '2017-06-20 10:46:10'),
(7, 4, 'Gina Kriwul', 'Komentar ndaaaaa', 1, '2017-06-20 12:22:30'),
(8, 4, 'Rino Ridlo Julianto', 'Salah satu karya epic J.R.R Tolkien lagi nih. Sudah baca, dan ceritanya super keren banget.', 0, '2017-06-20 12:33:47'),
(9, 5, 'Dera Diah Y', 'Wah, yang dinanti-nanti akhirnya keluar', 0, '2017-06-20 12:38:31'),
(10, 6, 'Anonymous', 'Bacanya bikin pusing gan -_-"', 1, '2017-06-20 12:49:57'),
(11, 4, 'atong', 'mantap', 1, '2017-06-20 12:57:08'),
(12, 1, 'Desmond Miles', 'Ane dah mainin game yang versi ini gan, tapi setelah baca novelnya ternyata lumayan banyak detail cerita yang dikurangi di game-nya :''D', 0, '2017-06-20 02:03:03'),
(13, 1, 'Arno Dorian', 'Novel ini ceritanya mantap dah.', 0, '2017-06-20 02:05:17'),
(14, 2, 'Raja Shaman', 'Akhirnya komik yang ditunggu-tunggu keluar juga.', 0, '2017-06-20 14:09:07'),
(15, 14, 'Rino Ridlo Julianto', 'Bukunya bagus, isinya inspiratif sekali. Alur ceritanya tersusun sangat baik hingga pembaca ikut terbawa suasana.', 0, '2017-06-22 13:30:23'),
(16, 14, 'Tere Liye Fans', 'Satu lagi karya master piece dari tere liye', 0, '2017-06-22 13:31:13'),
(17, 1, 'Bot', '<p><strong>Wow&nbsp;</strong>bagus sekali</p>', 1, '2017-06-22 13:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id_slide` int(15) NOT NULL,
  `judul_slide` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`id_slide`, `judul_slide`, `keterangan`, `gambar`, `urutan`) VALUES
(2, 'Tasawuf Modern', 'Serial tasawuf modern karya penulis Agus Mustofa', 'slide.jpg', 4),
(3, 'Buku Gudang Ilmu', 'Buku adalah gudang ilmu, maka dari itu banyak-banyaklah membaca buku untuk membuka wawasan.', 'o-BOOKS-facebook.jpg', 3),
(4, 'Ramadhan Kareem', 'Selamat menunaikan ibadah puasa', 'Ramadan-Mubarak-Cover.jpg', 2),
(5, 'Selamat Hari Lebaran', 'Minal ''aidzin wal faidzin. Mohon maaf lahir dan batin. Selamat hari lebaran 1438H', 'idul-fitri-mubarak-greetings.jpg', 1),
(7, 'Koleksi Kasus Sherlock Holmes', 'Dapatkan buku koleksi kasus yang berhasil dipecahkan oleh sherlock holmes di toko kami', 're_banner_picture_17.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` enum('admin','member') NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `email`, `level`, `avatar`) VALUES
(4, 'Admin Bookstore', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'rinoridlojulianto@gmail.com', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `id_slide` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
