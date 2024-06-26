-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2024 a las 18:59:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `librosonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('brayaneduardodtv@gmail.com|127.0.0.1', 'i:1;', 1719341776),
('brayaneduardodtv@gmail.com|127.0.0.1:timer', 'i:1719341776;', 1719341776);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_agregado` date NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `notificaciones` tinyint(1) NOT NULL DEFAULT 0,
  `categoria` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descuento` decimal(5,2) DEFAULT NULL,
  `fecha_inicio_descuento` date DEFAULT NULL,
  `fecha_fin_descuento` date DEFAULT NULL,
  `url_producto` varchar(255) DEFAULT NULL,
  `imagen_url` varchar(255) DEFAULT NULL,
  `disponibilidad` tinyint(1) NOT NULL DEFAULT 1,
  `fecha_ultima_actualizacion` timestamp NULL DEFAULT NULL,
  `en_lista_deseos` tinyint(1) NOT NULL DEFAULT 0,
  `cantidad` int(11) NOT NULL DEFAULT 1,
  `prioridad` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id`, `usuario_id`, `producto_id`, `fecha_agregado`, `comentario`, `rating`, `notificaciones`, `categoria`, `marca`, `precio`, `descuento`, `fecha_inicio_descuento`, `fecha_fin_descuento`, `url_producto`, `imagen_url`, `disponibilidad`, `fecha_ultima_actualizacion`, `en_lista_deseos`, `cantidad`, `prioridad`, `created_at`, `updated_at`) VALUES
(28, 1, 7, '2024-06-25', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 1, NULL, '2024-06-26 00:30:59', '2024-06-26 00:30:59'),
(30, 1, 2, '2024-06-25', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 1, NULL, '2024-06-26 00:33:14', '2024-06-26 00:33:14'),
(32, 1, 8, '2024-06-25', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 1, NULL, '2024-06-26 00:44:24', '2024-06-26 00:44:24'),
(34, 1, 3, '2024-06-25', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 1, NULL, '2024-06-26 00:52:02', '2024-06-26 00:52:02'),
(41, 1, 4, '2024-06-26', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 1, NULL, '2024-06-26 22:24:48', '2024-06-26 22:24:48'),
(43, 1, 6, '2024-06-26', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 1, NULL, '2024-06-26 22:25:17', '2024-06-26 22:25:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
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
-- Estructura de tabla para la tabla `job_batches`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_20_165717_create_favoritos_table', 1),
(5, '2024_06_20_165737_create_productos_table', 1),
(6, '2024_06_24_150942_create_ofertas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `descuento` decimal(5,2) NOT NULL,
  `precio_oferta` decimal(10,2) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `codigo_promocional` varchar(50) DEFAULT NULL,
  `restricciones` text DEFAULT NULL,
  `url_oferta` varchar(255) DEFAULT NULL,
  `imagen_url` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_ultima_actualizacion` timestamp NULL DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `vendedor` varchar(100) DEFAULT NULL,
  `tipo_oferta` varchar(50) DEFAULT NULL,
  `cantidad_limite` int(11) DEFAULT NULL,
  `rating_promedio` decimal(3,2) DEFAULT NULL,
  `numero_ratings` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `producto_id`, `titulo`, `descripcion`, `descuento`, `precio_oferta`, `fecha_inicio`, `fecha_fin`, `codigo_promocional`, `restricciones`, `url_oferta`, `imagen_url`, `fecha_creacion`, `fecha_ultima_actualizacion`, `activo`, `vendedor`, `tipo_oferta`, `cantidad_limite`, `rating_promedio`, `numero_ratings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Descuento en Cien años de soledad', 'Aprovecha este descuento en la novela de Gabriel García Márquez.', 20.00, 188.92, '2024-06-24', '2024-07-05', 'OTOÑO2026', NULL, 'https://example.com/oferta/1', 'https://m.media-amazon.com/images/I/71YoFJSz3LL._AC_UF1000,1000_QL80_.jpg', '0000-00-00', NULL, 0, 'Librería XYZ', 'Descuento temporal', 50, 4.00, 150, '2024-06-24 15:00:00', '2024-06-25 02:56:38'),
(2, 2, 'Oferta especial en 1984', 'No te pierdas esta oferta especial en la novela de George Orwell.', 15.00, 154.38, '2024-06-24', '2024-07-03', 'VERANO2026', NULL, 'https://example.com/oferta/2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRASKlNdsq5m9x7q7I1TbwTjn9DqxBXZ1x3vw&s', '0000-00-00', NULL, 1, 'Librería ABC', 'Oferta temporal', NULL, 4.50, 120, '2024-06-24 15:00:00', '2024-06-25 00:36:14'),
(3, 3, 'Descuento en El Principito', 'Disfruta de un descuento especial en la famosa novela de Antoine de Saint-Exupéry.', 25.00, 108.95, '2024-06-25', '2024-07-06', 'VERANO2024', NULL, 'https://example.com/oferta/3', 'https://m.media-amazon.com/images/I/713nEf55PkL._AC_UF1000,1000_QL80_.jpg', '0000-00-00', NULL, 1, 'Librería XYZ', 'Descuento por tiempo limitado', 30, 4.20, 80, '2024-06-24 15:00:00', '2024-06-24 15:00:00'),
(4, 4, 'Oferta en Matar a un ruiseñor', 'Descuento especial en la novela de Harper Lee, ganadora del Premio Pulitzer.', 18.00, 133.92, '2024-06-26', '2024-07-07', 'VERANO2027', NULL, 'https://example.com/oferta/4', 'https://i5.walmartimages.com.mx/mg/gm/3pp/asr/44e04f3c-15e8-48cc-8a33-6b0f35e96226.ba9035da2c2782172a48fac26800c844.jpeg?odnHeight=2000&odnWidth=2000&odnBg=ffffff', '0000-00-00', NULL, 1, 'Librería ABC', 'Oferta de verano', NULL, 4.60, 90, '2024-06-24 15:00:00', '2024-06-25 00:36:33'),
(5, 5, 'Descuento en Orgullo y prejuicio', 'Aprovecha este descuento en la novela clásica de Jane Austen.', 22.00, 155.84, '2024-06-27', '2024-07-08', 'VERANO2024', 'No aplica en compras con otras ofertas.', 'https://example.com/oferta/5', 'https://images-na.ssl-images-amazon.com/images/I/91HHqVTAJQL.jpg', '0000-00-00', NULL, 1, 'Librería XYZ', 'Descuento por tiempo limitado', 40, 4.80, 110, '2024-06-24 15:00:00', '2024-06-24 21:32:58'),
(6, 1, 'Cien años de soledad', 'Hola muchahos', 25.00, 133.00, '2024-06-29', '2024-06-30', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2024-06-25 00:58:36', '2024-06-25 00:58:49'),
(7, 8, 'El nombre de la rosa', 'Hola nuevo', 11.00, 254.00, '2024-06-28', '2024-06-29', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2024-06-25 01:01:58', '2024-06-25 01:01:58'),
(8, 1, 'Cien años de soledad', 'Holassssss', 45.00, 455.00, '2024-06-28', '2024-06-29', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2024-06-26 01:17:30', '2024-06-26 01:17:30'),
(9, 2, '1984', 'Hola prueba de nuevo', 45.00, 455.00, '2024-06-28', '2024-06-29', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2024-06-26 01:18:38', '2024-06-26 01:18:38'),
(10, 1, 'Cien años de soledad', 'Hola mundo prueba 2', 45.00, 144.00, '2024-06-20', '2024-06-29', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2024-06-26 01:21:18', '2024-06-26 01:21:18'),
(11, 1, 'Cien años de soledad', 'Prueba con las nuevas rutas tipo resource', 44.00, 1533.00, '2024-06-27', '2024-06-29', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2024-06-26 22:15:44', '2024-06-26 22:15:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `upc` varchar(50) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `url_producto` varchar(255) DEFAULT NULL,
  `imagen_url` varchar(255) DEFAULT NULL,
  `fecha_agregado` date NOT NULL,
  `fecha_ultima_actualizacion` timestamp NULL DEFAULT NULL,
  `calificacion_promedio` decimal(3,2) DEFAULT NULL,
  `numero_resenas` int(11) NOT NULL DEFAULT 0,
  `peso` decimal(5,2) DEFAULT NULL,
  `dimensiones` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `fabricante` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `descripcion`, `precio`, `categoria`, `marca`, `modelo`, `sku`, `upc`, `stock`, `url_producto`, `imagen_url`, `fecha_agregado`, `fecha_ultima_actualizacion`, `calificacion_promedio`, `numero_resenas`, `peso`, `dimensiones`, `color`, `material`, `fabricante`, `created_at`, `updated_at`) VALUES
(1, 'Cien años de soledad', 'Una novela escrita por el autor colombiano Gabriel García Márquez.', 236.16, 'Novela', 'Editorial Sudamericana', NULL, 'SKU001', 'UPC001', 100, 'https://example.com/productos/1', 'https://m.media-amazon.com/images/I/71YoFJSz3LL._AC_UF1000,1000_QL80_.jpg', '2023-01-01', NULL, 3.50, 1200, 0.80, '20x13x3', 'Multicolor', 'Papel', 'Gabriel García Márquez', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(2, '1984', 'Una novela de George Orwell, una distopía sobre un régimen totalitario.', 181.62, 'Novela', 'Secker & Warburg', NULL, 'SKU002', 'UPC002', 150, 'https://example.com/productos/2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRASKlNdsq5m9x7q7I1TbwTjn9DqxBXZ1x3vw&s', '2023-01-01', NULL, 4.70, 950, 0.50, '20x13x2', 'Gris', 'Papel', 'George Orwell', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(3, 'El Principito', 'Una novela corta y la obra más famosa del escritor francés Antoine de Saint-Exupéry.', 145.26, 'Infantil', 'Reynal & Hitchcock', NULL, 'SKU003', 'UPC003', 200, 'https://example.com/productos/3', 'https://m.media-amazon.com/images/I/713nEf55PkL._AC_UF1000,1000_QL80_.jpg', '2023-01-01', NULL, 4.90, 3000, 0.30, '18x12x1', 'Amarillo', 'Papel', 'Antoine de Saint-Exupéry', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(4, 'Matar a un ruiseñor', 'Una novela de Harper Lee publicada en 1960. Ganó el Premio Pulitzer en 1961.', 163.44, 'Novela', 'J.B. Lippincott & Co.', NULL, 'SKU004', 'UPC004', 120, 'https://example.com/productos/4', 'https://i5.walmartimages.com.mx/mg/gm/3pp/asr/44e04f3c-15e8-48cc-8a33-6b0f35e96226.ba9035da2c2782172a48fac26800c844.jpeg?odnHeight=2000&odnWidth=2000&odnBg=ffffff', '2023-01-01', NULL, 4.80, 1800, 0.60, '20x14x2', 'Azul', 'Papel', 'Harper Lee', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(5, 'Orgullo y prejuicio', 'Una novela de Jane Austen, publicada por primera vez en 1813.', 199.80, 'Romántica', 'T. Egerton, Whitehall', NULL, 'SKU005', 'UPC005', 130, 'https://example.com/productos/5', 'https://images-na.ssl-images-amazon.com/images/I/91HHqVTAJQL.jpg', '2023-01-01', NULL, 4.60, 1700, 0.70, '20x13x2.5', 'Rosa', 'Papel', 'Jane Austen', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(6, 'Don Quijote de la Mancha', 'Una novela escrita por el español Miguel de Cervantes.', 290.70, 'Clásico', 'Francisco de Robles', NULL, 'SKU006', 'UPC006', 80, 'https://example.com/productos/6', 'https://images-na.ssl-images-amazon.com/images/I/91bYsX41DVL.jpg', '2023-01-01', NULL, 4.70, 1300, 1.50, '22x15x4', 'Blanco', 'Papel', 'Miguel de Cervantes', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(7, 'Harry Potter y la piedra filosofal', 'El primer libro de la serie de Harry Potter escrita por J.K. Rowling.', 181.62, 'Fantástico', 'Bloomsbury', NULL, 'SKU007', 'UPC007', 300, 'https://example.com/productos/7', 'https://images-na.ssl-images-amazon.com/images/I/81YOuOGFCJL.jpg', '2023-01-01', NULL, 4.90, 5000, 0.80, '20x13x3', 'Rojo', 'Papel', 'J.K. Rowling', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(8, 'El Hobbit', 'Una novela de fantasía escrita por J.R.R. Tolkien.', 163.44, 'Fantástico', 'George Allen & Unwin', NULL, 'SKU008', 'UPC008', 250, 'https://example.com/productos/8', 'https://images-na.ssl-images-amazon.com/images/I/91b0C2YNSrL.jpg', '2023-01-01', NULL, 4.80, 3500, 0.60, '19x12x2', 'Verde', 'Papel', 'J.R.R. Tolkien', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(9, 'El guardián entre el centeno', 'Una novela de J.D. Salinger publicada en 1951.', 199.80, 'Novela', 'Little, Brown and Company', NULL, 'SKU009', 'UPC009', 140, 'https://example.com/productos/9', 'https://images-na.ssl-images-amazon.com/images/I/81OthjkJBuL.jpg', '2023-01-01', NULL, 4.50, 1100, 0.50, '20x13x2', 'Naranja', 'Papel', 'J.D. Salinger', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(10, 'La sombra del viento', 'Una novela escrita por el autor español Carlos Ruiz Zafón.', 236.16, 'Novela', 'Editorial Planeta', NULL, 'SKU010', 'UPC010', 90, 'https://example.com/productos/10', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpWF7vTzIGnYubdRMxJa4wjE5m6oaXVF7GCQ&s', '2023-01-01', NULL, 4.60, 1400, 0.70, '21x14x3', 'Negro', 'Papel', 'Carlos Ruiz Zafón', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(11, 'Los juegos del hambre', 'Una novela de aventura y ciencia ficción escrita por Suzanne Collins.', 217.98, 'Ciencia ficción', 'Scholastic Press', NULL, 'SKU011', 'UPC011', 220, 'https://example.com/productos/11', 'https://images-na.ssl-images-amazon.com/images/I/61JfGcL2ljL.jpg', '2023-01-01', NULL, 4.70, 4000, 0.80, '21x14x3', 'Negro', 'Papel', 'Suzanne Collins', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(12, 'La casa de los espíritus', 'Una novela escrita por la autora chilena Isabel Allende.', 254.34, 'Novela', 'Editorial Sudamericana', NULL, 'SKU012', 'UPC012', 110, 'https://example.com/productos/12', 'https://images-na.ssl-images-amazon.com/images/I/91cwOSS4sDL.jpg', '2023-01-01', NULL, 4.60, 1000, 0.90, '21x14x3', 'Blanco', 'Papel', 'Isabel Allende', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(13, 'El nombre de la rosa', 'Una novela histórica escrita por el italiano Umberto Eco.', 272.52, 'Novela histórica', 'Bompiani', NULL, 'SKU013', 'UPC013', 100, 'https://example.com/productos/13', 'https://m.media-amazon.com/images/I/71lM9yNEepL._SY466_.jpg', '2023-01-01', NULL, 4.70, 1600, 1.20, '22x15x3.5', 'Marrón', 'Papel', 'Umberto Eco', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(14, 'Crónica de una muerte anunciada', 'Una novela corta escrita por Gabriel García Márquez.', 181.62, 'Novela', 'Editorial Oveja Negra', NULL, 'SKU014', 'UPC014', 130, 'https://example.com/productos/14', 'https://images-na.ssl-images-amazon.com/images/I/81af+MCATTL.jpg', '2023-01-01', NULL, 4.60, 800, 0.40, '20x13x2', 'Gris', 'Papel', 'Gabriel García Márquez', '2024-06-21 21:16:15', '2024-06-21 21:16:15'),
(15, 'Rayuela', 'Una novela escrita por el autor argentino Julio Cortázar.', 217.98, 'Novela', 'Editorial Sudamericana', NULL, 'SKU015', 'UPC015', 120, 'https://example.com/productos/15', 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Rayuela_JC.png', '2023-01-01', NULL, 4.50, 900, 0.90, '21x14x3', 'Azul', 'Papel', 'Julio Cortázar', '2024-06-21 21:16:15', '2024-06-21 21:16:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
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
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8sE1NJ8GXb2lgTZ3m9TDqKVeWvTIWBHE8IEqe4rT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRUVPc0VkdjlIMkZCbTdGNlZJRDcxYTRLYWtkanIwODk3NHFrUkxGcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wZXJmaWwiO319', 1719420713);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `ultimo_login` timestamp NULL DEFAULT NULL,
  `estado_cuenta` varchar(255) DEFAULT NULL,
  `tipo_usuario` varchar(255) DEFAULT NULL,
  `numero_tarjeta` varchar(16) DEFAULT NULL,
  `fecha_expiracion_tarjeta` date DEFAULT NULL,
  `codigo_seguridad_tarjeta` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `fecha_nacimiento`, `genero`, `telefono`, `direccion`, `ciudad`, `estado`, `codigo_postal`, `pais`, `ultimo_login`, `estado_cuenta`, `tipo_usuario`, `numero_tarjeta`, `fecha_expiracion_tarjeta`, `codigo_seguridad_tarjeta`) VALUES
(1, 'Bryan', 'brayan@example.com', NULL, '$2y$12$ybQwt2v5kBRTk/Fpu3xkee1wW/OX/fkAd1N0eBC9bc/mGBpcXnRv6', 'DY0aNBlDsFQGUfmQqcLWWv6revG00t3lDvQOHlalYjS4GIWnhQLXV2RYg8ZY', '2024-06-21 05:33:58', '2024-06-26 01:32:44', '2003-02-10', 'M', '3326992453', 'Bruno Martinez', 'Guadalajara', 'Jalisco', '44984', 'Mexico', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Edmundo', 'edumundo@gmail.com', NULL, '$2y$12$rvYiH5sbdIKTd5vCpV5nR.YdUmINS/bCAvZU/ufSiNIoqk61rEED6', NULL, '2024-06-25 02:22:48', '2024-06-25 02:22:48', '2003-06-26', 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
