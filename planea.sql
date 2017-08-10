-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-08-2017 a las 02:51:14
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abilities`
--

CREATE TABLE `abilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(10) UNSIGNED NOT NULL,
  `typeability_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `abilities`
--

INSERT INTO `abilities` (`id`, `nombre`, `peso`, `typeability_id`, `profile_id`, `created_at`, `updated_at`) VALUES
(1, 'habilidad 1', 20, 1, 1, '2017-07-25 09:23:57', '2017-07-25 09:23:57'),
(2, 'habilidad 2', 20, 1, 1, '2017-07-25 19:10:23', '2017-07-25 19:10:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicplans`
--

CREATE TABLE `academicplans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academicprogram_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `academicplans`
--

INSERT INTO `academicplans` (`id`, `nombre`, `academicprogram_id`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Plan 1 B', 1, 1, '2017-07-24 06:54:10', '2017-07-24 06:54:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicprograms`
--

CREATE TABLE `academicprograms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `academicprograms`
--

INSERT INTO `academicprograms` (`id`, `nombre`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'CIDBA', 1, '2017-07-24 06:53:24', '2017-07-24 06:53:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicspaces`
--

CREATE TABLE `academicspaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroCreditos` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasTeoricas` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasPracticas` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasTeoPract` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasAsesorias` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasIndependiente` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `habilitable` tinyint(1) NOT NULL,
  `validable` tinyint(1) NOT NULL,
  `homologable` tinyint(1) NOT NULL,
  `nucleoTematico` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `justificacion` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `metodologia` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `evaluacion` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `contenidoConceptual` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `contenidoProcedimental` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `contenidoActitudinal` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `procesosIntegrativos` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `unidades` varchar(9000) COLLATE utf8_unicode_ci NOT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `knowledgearea_id` int(10) UNSIGNED NOT NULL,
  `academicplan_id` int(10) UNSIGNED NOT NULL,
  `activityacademic_id` int(10) UNSIGNED NOT NULL,
  `typeevaluation_id` int(10) UNSIGNED NOT NULL,
  `typemethodology_id` int(10) UNSIGNED NOT NULL,
  `nature_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `academicspaces`
--

INSERT INTO `academicspaces` (`id`, `codigo`, `nombre`, `numeroCreditos`, `horasTeoricas`, `horasPracticas`, `horasTeoPract`, `horasAsesorias`, `horasIndependiente`, `habilitable`, `validable`, `homologable`, `nucleoTematico`, `justificacion`, `metodologia`, `evaluacion`, `descripcion`, `contenidoConceptual`, `contenidoProcedimental`, `contenidoActitudinal`, `procesosIntegrativos`, `unidades`, `semester_id`, `knowledgearea_id`, `academicplan_id`, `activityacademic_id`, `typeevaluation_id`, `typemethodology_id`, `nature_id`, `created_at`, `updated_at`) VALUES
(2, '123', 'Bases de datos', '2', '20', '20', '20', '20', '13', 0, 0, 0, 'nucleo tematico', 'justificacion', 'metodologi', 'evaluacion', 'describe', 'contenido', 'procedimientos ', 'actitudinal', 'integrativos', 'unidad 1 \r\nunidad 2\r\n', 1, 2, 1, 1, 1, 1, 1, '2017-08-08 04:01:09', '2017-08-08 04:01:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activityacademics`
--

CREATE TABLE `activityacademics` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `activityacademics`
--

INSERT INTO `activityacademics` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'actividad 1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authorizes`
--

CREATE TABLE `authorizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rol_id` int(10) UNSIGNED NOT NULL,
  `academicprogram_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faculties`
--

CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `university_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `faculties`
--

INSERT INTO `faculties` (`id`, `nombre`, `university_id`, `created_at`, `updated_at`) VALUES
(1, 'Ciencias Basicas', 1, '2017-07-15 23:17:26', '2017-07-15 23:17:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `knowledgeareas`
--

CREATE TABLE `knowledgeareas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `knowledgeareas`
--

INSERT INTO `knowledgeareas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(2, 'area conocimiento 1', '2017-08-08 03:56:52', '2017-08-08 03:56:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_15_173343_create_universidades_table', 1),
(4, '2017_07_15_173457_create_facultad_table', 1),
(5, '2017_07_15_173553_create_programas_table', 1),
(6, '2017_07_15_173658_create_role_table', 1),
(7, '2017_07_15_173754_create_estadosp_table', 2),
(8, '2017_07_15_173846_create_tmetodologia_table', 3),
(9, '2017_07_15_173923_create_thabilidad_table', 4),
(10, '2017_07_15_173955_create_tevaluacion_table', 5),
(11, '2017_07_15_174111_create_semestre_table', 6),
(12, '2017_07_15_174148_create_natu_table', 6),
(13, '2017_07_15_174344_create_planesa_table', 6),
(14, '2017_07_15_174443_create_perfiles_table', 6),
(15, '2017_07_15_174630_create_autoriza_table', 6),
(16, '2017_07_15_174729_create_actividadesac_table', 6),
(17, '2017_07_15_175307_create_habilidade_table', 7),
(18, '2017_07_15_174853_create_objetivos_table', 8),
(19, '2017_07_15_175043_create_espaciosaca_table', 9),
(20, '2017_07_15_175159_create_requisitos_table', 10),
(21, '2017_07_15_175129_create_objetivoespacio_table', 11),
(22, '2017_07_15_175347_create_pesos_table', 11),
(23, '2017_08_07_214724_create_table_knowledgeareas', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `natures`
--

CREATE TABLE `natures` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `natures`
--

INSERT INTO `natures` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'naturaleza 1', '2017-07-24 07:06:50', '2017-07-24 07:06:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objectiveEspaces`
--

CREATE TABLE `objectiveEspaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `academicspace_id` int(10) UNSIGNED NOT NULL,
  `objective_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `objectiveEspaces`
--

INSERT INTO `objectiveEspaces` (`id`, `academicspace_id`, `objective_id`, `created_at`, `updated_at`) VALUES
(5, 2, 2, '2017-08-08 04:02:27', '2017-08-08 04:02:27'),
(6, 2, 2, '2017-08-08 04:03:13', '2017-08-08 04:03:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objectives`
--

CREATE TABLE `objectives` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(10) UNSIGNED NOT NULL,
  `ability_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `objectives`
--

INSERT INTO `objectives` (`id`, `nombre`, `peso`, `ability_id`, `created_at`, `updated_at`) VALUES
(1, 'objetivo 1', 12, 2, '2017-07-28 06:26:02', '2017-07-28 06:26:02'),
(2, 'Objetivoss', 10, 1, '2017-08-06 01:02:55', '2017-08-06 01:02:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academicplan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `nombre`, `descripcion`, `academicplan_id`, `created_at`, `updated_at`) VALUES
(1, 'perfil', 'Este es el perfil que el plan le otorga a los estudiantes.', 1, '2017-07-24 06:54:10', '2017-07-24 06:54:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requirements`
--

CREATE TABLE `requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `academicspaceD_id` int(10) UNSIGNED NOT NULL,
  `academicspace_id` int(10) UNSIGNED NOT NULL,
  `tipo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `semesters`
--

INSERT INTO `semesters` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'semestre 1', '2017-07-16 00:09:31', '2017-07-16 00:09:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Oferta', '2017-07-24 06:52:53', '2017-07-24 06:52:53'),
(2, 'Vigente', '2017-07-24 06:53:01', '2017-07-24 06:53:01'),
(4, 'Retirado', '2017-07-25 07:27:32', '2017-07-25 07:27:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeabilities`
--

CREATE TABLE `typeabilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `typeabilities`
--

INSERT INTO `typeabilities` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'tipo de habilidad 1', '2017-07-24 07:06:36', '2017-07-25 09:07:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeevaluations`
--

CREATE TABLE `typeevaluations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `typeevaluations`
--

INSERT INTO `typeevaluations` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'evaluacion tipo 1', '2017-07-24 07:07:07', '2017-07-24 07:07:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typemethodologies`
--

CREATE TABLE `typemethodologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `typemethodologies`
--

INSERT INTO `typemethodologies` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'metodologia 1', '2017-07-24 07:06:59', '2017-07-24 07:06:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universities`
--

CREATE TABLE `universities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `universities`
--

INSERT INTO `universities` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Universidad del Quindío', '2017-07-15 23:17:14', '2017-07-15 23:17:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weights`
--

CREATE TABLE `weights` (
  `id` int(10) UNSIGNED NOT NULL,
  `peso` int(11) NOT NULL,
  `tipo` tinyint(3) UNSIGNED NOT NULL,
  `objectiveEspace_id` int(10) UNSIGNED NOT NULL,
  `ability_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `weights`
--

INSERT INTO `weights` (`id`, `peso`, `tipo`, `objectiveEspace_id`, `ability_id`, `created_at`, `updated_at`) VALUES
(5, 12, 1, 5, 1, '2017-08-08 04:02:27', '2017-08-08 04:02:27'),
(6, 9, 0, 6, 1, '2017-08-08 04:03:13', '2017-08-08 04:03:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abilities_typeability_id_foreign` (`typeability_id`),
  ADD KEY `abilities_profile_id_foreign` (`profile_id`);

--
-- Indices de la tabla `academicplans`
--
ALTER TABLE `academicplans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academicplans_academicprogram_id_foreign` (`academicprogram_id`),
  ADD KEY `academicplans_state_id_foreign` (`state_id`);

--
-- Indices de la tabla `academicprograms`
--
ALTER TABLE `academicprograms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academicprograms_faculty_id_foreign` (`faculty_id`);

--
-- Indices de la tabla `academicspaces`
--
ALTER TABLE `academicspaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academicspaces_semester_id_foreign` (`semester_id`),
  ADD KEY `academicspaces_academicplan_id_foreign` (`academicplan_id`),
  ADD KEY `academicspaces_activityacademic_id_foreign` (`activityacademic_id`),
  ADD KEY `academicspaces_typeevaluation_id_foreign` (`typeevaluation_id`),
  ADD KEY `academicspaces_typemethodology_id_foreign` (`typemethodology_id`),
  ADD KEY `academicspaces_nature_id_foreign` (`nature_id`),
  ADD KEY `academicspaces_knowledgearea_id_foreign` (`knowledgearea_id`);

--
-- Indices de la tabla `activityacademics`
--
ALTER TABLE `activityacademics`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `authorizes`
--
ALTER TABLE `authorizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorizes_user_id_foreign` (`user_id`),
  ADD KEY `authorizes_rol_id_foreign` (`rol_id`),
  ADD KEY `authorizes_academicprogram_id_foreign` (`academicprogram_id`);

--
-- Indices de la tabla `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculties_university_id_foreign` (`university_id`);

--
-- Indices de la tabla `knowledgeareas`
--
ALTER TABLE `knowledgeareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `natures`
--
ALTER TABLE `natures`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objectiveEspaces`
--
ALTER TABLE `objectiveEspaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objectiveespaces_academicspace_id_foreign` (`academicspace_id`),
  ADD KEY `objectiveespaces_objective_id_foreign` (`objective_id`);

--
-- Indices de la tabla `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objectives_ability_id_foreign` (`ability_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_academicplan_id_foreign` (`academicplan_id`);

--
-- Indices de la tabla `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requirements_academicspaced_id_foreign` (`academicspaceD_id`),
  ADD KEY `requirements_academicspace_id_foreign` (`academicspace_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typeabilities`
--
ALTER TABLE `typeabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typeevaluations`
--
ALTER TABLE `typeevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typemethodologies`
--
ALTER TABLE `typemethodologies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `weights_objectiveespace_id_foreign` (`objectiveEspace_id`),
  ADD KEY `weights_ability_id_foreign` (`ability_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abilities`
--
ALTER TABLE `abilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `academicplans`
--
ALTER TABLE `academicplans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `academicprograms`
--
ALTER TABLE `academicprograms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `academicspaces`
--
ALTER TABLE `academicspaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `activityacademics`
--
ALTER TABLE `activityacademics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `authorizes`
--
ALTER TABLE `authorizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `knowledgeareas`
--
ALTER TABLE `knowledgeareas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `natures`
--
ALTER TABLE `natures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `objectiveEspaces`
--
ALTER TABLE `objectiveEspaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `typeabilities`
--
ALTER TABLE `typeabilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `typeevaluations`
--
ALTER TABLE `typeevaluations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `typemethodologies`
--
ALTER TABLE `typemethodologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `weights`
--
ALTER TABLE `weights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abilities`
--
ALTER TABLE `abilities`
  ADD CONSTRAINT `abilities_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`),
  ADD CONSTRAINT `abilities_typeability_id_foreign` FOREIGN KEY (`typeability_id`) REFERENCES `typeabilities` (`id`);

--
-- Filtros para la tabla `academicplans`
--
ALTER TABLE `academicplans`
  ADD CONSTRAINT `academicplans_academicprogram_id_foreign` FOREIGN KEY (`academicprogram_id`) REFERENCES `academicprograms` (`id`),
  ADD CONSTRAINT `academicplans_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Filtros para la tabla `academicprograms`
--
ALTER TABLE `academicprograms`
  ADD CONSTRAINT `academicprograms_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);

--
-- Filtros para la tabla `academicspaces`
--
ALTER TABLE `academicspaces`
  ADD CONSTRAINT `academicspaces_academicplan_id_foreign` FOREIGN KEY (`academicplan_id`) REFERENCES `academicplans` (`id`),
  ADD CONSTRAINT `academicspaces_activityacademic_id_foreign` FOREIGN KEY (`activityacademic_id`) REFERENCES `activityacademics` (`id`),
  ADD CONSTRAINT `academicspaces_knowledgearea_id_foreign` FOREIGN KEY (`knowledgearea_id`) REFERENCES `knowledgeareas` (`id`),
  ADD CONSTRAINT `academicspaces_nature_id_foreign` FOREIGN KEY (`nature_id`) REFERENCES `natures` (`id`),
  ADD CONSTRAINT `academicspaces_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `academicspaces_typeevaluation_id_foreign` FOREIGN KEY (`typeevaluation_id`) REFERENCES `typeevaluations` (`id`),
  ADD CONSTRAINT `academicspaces_typemethodology_id_foreign` FOREIGN KEY (`typemethodology_id`) REFERENCES `typemethodologies` (`id`);

--
-- Filtros para la tabla `authorizes`
--
ALTER TABLE `authorizes`
  ADD CONSTRAINT `authorizes_academicprogram_id_foreign` FOREIGN KEY (`academicprogram_id`) REFERENCES `academicprograms` (`id`),
  ADD CONSTRAINT `authorizes_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`),
  ADD CONSTRAINT `authorizes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`);

--
-- Filtros para la tabla `objectiveEspaces`
--
ALTER TABLE `objectiveEspaces`
  ADD CONSTRAINT `objectiveespaces_academicspace_id_foreign` FOREIGN KEY (`academicspace_id`) REFERENCES `academicspaces` (`id`),
  ADD CONSTRAINT `objectiveespaces_objective_id_foreign` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`);

--
-- Filtros para la tabla `objectives`
--
ALTER TABLE `objectives`
  ADD CONSTRAINT `objectives_ability_id_foreign` FOREIGN KEY (`ability_id`) REFERENCES `abilities` (`id`);

--
-- Filtros para la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_academicplan_id_foreign` FOREIGN KEY (`academicplan_id`) REFERENCES `academicplans` (`id`);

--
-- Filtros para la tabla `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_academicspace_id_foreign` FOREIGN KEY (`academicspace_id`) REFERENCES `academicspaces` (`id`),
  ADD CONSTRAINT `requirements_academicspaced_id_foreign` FOREIGN KEY (`academicspaceD_id`) REFERENCES `academicspaces` (`id`);

--
-- Filtros para la tabla `weights`
--
ALTER TABLE `weights`
  ADD CONSTRAINT `weights_ability_id_foreign` FOREIGN KEY (`ability_id`) REFERENCES `abilities` (`id`),
  ADD CONSTRAINT `weights_objectiveespace_id_foreign` FOREIGN KEY (`objectiveEspace_id`) REFERENCES `objectiveEspaces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
