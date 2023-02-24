-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2023 a las 10:34:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutrifit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `ID` int(11) NOT NULL,
  `nombre_receta` varchar(45) NOT NULL,
  `tiempo_ejecucion` int(100) NOT NULL,
  `complejidad` set('facil','intermedio','complejo') NOT NULL,
  `tipo_comida` set('desayuno','media_mañana','almuerzo','merienda','cena') NOT NULL,
  `ingredientes` text NOT NULL,
  `preparacion` text NOT NULL,
  `calorias` int(3) NOT NULL,
  `carbohidratos` int(3) NOT NULL,
  `proteinas` int(3) NOT NULL,
  `grasas` int(3) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`ID`, `nombre_receta`, `tiempo_ejecucion`, `complejidad`, `tipo_comida`, `ingredientes`, `preparacion`, `calorias`, `carbohidratos`, `proteinas`, `grasas`, `foto`) VALUES
(1, 'Fresas con nata', 5, 'facil', 'merienda', 'Fresas con nata', 'Lavar y cortar las fresas\r\nEcharle nata por encima', 200, 10, 20, 50, '../fotos/postres-con-fresas-y-nata.jpg'),
(4, 'Tostadas con aguacate y crema de queso fresco', 5, 'facil', 'desayuno', '230 - 250 g de queso fresco en trozos\r\n2 - 3 pellizco de sal\r\n20 g de aceite de oliva (y un poco más para servir)\r\n30 g de nueces peladas\r\n6 - 8 rebanadas de pan tostado\r\n1 aguacate pelado, en rebanadas\r\n1 - 2 pellizcos de pimienta molida', 'Hacerlo', 179, 16, 7, 10, '../fotos/tostadas_aguacate_quesocrema.jpg'),
(5, 'Brownie con caramelo', 120, 'facil', 'merienda', 'Caramelo:\n\n250 g de azúcar\n180 g de nata (35% de grasa)\n1030 g de agua\n1 cucharadita de zumo de limón\n30 g de mantequilla\n1 cucharada de vinagre\n\nBrownie:\n\n200 g de chocolate fondant para postres (50% cacao)\n90 g de avellanas tostadas\n100 g de mantequilla en trozos\n3 huevos\n160 g de azúcar moreno\n130 g de harina de repostería\n5 g de levadura química en polvo', 'Asi de prepara asi asi', 537, 53, 7, 33, '../fotos/brownie_con_caramelo.jpg'),
(6, 'Wrap de tortilla con espinacas y champiñón', 40, 'facil', 'cena', '30 g de queso parmesano en trozos\r\n3 huevos\r\n3 - 4 pellizcos de sal\r\n2 pellizcos de pimienta molida\r\n330 g agua\r\n140 g de espinacas baby frescas\r\n300 g de champiñones laminados\r\n20 g de aceite de oliva\r\n50 g de queso cremoso\r\n1 - 2 pellizcos de pimienta de Cayena molida (opcional)\r\n2 cucharadas de maíz en conserva\r\n100 g de hojas baby de ensalada variada', 'Hacerlo guay', 400, 13, 24, 30, '../fotos/wrap_tortilla_con_espinacas_champiñon.jpg'),
(7, 'Smoothie de pera con verduras', 5, 'facil', 'media_mañana', '180 g de pera (sin semillas), en trozos\r\n150 g de pepino pelado, en trozos\r\n50 g de hojas de lechuga en trozos\r\n½ limón pelado (sin nada de parte blanca ni pepitas)\r\n1 - 2 cucharadas de jarabe de agave\r\n250 g de agua fría\r\n50 - 100 g de cubitos de hielo', 'Batirlo todo', 51, 13, 1, 0, '../fotos/smoothie_pera_verduras.jpg'),
(10, 'Bacalao con bechamel sobre salsa de pimientos', 45, 'facil', 'almuerzo', 'Salsa de pimientos:\r\n\r\n4 dientes de ajo\r\n40 g de aceite de oliva\r\n500 g de pimiento rojo en trozos\r\n1 cucharadita de sal\r\n1 cucharadita de azúcar\r\n\r\nBechamel:\r\n\r\n50 g de aceite de oliva\r\n70 g de harina de trigo\r\n600 g de leche\r\n1 cucharadita de sal\r\n1 - 2 pellizcos de pimienta molida\r\n1 - 2 pellizcos de nuez moscada molida\r\n6 lomos de bacalao al punto de sal\r\n50 g de queso rallado (opcional)', 'Hacerlo jejeje', 495, 19, 56, 21, '../fotos/bacalao_bechamel_salsa_pimientos.jpg'),
(11, 'Huevo con jamón', 10, 'facil', 'desayuno', '50 g de jamón (pechuga de pavo ahumada)\r\n\r\nhuevo', 'Batir huevo, echar en la sartén y añadir jamón', 130, 1, 15, 7, '../fotos/huevo_con_jamon.jpg'),
(12, 'Sopa vegana de hongos', 45, 'facil', 'almuerzo', '50 g de mezcla de arroz salvaje\r\nagua caliente para remojar\r\n30 g de cebolla\r\n1 diente de ajo\r\n100 g de hongos, frescos, en rebanadas\r\n40 g de poro, en rebanadas\r\n30 g de mantequilla vegetal, o vegana\r\n150 g de agua\r\n150 g de leche de coco\r\n1 cdita de concentrado de caldo de verduras en polvo\r\n1 cdita de orégano seco\r\n¼ cdita de sal\r\n¼ cdita de pimienta molida\r\nperejil fresco, para adornar\r\n½ limón verde, cortados en cuartos\r\npan, cortadas en rebanadas, tostados, para servir', 'Hervir arroz, picar cebolla y diente de ajo y poner en sartén junto con la mantequilla, leche de coco y demás especias, cuando el arroz esté hecho, poner en sartén junto con la salsa.', 702, 62, 15, 38, '../fotos/sopa_de_hongos.jpg'),
(13, 'Muesli con manzana y yogur (sin gluten)', 5, 'facil', 'desayuno', '2 orejones de albaricoque\r\no bien 2 higos secos (consultar lista FACE)\r\n1 manzana con piel, sin pepitas y en cuartos\r\n20 g de nueces peladas\r\n1 cucharadita de pasas sin semillas\r\no bien 1 cucharadita de arándanos rojos deshidratados\r\n1 cucharadita de pipas de girasol\r\n30 g de copos de mijo\r\n10 g de miel\r\n1 yogur natural (125 g)', 'Picar todo y mezclarlo', 537, 66, 15, 23, '../fotos/muesli_manzana_yogur.jpg'),
(14, 'Almejas a la portuguesa', 25, 'facil', 'cena', '850 g de almejas, vivas depuradas\r\n600 g de agua\r\n5 g de sal de mar, gruesa\r\n15 g de cilantro fresco\r\n15 g de ajo\r\n50 g de aceite de oliva\r\n5 rebanadas de pan campesino, tostadas\r\n2 limones amarillos', 'Limpiar y hervir almejas,echar sal, ajo, aceite de oliva', 1532, 110, 120, 65, '../fotos/Almejas_portuguesa.jpg'),
(15, 'Arroz con lentejas', 50, 'facil', 'almuerzo', '150 g de lentejas, lavadas y escurridas\r\n1500 g de agua\r\n1 cdita de sal\r\n1 cdita de concentrado de caldo de verduras en polvo\r\n150 g de arroz, enjuagado y escurrido', 'Hervir arroz con lentejas en el caldo, echar sal', 1088, 218, 47, 3, '../fotos/Arroz_con_lentejas.jpg'),
(16, 'Caldo de pollo', 35, 'facil', 'cena', '250 g de rabadilla de pollo\r\n250 g de pechugas de pollo, con piel y sin hueso\r\n250 g de poro, en trozos\r\n2 ramas de perejil fresco\r\n2 ramas de apio, en mitades\r\n2 zanahorias, en mitades\r\n100 g de cebolla, en trozos\r\n1 cda de concentrado de caldo de pollo\r\n1 cdita de sal fina, o al gusto\r\n1 cdita de azúcar\r\n1750 g agua', 'Echar pollo en caldo y dejarlo hervir', 540, 65, 65, 5, '../fotos/caldo_de_pollo.jpg'),
(17, 'Chiles en escabeche', 45, 'facil', 'cena', '600 g de agua\r\n175 g de cebolla de cambray\r\n175 g de coliflor, en ramillete\r\n175 g de papas cambray, cortadas en cuartos\r\n150 g de zanahoria, peladas y en rodajas\r\n100 g de aceite\r\n8 dientes de ajo\r\n250 g de chiles cuaresmeños, cortados en rodajas\r\n60 g de vinagre\r\n½ cucharadita de pimienta negra entera\r\n2 hojas de laurel, secas\r\n2 cucharaditas de orégano\r\n½ cucharadita de tomillo seco\r\n1 ½ cucharadita de sal', 'Hervir papas, coliflor, añadir especias', 116, 10, 2, 8, '../fotos/chiles_escabeche.jpg'),
(18, 'Pizza de masa de coliflor con garbanzos', 40, 'facil', 'almuerzo', 'Base de pizza\r\naceite de oliva, para engrasar\r\n40 g de queso parmesano, en trozos\r\n500 g de coliflor, en trozos (3 cm)\r\n80 g de queso de cabra\r\n1 huevo\r\n½ cdita de sal\r\n½ cdita de pimienta negra molida\r\nMontaje\r\n1 diente de ajo, pelado\r\n20 g de aceite de oliva\r\n200 g de jitomate triturado\r\n½ cdita de paprika\r\n½ cdita de semillas de hinojo (opcional)\r\n¼ cdita de sal\r\n3 hojas de albahaca frescas\r\n150 g de queso mozzarella, en rebanadas\r\n80 g de garbanzo blanco cocido, enjuagado y escurrido\r\n1 cdita de orégano seco\r\n1 - 2 pizcas de hojuelas de chile seco', 'Hacer masa, añadir tomate, queso y garbanzos', 11303, 52, 88, 88, '../fotos/Pizza_masa_coliflor_garbanzos.jpg'),
(19, 'Tortilla francesa rellena de espinacas y ques', 20, 'facil', 'cena', '40 g de queso emmental\r\n1 huevo L (63-73 g)\r\n2 pellizcos de sal\r\n2 pellizcos de pimienta negra molida\r\n20 g de harina de trigo\r\n40 g de leche\r\n1 chalota\r\n1 ½ cucharadas de aceite de oliva\r\n100 g de espinacas baby frescas\r\n1 pellizco de nuez moscada molida (opcional)\r\n100 g de tomates cherry cortados por la mitad', 'Hacer tortilla y espinacas', 520, 22, 26, 36, '../fotos/Toetilla_espinacas.jpg'),
(20, 'Batido alto en proteína', 10, 'facil', 'merienda', '30 g de espinaca, lavada y desinfectada\r\n360 g de leche de soya, sin azúcar\r\n120 g de plátano, en trozos\r\n1 cda de proteína en polvo (1 porción - ver tip)\r\n30 g de mantequilla de cacahuate\r\n1 cdita de cocoa en polvo\r\n1 cdita de semillas de cáñamo', 'Mezcla y batir espinacas, plátano, mantequilla, cocoa y semillas', 496, 40, 26, 29, '../fotos/batido_proteinas.jpg'),
(21, 'Helado cheesecake con fresas low carb', 10, 'facil', 'merienda', '225 g de queso mascarpone\r\n190 g de queso crema\r\n700 g de leche\r\n15 g de polvo de stevia o 60 gotas de stevia líquida\r\n1 cda de vainilla\r\n250 g de fresas frescas, cortadas en cuartos', 'Batir fresas con queso y leche', 1979, 63, 56, 171, '../fotos/Helado_fresa.jpg'),
(23, 'Babarois de menta con chocolate', 20, 'facil', 'media_mañana', '500 g de leche\r\n180 g de azúcar\r\n6 yemas de huevo\r\n2 ½ sobres de grenetina en polvo, Knox\r\n2 gotas de esencia de menta\r\n1 gota de colorante, verde\r\n500 g de crema para batir, fría', 'Mezclar huevo, crema, leche y azúcar', 392, 36, 9, 28, '../fotos/Babarois_menta_chocolate.jpg'),
(25, 'Cheesecake de frutos rojos', 20, 'facil', 'media_mañana', '\r\n240 g de galletas de vainilla\r\n70 g de mantequilla sin sal, en cubos\r\n370 g de queso crema\r\n110 g de crema para batir (30-40% grasa)\r\n150 g de azúcar\r\nla ralladura de 1 naranja de una pieza\r\n1 vaina de vainilla, solo la pulpa\r\n110 g de agua\r\n2 cditas de grenetina en polvo\r\n50 g de glucosa\r\n170 g de fresas\r\n35 g de frambuesas\r\nhierbabuena fresca para decorar', 'Mezclar todo', 636, 55, 8, 44, '../fotos/Cheescake.jpg'),
(26, 'Mousse de mamey', 5, 'facil', 'merienda', '1 sobre de grenetina en polvo\r\n50 g de agua\r\n200 g de crema para batir (min 30% de grasa)\r\n75 g de leche condensada\r\n2 mameyes, muy maduros\r\nframbuesas, para decorar\r\nfresas, para decorar', 'Mezclar todo y dejarlo calentar', 123, 16, 3, 6, '../fotos/Mousse_mamey.jpg'),
(27, 'Lubina al vapor', 30, 'intermedio', 'cena', 'Aceite de albahaca\r\n30 g de aceite de oliva\r\n100 g de aceite de girasol\r\n30 g de hojas de albahaca frescas\r\n½ cucharadita de sal\r\nCremoso de patatas, lubina y tomates asados\r\n100 g de tomates cherry\r\n3 pellizco de sal\r\n1 chorrito de aceite de oliva\r\n1 lubina (de aprox. 1000 g) en 2 filetes, sin espinas\r\n500 g de patatas rojas en trozos\r\n300 g de leche\r\n30 g de mantequilla\r\n1 cucharadita de sal', 'Nivel intermedio', 1033, 25, 110, 53, '../fotos/LuBina_vapor.jpg'),
(28, 'Carrot cake sin horno', 30, 'facil', 'media_mañana', 'Bizcocho\r\n1 cucharadita de mantequilla (para engrasar)\r\n200 g de zanahoria rallada (fino)\r\n130 g de harina de repostería\r\n75 g de azúcar\r\n75 g de azúcar moreno\r\n120 g de compota de manzana (natural, sin azúcar)\r\n2 huevos\r\n1 cucharadita de canela molida\r\n1 cucharadita de levadura química en polvo\r\n½ cucharadita de bicarbonato\r\n1 pellizco de sal\r\n1 pellizco de nuez moscada molida\r\n1 cucharada de vainilla líquida\r\n60 g de nueces pacanas troceadas\r\n60 g de pasas sin semillas (opcional)\r\n1200 g de agua\r\nFrosting\r\n120 g de queso cremoso\r\n60 g de mantequilla a temperatura ambiente, en trozos\r\n30 g de azúcar glas\r\n20 - 30 g de nueces pacanas troceadas', 'Hacer mezcla y poner en nevera', 373, 43, 5, 21, '../fotos/Carrot_cake_horno.jpg'),
(29, 'Fiambre de pavo, piquillo y pistachos', 30, 'intermedio', 'desayuno', '100 g de jamón cocido en dados\r\n75 g de dados de beicon ahumado\r\n600 g de pechuga de pavo sin piel ni hueso en trozos de 2-3 cm\r\n150 g de queso de Burgos en trozos\r\n20 g de pistachos (sin piel y sin sal)\r\n3 pimientos del piquillo en trozos de 1 cm\r\n1 cucharadita de sal\r\n1 - 2 pellizcos de pimienta molida\r\n8 huevos de codorniz cocidos y pelados\r\n500 g de agua\r\n', 'Hacer fiambre', 238, 2, 128, 12, '../fotos/Fiambre_pavo.jpg'),
(30, 'Tostas de crema de salmón y lombarda', 15, 'facil', 'desayuno', 'Crema de salmón ahumado\r\n400 g de salmón ahumado en lonchas o trozos\r\n500 g de nata (35% de grasa)\r\n1 - 2 ramitas de eneldo fresco hojas y parte del tallo\r\n1 cucharadita de sal\r\n2 pellizcos de pimienta molida\r\nEnsalada de lombarda\r\n350 g de lombarda (en trozos de aprox. 5 cm)\r\n1 pera con piel (sin pepitas), en cuartos\r\n10 ramitas perejil fresco (hojas y parte del tallo)\r\n20 g de zumo de limón\r\n10 g de aceite de oliva\r\n1 cucharadita de sal\r\n1 pellizco de pimienta molida\r\nMontaje\r\n24 rebanadas de pan\r\n2 - 3 ramitas de eneldo fresco', 'Hacer crema de salmón y untar en tostada', 182, 17, 7, 10, '../fotos/tostada_salmon.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'nutricionista'),
(3, 'paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dni` char(8) NOT NULL,
  `sexo` enum('Mujer','Hombre') NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `fecha_nacimiento`, `dni`, `sexo`, `correo_electronico`, `password`, `rol_id`) VALUES
(1, 'Admin', 'Admin', '0000-00-00', '00000000', 'Mujer', 'admin@nutrifit.com', 'Admin', 1),
(2, 'Nutricionista', 'Nutricionista', '0000-00-00', '00000000', 'Hombre', 'nutricionista@nutrifit.com', 'Nutricionista1', 2),
(4, 'Eva', 'Tellez', '2023-02-09', '77777777', 'Mujer', 'eva@nutrifit.com', '1234', 2),
(6, 'Francisco', 'Romero', '2018-02-22', '8888', 'Hombre', 'paco@nutrifit.com', '12345', 2),
(12, 'Aaron', 'Blanco', '0000-00-00', '88888888', 'Hombre', 'aaron@nutrifit.com', '1234', 3),
(13, 'Paciente', 'Paciente', '0000-00-00', '88888888', 'Hombre', 'paciente@nutrifit.com', '1234', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_fk_1` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_fk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
