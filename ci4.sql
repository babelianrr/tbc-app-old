-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 04:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `c2019`
--

CREATE TABLE `c2019` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c2019`
--

INSERT INTO `c2019` (`id`, `slug`, `nama`) VALUES
(1, 'riko', 'Riko'),
(2, 'rika', 'Rika'),
(4, 'white-poca', 'White Pocahontas'),
(5, 'melody', 'Melody'),
(6, 'athena', 'Athena'),
(7, 'dark-anto', 'Dark Antoinette'),
(8, 'moohyul', 'Moohyul'),
(9, 'misty', 'Misty'),
(10, 'champ-athena', 'Champion Athena'),
(11, 'odette', 'Odette'),
(12, 'gold-tricker', 'Tricker'),
(13, 'rena', 'Rena'),
(14, 'nasser', 'Nasser'),
(15, 'louis', 'Louis'),
(16, 'dark-lucid', 'Dark Lucid'),
(17, 'white-mahiro', 'White Mahiro'),
(18, 'zaha', 'Zaha'),
(19, 'baby-sherlock', 'Kindergarten Sherlock'),
(20, 'jwc', 'Jeon Woo Chi'),
(21, 'youha', 'Youha'),
(22, 'police-labiang', 'Police La Vie En Rose'),
(23, 'verde', 'Fox Witch Verde'),
(24, 'amber', 'Amber'),
(25, 'stella', 'Fairy Stella'),
(26, 'swim-catherine', 'Swimsuit Catherine'),
(27, 'ra', 'Ra'),
(28, 'sheep-mari', 'Sheep Mari'),
(29, 'blue-nirvana', 'New Moon Nirvana'),
(30, 'rsq', 'Queen'),
(31, 'god-muse', 'Art Goddess Muse'),
(32, 'god-kraus', 'Thunder God Kraus'),
(33, 'bolang', 'Bihyungnang'),
(34, 'mawang', 'Devil King Astaroth'),
(35, 'hb-lucia', 'Hanbok Lucia'),
(36, 'ciel', 'Ciel'),
(37, 'joey', 'Joey'),
(38, 'nicole', 'Nicole'),
(39, 'ella', 'Ella'),
(40, 'ethan', 'Ethan'),
(41, 'puding', 'Puding'),
(42, 'fey', 'Fey');

-- --------------------------------------------------------

--
-- Table structure for table `c2020`
--

CREATE TABLE `c2020` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c2020`
--

INSERT INTO `c2020` (`id`, `slug`, `nama`) VALUES
(1, 'lilith', 'Lilith'),
(2, 'zero', 'Zero'),
(3, 'ren', 'Ren'),
(4, 'mnemion', 'Mnemion'),
(5, 'bari-new', 'Shepherd Bari'),
(6, 'remus-new', 'Dark Wolf Remus'),
(7, 'lulubel', 'Lulubel'),
(8, 'thetis', 'Thetis'),
(9, 'muse-new', 'Valkyrie Muse'),
(10, 'sophie-new', 'First Love Sophie'),
(11, 'roland-new', 'Artist Roland'),
(12, 'dion', 'Dion'),
(13, 'sid', 'Sid'),
(14, 'asha', 'Asha'),
(15, 'leblanc-post', 'Postman Le Blanc'),
(16, 'hanchaeryeong', 'Han Chaeryeong'),
(17, 'rena-world', 'World Star Rena'),
(18, 'mayo', 'Princess Mayo'),
(19, 'grace', 'Grace'),
(20, 'biscuit', 'Biscuit'),
(21, 'raven', 'Loner Swordsman Raven'),
(22, 'yeonhee', 'Yeonhee'),
(23, 'rudy', 'Rudy'),
(24, 'koongya', 'Yangpa Koongya'),
(25, 'golros', 'Golros'),
(26, 'mina', 'Mina'),
(27, 'kamaela', 'Kamaela'),
(28, 'magudori', 'Magudori'),
(29, 'bennett', 'Bennett'),
(30, 'khazad', 'Khazad'),
(31, 'cory', 'Cory'),
(32, 'bubbles', 'Bubbles & Dinochius'),
(33, 'eunseol', 'Trot Queen Eunseol');

-- --------------------------------------------------------

--
-- Table structure for table `c2021`
--

CREATE TABLE `c2021` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c2021`
--

INSERT INTO `c2021` (`id`, `slug`, `nama`) VALUES
(1, 'scarlet', 'Scarlet'),
(2, 'gold-caren', 'Gold Caren'),
(3, 'estelle', '[2021] Estelle'),
(4, 'yoonrang', 'Yoonrang'),
(5, 'camembert', 'Camembert'),
(6, 'white-moohyul', 'White Moohyul'),
(7, 'ragon', 'Ragon'),
(8, 'artemis', 'Artemis'),
(9, 'lianne', 'Soul Librarian Lianne'),
(10, 'little-nixie', 'Little Nixie'),
(11, 'ellony', 'Ellony'),
(12, 'saho', 'Saho'),
(13, 'evo-rena', 'Hot Summer Rena'),
(14, 'evo-isabel', 'Queen Isabel'),
(15, 'evo-athena', 'Swimsuit Athena'),
(16, 'ava', 'Ava'),
(17, 'evo-lulubel', 'Scientist Lulubel'),
(18, 'evo-luna', 'Luna'),
(19, 'evo-mercury', 'Sea Traveler Mercury'),
(20, 'elise', 'Elisé'),
(21, 'evo-aslan', 'Aslan'),
(22, 'gon', 'Gon'),
(23, 'evo-mix-yoonrang', 'Mix Yoonrang'),
(24, 'evo-rudy', 'Rudy'),
(25, 'evo-junie', 'Junie'),
(26, 'evo-juna', 'Juna'),
(27, 'gaia', 'Gaia'),
(28, 'evo-eolin', 'Attack on Eolin'),
(29, 'evo-mix-ragon', 'Mix Ragon'),
(30, 'evo-yeonhee', 'Abyss Yeonhee'),
(31, 'haryeong', 'Haryeong'),
(32, 'evo-run-aslan', 'Runaway Aslan'),
(33, 'evo-mix-saho', 'Mix Saho'),
(34, 'evo-mina', 'Charming Mina'),
(35, 'lily', 'Lily'),
(36, 'evo-dilith', 'Dilith'),
(37, 'evo-kamaela', 'Nova Kamaela');

-- --------------------------------------------------------

--
-- Table structure for table `c2022`
--

CREATE TABLE `c2022` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c2022`
--

INSERT INTO `c2022` (`id`, `slug`, `nama`) VALUES
(1, 'kimun', 'Kimun'),
(2, 'evo-khazad', 'Count Khazad'),
(3, 'evo-petite-elise', 'Petite Elisé'),
(4, 'jewol', 'Jewol'),
(5, 'evo-sieg', 'Sieg'),
(6, 'evo-odette', 'Odette'),
(7, 'greta', 'Greta'),
(8, 'evo-mamon', 'Mamon'),
(9, 'evo-petite-artemis', 'Petite Artemis'),
(10, 'evo-muse', 'Valkyrie Muse');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Tidak berkategori'),
(2, 'Pengumuman'),
(3, 'Informasi'),
(4, 'Panduan'),
(5, 'Berbagi Pengalaman'),
(6, 'Pertanyaan'),
(7, 'Senang-senang'),
(8, 'Di Luar Topik');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_read` smallint(6) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p2019`
--

CREATE TABLE `p2019` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p2019`
--

INSERT INTO `p2019` (`id`, `slug`, `nama`) VALUES
(1, 'hpi', 'Home Party Invitation Card'),
(2, 'em-field-amp', 'Electromagnetic Field Amplifier'),
(3, 'titan-gauntlet', 'Titan Gauntlet'),
(4, 'counterattack-jetpack', 'Counterattack Jetpack'),
(5, 'king-double', 'King of Double'),
(6, 'pig-helmet', 'Golden Pig Helmet'),
(7, 'pumpkin-helmet', 'Pumpkin Helmet'),
(8, 'bubble-esc-pin', 'Bubble Escape Pin'),
(9, 'acc-bh-amp', 'Accurate Blackhole Amplifier'),
(10, 'sky-town-plan', 'Sky Town Plan'),
(11, 'impenetrable-helmet', 'Impenetrable Helmet'),
(12, 'acc-punch-gun', 'Accurate Punch Glove'),
(13, 'acho', 'Amor Party Invitation Card'),
(14, 'seizure-car', 'Seizure Police Car'),
(15, 'black-dragon-ring', 'Black Dragon Ring'),
(16, 'ace-ring', 'Ace Transformation Ring'),
(17, 'ride-ring', 'Rider Transformation Ring'),
(18, 'angel-ring', 'Grim Reaper Transformation Ring'),
(19, 'zombie-ring', 'Zombie Transformation Ring'),
(20, 'jumping-de', 'Jumping Drawing Equipment'),
(21, 'quad-mg-core', 'Quad Magnetic Core'),
(22, 'dice-dest-glove', 'Dice Destroyer Gloves'),
(23, 'ghost-ship', 'Inhabitated Island Ghost Ship'),
(24, 'exchange-book', 'Exchange Bankbook'),
(25, 'copy-drone', 'Copycat Construction Drone'),
(26, 'controversial-copycat', 'Controversial Copycat'),
(27, 'pirate-bear', 'Pirate King Teddy Bear'),
(28, 'sudim-de', 'Superdimension Drawing Equipment'),
(29, 'invincible-badge', 'Invincible Badge'),
(30, 'demo-gravity-amp', 'Demolition Gravity Amplifier'),
(31, 'prison-car', 'Prison Police Car'),
(32, 'landlord-suit', 'Landlord Double Suit'),
(33, 'protect-shoes', 'Protect Shoes'),
(34, 'scarecrow-helmet', 'Scarecrow Helmet'),
(35, 'comp-guard-drone', 'Completion Guardian Drone'),
(36, 'magic-brush', 'Magic Brush'),
(37, 'confinement-mg-core', 'Confinement Magnetic Core'),
(38, 'ninja-shoes', 'Ninja Shoes'),
(39, 'gocho', 'Ghost Party Invitation Card'),
(40, 'spaceship-de', 'Spaceship Drawing Equipment'),
(41, 'contributor-copy-drone', 'Contributor Copy Drone'),
(42, 'spy-trap', 'Spy Trap'),
(43, 'dark-bubble-gun', 'Darkness Bubble Gun');

-- --------------------------------------------------------

--
-- Table structure for table `p2020`
--

CREATE TABLE `p2020` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p2020`
--

INSERT INTO `p2020` (`id`, `slug`, `nama`) VALUES
(1, 'dbwing-jetpack', 'Doublewing Jetpack'),
(2, 'shield-drone', 'Shield Generating Drone'),
(3, 'landlord-bear', 'Landlord Teddy Bear'),
(4, 'titanium-helmet', 'Titanium Helmet'),
(5, 'diamond-punch-gun', 'Diamond Punch Gun'),
(6, 'teleport-de', 'Teleport Drawing Equipment'),
(7, 'corner-mg-core', 'Corner Magnetic Core'),
(8, 'mawang-shoulder', 'Astaroth\'s Shoulder Ornament'),
(9, 'spiderweb-catchbot', 'Spiderweb Catchbot'),
(10, 'ultimate-ring', 'Ultimate Defense Ring'),
(11, 'paint-roller-shoes', 'Paint Roller Shoes'),
(12, 'shield-jetpack', 'Shield Jetpack'),
(13, 'tarot-bear', 'Teddy Bear Tarot Card'),
(14, 'pirate-de', 'Pirate Ship Drawing Equipment'),
(15, 'trap-shoes', 'Trap Shoes'),
(16, 'freedom-helmet', 'Freedom Helmet'),
(17, 'demo-copy-drone', 'Demolition King Copy Drone'),
(18, 'premium-pallette', 'Premium Pallette'),
(19, 'sudim-amp', 'Superdimension Amplifier Device'),
(20, 'exile-copy-drone', 'Exile King Copy Drone'),
(21, 'shield-shoes', 'Shield Shoes'),
(22, 'switch-punch-gun', 'Switch Punch Gun'),
(23, 'scarecrow-security-drone', 'Scarecrow Security Drone'),
(24, 'sky-town-de', 'Sky Town Drawing Equipment'),
(25, 'elusive-shuriken', 'Elusive Shuriken'),
(26, 'ice-dragon-ring', 'Ice Dragon Transformation Ring'),
(27, 'chef-bear', 'Gourd Chef Teddy Bear'),
(28, 'dbwing-shieldpack', 'Doublewing Shieldpack');

-- --------------------------------------------------------

--
-- Table structure for table `p2021`
--

CREATE TABLE `p2021` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p2021`
--

INSERT INTO `p2021` (`id`, `slug`, `nama`) VALUES
(1, 'landmark-shoes', 'Landmark Shoes'),
(2, 'paint-board', 'Painter Skateboard'),
(3, 'discharge-trap', 'Discharge Trap'),
(4, 'exile-punch-gun', 'Exile King Punch Gun'),
(5, 'switch-gate', 'Switch Dimensional Gate'),
(6, 'grand-sky-fall-shoes', 'Grand Sky Fall Shield Shoes'),
(7, 'dbwing-guardpack', 'Doublewing Guardpack'),
(8, 'teleport-hammer', 'Teleport Hammer'),
(9, 'warpship-de', 'Warpship Drawing Equipment'),
(10, 'bombard-helmet', 'Bombard Helmet'),
(11, 'guard-copy-drone', 'Guardian Copy Drone'),
(12, 'bubble-hpi', 'Bubble Party Invitation Card'),
(13, 'discharge-catchbot', 'Discharge Catchbot'),
(14, 'my-way-bus', 'My Way Shuttle Bus'),
(15, 'elusive-summon-shuriken', 'Elusive Summon Shuriken'),
(16, 'exile-hpi', 'Exile King Invitation Card'),
(17, 'nfs-neon', 'Not For Sale Neon Sign'),
(18, 'shield-helmet', 'Shield Helmet'),
(19, 'dbwing-switchpack', 'Doublewing Switchpack'),
(20, 'kitten-switch-punch-gun', 'Kitten Switch Punch Gun'),
(21, 'victory-helmet', 'Victory Helmet'),
(22, 'mobyunjang', 'Morgana Transformation Device'),
(23, 'bear-hpi', 'Teddy Bear Invitation Card'),
(24, 'punch-helmet', 'Punch Helmet'),
(25, 'sudim-gauntlet', 'Dimensional Move Gauntlet'),
(26, 'bh-detain', 'Blackhole Detaining Gun'),
(27, 'gathering-helmet', 'Gathering Little Helmet'),
(28, 'spy-trap-bp', 'Spy Trap Blueprint'),
(29, 'ice-jetpack', 'Ice Spike Jetpack'),
(30, 'ice-rapier', 'Switch Ice Spike Rapier'),
(31, 'mg-bleeding-core', 'Magnetic Bleeding Core'),
(32, 'exile-shield-drone', 'Exile King Shield Drone'),
(33, 'arkshield-helmet', 'Arkshield Helmet'),
(34, 'devil-bubble-gun', 'Devil King\'s Bubble Gun'),
(35, 'ninja-drone', 'Ninja Drone'),
(36, 'ninja-chef', 'Ninja Chef Teddy Bear'),
(37, 'grand-sky-paint-shoes', 'Grand Sky Fall Paint Shoes'),
(38, 'grand-sky-sudim-shoes', 'Superdimension Grand Sky Fall Shoes'),
(39, 'paint-jetpack', 'Paint Jetpack'),
(40, 'exile-shield-guard', 'Exile King Guardian Shield');

-- --------------------------------------------------------

--
-- Table structure for table `p2022`
--

CREATE TABLE `p2022` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p2022`
--

INSERT INTO `p2022` (`id`, `slug`, `nama`) VALUES
(1, 'dbwing-de', 'Doublewing Drawing Equipment'),
(2, 'snowman-security-drone', 'Snowman Security Drone'),
(3, 'titanium-assault-helmet', 'Titanium Assault Helmet'),
(4, 'stay-away-sign', 'Stay Away Sign'),
(5, 'vampire-doll', 'Vampire Detaining Doll'),
(6, 'valentine-doll', 'Valentine Odette Doll'),
(7, 'love-de', 'Love Love Drawing Equipment'),
(8, 'love-catchbot', 'Love Love Catchbot'),
(9, 'exile-hammer', 'Exile King Hammer'),
(10, 'kitten-power-punch-gun', 'Kitten Power Punch Gun'),
(11, 'spy-copy-drone', 'Spy Copy Drone'),
(12, 'trap-hpi', 'Trap Invitation Card'),
(13, 'borjuis-de', 'Borjuis Drawing Equipment'),
(14, 'bubble-shooter', 'Blackhole Bubble Shooter'),
(15, 'aqua-bubblebot', 'Aqua Bubble Bot');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `star` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply_body` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `thread_title` varchar(128) NOT NULL,
  `thread_body` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tooltip`
--

CREATE TABLE `tooltip` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tooltip`
--

INSERT INTO `tooltip` (`id`, `slug`, `detail`) VALUES
(1, 'dice-ctrl', 'Tinggi rendahnya hasil dadu tergantung pada gauge dadu yang dimasukkan. Hasil dadu muncul sesuai dengan gauge dadu apabila skill ini aktif.'),
(2, 'direct-arrive', 'Maksudnya adalah mendatangi suatu blok atau area dengan hasil dadu maupun dengan kartu kesempatan pada turn sendiri.'),
(3, 'direct-acq', 'Aksi pengambilalihan suatu area yang dilakukan langsung di area yang didatangi setelah membayar biaya sewa maupun setelah bebas biaya sewa.'),
(4, 'random-acq', 'Aksi pengambilalihan suatu area secara acak dan tidak langsung dari lokasi pemgambilalihan terjadi tanpa mendatangi area tersebut.'),
(5, 'angel-dc-card', 'Mendapat salah satu kartu kesempatan berikut dan dapat memilih untuk menyimpan atau membuang kartu kesempatan tersebut.\r\n- Kartu Angel (bebas sewa atau bertahan dari serangan kartu kesempatan oleh lawan). Chance mendapatkan 30%.\r\n- Kartu diskon 50% (kurangi biaya sewa area sebanyak 50% apabila menggunakan kartu kesempatan ini). Chance mendapatkan 70%.'),
(6, 'team-area', 'Yaitu area milik diri sendiri atau milik anggota tim dalam permainan mode beregu.'),
(7, 'auto-const', '[First League] Bayar sejumlah biaya konstruksi untuk meningkatkan bangunan ke tahap tertentu terlepas dari tingkatan awal area lalu terapkan biaya sewa x2 pada area tersebut. Aksi ini tidak berlaku apabila membangun landmark dari area 3 bangunan. Apabila biaya konstruksi tidak cukup, batalkan konstruksi otomatis.\r\n\r\n[Champion League] Tingkatkan bangunan ke tahap tertentu terlepas dari tingkatan awal area.'),
(8, 'dest-exempt', 'Apabila tiba di area lawan, tidak membayar biaya sewa dengan mengabaikan efek yang berlaku pada area tersebut. Jika skill ini terdapat batas penggunaan, ia hanya akan berkurang apabila tiba di area yang dibebaskan biaya sewanya.'),
(9, 'blackhole', 'Menghubungkan area yang terpilh dengan area yang terdapat whitehole. Pemain yang menginjaknya akan dipindahpaksakan ke area whitehole.'),
(10, 'corner-block', 'Blok sudut adalah :\r\n- START;\r\n- pulau terpencil;\r\n- olimpiade; dan\r\n- keliling dunia.'),
(11, 'paint', 'Merebut kepemilikan area milik lawan selama durasi tertentu.'),
(12, 'map-spc-block', 'Blok yang terletak di posisi tertentu pada map yang memberikan fitur eksklusif.'),
(13, 'comp-chance', 'Kesempatan untuk menang secara monopoli area.'),
(14, 'dice-1x-chance', 'Kesempatan untuk melempar dadu lagi setelah kesempatan dadu utama selesai. Namun apabila melempar dadu dobel, tidak dapat melempar dadu lagi serta saat bergerak, akan mengabaikan semua penghalang.'),
(15, 'add-dice-chance', 'Kesempatan untuk melempar dadu lagi setelah kesempatan dadu utama selesai. Apabila melempar dadu dobel, dapat melempar dadu lagi seperti kesempatan dadu utama.'),
(16, 'checkpoint', 'Instalasi berupa palang berhenti yang dapat dipasang di lokasi manapun kecuali posisi pemain berdiri. Apabila pemain melewati atau mendatangi palang, hentikan pergerakan lalu palang akan menghilang.'),
(17, 'color-comp', 'Memonopoli semua area dalam satu kompleks warna. Saat monopoli warna, mendapat peningkatan biaya sewa x2 yang tidak dapat dipindahkan dengan skill transfer pengali biaya sewa.'),
(18, 'steal-stat', 'Kurangi 40% stat karakter lawan dan tingkatkan 10% stat karakterku selama 2 turn. Durasi efek tidak dapat ditumpuk, hanya dapat direset setiap kali mengaktifkan.'),
(19, 'design-fc-1', 'Mendapat kartu kesempatan berikut ini dan langsung gunakan.\r\n- Blackout (bebaskan biaya sewa saat didatangi). Chance mendapatkan 35%.\r\n- Konstruksi landmark (langsung bangun landmark di area yang dipilih secara cuma-cuma). Chance mendapatkan 30%.\r\n- Badai topan (hancurkan semua bangunan dalam area satu kompleks). Chance mendapatkan 35%.'),
(20, 'design-fc-2', 'Mendapat kartu kesempatan berikut ini dan langsung gunakan.\r\n- Blackout (bebaskan biaya sewa saat didatangi). Chance mendapatkan 63%.\r\n- Badai topan (hancurkan semua bangunan dalam area satu kompleks). Chance mendapatkan 25%.\r\n- Rebut area (pilih salah satu area untuk mengambil paksa kepemilikan area tersebut). Chance mendapatkan 12%.'),
(21, 'design-fc-3', 'Sebelum membayar biaya sewa, mendapat kartu kesempatan berikut ini dan langsung gunakan.\r\n- Konstruksi landmark (langsung bangun landmark di area yang dipilih secara cuma-cuma). Chance mendapatkan 50%.\r\n- Badai hujan (kurangi biaya sewa sebanyak 50% pada area satu kompleks saat didatangi). Chance mendapatkan 30%.\r\n- Badai topan (hancurkan semua bangunan dalam area satu kompleks). Chance mendapatkan 20%.'),
(22, 'design-fc-4', 'Sebelum membayar biaya sewa, mendapat kartu kesempatan berikut ini dan langsung gunakan.\r\n- Badai hujan (kurangi biaya sewa sebanyak 50% pada area satu kompleks saat didatangi). Chance mendapatkan 63%\r\n- Blackout (bebaskan biaya sewa saat didatangi). Chance mendapatkan 25%.\r\n- Rebut area (pilih salah satu area milik lawan untuk diambil paksa kepemilikannya). Chance mendapatkan 12%.'),
(23, 'design-fc-5', 'Mendapat kartu kesempatan berikut ini dan langsung gunakan.\r\n- Kupon diskon 100% (bebaskan biaya sewa saat digunakan). Chance mendapatkan 80%.\r\n- Rebut area (pilih salah satu area milik lawan untuk diambil paksa kepemilikannya). Chance mendapatkan 20%.'),
(24, 'discharge', 'Kosongkan semua skill yang berbatas penggunaannya menjadi 0, serta lawan tidak dapat mengisi ulang selama 1 turn.'),
(25, 'donation', 'Menerima kepemilikan area dari lawan secara cuma-cuma.'),
(26, 'push', 'Pindah paksa lawan ke areaku lalu kurung penjara sehingga skillnya nonaktif. Saat skill ini aktif, abaikan skill \'terbangkan ke landmark termahal\' dan skill donasi milik lawan. Saat lepas dari kurungan, paksa lawan untuk membayar biaya sewa (dapat menggunakan kartu Angel atau kupon diskon) serta tidak dapat melakukan konstruksi maupun mengambil alih area tersebut.'),
(27, 'db-growth', 'Pertumbuhan persentase yang terjadi saat pemain lain melempar dadu dobel. Persentase akan direset ke semula setelah skill diaktifkan.'),
(28, 'danger-effect', 'Efek-efek yang dapat membahayakan pemain.\r\n- Penghancuran dadu\r\n- Pengurangan stat\r\n- Perubahan wujud\r\n- Percepatan gauge dadu\r\n- Discharge\r\n- Super overcharge\r\n- Terror\r\n- Shackle\r\n- dan lain-lain'),
(29, 'fc-lab', 'Merupakan instalasi yang berbentuk laboratorium yang hanya dapat dipasang di blok sudut dan bertahan selama 3 turn. Durasi laboratorium dapat direset dengan memasang ulang di lokasi yang sama maupun berbeda. Masing-masing pemain hanya dapat memasang satu laboratorium. Laboratorium dapat menghilang ketika ditimpa oleh laboratorium yang dipasang pemain lain ataupun oleh skill tertentu.'),
(30, 'attack-fc', 'Kartu kesempatan yang dapat digunakan untuk menyerang lawan.\r\n- Badai hujan (kurangi biaya sewa sebanyak 50% pada area satu kompleks yang dipilih).\r\n- Blackout (bebaskan biaya sewa area yang dipilih).\r\n- Rebut area (ambil paksa kepemilikan area dari lawan pada area yang dipilih).\r\n- Badai topan (hancurkan seluruh bangunan pada area satu kompleks yang dipilih).'),
(31, 'bubble-detain', 'Kurung lawan apabila tiba di landmark dengan potensi kurung gelembung atau ketika lawan tiba di area yang terdapat instalasi berupa gelembung. Saat terkurung, skill lawan masih dapat aktif dan masih dapat melempar dadu dalam kesempatan dadunya. Apabila lawan mencoba bergerak, lepaskan dari kurungan. Setelah lepas dari kurungan, paksa lawan untuk membayar biaya sewa (termasuk menggunakan kartu Angel/kupon diskon) dan lawan masih bisa melakukan konstruksi ataupun mengambil alih area tersebut.'),
(32, 'dest-building', 'Hancurkan semua bangunan pada suatu area sehingga kepemilikan area tersebut hilang.'),
(33, 'dest-dice', 'Hancurkan salah satu dadu milik lawan sehingga lawan hanya dapat melempar satu dadu dan tidak mendapat keuntungan dadu dobel.'),
(34, 'limit', 'Batas aktivasi skill. Apabila batas penggunaan telah habis, skill tidak dapat diaktifkan lagi.'),
(35, 'recharge', 'Mengisi ulang batas penggunaan skill karakter dan pendant hingga titik penuhnya. Tidak dapat mengisi ulang batas penggunaan skill pada second ability pendant. Skill tetap dapat aktif walau batas penggunaan seluruh skill dalam keadaan penuh.'),
(36, 'inactive-grow', 'Pertumbuhan persentase skill yang terjadi saat suatu skill tidak aktif. Setelah skill aktif, persentase akan direset ke semula.'),
(37, 'control', 'Lempar dadu dan pindah paksa lawan sesuai dengan hasil dadu. Saat dipindah paksa, biaya sewa area yang didatangi akan meningkat 2x (dapat ditumpuk dengan peningkatan biaya sewa lain) serta lawan tidak bisa melakukan aksi apapun di area yang didatangi selain membayar biaya sewa dam menggunakan kartu Angel/kupon diskon.'),
(38, 'multiplier-lock', 'Pengunci pengali biaya sewa agar tidak dapat dipindahkan oleh skill transfer multiplier. Area yang dikunci terdapat lambang gembok di atas area tersebut.'),
(39, 'jail-detain', 'Kurung lawan dalam penjara dan hilangkan chance dadunya sehingga skill lawan tidak dapat aktif. Saat turn lawan dimulai, segera lepaskan dari kurungan dan paksa untuk membayar biaya sewa (termasuk menggunakan kartu Angel/kupon diskon), serta lawan tidak dapat melakukan konstruksi maupun mengambil alih area tersebut.'),
(40, 'dest-lm-exempt', 'Konstruksi otomatis landmark pada area kosong atau areaku dan tidak membayar biaya sewa di area lawan yang didatangi dengan mengabaikan efek yang terdapat di area tersebut.'),
(41, 'dest-lm', 'Konstruksi otomatis landmark pada area kosong atau areaku.'),
(42, 'immediate-release', 'Segera lepaskan diri dari kurungan gelembung tanpa melempar dadu lagi. Saat melepaskan diri, langsung jatuh di area tempat terkurung dan membayar biaya sewa (termasuk menggunakan kartu Angel/kupon diskon) atau bebas biaya sewa, lalu dapat langsung bergerak.'),
(43, 'immediate-escape', 'Lempar dadu untuk segera keluar dari pulau terpencil tanpa menunggu turn berikutnya. Saat melempar dadu, abaikan semua penghalang namun tidak mendapat keuntungan dadu dobel.'),
(44, 'dir-const-1', 'Konstruksi area yang dilakukan langsung di area tersebut. Membeli tanah saja, bangunan maupun landmark dapat memenuhi persyaratan.'),
(45, 'dir-const-2', 'Konstruksi area yang dilakukan langsung di area tersebut. Membangun landmark dari area 3 bangunan memenuhi persyaratan.'),
(46, 'max-200', 'Setiap satu area yang dimiliki meningkatkan biaya sewa sebanyak 40%, maksimal 5 area.'),
(47, 'const-1', 'Konstruksi landmark :\r\n- secara langsung dari 3 bangunan;\r\n- secara jarak jauh dari 3 bangunan;\r\n- secara langsung dengan konstruksi otomatis; dan\r\n- secara jarak jauh dengan konstruksi otomatis.'),
(48, 'const-2', 'Konstruksi area tanah, bangunan, maupun landmark :\r\n- secara langsung;\r\n- secara jarak jauh;\r\n- secara langsung dengan konstruksi otomatis; dan\r\n- secara jarak jauh dengan konstruksi otomatis.'),
(49, 'const-3', 'Konstruksi area tanah, bangunan, dan landmark :\r\n- secara langsung; dan\r\n- secara jarak jauh;'),
(50, 'const-4', 'Konstruksi area tanah dan bangunan :\r\n- secara langsung; dan\r\n- secara jarak jauh;'),
(51, 'const-5', 'Konstruksi area tanah, bangunan, maupun landmark :\r\n- secara langsung; dan\r\n- secara jarak jauh'),
(52, 'get-lm', 'Lawan mendapat landmark dengan konstruksi : \r\n- secara langsung;\r\n- secara jarak jauh;\r\n- secara langsung dengan konstruksi otomatis; dan\r\n- secara jarak jauh dengan konstruksi otomatis.'),
(53, 'pass', 'Melewati atau mendatangi posisi pemain atau suatu lokasi.'),
(54, 'fixed-multiplier', 'Pengali biaya sewa yang tetap diterapkan walaupun skill transfer pengali biaya sewa milik lawan aktif.'),
(55, 'grand-sky-fall', 'Pilih salah satu area kosong atau areaku untuk konstruksi otomatis landmark lalu teleport ke area tersebut. Apabila area yang dipilih sudah terdapat landmark ataupun area turis, hanya teleport ke area tersebut.'),
(56, 'oe-grow', 'Pertumbuhan persentase yang hanya terjadi saat menggunakan item ganjil genap dan skill aktif. Setelah aktif, persentase direset ke semula.'),
(57, 'comp-alert', 'Peringatan yang muncul ketika lawan akan mencapai kemenangan monopoli.'),
(58, 'move-original', 'Teleport ke posisi yang sama seakan tiba kembali di area tersebut.'),
(59, 'move-all-area', 'Pilih salah satu area yang diinginkan dan langsung bergerak ke area tujuan. Perpindahan dilakukan dengan berjalan dan saat bergerak, abaikan semua penghalang. Apabila berpindah dalam kesempatan dadu, kesempatan dadu akan langsung hilang.'),
(60, 'force-desert', 'Batalkan segala perbuatan lawan dan langsung pindah paksa lawan ke pulau terpencil. Skill pertahanan akan diabaikan serta saat tiba di pulau terpencil, skill milik lawan yang berhubungan dengan blok sudut maupun pulau terpencil tidak dapat aktif.'),
(61, 'transfer-multiplier', 'Rebut pengali biaya sewa dan pindahkan ke salah satu area termahalku lalu bayar biaya sewa dasar (termasuk tambahan biaya sewa yang ditagih). Apabila tidak memiliki satupun area atau semua area yang dimiliki sudah mencapai pengali maksimalnya, skill tidak dapat diaktifkan.'),
(62, 'rip-off', 'Biaya sewa area yang didatangi berikutnya akan meningkat 2x (dapat ditumpuk dengan peningkat biaya sewa lainnya). Setelah tiba di area manapun maupun setelah membayar biaya sewa (termasuk menggunakan kartu Angel/kupon diskon) atau bebas biaya sewa, efek langsung menghilang.'),
(63, 'copy-lm-multiplier', 'Salin pengali biaya sewa pada area tersebut ke salah satu area termahalku dan konstruksi otomatis salah satu areaku menjadi landmark.'),
(64, 'fly-each', 'Pindah paksa lawan ke landmark termahal milikku lalu aku pindah ke landmark termurah milik lawan. Apabila lawan bertahan, atau salah satu pihak tidak memiliki landmark, hanya berpindah sendirian. Saat skill aktif, abaikan skill \'terbangkan ke landmark termahal\' milik lawan.'),
(65, 'shield', 'Perlindungan terhadap segala serangan pindah paksa, perebutan marble, perebutan kartu kesempatan, dan efek berbahaya terhadap karakter diri sendiri. Setiap kali bertahan, konsumsi satu lapis shield.'),
(66, 'force-move', 'Skill yang dapat memindahpaksakan pemain di luar kehendaknya.\r\n- Tarik magnet\r\n- Dorong\r\n- Panggil\r\n- Pengendalian\r\n- Terbangkan\r\n- Tukar posisi\r\n- dan lain-lain.'),
(67, 'special-fc', 'Setiap turnku dimulai dalam keadaan apapun, pilih salah satu kartu kesempatan dan langsung gunakan.\r\n- Pasang jebakan pegas di area yang diinginkan.\r\n- Hilangkan semua efek berbahaya pada diriku dan anggota tim.'),
(68, 'spring-trap', 'Merupakan instalasi berupa jebakan pegas yang saat didatangi oleh pemain, akan memindahpaksakannya ke landmark termahal milik pemasang jebakan lalu jebakan tersebut akan menghilang. Apabila pemasang jebakan tidak memiliki landmark, jebakan pegas hanya akan menghilang saat didatangi.'),
(69, 'super-overcharge', 'Lawan yang terkena efek ini setiap kali bergerak, tingkatkan biaya konsumsi berupa :\r\n- biaya sewa;\r\n- biaya konstruksi;\r\n- biaya ambil alih;\r\n- biaya aktivasi skill;\r\n- biaya penggunaan fitur map;\r\n- dan sebagainya\r\nmaksimal 16x dan tidak dapat memperoleh diskon. Biaya summon book dan bonus game tidak ikut meningkat. Efek berlangsung selama 2 turn dan hanya dapat direset.'),
(70, 'add-lm', 'Konstruksi otomatis landmark pada area secara acak yang ditentukan oleh prioritas konstruksi.'),
(71, 'catch-move', 'Skill yang dapat menahan pergerakan lawan.\r\n- Hentikan lawan yang melewati posisiku di atas landmarkku.\r\n- Instalasi yang dapat menangkap lawan secara jarak jauh.'),
(72, 'catch', 'Hentikan lawan yang melewatiku saat aku berdiri di atas landmarkku. Saat lawan dihentikan, abaikan skill pencurian marble maupun kartu kesempatan oleh lawan.'),
(73, 'pull', 'Pindah paksa lawan dalam jangkauan tertentu dan abaikan skill pencurian marble maupun kartu kesempatan oleh lawan. Apabila lawan yang berada dalam jangkauan sedang dalam keadaan terkurung gelembung maupun penjara, lepaskan lawan dari kurungan sehingga lawan jatuh di tempat.'),
(74, 'teleport-area', 'Pilih area tujuan dan segera berpindah ke lokasi tersebut. Saat berpindah dalam kesempatan dadu, kesempatan dadu tidak menghilang.'),
(75, 'teleport-target', 'Pilih area tujuan dan segera berpindah ke posisi pemain. Saat bertemu dengan lawan, abaikan skill \'terbangkan ke landmark termahal\' milik lawan. Saat berpindah dalam kesempatan dadu, kesempatan dadu tidak menghilang.'),
(76, 'teleport-chase', 'Pilih area tujuan dan segera berpindah ke lokasi tersebut. Saat bertemu dengan lawan, abaikan skill \'terbangkan ke landmark termahal\' milik lawan. Saat berpindah dalam kesempatan dadu, kesempatan dadu tidak menghilang.'),
(77, 'teleport-oppn', 'Lawan melakukan aksi teleport dalam turnnya. Teleport yang dilakukan melalui fitur map maupun kartu kesempatan tidak memenuhi persyaratan.'),
(78, 'teleport-call', 'Pilih area tujuan dan segera berpindah ke lokasi tersebut lalu pindah paksa lawan yang berada dalam jangkauan pindah ke area tujuan. Saat berpindah dalam kesempatan dadu, kesempatan dadu tidak menghilang.'),
(79, 'fly-away-gb', 'Pindah paksa lawan ke landmark termahal milikku. Apabila tidak memiliki landmark, skill tidak dapat diaktifkan.'),
(80, 'fly-away-remus', 'Pindah paksa lawan ke landmark termahal milikku. Apabila tidak memiliki landmark, skill tidak dapat diaktifkan. Saat skill aktif, abaikan skill \'terbangkan ke landmark termahal\' milik lawan.'),
(81, 'fly-away-together', 'Pindah paksa lawan ke landmark yang dipilih lalu aku ikut pindah ke area tersebut. Apabila lawan bertahan atau lawan dalam keadaan terkurung penjara, hanya berpindah sendirian. Ketika berpindah, skill \'panggil saat teleport\' dan skill \'usir\' akan diabaikan. Saat skill aktif, abaikan skill \'terbangkan ke landmark termahal\' milik lawan.'),
(82, 'exchange-area', 'Tukarkan kepemilikan area milik lawan dengan areaku yang dipilih. Landmark tidak dapat ditukarkan kepemilikannya.'),
(83, 'exchange-bh', 'Ubah posisi blackhole ke posisi whitehole dan sebaliknya. Apabila pemasangan blackhole diikuti dengan pemasangan kurung gelembung, batalkan pemasangan kurung gelembung tersebut.'),
(84, 'exchange-marble', 'Tukarkan jumlah marble milikku dengan jumlah marble yang dimiliki oleh lawan. Apabila jumlah marble milikku lebih banyak daripada jumlah marble milik lawan, pertukaran akan dibatalkan.'),
(85, 'const-order-nirvana', 'Areaku ➡ area tim ➡ area kosong.'),
(86, 'const-order-copy', 'Area rawan monopoli ➡ area kosong acak.'),
(87, 'const-order-concert', 'Areaku ➡ area kosong acak.'),
(88, 'apply-tf-1', 'Terapkan biaya sewa secara acak sesuai dengan persentase berikut :\r\n- 80% terapkan biaya sewa x2;\r\n- 17% terapkan biaya sewa x4;\r\n- 3% terapkan biaya sewa x8.'),
(89, 'apply-tf-2', 'Terapkan biaya sewa secara acak sesuai dengan persentase berikut :\r\n- 75% terapkan biaya sewa x2;\r\n- 20% terapkan biaya sewa x4;\r\n- 5% terapkan biaya sewa x8.'),
(90, 'scarecrow', 'Saat berubah wujud, semua skill tidak dapat aktif. Efek dapat dihilangkan apabila dipindahpaksa oleh lawan maupun melempar dadu dalam turn sendiri lalu melakukan setidaknya satu aksi.'),
(91, 'call', 'Pindah paksa lawan ke lokasi dimana pemanggilan dilakukan.'),
(92, 'olympic-pull', 'Selenggarakan olimpiade dan terapkan biaya sewa dalam nilai tertentu, lalu konstruksi otomatis landmark dan tarik lawan dalam jangkauan tertentu.'),
(93, 'olympic-card', 'Merupakan instalasi berupa kartu yang muncul di blok spesial map. Apabila didatangi, kartu lainnya akan langsung menghilang dan mendapat kartu kesempatan \'kunjungi area penyelenggara olimpiade\' lalu langsung berpindah ke area tersebut.'),
(94, 'tf-exempt-card', 'Apabila digunakan, biaya sewa area yang didatangi akan dibebaskan. Kartu ini tidak dapat dinonaktifkan.'),
(95, 'rock-scissors-paper', 'Pemain dan lawan pemilik area memilih salah satu kartu \'gunting\', \'batu\', atau \'kertas\'. Kedua pemain tidak dapat saling mengintip apa yang dipilih hingga keduanya selesai memilih. Sesuai pada hasil, terapkan efek berikut.\r\n- Apabila pemain menang, bebas biaya sewa lalu pilih salah satu area untuk diambil alih paksa dan konstruksi otomatis landmark. Apabila area yang dipilih tidak dapat diambil alih, rebut kepemilikannya selama 2 turn.\r\n- Apabila pemain seri, hanya bebas biaya sewa.\r\n- Apabila pemain kalah, bayar biaya sewa (atau bebas biaya sewa dengan skill lain).\r\nSkill transfer pengali biaya sewa mungkin dapat aktif sebelum gunting batu kertas dimulai.'),
(96, 'bonus-effect', 'Mendapat salah satu efek berikut secara acak.\r\n- 20% teleport ke salah satu area dalam line.\r\n- 40% pergi ke bonus game (apabila ada).\r\n- 20% tingkatkan stat kontrol dadu dan bonus game sebanyak 10%.'),
(97, 'vera-explosion', 'Berubah wujud dan mendapat efek berikut selama 2 turn.\r\n- Skill teleport menjadi 100% dan dapat memilih maksimal 12 blok di depan.\r\n- Skill bebas biaya sewa lalu teleport menjadi 100%, namun bebas biaya sewa hanya dapat diterima maksimal 5 kali di lokasi yang sama.\r\n- Saat lawan tiba di areaku, tagih 200% tambahan biaya sewa.'),
(98, 'notice-letter', 'Merupakan objek eksklusif yang muncul di salah satu area lawan. Saat didatangi, langsung ambil alih paksa dan konstruksi otomatis landmark. Apabila area yang dipilih tidak dapat diambil alih, rebut kepemilikannya selama 2 turn. Setelah itu, teleport ke salah satu area dalam line dan 60% munculkan notice letter yang baru. Notice letter menghilang saat digunakan, saat didatangi oleh lawan, maupun oleh skill tertentu.'),
(99, 'rika-summon-book', 'Pilih salah satu item yang berbeda tingkatan dan bayar sejumlah marble sesuai harganya untuk digunakan hingga permainan berakhir. Terdapat tiga item dalam tiga tingkatan berbeda yang muncul dalam tiga turn pertama (kecuali turn dimulai ketika berada dalam pulau terpencil, keliling dunia, maupun setelah lepas dari kurungan).\r\n1. Arthur\'s sword\r\n- Gratis : Saat membangun, 20% konstruksi landmark tambahan secara acak.\r\n- 10M : Saat membangun, 30% konstruksi landmark tambahan secara acak.\r\n- 15M : Saat membangun, 20% konstruksi landmark tambahan secara acak dan 75% chance dadu tambahan.\r\n\r\n2. Lucia\'s Necklace\r\n- Gratis : Saat tiba atau langsung membangun landmarkku, 60% pilih area tim untuk olympic pull 4 blok.\r\n- 12M : Saat tiba atau langsung membangun landmarkku, 90% pilih area tim untuk olympic pull 4 blok.\r\n- 20M : Saat tiba atau langsung membangun landmarkku, 90% pilih area tim untuk olympic pull 4 blok (65% abaikan pertahanan magnet).\r\n\r\n3. Gravity Amplifier\r\n- Gratis : Saat lawan tiba di areaku, 45% terapkan multiplier tetap x4.\r\n- 15M : Saat lawan tiba di areaku, 60% terapkan multiplier tetap x4.\r\n- 30M : Saat lawan tiba di areaku, 90% terapkan multiplier tetap x4.'),
(100, 'riko-summon-book', 'Pilih salah satu item yang berbeda tingkatan dan bayar sejumlah marble sesuai harganya untuk digunakan hingga permainan berakhir. Terdapat tiga item dalam tiga tingkatan berbeda yang muncul dalam tiga turn pertama (kecuali turn dimulai ketika berada dalam pulau terpencil, keliling dunia, maupun setelah lepas dari kurungan).\r\n1. Arthur\'s sword\r\n- Gratis : Saat membangun, 20% konstruksi landmark tambahan secara acak.\r\n- 10M : Saat membangun, 30% konstruksi landmark tambahan secara acak.\r\n- 15M : Saat membangun, 20% konstruksi landmark tambahan secara acak dan 75% chance dadu tambahan.\r\n\r\n2. Police Baton\r\n- Gratis : Saat melempar dadu, 20% teleport ke salah satu area dalam jangkauan hasil dadu.\r\n- 12M : Saat melempar dadu, 33% teleport ke salah satu area dalam jangkauan hasil dadu.\r\n- 20M : Saat melempar dadu, 45% teleport ke salah satu area dalam jangkauan hasil dadu lalu 45% ambil alih salah satu area secara acak.\r\n\r\n3. Paint Ticket\r\n- Gratis : Saat tiba di landmark lawan, 90% bebas biaya sewa lalu cat selama 2 turn (batas 1x).\r\n- 15M : Saat tiba di landmark lawan, 90% bebas biaya sewa lalu cat selama 2 turn (batas 2x).\r\n- 30M : Saat tiba di landmark lawan, 90% bebas biaya sewa lalu cat selama 2 turn (batas 3x).'),
(101, 'princess-summon-book', 'Pilih salah satu item dan bayar sejumlah marble sesuai dengan harga item untuk digunakan selama 2 turn.\n1. Royal Family\'s Pendant (Gratis) : Saat mendatangi atau melewati START, mendapat 400% tambahan gaji dan kartu Angel/kupon diskon.\n2. Electromagnetic Field Amplifier (3M) : Saat tiba di landmarkku atau langsung membangun landmarkku, 90% tarik lawan dalam jangkauan 4 blok depan belakang.\n3. Paint Ticket (5M) : Saat tiba di landmark lawan, 90% bebeas biaya sewa lalu cat landmark selama 2 turn (batas 1x).'),
(102, 'line-call', 'Pindah paksa semua lawan dalam line hadapanku ke landmark termahal diantara area milikku dalam line tersebut lalu aku pindah ke area tersebut. Apabila tidak ada landmark di line tersebut, skill tidak akan aktif. Skill tidak dapat aktif terhadap landmark yang baru dibangun.'),
(103, 'reserve-move', 'Pilih salah satu area dalam line yang berbeda dari posisiku berdiri. Saat turnku dimulai, dapat pilih untuk pindah kemudian melempar dadu seperti biasa. Apabila posisiku dipindah paksa oleh lawan atau wujudku berubah, tidak dapat berpindah.'),
(104, 'concert', 'Merupakan instalasi berupa lampu hati yang muncul di areaku. Apabila lawan tiba di area konserku, 67% batalkan chance dadunya serta skill lawan tidak dapat aktif dan paksa lawan untuk membayar biaya sewa (termasuk menggunakan kartu Angel/kupon diskon) lalu lampu hati langsung menghilang.'),
(105, 'energy-zaha', 'Energi terdiri dari tiga bola energi yang dapat mengisi setiap kali tiba di area manapun yang terdapat bangunan.'),
(106, 'force-blackout', 'Terapkan efek blackout paksa dimana saat didatangi, biaya sewa akan dibebaskan dan efek langsung menghilang. Saat aktif, abaikan skill terbangkan, donasi, dan pengurangan stat oleh lawan.'),
(107, 'move-range-zaha', 'Jarak perpindahan meningkat sesuai dengan jumlah orb yang terisi.\n- 0 orb = 1 line;\n- 1 orb = 2 line;\n- 2 orb = 3 line;\n- 3 orb = 4 map (seluruh map).'),
(108, 'shadow-clone', 'Merupakan objek eksklusif yang berbentuk wujud bayangan dari diri sendiri yang dapat dibuat maksimal 4 (empat) di dalam map. Apabila sudah terdapat empat bayangan terpasang, bayangan yang dipasang berikutnya akan membuat bayangan yang pertama kali dibuat menghilang. Satu bayangan pertama meningkatkan biaya sewa areaku 300% lalu satu bayangan berikutnya meningkatkan lagi biaya sewa sebanyak 100%. Bayangan akan menghilang ketika digunakan, ketika kepemilikan area berubah, atau oleh skill tertentu.'),
(109, 'water-stream', 'Berpindah secara meluncur ke area yang dipilih. Saat bergerak, abaikan segala penghalang dalam jangkauan pergerakan. Setelah bergerak, pindah paksa lawan ke area tujuanku.'),
(110, 'const-tool', 'Merupakan efek konstruksi yang digambarkan sebagai kunci inggris yang muncul di atas karakter diri sendiri. Saat tiba di area kosong atau areaku (kecuali area turis), bangun landmark di area tersebut secara konstruksi otomatis. Setelah melakukan konstruksi, efek langsung menghilang.'),
(111, 'thunder-battery', 'Merupakan instalasi serta objek eksklusif yang berbentuk baterai yang dapat muncul di semua areaku. Baterai tidak dapat muncul di area dimana pemain sedang berdiri. Dalam turnku saat tiba di baterai, dapat langsung mengaktifkan dash. Baterai akan menghilang ketika digunakan, ketika kepemilikan area berubah, ketika didatangi lawan, maupun oleh skill tertentu.'),
(112, 'dash', 'Segera berpindah maju secara otomatis ke areaku yang paling dekat dari posisiku dan apabila terdapat lawan dalam jangkauan pindah, dorong lawan ke area tujuanku. Saat itu juga, mendapat efek-efek berikut selama 2 turn.\n- Saat lawan tiba di areaku, 70% terapkan multiplier tetap x4.\n- Saat lawan menghancurkan bangunanku atau mengecat landmarkku, 80% aktifkan pertahanan.'),
(113, 'chef-menu', 'Buat lawan memilih salah satu menu makanan secara acak dan langsung terapkan efeknya sesuai dengan makanan yang dipilih.\n- Mala Hot Pot : Biaya ambil alih meningkat 6x / Saat melewati area diri sendiri, hancurkan bangunan dan hapus efek cat.\n- Sweet Tanghulu : Meningkatkan biaya konsumsi setiap kali bergerak selama 2 turn (maks. x16 / tidak mendapat diskon) / Saat melewati area diri sendiri, hancurkan bangunan dan hapus efek cat.\n- Wasabi Dumpling : Hancurkan dadu sehingga hanya dapat melempar satu dadu dan tidak mendapat keuntungan dadu dobel selama 2 turn / Saat melewati area diri sendiri, hancurkan bangunan dan hapus efek cat.'),
(114, 'mark', 'Merupakan efek yang menandai lawan sebagai target pengejaran. Efek hanya dapat menghilang ketika digunakan atau ketika permainan berakhir. Apabila terdapat beberapa lawan yang terkena efek ini, jarak perpindahan pengejaran dapat meningkat.'),
(115, 'time-essence', 'Merupakan instalasi serta objek eksklusif yang berbentuk jam yang dapat muncul di areaku. Jam tidak dapat muncul di area dimana pemain sedang berdiri. Jam hanya dapat muncul maksimal 3 (tiga) di dalam map. Dalam turnku saat tiba di jam, dapat langsung mengaktifkan efek pemberkatan waktu. Jam akan menghilang ketika digunakan, ketika kepemilikan area berubah, ketika didatangi oleh lawan, maupun oleh skill tertentu.'),
(116, 'time-blessing', 'Berubah wujud menjadi Mnemion muda dan mendapat efek berikut selama 2 turn.\n- Skill \'teleport dalam jangkauan dadu\' meningkat menjadi 80% serta dapat memilih untuk teleport ke arah yang berlawanan.\n- 100% bertahan dari efek berbahaya yang diterapkan padaku.\nDurasi efek tidak dapat ditambah, hanya dapat direset dengan tiba di time essence kembali.'),
(117, 'time-jail', 'Terapkan efek percepatan gauge dadu 3x kepada lawan selama 1 turn lalu kurung penjara lawan. Apabila efek percepatan gauge dadu ditahan oleh shield, hanya kurung penjara lawan.'),
(118, 'energy-dion', 'Energi terdiri dari tiga butir air yang dapat terisi setiap membangun areaku.'),
(119, 'const-sign', 'Saat aku atau anggota timku tiba di markah konstruksi, dapat langsung membangun landmark dengan membayar 5x biaya konstruksi landmark. Apabila lawan tiba di markah konstruksi, lawan tidak dapat membangun di area tersebut. Bangunan yang dikonstruksi secara jarak jauh juga tidak dapat dibangun di area yang terdapat markah konstruksi. Markah konstruksi langsung menghilang ketika didatangi oleh pemain dan menerapkan efeknya. Setiap pemain hanya dapat memasang maksimal 12 markah konstruksi dalam satu map, apabila sudah memasang 12 markah dan akan memasang lagi, skill pemasangan markah dibatalkan. Markah konstruksi dapat menghilang ketika didatangi, maupun oleh skill tertentu.'),
(120, 'throw-chakram', 'Chakram yang dilemparkan kepada lawan akan merebut 30% marble miliknya.'),
(121, 'strategy-area', 'Merupakan instalasi serta objek eksklusif yang berbentuk pistol dapat muncul di area lawan. Pistol hanya dapat muncul maksimal 5 (lima) di dalam map. Pistol tidak dapat muncul di area dimana pemain sedang berdiri. Dalam turnku saat tiba di pistol, dapat langsung mengaktifkan bom asap. Pistol akan menghilang ketika digunakan, ketika didatangi oleh lawan, maupun oleh skill tertentu.'),
(122, 'smoke-bomb', 'Efek bom asap akan menghilangkan biaya sewanya ketika didatangi dan tidak dianggap sebagai area monopoli selama 3 turn. Efek area yang lain seperti badai hujan dan blackout akan menghilang ketika efek bom asap diterapkan. Efek bom asap akan menghilang ketika durasinya berakhir, ketika kepemilikan areanya berubah, maupun oleh skill tertentu.'),
(123, 'exclusive-item', 'Mendapat salah satu dari tiga skill berikut. Apabila kembali mendapat skill yang serupa, jumlah penggunaan maupun durasinya akan direset.\n- Saat chance daduku, 85% pilih arah gerak lalu saat mendatangi/melewati lawan, dorong lawan ke salah satu areaku (durasi 2 turn).\n- Dalam turnku saat tiba di areaku, 75% kurung penjara semua lawan dalam line / mendapat marble sebanyak 70% biaya konstruksi area (batas 1x).\n- Dalam turnku saat tiba di areaku, 85% teleport ke salah satu area dalam line lalu chance dadu 1x (batas 1x).'),
(124, 'steal-dc-stat', 'Kurangi stat kontrol dadu karakter lawan sebanyak 90% dan naikkan stat kontrol daduku sebanyak 90% selama 1 turn.'),
(125, 'corner-inv', 'Saat membangun 3 bangunan, 80% pergi ke START (batas 1x) lalu munculkan kartu \'pergi ke blok sudut\' di semua blok spesial map.'),
(126, 'lm-seed', 'Merupakan instalasi yang berbentuk benih dan muncul sebagai area tanah (bendera) yang muncul di area kosong. Saat turnku berikutnya dimulai, konstruksi otomatis area tersebut menjadi landmark. Konstruksi ini memenuhi syarat \'saat lawan mendapat landmark\'. Benih landmark dapat menghilang ketika kepemilikan area berubah.'),
(127, 'vine-garden', 'Merupakan instalasi yang berbentuk taman akar yang dapat menangkap lawan yang melewatinya dengan chance 80%. Saat lawan tertangkap, lawan tidak dapat mengambil alih area tersebut. Taman akar muncul selama 1 turn dan dapat menghilang apabila kepemilikan area berubah.'),
(128, 'energy-biscuit', 'Energi terdiri dari tiga panah akselerasi yang dapat terisi setiap lawan melempar dadu.'),
(129, 'rush', 'Hancurkan bangunan, instalasi, dan objek eksklusif dalam jangkauan pergerakan. Landmark dan blackhole tidak dapat dihancurkan.'),
(130, 'move-range-biscuit', 'Jarak perpindahan meningkat sesuai dengan jumlah energi yang terisi.\n- 0 orb = 6 blok;\n- 1 orb = 12 blok;\n- 2 orb = 18 blok;\n- 3 orb = 24 blok.'),
(131, 'exile-desert', 'Batalkan semua perbuatan lawan dan langsung pindah paksa lawan ke pulau terpencil. Lawan tidak dapat bertahan dari pemindahpaksaan ini. Saat tiba di pulau terpencil, skill lawan yang berhubungan dengan pulau terpencil dan blok sudut tidak dapat aktif.'),
(132, 'meteor', 'Meteor memiliki gauge yang dapat diisi maksimal 4 dengan chance 80% setiap kali pemain dan lawan melempar dadu. Saat energi terisi penuh dan melempar dadu, langsung tembakkan meteor ke salah satu area lawan secara acak. Apabila tidak ada area untuk ditargetkan, meteor tidak dapat ditembakkan.\n- Apabila meteor mendarat di area biasa, hancurkan bangunan.\n- Apabila meteor mendarat di landmark atau area turis, rebut kepemilikannya selama 2 turn.'),
(133, 'golros-skill-card', 'Pilih salah satu item dan gunakan hingga permainan berakhir.\n1. Jail Detain Card : Saat muncul peringatan monopoli lawan, 95% kurung penjara lawan (batas 2x) / Saat melempar dadu lalu melewati/mendatangi lawan, 80% dorong lawan ke salah satu areaku.\n2. Energy Discharge Card : Saat lawan tiba di landmarkku, 80% terapkan efek discharge kepada lawan / Saat melempar dadu lalu melewati/mendatangi lawan, 80% dorong lawan ke salah satu areaku.\n3. Angry Construction Card : Saat lawan mendapat landmark, 60% bangun landmark di area kosong secara acak / Saat melempar dadu lalu melewati/mendatangi lawan, 80% dorong lawan ke salah satu areaku.'),
(134, 'dark-earth', 'Saat lawan tiba di efek blok ini, nonaktifkan skill lawan lalu efek blok langsung menghilang namun instalasi masih dapat digunakan (contoh : markah konstruksi). Konser juga tidak dapat dimunculkan di area yang terdapat efek blok ini.'),
(135, 'mina-explosion', 'Berubah wujud serta tingkatkan efek blok Dark Earth selama 2 turn dan mendapat efek-efek berikut ini.\n- 100% bertahan dari efek berbahaya yang diterapkan padaku.\n- Saat tiba di landmark lawan, 70% bebas biaya sewa lalu segera pindah ke salah satu bayanganku secara acak.\n- Saat lawan tiba di area yang terdapat efek blok Dark Earth, rebut 30% marble milik lawan serta nonaktifkan skill dan batalkan chance dadunya.'),
(136, 'ice-block', 'Saat aku atau anggota timku tiba di efek blok es, dapat langsung membangun landmark secara konstruksi otomatis. Apabila lawan tiba di efek blok es, lawan tidak dapat membangun di area tersebut dan hancurkan dadu lawan selama 1 turn. Bangunan yang dikonstruksi secara jarak jauh juga tidak dapat dibangun di area yang terdapat efek blok es. Efek blok es langsung menghilang ketika didatangi oleh pemain dan menerapkan efeknya.'),
(137, 'ice-spike', 'Merupakan instalasi yang berbentuk duri es yang dapat menangkap lawan yang melewatinya dengan chance 70%. Duri es muncul selama 2 turn dan dapat menghilang apabila kepemilikan area berubah.'),
(138, 'bleeding', 'Saat lawan terkena efek pendarahan, mencuri 30% marble milik lawan dan juga mencuri marble saat turn lawan dimulai.\nDurasi efek berkurang setelah mencuri marble di awal turn lawan, dan rasio pencurian marble meningkat 10% setiap turn-nya.'),
(139, 'trump-pet', 'Tentara kartu adalah pet yang senantiasa mengikuti pemain yang berjarak 1 blok di belakang pemain. Tentara kartu yang tiba di area tertentu akan langsung menerapkan efeknya dan langsung menghilang.\n- Apabila tiba di areaku atau area kosong, bangun landmark di area tersebut secara konstruksi otomatis.\n- Apabila tiba di landmark lawan, rebut kepemilikannya selama 2 turn.'),
(140, 'nutcracker', 'Saat berubah wujud, semua skill tidak dapat aktif. Efek dapat dihilangkan apabila dipindahpaksa oleh lawan maupun saat turn sendiri dimulai. Efek nutcracker dan scarecrow tidak dapat ditumpuk. Pemain yang dalam keadaan berubah wujud menjadi nutcracker dan mendapat efek scarecrow, akan berubah menjadi scarecrow dan sebaliknya.'),
(141, 'mist-block', 'Merupakan efek blok yang menyebar ke dua blok terdekat setiap turn berakhir dan dapat memenuhi seluruh line (kecuali blok sudut). Efek blok kabut asap hanya dapat dipasang satu pada setiap line dan menghilang ketika pemain lain memasang efek blok di line yang sama.\nApabila lawan tiba di area yang terdapat efek blok kabut asap, pindah paksa lawan ke area episentrum dan seluruh efek blok kabut asap pada line tersebut akan menghilang. Apabila lawan tiba di area yang terdapat efek blok kabut asap dalam keadaan memiliki shield, dapat bertahan dari perpindahan paksa akibat efek blok kabut.\nEfek blok kabut dapat menghilang apabila terjadi perubahan kepemilikan pada area episentrum.'),
(142, 'dragon-soul', 'Dragon soul bertahan selama 2 turn, apabila lawan atau anggota tim melempar dadu dalam turnnya, Dragon soul akan bergerak setiap satu blok. Dragon soul yang tiba di area tertentu akan langsung menerapkan efeknya.\n- Apabila tiba di area kosong, bangun landmark di area tersebut secara konstruksi otomatis.\n- Apabila tiba di landmark lawan, rebut kepemilikannya selama 2 turn.\nApabila Dragon soul tiba di area turis dan blok sudut, skill tidak diaktifkan. Apabila lawan mendatangi Dragon soul, Dragon soul akan menghilang.'),
(143, 'energy-ragon', 'Dapat mengisi hingga tiga buah energi.'),
(144, 'lm-arrow', 'Lempar dadu dengan ketepatan kontrol dadu 100% untuk menembakkan panah ke area sesuai hasil dadu dan menerapkan efek tersebut pada area-area tertentu.\n- Apabila panah mendarat di area kosong atau area bangunanku atau area bangunan lawan: bangun landmark secara konstruksi otomatis.\n- Apabila panah mendarat di landmark lawan: rebut kepemilikan selama 2 turn.\nSetiap pemain dapat menembakkan maksimal 3 panah, apabila panah mendarat di blok khusus atau area turis atau lawan mendatangi panahku, panah akan menghilang.'),
(145, 'magic-circle', 'Setelah memasang lingkaran ajaib, apabila aku melewati dan mendatanginya atau ketika lawan mendatanginya, bangun landmark secara konstruksi otomatis pada salah satu area dalam line di depan lingkaran terpasang dan apabila tidak ada area untuk dibangunkan landmark, rebut kepemilikan atas salah satu area lawan selama 2 turn.\nApabila beberapa orang memasang lingkaran ajaib pada satu blok sudut yang sama, selalu gantikan lingkaran ajaib dengan yang paling terakhir dipasang.'),
(146, 'goblin-fire', 'Goblin fire dapat muncul di semua landmark baik milikku maupun milik lawan. Apabila lawan tiba di goblin fire milikku, chance 70% lawan tidak dapat mengaktifkan skillnya serta akhiri paksa turnnya.\nSetelah menerapkan semua efek yang berkaitan dengan goblin fire (nonaktifkan skill, batalkan turn, pindah paksa, dll.), goblin fire tersebut akan menghilang. Goblin fire dapat dihilangkan dengan skill penghapus instalasi maupun dengan efek blok.'),
(147, 'security-bot', 'Security bot membuat area pertahanan kepada 3 blok terdekat dari letaknya dipasang. Security bot bertahan selama 2 turn, berkurang setiap turnku berikutnya dimulai.\nDapat memasang maksimal 2 security bot, apabila beberapa pemain memasang security bot di tempat yang sama, selalu gantikan security bot dengan yang paling terakhir dipasang.'),
(148, 'security-range', 'Areaku yang berada dalam jangkauan perlindungan security range mendapat 100% pertahanan terhadap segala skill pergantian kepemilikan (pertukaran, penghancuran, ambil alih paksa, donasi, dll.).\nArea yang berada dalam jangkauan perlindungan juga tidak dapat dipasangkan instalasi ke dalamnya.\nApabila security bot menghilang, area perlindungannya juga ikut menghilang.'),
(149, 'security-area', 'Konstruksi area bendera secara otomatis dan munculkan security area pada area tersebut.\nSecurity area dibangun dalam urutan berikut: area prioritas menang monopoli &#8594; area prioritas monopoli warna &#8594; area kosong acak. Serta security area akan terkonstruksi secara otomatis menjadi landmark saat turnku berikutnya dimulai.\nLandmark yang dibangun dengan security area tidak dapat mengaktifkan persyaratan skill \"saat membangun landmarkku\" milikku, namun dapat mengaktifkan persyaratan skill \"saat lawan mendapat landmark\" milik lawan.\nSecurity area tidak ikut menghilang walau security range yang dimunculkan oleh security bot telah menghilang. Security area dapat menghilang apabila terjadi perubahan kepemilikan pada area tersebut.'),
(150, 'const-priority-biscuit', 'Landmark akan dibangun secara acak dalam prioritas area kosong acak &#8594; areaku &#8594; area milik tim.'),
(151, 'em-move', 'Dapat berpindah setelah memilih area. Selama berpindah, tidak mendapat gangguan dari segala instalasi dan skill tangkap di tengah jalan.\nSaat itu, bangun landmark secara konstruksi otomatis di area yang didatangi.'),
(152, 'pet', 'Maksudnya adalah pet (tentara kartu, dragon soul, dll.) yang dimunculkan oleh skill karakter.'),
(153, 'em-explosion', 'Mengabaikan segala instalasi maupun skill tangkap setiap kali bergerak. Terapkan efek-efek berikut pada area yang didatangi.\n- Area kosong: bangun landmark secara konstruksi otomatis.\n- Areaku: isi shield (maks. 2 lapis).\n- Area lawan: 80% terapkan efek immunity.\nEfek berlangsung selama 2 turn. Durasi berkurang setiap turnku berakhir. Apabila persyaratan runaway kembali terpenuhi, durasi akan direset.'),
(154, 'immunity', 'Keadaan tidak perlu membayar biaya sewa termasuk setelah lepas dari kurungan penjara.'),
(155, 'tackle', 'Dapat berpindah setelah memilih area dan setelah berpindah memanggil semua lawan dalam jangkauan pindah.\nBerpindah ke area tujuan dengan berjalan dan tidak mendapat gangguan dari segala instalasi dan skill tangkap yang berada dalam jangkauan pindah.'),
(156, 'terror', 'Lawan yang terkena efek teror tidak dapat mengisi shield maupun mengambil alih area.\nEfek berlangsung selama 3 turn, durasi berkurang setiap turnku dimulai.'),
(157, 'archangel-power', 'Saat aktif, pilih salah satu item dan gunakan hingga permainan berakhir.\n[1] Saat lawan menghancurkan bangunan di areaku atau mengecat landmarkku, 70% aktifkan pertahanan / Saat lawab tiba di areaku, tagih biaya sewa sebanyak 50% &#215; jumlah area yang kumiliki (maks. 250%).\n[2] Saat tiba di area lawan, 70% bebas biaya sewa lalu pergi ke area yang diinginkan (batas 2 kali) / Saat lawab tiba di areaku, tagih biaya sewa sebanyak 50% &#215; jumlah area yang kumiliki (maks. 250%).\n[3] Saat lawan tiba di landmarkku, 90% kurung gelembung / Saat lawab tiba di areaku, tagih biaya sewa sebanyak 50% &#215; jumlah area yang kumiliki (maks. 250%).'),
(158, 'butterfly-soul', 'Saat tiba di kupu-kupu milikku, upgrade areaku menjadi landmark. Saat lawan tiba di kupu-kupu milikku, nonaktifkan skill lawan. Setelah menerapkan efeknya, kupu-kupu langsung menghilang, serta kupu-kupu dapat dihilangkan dengan efek blok atau skill penghapus instalasi. Apabila terjadi perubahan kepemilikan pada area yang terdapat kupu-kupu, kupu-kupu akan ikut menghilang.'),
(159, 'switch-position', 'Apabila terdapat beberapa pemain dalam satu lokasi yang dipilih, pindah paksa salah satu pemain secara acak ke posisiku berada. Setelah lawan berpindah, aku berpindah ke posisi lawan. Apabila lawan bertahan dari pindah paksa, hanya aku yang berpindah. Selama berpindah, tidak terpengaruh oleh skill \'usir ke pulau terpencil\' dan \'saat teleport, panggil\' milik lawan.'),
(160, 'butterfly-garden', 'Taman kupu-kupu akan memunculkan kupu-kupu di salah satu area kosong atau area lawan terdekat dalam line yang sama. Taman kupu-kupu hanya dapat dipasang satu dalam tiap line, apabila terdapat pemain lain memasang taman kupu-kupu, selalu terapkan taman kupu-kupu yang paling terakhir dipasang. Taman kupu-kupu berlangsung selama 2 turn, durasi berkurang saat turnku berakhir. Apabila terjadi perubahan kepemilikan pada area yang terdapat taman kupu-kupu, taman kupu-kupu tersebut akan ikut menghilang.'),
(161, 'butterfly', 'Merupakan instalasi yang hanya dapat muncul setelah taman kupu-kupu terpasang. Kupu-kupu akan menerapkan efek berikut pada area yang dihinggapinya:\n- Area kosong: bangun landmark secara konstruksi otomatis;\n- Landmark lawan: rebut kepemilikan (cat) selama 2 turn.\nKupu-kupu akan menghilang setelah menerapkan efeknya atau saat didatangi oleh lawan, serta dapat dihilangkan dengan efek blok atau skill penghapus instalasi.'),
(162, 'unruly-bomb', 'Ketika bom sesuka hati ditembakkan ke landmark lawan, landmark tersebut akan berubah kepemilikannya (dicat) selama 2 turn, ketika bom ditembakkan ke area bangunan lawan, area tersebut akan hancur (hilang kepemilikannya). Bom sesuka hati hanya akan ditembakkan ke setidaknya satu area selain landmark yang baru saja dibangun lawan.'),
(163, 'moon-curse', 'Buat lawan memilih salah satu kutukan secara acak dan langsung terapkan efeknya sesuai dengan kutukan yang dipilih.\n- Acquirement Curse: Biaya ambil alih meningkat 6x.\n- Fee Increase Curse: Meningkatkan biaya konsumsi setiap kali bergerak selama 2 turn (maks. x16 / tidak mendapat diskon).\n- Dice Curse: Hancurkan dadu sehingga hanya dapat melempar satu dadu dan tidak mendapat keuntungan dadu dobel selama 2 turn.'),
(164, 'ult-def-ring', 'Saat tiba di area lawan, bebas biaya sewa (batas 2 kali) / 90% bertahan dari serangan (kartu kesempatan & tarik magnet).'),
(165, 'sudim-amp', 'Saat membangun, 80% upgrade landmark (batas 2 kali) / Saat membangun landmark, 48% teleport ke blok sudut atau blok spesial map.'),
(166, 'time-blessing-2', 'Berubah wujud menjadi Mnemion muda dan mendapat efek berikut selama 2 turn.\n- Skill \'teleport dalam jangkauan dadu\' meningkat menjadi 60% serta dapat memilih untuk teleport ke arah yang berlawanan.\n- 60% bertahan dari efek berbahaya yang diterapkan padaku.\nDurasi efek tidak dapat ditambah, hanya dapat direset dengan tiba di time essence kembali.'),
(167, 'dragon-nest', 'Sarang naga bertahan selama 1 turn, dan dapat menangkap lawan yang melewatinya baik dengan lemparan dadu maupun dengan world travel dengan chance 70%. Durasi berkurang saat turnku dimulai. Apabila lawan bergerak dengan chance dadu 1x, lawan tidak dapat ditangkap saat melewati sarang naga.'),
(168, 'titanium-shield', '100% bertahan dari serangan pindah paksa & pencegah pergerakan oleh lawan (batas 1 kali).'),
(169, 'move-direction', 'Sebelum melempar dadu, tombol gauge dadu terbagi dua. Pilih tombol bagian kiri untuk maju, atau pilih tombol bagian kanan untuk mundur. Aksi teleport atau pergi ke mana saja akan ikut berpengaruh pada pilihan gerak saat melempar dadu.'),
(170, 'bubble-esc-pin', 'Saat terkurung gelembung, 80% segera lepaskan / Saat tiba di area lawan, 35% bebas biaya sewa lalu terapkan biaya sewa x2 di semua areaku.'),
(171, 'installation', 'Maksudnya adalah fungsi spesial yang diaktifkan oleh skill-skill tertentu dan dapat mengaktifkan skillnya tersendiri saat digunakan. Contohnya adalah:\n- Spring trap, checkpoint, dll.\n- Thunder battery, kagebunshin, konser, dll.\n- Goblin fire, ice crystal, dll.\n- Dragon nest, vine garden, dll.'),
(172, 'gauge-speed', 'Gauge dadu meningkat 3 kali lipat saat ditekan, namun tidak memberikan banyak pengaruh pada ketepatan kontrol dadu.'),
(173, 'corner-card', 'Saat didatangi, mendapat kartu kesempatan \'pilih dan pindah ke blok sudut\' dan segera pilih salah satu blok sudut atau bonus game untuk berpindah ke area yang dipilih. Saat itu, semua kartu yang muncul di lokasi lain ikut menghilang. Kartu \'pilih dan pindah\' hanya dapat dipasang satu kali setiap chance dadu.'),
(174, 'rose-seed', 'Lawan yang terkena efek ini, saat tiba di area tertentu terapkan efek berikut:\n- Area kosong: bangunkan landmark untukku secara konstruksi otomatis;\n- Area lawan: ambil alih paksa;\n- Landmark lawan: rebut kepemilikannya (cat) selama 2 turn.\nEfek berlangsung selama 1 turn, durasi berkurang saat turn lawan berakhir.'),
(175, 'rose-block', 'Saat aku atau anggota timku berdiri di atas area yang diterapkan efek blok mawar, dapat bertahan dari berbagai jenis serangan.\nSerangan yang dapat ditahan: pindah paksa, pencurian, efek berbahaya, kurung penjara, dll.\nArea yang diterapkan efek blok mawar juga dapat bertahan dari serangan perubahan kepemilikan walau aku atau anggota timku tidak berdiri di atasnya.\nDapat bertahan maksimal 4 kali. Setelah jumlah pertahanan habis atau saat didatangi oleh lawan, efek blok mawar akan menghilang. Namun saat didatangi oleh lawan, skill bebas biaya sewa milik lawan tidak dapat aktif. Setiap pemain hanya dapat memasang efek blok mawar pada maksimal 4 area.'),
(176, 'shackle', 'Lawan yang terkena efek borgol kaki tidak dapat mengaktifkan segala jenis skill teleport (kecuali teleport melalui kartu kesempatan atau fitur map). Efek berlangsung selama 2 turn, durasi berkurang saat turn lawan berakhir.'),
(177, 'earth-vortex', 'Aku berpindah lebih dulu ke area yang dipilih lalu lawan dipindah paksa ke area yang sama. Namun apabila lawan bertahan, hanya aku yang berpindah.');
INSERT INTO `tooltip` (`id`, `slug`, `detail`) VALUES
(178, 'beast-rage', 'Saat diaktifkan, mendapat efek-efek tambahan berikut ini.\n[1] Persentase aktif skill \'teleport lalu panggil\' dan \'bertahan dari efek berbahaya\' meningkat menjadi 100%.\n[2] Jarak perpindahan pada skill \'teleport lalu panggil\' meningkat dari 6 blok menjadi 12 blok.\n[3] Mendapat skill \'saat melewati lawan, 50% mencuri 20% marble milik lawan\'.\nEfek berlangsung selama 3 turn, durasi berkurang saat turnku berakhir. Durasi dapat direset ketika syarat aktivasi efek kembali terpenuhi.'),
(179, 'nightmare-block', 'Area yang diterapkan efek blok mimpi buruk biaya sewanya menjadi 0 seperti efek blackout, saat itu juga semua instalasi kecuali blackhole dan spring trap akan dihilangkan. Area yang terkena efek blok mimpi buruk tidak langsung menghilang ketika kudatangi, namun skill bebas biaya sewa yang kumiliki akan diaktifkan terlebih dahulu. Efek blok mimpi buruk bertahan selama 1 turn, durasi berkurang saat turnku berakhir. Setiap pemain hanya dapat menerapkan efek blok mimpi buruk pada maksimal 2 area.'),
(180, 'heart-thump', 'Efek berlangsung selama 3 turn. Dapat mencuri marble lawan yang terkena efek jantung berdebar sebanyak 4 kali lipat dari biaya sewa area yang kudatangi selama turnku. Apabila marble lawan tidak cukup, akan dianggap telah bangkrut. Dalam kondisi ini, lawan dapat bertahan dengan menggunakan kartu Angel, kartu Diskon, dan/atau mengambil pinjaman. Jumlah marble yang dicuri dapat berkurang oleh stat diskon biaya sewa milik lawan.'),
(181, 'super-shield', 'Perlindungan terhadap segala serangan pindah paksa, perebutan marble, perebutan kartu kesempatan, efek berbahaya, dan serangan kurung penjara terhadap karakter diri sendiri. Setiap kali bertahan, konsumsi satu lapis shield.'),
(182, 'snow-crystal', 'Kristal es dapat muncul di semua area lawan. Apabila lawan mendatangi area yang terdapat kristal es milikku, chance 70% batalkan chance dadunya serta nonaktifkan skillnya. Setelah menerapkan efeknya, kristal es langsung menghilang. Kristal es dapat menghilang dengan efek blok atau skill penghapus instalasi.'),
(183, 'installation-remove', 'Hancurkan bangunan, instalasi, dan objek eksklusif yang dilewati atau didatangi saat efek diterapkan padaku. Landmark dan blackhole tidak dapat dihancurkan.'),
(184, 'moon-ocean', 'Ketika menerapkan efek blok, efeknya memenuhi blok lain yang satu warna dengan area yang dibangun. Ketika tiba di area yang diterapkan efek blok ini (baik kosong, maupun terdapat bangunan), kesempatan 50% untuk mengisi ulang semua batas penggunaan skill karakter dan pendant. Dapat menerapkan efek blok hingga di 5 blok warna yang berbeda, jika lawan menerapkan efek blok yang sama pada area yang terdapat efek blok rembulan, efek blok yang diterapkan sebelumnya. Jika pada area yang terdapat rembulan terjadi perubahan kepemilikan, atau tertimpa efek blok lain, maka seluruh efek blok yang berada di blok warna tersebut akan menghilang.'),
(185, 'moon-piece', 'Ketika energi terisi penuh, pecahan rembulan akan jatuh ke area yang diterapkan efek blok rembulan dan menerapkan efek-efek berikut:\n- area kosong & areaku: konstruksi otomatis landmark\n- area lawan: ubah kepemilikannya (ambil alih paksa)\n- landmark lawan: rebut kepemilikan (cat) selama 3 turn\nJika tidak ada efek blok yang diterapkan atau tidak ada efek blok rembulan yang dapat dijatuhi pecahan rembulan, aksi akan dibatalkan namun energi tidak digunakan.'),
(186, 'moonlight', 'Lawan yang terkena efek ini, saat tiba di area tertentu terapkan efek berikut:\n- Area kosong: bangunkan landmark untukku secara konstruksi otomatis;\n- Area lawan: ambil alih paksa;\n- Landmark lawan: rebut kepemilikannya (cat) selama 2 turn.\nEfek berlangsung selama 1 turn, durasi berkurang saat turn lawan berakhir.'),
(187, 'lantern', 'Lantern block effect that was applied will moves every my dice chance, it moves to 8 blocks to next dice movement direction. Opponent\'s areas within lantern block effect obtains forced blackout effect, my areas within lantern block effect obtains amplification effect (toll fee increase x5). Lantern block effect does not applied to corner blocks and map special blocks, lantern block effect only able to spawn into one line. Lantern block effect lasts for 2 turns, the duration decreases every my turn starts.'),
(188, 'anti-exempt', 'Lawan yang terkena efek ini tidak dapat mengaktifkan skill bebas biaya sewa (termasuk efek bebas biaya sewa dan efek imunitas). Lawan juga tidak dapat menerima diskon melalui stat diskon biaya sewa. Efek berlangsung selama 2 turn.'),
(189, 'reverse-growth', 'Molestiae in molestiae ex neque dolor.'),
(190, 'tooltip-189', 'Nisi dolore aspernatur sunt excepturi ut debitis labore.'),
(191, 'tooltip-190', 'Iusto dolores non architecto quo laboriosam amet.'),
(192, 'tooltip-191', 'Fugit omnis minus sed excepturi sint sequi.'),
(193, 'tooltip-192', 'Dolorem incidunt aliquam nam necessitatibus porro tempore eveniet vel.'),
(194, 'tooltip-193', 'Doloribus ratione soluta nemo hic repellendus est sint aut.'),
(195, 'tooltip-194', 'Ipsum maiores beatae qui.'),
(196, 'tooltip-195', 'Consectetur quo alias culpa architecto aperiam ut voluptatem.'),
(197, 'tooltip-196', 'Aperiam alias omnis occaecati id est a molestiae.'),
(198, 'tooltip-197', 'Molestias id impedit provident.'),
(199, 'tooltip-198', 'Ab odio mollitia delectus id dolor.'),
(200, 'tooltip-199', 'Vel exercitationem et distinctio ad quasi porro.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `birth_date` date NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `avatar` varchar(128) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `email`, `birth_date`, `address`, `phone`, `avatar`, `role`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', '439eeae121564c97602254aa314a1324', '623bffe7b7d4d1.13763296', 'Administrator', 'inquiry@thebabelianchannel.site', '1998-12-25', 'Jl. Bintaro Puspita I No. 1 RT/RW. 010/008, Kel. Pesanggrahan, Kec. Pesanggrahan, Kota Jakarta Selatan', '081223438991', '1648099303_0c8c11f4b8bdf1f8d068.jpg', 0, '2022-03-24 00:21:43', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rating`
-- (See below for the actual view)
--
CREATE TABLE `view_rating` (
`thread_id` int(11)
,`sum_star` decimal(32,0)
,`count_star` bigint(21)
,`rating` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Structure for view `view_rating`
--
DROP TABLE IF EXISTS `view_rating`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rating`  AS SELECT `rating`.`thread_id` AS `thread_id`, sum(`rating`.`star`) AS `sum_star`, count(`rating`.`star`) AS `count_star`, round(sum(`rating`.`star`) / count(`rating`.`star`),0) AS `rating` FROM `rating` GROUP BY `rating`.`thread_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c2019`
--
ALTER TABLE `c2019`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c2020`
--
ALTER TABLE `c2020`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c2021`
--
ALTER TABLE `c2021`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c2022`
--
ALTER TABLE `c2022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `recipient_id` (`recipient_id`);

--
-- Indexes for table `p2019`
--
ALTER TABLE `p2019`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p2020`
--
ALTER TABLE `p2020`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p2021`
--
ALTER TABLE `p2021`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p2022`
--
ALTER TABLE `p2022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_id` (`thread_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_id` (`thread_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `tooltip`
--
ALTER TABLE `tooltip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c2019`
--
ALTER TABLE `c2019`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `c2020`
--
ALTER TABLE `c2020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `c2021`
--
ALTER TABLE `c2021`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `c2022`
--
ALTER TABLE `c2022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p2019`
--
ALTER TABLE `p2019`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `p2020`
--
ALTER TABLE `p2020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `p2021`
--
ALTER TABLE `p2021`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `p2022`
--
ALTER TABLE `p2022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tooltip`
--
ALTER TABLE `tooltip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `thread`
--
ALTER TABLE `thread`
  ADD CONSTRAINT `thread_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `thread_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `thread_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
