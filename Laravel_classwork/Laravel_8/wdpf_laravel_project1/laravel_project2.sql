-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 01:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'qRtRm6niiOku83W', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(2, 4, 'grKIVbkdFh9UCti', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(3, 11, 'ZHRMUSXj7fD1DLf', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(4, 8, 'c83GSaz0hWnhgsN', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(5, 4, 'KDW74TU5AC0dDs2', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(6, 1, 'UiXOZ4GAtnhaGGJ', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(7, 9, 'b50RaXi0gTiLwtl', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(8, 9, 'zfBMeAP1OxMxayP', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(9, 6, 'amfcNgaTXsAvuAi', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(10, 5, 'cmVIHO1cnZMJOX0', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(11, 2, 'QhnidcK8eeVx1Zp', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(12, 14, 'Mda10cF1G5hDMiv', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(13, 5, 'og2Gr7l7gO1ojS1', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(14, 13, 'yIe6FTF06COboJb', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(15, 5, 'XlnXmk9fjlMW1mM', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(16, 12, 'yV0rPTf613xGwyH', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(17, 4, 'WQjL8Mb6kOMKiXU', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(18, 3, 'WRzCyKZgkZm9fbo', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(19, 9, 'IUpDeJWRLPPzPhD', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(20, 15, '3lzqRjUG4BQvEyF', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(21, 5, 'BruoJTEgCscNf3c', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(22, 13, 'gg1ObLLAe3zO3ip', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(23, 12, 'MTHRzKQe4fs4X5M', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(24, 3, 'Miedt9ERphutHsn', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(25, 8, 'lFzZv8KwCwE8Lro', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(26, 5, 'zxdoSugjriuwyK3', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(27, 6, 'uBb2sXWSmrYbl08', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(28, 6, 'CKjm4b8XIRJpvt4', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(29, 6, 'WuSGdMLKUgKWCYc', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(30, 13, 'iAx1mPrjbKiG2v8', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(31, 2, 'f1iJG2yPzW3KslR', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(32, 5, 'fheZnYPqZlAcKZA', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(33, 14, 'k3kgwDKGpH8YlK0', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(34, 2, 'pnrqUgTW1C6dhHi', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(35, 11, '5FJfAIzZjYaurjY', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(36, 11, 'gk7AfMg5gfTu3ev', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(37, 10, 'pIKT4WdzMRN6tKa', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(38, 2, 'XThnMxMq8KrA5hT', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(39, 12, 'PSj1gHrzNsefOT6', '2023-02-02 05:46:01', '2023-02-02 05:46:01'),
(40, 2, 'BayGigy8JkmZ5Uj', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(41, 6, 'BZ1j95mZRq8lzqK', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(42, 2, 'XhnrYUDpLGIWV7K', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(43, 1, 'vb6gSGYMX11fIKV', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(44, 11, 'w6hCuk8280jegcJ', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(45, 10, 'JuG40hDTjC7WGuY', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(46, 10, 'iEzZcuVyFYMfxRe', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(47, 1, 'ppF1FuxjZ6h1kVM', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(48, 10, 'wssvaLcKSMsjHfX', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(49, 10, 'EhoVryUcwIhxkCT', '2023-02-02 05:46:02', '2023-02-02 05:46:02'),
(50, 2, 'G6UOES5jb5xHiIy', '2023-02-02 05:46:02', '2023-02-02 05:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_01_10_104528_products', 1),
(5, '2023_01_11_123859_create_categories_table', 1),
(6, '2023_02_01_111444_create_phones_table', 1),
(7, '2023_02_02_101310_create_posts_table', 1),
(8, '2023_02_02_101736_create_comments_table', 1),
(9, '2023_02_02_113737_create_roles_table', 1),
(10, '2023_02_02_113845_create_role_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'jyKVpUqVy6609JS', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(2, 'x7oaJqgUEQrVSyO', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(3, 'K1i2kADmIyfd0Vh', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(4, 'VnUla2yom48Q67Y', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(5, 'zxUgh6yN1hBVOLQ', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(6, '5b7Z2mqo66zyguk', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(7, 'BZPYt1QJyD8G0qw', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(8, 'VPNinoKf9NYlXn9', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(9, 'YIyuSfVp0c1cQh8', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(10, '2SHKlikA3HNUPd1', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(11, 'h7eDY3HFoxVoMHv', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(12, 'UgWohMcn4MCrsdP', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(13, 'ZnAYPdlTGedUo1P', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(14, 'vomqx9Xtv5HWnUp', '2023-02-02 05:46:00', '2023-02-02 05:46:00'),
(15, '49ZZptuaUq4rPZM', '2023-02-02 05:46:00', '2023-02-02 05:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_descriptions` varchar(300) NOT NULL,
  `product_price` double(6,2) NOT NULL,
  `product_category` tinyint(4) NOT NULL,
  `product_stock` mediumint(9) NOT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_descriptions`, `product_price`, `product_category`, `product_stock`, `product_img`, `created_at`, `updated_at`) VALUES
(1, 'Margarita King', 'Nihil sed necessitatibus laudantium cumque pariatur laudantium quae. Necessitatibus quo cupiditate et aut quas sint at. Aperiam aspernatur animi distinctio velit dolorem amet voluptatum. Sit eum sed similique quia soluta voluptatem.', 212.00, 1, 795, 'https://lorempixel.com/640/480/animals/?89925', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(2, 'Mr. Leopoldo Hudson', 'Praesentium nemo sit voluptatem sed fuga. Fugiat itaque consectetur enim ratione repudiandae autem. Aut ut est exercitationem quia eveniet sit. Necessitatibus dolores sunt quia ratione.', 486.00, 2, 35, 'https://lorempixel.com/640/480/animals/?56453', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(3, 'Miss Eleanora Bode Jr.', 'Recusandae eos dolorum enim. Dolores minus esse at itaque sit. Enim totam qui asperiores et dolores est ipsa repellendus. Iste deserunt consequatur nostrum quas adipisci delectus asperiores.', 106.00, 1, 32, 'https://lorempixel.com/640/480/animals/?24254', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(4, 'Eryn Brakus', 'Soluta et magni quisquam nulla autem assumenda sunt quam. Dicta enim itaque sequi rerum quia rem qui. Modi non sit et nostrum reprehenderit mollitia.', 272.00, 5, 640, 'https://lorempixel.com/640/480/animals/?50704', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(5, 'Amelie Prosacco', 'Et beatae totam dolorum aut et. Nihil quibusdam dolor autem expedita. Et quo commodi numquam eveniet cumque.', 352.00, 6, 376, 'https://lorempixel.com/640/480/animals/?18344', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(6, 'Laurie Stokes', 'Quia ut facilis voluptas aut amet ut. Molestias magnam voluptas alias voluptatibus vel quia. Sapiente et fugit consequatur a id esse vel maiores.', 232.00, 1, 815, 'https://lorempixel.com/640/480/animals/?11422', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(7, 'Georgiana Parisian', 'Perspiciatis voluptatibus labore nemo quia veritatis consequatur. Nemo excepturi sit doloremque. Id neque in nam.', 627.00, 6, 768, 'https://lorempixel.com/640/480/animals/?67694', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(8, 'Ms. Millie Beahan', 'Sed qui eveniet sed impedit. Labore inventore ut accusamus consectetur. Ea similique et impedit repellat itaque labore expedita. Vel architecto cupiditate id autem eos rerum hic delectus.', 297.00, 7, 26, 'https://lorempixel.com/640/480/animals/?60245', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(9, 'Mossie Schultz', 'Aut est non ea non. Odit quia molestias odit deleniti aut. Qui blanditiis expedita iusto numquam aliquam voluptas quae. Dolor asperiores voluptatem consequuntur voluptatem perspiciatis qui atque. Quia labore nulla fugit ut reiciendis maxime nisi.', 389.00, 3, 752, 'https://lorempixel.com/640/480/animals/?98021', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(10, 'Issac Rutherford', 'Deleniti nemo maxime velit expedita itaque sed praesentium iure. Dolor cum a odio totam. At earum quae rerum perferendis impedit. Aut facilis fuga sapiente quod.', 210.00, 5, 253, 'https://lorempixel.com/640/480/animals/?41610', '2023-02-02 05:45:59', '2023-02-02 05:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Manager', NULL, NULL),
(3, 'Editor', NULL, NULL),
(4, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`) VALUES
(1, 3),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jannatul ferdaush', 'jannat@gmail.com', NULL, '$2y$10$bzrCPSQnB3sodt.iqBaw3ODE5nwl7Ud6ltdp/pfVBrIulmB.Is6La', NULL, 'eF9ZxDeyo7', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(2, 'Kamrul Hasan', 'kamrul@example.com', NULL, '$2y$10$uOS4X9giYAOwAVGr4O6VO.3bkmc9qkouN4pyGplXwzgFuYeaD2Ezi', NULL, 'zPKpLpIsb1', '2023-02-02 05:45:59', '2023-02-02 05:45:59'),
(4, 'Aklima Akter', 'aklima@gmail.com', NULL, '$2y$10$YoPFb2zEb2Nttqbgp3y2Ee8M78aQsFMKGFCPA4XjUuGSWs2tuWv8S', NULL, NULL, '2023-02-04 03:35:53', '2023-02-04 03:35:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phones_user_id_foreign` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD KEY `role_users_user_id_foreign` (`user_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `phones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
