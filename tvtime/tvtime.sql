-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2021 a las 01:36:30
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tvtime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `fk_canal` int(11) NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `titulo_articulo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contenido_articulo` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen_articulo` text COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_publicacion` datetime NOT NULL DEFAULT current_timestamp(),
  `date_update_articulo` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `fk_canal`, `fk_categoria`, `titulo_articulo`, `contenido_articulo`, `imagen_articulo`, `fecha_publicacion`, `date_update_articulo`) VALUES
(1, 2, 2, 'LOS SOPRANO', 'Tony Soprano intenta equilibrar los problemas de su familia disfuncional con otra \" familia\" muy diferente - la mafia. Acude a un terapeuta para tratar sus problemas profesionales y personales, que causan ataques de pánico. El \"jefe\" de la organización criminal lidia con luchas de poder, las relaciones amorosas, la violencia, la amenaza constante de ser descubierto y traicionado, y con todas las personas que están en la mira por sus actividades', '../views/img/lossoprano.jpg', '2021-12-11 13:08:04', '2021-12-11 19:08:04'),
(2, 1, 2, 'BREAKING BAD', 'El profesor calmado de química de una secundaria, Walter White cree que su vida no puede ser peor. Su salario apenas le alcanza para sostener a su familia, una situación que no mejora cuando su esposa da a luz y su hijo adolescente sufre de parálisis cerebral, pero Walter queda anonadado cuando se entera que tiene un cáncer terminal. Al concluir que su enfermedad iba a arruinar financieramente a su familia, él toma una decisión desesperada con el fin de ganar más dinero durante el tiempo que le queda y transforma un viejo vehículo de recreación en un laboratorio de matanfetaminas sobre ruedas.', '../views/img/breakingbad.jpg', '2021-12-11 13:08:04', '2021-12-11 19:08:04'),
(3, 1, 2, 'WALKING DEAD', 'Basado en la historieta escrita por Robert Kirkman, este drama crudo describe las vidas de un grupo de sobrevivientes que está siempre en movimiento en busca de un hogar seguro durante las semanas y meses de un apocalipsis zombi. Sin embargo, la presión de estar con vida cada día, lleva a algunos del grupo a la crueldad profunda de cada ser humano y descubren que el miedo abrumador puede ser más mortal que los zombis que caminan a su alrededor. Los conflictos interpersonales pueden representar una amenaza mayor para su supervivencia que los caminantes que deambulan por las calles.', '../views/img/WK3452.jpg', '2021-12-11 00:00:00', '2021-12-11 22:22:04'),
(4, 3, 1, 'AVENGERS END GAME', 'Después de los eventos devastadores de \"Avengers: Infinity War\", el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar detenerlo y restaurar el orden en el universo de una vez por todas.', '../views/img/Avengers4635.jpg', '2021-12-11 00:00:00', '2021-12-11 22:25:56'),
(5, 3, 1, 'AVENGERS END GAME', 'Después de los eventos devastadores de \"Avengers: Infinity War\", el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar detenerlo y restaurar el orden en el universo de una vez por todas.', '../views/img/Avengers2332.jpg', '2021-12-11 00:00:00', '2021-12-11 22:32:52'),
(6, 4, 2, 'SE QUIEN ERES', 'Un hombre vaga por una carretera. Por su estado parece haber sufrido un accidente de tráfico, pero no sabe ni quién es ni cómo ha llegado allí. Se trata de Juan Elías, un carismático abogado y profesor de universidad que está completamente amnésico.', '../views/img/SQE5754.jpg', '2021-12-12 00:00:00', '2021-12-12 14:54:27'),
(7, 2, 2, 'GAME OF THRONES', 'El libro mejor vendido de la serie \"A Song of Ice and Fire\" escrito por George R.R, es llevado a la pantalla chica cuando HBO decide recrear esta historia épica de fantasía. Es la descripción de dos familias poderosas, reyes y reinas, caballeros y renegados, hombres falsos y honestos, haciendo parte de un juego mortal por el control de los Siete Reinados de Westeros y por sentarse en el trono más alto. Martin es el co productor ejecutivo y uno de los escritores de la serie que fue filmada en el Norte de Irlanda y Malta.', '../views/img/GOT1839.jpg', '2021-12-12 00:00:00', '2021-12-12 15:06:50'),
(8, 2, 1, 'THE DEPARTED', 'Billy Costigan (Leonardo DiCaprio), policía del Sur de Boston, trabaja de forma encubierta para infiltrarse en la organización de la pandilla del jefe Frank Costello (Jack Nicholson). Como Billy se gana la confianza del gángster, un criminal de carrera llamado Colin Sullivan (Matt Damon) se infiltra en la policía y reporta sus actividades a los jefes de su sindicato. Cuando ambas organizaciones descubren que tienen a un enemigo en sus filas, Billy y Colin deben descubrir sus identidades.', '../views/img/departed1792.jpg', '2021-12-12 00:00:00', '2021-12-12 19:26:51'),
(9, 3, 2, 'THE MANDALORIAN', 'Las aventuras de Mando, un pistolero solitario y cazarrecompensas que se abre paso a través de las fronteras más remotas de la galaxia, lejos de la jurisdicción de la Nueva República.', '../views/img/images4989.jpg', '2021-12-12 00:00:00', '2021-12-12 20:29:45'),
(10, 2, 2, 'THE WIRE', 'Esta serie se centra en el narcotráfico en Baltimore a través de los ojos de los agentes del orden público, así como los traficantes de drogas y los consumidores. Otras facetas de la ciudad que se exploran en la serie son el gobierno, la burocracia, las escuelas y los medios de comunicación. El programa fue creado por el exreportero policial David Simon, quien también escribió muchos de los episodios.', '../views/img/descarga2063.jpg', '2021-12-12 00:00:00', '2021-12-12 20:32:34'),
(11, 2, 2, 'THE WIRE', 'Esta serie se centra en el narcotráfico en Baltimore a través de los ojos de los agentes del orden público, así como los traficantes de drogas y los consumidores. Otras facetas de la ciudad que se exploran en la serie son el gobierno, la burocracia, las escuelas y los medios de comunicación. El programa fue creado por el exreportero policial David Simon, quien también escribió muchos de los episodios.', '../views/img/descarga4011.jpg', '2021-12-12 00:00:00', '2021-12-12 20:39:20'),
(12, 2, 2, 'SUCCESSION', 'La saga de una familia estadounidense ficticia dueña de un conglomerado internacional de medios que no solo es rica y poderosa, sino que también sus miembros buscan el poder y dirigir el negocio a su manera, a pesar del plan de sucesión establecido.', '../views/img/Succession3148.jpg', '2021-12-12 00:00:00', '2021-12-12 21:39:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canal`
--

CREATE TABLE `canal` (
  `id_canal` int(11) NOT NULL,
  `nombre_canal` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `canal`
--

INSERT INTO `canal` (`id_canal`, `nombre_canal`) VALUES
(1, 'NETFLIX'),
(2, 'HBO MAX'),
(3, 'DISNEY PLUS'),
(4, 'CLARO VIDEO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'PELICULAS'),
(2, 'SERIES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nick_user` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre_usuario` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email_usuario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password_usuario` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado_usuario` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nick_user`, `nombre_usuario`, `email_usuario`, `password_usuario`, `estado_usuario`) VALUES
(1, 'admin', 'Oliver Castillo', 'oyasnier@gmail.com', 'admin', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `fk_categoria` (`fk_categoria`),
  ADD KEY `fk_canal` (`fk_canal`);

--
-- Indices de la tabla `canal`
--
ALTER TABLE `canal`
  ADD PRIMARY KEY (`id_canal`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `canal`
--
ALTER TABLE `canal`
  MODIFY `id_canal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
