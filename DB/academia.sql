-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 11:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 10:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `blogcategory` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogcategory`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PHP', 'PHP RAW', 'php is an advanced language that is good  it is basically the language that deal with making things work', 'web/images/blog/PHP RAW1683206628.jpg', '2023-05-04 12:23:48', '2023-05-04 12:23:48', NULL),
(2, 'Announcements', 'Emergency', 'There are suspicions all over the school compound two men has just stolen the principal\'s crucial documents be on alert and let everybody be vigilant.', 'web/images/blog/Emergency1683206826.jpg', '2023-05-04 12:27:06', '2023-05-04 12:27:06', NULL),
(3, 'Laravel', 'Laravel Projects', 'laravel is an advance of php it is highly secured as such , if you use laravel in developing websites you would find out that your websites cannot be easily hacked.', 'web/images/blog/Laravel Projects1683206957.jpg', '2023-05-04 12:29:17', '2023-05-04 12:29:17', NULL),
(4, 'Food', 'Agriculture \'s essentiality', 'Agriculture\'s essentiality in the society you will found out that most of the richest people in foreign  countries are Agricultural farmers who have ventured nothing less  but have given all their time into developing and promogating agriculture.', 'web/images/blog/Agriculture \'s essentiality1683207140.png', '2023-05-04 12:32:21', '2023-05-04 12:32:21', NULL),
(5, 'Football', 'Soccer\'s importance', 'football is a very good game that is common around us it is easy swift but rich. every school needs a football pitch you cannot do without  football.', 'web/images/blog/Soccer\'s importance1683207544.jpg', '2023-05-04 12:39:04', '2023-05-04 12:39:04', NULL),
(6, 'Announcements', 'Elon musk', 'The richest man on earth Elon musk set to visit our school today every student should be informed and all student should compose themselves.', 'web/images/blog/Elon musk1683207842.jpg', '2023-05-04 12:44:02', '2023-05-04 12:44:02', NULL);

--
-- Indexes for dumped tables
--
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 10:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 10:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `blog_id` int(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `review_img` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `content` varchar(400) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `blog_id`, `full_name`, `review_img`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kingsley Terwase', 'web/images/blog/1683291697.jpg', 'kingsleyTerwase@gmail.com', 'This is my best programming language and i really enjoy it so much enjoy it', '2023-05-05 12:01:37', '2023-05-05 12:01:37'),
(2, 2, 'kingsley Terwase', 'web/images/blog/1683293436.jpg', 'kingsley@gmail.com', 'This is a good work keep up the spirit dont go away from it this is flabbergesting', '2023-05-05 12:30:36', '2023-05-05 12:30:36'),
(3, 2, 'Jacob Haaga', 'web/images/blog/1683322708.png', 'jacobhaaga@gmail.com', 'we are happy to receive you sir we are greatful for your generousity we love you so much we thankyou', '2023-05-05 20:38:28', '2023-05-05 20:38:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Table structure for table `blog_cat`
--

CREATE TABLE `blog_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_cat`
--

INSERT INTO `blog_cat` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Announcements', 'web/images/blog/1682793550.jpg', 'The founder of WafflePro is coming to our school.', '2023-04-29 13:52:09', '2023-04-29 17:39:10'),
(5, 'Food', 'web/images/blog/1682930098.jpg', 'Agriculture food is essential  now', '2023-04-30 10:53:02', '2023-05-01 07:34:58'),
(6, 'Laravel', 'web/images/blog/1682945360.png', 'Laravel is an upgrade of php it is very good and more well secured compare to raw PHP as a programmer you are looking for a better programming language just take laravel', '2023-05-01 11:49:20', '2023-05-01 11:49:20'),
(7, 'PHP', 'web/images/blog/1683206331.jpg', 'This is an advance and the best programming language', '2023-05-04 12:18:51', '2023-05-04 12:18:51'),
(8, 'Football', 'web/images/blog/1683207272.jpg', 'soccer popularly known as football is the richest and most common game on planet earth.', '2023-05-04 12:34:32', '2023-05-04 12:34:32'),
(9, 'Announcements', 'web/images/blog/1683207717.jpg', 'Elon musk is visiting our school today', '2023-05-04 12:41:58', '2023-05-04 12:41:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_cat`
--
ALTER TABLE `blog_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_cat`
--
ALTER TABLE `blog_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_21_012551_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin` int(11) NOT NULL,
  `admin_role` int(11) NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welc_msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `admin`, `admin_role`, `post_code`, `country`, `country_code`, `name`, `logo`, `welc_msg`, `email`, `facebook_link`, `whatsapp_link`, `instagram_link`, `twitter_link`, `address_one`, `address_two`, `address_three`, `contact`, `about_us`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '00000', 1, 'NG', 'academia', 'assets/images/logo-academia.png', 'you are welcome to our school', 'academia@gmail.com', 'facebook_link', 'whatsapp', 'instagram_link', 'twitter_link', 'address 1', 'address 2', 'address 3', 'xxxxxxxxxx', 'about_us', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `department` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `role`, `email`, `email_verified_at`, `department`, `status`, `gender`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Academy', 1, 'adminacademy@gmail.com', NULL, NULL, 1, 'male', '$2y$10$xYOvBS4sjEV3Oe.LnzBxhud8T9eYpvkUuP2hoBboU7OOs22xV/BYW', NULL, '2023-04-28 17:43:56', '2023-04-28 17:43:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
