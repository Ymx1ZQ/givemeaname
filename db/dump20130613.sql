-- Adminer 3.6.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `children`;
CREATE TABLE `children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `money_collected` int(11) NOT NULL,
  `money_paid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name_id` (`name_id`),
  KEY `organization_id` (`organization_id`),
  CONSTRAINT `children_ibfk_1` FOREIGN KEY (`name_id`) REFERENCES `names` (`id`) ON DELETE CASCADE,
  CONSTRAINT `children_ibfk_2` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0209a83d46158a1219a385a03fa607a7',	'10.12.91.100',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369273458,	''),
('0485716deee15a9910f62315e26c2307',	'10.93.11.250',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.34 Safari/534.24',	1369943200,	''),
('0548510435acb1e0c3f56649f11cccb4',	'10.60.139.168',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369481713,	''),
('06501f29c075cabf473dad058b61958b',	'10.68.189.245',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/536.29.13 (KHTML, like Gecko) Version/6.0.4 Safari/536.29.13',	1370990742,	''),
('081e7a89c3f6adc02ee9e71313313fa1',	'10.147.212.37',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1369666595,	''),
('08a8e98dd447ff94c6fee1cb3009c75c',	'10.147.212.37',	'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31',	1369675708,	''),
('092e25fa8e11cde1dd2b0048cd8992d1',	'10.62.147.42',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370498356,	''),
('0e701bef42094f04a5fab602955dc587',	'10.137.14.7',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369453751,	''),
('12810c87875d634f4054df5b658c2b4a',	'10.87.89.229',	'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31',	1369210181,	''),
('17124ba13e2a3fb64cfcd436e08a4ce9',	'10.190.127.5',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369835012,	''),
('18dc6d58764b167af12c2f9e91d1b190',	'10.40.255.198',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369999020,	''),
('19fe8984b1e7838b4fb2e1c6718a7e13',	'10.12.50.235',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369601802,	''),
('1a33947c158c4474f869e6208052f238',	'10.91.1.234',	'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT)',	1369838613,	''),
('1c88aae4bd37042e8fcf28467528c8d2',	'10.147.212.37',	'Wget/1.12 (linux-gnu)',	1369846464,	''),
('1cfbd9eadc9ea81083ec6e90d570c905',	'10.10.159.19',	'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36',	1370836113,	''),
('215b739053f4a8e5fe70110503e61c5d',	'10.10.203.248',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1371115839,	''),
('263daded3fc3515fc76bf5b9de78fefa',	'10.123.86.92',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369989826,	''),
('271a58f0f9bffe2f59b342a97b9a3aa2',	'10.240.241.123',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369551246,	''),
('28cb83e0d9af172439a98e66af931065',	'10.87.127.195',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369751420,	''),
('2acac07ed7e65ec3e6e71f2d4e62c84f',	'10.68.189.189',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369496928,	''),
('2b6a48b94b52789195457229b42f4636',	'10.42.122.194',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1370791609,	''),
('2fc297ed2b7a93404fb5a57b77fbeedc',	'10.91.6.160',	'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT)',	1369838614,	''),
('330c58fef07a63b20c734cc240a1ca23',	'10.68.182.136',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369507904,	''),
('33efeeba78e743a879847d6931e551fc',	'10.87.127.195',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369583092,	''),
('3417fb96d0833085594a5499160a0f0a',	'10.215.17.194',	'Java/1.6.0_26',	1370066136,	''),
('353b4d1c3a27a9fa2ab5dd3900f0c7b0',	'10.92.241.79',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369469221,	''),
('3549410a40860b4f4f78bac8c8290419',	'10.68.219.183',	'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)',	1369779125,	''),
('36a9af67d74ccdccacad861a654e71fb',	'10.152.169.208',	'Java/1.6.0_26',	1369713711,	''),
('3775cd51a07dffb04f2ec18c1ae36496',	'10.10.129.32',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370030339,	''),
('37d5ded934ff9165b3b982804281a15f',	'10.38.127.83',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369959116,	''),
('37d7b18a31c5c244c25b141558e496ae',	'10.62.115.92',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369720685,	''),
('39ec90ae78e7c42491e6d44f39a53dc4',	'10.10.11.166',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1371055953,	''),
('3a89f0d9dfed60a3330d35258f9dc5f6',	'10.42.117.146',	'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36',	1370415063,	''),
('3d1307df610994dc4aa02efe7a68a93f',	'10.42.117.146',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1370791611,	''),
('3e21d13a351f2226295e47b2c720142f',	'10.93.11.250',	'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0',	1370461724,	''),
('3eab8431ecf7291fa36ada8a4a1eeb50',	'10.151.87.99',	'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',	1370835940,	''),
('3fa28b84ad65cc08bdad9b94435a60cd',	'10.60.158.254',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1369270534,	''),
('40af21e7c7966d0b945591280b3defd3',	'10.137.27.249',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370239115,	''),
('41a2f6d810ea64d86c6018cf12da3914',	'10.32.214.150',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369273625,	''),
('42dc40e6175d215293007d2cba1853d3',	'10.40.202.71',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.65 Safari/537.31',	1370382204,	''),
('4a0e40671fab71a6ea493b1272a2c616',	'10.68.219.183',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369757109,	''),
('4b134da290c28fd7644a1e7f315d7ea2',	'10.90.249.246',	'Mozilla/5.0 (Windows; U; Windows NT 5.1)',	1370892625,	''),
('4b515a4ccc89ee9e81e84fa15acba1b1',	'10.93.11.250',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369486434,	''),
('4fe020707f7ca6ee7766c94f36b561fe',	'10.38.127.83',	'Mozilla/5.0 (compatible; Ezooms/1.0; ezooms.bot@gmail.com)',	1370947873,	''),
('52087fc81bf17b095d0b46b62a45fb4f',	'10.6.55.58',	'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31',	1369351580,	''),
('548ccde1ea0729ce3d89566ef0d8dcf0',	'10.12.181.252',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1370876275,	''),
('55fc6c05f631b3175a7f42218fce2442',	'10.62.147.42',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1369775287,	''),
('57ae341a7ff16a5ca45edb4161e94754',	'10.68.39.172',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370247631,	''),
('591ecaddb12e03bf3d6e8759d2b6adba',	'10.10.159.19',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370285221,	''),
('5983074ec29c7c6d4acfa9b3c7b23f1a',	'10.93.89.126',	'Mozilla/5.0 (iPad; CPU OS 6_1_3 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10B329 Safari/8',	1371101222,	''),
('59f9ae9daa6b67c8968ae8152bb985ef',	'10.87.123.203',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369749911,	''),
('5a08387f97614b09e919a85e02052bf4',	'10.32.214.150',	'Mozilla/5.0 (compatible; Ezooms/1.0; ezooms.bot@gmail.com)',	1369688638,	''),
('5b8a23e42350f07e37378fe6ebb45a2f',	'10.38.97.142',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370746887,	''),
('5dc9f70fdebd4e4133302e8bc5c99dcb',	'10.224.67.136',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1370977482,	''),
('5edc065e7ef5a192ec4d516d0e9daa52',	'10.93.89.126',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370305928,	''),
('6043970eda9c27fb5d61989e55d1e486',	'10.87.141.251',	'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31',	1369646845,	''),
('6194cd074f9003521f6bfd4577af2e72',	'10.120.243.135',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369641236,	''),
('62af40dc6cc04c3cb4f9281384a02987',	'10.226.94.241',	'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0',	1369340923,	''),
('64734447f4a5e3ed322e384645240be0',	'10.12.91.100',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369831558,	''),
('6571d039c1022831c770ce90f39a5e47',	'10.10.159.19',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1371103283,	''),
('6752462ec114c01a0e12ad387ba34458',	'10.87.78.208',	'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0',	1371106857,	'a:7:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:21:\"maolo.peola@gmail.com\";s:2:\"id\";s:4:\"3261\";s:7:\"user_id\";s:4:\"3261\";s:8:\"group_id\";s:1:\"2\";s:5:\"group\";s:7:\"members\";s:26:\"flash:old:suggested_fields\";a:1:{s:5:\"email\";s:21:\"maolo.peola@gmail.com\";}}'),
('693207c5e2fa0f817a4cc1948af3a9b5',	'10.137.19.35',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1369803926,	''),
('69cea2c21b1f140deb27826416ab808f',	'10.68.39.172',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369842742,	''),
('6b548f865914af3527340ebee3da03fb',	'10.87.141.251',	'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1',	1370403281,	''),
('6d21267e4084f51dfeaa5f6a2d9419a2',	'10.215.26.31',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369563100,	''),
('6d849a2f38329aca83b81440e99c8954',	'10.90.249.246',	'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',	1370361610,	''),
('6e1d2118053e393b4632abfb382411cf',	'10.120.243.135',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1371016793,	''),
('6e56cd45d88cf3b777f6aac217d9b67d',	'10.215.26.31',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369529499,	''),
('6e827726215224ced7439f02210105a5',	'10.215.109.40',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369436094,	''),
('6fad116db6a534c13b34501172aa140a',	'10.215.109.40',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369787722,	''),
('70b1d98fe551e7420518b80aa4faf0d9',	'10.68.219.183',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369570857,	''),
('71c7e36d4cd4f97f20edaf61c588c3b7',	'10.10.159.19',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1371089953,	''),
('7721c4916a95341a9f285ea2efc3a43e',	'10.191.2.112',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369551306,	''),
('7988cda8abf12e474b076755a5aaef64',	'10.93.18.63',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1369613738,	''),
('7e19f59053f6289326a7e4b6ee3c1504',	'10.38.127.83',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369807653,	''),
('8089d4b40840a9080755d4c8a0de64f0',	'10.44.195.29',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369431116,	''),
('814cbb490c31e53a704564c141d197f0',	'10.123.83.233',	'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT)',	1370071658,	''),
('8173d923af512c1e89314a861b5c177b',	'10.93.18.63',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369430488,	''),
('838a91fdf356395ddf30e603bdfed55b',	'10.139.40.97',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369546097,	''),
('83e1a00edf67cafda23c2074782e96b2',	'10.60.158.254',	'Mozilla/5.0 (iPad; CPU OS 6_1_3 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10B329 Safari/8',	1370913224,	''),
('86ffb5d7fd083f2446fd400603354a84',	'10.12.91.100',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369273741,	''),
('8732a58bf45903b42266e455bee7c6ba',	'10.123.86.92',	'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0)',	1370501265,	''),
('8a0bf31bbc9e592abcea6f40acdb9719',	'10.38.159.214',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1370477046,	''),
('8e18e854d8865ab69813f1fc089a701e',	'10.224.67.136',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369807506,	''),
('8e9041f2fb16760dd13f266edd1e2c3b',	'10.93.18.63',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1369376766,	''),
('903ba705035bebf7611e760e66d663db',	'10.151.62.16',	'Mozilla/5.0 (Linux; U; Android 4.0.3; en-us; HTC_X515C Build/IML74K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 ',	1369943168,	''),
('91f48017788231f9b361d5309852cb01',	'10.62.31.31',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370224364,	''),
('940b423f2856ad63e26b5baddc97e969',	'10.6.111.178',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369632158,	''),
('949783b3478a1df15cc69cda59295f0b',	'10.151.50.157',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370025809,	''),
('94a91e3144cb8df8b6277946ee016b1c',	'10.123.86.92',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1370047896,	''),
('94c6b9c66982c1189f26d8ff2be1645f',	'10.62.147.42',	'0',	1369269653,	''),
('96529d4755c2609cf6a363893d1584de',	'10.240.31.96',	'Java/1.6.0_26',	1370394863,	''),
('97768ec5ea8d288a004970ee36578271',	'10.224.29.205',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369808050,	''),
('979d3c4fe95b9b3ecc07bb051e61fcc9',	'10.38.97.142',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370759976,	''),
('98c8aafccf5f168c4b8ae84d1708a97c',	'10.90.249.246',	'Opera/9.64 (Windows NT 5.1; U; en) Presto/2.1.1',	1371039073,	''),
('9a0b537b6ce9748639c196181226310f',	'10.42.122.194',	'BlackBerry9000/4.6.0.167 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/102 ips-agent',	1370403279,	''),
('9a0ca58365439f07d0c9a4343446033f',	'10.93.89.126',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370303751,	''),
('9a7d88de0047cf6c25bd70e2718dc255',	'10.93.55.34',	'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1',	1370403282,	''),
('9caf4beca346a198c8b7cd6fc86a1853',	'10.38.127.83',	'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',	1370382203,	''),
('9e1aaa667b37af185bd62b53495aade4',	'10.93.79.21',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369538639,	''),
('9e43e0fe99c895ed5ecd547a9ff3ca75',	'10.191.73.63',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370920914,	''),
('9eee8e1f10cca12870e2c9c757355ac3',	'10.139.40.97',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369573062,	''),
('9ef4a10eb80b704bbf3312916c2d8caa',	'10.6.111.178',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369529269,	''),
('a13f10cd3aa8163fc1a2ff1ef01da4e2',	'10.151.62.16',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370235530,	''),
('a222fb5f8ce03b2e844757722faba1ca',	'10.40.43.143',	'Mozilla/5.0 (iPad; CPU OS 6_1_3 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10B329 Safari/8',	1371058872,	''),
('a27886cbbee39a6d91d26a83de053157',	'10.93.11.250',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369781505,	''),
('a2afaa658d1341a42bd23a41cc4dd507',	'10.120.246.3',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370445038,	''),
('a36a3a905d78ebaf858368d84b58303e',	'10.40.43.143',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370256270,	''),
('a491f4fa8a03b9b4ac46c38d68f1199f',	'10.62.31.31',	'Opera/9.80 (J2ME/MIDP; Opera Mini/4.1.15082/30.3112; U; en) Presto/2.8.119 Version/11.10',	1370713829,	''),
('a4bf4261ae017a41b879e3c021da6425',	'10.92.230.176',	'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT)',	1370071659,	''),
('a4f64ddad9190d359ffe6996a534fbb2',	'10.87.123.203',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370160585,	''),
('a5084fa50137d3fcb5ca1a5dff418fdf',	'10.6.111.178',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369529487,	''),
('a7806664b54ad4ed992fd34f29f0b469',	'10.87.135.145',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369989856,	''),
('abd59b4e9b28aa4b8c0083dfafb79e02',	'10.93.79.21',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369777616,	''),
('ac9ded8ec93f31a1a85fe33131681fb8',	'10.141.166.32',	'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',	1370382663,	''),
('aea7d810468cad5ac9eded838d28332b',	'10.12.91.100',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369901321,	''),
('afee03823d8d095b8663956d8250c5b0',	'10.123.86.92',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370016998,	''),
('b4d8aab3d1c0a0de3d3a4b32653d529a',	'10.93.55.34',	'Mozilla/5.0 (Linux; U; Android 4.1.2; en-us; GT-N7105 Build/JZO54K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 M',	1369201463,	''),
('b5046535ad02b4795536d04be8d46b0e',	'10.241.82.47',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369529052,	''),
('b70b515403fe192891e0becea3e6d4e5',	'10.68.17.199',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370049724,	''),
('b844e80d040061f4b03181eed0ea8978',	'10.190.73.50',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369532687,	''),
('b862fa1c09cc63562b76b554102c5032',	'10.68.182.136',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369786318,	''),
('ba625d2217a49faa842d41545596aa38',	'10.93.89.126',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1370233146,	''),
('bc77c919aaf59dd73c4022c58cb32ca4',	'10.10.102.212',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1371049960,	''),
('bd4f524149ea89138bd3da08fbb9c08b',	'10.137.14.7',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369545698,	''),
('bec8fe86399934bdaee269545bda74c5',	'10.87.123.203',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369469150,	''),
('befb5b5dcc294f5b22b2c2cdface701e',	'10.10.22.179',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370408910,	''),
('bf256b2fecbf2cb3dbcdb053480e1d5c',	'10.92.241.79',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370581587,	''),
('c035619f04e2ac43247cf71a9157dc9c',	'10.68.150.242',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',	1371149134,	''),
('c0b4092cf8c204270fb0614de2e56f93',	'10.91.1.234',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369847189,	''),
('c35fb663889ad8869a2384407ae0fe79',	'10.91.1.234',	'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36',	1370368995,	''),
('c37566e2495235bcf286f2caa3233367',	'10.10.5.79',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.65 Safari/537.31',	1369284596,	''),
('c4483fe2c229ac2ee68235678ece28c1',	'10.123.83.233',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',	1370441036,	''),
('c4d521061301d69b789f501ab924fcf3',	'10.10.103.253',	'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',	1370913277,	''),
('c961e8c1c16152a00f04d7e2f22ef7b7',	'10.137.14.7',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369562906,	''),
('ca4726ac4581c0a94d24317253d0b55a',	'10.93.18.63',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369538730,	''),
('cab22c920998126063eee10ec187f3be',	'10.224.67.136',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369967492,	''),
('cc3896fd4b26dba84188533df1e78108',	'10.68.17.199',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370051099,	''),
('cdd107f28723e8bd2e7415e885648af5',	'10.10.103.253',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370031353,	''),
('d4048f9073ea05eb4b18cf6ec38a4df9',	'10.68.143.82',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370839418,	''),
('d48fdf72f9262ff0d7dffcb3ac189d0f',	'10.190.163.0',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369413638,	''),
('d53717adc52a43847f21ebd654209388',	'10.215.17.194',	'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36',	1370458531,	''),
('d582a99df7e2e5db13c03beeb0aeb369',	'10.40.87.22',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370313638,	''),
('d78a5b4787a4823eb5ecd7ef8b864f54',	'10.38.97.142',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369955871,	''),
('dab4e291f76e0128e1ef352d437da7c2',	'10.190.166.188',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369631821,	''),
('db3a024f95c2720010b9eced4374e299',	'10.93.79.21',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369469210,	''),
('db5eaddd8be49ba3431cd290bb820d3f',	'10.151.87.99',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369505639,	''),
('dc1c9ddf71f51bc62001e7499bb6a84d',	'10.92.241.79',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369486393,	''),
('ddf77d01aae7ac02e87bf51eb4fcff2b',	'10.190.73.50',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370203498,	''),
('de37f43c28555d18400e6e309f551fa9',	'10.87.141.251',	'Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.9.0.13) Gecko/2009073022 Firefox/3.5.2 (.NET CLR 3.5.30729) SurveyBot/',	1369312752,	''),
('e04cce9791f146b17aaa085ef5a6a386',	'10.68.219.183',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369570998,	''),
('e28170acffdb5c0a2634692a484f2927',	'10.87.95.122',	'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0',	1370291920,	''),
('e46da83f0b3e0bf5d93854dcd4420f12',	'10.87.141.251',	'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1',	1370403277,	''),
('e63e0166e10dcda233827711f0eb443c',	'10.12.181.252',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1371065953,	''),
('e7bd37559f8c13beb203ff6f59d21cd1',	'10.123.83.233',	'Mozilla/5.0 (compatible; Ezooms/1.0; ezooms.bot@gmail.com)',	1370372004,	''),
('e7c013bbb1ace00440f37f3971203fcb',	'10.40.43.143',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369273167,	''),
('eb113ec1bfb1049ef2aac395fb249d9f',	'10.137.27.249',	'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.110 Safari/537.36',	1370991006,	'a:6:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:21:\"maolo.peola@gmail.com\";s:2:\"id\";s:4:\"3261\";s:7:\"user_id\";s:4:\"3261\";s:8:\"group_id\";s:1:\"2\";s:5:\"group\";s:7:\"members\";}'),
('eb173606da7e14567ba7af7b2da6ee02',	'10.93.55.34',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369582899,	''),
('ecd09742220a0daff01fc75df0f8b6a2',	'10.93.11.250',	'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1',	1370403280,	''),
('ece74616e86291ab71059dee4b0aa245',	'10.87.89.229',	'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1',	1370403283,	''),
('ee9c93349c8dfb3a311d870361432d50',	'10.12.181.252',	'Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.9.0.13) Gecko/2009073022 Firefox/3.5.2 (.NET CLR 3.5.30729) SurveyBot/',	1370284673,	''),
('eef0ee733d9e620c3ccece29a3cb37e7',	'10.10.206.42',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369831248,	''),
('f5e88d8007df66c543c4c7cd6917baac',	'10.40.37.199',	'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',	1371051953,	''),
('f8ae1286e38f8348852743c4ae660cde',	'10.140.9.86',	'Mozilla/5.0 (compatible; Ezooms/1.0; ezooms.bot@gmail.com)',	1370998649,	''),
('fbcea3c04f488c2da3f8690fe1a7277a',	'10.87.123.203',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369469221,	''),
('fccf1bbc58d572531930b6819a3a7c2c',	'10.40.202.71',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370287056,	''),
('fe691771da5fe81d6b729af1f4a2c23d',	'10.68.98.73',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370275551,	''),
('fee17abd0b8d3213663a60b63918fa1b',	'10.93.79.21',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1370605753,	''),
('ff2f9c1b82cffb721b114f8764526ad0',	'10.190.127.5',	'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',	1369345354,	''),
('ffd6063ce28f6a0e33426293a40be845',	'10.137.19.35',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	1369507916,	'');

DROP TABLE IF EXISTS `donations`;
CREATE TABLE `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name_id` int(11) NOT NULL,
  `proposer` tinyint(1) NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL,
  `comment` text NOT NULL,
  `video_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `name_id` (`name_id`),
  CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`name_id`) REFERENCES `names` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `donations` (`id`, `user_id`, `name_id`, `proposer`, `amount`, `comment`, `video_link`) VALUES
(1,	3251,	1,	0,	0,	'to see how it works:)',	''),
(11,	3271,	11,	1,	0,	'Information wants to be free',	''),
(21,	3271,	21,	1,	0,	'Lucy in the Sky with Diamonds',	''),
(31,	3261,	21,	0,	50,	'asd',	''),
(41,	3261,	21,	0,	12,	'because I like it',	''),
(51,	3261,	31,	1,	0,	'123',	''),
(61,	3261,	41,	1,	0,	'sdfsf',	'');

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1,	'admin',	'Administrator'),
(2,	'members',	'General User');

DROP TABLE IF EXISTS `meta`;
CREATE TABLE `meta` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `meta` (`id`, `user_id`, `first_name`, `last_name`) VALUES
(3251,	3251,	'alp',	'keser'),
(3261,	3261,	'Paolo',	'Meola'),
(3271,	3271,	'Raffaele',	'Mauro');

DROP TABLE IF EXISTS `names`;
CREATE TABLE `names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT '0) male; 1) female',
  `funded` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `names` (`id`, `name`, `gender`, `funded`) VALUES
(1,	'well done',	0,	0),
(11,	'Ada',	0,	0),
(21,	'Aurora',	0,	0),
(31,	'asdasd',	0,	0),
(41,	'asd',	0,	0);

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `children` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `type` varchar(1) NOT NULL DEFAULT 'b',
  `timezone` varchar(5) NOT NULL DEFAULT 'UP1',
  `fbuserid` varchar(64) DEFAULT NULL,
  `linkedinuserid` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `group_id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `remember_code`, `created_on`, `last_login`, `active`, `type`, `timezone`, `fbuserid`, `linkedinuserid`) VALUES
(3251,	2,	'10.68.182.136',	'yalpkeser@gmail',	'20579fad9e3b820fbd5d842d60443ef9005fbd2c',	NULL,	'yalpkeser@gmail.com',	NULL,	NULL,	'24dfc6b32271a17e07b7ef9e7ab00aff1eb99674',	1369775754,	1370380490,	1,	'b',	'UP1',	NULL,	NULL),
(3261,	2,	'10.123.86.92',	'maolo.peola@gma',	'544cae5ea519a1bf9cec9daa789b75ee16255e65',	NULL,	'maolo.peola@gmail.com',	NULL,	NULL,	'4a3ee32fa62c71e6d8aca5edddc4f84cccece1f0',	1370380991,	1371106877,	1,	'b',	'UP1',	NULL,	NULL),
(3271,	2,	'10.91.1.234',	'raffa.mauro@gma',	'f35244c2616c495209ff3d5ddfd838db93939b19',	NULL,	'raffa.mauro@gmail.com',	NULL,	NULL,	'372895f62ae77ee01eed1f0588ff8c8bb5de26c6',	1370440558,	1370440558,	1,	'b',	'UP1',	NULL,	NULL);

-- 2013-06-13 18:51:54
