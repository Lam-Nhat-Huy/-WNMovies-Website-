-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2024 at 06:35 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnmovies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` int DEFAULT '0',
  `user_id` int NOT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `parent_id`, `user_id`, `is_deleted`, `created_at`, `updated_at`) VALUES
(55, 'sản phẩm của bạn như shit dị á', 0, 0, 0, '2024-01-10 11:16:42', '2024-01-10 11:16:42'),
(56, 'sao bạn nói dị', 55, 0, 0, '2024-01-10 11:16:42', '2024-01-10 11:16:42'),
(57, 'áo đẹp lắm nha', 0, 0, 0, '2024-01-10 11:16:42', '2024-01-10 11:16:42'),
(58, 'sốp làm ăn uy tín lắm nha', 0, 0, 0, '2024-01-10 11:16:42', '2024-01-10 11:16:42'),
(59, 'hihii', 58, 0, 0, '2024-01-10 11:16:42', '2024-01-10 11:16:42'),
(60, 'hihii', 58, 0, 0, '2024-01-10 11:16:42', '2024-01-10 11:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `thumb_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `origin_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_general_ci,
  `year` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lang` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quality` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_embed` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `thumb_url`, `origin_name`, `content`, `year`, `time`, `slug`, `lang`, `quality`, `status`, `category`, `country`, `link_embed`, `is_deleted`, `created_at`) VALUES
(96, 'Thám Tử Lừng Danh Conan 26: Tàu Ngầm Sắt Màu Đen', 'https://gategame.vn/wp-content/uploads/2023/02/3.jpeg', 'Detective Conan: Black Iron Submarine', 'Địa điểm lần này được đặt ở vùng biển gần đảo Hachijo-jima, Tokyo. Các kỹ sư từ khắp nơi trên thế giới đã tập hợp để vận hành toàn diện \\&#34;Phao Thái Bình Dương\\&#34;, một cơ sở ngoài khơi để kết nối các camera an ninh thuộc sở hữu của lực lượng cảnh sát trên toàn thế giới. Một thử nghiệm về một \\&#34;công nghệ mới\\&#34; nhất định dựa trên hệ thống nhận dạng khuôn mặt đang được tiến hành ở đó. Trong khi đó, Conan và Đội thám tử nhí đến thăm Hachijo-jima theo lời mời của Sonoko và nhận được một cuộc điện thoại từ Subaru Okiya thông báo rằng một nhân viên Europol đã bị sát hại ở Đức bởi Jin của Tổ chức Áo đen. Conan lo lắng, lẻn vào cơ sở và phát hiện ra rằng một nữ kỹ sư đã bị Tổ chức Áo đen bắt cóc...! Hơn nữa, một ổ USB chứa một số thông tin nhất định mà cô ấy sở hữu lại lọt vào tay tổ chức... Một bóng đen cũng len lỏi vào Ai Haibara..', '2023', '110', 'tham-tu-lung-danh-conan-26-tau-ngam-sat-mau-den', 'Thuyết minh', 'HD', 'Đang chiếu', 'Hành động', 'Nhật Bản', 'https://1080.opstream4.com/share/64a2ced1a3bc35f45f1c3bdb0c8b256f', 0, '2024-01-05 11:44:32'),
(97, 'Biệt đội cánh cụt vùng Madagascar', 'https://img.ophim10.cc/uploads/movies/biet-doi-canh-cut-vung-madagascar-thumb.jpg', 'Penguins of Madagascar: The Movie', 'Penguins of Madagascar: The Movie', '2014', '1g 32ph', 'biet-doi-canh-cut-vung-madagascar', 'Vietsub', 'HD', 'completed', 'Gia Đình', 'Âu Mỹ', 'https://1080.opstream4.com/share/dd77279f7d325eec933f05b1672f6a1f', 0, '2024-01-05 11:58:21'),
(98, 'Tìm lại chính mình', 'https://img.ophim10.cc/uploads/movies/tim-lai-chinh-minh-thumb.jpg', 'Tell Me Who I Am', 'Trong bộ phim tài liệu này, Alex bị mất trí nhớ và tin tưởng câu chuyện quá khứ do anh sinh đôi Marcus kể lại. Nhưng Marcus đang che giấu một bí mật gia đình đen tối.', '2019', '1g 25ph', 'tim-lai-chinh-minh', 'Vietsub', 'HD', 'completed', 'Tài Liệu', 'Anh', 'https://aa.opstream6.com/share/46f76a4bda9a9579eab38a8f6eabcda1', 0, '2024-01-05 11:59:24'),
(99, 'Mỹ vị hầm ngục', 'https://img.ophim10.cc/uploads/movies/my-vi-ham-nguc-thumb.jpg', 'Delicious in Dungeon', 'Hầm ngục, rồng… và món quái vật hầm thơm ngon!? Các nhà thám hiểm đột nhập vào vương quốc trúng lời nguyền bị chôn vùi để cứu bạn mình và gây náo loạn trên đường đi.', '2024', '26 phút/tập', 'my-vi-ham-nguc', 'Vietsub', 'HD', 'ongoing', 'Khoa Học', 'Nhật Bản', 'https://hdbo.opstream5.com/share/a19be16e356ec7af4662e553cc740906', 0, '2024-01-05 11:59:48'),
(106, 'Nguyệt Thượng Tâm Thần', 'https://img.ophim10.cc/uploads/movies/nguyet-thuong-tam-than-thumb.jpg', 'My Jealous Husband', 'Một nhân duyên hoang đường được nhà trời ban hôn, kẻ hay ghen ', '2023', '10 phút/tập', 'nguyet-thuong-tam-than', 'Vietsub', 'HD', 'completed', 'Chính kịch', 'Trung Quốc', 'https://hdbo.opstream5.com/share/5392c2f4a7ba34fdf47a1c5208f09640', 0, '2024-01-08 02:13:18'),
(107, 'Thám Tử Lừng Danh Conan: Âm Mưu Trên Biển', 'https://img.ophim10.cc/uploads/movies/tham-tu-lung-danh-conan-am-muu-tren-bien-thumb.jpg', 'Detective Conan: Strategy Above the Depths', 'Một con tàu thuộc sở hữu của Tập đoàn Yatsushiro đánh một tảng băng trôi và chìm xuống. Mười lăm năm sau, nhóm Yatsushiro mời Thám tử Kogoro và bạn bè của mình trên một hành trình nơi một vụ giết người sau đó diễn ra. Bây giờ Conan và cảnh sát cố gắng xác định kẻ giết người.', '2005', 'Đang cập nhật', 'tham-tu-lung-danh-conan-am-muu-tren-bien', 'Vietsub', 'HD', 'completed', 'Gia Đình', 'Nhật Bản', 'https://kd.opstream3.com/share/309928d4b100a5d75adff48a9bfc1ddb', 0, '2024-01-09 14:12:20'),
(110, 'Cô Đi Mà Lấy Chồng Tôi', 'https://img.ophim10.cc/uploads/movies/co-di-ma-lay-chong-toi-thumb.jpg', 'Marry My Husband', 'Khi Ji-won, một bệnh nhân ung thư 37 tuổi, bước vào gặp chồng và cũng là bạn thân của cô, cô nhận ra cả cuộc đời mình chỉ là một lời nói dối. Tệ hơn nữa, cô lại chết một cách bi thảm dưới tay chồng mình. Liệu mọi chuyện có khác đi nếu cô ấy đưa ra những lựa chọn khác? May mắn thay cho Ji-won, cô có cơ hội viết lại số phận của mình khi được tái sinh thành bản thân lúc trẻ. Lần này, cô thề sẽ sống một cuộc sống hạnh phúc. Nhưng trước hết là sự trả thù. Kế hoạch của cô ấy? Để gả người bạn thân cũ của mình cho người chồng dối trá, lừa dối của mình.', '2024', '80 phút/tập', 'co-di-ma-lay-chong-toi', 'Vietsub', 'HD', 'ongoing', 'Chính kịch', 'Hàn Quốc', 'https://vie2.opstream7.com/share/0ae3f79a30234b6c45a6f7d298ba1310', 0, '2024-01-09 22:46:52'),
(111, 'Anh Cũng Có Ngày Này', 'https://img.ophim10.cc/uploads/movies/anh-cung-co-ngay-nay-thumb.jpg', 'My Boss', ' Nam chính Tiền Hằng (Trần Tinh Húc đóng) là ông chủ đẹp trai, nghiệp vụ nghề nghiệp luật sư rất giỏi. Nữ chính là cô sinh viên trường luật mới ra trường.Mối quan hệ của hai người là quan hệ oan gia nữa ông chủ lập dị với cô nhân viên có phần hơi ngáo, sau sự tiếp xúc dần dần hoà hợp và nảy sinh tình cảm.', '2024', '45 phút/tập', 'anh-cung-co-ngay-nay', 'Vietsub', 'HD', 'ongoing', 'Tình Cảm', 'Trung Quốc', 'https://vie2.opstream7.com/share/cd4bb35c75ba84b4f39e547b1416fd35', 0, '2024-01-09 23:21:39'),
(112, 'Em Biết Em Yêu Anh', 'https://img.ophim10.cc/uploads/movies/em-biet-em-yeu-anh-thumb.jpg', 'I Know I Love You', 'Em Biết Em Yêu Anh - I Know I Love You xoay quanh 2 nhân vật Triệu Tấn và Hứa Nặc, Những người trưởng thành bị thúc giục kết hôn. Hôn nhân qua mai mối, sự khó khăn của ba mẹ, sự hiểu lầm của bạn bè khiến họ rơi vào khủng hoảng. Nhưng với sự quan tâm và chăm sóc của Triệu Tấn đã khiến Hứa Nặc cảm nhận được sự ấm áp mà cô chưa từng trải qua. Cô dùng tình yêu này vào công việc cắm hoa khiến mình trở thành một người bán hoa nổi tiếng.', '2023', '45 phút/tập', 'em-biet-em-yeu-anh', 'Vietsub', 'HD', 'ongoing', 'Chính kịch', 'Trung Quốc', 'https://1080.opstream4.com/share/4cd436bf13296d674d046c80f7e7ecde', 0, '2024-01-09 23:21:47'),
(113, 'Hướng Về Em', 'https://img.ophim10.cc/uploads/movies/huong-ve-em-thumb.jpg', 'All of Her', 'Gu Ze Jia trở về Trung Quốc với tư cách là anh trai sinh đôi của mình Gu Ze An để trả thù và thấy mình vướng vào mối quan hệ bạo dâm với Yan Zhen.', '2024', '10 phút/tập', 'huong-ve-em', 'Vietsub', 'HD', 'ongoing', 'Chính kịch', 'Trung Quốc', 'https://1080.opstream4.com/share/09bc9ab48b2e176030c8351b8aa38226', 0, '2024-01-09 23:22:20'),
(114, 'Mạch Thượng Nhân Như Ngọc', 'https://img.ophim10.cc/uploads/movies/mach-thuong-nhan-nhu-ngoc-thumb.jpg', 'Special Lady', '', '2023', '45 phút/tập', 'mach-thuong-nhan-nhu-ngoc', 'Vietsub', 'HD', 'ongoing', 'Chính kịch', 'Trung Quốc', 'https://hdbo.opstream5.com/share/298fbf7365715ccb63b71724722f7a21', 0, '2024-01-09 23:23:22'),
(115, 'Người Phiên Dịch Của Chúng Tôi', 'https://img.ophim10.cc/uploads/movies/nguoi-phien-dich-cua-chung-toi-thumb.jpg', 'Our Interpreter', '', '2024', '45 phút/tập', 'nguoi-phien-dich-cua-chung-toi', 'Vietsub', 'HD', 'ongoing', 'Tình Cảm', 'Trung Quốc', 'https://hdbo.opstream5.com/share/e9c550b97a038b9dbe82e0c87ac80988', 1, '2024-01-09 23:23:44'),
(116, 'Sorbet Nam Việt Quất', 'https://img.ophim10.cc/uploads/movies/sorbet-nam-viet-quat-thumb.jpg', 'Kızılcık Şerbeti', 'Kıvılcım (Evrim Alasya), một phụ nữ có học thức, thực tế và hiện đại, đã đứng vững sau khi ly hôn với chồng và nuôi dạy cả hai cô con gái theo những giá trị mà cô tin tưởng. Cô con gái út Çimen (Selin Türkmen) vẫn đang học trung học, trong khi cô con gái lớn Doğa (Sıla Türkoğlu) đang học nha khoa tại trường đại học. Mong muốn duy nhất của Kıvılcım là được nhìn thấy các con của mình thành công và hạnh phúc trong tương lai. Kıvılcım, người đã rất thất vọng khi Doğa kết hôn với bạn trai vào năm nhất đại học, đã trải qua cú sốc đầu đời khi con gái gặp gia đình chồng. Gia đình của chồng Doğa là Fatih (Doğukan Güngör) là một gia đình bảo thủ. Cô cho rằng con gái mình không thể sống với một gia đình có cái nhìn khác về cuộc sống như vậy. Nature tin rằng tình yêu của họ sẽ vượt qua mọi khác biệt. Đó là một câu chuyện tình yêu giữa hai gia đình cực đoan với cùng một sự thật nhưng cách thức khác nhau.', '2022', '2h/tập', 'sorbet-nam-viet-quat', 'Vietsub', 'HD', 'ongoing', 'Tâm Lý', 'Thổ Nhĩ Kỳ', 'https://vie.opstream1.com/share/c1b8c48c660ae44b22e250b32acae44f', 0, '2024-01-09 23:24:00'),
(117, 'Nụ Hôn Khuynh Thành', 'https://img.ophim10.cc/uploads/movies/nu-hon-khuynh-thanh-thumb.jpg', 'Supervisor Husband', 'Thịnh Hạ, một chỉ đạo nụ hôn vô danh đứng tầng lớp cuối cùng của Hoành Điếm, đã xuyên không vào bộ truyện tranh ', '2023', '10 phút/tập', 'nu-hon-khuynh-thanh', 'Vietsub', 'HD', 'completed', 'Chính kịch', 'Trung Quốc', 'https://hdbo.opstream5.com/share/735b35808f01b379a564129d77847dfb', 1, '2024-01-09 23:24:10'),
(118, 'Chín bang 2', 'https://img.ophim10.cc/uploads/movies/chin-bang-2-thumb.jpg', 'Nine States 2', 'Nine States 2', '2018', '1H7M18S', 'chin-bang-2', 'Vietsub', 'HD', 'completed', 'Gia Đình', 'Trung Quốc', 'https://hd1080.opstream2.com/share/b9141aff1412dc76340b3822d9ea6c72', 1, '2024-01-09 23:24:17'),
(119, 'Fate/Stay Night: Heaven&#39;s Feel - I. Presage Flower', 'https://img.ophim10.cc/uploads/movies/fate-stay-night-heavenand-x27-s-feel-i-presage-flower-thumb.jpg', 'Fate/Stay Night: Heaven&#39;s Feel - I. Presage Flower', 'Fate/Stay Night: Heaven&#39;s Feel - I. Presage Flower', '2017', '2g', 'fate-stay-night-heavenand-x27-s-feel-i-presage-flower', 'Vietsub', 'HD', 'completed', 'Phiêu Lưu', 'Nhật Bản', 'https://kd.opstream3.com/share/7ce3284b743aefde80ffd9aec500e085', 1, '2024-01-11 14:48:53'),
(120, 'Đội đặc nhiệm S.W.A.T.', 'https://img.ophim10.cc/uploads/movies/doi-dac-nhiem-swat-thumb.jpg', 'S.W.A.T.', 'S.W.A.T.', '2003', '1g 57ph', 'doi-dac-nhiem-swat', 'Vietsub', 'HD', 'completed', 'Phiêu Lưu', 'Âu Mỹ', 'https://kd.opstream3.com/share/0efe32849d230d7f53049ddc4a4b0c60', 1, '2024-01-11 14:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL DEFAULT '1' COMMENT '0 admin 1 user',
  `avatar` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'lamnhathuy0393418721@gmail.com', '$2y$10$OkY3c52DuNwkbxTVT8zL8O.pToqkRxYk7h6iUc.Tzl9CgaN35/r/C', 0, NULL, '2023-12-13 15:00:47', '2023-12-13 15:00:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
