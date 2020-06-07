-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2020 a las 12:11:00
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `usuario` varchar(120) NOT NULL,
  `contraseña` varchar(60) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefono` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`usuario`, `contraseña`, `dni`, `email`, `telefono`) VALUES
('Francisco Alors Fernandez', 'Ny3', '12547899L', 'fran@gmail.com', 626358741),
('Javier Pérez Rodriguez', 'Ny3', '15233369U', 'javielito@gmail.com', 626587415),
('Consolación Barrera Perez', 'Ny4', '15487415P', 'consolacion@gmail.com', 626587415),
('Rocio Alors Barrera', 'Ny4', '47394439h', 'alexa_net89@hotmail.com', 626278472);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `fecha`, `comentario`) VALUES
(1, '@javier', '2020-05-30', 'Me encanta el libro A lo Lejos. Uno de los mejores que he leído.'),
(2, '@ana', '2020-05-31', 'Gran lectura La Familia Imperfecta. Libro 100% recomendable.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta` int(60) NOT NULL,
  `id_libro` int(60) NOT NULL,
  `cantidad` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_venta`, `id_libro`, `cantidad`) VALUES
(1, 6, 2),
(1, 8, 1),
(2, 6, 2),
(2, 8, 1),
(3, 1, 1),
(3, 2, 1),
(3, 8, 1),
(4, 4, 1),
(5, 3, 1),
(6, 4, 1),
(7, 4, 1),
(7, 9, 1),
(8, 1, 2),
(9, 4, 2),
(10, 16, 1),
(11, 11, 1),
(12, 13, 1),
(13, 8, 2),
(13, 14, 1),
(14, 18, 1),
(15, 4, 1),
(15, 6, 1),
(16, 6, 1),
(17, 4, 1),
(18, 19, 1),
(19, 13, 1),
(20, 18, 1),
(21, 17, 1),
(22, 15, 1),
(23, 6, 1),
(23, 18, 1),
(24, 11, 1),
(24, 12, 1),
(25, 2, 1),
(25, 5, 1),
(26, 3, 1),
(26, 12, 1),
(26, 15, 1),
(26, 17, 1),
(27, 5, 1),
(27, 13, 1),
(28, 14, 1),
(28, 18, 1),
(29, 19, 1),
(29, 20, 1),
(30, 6, 2),
(31, 10, 1),
(31, 20, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(120) NOT NULL,
  `imagen` varchar(60) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` float NOT NULL,
  `cantidadalquiler` int(11) NOT NULL,
  `cantidadvender` int(11) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `edicion` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `imagen`, `titulo`, `autor`, `descripcion`, `precio`, `cantidadalquiler`, `cantidadvender`, `genero`, `edicion`, `estado`) VALUES
(1, 'alicia.jpg', 'Alicia en el País de las Maravillas', 'Lewis Carroll', 'Alicia en el país de las maravillas se ha convertido con el paso del tiempo en uno de los grandes clásicos de la literatura universal.', 10.35, 9, 4, 'Novela Contemporanea', 'Edición Ilustrada', 'Habilitado'),
(2, 'alicia2.jpg', 'Alicia en el País de las Maravillas', 'Lewis Carroll', 'Un día aburrido como tantos otros, Alicia se duerme y de este modo entra en el País de las Maravillas de la mano del Conejo Blanco.', 29.26, 10, 13, 'Novela Contemporanea', '3º Edición', 'Habilitado'),
(3, 'alolejos.jpg', 'A lo Lejos', 'Hernan Díaz', 'Un joven inmigrante sueco en California en plena Fiebre del Oro y la guerra civil, emprende una peregrinación imposible en dirección a Nueva York.', 21.62, 8, 13, 'Narrativa extranjera', '3º Edición', 'Habilitado'),
(4, 'cuentoperfecto.jpg', 'Un Cuento Perfecto', 'Elisabet Benavent', 'Érase una vez una mujer que lo tenía todo y un chico que no tenía nada.', 17, 10, 7, 'Novela Romántica', '4º Edición', 'Habilitado'),
(5, 'elCuerpo.jpg', 'El Cuerpo (Cegador,2)', 'Mircea Cartarescu', 'El cuerpo» es el edificio central de la deslumbrante trilogía CEGADOR. Un libro inabarcable, caleidoscópico e intelectualmente subversivo.', 23.75, 10, 13, 'Narrativa extranjera', '4º Edición', 'Habilitado'),
(6, 'elolor.jpg', 'El Olor del Bosque', 'Helene Gestern', 'La vida de Elizabeth Bathori, cambia cuando Alix, de 89 años, le confía las cartas que su tío escribió desde el frente.', 25.55, 10, 3, 'Novela extranjera', '2º Edición', 'Deshabilitado'),
(7, 'lafamila.jpg', 'La Familia Imperfecta', 'Mariolina Ceriotti Migliarese', 'Psicología infantil y educación, sin soluciones prefabricadas, con la intención de repensar nuestro modo de educar.', 13.3, 10, 15, 'Psicología', '2º Edición', 'Habilitado'),
(8, 'lobueno.jpg', 'Lo Bueno de Tener un Mal Día', 'Anabel Gonzalez', 'Si está claro que lo que queremos es ser felices, ¿por qué nos ponemos tantas trabas para conseguirlo?.', 17.95, 10, 8, 'Autoayuda', 'Edición Ilustrada', 'Deshabilitado'),
(9, 'pequeñas.jpg', 'Pequeñas Mujeres Rojas', 'Marta Sanz', 'Marta SCierra la trilogía del detective Arturo Zarco: una novela negra que prolonga la posibilidad de la novela política.', 17.95, 10, 13, 'Novela Negra', '3º Edición', 'Habilitado'),
(10, 'tampocopido.jpg', 'Tampoco Pido Tanto.', 'Megan Maxwell', 'Novela erótica de alto voltaje que volverá a hacer realidad tus más secretas fantasías.', 16.05, 10, 14, 'Novela Romántica', '1º Edición', 'Habilitado'),
(11, 'casisinquerer.jpg', 'Casi Sin Querer', 'Defreds Jose. A. Gomez Iglesias', 'Una nueva mirada al amor y a los poemas del poeta que ha definido a toda una generación.', 20.9, 10, 13, 'Novela Romantica', '1º Edición', 'Habilitado'),
(12, 'LaMadre.jpg', 'La Madre De Frankenstein ', 'Almudena Grande.', 'El apasionante relato de una mujer y un hombre que optaron por resistir en los tiempos más difíciles.', 21.75, 10, 13, 'Novela Contemporanea', '1º Edición', 'Habilitado'),
(13, 'ElCorazon.jpg', 'El Corazón Con Que Vivo', 'Jose María Pérez Peridis', 'Ganador Premio Primavera Novela 2020. Novela apasionante sobre el poder de los afectos, la fuerza de la dignidad y la necesidad de  reconciliación.', 19.98, 10, 12, 'Novela Contemporanea', '1º Edición', 'Habilitado'),
(14, 'HombreSolo.jpg', 'El Hombre Solo.', 'Bernardo Atxaga', 'Unn grupo de amigos con un pasado común, la lucha armada, intenta llevar a cabo la última de las operaciones contra el sistema.', 10.95, 10, 13, 'Narrativa Española', '2º Edición', 'Habilitado'),
(15, 'perdidaCordura.jpg', 'El Día que se Perdió la Cordura.', 'Javier Castillo.', '«A veces el destino nos pone a prueba para que sepamos que existe».', 10.95, 10, 13, 'Policiaca', '3º Edición', 'Deshabilitado'),
(16, 'OjosAgua.jpg', 'Ojos de Agua', 'Domingo Villar', 'El cruento asesinato de un músico sacude la monótona existencia del solitario inspector Leo Caldas.', 10.95, 10, 14, 'Policiaca', '1º Edición', 'Habilitado'),
(17, 'LaInercia.jpg', 'La Inercia Del Silencio.', 'Sara Buho', 'Las palabras de una niña que creció asustada y las de la mujer que se atrevió a entender sus miedos hablando con ella.', 11.95, 10, 13, 'Poesía', '2º Edición', 'Habilitado'),
(18, 'Recordar.jpg', 'Recordar Contraseña', 'Defreds Jose. A. Gomez Iglesias', 'Nos pasamos la vida recordando. ¿En qué momento nos conocimos? ¿Dónde habré dejado las llaves?', 12.75, 10, 11, 'Poesía', '1º Edición', 'Habilitado'),
(19, 'Principito.jpg', 'El principito', 'Antoine De Saint-Exupery', 'Fábula mítica y relato filosófico que interroga acerca de la relación del ser humano con su prójimo y con el mundo.', 7, 10, 13, 'Infantil', '5º Edición', 'Habilitado'),
(20, 'Tierra.jpg', 'Tierra', 'Eloy Moreno', 'El problema de buscar la verdad es encontrarla y no saber qué hacer con ella.', 10.95, 10, 13, 'Novela Contemporanea', '2º Edición', 'Habilitado'),
(21, 'avenida.jpg', 'La avenida de las ilusiones', 'Xavi Barroso', 'De sirvienta en una casa burguesa a estrella del Paralelo.  La vida de una mujer que se adelantó a su tiempo.', 18.95, 10, 15, 'Novela Contemporánea', '2º Edición', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `fechaprestamo` date NOT NULL,
  `fechadevolucion` date NOT NULL,
  `id_libro` int(120) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id`, `fechaprestamo`, `fechadevolucion`, `id_libro`, `titulo`, `usuario`) VALUES
(8, '2020-04-30', '2020-05-15', 2, 'Alicia en el País de las Maravillas', '@conso'),
(77, '2020-05-02', '2020-05-17', 3, 'A lo Lejos', '@javier'),
(97, '2020-05-31', '2020-06-15', 4, 'Un Cuento Perfecto', '@javier'),
(98, '2020-06-01', '2020-06-16', 3, 'A lo Lejos', '@Pedro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(60) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `dni` varchar(60) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `cp` int(60) NOT NULL,
  `telefono` int(60) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `dni`, `correo`, `direccion`, `cp`, `telefono`, `contraseña`) VALUES
(2, '@angel', '14782583O', 'angelito@gmail.com', 'Calle Triana,21', 41711, 626578472, 'Ny3'),
(3, '@pepe', '12365874P', 'pepe@gmail.com', 'Calle Triana,4', 41710, 626874187, 'Ny3'),
(4, '@ana', '15477896J', 'ana@gmail.com', 'C/ Las Flores, 19', 41710, 626587415, 'Ny3'),
(5, '@juanito', '14587796l', 'juanito@gmail.com', 'Calle Pedroso,21', 41710, 626278473, 'Ny3'),
(10, '@conso', '15478821P', 'conso@hotmail.com', 'c/Algeciras,21', 41710, 626587412, 'Ny3'),
(12, '@javier', '15409923s', 'javi_85perez@hotmail.com', 'Calle Pedroso,22', 41710, 626857417, 'Ny3'),
(13, '@alberto', '12587412L', 'albertito@gmail.com', 'Calle Triana,21', 41710, 625874158, 'Ny3'),
(14, '@anita', '12303325a', 'anita@gamil.com', 'Calle Triana,4', 41710, 626258714, 'Ny3'),
(15, '@manuelillo', '15478911l', 'manuelito@gmail.com', 'C/ Las Flores, 19', 41710, 632587147, 'Ny3'),
(16, '@pepito', '12345587P', 'pepito@gmail.com', 'Calle Pedroso,22', 41710, 626587411, 'Ny3'),
(17, '@Pedro', '12547836K', 'pedrito@gmail.com', 'Calle Pedroso,22', 41710, 626852514, 'Ny3'),
(24, 'manu', '25465464h', 'hhh@hotmail.com', 'Calle Morales', 41710, 654654654, 'Ny3'),
(45, '@Ainhoa', '12589635O', 'ainhoa@gmail.com', 'C/ Las Flores, 19', 41581, 626859874, 'Ny3'),
(46, '@Cristiam', '12545695U', 'cris@gmail.com', 'Calle Pedroso,22', 41710, 698258741, 'Ny3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(60) NOT NULL,
  `fechacompra` date NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `fechacompra`, `usuario`, `total`) VALUES
(1, '2020-04-26', '@javier', 69.05),
(2, '2020-04-26', '@javier', 69.05),
(3, '2020-04-26', '@javier', 57.56),
(4, '2020-04-27', '@javier', 19.95),
(5, '2020-04-27', '@javier', 21.62),
(6, '2020-04-27', '@pepe', 19.95),
(7, '2020-05-01', '@javier', 34.95),
(8, '2020-05-02', '@javier', 20.7),
(9, '2020-05-02', '@ana', 34),
(10, '2020-05-09', '@javier', 13.9),
(11, '2020-05-09', '@juanito', 20.9),
(12, '2020-05-09', '@juanito', 19.98),
(13, '2020-05-09', '@juanito', 46.85),
(14, '2020-05-28', '@javier', 15.7),
(15, '2020-05-28', '@javier', 42.55),
(16, '2020-05-28', '@javier', 25.55),
(17, '2020-05-28', '@javier', 19.95),
(18, '2020-05-28', '@javier', 8.6),
(19, '2020-05-28', '@javier', 19.98),
(20, '2020-05-28', '@javier', 15.7),
(21, '2020-05-28', '@javier', 14.9),
(22, '2020-05-28', '@javier', 13.9),
(23, '2020-05-28', '@javier', 38.3),
(24, '2020-05-28', '@javier', 42.65),
(25, '2020-05-28', '@conso', 53.01),
(26, '2020-06-01', '@juanito', 66.27),
(27, '2020-06-01', '@Pedro', 43.73),
(28, '2020-06-01', '@alberto', 23.7),
(29, '2020-06-03', '@Cristiam', 18.9),
(30, '2020-06-03', '@javier', 51.1),
(31, '2020-06-03', '@javier', 27);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_venta`,`id_libro`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`,`titulo`,`edicion`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`,`nombre`,`dni`,`correo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
