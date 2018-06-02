-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Haz 2018, 08:47:53
-- Sunucu sürümü: 10.1.30-MariaDB
-- PHP Sürümü: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `news`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slider` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `articles`
--

INSERT INTO `articles` (`id`, `tittle`, `content`, `category_id`, `user_id`, `image`, `slug`, `created_at`, `updated_at`, `slider`) VALUES
(6, '1Bilim ile ilgili yazı başlığı', '<p><img src=\"https://i.froala.com/download/9ffc85289e51c4fa3d11c773e4410d4339dbf5bf.png?1527519903\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"><img src=\"https://i.froala.com/assets/photo5.jpg\" data-id=\"5\" data-type=\"image\" data-name=\"Image 2018-04-27 at 07:04:33.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib\" title=\"\">Bilim ile ilgili yazı başlığı</p><p><strong>Bilim ile ilgili yazı başlığı</strong></p><p>Bilim ile ilgili yazı başlığı<sub>Bilim ile ilgili yazı başlığı</sub><sup>Bilim ile ilgili yazı başlığı<s>Bilim ile ilgili yazı başlığı</s></sup></p><p><br></p><p>}</p><p>}</p>', 18, 9, 'uploads/article/M4nMHAvAAOgYzxHwrWPt8F12NbjX0WpUC2x2mNSP.png', 'bilim-ile-ilgili-yazi-basligi', '2018-05-28 10:59:50', '2018-05-28 11:05:10', '0'),
(7, 'deneme4', '<p>x xbxvxb&nbsp; cx b</p>', 19, 9, 'uploads/article/hGMj2p6XIKU5OH60kv483LllbnON8MTH5V7daTgU.png', 'b-cxv', '2018-05-28 17:27:41', '2018-05-28 17:27:41', '1'),
(8, 'Bilim ile ilgili başlık1', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 18, 9, 'uploads/article/jqbtzyqjDVaIEFSWM3VfaRGBegOWjmK5LiPfEUb7.jpeg', 'bilim-ile-ilgili-baslik', '2018-05-29 15:13:17', '2018-05-29 15:13:17', '1'),
(23, 'Bilim ile ilgili başlık2', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 20, 9, 'uploads/article/jqbtzyqjDVaIEFSWM3VfaRGBegOWjmK5LiPfEUb7.jpeg', 'bilim-ile-ilgili-baslik', '2018-05-29 15:13:17', '2018-05-29 15:13:17', '1'),
(25, 'Bilim ile ilgili başlık3', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 21, 9, 'uploads/article/jqbtzyqjDVaIEFSWM3VfaRGBegOWjmK5LiPfEUb7.jpeg', 'bilim-ile-ilgili-baslik', '2018-05-29 15:13:17', '2018-05-29 15:13:17', '1'),
(26, 'deneme1', '<p>x xbxvxb&nbsp; cx b</p>', 19, 9, 'uploads/article/hGMj2p6XIKU5OH60kv483LllbnON8MTH5V7daTgU.png', 'deneme1', '2018-05-28 17:27:41', '2018-05-28 17:27:41', '1'),
(27, 'deneme2', '<p>x xbxvxb&nbsp; cx b</p>', 19, 9, 'uploads/article/hGMj2p6XIKU5OH60kv483LllbnON8MTH5V7daTgU.png', 'b-deneme3', '2018-05-28 17:27:41', '2018-05-28 17:27:41', '1'),
(28, 'deneme3', '<p>x xbxvxb&nbsp; cx b</p>', 22, 9, 'uploads/article/hGMj2p6XIKU5OH60kv483LllbnON8MTH5V7daTgU.png', 'deneme2', '2018-05-28 17:27:41', '2018-05-28 17:27:41', '1'),
(29, 'Bilim ile ilgili başlık4', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 18, 9, 'uploads/article/jqbtzyqjDVaIEFSWM3VfaRGBegOWjmK5LiPfEUb7.jpeg', 'bilim-ile-ilgili-baslik', '2018-05-29 15:13:17', '2018-05-29 15:13:17', '1'),
(30, 'Bilim ile ilgili başlık5', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 18, 9, 'uploads/article/jqbtzyqjDVaIEFSWM3VfaRGBegOWjmK5LiPfEUb7.jpeg', 'bilim-ile-ilgili-baslik', '2018-05-29 15:13:17', '2018-05-29 15:13:17', '1'),
(31, 'sdvssc x', '<p>sdfvsdf sv</p>', 18, 9, 'uploads/article/t1Q7SLp2xNSrAp3sqBTVsWrtxGidGhuWiO5D0HNI.jpeg', 'sdvssc-x', '2018-05-29 17:51:23', '2018-05-29 17:51:23', '1'),
(32, 'Yaşam ile ilgili Yazı Başlığı', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>', 23, 9, 'uploads/article/5XErdw1JyqREUAkotcdyYTTtfebIRpWC35SEnjli.jpeg', 'yasam-ile-ilgili-yazi-basligi', '2018-05-30 03:11:13', '2018-05-30 03:11:13', '1'),
(33, 'Yorum Denemek İçin Yazı', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><h2>Nereden Gelir?</h2><p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p><p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p><h2>Nereden Bulabilirim?</h2><p>Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;rete&ccedil;, 200&#39;den fazla Latince s&ouml;zc&uuml;k ve onlara ait c&uuml;mle yapılarını i&ccedil;eren bir s&ouml;zl&uuml;k kullanır. Bu nedenle, &uuml;retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s&ouml;zc&uuml;klerden uzaktır.</p>', 23, 9, 'uploads/article/AJATRZLspYrv3WRcU2R0znITz2wLQfGZfz0geiQE.jpeg', 'yorum-denemek-icin-yazi', '2018-05-30 06:02:11', '2018-05-30 06:02:11', '1'),
(39, 'Deneme AMAÇLI Yeni yazı', '<h1>Lorem Ipsum</h1><h4>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</h4><h5>&quot;Acıyı seven, arayan ve ona sahip olmak isteyen hi&ccedil; kimse yoktur. Nedeni basit. &Ccedil;&uuml;nk&uuml; o acıdır...&quot;</h5><hr><h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><h2>Nereden Gelir?</h2><p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p><p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p><h2>Nereden Bulabilirim?</h2><p>Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;rete&ccedil;, 200&#39;den fazla Latince s&ouml;zc&uuml;k ve onlara ait c&uuml;mle yapılarını i&ccedil;eren bir s&ouml;zl&uuml;k kullanır. Bu nedenle, &uuml;retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s&ouml;zc&uuml;klerden uzaktır.</p>', 19, 12, 'uploads/article/uFUmlkUCVBuLM4JDlHoX5VKvvLq6yoWv5AOgGBOj.jpeg', 'deneme-amacli-yeni-yazi', '2018-05-31 08:43:42', '2018-05-31 08:43:42', '1'),
(91, 'Sağlık İle ilgili yazı', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 22, 12, 'uploads/article/wmI0Pty0ZlT9g3ps5FrCJ3kclqiBeoTgI0AER8UB.jpeg', 'saglik-ile-ilgili-yazi', '2018-06-01 01:54:37', '2018-06-01 01:54:37', '1'),
(92, 'Sağlık İle ilgili yazı başlığı', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 22, 12, 'uploads/article/sYul81w4gHeC46dgC98jEWwwQXUQfF9q8K3xaKCV.jpeg', 'saglik-ile-ilgili-yazi-basligi', '2018-06-01 01:54:57', '2018-06-01 01:54:57', '1'),
(93, 'başlıklar başlıklar', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 22, 12, 'uploads/article/AMg9Ta66Jh6ML90159QIrHvAqevLRpDRBFFiKoDx.jpeg', 'basliklar-basliklar', '2018-06-01 01:55:18', '2018-06-01 01:55:18', '1'),
(94, 'Yeni Sağlık Başlığı', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 22, 12, 'uploads/article/afE1G3V3SM2IM042EDxRMDmE3YjFcP5sO90rhvNL.jpeg', 'yeni-saglik-basligi', '2018-06-01 02:07:48', '2018-06-01 02:07:48', '1'),
(95, 'Yeni Sağlık Başlığı', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 22, 12, 'uploads/article/JxwGcfrs6UcO0D23nTJ4HIbDYs3QERK5DsHXNMPT.jpeg', 'yeni-saglik-basligi', '2018-06-01 02:08:31', '2018-06-01 02:08:31', '0'),
(96, 'Lorem Ipsum Nedir?', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 22, 12, 'uploads/article/6eqfTgs1MiuzHg4u8zzIUdTr0K6ZmSru6G6zbSG1.jpeg', 'lorem-ipsum-nedir', '2018-06-01 02:08:55', '2018-06-01 02:08:55', '0'),
(97, 'Neden Kullanırız?', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 22, 12, 'uploads/article/qMYG4ODI0vbjJh4dMDoxJHcdubaa3heTZRuXri5A.jpeg', 'neden-kullaniriz', '2018-06-01 02:09:26', '2018-06-01 02:09:26', '0'),
(98, 'Neden Kullanırız?', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 18, 12, 'uploads/article/trBIF6jwlydFrccqbtyTNbm9I3cWFnvAv51LmZyM.jpeg', 'neden-kullaniriz', '2018-06-01 02:10:38', '2018-06-01 02:10:38', '0'),
(99, 'Ekle kalmamış, aynı z', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 18, 12, 'uploads/article/KNhZcDf6OX02cxKJdczA3BXONZ8HS6gIEKWxD1xI.jpeg', 'ekle-kalmamis-ayni-z', '2018-06-01 02:13:41', '2018-06-01 02:13:41', '0'),
(100, 'Ipsum Nedir?', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p><p><br></p>', 18, 12, 'uploads/article/GpxWEBCvXLt8TGm48MhbppHqcPvcZ5GlNzSaJ5wd.jpeg', 'ipsum-nedir', '2018-06-01 02:14:08', '2018-06-01 02:14:08', '0'),
(101, 'Bilim İle İlgili Başlık', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında</p>', 18, 12, 'uploads/article/kIYajfQPM0lFVT7H2hkIjHPHjERZAKFxbLOboJ7a.jpeg', 'bilim-ile-ilgili-baslik', '2018-06-01 02:20:07', '2018-06-01 02:20:07', '1'),
(102, 'Magazin Haberi', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 24, 12, 'uploads/article/aXICkcS20gAvgQzo5kYV2qMhaSjuUIZqDOUgaBNw.jpeg', 'magazin-haberi', '2018-06-01 02:27:11', '2018-06-01 02:27:11', '1'),
(103, 'Magazin Haberi', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 24, 12, 'uploads/article/SVYSSgRYGXsPUuHlgkspHhDtEcwd9d2h9krxNJAL.jpeg', 'magazin-haberi', '2018-06-01 02:27:24', '2018-06-01 02:27:24', '1'),
(105, 'Fenere Büyük Şok', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 29, 12, 'uploads/article/sPn42pwFjZwjj1Yd0iYmTCPNEIoO4zExVxFUJNxh.jpeg', 'fenere-buyuk-sok', '2018-06-01 02:28:51', '2018-06-01 02:28:51', '0'),
(106, 'Akp ye Büyük Şok', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 25, 12, 'uploads/article/U3O0SOtT4z2XjZvFxXDV37u4tSDlzxxg28Z4wvDl.jpeg', 'akp-ye-buyuk-sok', '2018-06-01 02:29:17', '2018-06-01 02:29:17', '0'),
(107, 'Magazin Haberi', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 27, 12, 'uploads/article/unoIENgFZqPFO1Xz5jzBrPsEFX8vW8CPSlgbkV6h.jpeg', 'magazin-haberi', '2018-06-01 02:30:03', '2018-06-01 02:30:03', '1'),
(108, 'Magazin Haberi', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p><h2>Neden Kullanırız?</h2><p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>', 28, 12, 'uploads/article/7p3wZHcfHfDYCk78zTETz3c67qTCNJPo5KqSO1DQ.jpeg', 'magazin-haberi', '2018-06-01 02:30:59', '2018-06-01 02:30:59', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `ust_id` int(11) DEFAULT NULL,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `ust_id`, `tittle`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(18, NULL, 'Bilim', 'Bilim Hakkında Bişeyler', 'bilim', '2018-05-28 06:10:44', '2018-05-28 06:10:44'),
(19, NULL, 'Teknoloji', 'Teknoloji Hakkında Bişeyler', 'teknoloji', '2018-05-28 06:10:58', '2018-05-28 06:40:52'),
(20, 18, 'Bilim Alt', 'Bilim Alt Kategorisi', 'bilim-alt', '2018-05-28 06:11:20', '2018-05-28 06:11:20'),
(21, 19, 'Teknoloji Alt', 'Teknoloji Alt Kategorisi', 'teknoloji-alt', '2018-05-28 06:11:33', '2018-05-28 06:11:33'),
(22, NULL, 'Sağlık', 'Sağlık Kategorisi', 'saglik', '2018-05-30 01:24:42', '2018-05-30 01:24:42'),
(23, NULL, 'Yaşam', 'Yaşam Kategorisi', 'yasam', '2018-05-30 01:25:03', '2018-05-30 01:25:03'),
(24, NULL, 'Magazin', 'Magazin', 'magazin', '2018-06-01 02:24:33', '2018-06-01 02:24:33'),
(25, NULL, 'Gündem', 'Magazin', 'gundem', '2018-06-01 02:24:41', '2018-06-01 02:24:41'),
(26, NULL, 'Siyaset', 'Magazin', 'siyaset', '2018-06-01 02:24:49', '2018-06-01 02:24:49'),
(27, NULL, 'Televizyon', 'Magazin', 'televizyon', '2018-06-01 02:25:27', '2018-06-01 02:25:27'),
(28, NULL, 'Video', 'Magazin', 'video', '2018-06-01 02:25:32', '2018-06-01 02:25:32'),
(29, NULL, 'Spor', 'Spor Kategorisi', 'spor', '2018-06-01 02:27:57', '2018-06-01 02:27:57');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 9, 6, 'Yorum Yazdık kardeş', '1', NULL, '2018-05-29 06:34:26'),
(3, 9, 28, 'Yorum Yazdık kardeş', '1', '2018-05-29 17:53:39', NULL),
(4, 9, 29, 'Yorum', '1', '2018-05-29 17:53:39', NULL),
(5, 9, 29, 'bu da bi yorumsu', '1', '2018-05-29 17:53:39', NULL),
(6, 9, 28, 'Yorum Yazdık kardeş', '1', '2018-05-29 17:53:39', NULL),
(7, 9, 32, 'Yorum Yazdık kardeş', '1', '2018-05-29 17:53:39', NULL),
(8, 9, 6, 'dfbd', '1', '2018-05-30 04:26:14', '2018-05-30 04:28:01'),
(9, 9, 6, 'sdfvsdfvsdv', '1', '2018-05-30 04:28:25', '2018-05-30 04:28:51'),
(10, 9, 6, 'sdfbsdfb', '1', '2018-05-30 04:30:18', '2018-06-01 02:22:24'),
(11, 9, 6, 'deneme', '1', '2018-05-30 04:31:20', '2018-05-30 04:36:41'),
(12, 9, 6, 'Bu Yeni bir yorumdur\n\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.', '1', '2018-05-30 05:57:43', '2018-05-30 05:58:14'),
(13, 9, 33, 'Yeni Eklediğim İçeriğe Yeni Bir yorum Giriyorum', '1', '2018-05-30 06:07:21', '2018-05-30 06:07:35'),
(14, 12, 98, 'Deneme Yorumu Falan', '1', '2018-06-01 02:13:16', '2018-06-01 02:22:29'),
(15, 12, 100, 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' ana', '1', '2018-06-01 02:23:11', '2018-06-01 02:23:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeries`
--

CREATE TABLE `galeries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `galeries`
--

INSERT INTO `galeries` (`id`, `image`, `tittle`, `created_at`, `updated_at`) VALUES
(1, 'uploads/galery/T3upydnItb1aGJ01SX4kEPm1MNGkgF8d0flx5g6l.jpeg', 'C:\\Users\\mmehe\\AppData\\Local\\Temp\\php70B7.tmp', '2018-05-31 15:51:43', '2018-05-31 15:51:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_05_27_215414_create_categories_table', 2),
(7, '2018_05_28_105114_create_articles_table', 3),
(8, '2018_05_28_213038_create_pages_table', 4),
(9, '2018_05_29_075243_create_comments_table', 5),
(10, '2018_05_27_152553_create_settings_table', 6),
(12, '2018_05_30_221338_create_views_table', 7),
(14, '2018_05_31_064011_create_adwords_table', 8),
(15, '2018_05_31_185618_create_galeries_table', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `tittle`, `content`, `created_at`, `updated_at`, `slug`) VALUES
(2, 'Yeni Sayfa', '<p>Yeni SayfaYeni SayfaYeni Sayfa <strong>sdvsdvsdfc v <em>sdfvsdv</em></strong></p><p><strong><em><s>sdvsdvddd</s></em></strong></p>', '2018-05-29 02:38:42', '2018-05-30 11:35:59', 'Yeni Sayfa'),
(3, 'Hakkımızda', '<p>Hakkımızda sayfa a&ccedil;ıklaması</p>', '2018-05-29 03:46:54', '2018-05-29 03:46:54', 'hakkimizda'),
(4, 'İletişim', '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>', '2018-05-30 01:27:02', '2018-05-30 01:27:02', 'iletisim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutUs` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mapApi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `tittle`, `description`, `email`, `logo`, `aboutUs`, `facebook`, `twitter`, `instagram`, `google`, `pinterest`, `adress`, `phone`, `fax`, `created_at`, `updated_at`, `mapApi`) VALUES
(1, 'Laravel haber Scripti', 'Laravel Haber scripti açıklama', 'mehemmedntl85@gmail.com', 'uploads/dosyalar/5aMHtsL8gAMsHmmPEItktbuczimrOBRbmaH96KGm.png', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat, non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nSed ut perspiciatis unde omnis iste, voluptatem dolore mque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi.', 'nemerki', 'nemerki', 'nemerki', 'nemerki', 'nemerki', 'Tepecik Mh İnönü CD No 122', '5446727171', '5446727171', NULL, '2018-05-31 07:18:49', 'AIzaSyAIVeErlZaaAwruruTK1YVDXoByfnqRF4c');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `yetki` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `yetki`, `avatar`) VALUES
(9, 'Elmin', 'mehemmed@memmedli.az', '$2y$10$Agc/7GYpevdg8zXO2r1mXuF33M6UHeCwLw6ljEo8qsKJRgQO5m3xy', 'IOTYp19KE26nTnzP0vGKzaqU5wJojKkrjMDAl69lPdm5fDqLKvg8cVwIBhFX', '2018-05-28 16:14:42', '2018-05-31 05:21:49', NULL, 'uploads/user/WEoE31wohgRzc5fq6U2cra2O20yoIyhVx32oVwXh.png'),
(10, 'Fatih', 'test@app.com', '$2y$10$oyR9XyDAcKVUk2/qcc5/C.pMi.BGzV6GZ.nOBNszYCbr9ehI23/iG', 'zWiPsoLfl0gt7xA8pGz03JcEZ0H7PllDqiOKGFW6EVvDHU1xOA0vwYYXkvLm', '2018-05-29 09:47:16', '2018-05-29 09:47:16', 'admin', NULL),
(11, 'Babek', 'ar@jhvj.com', '$2y$10$Jf2n45KK/qg0skz5JkgsuOxs6u/pAgwaVczE6KcuDgvrVTkiDE/uC', 'PGLqrAfOOdN01I6N1rBhq4tJC4hcgI18aeLpZsumUWhFmB3oDLnnMIas853Y', '2018-05-29 11:33:46', '2018-05-31 04:17:53', NULL, 'uploads/user/F1FgvWrMm3n3MJssSjRPC7My3yDWTg8lDqQQ2hoX.png'),
(12, 'Muhammed', 'admin@admin.com', '$2y$10$/D0Z257J/gwHN/icSAvwEeCs0aa0C8TMeX/kW0QhhFiP6h2hYGp7O', NULL, '2018-05-31 05:26:25', '2018-05-31 05:26:25', 'admin', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `views`
--

CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `viewable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `viewed_at`) VALUES
(1, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:14:07'),
(2, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:14:09'),
(3, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:14:17'),
(4, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:14:18'),
(5, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:15:16'),
(6, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:15:44'),
(7, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:15:45'),
(8, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:15:53'),
(9, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:15:54'),
(10, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:17:50'),
(11, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:17:51'),
(12, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:17:54'),
(13, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:17:55'),
(14, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:19:37'),
(15, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-30 18:19:38'),
(16, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:29'),
(17, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:32'),
(18, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:36'),
(19, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:37'),
(20, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:41'),
(21, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:42'),
(22, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:45'),
(23, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:43:46'),
(24, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:47:50'),
(25, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:49:09'),
(26, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:49:10'),
(27, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:49:35'),
(28, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:49:36'),
(29, 'App\\Models\\Article', 35, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:56:39'),
(30, 'App\\Models\\Article', 35, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:56:40'),
(31, 'App\\Models\\Article', 37, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:56:56'),
(32, 'App\\Models\\Article', 37, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:56:57'),
(33, 'App\\Models\\Article', 37, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:57:04'),
(34, 'App\\Models\\Article', 37, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:57:05'),
(35, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:57:49'),
(36, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:57:51'),
(37, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:57:57'),
(38, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 01:57:59'),
(39, 'App\\Models\\Article', 26, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:01:45'),
(40, 'App\\Models\\Article', 26, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:01:47'),
(41, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:01:55'),
(42, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:01:56'),
(43, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:05'),
(44, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:06'),
(45, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:11'),
(46, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:12'),
(47, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:23'),
(48, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:24'),
(49, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:25'),
(50, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:02:27'),
(51, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:04:00'),
(52, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:04:02'),
(53, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:04:34'),
(54, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:04:35'),
(55, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:30'),
(56, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:31'),
(57, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:32'),
(58, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:33'),
(59, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:51'),
(60, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:53'),
(61, 'App\\Models\\Article', 28, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:53'),
(62, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:54'),
(63, 'App\\Models\\Article', 29, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:55'),
(64, 'App\\Models\\Article', 37, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:56'),
(65, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:57'),
(66, 'App\\Models\\Article', 35, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:58'),
(67, 'App\\Models\\Article', 37, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:26:59'),
(68, 'App\\Models\\Article', 26, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:27:00'),
(69, 'App\\Models\\Article', 35, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:27:01'),
(70, 'App\\Models\\Article', 26, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:27:02'),
(71, 'App\\Models\\Article', 6, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:27:35'),
(72, 'App\\Models\\Article', 6, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:27:35'),
(73, 'App\\Models\\Article', 26, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:27:58'),
(74, 'App\\Models\\Article', 26, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:27:59'),
(75, 'App\\Models\\Article', 26, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:28:04'),
(76, 'App\\Models\\Article', 26, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:28:05'),
(77, 'App\\Models\\Article', 26, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:28:07'),
(78, 'App\\Models\\Article', 26, 'vNzxMZzlFY4Pssm0tDdpeBklZjXLDJ1XXWPapVa1TWHeXLyZ1vJaDycXl6KFRCTBFMLB2I0N4fKpIZ3O', '2018-05-31 02:28:08'),
(79, 'App\\Models\\Article', 36, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:28:35'),
(80, 'App\\Models\\Article', 36, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 02:28:36'),
(81, 'App\\Models\\Article', 36, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 04:49:38'),
(82, 'App\\Models\\Article', 36, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 04:49:44'),
(83, 'App\\Models\\Article', 36, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 05:28:45'),
(84, 'App\\Models\\Article', 36, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 05:28:47'),
(85, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 08:58:35'),
(86, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 08:58:35'),
(87, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 08:58:37'),
(88, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 09:02:01'),
(89, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 09:02:13'),
(90, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 09:18:12'),
(91, 'App\\Models\\Article', 6, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-05-31 09:18:14'),
(92, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:13:00'),
(93, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:13:01'),
(94, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:14:11'),
(95, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:14:13'),
(96, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:17:53'),
(97, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:17:54'),
(98, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:19:13'),
(99, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:19:14'),
(100, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:20:09'),
(101, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:20:10'),
(102, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:21:57'),
(103, 'App\\Models\\Article', 98, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:21:58'),
(104, 'App\\Models\\Article', 100, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:22:45'),
(105, 'App\\Models\\Article', 100, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:22:46'),
(106, 'App\\Models\\Article', 100, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:23:47'),
(107, 'App\\Models\\Article', 100, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:23:48'),
(108, 'App\\Models\\Article', 94, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:26:48'),
(109, 'App\\Models\\Article', 94, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:26:50'),
(110, 'App\\Models\\Article', 94, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:29:21'),
(111, 'App\\Models\\Article', 94, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:29:22'),
(112, 'App\\Models\\Article', 100, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:39:38'),
(113, 'App\\Models\\Article', 100, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:39:39'),
(114, 'App\\Models\\Article', 103, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:40:37'),
(115, 'App\\Models\\Article', 103, 'cNRxFjLbLDEzhMzTM9TeGi6wQBgF0mg7MzTtS3qSbKXLPRoj7yJ6heAuEybO7HGPRZtwHwQZmir6SDnu', '2018-06-01 02:40:38');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Tablo için indeksler `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
