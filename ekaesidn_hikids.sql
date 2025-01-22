-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jan 2025 pada 03.27
-- Versi server: 10.11.10-MariaDB-ubu2204
-- Versi PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekaesidn_hikids`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Stop Biarin Gigi Susu Berlubang, Cegah dengan Cara Ini!', 'stop-biarin-gigi-susu-berlubang-cegah-dengan-cara-ini', '<p>Gigi berlubang adalah salah satu masalah gigi yang paling umum terjadi pada balita dan anak-anak. Gigi berlubang dapat berkembang pada gigi susu atau gigi utama anak. Mungkin MomDad berpikir, \"Ah, gigi susu kan akan tanggal juga,\" tapi tahukah MomDad? Faktanya, gigi berlubang pada anak tidak boleh diabaikan karena dapat berdampak buruk pada kesehatan dan tumbuh kembang si Kecil.</p>\r\n<p>Yuk, simak hal-hal penting tentang gigi berlubang pada anak, mulai dari penyebab hingga tips pencegahannya!</p>\r\n<p><strong>Kenapa Kesehatan Gigi Anak Itu Penting?</strong></p>\r\n<p>Gigi susu bukan hanya sekadar \"gigi sementara\" untuk si Kecil. Gigi susu memiliki peran penting, seperti [1]:</p>\r\n<ol>\r\n<li><strong>Membantu si Kecil makan dan bicara dengan baik.&nbsp;</strong>Gigi susu digunakan untuk menggigit, mengunyah, dan berfungsi mendukung perkembangan bicara anak.</li>\r\n<li><strong>Menjaga posisi untuk pertumbuhan gigi tetap.&nbsp;</strong>Gigi susu memberikan ruang bagi gigi permanen untuk tumbuh dengan posisi yang benar di kemudian hari. Jika gigi susu rusak atau tanggal sebelum waktunya, hal ini bisa menyebabkan gangguan pertumbuhan rahang atau gigi bertumpuk (crowding).</li>\r\n<li><strong>Meningkatkan rasa percaya diri.&nbsp;</strong>Anak yang memiliki gigi sehat cenderung lebih percaya diri ketika berinteraksi dengan teman-temannya.</li>\r\n</ol>\r\n<p>Selain itu, gigi berlubang dapat menyebabkan nyeri kronis, infeksi serius, hingga mengganggu kemampuan anak untuk makan dan tumbuh optimal. Jadi, menjaga kesehatan gigi sejak dini adalah investasi besar untuk masa depan si Kecil!</p>\r\n<p><strong>Penyebab Gigi Anak Bisa Berlubang</strong></p>\r\n<p><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://s3.ap-southeast-3.amazonaws.com/assets.primaku.com/editor/f585388a1eb2f102536a52211e791097a1_1736406170978.jpg\" alt=\"Gigi_susu-2.jpg\" width=\"585\" height=\"439\"></strong></p>\r\n<p>Salah satu penyebab utama gigi berlubang pada anak adalah karies gigi. Ini bisa terjadi karena berbagai faktor, seperti [1]:</p>\r\n<ol>\r\n<li>Kebiasaan botol susu saat tidur. Bayi yang tertidur dengan botol susu di mulutnya rentan mengalami \"karies botol susu\". Hal ini terjadi karena gula dari susu atau minuman lain menempel di gigi dan membentuk plak yang bersifat asam, merusak enamel gigi.</li>\r\n<li>Kebersihan gigi yang kurang terjaga. Jika gigi si Kecil jarang disikat, sisa makanan akan menumpuk dan menjadi tempat berkembang biaknya bakteri penyebab karies.</li>\r\n<li><strong>Konsumsi makanan tinggi gula dan karbohidrat.&nbsp;</strong>Makanan seperti permen, biskuit, jus buah, atau minuman bersoda dapat meningkatkan risiko karies gigi karena menghasilkan asam yang merusak enamel gigi.</li>\r\n<li><strong>Diet tinggi gula.</strong>&nbsp;Gula yang berlebihan dapat menyebabkan bakteri di mulut berkembang lebih cepat, menghasilkan plak yang bersifat asam, dan menyebabkan gigi berlubang.</li>\r\n</ol>\r\n<p>Karies yang parah bahkan bisa menyebabkan peradangan pada gusi (gingivitis) yang ditandai dengan gusi bengkak dan nyeri. Jika dibiarkan, infeksi ini bisa meluas dan menjadi masalah serius.</p>', 'articles/pzNm99EoWjKGZW65eQR8dAOIFcWXlP1n6pe05joc.jpg', '2025-01-13 23:14:21', '2025-01-13 23:14:21'),
(9, 'Stimulasi Sensorik Bayi 100 Hari Pertama: Apa yang Harus dan Tidak Harus Dilakukan', 'stimulasi-sensorik-bayi-100-hari-pertama-apa-yang-harus-dan-tidak-harus-dilakukan', '<p>Bayi yang baru lahir memiliki potensi besar untuk tumbuh dan belajar melalui stimulasi sensorik. Dalam 100 hari pertama, indera mereka sedang berkembang pesat. Penting bagi orang tua untuk memberikan stimulasi yang tepat untuk mendukung tumbuh kembang bayi, sekaligus menghindari hal-hal yang dapat membahayakan atau membuat bayi overstimulasi.</p>\r\n<p><strong>Apa yang Harus Dilakukan?</strong></p>\r\n<ol>\r\n<li><strong>Berikan&nbsp;<em>skin-to-skin contact</em></strong></li>\r\n</ol>\r\n<p>Kontak kulit ke kulit membantu bayi merasa aman, menenangkan detak jantung, dan mempererat ikatan emosional. Aktivitas ini juga membantu perkembangan sensorik sentuhan bayi.</p>\r\n<p><strong>2. Kenalkan kontras visual</strong></p>\r\n<p>Di usia 0-3 bulan, bayi lebih tertarik pada pola kontras tinggi, seperti hitam dan putih. Gunakan kartu kontras atau mainan sederhana untuk merangsang perkembangan penglihatan mereka.</p>\r\n<p><strong>3. Berbicara dan bernyanyi</strong></p>\r\n<p>Suara orang tua adalah salah satu stimulasi terbaik untuk bayi. Bicara dengan nada lembut atau bernyanyi membantu perkembangan pendengaran dan membangun hubungan emosional.</p>\r\n<p><strong>4.<em>&nbsp;Tummy time</em>&nbsp;yang Teratur</strong></p>\r\n<p>Aktivitas ini penting untuk memperkuat otot leher dan bahu bayi. Mulailah dengan durasi singkat, seperti 1-2 menit, lalu tingkatkan secara perlahan sesuai kenyamanan bayi.</p>\r\n<p><strong>5. Eksplorasi tekstur beragam</strong></p>\r\n<p>Gunakan kain lembut, spons, atau benda berbahan aman untuk memperkenalkan bayi pada berbagai tekstur. Hal ini merangsang indera peraba dan membantu bayi mengenali lingkungannya.</p>\r\n<p><strong>6. Pijatan lembut</strong></p>\r\n<p>Pijat bayi dengan minyak khusus bayi dapat meningkatkan sirkulasi darah, mempererat bonding, dan merangsang saraf sensorik.</p>\r\n<p><strong>Apa yang Harus Dihindari?</strong></p>\r\n<ol>\r\n<li><strong>Overstimulasi</strong></li>\r\n</ol>\r\n<p>Terlalu banyak stimulasi, seperti suara keras atau cahaya terang berlebihan, dapat membuat bayi merasa kewalahan. Perhatikan tanda bayi seperti menangis, mengalihkan pandangan, atau gelisah sebagai sinyal mereka butuh istirahat.</p>\r\n<p><strong>2. Mainan yang tidak sesuai usia</strong></p>\r\n<p>Hindari menggunakan mainan yang terlalu kompleks untuk bayi baru lahir. Fokus pada mainan sederhana yang aman, tanpa bagian kecil yang dapat tertelan.</p>\r\n<p><strong>3. Eksposur pada&nbsp;<em>gadget</em></strong></p>\r\n<p>Bayi 0-3 bulan tidak membutuhkan gadget. Paparan layar dapat mengganggu perkembangan mata dan membuat bayi kehilangan momen eksplorasi dunia nyata.</p>\r\n<p><strong>4. Lingkungan yang tidak aman</strong></p>\r\n<p>Pastikan area stimulasi bayi bebas dari benda tajam, bahan kimia, atau suhu ekstrem. Keamanan adalah prioritas utama.</p>\r\n<p><strong>5. Terlalu banyak aktivitas sekaligus</strong></p>\r\n<p>Cobalah fokus pada satu jenis stimulasi setiap waktu. Misalnya, berbicara sambil memijat bayi, atau memperlihatkan kartu kontras tanpa suara tambahan.</p>\r\n<p>Stimulasi sensorik di 100 hari pertama kehidupan bayi adalah fondasi penting untuk tumbuh kembangnya. Dengan memberikan stimulasi yang tepat, bayi akan merasa aman, dicintai, dan memiliki kesempatan untuk belajar mengenal dunia.</p>', 'articles/o86ugmp9P9DPIHgeGtgrUPABp002uGAsWMeQluiA.jpg', '2025-01-13 23:19:16', '2025-01-13 23:19:16'),
(10, 'Infeksi Telinga Tengah: Bahaya Tersembunyi Penghambat Tumbuh Kembang Anak', 'infeksi-telinga-tengah-bahaya-tersembunyi-penghambat-tumbuh-kembang-anak', '<p>MomDad, pernah nggak, si Kecil tiba-tiba rewel, sering pegang telinga, atau bahkan demam tanpa sebab? Hati-hati, bisa jadi itu tanda infeksi telinga tengah yang sering terlewatkan!</p>\r\n<p>Infeksi telinga tengah ini tak hanya bikin si Kecil nggak nyaman, tapi juga memengaruhi tumbuh kembangnya karena gangguan ini berdampak pada pendengaran, bahkan keterlambatan bicara. Duh, jangan sampai kita abai sama tanda-tandanya, ya. Lewat artikel ini, ayo, cari tahu tentang bahaya tersembunyi infeksi telinga tengah dan apa yang bisa dilakukan untuk melindungi si Kecil!</p>\r\n<p><strong>Infeksi Telinga Tengah (Otitis Media) Rentan Terjadi pada Anak</strong></p>\r\n<p>Infeksi telinga tengah atau otitis media sering dialami anak-anak, terutama pada usia 6-24 bulan. Sekitar 80-90% anak mengalaminya sebelum usia sekolah [1]. 50% anak menderita satu kali atau lebih Infeksi Telinga Tengah pada usia 1 tahun [2]. Anak-anak lebih rentan karena struktur telinga mereka yang lebih sempit, memudahkan penumpukan cairan dan pembengkakan. Hal ini diperparah oleh kelenjar adenoid yang lebih besar, yang menghalangi saluran eustachius, kemudian meningkatkan risiko infeksi pada anak [3].</p>\r\n<p>Menurut sebuah artikel di situs web&nbsp;<strong>American Family Physician (AAFP)</strong>, pada usia&nbsp;tiga tahun, 50% hingga 85% anak-anak akan memiliki setidaknya satu episode otitis&nbsp;media akut (AOM) [2].&nbsp;Infeksi ini biasanya dimulai saat saluran eustachius (penghubung telinga tengah dan&nbsp;tenggorokan) tersumbat akibat pilek atau alergi, yang menyebabkan bakteri atau virus&nbsp;berkembang. Beberapa bakteri penyebabnya adalah<em>&nbsp;Streptococcus pneumoniae</em>,&nbsp;<em>​</em><em>non-typeable Haemophilus influenzae,</em>&nbsp;dan&nbsp;<em>Moraxella catarrhalis</em>, yang tidak menular langsung, tetapi bisa menular melalui batuk atau pilek [1,3].</p>\r\n<p>Paparan asap rokok, penggunaan dot sambil berbaring, dan sering berada di tempat&nbsp;ramai seperti&nbsp;<em>daycare</em>, juga dapat meningkatkan risiko terpapar infeksi telinga tengah. Selain itu, cuaca dingin atau hujan juga bisa memicu infeksi ini [3].</p>\r\n<p><strong>Bagaimana Gejala/ Tanda-tanda Infeksi Telinga Tengah pada Anak?</strong></p>\r\n<p>Mengingat si Kecil belum bisa mengungkapkan apa yang mereka rasakan, orang tua&nbsp;perlu memahami tanda-tanda berikut [4,5]:</p>\r\n<ul>\r\n<li>Nyeri telinga (biasanya ditunjukkan dengan menarik atau menggaruk telinga).</li>\r\n<li>Rewel, menangis lebih sering, atau sulit tidur.</li>\r\n<li>Nafsu makan menurun.</li>\r\n<li>Respon terhadap suara berkurang.</li>\r\n</ul>\r\n<p><strong>Dampak Infeksi Telinga Tengah pada Tumbuh Kembang Anak</strong></p>\r\n<p>Infeksi telinga tengah juga dapat menghambat perkembangan mental dan sosial anak,&nbsp;yang pada akhirnya memengaruhi kemampuan mereka dalam belajar dan&nbsp;berinteraksi. Berikut dampak yang bisa terjadi pada anak dengan otitis media [4,9,10]:</p>\r\n<ul>\r\n<li>Penurunan pendengaran: otitis media dapat menyebabkan penurunan pendengaran sekitar 20-30 dB, yang dapat mengganggu kemampuan otak dalam memproses suara.</li>\r\n<li>Gangguan arah suara: jika infeksi terjadi hanya di satu telinga, perbedaan pendengaran antara kedua telinga mengganggu kemampuan anak untuk menentukan arah suara.</li>\r\n<li>Kesulitan memahami bahasa: gangguan pendengaran dapat memengaruhi kemampuan anak dalam memahami bahasa dan membedakan suara, sehingga dapat menghambat perkembangan bicara anak.</li>\r\n<li>Kesulitan belajar: anak bisa mengalami kesulitan dalam mengenali bunyi kata, memahami informasi di kelas, serta belajar membaca dan mengeja.</li>\r\n</ul>', 'articles/LNfml6LACl6wiBmmacW4SQOTA311D3RzEPDvrDkv.jpg', '2025-01-14 03:43:16', '2025-01-14 03:43:16'),
(11, '\"Kenapa Anak Batuk Terus-menerus Perlu Diwaspadai? Apakah Berbahaya?\"', 'kenapa-anak-batuk-terus-menerus-perlu-diwaspadai-apakah-berbahaya', '<p>Kenapa ya si Kecil kalo batuk kok gak udah-udah? Sembuh dikit, eh gak lama batuk lagi. Duh, bahaya gak sih ini?</p>\r\n<p>Batuk pada anak memang sering terjadi, terutama ketika mereka sedang mengalami pilek atau infeksi saluran pernapasan. Namun, apabila batuk berlangsung terus-menerus atau lebih dari beberapa minggu, ini bisa menjadi tanda adanya masalah kesehatan yang perlu diperhatikan. Lantas, mengapa batuk terus-menerus pada anak harus diwaspadai? Apakah kondisi ini berbahaya?</p>\r\n<h3>1. Penyebab Batuk Pada Anak</h3>\r\n<p>Batuk pada anak bisa disebabkan oleh berbagai faktor, mulai dari infeksi virus ringan hingga kondisi medis yang lebih serius. Beberapa penyebab umum batuk pada anak antara lain:</p>\r\n<ul>\r\n<li><strong>Pilek atau Flu</strong>: Infeksi virus yang paling sering menyebabkan batuk ringan.</li>\r\n<li><strong>Infeksi Saluran Pernapasan</strong>: Seperti bronkitis atau pneumonia yang dapat menyebabkan batuk berdahak.</li>\r\n<li><strong>Asma</strong>: Gangguan pernapasan yang seringkali memicu batuk, terutama pada malam hari.</li>\r\n<li><strong>Alergi</strong>: Misalnya alergi debu atau polusi udara yang bisa menyebabkan batuk kronis.</li>\r\n<li><strong>Refluks Asam (GERD)</strong>: Kondisi ini dapat menyebabkan iritasi tenggorokan dan memicu batuk.</li>\r\n</ul>\r\n<h3>2. Batuk yang Terus-menerus: Kapan Harus Khawatir?</h3>\r\n<p>Batuk yang berlangsung lebih dari 3 minggu atau disertai dengan gejala lain seperti sesak napas, demam tinggi, atau penurunan berat badan, dapat menjadi tanda adanya kondisi yang lebih serius. Beberapa kondisi yang perlu diwaspadai antara lain:</p>\r\n<ul>\r\n<li><strong>Asma</strong>: Batuk yang terus-menerus, terutama di malam hari, bisa menjadi tanda asma. Jika anak sering mengeluh kesulitan bernapas atau mengi, segera konsultasikan dengan dokter.</li>\r\n<li><strong>Infeksi Bakterial</strong>: Batuk berdahak yang tidak membaik dalam beberapa minggu bisa jadi indikasi infeksi bakteri seperti pneumonia atau bronkitis.</li>\r\n<li><strong>TBC (Tuberkulosis)</strong>: Meskipun jarang, TBC bisa menyebabkan batuk berkepanjangan yang disertai dengan darah atau lendir kental.</li>\r\n<li><strong>Penyakit Jantung</strong>: Batuk yang disertai dengan kelelahan atau pembengkakan kaki bisa menjadi tanda masalah jantung, meskipun ini juga jarang terjadi pada anak.</li>\r\n</ul>\r\n<h3>3. Bagaimana Menangani Batuk Pada Anak?</h3>\r\n<p>Jika anak Anda mengalami batuk terus-menerus, berikut beberapa langkah yang dapat dilakukan:</p>\r\n<ul>\r\n<li><strong>Periksakan ke Dokter</strong>: Jika batuk berlangsung lebih dari beberapa minggu atau disertai dengan gejala lain yang mengkhawatirkan, segera bawa anak ke dokter. Dokter akan melakukan pemeriksaan fisik dan mungkin meminta tes tambahan.</li>\r\n<li><strong>Cegah Dehidrasi</strong>: Pastikan anak tetap terhidrasi dengan baik. Minum air putih dapat membantu mengencerkan lendir di tenggorokan.</li>\r\n<li><strong>Gunakan Humidifier</strong>: Udara kering bisa memperburuk batuk. Penggunaan humidifier dapat membantu menjaga kelembapan udara di dalam ruangan.</li>\r\n<li><strong>Istirahat yang Cukup</strong>: Pastikan anak mendapatkan cukup istirahat untuk membantu pemulihan tubuh.</li>\r\n</ul>\r\n<h3>4. Pencegahan Batuk Pada Anak</h3>\r\n<p>Ada beberapa cara yang dapat membantu mengurangi risiko anak terkena batuk atau infeksi saluran pernapasan, di antaranya:</p>\r\n<ul>\r\n<li><strong>Vaksinasi</strong>: Pastikan anak mendapatkan vaksinasi lengkap, termasuk vaksin flu dan vaksin lainnya yang dapat mencegah infeksi serius.</li>\r\n<li><strong>Menjaga Kebersihan</strong>: Ajari anak untuk rajin mencuci tangan dan menghindari kontak dengan orang yang sedang sakit.</li>\r\n<li><strong>Meningkatkan Daya Tahan Tubuh</strong>: Berikan makanan bergizi yang mendukung sistem kekebalan tubuh anak agar lebih kuat melawan infeksi.</li>\r\n</ul>', 'articles/itxi6EQxwQG0TK043cC2lV7FXRyGHqxqZKzO10f4.jpg', '2025-01-22 20:08:26', '2025-01-22 20:08:26'),
(12, 'Resep MPASI Anti Stunting: Bubur Saring Hati Ayam', 'resep-mpasi-anti-stunting-bubur-saring-hati-ayam', '<p><strong>Bahan:</strong></p>\r\n<ul>\r\n<li><strong>1 sdm</strong>&nbsp;beras merah, rendam dalam air</li>\r\n<li><strong>50 g</strong>&nbsp;kacang hijau, rendam &plusmn; 4 jam</li>\r\n<li><strong>500 ml</strong>&nbsp;kaldu daging</li>\r\n<li><strong>50 g&nbsp;</strong>wortel, kupas, iris dadu</li>\r\n<li><strong>50 g&nbsp;</strong>hati ayam, rebus, potong dadu</li>\r\n<li><strong>50 ml&nbsp;</strong>santan</li>\r\n</ul>\r\n<p><strong>Cara Membuat:</strong></p>\r\n<ol>\r\n<li>Rebus kacang hijau dengan 300 cc air hingga mendidih. Angkat dan saring.</li>\r\n<li>Rebus kembali kacang hijau dengan 200 cc air hingga lunak. Haluskan dan saring.</li>\r\n<li>Rebus beras merah dengan 300 cc air rebusan kacang hijau hingga matang. Masukkan hati, santan, wortel, dan kacang hijau.</li>\r\n<li>Setelah dingin, masukkan ke dalam blender, haluskan hingga lembut.</li>\r\n<li>Sajikan segera selagi hangat atau simpan dalam lemari es. Sebelum disajikan, rendam wadahnya dalam air panas lebih dahulu.</li>\r\n</ol>', 'articles/kU3EeZf3GwBoL1jGrQq4yTL51MpgyIQ511M7hvfG.jpg', '2025-01-22 20:16:06', '2025-01-22 20:16:06'),
(13, 'Resep MPASI Finger Foods: Sate Pentul Sapi', 'resep-mpasi-finger-foods-sate-pentul-sapi', '<p><strong>BAHAN</strong>:</p>\r\n<p><strong>100 gram&nbsp;</strong>daging sapi giling</p>\r\n<p><strong>50 gram</strong>&nbsp;kelapa muda parut</p>\r\n<p>Garam secukupnya</p>\r\n<p>Merica secukupnya</p>\r\n<p><strong>BUMBU HALUS:</strong></p>\r\n<p><strong>1 siung&nbsp;</strong>bawang putih</p>\r\n<p><strong>2 buah</strong>&nbsp;bawang merah</p>\r\n<p><strong>&frac14; cm&nbsp;</strong>serai</p>\r\n<p><strong>CARA MEMBUAT:</strong></p>\r\n<p>1. Campur daging, kelapa parut, bumbu halus, garam, dan merica. Aduk hingga tercampur rata.</p>\r\n<p>2. Bentuk adonan, rekatkan pada tusuk sate.</p>\r\n<p>3. Panggang hingga kedua sisi sate matang kecokelatan.</p>', 'articles/m7xYrEFlznhdTIvB8bQZQP3SVxTl0DQ3CmIz6ibF.jpg', '2025-01-22 20:21:58', '2025-01-22 20:21:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2025_01_05_021324_add_slug_to_articles_table', 3),
(29, '0001_01_01_000000_create_users_table', 4),
(30, '0001_01_01_000001_create_cache_table', 4),
(31, '0001_01_01_000002_create_jobs_table', 4),
(32, '2025_01_05_015750_create_articles_table', 4),
(33, '2025_01_08_171509_create_products_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `slug`, `price`, `image`, `link`, `created_at`, `updated_at`) VALUES
(11, 'Jual Parcel Bayi / Kado Bayi Paket Baby Care', 'Paket Parcel Bayi Yang Bisa dikostumisasi Sesuai dengan Yang Kamu Inginkan', 'jual-parcel-bayi-kado-bayi-paket-baby-care', 40000.00, '5DDU4I9VyFBZKDMDmgE6fVxf2qJu73IGfaoGNfd9.jpg', 'https://id.shp.ee/hkKrS69', '2025-01-15 03:12:52', '2025-01-15 03:12:52'),
(12, 'Jual Parcel Bayi / Kado bayi - Paket BabyCare', 'Parcel Bayi / Kado Bayi - Paket BabyCare adalah paket hadiah yang berisi berbagai perlengkapan dan produk perawatan untuk bayi. Didesain khusus untuk memberikan kenyamanan dan kebutuhan bayi yang baru lahir, paket ini mencakup produk seperti pakaian bayi, perlengkapan mandi, sabun atau shampo bayi, dan aksesori lainnya yang bermanfaat untuk merawat bayi dengan lembut dan aman. Cocok untuk diberikan sebagai kado bagi bayi yang baru lahir.', 'jual-parcel-bayi-kado-bayi-paket-babycare', 45000.00, 'egP2cz5GO4OTiaz4ewP4qzswQkY1mSOT9PrDmKrO.jpg', 'https://id.shp.ee/hkKrS69', '2025-01-15 03:35:44', '2025-01-15 03:35:44'),
(14, 'Jual Parcel Bayi / Kado bayi  - Paket BabyCare -Cussons', 'Parcel Bayi Kado Bayi Paket BabyCare adalah pilihan sempurna untuk memberikan kejutan manis kepada orang tua baru. Setiap paket didesain dengan penuh perhatian, berisi berbagai perlengkapan bayi yang berkualitas dan berguna untuk menunjang kebutuhan si kecil. Dalam satu paket, Anda akan menemukan produk-produk pilihan yang ramah bayi dan praktis untuk digunakan, termasuk pakaian bayi, selimut, mainan edukatif, perlengkapan mandi, hingga perlengkapan sehari-hari lainnya.\r\n\r\nProduk dalam Paket BabyCare dirancang untuk memberikan kenyamanan dan keamanan bagi bayi, dengan bahan yang lembut, aman, dan hypoallergenic. Kado ini cocok sebagai hadiah untuk baby shower, kelahiran bayi, atau sebagai bingkisan spesial untuk orang tua yang baru menyambut buah hati mereka.\r\n\r\nKeunggulan Paket BabyCare:\r\n\r\nProduk berkualitas tinggi dan aman untuk bayi.\r\nDilengkapi dengan berbagai item penting untuk kebutuhan bayi sehari-hari.\r\nPaket kemasan yang cantik dan menarik, siap untuk diberikan sebagai kado.\r\nTersedia dalam berbagai varian produk yang dapat disesuaikan dengan kebutuhan.\r\nPaket BabyCare adalah pilihan yang penuh kasih sayang untuk memberikan perhatian ekstra kepada bayi dan orang tua baru.', 'jual-parcel-bayi-kado-bayi-paket-babycare-cussons', 117600.00, 'sgsGc6SsvVGO6WlTcOqPSQ3bbDtdZynZEpDtoVet.jpg', 'https://id.shp.ee/MK4LLPE', '2025-01-15 04:21:49', '2025-01-15 04:21:49'),
(15, 'parcel bayi custom kado bayi - paket BabyCare - murce', 'untuk customisasi bisa chat melalui whatsapp', 'parcel-bayi-custom-kado-bayi-paket-babycare-murce', 50000.00, 'eXnE4Q1MT2UprzAczXHBNgaDeq3MHTdkfOrl7exH.jpg', 'https://id.shp.ee/GEqJgaS', '2025-01-15 04:23:13', '2025-01-15 04:23:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8f7B2WNuIbOxiHbwCVbMJkLEI5bewpXV1HnuSRrf', NULL, '103.67.79.205', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEdlYzE5VWNzcmtYY1l4MjNYUDFRWkg3Zmo1WlE1REpxS21iSGRtaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZWthZXMtaWQubmFuZHJhZGlnaXRhbC5zaXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737577461),
('aSx0aJqO1VII2DBiOTw0hIUgnrG6M90KgcgzloxY', NULL, '206.168.34.90', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVowVTk5QXhUVTdqOG11ME4xYjlrZlI4SFRqNU9GMm1ERHBDb3NYMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZWthZXMtaWQubmFuZHJhZGlnaXRhbC5zaXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737573900),
('GHNdk6A5oZ3Q9oiTIjpP1TN3e8O25dtXqMwFtV7v', NULL, '103.67.79.205', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3ZPRnF4MUxJWTZnTk16bTZXNk1ucDBFZDNpNXNCa2trWDVXc0dKQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZWthZXMtaWQubmFuZHJhZGlnaXRhbC5zaXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737578246),
('q3wx5Y1PgQGfAXi5V12Eh5EojMocxGubFDEBP9go', NULL, '114.10.154.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZEpCNzgxalk0dUk4OXVTaHlPU2k1d1lmdkdMU3N1ZjllM25ZcXpqQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737601719),
('uwBGssz2ueUfSh32cfQHSr4mxWi3bYLkLica7PZm', NULL, '103.67.79.205', 'WhatsApp/2.23.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlY5QkF1VTZTejZ1cG1jTnFYeDBySGtmNVpVZkI1WUQ1aHNLSEM4MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZWthZXMtaWQubmFuZHJhZGlnaXRhbC5zaXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737577664),
('xg5IGw7eqIOLbbGRGUsccWpFA1niOjNOpXpYrYuo', NULL, '103.67.79.205', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTNMTGptNVJvSVZXdmpKU3BEc2t2NG5KRjk1dEVMOVRoUndGc2NKVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc2FtcGFoYmVydWFuZy5uYW5kcmFkaWdpdGFsLnNpdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737575482);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
