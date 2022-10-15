-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 04:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalportfolio_mint`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `topic`, `image`, `content`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(34, 'Lorem ipsum lo', 'bale2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in ratione! Eaque reiciendis tempore, repellendus repellat, numquam maiores unde saepe rem sunt consectetur quisquam placeat incidunt fugit exercitationem, explicabo quam aliquam quas atque natus iure. Doloremque, eius velit eveniet minima totam cupiditate repellat iure sed consequatur qui sit saepe, tenetur quasi. Facere atque rerum asperiores inventore ullam quisquam quas tenetur modi doloribus! Necessitatibus ab fuga impedit neque cum amet sed aliquam facere exercitationem laboriosam quaerat et dolorum nostrum, nobis eaque quia ipsam, aperiam quo? In maiores dolores saepe temporibus alias, sint earum rerum, a quos ab eos, cumque molestias modi voluptatum. Molestiae cum debitis iusto nihil alias quae quod unde dolore, temporibus, deserunt quis id quasi optio. Sunt, officia velit. Non facilis dolore harum est aspernatur, iure, placeat quibusdam aliquid numquam optio eos aut rerum quo libero error temporibus. Nisi sequi culpa possimus iure. Doloremque, voluptate. Omnis repudiandae numquam delectus nemo dolorum voluptates, tempora distinctio a iusto impedit voluptatem quidem enim exercitationem rem rerum? Voluptates quisquam libero aliquam placeat ipsa adipisci possimus unde iure.', 20, 0, '2022-10-03 22:50:14', '2022-10-10 18:27:49'),
(35, 'lorem ipsum', '1665331947.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt incidunt minima, ad magni, voluptatem molestiae est laudantium rem impedit aperiam perferendis, sed laborum laboriosam facere iste magnam. Excepturi, ipsam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt incidunt minima, ad magni, voluptatem molestiae est laudantium rem impedit aperiam perferendis, sed laborum laboriosam facere iste magnam. Excepturi, ipsam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt incidunt minima, ad magni, voluptatem molestiae est laudantium rem impedit aperiam perferendis, sed laborum laboriosam facere iste magnam. Excepturi, ipsam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt incidunt minima, ad magni, voluptatem molestiae est laudantium rem impedit aperiam perferendis, sed laborum laboriosam facere iste magnam. Excepturi, ipsam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt incidunt minima, ad magni, voluptatem molestiae est laudantium rem impedit aperiam perferendis, sed laborum laboriosam facere iste magnam. Excepturi, ipsam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt incidunt minima, ad magni, voluptatem molestiae est laudantium rem impedit aperiam perferendis, sed laborum laboriosam facere iste magnam. Excepturi, ipsam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt incidunt minima, ad magni, voluptatem molestiae est laudantium rem impedit aperiam perferendis, sed laborum laboriosam facere iste magnam. Excepturi, ipsam?', 20, 1, '2022-10-09 05:12:27', '2022-10-10 15:06:43'),
(36, 'lorem ipsum', '1665416770.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque', 21, 1, '2022-10-10 04:46:10', '2022-10-10 04:46:10'),
(37, 'lorem ipsum', '1665416819.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque', 21, 1, '2022-10-10 04:46:59', '2022-10-10 04:46:59'),
(38, 'lorem ipsum', '1665416885.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumqueLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumqueLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumqueLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumqueLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumqueLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumqueLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque', 21, 1, '2022-10-10 04:48:05', '2022-10-10 04:48:05'),
(40, 'lorem ipsum', '1665454113.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, vel. Et commodi culpa nostrum, consectetur, numquam dignissimos accusamus assumenda suscipit quia, ullam non facere aliquam odio atque fuga totam! Provident necessitatibus rerum, modi quisquam a deleniti fugit unde illum et velit voluptatum dolor earum, quos dolorem quas delectus reprehenderit, est ipsa ipsam. Eveniet aut accusantium eius dolore, fuga aliquid blanditiis? Provident tenetur eligendi cumque est impedit quod corrupti beatae voluptatibus mollitia et eveniet quo quas minus nisi nesciunt deserunt, qui maxime. Saepe culpa ut dolorem dolor libero suscipit tempore id perferendis possimus recusandae maiores autem provident voluptatem quo repellat aliquid, nam obcaecati voluptate? Et corporis quo eligendi aliquid harum voluptatum, est magnam culpa id dolor enim quia deserunt ipsam suscipit maiores. Provident unde voluptate eveniet saepe dolore necessitatibus ipsam beatae, dolorum illo maiores natus officia in', 21, 1, '2022-10-10 15:08:33', '2022-10-10 15:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `status`) VALUES
(1, 'dagem', 'admin@gmail.com', 'jjjj', '2022-09-23 21:43:24', '2022-09-24 07:03:19', 1),
(2, 'dagem', 'dagemgissila@gmail.com', 'jjjjjjjjj', '2022-09-23 21:45:08', '2022-09-24 07:06:32', 1),
(3, 'dagem gissila', 'admin@gmail.com', 'hello', '2022-09-24 17:34:04', '2022-09-24 18:17:16', 1),
(4, 'dagem', 'ebeba@gmail.com', 'hi', '2022-09-26 22:13:36', '2022-09-27 18:43:27', 1),
(5, 'dagem', 'ebeba@gmail.com', 'hello', '2022-09-27 18:42:41', '2022-10-01 04:10:09', 1),
(6, 'client', 'client@gmail.com', 'hello', '2022-10-02 15:26:19', '2022-10-06 18:33:24', 1),
(7, 'client', 'client@gmail.com', 'hello', '2022-10-02 15:26:20', '2022-10-02 15:26:20', 0),
(8, 'dagem', 'dagemgissila@gmail.com', 'h', '2022-10-02 15:27:07', '2022-10-02 15:27:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institution_name`, `degree`, `department`, `startyear`, `endyear`, `status`, `created_at`, `updated_at`) VALUES
(14, 'arba minch', 'masters of degree', 'information technology', '2020-04-11', '2023-10-11', 1, '2022-10-10 02:58:39', '2022-10-10 02:58:39'),
(16, 'arba minch', 'masters of degree', 'software engimeering', '2022-10-06', '2022-10-12', 1, '2022-10-10 15:36:49', '2022-10-10 15:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `companyname`, `responsibility`, `duration`, `created_at`, `updated_at`, `status`) VALUES
(10, 'minister of innovation', 'WEB DEVELOPER', 'FOR 2 MONTH', '2022-10-09 04:46:29', '2022-10-09 04:46:29', 1),
(13, 'MINT', 'WEB DEVELOPER', '4 month', '2022-10-10 15:30:11', '2022-10-10 15:30:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, 'watchmovie1.jpg', 1, '2022-09-27 18:39:52', '2022-10-10 04:32:38'),
(12, 'watchmovie1.jpg', 1, '2022-10-04 00:27:05', '2022-10-10 04:14:18'),
(13, '1664882876.jpg', 1, '2022-10-04 00:27:56', '2022-10-04 00:27:56'),
(14, '1664882960.jpg', 1, '2022-10-04 00:29:20', '2022-10-04 00:29:20'),
(15, '1664883030.jpg', 1, '2022-10-04 00:30:30', '2022-10-04 00:30:30'),
(16, '1664883165.webp', 1, '2022-10-04 00:32:45', '2022-10-04 00:32:45'),
(17, '1664884796.jpg', 1, '2022-10-04 00:59:56', '2022-10-04 00:59:56'),
(18, '1665413566.jpg', 1, '2022-10-10 03:52:46', '2022-10-10 03:52:46'),
(19, '1665416038.jpg', 1, '2022-10-10 04:33:58', '2022-10-10 04:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `homesettings`
--

CREATE TABLE `homesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homephoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesettings`
--

INSERT INTO `homesettings` (`id`, `homephoto`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(9, 'premium_photo-1661331729490-14327669b5b9.avif', 'syco.jpg', 1, '2022-10-10 05:31:14', '2022-10-10 05:31:14');

-- --------------------------------------------------------

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_08_20_182756_create_services_table', 1),
(3, '2022_08_20_200621_create_education_table', 2),
(4, '2022_08_20_211322_create_portfolios_table', 3),
(5, '2022_08_21_082444_create_galleries_table', 4),
(6, '2022_08_21_092800_create_testimonies_table', 5),
(7, '2022_08_21_102025_create_contact_us_table', 6),
(8, '2022_08_21_174645_create_socialmedia_table', 7),
(9, '2022_08_21_193237_create_subscriptions_table', 8),
(10, '2022_08_21_204016_add_status_to_socialmedia', 9),
(12, '2022_08_22_121908_create_homesettings_table', 10),
(13, '2022_08_19_093233_create_users_table', 11),
(14, '2022_08_24_080107_create_blogs_table', 12),
(15, '2022_08_24_084040_create_teammembers_table', 12),
(16, '2022_08_26_200630_create_experiences_table', 13),
(23, '2022_08_26_205923_create_aboutmes_table', 14),
(25, '2022_08_31_084423_create_notifications_table', 15),
(26, '2022_09_01_214722_create_sections_table', 16),
(29, '2022_09_02_092303_create_profiles_table', 17),
(31, '2022_09_02_193253_create_contacts_table', 18),
(33, '2022_09_03_112932_drop_url_from_services_table', 19),
(34, '2022_09_03_113442_create_socialmedia_table', 20),
(35, '2022_09_08_100117_add_status_to_experiences_table', 21),
(38, '2022_09_24_111936_add_status_to_contacts_table', 22),
(40, '2022_09_25_121527_drop_hometitle_from_homesettings', 23),
(41, '2022_09_25_121723_drop_homesubtitle_from_homesettings', 23),
(42, '2022_09_25_121826_drop_webtitle_from_homesettings', 23),
(45, '2022_09_27_082445_create_password_resets_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dagemgissila@gmail.com', 'i0uLY01OatTcEwT7xcrGY5pFB0fP5KbwdLb0FyGTuHKLhQjCJp9XaABr8KkGGI9K', '2022-09-27 00:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projecttitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projectimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projectdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `projecttitle`, `projectimage`, `projectdescription`, `status`, `created_at`, `updated_at`) VALUES
(11, 'java   developer', 'premium_photo-1661331729490-14327669b5b9.avif', 'Voluptatibus optio officia delectus. Nostrum omnis ea commodi voluptates nihil dolores officiis sunt saepe ratione reprehenderit quis laudantium, reiciendis, deserunt recusandae quas!', 1, '2022-09-04 21:42:56', '2022-10-10 05:05:52'),
(15, 'software developer', '0-1.jpg', 'Voluptatibus optio officia delectus. Nostrum o, reiciendis, deserunt recusandae quas! Voluptatibus optio officia delectus. Nostrum o, reiciendis, deserunt recusandae quas!', 1, '2022-09-27 18:34:57', '2022-10-10 05:07:41'),
(16, 'electrical enginer', 'download.jpg', 'Voluptatibus optio officia delectus. Nostrum omnis ea commodi voluptates nihil dolores officiis sunt saepe ratione reprehenderit quis laudantium, reiciendis, deserunt recusandae quas!', 1, '2022-10-10 05:14:05', '2022-10-10 05:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profiletitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'put here title',
  `profilesubtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'put here your sub title',
  `profileimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'put here your personal photo',
  `aboutMeDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'describe your self here',
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0943880714',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'addis abeba ethiopia',
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'october 37 1993',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `profiletitle`, `profilesubtitle`, `profileimage`, `aboutMeDescription`, `phonenumber`, `address`, `birthdate`, `status`, `created_at`, `updated_at`) VALUES
(11, 20, 'hello i am dagim gissila', 'im web developer', 'highway.jpg', 'full  stack web developer full  stack web developer full  stack web developer full  stack web developer', '7893248324', 'arbaminch', '2022-10-21', 1, '2022-10-01 07:21:09', '2022-10-01 07:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `servicename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `servicename`, `description`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Lorem ipsum', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, vitae aliquam non fugiat, vero, eligendi est sit illo esse vel officiis nihil veniam asperiores perspiciatis necessitatibus deserunt quos repellendus cupiditate.', 1, '2022-09-01 01:56:30', '2022-10-10 15:48:37'),
(11, 'Lorem ipsum', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, vitae aliquam non fugiat, vero, eligendi est sit illo esse vel officiis nihil veniam asperiores perspiciatis necessitatibus deserunt quos repellendus cupiditate.', 1, '2022-09-01 10:38:24', '2022-10-10 15:49:17'),
(16, 'web developer', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, vitae aliquam non fugiat, vero, eligendi est sit illo esse vel officiis nihil veniam asperiores perspiciatis', 1, '2022-09-27 18:31:35', '2022-10-09 05:05:37'),
(18, 'app developer', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque minus velit sequi itaque modi nostrum. Quo ratione facilis minus velit, commodi perferendis, temporibus et officia sed rerum ipsum vel iusto.', 1, '2022-10-09 05:03:28', '2022-10-09 05:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `socialmediaicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `socialmediaicon`, `url`, `created_at`, `updated_at`) VALUES
(10, 'facebook', 'https://www.facebook.com/dagem.gissila', '2022-10-09 04:22:39', '2022-10-09 04:22:39'),
(11, 'instagram', 'https://www.instagram.com/dagemgissil/', '2022-10-09 17:11:12', '2022-10-09 17:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `name`, `comment`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(17, 'lorem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dicta laudantium iusto esse a voluptates nobis vero eum dolores in, expedita minima eius sapiente doloremque pariatur aut atque reprehenderit cum.', '1664877622.jpeg', 1, '2022-10-03 23:00:22', '2022-10-03 23:00:22'),
(19, 'dagem', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim veniam eos vel deleniti laborum alias ullam architecto tempora cum aperiam harum illum nisi ratione sunt ab, quibusdam obcaecati porro culpa.', '1664878135.webp', 1, '2022-10-03 23:08:55', '2022-10-03 23:08:55'),
(23, 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi vero autem adipisci expedita praesentium, minus tenetur mollitia, maxime, fugit saepe dicta tempore nihil distinctio itaque beatae amet temporibus asperiores. Dolorem.', '1665326505.avif', 1, '2022-10-09 03:41:45', '2022-10-09 03:48:06'),
(24, 'dagem gissila', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nostrum ducimus saepe distinctio eos praesentium dolore ratione itaque consequuntur nam, dolorem accusantium, delectus id veniam molestias voluptas quos nesciunt explicabo.', '1665327330.avif', 1, '2022-10-09 03:55:30', '2022-10-09 03:55:30'),
(25, 'DDDD', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nostrum ducimus saepe distinctio eos praesentium dolore ratione itaque consequuntur nam, dolorem accusantium, delectus id veniam molestias voluptas quos nesciunt explicabo.', '1665327405.avif', 1, '2022-10-09 03:56:45', '2022-10-09 03:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(20, 'dagem gissila', 'dagemgisila@gmail.com', '$2y$10$qQ87zfNDK1upDl0cmAXUKOF9Ij9JTN7LlgdfMNhekmhnNy8bPS1VS', 'admin', '2022-10-01 07:10:20', '2022-10-02 19:02:48'),
(21, 'dagem gissila', 'admin@gmail.com', '$2y$10$8FD/xroqTKkTBH/xsuqKrOFzp4nDdHwYOUk1poFAK0Z87RTTS8ctq', 'teammember', '2022-10-09 03:24:50', '2022-10-09 03:24:50'),
(22, 'girum', 'ebeba@gmail.com', '$2y$10$lOZ.CueWeWX4X7J2XCvpJeuCyztJvSo9D9/pKJZ44FwFvb..nTZpG', 'teammember', '2022-10-10 14:56:57', '2022-10-10 14:56:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesettings`
--
ALTER TABLE `homesettings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teammembers_user_id_foreign` (`user_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `homesettings`
--
ALTER TABLE `homesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD CONSTRAINT `teammembers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
