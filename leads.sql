-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 06:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leads`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`company_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_domain` varchar(150) NOT NULL,
  `company_desc` text,
  `company_address` text,
  `company_mail` text,
  `company_telpon_office` varchar(100) DEFAULT NULL,
  `company_pic` varchar(100) DEFAULT NULL,
  `company_position` text,
  `company_telpon_pic` varchar(100) DEFAULT NULL,
  `company_status` text,
  `company_created_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=575 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_domain`, `company_desc`, `company_address`, `company_mail`, `company_telpon_office`, `company_pic`, `company_position`, `company_telpon_pic`, `company_status`, `company_created_date`) VALUES
(320, 'PT Evoucher Indonesia', 'evoucher.co.id', '', 'STC Senayan Lantai 3 #178B Jakarta', 'danny@evoucher.co.id', '021 57936123', 'Danny Baskara', 'Fouder dan CEO', '', '', '2017-10-27 23:40:05'),
(321, 'PT Alfa Rekacipta Kreasi (Weekend Inc.)', 'www.weekendinc.com', '', 'Jalan Dempo 1 Nomor 61, Kebayoran Baru, RT.4/RW.3, Gunung, Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120', 'rahaditya.wicaksono@weekendinc.com', '021 27513478 ', 'Raditya wicaksono', 'Hrd', '8567004718', '', '2017-10-27 23:40:05'),
(322, 'PT Kudo Teknologi Indonesia', 'kudo.co.id', '', 'Jl. Radio Dalam Raya No.9 Gedung Grandlucky Lantai 2 Gandaria Utara, Kebayoran Baru Jakarta, DKI Jakarta, 12140', 'siti.rosmalia@kudo.co.id', '021 27514605', 'Siti Rosmalia', 'HRD', '', '', '2017-10-27 23:40:05'),
(323, 'PT Crowde Membangun Bangsa ', 'crowde.co', '', 'Jalan Bandengan Selatan No 58 C, Jakarta 14440 ', 'm.risyadganis@gmail.com', '87880198913', 'M Risyad Ganis', 'CEO', '', '', '2017-10-27 23:40:05'),
(324, 'Kota grosir', 'kotagrosir.com', '', 'Jl. Kembangan Selatan no. 10A. Jakarta Barat - 11610 - Indonesia', 'sampad.putra@kotagrosir.com', '021 22580717', 'Sampad Putra', '', '', '', '2017-10-27 23:40:05'),
(325, 'Studentjob', 'studentjob.co.id', '', 'Jakarta', 'annisa@studentjob.co.id', '81584560603', 'Annisa Purbandari', 'CEO', '', '', '2017-10-27 23:40:05'),
(326, 'PT Zenius Education', 'www.zenius.net', '', 'Gedung Gajah Unit ABC Lantai 5 B3  Jl. Dr. Saharjo Raya No. 111  Jakarta Selatan - 12810', 'wisnuops@gmail.com', '85883683449', 'Wisnu Subekti', 'CEO', '', '', '2017-10-27 23:40:05'),
(327, 'Plaza Kamera', 'www.plazakamera.com', '', 'Jl. Mangkunegoro 11, Surabaya (KFC Diponegoro)', 'hello@plazakamera.com', '81217178890', 'Rico Satria Chandra', 'CEO', '', '', '2017-10-27 23:40:05'),
(328, 'PT Limakilo Majubersama Petani', 'limakilo.id', '', 'Menara Rajawali, Level 7-1, Jl DR Ide Agung Gde Agung, Kawasan Mega Kuningan, Jakarta Selatan 12950', 'hi@limakilo.com', '8111811374', 'Arif Setyawan', 'CTO dan Co-Founder', '', '', '2017-10-27 23:40:05'),
(329, 'PT Jurnal Consulting Indonesia', 'www.jurnal.id', '', 'Jalan Raya Daan Mogot KM 10 Blok A. No. 1, Daan Mogot, Jakarta Barat, Indonesia', 'daniel@jurnal.id', '021 29025471', 'Daniel Witono', 'CEO', '', '', '2017-10-27 23:40:05'),
(330, 'Taralite', 'www.taralite.com', '', '', 'abraham.viktor@taralite.com , aisah.darusalam@taralite.com', '08118181020 / 021-29200955021-29200955', 'Abraham Victor / ibu aisah', 'Co-Founder', '85695546863', '', '2017-10-27 23:40:05'),
(331, 'PT. Brodo Ganesha Indonesia', 'bro.do/id', '', '', 'muhammad@bro.do', '8118545555', 'Muhammad Yukka Harlanda', 'CEO', '', '', '2017-10-27 23:40:05'),
(332, 'PT Anterin Digital Nusantara', 'anterin.id', '', '', 'rachmat.efendi@idx.co.id', '8121919208', 'Rachmat Efendi', 'Co-Founder', '', '', '2017-10-27 23:40:05'),
(333, 'Pawoon', 'www.pawoon.com', '', '', 'ahmad@pawoon.com', '81295243767', 'Ahmad Gadi', 'Founder dan CEO', '', '', '2017-10-27 23:40:05'),
(334, 'Gogonesia', 'www.gogonesia.com', '', '', 'hello@gogonesia.com', '85850002010', 'Melieyana Tjioe', 'Founder', '', '', '2017-10-27 23:40:05'),
(335, 'PT Gorgom Obralindo Asia', 'www.kidipal.com', '', '', 'luminary@kidipal.com', '85892740358', 'Glen Luminary', 'Co-Founder', '', '', '2017-10-27 23:40:05'),
(336, 'PT Ahlijasa Indonesia ', 'www.ahlijasa.com', '', '', 'jay@ahlijasa.com', '81280061470', 'Jay Jayawijayaningtiyas', 'Co-Founder dan CEO', '', '', '2017-10-27 23:40:05'),
(337, 'PT. Paprika Multi Media', 'www.paprika.co.id', '', '', 'kalvin@paprika.co.id', '021 80631818', 'Kalvin yap', 'Founder dan CEO', '', '', '2017-10-27 23:40:05'),
(338, 'Nulisbuku', 'www.nulisbuku.com', '', '', 'auliahalimatussadiah@zettamedia.id', '81514535314', 'Aulia Halimatussadiah', 'Co-Founder', '', '', '2017-10-27 23:40:05'),
(339, 'eFishery', 'efishery.com', '', '', 'gibran@efishery.com', '8112207199', 'Gibran Huzaifah', 'CEO', '', '', '2017-10-27 23:40:05'),
(340, 'Bridestory', 'www.bridestory.com', '', '', 'kevin.mintaraga@mirumagency.com', '021 30066819', 'Penyedia jasa perlengkapan pernikahan', 'Co-Founder dan CEO', '', '', '2017-10-27 23:40:05'),
(341, 'PT Generasi Digital International ', 'www.cicil.co.id', '', '', 'info@gdilab.com / robiseptian@anterin.id', '021 71796431', 'Jefri Dinomo / Robi septian', 'Co-Founder & CBD', '', '', '2017-10-27 23:40:05'),
(342, 'Jojonomic', 'www.jojonomic.com', '', '', 'diska@jojonomic.com', '021 29715823 ', 'Diska', '', '', '', '2017-10-27 23:40:05'),
(343, 'Alodokter', 'alodokter.com', '', '', 'nfaibis@alodokter.com', '021 5260755', 'Nathanael Faibis', 'CEO', '', '', '2017-10-27 23:40:05'),
(344, 'Moka', 'www.moka.com', '', '', 'haryanto@mokapos.com', '021 30061540', 'Haryanto Tanjo', 'Co-Founder dan CEO', '', '', '2017-10-27 23:40:05'),
(345, 'Pinjam', 'pinjam.co.id', '', '', '', '021 27506800 ', 'Teguh B Ariwibowo', 'Founder', '', '', '2017-10-27 23:40:05'),
(346, 'Nida Rooms', 'www.nidarooms.com', '', '', 'kaneswaran.avili@nidarooms.com', '021 40100685', 'Kanesrawan Avili', 'CEO', '', '', '2017-10-27 23:40:05'),
(347, 'Agate', 'www.agatestudio.com', '', '', 'arief@agatestudio.com', '022 2010665 / 085776977888', 'Arief Widhiyasa', 'CEO', '', '', '2017-10-27 23:40:05'),
(348, 'PT. Recomn Technology Services', 'www.sejasa.com', '', '', 'anthony@sejasa.com', '021 29376155/56', 'Anthony Eka Wijaya', 'Co-Founder', '', '', '2017-10-27 23:40:05'),
(349, 'Akulaku', 'www.akulaku.com', '', '', 'williamli@akulaku.com', '021 80629655', 'William Li', 'CEO', '', '', '2017-10-27 23:40:05'),
(350, 'PT SJ Lotte Duty Free', 'www.lottedutyfree.co.id', '', '', 'shivoseptia@lotte.net', '021 29889577', 'Shivora', 'HRD', '', '', '2017-10-27 23:40:05'),
(351, 'PT AJ Central Asia Raya', 'www.car.co.id', '', '', 'josua.manihuruk@car.co.id', '021 5637901', 'Josua Manihuruk', 'HRD', '', '', '2017-10-27 23:40:05'),
(352, 'Indonesia International Institute For Life Sciences ( i3l )', 'www.i3l.ac.id', '', 'Jl. Pulomas Barat Kav. 88, Kayu Putih, Pulo Gadung, Jakarta Timur, 13210', 'alfon.kaizen@i3l.ac.id', '021 29567888', 'Alfon kaizen', 'HRD', '', '', '2017-10-27 23:40:05'),
(353, 'PT Indomarco prismatama (Indomaret group)', 'www.indomaret.co.id', '', 'Head Office I : Jl. Ancol 1 No. 9-10, Ancol Barat - Pademangan, Jakarta Utara 14430. Ph. (021) 6909400\n59100', 'rekrutmen@indomaret.co.id , cc : mahdi@indomaret.co.id , josh@indomaret.co.id , Rcho1@indomaret.co.id ', '021 6909400', 'Mahdi / Josh / Durung', 'HRD', '', '', '2017-10-27 23:40:05'),
(354, 'probuilder', 'www.probuilder.co.id', '', 'Jl. Agung Niaga III, RT.14/RW.13, Sunter Agung, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14350', 'tindewi@probuilder.co,id', '(021) 65833838', 'Dewi)', 'HRD', '', '', '2017-10-27 23:40:05'),
(355, 'Bukalapak', 'www.bukalapak.com\n', '', 'Plaza City View Lt. 1\nJl. Kemang Timur No. 22\nJakarta Selatan\nIndonesia 12510', 'gema@bukalapak.com\nrecruitment@bukalapak.com\nanida@bukalapak.com', '(021) 7182008', 'Muhamad fajrin rasyid , Gema buana, Anida', 'CEO, HRD, HRD', '', '', '2017-10-27 23:40:05'),
(356, 'PT Global Tiket Network (Tiket.com)', 'www.tiket.com', '', 'Jalan Kawi No.45, Setiabudi, Kuningan, Jaksel, Kota Jakarta Selatan, DKI Jakarta ', 'rahendra@tiket.com\nwenas@tiket.com', '(021)83782121', 'Rahendra, Wenas, ', 'HR, CEO', '', '', '2017-10-27 23:40:05'),
(357, 'PT perdana makmur Jaya', 'www.perdanamakmurjaya.com', '', 'Komplek pergudangan taman tekno blok H8 no 10 tangsel', 'hrd.perdana@gmail.com', '021-29673325/3326', 'Denis', 'HRD', '', '', '2017-10-27 23:40:05'),
(358, 'The westlake resort', 'http://www.thewestlakejogja.com/', '', 'Jl. Ringroad Barat\nBedog Trihanggo Sleman Yogyakarta 55291\nIndonesia,', 'secr.gm.thewestlakeyogya@gmail.com', '0274 2820666', 'Atika', 'SECRETARY', '81257411811', '', '2017-10-27 23:40:05'),
(359, 'MBIZ', 'www.mbiz.co.id', '', 'Jl. HR. Rasuna Said Kav. B-12\nSetiabudi, Jakarta Selatan 12940\nDKI Jakarta, Indonesia', 'adrian.suherman@mbiz.co.id, andrew@mbiz.co.id, unedo.nainggolan@mbiz.co.id', '021-30493419 / 021- 29110133 ', 'Adrian Suherman, Unedo nainggolan, Andrew Mawikere', 'CEO, SENIOR DEV, CEO', '', '', '2017-10-27 23:40:05'),
(360, 'PT. Traveloka Indonesia ( traveloka.com )', 'www.traveloka.com', '', 'Wisma 77 Tower 1 Lt. 7, Jl. S. Parman Kav. 77, Jakarta Barat, DKI Jakarta, Indonesia', 'driswanto@traveloka.com, thitimon@traveloka.com,ferry@traveloka.com', '021-2910-3300 ', 'Dave riswanto /Thitimon / Ferry Unardi', 'Human Capital/ Recruitment Manager/ CEO', '', '', '2017-10-27 23:40:05'),
(361, 'PT. Citra Media Nusa Purnama', 'www.mediaindonesia.com', '', 'Kompl Delta Kedoya Kav A-D, Jl. Raya Pilar Mas, Kebon Jeruk Jakarta Selatan, DKI Jakarta Indonesia ', 'eddy@mediaindonesia.com,riza@mediaindonesia.com', '021-5821303 / 021-5812088 - ext. 4118/41107', 'Eddy Suryana,Riza Mauluddin', 'HR Recruit Manager', '', '', '2017-10-27 23:40:05'),
(362, 'PT. Djarum', 'www.djarum.com', '', 'Jl. Aipda KS Tubun 2 Bl C/57, Palmerah, Jakarta Barat, DKI Jakarta, Indonesia', 'tan.wawie@djarum.com, angelina.koesjono@djarum.com,rudy.lewono@djarum.com', '021-5346901', 'Tan Wawie,Rudy Lewono,Angelina Koesjono', 'HR Div Head, GM HRD, HRD Recruit', '', '', '2017-10-27 23:40:05'),
(363, 'PT. Tiki Jalur Nugraha Ekakurir (JNE)', 'www.jne.co.id', '', 'JNE Head OfficeJl Tomang Raya no 11 Jakarta Barat, DKI Jakarta Indonesia ', 'johari.zein@jne.co.id, nurfajriah.anzani@jne.co.id, ulfatul.azizah@jne.co.id', '(021) 2927 8888, (62-21) 566 5262', 'Johari zein, Nurfajriah anzani, Arief Rahardjo', 'Komisaris , HRD Recruitment, VP IT', '', '', '2017-10-27 23:40:05'),
(364, 'PT. Citilink Indonesia', 'www.citilink.co.id', '', 'Jl. S. Parman Kav. 72, Slipi Jakarta Barat, DKI Jakarta Indonesia ', 'siti.rahmah@citilink.co.id, rony.manurung@citilink.co.id,hafidz@citilink.co.id', '021-6258151', 'Siti Rahmah , Rony Manurung , Hafidz Aulia', 'Human Capital Business Partner, Sr. Manager of Human Capital, IT Application & Development Manager', '', '', '2017-10-27 23:40:05'),
(365, 'PT. Tokopedia', 'www.tkopedia.com', '', 'Wisma 77 Tower 2 Lt. 2, Jalan Letjen S. Parman Kav 77 Slipi Jakarta Barat, DKI Jakarta Indonesia ', 'william@tokopedia.com, fitria.umami@tokopedia.com, wiji.mulyati@tokopedia.com. suharjono@tokopedia.com, dyah.ayu@tokopedia.com', '021-80647333', 'William Tanuwijaya, Fitria Umami, Wiji Mulyati, Recharge Report, Dyah ayu\n', 'CEO, HR Recruit, HR Recruit,Technology Lead / Senior Software Engineer, Recruitment spesialist', '', '', '2017-10-27 23:40:05'),
(366, 'PT. United Tractors', 'www.unitedtractors.com', '', 'Jl. Raya Bekasi Km. 22 Jakarta Timur, Jawa Barat Indonesia ', 'david@unitedtractors.com, rahmatc@unitedtractors.com', '021-24579999', 'David Harlo Herdi, Rahmat Cahyadi', 'Human Capital Manager, Application Engineer Manager', '', '', '2017-10-27 23:40:05'),
(367, 'PT. Lazada Indonesia', 'www.lazada.com', '', 'Plaza Agro Lantai 8 & 9, Jl. HR. Rasuna Said Kav. X2 No. 1, Jakarta Selatan, DKI Jakarta, Indonesia.', 'annette.thia@lazada.com, ikhsan.anchan@lazada.co.id,andrew.lam@lazada.com.philip.arguelles@lazada.com', '021-80630200', 'Annette Thia, Ikhsan Senja Anchan, Andrew Lam , philip.arguelles', 'Head of Regional Recruitment, Recruitment Manager, Senior Manager, eCommerce Technical Product / Project Management,Data Applications Engineer, Senior Associate', '', '', '2017-10-27 23:40:05'),
(368, 'PT link Net ', 'www.firstmedia.com', '', 'Jl. Jendral Gatot Subroto No. 35-36 Jakarta Selatan, DKI Jakarta Indonesia', 'irwan.djaja@firstmedia.com , shinta.paruntu@firstmedia.com, yasin.mudzakir@firstmedia.com', '021-5278811', 'IRWAN DJAJA, SHINTA PARUNTU,YASIN MUDZAKIR\n', 'CEO, Head HR, HR Manager', '', '', '2017-10-27 23:40:05'),
(369, 'PT CYBERINDO ADITAMA (CBN INTERNET)', 'www.cbn.net.id', '', 'Cyber Two Tower, 33rd FloorJl. HR. Rasuna Said Blok X5 Kav 13 Jakarta Selatan, DKI Jakarta Indonesia', 'heruw@cbn.net.id, helly@cbn.net.id', '021 29964900\n021 5742481', 'HERU WAHYUDI, HELLY SINANJUNG,', 'Project Manager & Web Developer, Recruitment & Personnel Manager', '', '', '2017-10-27 23:40:05'),
(370, 'PT. ZALORA INDONESIA', 'www.zalora.co.id', '', 'Menara Bidakara I Lantai 16 & 17, Jl. Jendral Gatot Subroto Kav. 71-73, Pancoran Jakarta Selatan, DKI Jakarta Indonesia', 'ria.widya@id.zalora.com, hesti.saputri@zalora.co.id', '(021) 80640800', ' RIA WIDYA, HESTI SAPUTRI', 'Interim Head of HR , Human Resource Business Partner & Recruitment\n', '', '', '2017-10-27 23:40:05'),
(371, 'QLAPA', 'www.qlapa.com', '', 'Jl. Tanjung Duren Utara, Gang III A No. 337, 11430, Indonesia Jakarta Barat, DKI Jakarta Indonesia', 'benny@qlapa.com, fadhilah@qlapa.com', '021 56951278, 021 22562088', 'BENNY FAJARAI, FADHILAH KURNIATI', 'CEO, HRM', '', '', '2017-10-27 23:40:05'),
(372, 'PT MID KELOLA INDONESIA', 'www.sleekr.co', '', 'MidPlaza 1, 8th floor, Jl. Jend. Sudirman Kav. 10-11 Jakarta Pusat, DKI Jakarta Indonesia', 'julina@sleekr.co, agung@sleekr.co', '021 5704030 ', 'JULINA BARUS, AGUNG HARRY PURNAMA', 'Head Of Human Resources , Director Of Technology', '', '', '2017-10-27 23:40:05'),
(373, 'JD.ID', 'www.jd.id', '', 'Jalan Biak no 46, Cideng, Gambir, Jakarta Pusat, DKI Jakarta Indonesia', 'jessica.effendi@jd.id, sintya.puspitarini@jd.id', '1500 618 / (021) 80681005', 'JESSICA EFFENDI, sintya puspitarini', 'Human Resources Senior Manager,Recruitment Specialist', '', '', '2017-10-27 23:40:05'),
(374, 'Blibli.com', 'www.blibli.com', '', '', 'ifnubima@gmail.com', '0804-1-871-871', 'Ifnu Bima', 'Development manager', '021 80642720', '', '2017-10-27 23:40:05'),
(375, 'PT. KOBEXINDO TRACTORS', 'http://www.kobexindo.com', '', 'Jakarta', 'markushandoyo@kobexindo.com', '(021) 6470 0800', 'MARKUS WIDI HANDOYO', 'Recruitment Section Head', '', '', '2017-10-27 23:40:05'),
(376, 'THE MULIA GROUP', 'http://themulia.com/', '', 'Jakarta', 'sulis.hadi@themulia.com', '', 'SULIS HADI', 'Senior Recruitment & Development Officer', '0361-3027777', '', '2017-10-27 23:40:05'),
(377, 'PT ELNUSA, TBK', 'http://www.elnusa.co.id', '', 'Jakarta', 'crhisna@elnusa.co.id, Iman.kurniadi@elnusa.co.id, kandita@elnusa.co.id', '(021) 7883 0850', 'CRHISNA SETIAWAN, kandita, iman kurniadi', 'HR Recruitment Specialist', '', '', '2017-10-27 23:40:05'),
(378, 'DELOITTE INDONESIA', 'http://www.deloitte.com', '', 'Jakarta', 'ygoh@deloitte.com', '', 'YEN GOH', 'Senior Recruitment Specialist (Regional role)', '', '', '2017-10-27 23:40:05'),
(379, 'PT XSIS MITRA UTAMA', 'http://www.xsis.co.id', '', 'Jakarta', 'dian.banyo@xsis.co.id', '(021) 2967 8261', 'DIAN BANYO', 'Recruitment Head', '81389077200', '', '2017-10-27 23:40:05'),
(380, 'PT. INDOCYBER GLOBAL TECHNOLOGY', 'http://www.indocyber.co.id', '', 'Jakarta', 'laili.fitriati@indocyber.co.id', '(021) 2854 2998', 'LAILI FITRIATI', 'HR - Recruitment', '', '', '2017-10-27 23:40:05'),
(381, 'PT. CENTRAL PRIMA KELOLA', 'http://www.centralparkjakarta.com', '', 'Jakarta', 'najiib@centralparkjakarta.com', '(021) 56989999', 'NAJIIB ADZANI', 'HR Recruitment Officer', '', '', '2017-10-27 23:40:05'),
(382, 'PT. ALPHA DIGITAL INDONESIA', 'www.uangteman.com', '', 'Gedung Eightyeight@Kasablanka Jln. Raya Casablanca Kav 88 Menteng Dalam, Tebet, Jakarta Selatan', 'ruth.diarina@uangteman.com', '(021) 8062300', 'Ruth diarina', 'HR Generalist', '', '', '2017-10-27 23:40:05'),
(383, 'MOKAPOS', 'www.mokapos.com', '', 'Jakarta', 'rismaulina.aruan@mokapos.com', '(021) 50303717, ', 'Rismaulina Aruan', 'Technical Recruiter', '', '', '2017-10-27 23:40:05'),
(384, 'BIZONE GLOBAL', 'http://www.bizone-global.com/', '', 'Boulevard Artha Gading Street A6B/28, , Indonesia', 'hrd@intersoftpt.com', '(021) 4587 3997', 'Julia', 'HRD', '', '', '2017-10-27 23:40:05'),
(385, 'CALIBREWORKS', 'https://www.calibreworks.com', '', 'Wisma Bisnis Indonesia 2, Suite 107Jl. Juanda 3 No.32, Jakarta Pusat, DKI Jakarta Indonesia', 'sunil@calibreworks.com, dee@calibreworks.com', '(021)4070.2328', 'Sunil Tolani, Dee Ferdinand, ardy pratama', 'CEO, CHIEF OPERATION OFFICER', '', '', '2017-10-27 23:40:05'),
(386, 'Kumparan', 'https://kumparan.com/', '', 'Jl. Jati Murni No.1B, RT.8, Jati Padang, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540', 'redaksi@kumparan.com, hrd@kumparan.com, sales@kumparan.com, merina.lestari@kumparan.com', '(021) 22784571', 'Kezia, Merina', 'Skretaris redaksi, HRD', '', '', '2017-10-27 23:40:05'),
(387, 'HUTCHISON 3 INDONESIA', 'www.three.co.id', '', 'Jakarta', 'dewi.asmara@three.co.id', '(021) 52906800', 'Ahmad ruskanda, Dewi Asmara', 'Vice President Human Resources Operations , HR Recruitment', '', '', '2017-10-27 23:40:05'),
(388, 'PT. Visionet International', 'www.ovo.id', '', 'Lippo kuningan Lt.20', 'hr@ovo.id', '021-5577678', '', '', '', '', '2017-10-27 23:40:05'),
(389, 'PT. Ivonesia Solusi Data', 'www.ivosights.com', '', 'Jl. Tebet Barat VII No.3, RT.4/RW.4, Tebet Bar., Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810', 'arifin@ivosights.com', '(021) 28543443', 'Rahmat arifin', 'HR ', '', '', '2017-10-27 23:40:05'),
(390, 'PT NTT Data Indonesia', 'http://id.nttdata.com', '', 'Wisma 46 - Kota BNI, 5th Floor, Jalan Jend Sudirman Kav 1, Jakarta Pusat 10220, Indonesia', 'augustina.kusumawardhani@nttdata.com', '021 574 6060', 'Augustina kusumawardhani', 'HR ', '', '', '2017-10-27 23:40:05'),
(391, 'PT Gits Indonesia', 'http://www.gits.co.id/', '', 'Jalan Mars Barat I, Manjahlega, Bandung City, West Java, Indonesia', 'hr@gits.co.id, shinta@gits.co.id', '022 7506218', 'Shinta', 'HR', '8127355400', '', '2017-10-27 23:40:05'),
(392, 'PT Tower Bersama Infrastructure, Tbk', 'http://www.tower-bersama.com', '', 'The Convergance Indonesia, Jalan Epicentrum Boulevard Barat, Karet Kuningan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia', 'nadya.maulana@tower-bersama.com', '021-29248900', 'Nadia maulana', 'HR', '', '', '2017-10-27 23:40:05'),
(393, 'PT Total Solusi Teknologi', 'https://www.totalit.co.id', '', 'Perkantoran Duta Mas Fatmawati Blok D2/5, Jalan Rs. Fatmawati, North Cipete, Kebayoran Baru, South Jakarta City 12150, Republic of Indonesia', 'ary@totalit.co.id', '2172308126', 'Ary triprasetyo', 'HR', '', '', '2017-10-27 23:40:05'),
(394, 'Kurnia Ciptamoda Gemilang', 'http://www.kurniacg.com', '', 'Jalan Buntu No.40 Kebayoran Lama, South Jakarta, DKI Jakarta, Indonesia', 'Fabiani.frisna@kurniacg.com', '021-72780177', 'Fabiani frisna', 'HR', '', '', '2017-10-27 23:40:05'),
(395, 'WEALTHY', 'http://www.wealthy.id', '', 'Green Sedayu Biz Park Blok DM 2 No. 007 Jl Daan Mogot KM 18, Jakarta Barat', 'hrd@wealthy.id', '2.122.522.381', 'David', 'HRD Manager', '', '', '2017-10-27 23:40:05'),
(396, 'PT Bangun Usaha Energi Perkasa ( Jakarta )', 'http://www.kiosbank.com', '', 'Puri Imperium Unit G No.2,3,5 Jl Kuningan Madya Kav 5-6 Kuningan Jakarta Selatan', 'ireine.drs@gmail.com', '021-29488777', 'Irene', 'HR', '', '', '2017-10-27 23:40:05'),
(397, 'PT. DESSERTA FAKTORI GELATO', 'http://www.chzcakefactory.com/', '', 'Jl. Cikini Raya No.16, RT.1/RW.2, Cikini, Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10330', 'it@harvest.com, recruitment@almond.treecakes.com', '(021) 29236556/57', 'Darwin', 'IT Director', '', '', '2017-10-27 23:40:05'),
(398, 'PT Javan Cipta Solusi', 'http://www.javan.co.id/', '', 'Jalan Terusan Jakarta, Bandung, West Java, Indonesia', 'info@javan.co.id, feni@javan.co.id, arini@javan.co.id, Business@javan.co.id', '022-2878318786', 'Arini & Feni', 'HRD', '', '', '2017-10-27 23:40:05'),
(399, 'PT Multikonvesta Utama', 'http://www.kamarsewa.com/', '', 'Jalan Musi 3, Jakarta, DKI, 10150, Indonesia', 'cs@kamarsewa.com', '81510010123', 'William', 'HR', '', '', '2017-10-27 23:40:05'),
(400, 'PT Astra Graphia Information Technology (AGIT)', 'http://www.ag-it.com/', '', 'ANZ Tower, 22nd Floor Jl. Jend. Sudirman Kav. 33A Jakarta 10220, Indonesia', 'yulianus.tambunan@ag-it.com', '021 572-1177', 'Yulianus Tambunan', 'HR Recruit', '', '', '2017-10-27 23:40:05'),
(401, 'PT. Qlue Performa Indonesia', 'www.qlue.co.id/', '', 'Jl. Pejaten Barat No.13, RT.1/RW.8, Pejaten Bar., Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12510', 'career@qlue.id, info@qlue.co.id', '(021) 71793635', 'Sofyan', 'HR', '', '', '2017-10-27 23:40:05'),
(402, 'PT Payfazz Teknologi Nusantara (Payfazz)', 'www.payfazz.com', '', 'Sampoerna Strategic Square, South Tower Level 18, Jl. Jenderal Sudirman Kav.45-46, Jakarta', 'leysuprapto@payfazz.com, career@payfazz.com', '(021) 29043771', 'Ibu Ley Suprapto', 'HR', '', '', '2017-10-27 23:40:05'),
(403, 'KALBE NUTRITIONALS', 'http://www.kalbenutritionals.com', '', 'Gedung Graha Kirana Lt. 5 Jl. Yos Sudarso Kav. 88 Sunter Jakarta Utara 14350', 'setyo.utari@kalbenutritional.com, esteepleyto@kalbenutritional.com', '0264-8302120', 'Setyo utari / Fina', 'HR', '', '', '2017-10-27 23:40:05'),
(404, 'PT Cipta Piranti Sejahtera', 'http://cpssoft.com/', '', 'Ruko Swadaya City Square, Jalan Swadaya, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia', 'fahrurrojie@myabcshop.com, ozziaden@gmail.com', '021 29440431', 'Fahrur rojie', 'HR', '', '', '2017-10-27 23:40:05'),
(405, 'Sorbet Solutions', 'http://sorbetsolutions.com/', '', 'Jalan Pinangsia Timur no 14, Jakarta Barat, Indonesia', 'info@sorbetsolutions.com, adi@sorbetsolutions.com', '0216007257 /6281389793430', 'Adi', '', '81389793430', '', '2017-10-27 23:40:05'),
(406, 'PT. CODE DEVELOPMENT INDONESIA', 'http://www.code.id/', '', 'APL Tower 26th floor Central Park Jalan Letjen S. Parman Kav 28 Jakarta, 11470, Indonesia', 'gabung@code.id, asutomo@code.id, ', '021-2933 9550', 'Agus Sutomo', 'COO', '', '', '2017-10-27 23:40:05'),
(407, 'KEBAYORAN REALTI, PT', 'https://www.kr-property.com/', '', 'Jl. Kyai Caringin No.12B, RT.11/RW.4, Cideng, Gambir, DKI Jakarta, Daerah Khusus Ibukota Jakarta 12210', 'admin@kr-property.com, cs@kr-property.com', '021) 63863420', 'Debora', 'HR', '87888851695', '', '2017-10-27 23:40:05'),
(408, 'PT Agrinusa Jaya Santosa', 'https://www.japfacomfeed.co.id/en', '', 'Komp Kedoya Elok Plaza Blok DE 12 - 13 Jl Raya Panjang Kebon Jeruk Jakarta Barat Indonesia, Jakarta Barat, DKI Jakarta, 11520, Indonesia', 'Indarto.santoso@japfa.com', '021-5812819', 'Indarto santoso', 'IT', '', '', '2017-10-27 23:40:05'),
(409, 'PT Pandu Siwi Sentosa', 'http://www.pandulogistics.com/', '', 'Jl. Raya Bekasi Timur Km. 18 No. 30, klender, Jaktim', 'recruitment@pandulogistics.com, dewi.mayang@pandulogistics.com', '021-30009000', 'Mayang', 'HRD Dept', '', '', '2017-10-27 23:40:05'),
(410, 'PT Lippo General Insurance Tbk', 'http://www.lippoinsurance.com', '', 'Karawaci Office Park, Blok i No 30-35, Lippo Village, Tangerang 15139', '', '021-55790672', '', '', '', '', '2017-10-27 23:40:05'),
(411, 'PT PZ Cussons Indonesia', 'http://www.pzcussons.com', '', 'Jl. Halim Perdana Kusuma No.144 Batu Ceper, TANGERANG', '', '021 619 7611 / 021-50806300', 'Reni ', 'HRD', '', '', '2017-10-27 23:40:05'),
(412, 'Panarub Group', 'http://www.panarub.co.id/', '', 'Jl. Moh. Toha/Raya Mauk, Tangerang, Banten, Indonesia', 'kornelis@panarub.co.id, recruitment@panarub.co.id', '021 5524412', 'Kornelis', 'HR', '', '', '2017-10-27 23:40:05'),
(413, 'Trivo group', 'www.trivo.co.id', '', 'Jl. Jenderal Sudirman No. 1 Cikokol Tangerang 15117 (Basement 1, Management Office)', 'hrd.trivogroup@gmail.com', '021-55733333 (021) 3910707', '', 'hrd', '', '', '2017-10-27 23:40:05'),
(414, 'PT Panca Budi Pratama', 'http://www.pancabudi.com/', '', 'Jl. Daan Mogot Raya Km.19,6 Kawasan Pusat Niaga Terpadu Blok D No.8A-D, Poris Gaga Tangerang 15122', 'Christy.t@pancabudi.com', '021-29029086', 'Christy / Valentin', 'HRD', '', '', '2017-10-27 23:40:05'),
(415, 'PT Salestock Indonesia', 'https://www.salestockindonesia.com/', '', 'Jl. Mayjen DI Panjaitan No. 1C, RT 001 / RW 006 (Samping Komplek Kemhan), Kelurahan Kebon Pala, Kecamatan Makasar, Jakarta Timur 13650', 'joinus@salestock.id, Willyando.sirigar@salestock.id', '(021) 8566721 /0852-1365-4255', 'Willyando Siregar', 'IT SPV', '', '', '2017-10-27 23:40:05'),
(416, 'PT Teknologi Optimal Prima (BAMMS)', 'http://bamms.co/', '', 'Jl. Bandengan Sel. No.58B, RT.4/RW.1, Pejagalan, Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450', 'Gabriel@bamms.co', '(021) 22663311', 'Gabriel', 'Product Manager', '', '', '2017-10-27 23:40:05'),
(417, 'PT. PopBox Asia Services', 'https://www.popbox.asia/', '', 'Jl. Raya Kalibata No.1, RT.9/RW.4, Rawajati, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12750', 'HRD@popbox.asia , krisna@popbox.asia, krisnarkpsf@gmail.com', '021 22538719 /(021) 29022537', 'Krisna', 'HRD Recruitment', '', '', '2017-10-27 23:40:05'),
(418, 'Andalin', 'https://www.andalin.com/', '', 'Equity tower, 8th Floor (EV Hive) Jl. Jenderal Sudirman, Kavling 52-53 (SCBD), Jakarta 12190', 'bobby@andalin.com, marvinus@andalin.com', '0856 9201 4841 /(62) 821 1026 7895', 'Bobby', '', '', '', '2017-10-27 23:40:05'),
(419, 'PT. Bizzy Commerce Indonesia', 'https://www.bizzy.co.id/', '', 'Jalan Riau No. 1 Menteng, RT.9/RW.5, Gondangdia, Jakarta Pusat, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350', 'support@bizzy.co.id, Saras.meini@bizzy.co.id', '021) 2978 4578 (021) 2789-9955 /021-8062-9896', 'Saras Meini', 'HRD', '82132547683', '', '2017-10-27 23:40:05'),
(420, 'Yors.id', 'ttps://yors.id/', '', '', 'hello@yself.com', '', '', '', '', '', '2017-10-27 23:40:05'),
(421, 'Rupiah Plus', 'https://www.rupiahplus.com/', '', 'Grand Slipi Tower, Jl. Letj. S Parman Kav. 22-24, Unit 9G, Cekindo Business Center, Room 208,Slipi - Palmerah, Jakarta Barat 11480', 'hr@rupiahplus.com, astrid.yunita@rupiahplus.com', '021 30025888', 'Astrid', 'HRD', '', '', '2017-10-27 23:40:05'),
(422, 'Ralali.com', 'https://www.ralali.com/', '', 'Ruko Prominence D38 No. 51-53 Alam Sutera Tangerang, Banten 15143', 'hrd@ralali.com', '021-30052777, 021 - 6230 8786', 'Runi', 'HRD', '', '', '2017-10-27 23:40:05'),
(423, 'PT. Multi Talenta Prakarsa', 'http://semua.sale/', '', 'Business Park Kebon Jeruk,Jl. Meruya Ilir No.88 Blok B-10, Meruya Utara - Kembangan', 'help@semua.sale / diningrumprahesty@gmail.com', '021-3006-7871, 6221-3006-7872, 0812-8903-1136', 'Diningrum prahesty', 'Admin', '', '', '2017-10-27 23:40:05'),
(424, 'PT. PasarPolis Indonesia', 'https://www.pasarpolis.com/', '', 'Gedung Tifa No., Jl. Kuningan Bar. 1 No.26, RT.6/RW.1, West Kuningan, Mampang Prapatan, South Jakarta City, Jakarta 12710', 'cs@pasarpolis.com', '(021) 3044 8080 / 0877 0017 8000\n', '', '', '', '', '2017-10-27 23:40:05'),
(425, 'PT. Samz Solution', 'www.samzsolution.com/', '', 'Menara TIFA 8th floor Jl. Kuningan Barat no. 26 Mampang Prapatan Jakarta Selatan 12710\n', 'nenny@mysamz.com', '(021) 5289-1863 ', 'Nenny', 'HRD', '', '', '2017-10-27 23:40:05'),
(426, 'MYREPUBLIC LABS', 'https://myrepublic.co.id/', '', 'Jl. Teuku Cik Ditiro No.37, Menteng Jakarta Pusat 10310', '', '(021) 1500 818 /021- 24155508', '', '', '', '', '2017-10-27 23:40:05'),
(427, 'PT Cartenz Technology Indonesia', 'www.cartenz.co.id/', '', 'RT.5/RW.4, Karet Semanggi, Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930', 'hrd@cartenz.co.id', '(021) 29772929', 'Stevi ', 'Head HR', '', '', '2017-10-27 23:40:05'),
(428, 'PT Fortress Data Services', 'http://www.fds.co.id', '', 'Lt.12 A, Graha Mandiri, Jl. Imam Bonjol No.61, RT.8/RW.4, Menteng, RT.8/RW.4, Menteng, Jakarta Pusat, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310', 'career@fds.co.id', '(021) 3983 3895', 'Julia', 'HRD', '', '', '2017-10-27 23:40:05'),
(429, 'PT Qtera Mandiri', 'http://www.qtera.co.id/', '', 'Rukan Villa Gading Indah Blok A1 No.1 (sebelah apartemen Mediterania) Jl. Boulevard Bukit Gading Raya Kelapa gading, Jakarta Utara 14240', 'technical@qtera.co.id, marketing@qtera.co.id', '(021) 4509241', 'Hendro', 'Direktur', '', '', '2017-10-27 23:40:05'),
(430, 'PT. Agro Boga Utama', 'www.agrobogautama.co.id', '', 'JL.RC veteran (Hj. Ropiah) No.9B Bintaro, Jakarta Selatan 12230', 'iqbal@agrobogautama.co.id', '(021) 73884182', 'Abdul Gadir Alwi, Iqbal', 'Human Resources Manager, HR Training & Development', '', '', '2017-10-27 23:40:05'),
(431, 'PT Tonnindo Eramulya', 'http://tonnindo.com/', '', 'JL. Pembangunan, III/14E, Jakarta, 10130, RT.6/RW.2, North Petojo, Gambir, Central Jakarta City, Jakarta 10130', 'tonnindo@cbn.net.id', '(021) 632 1717', 'Adi', '', '', '', '2017-10-27 23:40:05'),
(432, 'PT. Pro-Int Dinamika', 'https://www.pro-int.co.id/', '', 'Perkantoran Puri Niaga Blok K7/1W-1X. Puri Kencana, RT.11/RW.7, Kembangan Sel., Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610', 'cs@pro-int.co.id', '(021) 582 3108', '', '', '', '', '2017-10-27 23:40:05'),
(433, 'PT Korelasi Persada Indonesia', 'http://www.korelasipersada.com', '', 'Jl. Jend. Sudirman Kav. 26 Jakarta 12920', 'bisdev@korelasipersada.com, sales@korelasipersada.com', '(021) 298 5 8080', 'Indra', 'Direktur', '811127826', '', '2017-10-27 23:40:05'),
(434, 'PT. Nusa Network Prakarsa', 'https://www.nusanetwork.com/', '', 'Jl. Kamal Raya Outer Ring Road, Mutiara Taman Palem, A9 - no 25, cengkareng, RT.7/RW.8, Cengkareng Bar., Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11730', 'finance@nusanetwork.com', '(021) 54353007', 'Hesti', 'HRD', '', '', '2017-10-27 23:40:05'),
(435, 'PT Mitra Distribusi Utama', 'http://www.jempolkios.com', '', 'Jalan Boulevard iL Lago, Tangerang 15334', 'marketing@jempolkios.com', '0888 0300 0300 (WA) /021.22222369', '', '', '', '', '2017-10-27 23:40:05'),
(436, 'PT Abhimata Persada', 'http://www.ptap.co.id', '', 'Gd. Menara Batavia, Jl. KH Mas Mansyur Kav 126 Jakarta Pusat 21 10220', 'Amirullah.jabbar@ptap.co.id', '021 5793 0180', 'Amirullah Jabbar', 'HRD', '', '', '2017-10-27 23:40:05'),
(437, 'Jojonomic', 'www.jojonomic.com', '', 'Jakarta', 'diska@jojonomic.com', '021 29715823 / 081287816292', 'Diska', 'HRD', '', '', '2017-10-27 23:40:05'),
(438, 'Vipplaza.co.id', 'http://www.vipplaza.co.id/', '', 'Jl. KH Mohamad Mansyur No. 14, Kel. Duri Pulo Kec. Gambir,Jakarta Pusat 10140', 'tesong.kim@vipplaza.com, recruitment@vipplaza.co.id', '(021) 6320880 / 082288883745', 'Tesong kim', 'CEO', '', '', '2017-10-27 23:40:05'),
(439, 'PT SINAR ABADI NUSANTARA', 'http://sanenergy.co.id/', '', 'Jl. Bukit Gading Raya, Komplek Bukit Gading Indah Blok O/5, Jakarta, RT.18/RW.8, West Kelapa Gading, Kelapa Gading, North Jakarta City, Jakarta 11620', 'intanoktaviani475@yahoo.com', '(021) 45846368', 'Intan Oktaviani', 'HRD', '', '', '2017-10-27 23:40:05'),
(440, 'PT Nipsea Paint and Chemicals', 'http://www.nipponpaint-indonesia.com', '', 'Jl Ancol Barat I/A5/C No. 12, Jakarta 14430', '', '(021) 6900546 (Kantor)', '', 'HR MANAGER', '', '', '2017-10-27 23:40:05'),
(441, 'WARUNA NUSA SENTANA, PT', 'www.waruna-group.com/', '', 'Perkantoran Plaza Pasifik Blok B2 no. 29-35 Kelapa Gading\n Jakarta Utara-14241', '', '021-45845441 (Kantor)', '', 'GM HR&GA', '', '', '2017-10-27 23:40:05'),
(442, 'Lelco Manufacturing', 'http://www.lelco-group.com', '', 'Kawasan Industri Jatake Blok AC No. 08, Jalan Industri 4, Sukamantri, PasarKemis, Tangerang, Banten 15710', '', '(021) 560 5678 (Kantor)', '', '', '', '', '2017-10-27 23:40:05'),
(443, 'PT. Pratama Cipta Lestarindo', 'www.pcl.co.id/', '', 'Komplek Bukit Gading Indah Blok SB No. 1, Jl. Boulevard Bukit Gading Raya, RT.18/RW.8, Klp. Gading Bar., Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 13920', '', '021-290-788-58 (Kantor)', '', '', '', '', '2017-10-27 23:40:05'),
(444, 'PT. Shan Informasi Sistem', '', '', 'Jl. Arteri Dua Raya Orion Dusit Mangga Dua Lt.Dasar No.16, RT.7/RW.7, Mangga Dua Sel., Jakarta Pusat, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10730', '', '(021) 56945002 (Kantor)', '', 'Director', '', '', '2017-10-27 23:40:05'),
(445, 'PT. Pulsa Inti Nasional', 'http://pulsainti.com/', '', 'Jl. Gajah Mada No.27A, RT.5/RW.7, Krukut, Tamansari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11140', 'hrd@pulsainti.com', '(021) 29999999 (Kantor) ', 'An an', 'HR Supervisor', '', '', '2017-10-27 23:40:05'),
(446, 'Ebdesk Indonesia', 'http://www.ebdesk.com', '', 'Sudirman Tower Lt. 19, Jl. Jend. Sudirman Kav. 60, Kebayoran Baru, RT.5/RW.3, Senayan, Jakarta Selatan, Kota Jakarta Selatan', 'career@ebdesk.com', '(021) 527 0669 (Kantor)', 'Eka', 'HRD', '87722661413', '', '2017-10-27 23:40:05'),
(447, 'PT. Mowilex Indonesia', 'http://www.mowilex.com/', '', 'Jalan Daan Mogot Raya KM.10 No. 18, RT.1/RW.8, Kedaung Kali Angke, Cengkareng, RT.1/RW.4, Kedaung Kali Angke, Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11710', '', '(021) 5406663 (Kantor)', '', '', '', '', '2017-10-27 23:40:05'),
(448, 'Faasri Utama Sakti. PT', 'www.faasri-net.co.id/', '', 'Jl. Buah Batu Jl. Guntursari IV No.10, Turangga, Lengkong, Kota Bandung, Jawa Barat 40264', 'sandra.arifin@faasri.com', '021-45844088', 'Sandra arifin', 'HRD', '', '', '2017-10-27 23:40:05'),
(449, 'RUMAH SAKIT PURI MEDIKA', 'http://purimedika.com/', '', 'Jalan Sungai Bambu Raya No.5, RT.4/RW.9, Sungai Bambu, Tanjung Priok, RT.5/RW.9, Sungai Bambu, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14320', 'marketing.purimedika@gmail.com', '(021) 43903355', 'Enna ', 'Marketing', '', '', '2017-10-27 23:40:05'),
(450, 'PT Perdana Bangun Pusaka', 'http://www.perdanabangunpusaka.co.id', '', 'Gedung Konica Lantai 6, Jl. Gunung Sahari No. 78, Gn. Sahari Sel., Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610, Indonesia', '', '021 4221888', '', '', '', '', '2017-10-27 23:40:05'),
(451, 'PT Samuel Sekuritas Indonesia', 'ttp://www.samuel.co.id', '', 'Menara Imperium 21 Fl, Jalan HR. Rasuna Said, Jaksel., Jakarta, RT.1/RW.6, Guntur, Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12980', 'hrd@samuel.co.id', '021 2854 8181 / 021 2854 8800 / 28548100', 'FIna', 'HR', '', '', '2017-10-27 23:40:05'),
(452, 'PT. Globalindo Dua Satu Ekspres (21Express)', 'http://www.21express.co.id', '', 'l. Raya Bekasi km 19 No 1-3, Pulo Gadung, Jakarta Timur', 'hrd@g21express.co.id', '(021) 7059 0621 ', 'Ibu yesika / Bapak sony', 'HRD Manager', '81515212121', '', '2017-10-27 23:40:05'),
(453, 'PT. Darya - Varia Laboratoria', 'http://www.darya-varia.com', '', 'South Quarter, Tower C, 18th -19th Floor Jl. R.A. Kartini, Kav.8 Jakarta 12430', '', '021-759 24500', 'AGUS HERU DARJONO', 'Human Resources Development Director', '', '', '2017-10-27 23:40:05'),
(454, 'PT Global Arrow', 'http://www.globalarrow.co.id', '', 'Lantai 6, OBF Center\nJl. Jend. Sudirman Kav 52-53\nJakarta 12190', '', '(021) 520-7122 ', 'R KURNIADI', 'HRD Manager', '', '', '2017-10-27 23:40:05'),
(455, 'Syailendra Capital', 'http://syailendracapital.com/', '', 'Jalan Jend. Sudirman Kav. 52-53\nSudirman Central Business District (SCBD)\nJakarta ? Indonesia 12190', '', '(021) 51400888', 'FEBRI OLIVIA', 'Head of HR Div.', '', '', '2017-10-27 23:40:05'),
(456, 'PT. INDOFOOD SUKSES MAKMUR', 'http://www.indofood.com', '', 'Indofood Tower, 27th Floor Jl. Jend. Sudirman Kav 76-78 Jakarta 12910', '', '021-57958822', 'YANUAR RIZKI MAULANA', 'HRD', '', '', '2017-10-27 23:40:05'),
(457, 'PT. BFI Finance Indonesia', 'https://www.bfi.co.id/', '', 'BFI Tower \nSunburst CBD Lot.1.2 \nJl. Kapt. Soebijanto Djojohadikusumo\nBSD City - Tangerang Selatan 15322', '', '021-29650300', 'FERA AFFANDI', 'Human Resources', '', '', '2017-10-27 23:40:05'),
(458, 'PT Mandala Multifinance', 'http://mandalafinance.com/', '', 'Jl. Menteng Raya No. 24 A-B, Jakarta Pusat 10340, Indonesia', '', '021-2925-9950', 'EMELIA HUTAPEA', 'Head HRD', '', '', '2017-10-27 23:40:05'),
(459, 'PT. Gajah Tunggal', 'http://www.gt-tires.com', '', 'Wisma Hayam Wuruk 10th Fl, Jalan Hayam Wuruk No.8, RT.6/RW.2, Kebon Kelapa, Gambir, RT.6/RW.2, Kb. Klp., Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10120', '', '021-5901309', 'MINGGUS GIRSANG', 'HR', '', '', '2017-10-27 23:40:05'),
(460, 'PT. Asuransi Adira Dinamika', 'http://www.adira.co.id', '', 'Perkantoran Artha Gading, JL Boulevard Artha Gading, C-02, RT.18/RW.8, Klp. Gading Bar., Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240', '', '021-39832000', 'ARFIN PRAYUDI', 'HRD', '', '', '2017-10-27 23:40:05'),
(461, 'PT. Dima Indonesia', 'http://www.dima.co.id', '', 'Plaza Marein Lantai 15, Jalan Jendral Sudirman Kav. 76, Kebayoran Baru, RT.2/RW.2, Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190', '', '021-57936955', 'LADY DIANA', 'HR Manager BU', '', '', '2017-10-27 23:40:05'),
(462, 'BERRY BENKA', 'https://berrybenka.com/', '', 'Kebon Kacang, Jl. K.H. Mas Mansyur No.19, RT.10/RW.6, Karet Tengsin, Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10250', '', '(021 )29022136', 'PUTRI CITA SARI', 'HR Manager', '', '', '2017-10-27 23:40:05'),
(463, 'PT Drife Solusi Integrasi', 'http://www.drife.co.id', '', 'Ruko 85, Jl. Bungur Besar Raya No. 85, Blok A2 Lt. 3, Kemayoran, RT.7/RW.1, Kemayoran, Jakarta Pusat, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610', '', '(021) 424 4489', 'SUCI PRATIWI', 'HR Supervisor', '', '', '2017-10-27 23:40:05'),
(464, 'Omeoo', 'http://www.omeoo.com/', '', 'Komplek Golden Plaza Blok C12, Jl. RS Fatmawati No. 15', '', '021 7590 5886 / 0812 800 700 36', 'Raymond buana', 'Owner', '', '', '2017-10-27 23:40:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=575;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
