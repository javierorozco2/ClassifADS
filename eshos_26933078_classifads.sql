-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql212.byetcluster.com
-- Tiempo de generación: 16-12-2020 a las 10:09:43
-- Versión del servidor: 5.6.48-88.0
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eshos_26933078_classifads`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `condicion` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `idusuario` int(11) NOT NULL,
  `validado` tinyint(1) NOT NULL DEFAULT '0',
  `clasificacion` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id`, `nombre`, `precio`, `condicion`, `estado`, `descripcion`, `idusuario`, `validado`, `clasificacion`) VALUES
(83, 'VENDO JOHAN', 5, 'Servicio', 'CHP', 'Es un johan mu bueno, aveces parece cepillin', 105, 3, 0),
(85, 'Increible Blusa Moda Casual Elegante Muchos Diseno', 199, 'Usado', 'COL', 'Nuestros modelos son cÃ³modos, modernos y tradicionales, por lo que se adaptan a un pÃºblico muy amplio.\r\ncualquier duda no dudes en preguntar\r\nTalla\r\nChica es 30\r\nMediana 32\r\nGrande 34\r\nExtra Grande 36', 110, 3, 0),
(87, 'Virus', 2000, 'Servicio', 'COL', 'Virus\r\n', 110, 3, 0),
(86, 'Hacker', 10000, 'Servicio', 'COL', 'Chingar bancos, celulares, packs lo que quieras ;v', 113, 3, 0),
(88, 'Buscador', 40, 'Servicio', 'COL', 'buscador', 110, 3, 0),
(89, 'Mi primer victoria', 5, 'Usado', 'COL', 'Mi primer victoria el fall guys', 110, 3, 0),
(90, 'Anuncio a lo wey', 62, 'Nuevo', 'DUR', 'Nose que poner aqui', 110, 3, 0),
(91, 'Xbox', 14000, 'Usado', 'COL', 'xbox', 110, 3, 0),
(92, 'Me quiero dar de baja', 4, 'Usado', 'GRO', 'Ayuda esto no es un meme', 110, 3, 0),
(93, 'Primer victoria', 10, 'Usado', 'QRO', 'FallGuys', 110, 3, 0),
(94, 'Fall Guys', 100, 'Servicio', 'COL', 'Mi primera victoria en Fall Guys', 113, 3, 0),
(95, 'Cosa feliz', 300000, 'Nuevo', 'MIC', 'ES UNA COSA MUY FELIZ, SI QUE FELIZ :)', 105, 3, 3),
(97, 'pablo', 5, 'Servicio', 'JAL', 'pablo pablo pablo', 116, 3, 3),
(96, 'hack', 20000, 'holi', 'COL', '>:(', 110, 3, 2),
(98, 'Un sirviente', -5, 'Usado', 'GTO', 'Esta chingadera ya no la quiero', 113, 3, 4),
(99, 'Nada', 25, 'Usado', 'Chihuahua', 'Nada', 110, 3, 6),
(100, 'Borrar', 50, 'Usado', 'Estado de MÃ©xico', 'borrar', 110, 3, 6),
(101, 'Venta IPhone 11 Pro Max 256GB', 24500, 'Nuevo', 'Colima', 'Vendo el telÃ©fono porque me comprÃ© el iPhone 12, solo 5 meses de uso. El telÃ©fono estÃ¡ en un excelente estado, se regalan 2 cases y se entrega con caja y accesorios. Los audÃ­fonos nunca se usaron.', 110, 3, 1),
(102, 'Nada', 20, 'Nuevo', 'Coahuila', 'nada', 110, 3, 1),
(103, 'Nike Air Force One Nba Satin Yellow (28.5 Mex) Ast', 2899, 'Usado', 'Colima', '*****ASTROBOYSHOP SNEAKER STORE****<br />\r\nARTICULOS 100% ORIGINALES CONTAMOS CON MAS DE 13 MIL<br />\r\nCOMPRADORES SATISFECHOS SOMOS MERCADO LIDER DESDE HACE MAS DE 13 AÃ‘OS.<br />\r\n*************************************************************************************************<br />\r\n--MODELO:NIKE AIR FORCE ONE NBA LOW 07 \"WHITE/SATIN YELLOW EDITION\"<br />\r\nDE LO MAS CLASICO DE NIKE, IMPRESIONANTE COMBINACION DE LA NBA.<br />\r\n--NUMERO:28.5 MEX (10.5 US)<br />\r\n--STYLE MODEL:BQ4420-700 CHECALO EN GOOGLE PARA VERIFICAR.<br />\r\n--SE ENVIAN EN SU CAJA AF1 Y CALCETAS DE REGALO.<br />\r\n*************************************************************************************************<br />\r\nEl envio es gratis para tu mayor comodidad , para saber el tiempo aproximado de entrega ingresa tu codigo postal en la<br />\r\nzona donde dice \"mercado envios\" Tu compra sera enviada el mismo dia si esta procesada antes de las 4 de la tarde no<br />\r\nfallamos por eso mercado libre nos premia con la insignia de mercado lider .<br />\r\n*****TEN POR SEGURO QUE TU COMPRA SERA UNA AGRADABLE EXPERIANCIA , MIL GRACIAS POR TU PREFERENCIA*****<br />\r\n***************************************************************************************<br />\r\nASTROBOYSHOP SNEAKER STORE (Since 2006)', 110, 1, 2),
(104, 'MIRAGE GLX MT', 129000, 'Nuevo', 'Colima', '***MENCIONA QUE VISTE EL ANUNCIO EN SEGUNDAMANO Y RECIBE UN GRAN DESCUENTO ADICIONAL***<br />\r\n<br />\r\n***Tenemos las mejores promociones para ti. Compra un auto seminuevo y a partir del 25% de enganche del valor de la unidad, pagas tu primera mensualidad en FEBRERO***<br />\r\n*Agenda una cita virtual y recibe un bono de descuento o una garantÃ­a extendida (comunÃ­cate con un asesor para mayor informaciÃ³n).<br />\r\n<br />\r\n*Tomamos tu auto a cuenta<br />\r\n*Facturamos a tu nombre.<br />\r\n*GarantÃ­a de 90 dÃ­as en motor y transmisiÃ³n<br />\r\n*Documentos en regla.<br />\r\n*La unidad se entrega con estÃ©tica interior y exterior.<br />\r\n*Adquiere tu auto de contado o a crÃ©dito desde 20% de enganche y plazo hasta de 48 meses.<br />\r\n<br />\r\nLos requisitos para el crÃ©dito son:<br />\r\n<br />\r\n*IdentificaciÃ³n oficial.<br />\r\n*Comprobante de domicilio actual.<br />\r\n*Comprobantes de ingresos de los Ãºltimos 3 meses (estados de nÃ³mina o estados de cuenta bancarios).<br />\r\n*Solicitud de crÃ©dito firmada.<br />\r\n<br />\r\nLlama y solicita tu prueba de manejo.<br />\r\nContamos con sistema de apartado.<br />\r\n<br />\r\n<br />\r\n***Para mayores informes llÃ¡manos o envÃ­anos WhatsApp***<br />\r\n5580456110/5615528137<br />\r\nKaren Corona<br />\r\nMitsubishi Seminuevos San Ãngel', 110, 1, 0),
(105, 'IPhone 11 Pro Max 256gb Libre', 23000, 'Usado', 'Colima', 'iPhone 11 Pro Max de 256 gb. Libre para cualquier compaÃ±Ã­a. EstÃ©tica de 9,8. EntregÃ³ caja, manuales, cargador y protector.<br />\r\n<br />\r\nNo depÃ³sitos ni transferencias', 110, 1, 1),
(106, 'Smart TV Samsung Series 6 UN55TU6900FXZX LED 4K 55', 11299, 'Nuevo', 'Colima', 'Samsung es reconocida a nivel mundial como una empresa lÃ­der en la industria tecnolÃ³gica. Todos sus productos son diseÃ±ados con una calidad superior y pensados para contribuir a un futuro mejor. Por eso, harÃ¡ que disfrutes de una experiencia incomparable.<br />\r\nCon el Smart TV UN55TU6900 accederÃ¡s a las aplicaciones donde se encuentran tus contenidos favoritos. AdemÃ¡s, podrÃ¡s navegar por Internet, interactuar en redes sociales y divertirte con videojuegos.<br />\r\n<br />\r\nVive en 4K<br />\r\nLa cantidad de pixeles que ofrece es 4 veces mayor que la Full HD, Â¿el resultado? Escenas mucho mÃ¡s realistas y con un nivel de detalle increÃ­ble. Ahora vas a conocer una aventura de inmersiÃ³n que no va a dejar de sorprenderte.<br />\r\n<br />\r\nUn sonido que te envuelve<br />\r\nVas a sentir que proviene desde todas las direcciones posibles, lo cual enriquece la percepciÃ³n del mismo. Los diÃ¡logos de tus series de fin de semana o la mÃºsica de tus cantantes preferidos cobrarÃ¡n otro significado.', 135, 1, 1),
(107, 'Jordan 1 low', 3000, 'Nuevo', 'Colima', 'Jordan 1 retro low de piel', 136, 1, 2),
(108, 'Moto G4', 3500, 'Usado', 'Colima', 'Moto G4', 140, 1, 1),
(109, 'Mv Agusta F3 675 2012 Impecable!!!', 179900, 'Usado', 'Estado de MÃ©xico', 'MV AGUSTA F3 675 2012<br />\r\n<br />\r\nMV AGUSTA F3 675 2012 FACTURA DE AGENCIA, SEGUNDO DUEÃ‘O, TODO PAGADO AL 2020, PLACAS, MOTOR 675cc.<br />\r\n<br />\r\nEXCELENTES CONDICIONES!!!<br />\r\n', 113, 1, 0),
(110, 'Bmw Sport Turismo K1200 R 1200 2008', 143000, 'Usado', 'Campeche', 'Impecables condiciones,<br />\r\nnunca caida<br />\r\npintura original<br />\r\nmaletas desmontables (no se venden separadas junto con la moto)<br />\r\nplacas Nuevo Leon<br />\r\nSuper potente,<br />\r\nexelentes condiciones', 113, 1, 0),
(111, 'Scooter Electrico (patin Electrico)', 15000, 'Nuevo', 'Colima', 'EstÃ¡ hecho de estructura metÃ¡lica.<br />\r\nEstÃ¡n impulsados por un potente motor sin escobillas.<br />\r\nSe alimenta de dos baterÃ­as de litio.<br />\r\nTienen un manillar alto con frenos.<br />\r\nRuedas anchas y gruesas. (Ã‰sta caracterÃ­stica hace cuando pasemos por escalones, baches, y demÃ¡s imperfecciones del terreno, las ruedas lo amortigÃ¼en y el conductor no aprecie el impacto). .AutonomÃ­a media de unos 60 km.<br />\r\nEl tiempo de carga total dura entre 5 a 7 horas.<br />\r\nSu peso suele rondar los 45kg. Dependiendo del modelo.<br />\r\nSoportan un peso mÃ¡ximo de 200kg.<br />\r\nRuedas de 8 pulgadas de diÃ¡metro, le dan la estabilidad necesaria al vehÃ­culo para que se pueda usar tanto de pie como sentados.<br />\r\nTienen frenos de disco o frenos hidrÃ¡ulicos.<br />\r\nLuces de led.', 113, 1, 0),
(112, 'Mini Cuatrimoto Atv 50cc', 10500, 'Nuevo', 'Jalisco', 'IDEAL PARA NIÃ‘OS DE 5 AÃ‘OS EN ADELANTE<br />\r\nMOTOR 2 TIEMPOS 50cc<br />\r\n1 CILINDRO<br />\r\nENFRIADO POR AIRE<br />\r\nCAPACIDAD DE COMBUSTIBLE 1.2 LTS<br />\r\nENCENDIDO DE JALON<br />\r\nAUTOMATICA<br />\r\nCAPACIDAD DE CARGA 75 KGS<br />\r\nVEL MAX 45 KMS/HR<br />\r\nTIPO DE COMBUSTIBLE: GASOLINA CON ACEITE<br />\r\nTRANSMISION DE CADENA<br />\r\nFRENOS DE DISCO<br />\r\nSWITCH PARA APAGADO DE EMERGENCIA<br />\r\nMEDIDA DE LLANTA 6 PULGADAS<br />\r\nALTURA DEL ASIENTO AL PISO 60 cms', 113, 1, 0),
(113, 'Mini Cross 2020', 7000, 'Usado', 'Colima', 'ESPECIFICACIONES:<br />\r\nMOTOR 2 TIEMPOS ENFRIADO POR AIRE<br />\r\nDESPLAZAMIENTO DE PISTONES 49 C.C.<br />\r\nVELOCIDAD MAX. 60 KM/HR<br />\r\nSISTEMA DE IGNICIÃ“N CDI<br />\r\nTRANSMISIÃ“N AUTOMÃTICA<br />\r\nSISTEMA DE TRACCIÃ“N TRASERA<br />\r\nLARGO TOTAL 118 CM<br />\r\nALTO DEL PISO AL ASIENTO 62 CM<br />\r\nALTO DEL PISO AL MANUBRIO 75 CM.<br />\r\nPESO EN SECO 22 KG.<br />\r\nSUSPENSIÃ“N DELANTERA INVERTIDA DE ALUMINIO<br />\r\nSUSPENSIÃ“N TRASERA MONO SHOCK<br />\r\nCAPACIDAD DE CARGA 60 KG.<br />\r\nFRENO DELANTERO DISCO<br />\r\nFRENO TRASERO DISCO<br />\r\nLLANTA DELANTERA 2.5-10<br />\r\nLLANTA TRASERA 2.5-10<br />\r\nMEDIDAS DE RIN 6.5 Y 6.5<br />\r\nRINES ALUMINIO<br />\r\n<br />\r\nSISTEMA DE ARRANQUE:<br />\r\nPIOLA (jalon)<br />\r\nARMAZÃ“N:<br />\r\nTUBO SOLDADO DE ACERO', 113, 1, 0),
(114, 'Ford Mustang 3.8 Coupe 3.7 V6 At', 539000, 'Usado', 'Chihuahua', 'Ford Mustang 2019 Ecoboost Coupe<br />\r\n<br />\r\nDÃ©jate cautivar por Ford Mustang 2019, el poderoso auto deportivo que lleva las sensaciones al lÃ­mite. ManÃ©jalo en calle o carretera y prepÃ¡rate para escuchar el impresionante rugido de su motor mientras aceleras y elevas tu adrenalina al mÃ¡ximo. Â¡Domina su poder!<br />\r\n<br />\r\nÂ¿QUE HAY EN SU MOTOR DE ESTE MUNSTANG?<br />\r\nNos encontramos un motor2.3 litro turbo, 4 cilindros, trasmisiÃ³n automÃ¡tica, 10 velocidades,310 HP, 5 modos de manejo', 113, 1, 0),
(115, 'Hummer H2 6.2 Ee Qc Piel Pickup Adventure 4x4 At', 399000, 'Nuevo', 'Guanajuato', 'COMPLETAMENTE CARGADA, TOTALMENTE ELÃ‰CTRICA, LISTA PARA CAMBIAR EL JUEGO PARA SIEMPRE.<br />\r\n<br />\r\nÂ¿QUE HAY EN EL MOTOR DE ESTA HUMMER?<br />\r\nNos encontramos con un motor V8 tracciÃ³n 4x4 8 cilindros con 316HP<br />\r\n<br />\r\nÂ¿QUE DESTACA EN SU INTERIOR?<br />\r\nEl interior seguÃ­a la misma filosofÃ­a del exterior con conjuntos rectos y circulares, ademÃ¡s de una palanca de velocidades caracterÃ­stica que nos recuerda un poco a los controles de potencia para ciertos aviones. RecurrÃ­a a varias superficies de plÃ¡stico duro para soportar los malos tratos, pero tambiÃ©n cuenta con asientos forrados en piel y algunas otras comodidades para el dÃ­a a dÃ­a.', 113, 1, 0),
(116, 'Nissan Titan 5.6l S V8/ 4x4 At', 249000, 'Nuevo', 'Nayarit', 'CARTRADEX<br />\r\n<br />\r\nNISSAN TITAN CREW CAB S 4X4 2014<br />\r\n<br />\r\nTITAN CREW CAB S 2014 PAPELES EN REGLA, SEGUNDO DUEÃ‘O, TODO PAGADO AL 2020, MOTOR 5.6lt CON 317hp DE 8cil, TRACCION 4x4, TRANSMISIÃ“N AUTOMÃTICA, DOBLE CABINA, ESTEREO CON PANTALLA, CAMARA DE REVERSA, AIRE ACONDICIONADO, CAJA CON BEDLINER, JALON.', 113, 1, 0),
(117, 'Dodge Dart 2.4 Gt At', 159900, 'Usado', 'Guanajuato', 'CARTRADEX<br />\r\n<br />\r\nDART GT 2014 AUTOMATICO<br />\r\n<br />\r\nDART GT 2014 PAPELES EN REGLA, UNICO DUEÃ‘O, TODO PAGADO AL 2020, MOTOR 2.4lt DE 184hp DE 4cil, TRANSMISION AUTOMATICA DE 6vel, VESTIDURAS EN PIEL, QUEMA COCO DE POSICIONES, ESTEREO CON PANTALLA DE 8.4\" CD/MP3/AM/FM CON 9 BOCINAS ALPINE, BLUETOOTH, GPS, ENCENDIDO ELECTRONICO CON BOTON, FAROS CON XENON, LLAVE DE PRESENCIA, CLIMA AUTOMATICO BIZONA, CONTROLES DE AUDIO AL VOLANTE, FAROS DE NIEBLA, DEFENSA DELANTERA CON ACENTOS EN NEGRO Y ESCAPE DUAL, RINES DE ALUMINIO DE 18Â¨.', 113, 1, 0),
(118, 'Xtreme Pc Gamer Radeon Vega 11 Ryzen 5 8gb Ssd 240', 9890, 'Nuevo', 'Guerrero', 'Xtreme PC Gamer Radeon Vega 11 Ryzen 5 8GB SSD 240GB RGB Wifi<br />\r\n<br />\r\nDomina a todos tus adversarios<br />\r\n<br />\r\nEste Equipo PC revolucionaria el juego, diseÃ±ada desde cero pensando en jugar sin lÃ­mites, no tiene equivalente. Con un poder bestial y los mejores componentes en conjunto para innovar, domina fÃ¡cilmente los Ãºltimos juegos AAA del momento. PodrÃ¡s actualizar tu equipo fÃ¡cilmente para que evolucione contigo, y satisfaga cualquier demanda.', 135, 1, 1),
(119, 'Xtreme Pc Amd Radeon Vega 8 Ryzen 3 Pro 8gb Ssd 24', 6989, 'Nuevo', 'Durango', 'Xtreme PC Gamer AMD Radeon Vega 8 Ryzen 3 Pro 8GB SSD 240GB RGB<br />\r\n<br />\r\nLos GrÃ¡ficos Radeon â„¢ Vega 8 proporcionan un rendimiento rÃ¡pido, sin interrupciones y fluido en los juegos que te apasionan, nÃºcleos de los grÃ¡ficos 8, Frecuencia de grÃ¡ficos 1100 MHz, alto rendimiento que necesitas para trabajos exigentes y juego en serio, sin comprometer la calidad.', 135, 1, 1),
(120, 'Monitor Gamer Xzeal 23.8 Xz3010 1ms 144hz Full Hd ', 4799, 'Nuevo', 'Durango', 'MONITOR GAMING XZEAL XZ3010<br />\r\nDisfruta de tus juegos favoritos con 23.8 pulgadas FULL HD con resoluciÃ³n de 1920 x 1080 en un panel VA con sincronizaciÃ³n FreeSync, experimenta la rÃ¡pida respuesta de 1 ms, y elige la conexiÃ³n que mÃ¡s te guste por DisplayPort o HDMI, asÃ­ como salida de audio desde tu monitor o conexiÃ³n USB.<br />\r\n<br />\r\nESPECIFICACIONES<br />\r\nTamaÃ±o: 23.8â€ 144Hz<br />\r\nPanel: VA<br />\r\nDisplay: Full HD<br />\r\nTiempo de respuesta: 1 ms<br />\r\nResoluciÃ³n: 1920 x 1080 pixeles<br />\r\nColores: 16.7 millones<br />\r\nInput: DisplayPort + HDMI<br />\r\nPower Input: DC 12V / 3A<br />\r\nPuertos: USB + Audio', 135, 1, 1),
(121, 'Monitor BenQ GW2480 led 23.8\" negro 110V/220V', 3989, 'Nuevo', 'Hidalgo', 'Disfruta de todas las cualidades que el monitor BenQ GW2480 tiene para ofrecerte. Percibe las imÃ¡genes de una manera completamente diferente y complementa cualquier espacio ya sea en tu hogar u oficina.<br />\r\n<br />\r\nUn monitor a tu medida<br />\r\nCon tu pantalla LED no solo podrÃ¡s ahorrar energÃ­a, ya que su consumo es bajo, sino que podrÃ¡s ver colores mÃ¡s nÃ­tidos y definidos en tus pelÃ­culas o series favoritas.', 135, 1, 1),
(122, 'Samsung Galaxy S10+ 128 GB blanco prisma 8 GB RAM', 13600, 'Usado', 'Chihuahua', 'Inteligente y predictivo<br />\r\nEl Samsung S10+ cuenta con el sistema operativo avanzado Android 9.0 Pie que aprende tus hÃ¡bitos para adaptarse a tu rutina y lograr la mÃ¡xima eficiencia de tu equipo. Esta tecnologÃ­a vuelve a tu dispositivo tan autÃ³nomo que podrÃ¡ reducir el consumo energÃ©tico, ajustar automÃ¡ticamente el brillo y gestionar la baterÃ­a de manera inteligente.<br />\r\n<br />\r\nFotografÃ­a profesional en tu bolsillo<br />\r\nDescubre infinitas posibilidades para tus fotos con las 3 cÃ¡maras principales de tu equipo. Pon a prueba tu creatividad y juega con la iluminaciÃ³n, diferentes planos y efectos para obtener grandes resultados.', 135, 1, 1),
(123, 'Servicio de instalacion electrica', 0, 'Servicio', 'Colima', '3141638866', 142, 1, 4),
(124, 'Servicio de instalacion electrica', 0, 'Servicio', 'Colima', '3141638866', 143, 0, 4),
(125, 'One Plus 7', 8000, 'Usado', 'Colima', 'Entrego en punto intermedio', 145, 1, 1),
(126, 'TELEFONO MI', 9000, 'Usado', 'Colima', '3141638866', 147, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristica`
--

CREATE TABLE `caracteristica` (
  `id` int(10) NOT NULL,
  `idpublicacion` int(10) NOT NULL,
  `concepto` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caracteristica`
--

INSERT INTO `caracteristica` (`id`, `idpublicacion`, `concepto`, `descripcion`) VALUES
(1, 101, 'Color', 'Gris y negro'),
(2, 101, 'Memoria', '256GB'),
(3, 101, 'Pantalla', 'Truetone'),
(4, 101, 'Resistenciaalagua', 'IP68'),
(5, 101, 'Chip', 'A13'),
(6, 102, 'nada', 'nada'),
(7, 0, 'Marca', 'Nike'),
(8, 0, 'Modelo', 'BQ4420700'),
(9, 0, 'Genero', 'Hombre'),
(10, 103, 'Marca', 'Nike'),
(11, 103, 'Modelo', 'BQ4420-700'),
(12, 103, 'Genero', 'Hombre'),
(13, 104, 'Mitsubishi', 'Mirage 2017'),
(14, 104, 'Kilometraje', '70,190'),
(15, 104, 'TransmisiÃ³n', 'Manual'),
(16, 105, 'Ubicacion', 'Colima'),
(17, 105, 'Marca', 'Apple'),
(18, 105, 'Memoria', '256 GB'),
(19, 106, 'TamaÃ±o', '55 pulgadas'),
(20, 106, 'Resolucion', '4K'),
(21, 106, 'Es smart', 'Si'),
(22, 106, 'Tipo de pantalla', 'LED'),
(23, 106, 'Cantidad de puertos HDMI', '2'),
(24, 107, 'Marca', 'Jordan '),
(25, 107, 'Talla', '5MX'),
(26, 107, 'Color', 'Blanco'),
(27, 108, 'Memoria', '16GB'),
(28, 108, 'Color', 'Negro'),
(29, 109, 'AÃ±o', '2012'),
(30, 109, 'Cilindrada', '675'),
(31, 109, 'Marca', 'Augusta'),
(32, 109, 'Motor', '2 tiempo'),
(33, 110, 'AÃ±o', '2018'),
(34, 110, 'Motor', '4 tiempos'),
(35, 110, 'Cilindrada', '1200'),
(36, 110, 'Marca ', 'BMW'),
(37, 111, 'AÃ±o', '2020'),
(38, 111, 'Cilindrada', '0'),
(39, 111, 'Marca del motor', 'elÃ©ctrica'),
(40, 112, 'AÃ±o', '2020'),
(41, 112, 'Cilindrada', '50'),
(42, 112, 'Motor ', '2 tiempos'),
(43, 113, 'AÃ±o', '2020'),
(44, 113, 'Cilindrada', '47cc'),
(45, 113, 'Marca del motor', 'K.O MOTO'),
(46, 114, 'AÃ±o', '2019'),
(47, 114, 'Marca', 'Ford'),
(48, 114, 'Modelo', 'Mustang'),
(49, 114, 'Transmision', 'Automatica'),
(50, 115, 'AÃ±o', '2006'),
(51, 115, 'Puertas', '4'),
(52, 115, 'Transmision', 'Automatica'),
(53, 115, 'Color', 'negro'),
(54, 116, 'AÃ±o', '2014'),
(55, 116, 'Puertas', '2'),
(56, 116, 'Color', 'blanco'),
(57, 116, 'Transmision', 'Estandar'),
(58, 117, 'AÃ±o', '2018'),
(59, 117, 'Tipo de combustible', 'gasolina'),
(60, 117, 'Motor', '2.4'),
(61, 117, 'Kilometraje', '62,000km'),
(62, 118, 'Marca', 'Xtreme PC'),
(63, 118, 'Modelo', 'Gamer'),
(64, 118, 'Procesador', 'AMD RYZEN 5 3400G'),
(65, 118, 'Disco duro', '1tb'),
(66, 118, 'RAM', '8gb'),
(67, 119, 'Marca ', 'Xtrem PC'),
(68, 119, 'Modelo', 'XTACR3PRO8GBVEGA8'),
(69, 119, 'Procesador', 'AMD Ryzen â„¢ 3 PRO 2200G'),
(70, 119, 'RAM', '4gb'),
(71, 120, 'Marca', 'Stylos'),
(72, 120, 'Linea', 'Monitor gamer'),
(73, 120, 'Modelo', 'XZ3010'),
(74, 120, 'TamaÃ±o de la pantalla', '23.8\"'),
(75, 121, 'Pantalla', 'Led'),
(76, 121, 'TamaÃ±o', '23.8\"'),
(77, 121, 'Resolucion', '1920px-1080px'),
(78, 122, 'Marca', 'Samsung'),
(79, 122, 'Modelo', 'S10+'),
(80, 122, 'Color', 'blanco'),
(81, 122, 'RAM', '8gb'),
(82, 123, 'Precios', 'a tratar'),
(83, 123, 'Trabajos', 'de calidad'),
(84, 124, 'Tipo de instalacion:', 'casas grandes y pequeÃ±as'),
(85, 124, 'Precios:', 'a tratar tipo de instalacion'),
(86, 125, 'Color', 'Azul'),
(87, 125, 'Memoria', '128GB'),
(88, 125, 'Camara', '64MPX'),
(89, 126, 'Color', 'Negro'),
(90, 126, 'Memoria', '128GB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `tipo` varchar(50) NOT NULL,
  `idclasif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`tipo`, `idclasif`) VALUES
('Computación y electronica', 1),
('Vehiculos', 0),
('Tiempo libe', 2),
('Hogar', 3),
('Servicios', 4),
('Empleo y educacion', 5),
('Otros', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Control`
--

CREATE TABLE `Control` (
  `visitas` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Control`
--

INSERT INTO `Control` (`visitas`) VALUES
(142);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gensuario`
--

CREATE TABLE `gensuario` (
  `tipouser` varchar(10) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(300) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  `hash` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gensuario`
--

INSERT INTO `gensuario` (`tipouser`, `iduser`, `nombre`, `correo`, `contrasena`, `estado`, `telefono`, `estatus`, `hash`) VALUES
('validador', 112, 'Edgar Javier Orozco Monrroy', 'orozcomonrroy.ej@gmail.com', '$2y$10$./XXJeO/1SRX4kwXZ2y6Me2owe.LVpAGTYuNssGnGDkT0m4PKqleS', NULL, NULL, 1, '0'),
('normal', 105, 'Roberto DamiÃ¡n LeÃ³n HernÃ¡ndez', 'rleon@ucol.mx', '$2y$10$Ytme6DjHuSXvAN43x7ecUeCcEWZKMwR9mHltrIXOCqUiqQUJuUsFm', 'COL', '3141638866', 1, '0'),
('normal', 107, 'Gonzalo David Garcia Lopez', 'ejemplo12', '$2y$10$UbM4nzAxxOPOAwTNoFgIrezSu9qUZBZslQaeuNILj3Om.NFeBSzUe', 'COL', '3141971887', 0, '0'),
('admin', 110, 'ADMIN', 'admin@classifads.com', '$2y$10$ejwrkJ5I6r8dnAy3HnRfcuMJIcOyHejqcwkkFbRslj3CLE11Bdhta', 'COL', '314', 1, '0'),
('normal', 111, 'Pepito', 'pepito@gmail.com', '$2y$10$GEhh8/gI4dqHuGBDIlxub.kp03nwevjU5O9NKDYEmSuBh5rEeDBIS', 'COL', '314139033', 0, '0'),
('normal', 113, 'Johan Alain', 'johan69@gmail.com', '$2y$10$/RPU6urTnqzX1EPi2n0PnuNsna6AwsIScA5RV4QoFMpCq27MguG8q', 'COL', '3173629974', 1, '0'),
('normal', 137, 'Damian Leon', 'rleon2@ucol.mx', '$2y$10$UihKofrkoQCYk.SIDlvEg.kn8rjfuXlwAibczOM7q627yBjCjMY7S', 'CHP', '3141638866', 2, '7ef605fc8dba5425d6965fbd4c8fbe1f'),
('normal', 136, 'roberto damian', 'rdamisleon@gmail.com', '$2y$10$8RZVkCeUrBcKNfzgywWvhOP80nBvp7hleIiW7moVyVpWJsqBj7N2m', 'COL', '3141638866', 1, 'dc5689792e08eb2e219dce49e64c885b'),
('normal', 131, 'Gonzalo David Garcia Lopez', 'sepa@gmail.com', '$2y$10$RSPP8ILdRjmSpSUh9dy9XukUn1DLzjr1GEEx.LnjKEX5QNmzTZYSG', 'COL', '3141971887', 2, '846c260d715e5b854ffad5f70a516c88'),
('normal', 135, 'Javier', 'eorozco8@ucol.mx', '$2y$10$/SeFTDi24g5KgA0QXg7TdOD0hL3zZBHqrU59v/hfVnY1DuUR6HlPa', 'COL', '3141390033', 1, 'd947bf06a885db0d477d707121934ff8'),
('normal', 133, 'Javier', 'orozcoy.ej@gmail.com', '$2y$10$NMdjUQ9SPJ5gGeM4EpxPs.rnhak1IRm3H8kq8VYmXgKqk0eNuqMNO', 'COL', '3141390033', 2, '0a09c8844ba8f0936c20bd791130d6b6'),
('normal', 129, 'Javier', 'hola@gmail.com', '$2y$10$bBirliT5114k3QboVIiLYO8rogDSrBAQ0.elDDJ9UDXVd5P8w39Aa', 'COL', '3141390033', 2, '006f52e9102a8d3be2fe5614f42ba989'),
('normal', 138, 'Luis Orozco', 'lanoco1854@yektara.com', '$2y$10$iv/6C2fm0VoBf1OvxulUV.1NRRoy88YabQUqxWOUHZ6kR8M3dDpKe', 'Colima', '3141390033', 1, 'b53b3a3d6ab90ce0268229151c9bde11'),
('normal', 139, 'Maria', 'sorala4939@sdysofa.com', '$2y$10$t/Zne6az0c7d.mltN7IRdOtIjB2CXFngLlfqLsAj//2j.vvQ.P3xS', 'Colima', '3141390033', 1, '24b16fede9a67c9251d3e7c7161c83ac'),
('normal', 140, 'Javier', 'hedawik851@febeks.com', '$2y$10$qOAUjoltLDVvbdTDF1gU1enSW7PnVbDFNiE6e1Dn2dbhsbRflzza2', 'Colima', '3141390033', 1, '9b70e8fe62e40c570a322f1b0b659098'),
('normal', 141, 'Javier Orozco', 'nifyegolta@nedoz.com', '$2y$10$SDa43dZSYJnBG.s5L4dDwuwJuDF.5qVxgURM3b0X/WfeORaitEYLa', 'Colima', '3141390033', 1, '647bba344396e7c8170902bcf2e15551'),
('normal', 142, 'Javier Orozco', 'volmikastu@nedoz.com', '$2y$10$SK.Fi6Jpb8LQHuyCa.sCy.gOwjCOokX7Wcl6snsziF9Wq4w76Y9mW', 'Colima', '3141971887', 1, '9b04d152845ec0a378394003c96da594'),
('normal', 143, 'Edgar Javier', 'tiknohimla@nedoz.com', '$2y$10$dFr.9WxBQZLpSh2DDCcwr.DvlActW2XTJHAz60geoFMWlcW6/Xtk6', 'Colima', '3141390033', 1, 'f7e9050c92a851b0016442ab604b0488'),
('validador', 144, 'usuario', 'temp@gmail.com', '$2y$10$rxx6RBQmeJ25tIZ79fd9ieflv8UKURmHMy0UMgaXps13MhrJFAMZe', NULL, NULL, 1, '0'),
('normal', 145, 'Edgar Javier', 'muknahuydi@nedoz.com', '$2y$10$rqbhoYqe.IL7VWG89IS9POUT9Ab0TpyY2hKRCKcrhSWqtAvDW6hLO', 'Colima', '3141638866', 1, '2a38a4a9316c49e5a833517c45d31070'),
('validador', 146, 'Vali', 'vali@gmail.com', '$2y$10$Ujl2ZOrL8cU7gu/nOdD/0uWkAm.xu1fhiiwkhQmITUJ.YC1X.L9p6', NULL, NULL, 1, '0'),
('normal', 147, 'Juan Perez', 'hogneniyda@nedoz.com', '$2y$10$nzGUL00Imn/ZcP7ToNb9ROH2hy3w2bYPtp2WVHkt5g12WPLxZ1.ze', 'Colima', '3141638866', 1, '091d584fced301b442654dd8c23b3fc9'),
('validador', 148, 'Damian', 'example@gmail.com', '$2y$10$VODxA.XMfrPsXzhq7rp0S.1II6lReKOr0b4igVCPyM/p2tzIjsuFK', NULL, NULL, 1, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `idpublicacion` int(10) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`idpublicacion`, `direccion`) VALUES
(84, 'sources/anuncios/108/84Diagrama en blanco (10).png'),
(85, 'sources/anuncios/110/859525517195.jpg'),
(85, 'sources/anuncios/110/859508470557.jpg'),
(86, 'sources/anuncios/113/86cad.png'),
(87, 'sources/anuncios/110/87virus.png'),
(88, 'sources/anuncios/110/88fraud.png'),
(89, 'sources/anuncios/110/89victoria.png'),
(90, 'sources/anuncios/110/90sis.jpg'),
(91, 'sources/anuncios/110/919415732808.jpg'),
(92, 'sources/anuncios/110/92troya.jpg'),
(93, 'sources/anuncios/110/931era victoria.png'),
(94, 'sources/anuncios/113/94victoria.png'),
(95, 'sources/anuncios/105/95descarga.jpg'),
(96, 'sources/anuncios/110/96Activity 10.PNG'),
(97, 'sources/anuncios/116/97maxresdefault.jpg'),
(98, 'sources/anuncios/113/98dam.png'),
(99, 'sources/anuncios/110/99facebook.png'),
(100, 'sources/anuncios/110/100linkedin.png'),
(101, 'sources/anuncios/110/101email.png'),
(102, 'sources/anuncios/110/102wikipedia-logo.png'),
(102, 'sources/anuncios/110/102blogger.png'),
(102, 'sources/anuncios/110/102data-server (1).png'),
(102, 'sources/anuncios/110/102network.png'),
(102, 'sources/anuncios/110/102email.png'),
(0, 'sources/anuncios//03.PNG'),
(0, 'sources/anuncios//02.PNG'),
(0, 'sources/anuncios//01.PNG'),
(103, 'sources/anuncios/110/1033.PNG'),
(103, 'sources/anuncios/110/1032.PNG'),
(103, 'sources/anuncios/110/1031.PNG'),
(104, 'sources/anuncios/110/1049036477323.jpg'),
(104, 'sources/anuncios/110/1049066010943.jpg'),
(104, 'sources/anuncios/110/1049097824391.jpg'),
(105, 'sources/anuncios/110/1050950122276.jpg'),
(105, 'sources/anuncios/110/1050958645595.jpg'),
(105, 'sources/anuncios/110/1050975692233.jpg'),
(105, 'sources/anuncios/110/1050967168914.jpg'),
(106, 'sources/anuncios/135/106dsd.PNG'),
(107, 'sources/anuncios/136/107air-jordan-1-low-gs-shoe-white-1.jpg'),
(107, 'sources/anuncios/136/107Q8887553558_111__1_-mini.jpg'),
(108, 'sources/anuncios/140/1081176314952.jpg'),
(109, 'sources/anuncios/113/1093.png'),
(110, 'sources/anuncios/113/1101.png'),
(110, 'sources/anuncios/113/1102.png'),
(110, 'sources/anuncios/113/1103.png'),
(111, 'sources/anuncios/113/1111.png'),
(111, 'sources/anuncios/113/1112.png'),
(111, 'sources/anuncios/113/1113.png'),
(112, 'sources/anuncios/113/1121.png'),
(112, 'sources/anuncios/113/1122.png'),
(112, 'sources/anuncios/113/1123.png'),
(113, 'sources/anuncios/113/1131.png'),
(113, 'sources/anuncios/113/1132.png'),
(113, 'sources/anuncios/113/1133.png'),
(114, 'sources/anuncios/113/1141.png'),
(114, 'sources/anuncios/113/1142.png'),
(114, 'sources/anuncios/113/1143.png'),
(115, 'sources/anuncios/113/1151.png'),
(115, 'sources/anuncios/113/1152.png'),
(115, 'sources/anuncios/113/1153.png'),
(116, 'sources/anuncios/113/1161.png'),
(116, 'sources/anuncios/113/1162.png'),
(116, 'sources/anuncios/113/1163.png'),
(117, 'sources/anuncios/113/1171.png'),
(117, 'sources/anuncios/113/1172.png'),
(117, 'sources/anuncios/113/1173.png'),
(118, 'sources/anuncios/135/1181.png'),
(118, 'sources/anuncios/135/1182.png'),
(118, 'sources/anuncios/135/1183.png'),
(119, 'sources/anuncios/135/1191.png'),
(119, 'sources/anuncios/135/1192.png'),
(119, 'sources/anuncios/135/1193.png'),
(120, 'sources/anuncios/135/1203.png'),
(120, 'sources/anuncios/135/1201.png'),
(120, 'sources/anuncios/135/1202.png'),
(121, 'sources/anuncios/135/1211.png'),
(121, 'sources/anuncios/135/1212.png'),
(122, 'sources/anuncios/135/1221.png'),
(122, 'sources/anuncios/135/1222.png'),
(122, 'sources/anuncios/135/1223.png'),
(123, 'sources/anuncios/142/1233.jpg'),
(123, 'sources/anuncios/142/1232.jpg'),
(123, 'sources/anuncios/142/1231.jpg'),
(124, 'sources/anuncios/143/1243.jpg'),
(124, 'sources/anuncios/143/1242.jpg'),
(124, 'sources/anuncios/143/1241.jpg'),
(125, 'sources/anuncios/145/1251254418845.jpg'),
(125, 'sources/anuncios/145/1251269185655.jpg'),
(125, 'sources/anuncios/145/1251286232293.jpg'),
(126, 'sources/anuncios/147/1261245501630.jpg'),
(126, 'sources/anuncios/147/1261279594906.jpg'),
(126, 'sources/anuncios/147/1261296641544.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `de` int(10) NOT NULL,
  `para` int(10) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `leido` tinyint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `de`, `para`, `mensaje`, `fecha`, `leido`) VALUES
(1, 105, 110, 'Hola', '2020-12-07 23:33:48', 0),
(2, 110, 105, 'Hola', '2020-12-07 23:35:32', 0),
(3, 105, 110, 'Ola perra ', '2020-12-08 05:16:50', 0),
(4, 105, 110, 'Ola perra ', '2020-12-08 05:16:50', 0),
(5, 105, 110, 'Ola perra ', '2020-12-08 05:16:50', 0),
(6, 105, 110, 'Acabas de crear un WhatsApp', '2020-12-08 05:17:02', 0),
(7, 110, 105, 'asies', '2020-12-08 05:17:43', 0),
(8, 105, 110, 'J', '2020-12-08 05:17:44', 0),
(9, 110, 105, 'ola', '2020-12-08 05:18:52', 0),
(10, 110, 105, 'f', '2020-12-08 05:24:55', 0),
(11, 110, 105, 'a', '2020-12-08 05:30:55', 0),
(12, 110, 105, 'p', '2020-12-08 05:31:42', 0),
(13, 110, 105, 'r', '2020-12-08 05:31:50', 0),
(14, 105, 110, 'Subale mambo pa que mi gata prenda lo motore\' ', '2020-12-08 05:35:44', 0),
(15, 105, 110, 'A ella le gusta la gasolina', '2020-12-08 05:35:58', 0),
(16, 105, 110, 'CÃ³mo le encanta la gasolina', '2020-12-08 05:36:06', 0),
(17, 110, 105, 'jajaja', '2020-12-08 05:36:07', 0),
(18, 110, 105, 'ola?', '2020-12-08 05:36:18', 0),
(19, 110, 105, 'bb', '2020-12-08 05:36:24', 0),
(20, 105, 110, 'Ya sirve', '2020-12-08 05:36:31', 0),
(21, 110, 105, 'Si', '2020-12-08 05:36:36', 0),
(22, 110, 105, 'Creo xd', '2020-12-08 05:36:38', 0),
(23, 110, 105, 'Avr responde', '2020-12-08 05:36:42', 0),
(24, 110, 105, 'sin actualizar', '2020-12-08 05:36:46', 0),
(25, 105, 110, 'Se mira bacana', '2020-12-08 05:37:00', 0),
(26, 105, 110, 'No jala', '2020-12-08 05:37:09', 0),
(27, 110, 105, 'A mi si me funciona', '2020-12-08 05:37:19', 0),
(28, 110, 105, 'se actualizan solitos los mensajes', '2020-12-08 05:37:24', 0),
(29, 105, 110, 'Tengo que enviar un mensaje pa que se actualizan tus mensajes', '2020-12-08 05:37:25', 0),
(30, 105, 110, 'Toy en el CEL ', '2020-12-08 05:37:34', 0),
(31, 110, 105, 'Funciona en cel tambien jaja', '2020-12-08 05:37:42', 0),
(32, 110, 105, 'actualiza la pagina', '2020-12-08 05:37:46', 0),
(33, 110, 105, 'lo acabo de cambiar', '2020-12-08 05:37:49', 0),
(34, 105, 110, 'A ver', '2020-12-08 05:37:59', 0),
(35, 105, 110, 'Manda', '2020-12-08 05:38:04', 0),
(36, 110, 105, 'ola', '2020-12-08 05:38:08', 0),
(37, 105, 110, 'A ver', '2020-12-08 05:38:37', 0),
(38, 110, 105, 'a', '2020-12-08 05:38:40', 0),
(39, 105, 110, 'No me deja', '2020-12-08 05:38:55', 0),
(40, 105, 110, 'A ver', '2020-12-08 05:38:59', 0),
(41, 105, 110, 'A ver', '2020-12-08 05:39:03', 0),
(42, 105, 110, 'A ver', '2020-12-08 05:39:06', 0),
(43, 105, 110, 'A ver', '2020-12-08 05:39:09', 0),
(44, 110, 105, 'k', '2020-12-08 05:39:12', 0),
(45, 105, 110, 'A ver', '2020-12-08 05:39:12', 0),
(46, 105, 110, 'Tengo miedo ', '2020-12-08 05:39:38', 0),
(47, 105, 110, 'Soy tÃ­mido ', '2020-12-08 05:39:42', 0),
(48, 105, 110, 'Vamo a perrear la vida es corta ', '2020-12-08 05:39:57', 0),
(49, 110, 105, 'ola', '2020-12-08 05:40:03', 0),
(50, 110, 105, 'no', '2020-12-08 05:40:11', 0),
(51, 110, 105, 'se te actualizan solos los mensajes?', '2020-12-08 05:40:51', 0),
(52, 110, 105, 'a', '2020-12-08 05:41:23', 0),
(53, 110, 105, 'b', '2020-12-08 05:44:08', 0),
(54, 110, 105, 'a', '2020-12-08 05:44:16', 0),
(55, 110, 105, 'a', '2020-12-08 05:44:32', 0),
(56, 110, 105, 'sc', '2020-12-08 05:44:54', 0),
(57, 110, 105, 'vvdf', '2020-12-08 05:45:02', 0),
(58, 110, 105, 'a', '2020-12-08 05:48:01', 0),
(59, 110, 105, 'b', '2020-12-08 05:48:05', 0),
(60, 110, 105, 'l', '2020-12-08 05:48:20', 0),
(61, 110, 105, 'l', '2020-12-08 05:48:24', 0),
(62, 110, 105, 'aaa', '2020-12-08 05:48:28', 0),
(63, 110, 105, 'jsjs', '2020-12-08 05:48:34', 0),
(64, 117, 110, 'Hola', '2020-12-08 05:52:21', 0),
(65, 110, 117, 'hola', '2020-12-08 05:52:37', 0),
(66, 117, 110, 'como estas', '2020-12-08 05:53:17', 0),
(67, 117, 110, 'sdcsdc', '2020-12-08 05:53:24', 0),
(68, 117, 110, 'Ss', '2020-12-08 05:53:26', 0),
(69, 117, 110, 'ASas', '2020-12-08 05:53:28', 0),
(70, 117, 110, 'vdvf', '2020-12-08 05:53:30', 0),
(71, 117, 110, 'fvd', '2020-12-08 05:53:31', 0),
(72, 117, 110, '3e2', '2020-12-08 05:53:32', 0),
(73, 117, 110, 'wqw', '2020-12-08 05:53:34', 0),
(74, 117, 110, 'ppp', '2020-12-08 05:53:37', 0),
(75, 117, 110, 'qewq', '2020-12-08 05:53:39', 0),
(76, 117, 110, 'ads', '2020-12-08 05:53:41', 0),
(77, 117, 110, 'asd', '2020-12-08 05:53:45', 0),
(78, 110, 0, 'a', '2020-12-08 05:54:26', 0),
(79, 110, 117, 'f', '2020-12-08 05:55:25', 0),
(80, 117, 110, 'a', '2020-12-08 05:55:28', 0),
(81, 117, 110, 'sa', '2020-12-08 05:55:31', 0),
(82, 110, 0, 'error', '2020-12-08 05:56:01', 0),
(83, 110, 117, 'a', '2020-12-08 06:00:32', 0),
(84, 110, 117, 'nmms', '2020-12-08 06:00:39', 0),
(85, 110, 117, 'f', '2020-12-08 06:01:22', 0),
(86, 110, 117, 'dcsd', '2020-12-08 06:01:27', 0),
(87, 110, 117, 'pff', '2020-12-08 06:01:51', 0),
(88, 110, 117, 'ds', '2020-12-08 06:01:56', 0),
(89, 110, 110, 'ola', '2020-12-10 21:19:13', 0),
(90, 110, 113, 'hola bb', '2020-12-10 21:19:47', 0),
(91, 113, 110, 'Hola myLove', '2020-12-11 05:49:43', 0),
(92, 113, 110, 'Holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-12-11 05:50:22', 0),
(93, 113, 110, '', '2020-12-11 05:51:21', 0),
(94, 113, 110, '', '2020-12-11 05:51:56', 0),
(95, 113, 110, 'me ayudas', '2020-12-11 05:52:25', 0),
(96, 135, 113, '', '2020-12-11 05:53:13', 0),
(97, 135, 113, '', '2020-12-11 05:53:23', 0),
(98, 113, 135, 'Ta vacio', '2020-12-11 05:54:02', 0),
(99, 135, 113, 'jaja', '2020-12-11 05:54:14', 0),
(100, 113, 135, 'a prrooooooooo', '2020-12-11 05:54:23', 0),
(101, 135, 113, 'cd', '2020-12-11 05:54:35', 0),
(102, 135, 113, 'dcsdc', '2020-12-11 05:54:36', 0),
(103, 135, 113, 'dcdcsd', '2020-12-11 05:54:37', 0),
(104, 135, 113, 'csdcdc', '2020-12-11 05:54:37', 0),
(105, 135, 113, 'csd', '2020-12-11 05:54:38', 0),
(106, 135, 113, 'sdc', '2020-12-11 05:54:39', 0),
(107, 135, 113, 'csdc', '2020-12-11 05:54:39', 0),
(108, 135, 113, 'csdcsdc', '2020-12-11 05:54:40', 0),
(109, 135, 113, 'csdcsdcsdc', '2020-12-11 05:54:40', 0),
(110, 113, 135, 'fddfgchb', '2020-12-11 05:54:59', 0),
(111, 113, 135, 'dfsgfd', '2020-12-11 05:55:00', 0),
(112, 113, 135, 'gdfrgdf', '2020-12-11 05:55:00', 0),
(113, 113, 135, 'gfdsfgfdg', '2020-12-11 05:55:01', 0),
(114, 113, 135, 'sdgfdsg', '2020-12-11 05:55:02', 0),
(115, 135, 110, '', '2020-12-11 05:57:54', 0),
(116, 135, 110, '', '2020-12-11 05:57:57', 0),
(117, 135, 110, '', '2020-12-11 05:58:01', 0),
(118, 135, 110, '', '2020-12-11 06:00:19', 0),
(119, 135, 110, '', '2020-12-11 06:00:19', 0),
(120, 135, 110, '', '2020-12-11 06:00:20', 0),
(121, 135, 110, '', '2020-12-11 06:01:15', 0),
(122, 135, 110, '', '2020-12-11 06:01:55', 0),
(123, 135, 110, '', '2020-12-11 06:05:19', 0),
(124, 135, 110, 's', '2020-12-11 06:07:05', 0),
(125, 135, 110, 'aaa', '2020-12-11 06:07:44', 0),
(126, 113, 135, 'Te amo', '2020-12-11 06:07:55', 0),
(127, 135, 113, 'aaa', '2020-12-11 06:08:42', 0),
(128, 113, 110, 'Holaaaa', '2020-12-11 06:09:54', 0),
(129, 113, 110, '', '2020-12-11 06:10:02', 0),
(130, 138, 110, 'Hola!', '2020-12-13 08:05:52', 0),
(131, 138, 135, 'Hola, me interesa tu producto', '2020-12-13 08:13:41', 0),
(132, 135, 138, 'Hola', '2020-12-13 08:14:39', 0),
(133, 139, 135, 'hola', '2020-12-13 08:23:48', 0),
(134, 139, 135, 'al como una empresa lÃ­der en la industria tecnolÃ³gica. Todos sus productos son diseÃ±ados con una calidad superior y pensados para contribuir a un futuro mejor. Por eso, harÃ¡ que disfrutes de u', '2020-12-13 08:24:13', 0),
(135, 139, 135, 'es reconocida a nivel mundial como una empresa lÃ­der en la industria tecnolÃ³gica. Todos sus productos son diseÃ±ados con una calidad superior y pensados para contribuir a un futuro mejor. Por eso, harÃ¡ que disfrutes de una experiencia incomparable.\nCon el Smart TV UN55TU6900 accederÃ¡s a las aplicaciones donde se encuentran tus contenidos favoritos. AdemÃ¡s, podrÃ¡s navegar por Internet, interactuar en redes sociales y divertirte con videojuegos.\n\nVive en 4K\nLa cantidad de pixeles que ofrece es 4 veces mayor que la Full HD, Â¿el resultado? Escenas mucho mÃ¡s realistas y con un nivel de detalle increÃ­ble. Ahora vas a conocer una aventura de inmersiÃ³n que no va a dejar de sorprenderte.\n\nUn sonido que te envuelve\nVas a sentir que proviene desde todas las direcciones posibles, lo cual enriquece la percepciÃ³n del mismo. Los diÃ¡logos de tus series de fin de semana o la mÃºsica de tus cantantes preferidos cobrarÃ¡n otro significado.', '2020-12-13 08:24:21', 0),
(136, 135, 139, 'Ok', '2020-12-13 08:29:07', 0),
(137, 135, 110, 'hola', '2020-12-13 08:34:16', 0),
(138, 135, 110, 'a', '2020-12-13 08:36:46', 0),
(139, 135, 110, 'b', '2020-12-13 08:37:09', 0),
(140, 135, 135, 'aaa', '2020-12-13 08:38:40', 0),
(141, 135, 135, 'aa?', '2020-12-13 08:38:56', 0),
(142, 135, 136, 'hola', '2020-12-14 00:28:15', 0),
(143, 135, 136, 'hola', '2020-12-14 00:28:38', 0),
(144, 136, 135, 'como estas', '2020-12-14 00:28:49', 0),
(145, 135, 136, 'bien', '2020-12-14 00:29:00', 0),
(146, 136, 135, 'super', '2020-12-14 00:29:39', 0),
(147, 135, 136, 'hola', '2020-12-14 00:34:02', 0),
(148, 136, 135, 'nnn', '2020-12-14 00:34:52', 0),
(149, 135, 136, 'aaa', '2020-12-14 00:34:58', 0),
(150, 136, 135, 'creo que ya funciona ', '2020-12-14 00:35:06', 0),
(151, 135, 136, 'hola', '2020-12-14 02:18:05', 0),
(152, 135, 136, 'hola', '2020-12-14 02:19:44', 0),
(153, 135, 136, 'a', '2020-12-14 03:13:15', 0),
(154, 136, 135, 'jj', '2020-12-14 18:17:18', 0),
(155, 113, 136, 'precio x2', '2020-12-15 06:56:23', 0),
(156, 113, 135, 'contestame profavor :(', '2020-12-15 06:56:55', 0),
(157, 136, 113, 'cock', '2020-12-15 06:57:04', 0),
(158, 113, 136, 'lo compro', '2020-12-15 06:57:35', 0),
(159, 136, 113, 'hecho ', '2020-12-15 06:57:40', 0),
(160, 113, 136, 'pasa pack', '2020-12-15 06:57:44', 0),
(161, 136, 113, 'no hable como 2015', '2020-12-15 06:58:06', 0),
(162, 110, 136, 'Me interesa', '2020-12-15 20:10:26', 0),
(163, 142, 135, 'hola', '2020-12-16 05:20:23', 0),
(164, 113, 135, 'ME INTERESA', '2020-12-16 05:30:57', 0),
(165, 135, 113, 'OK', '2020-12-16 05:31:08', 0),
(166, 143, 135, 'Me interesa', '2020-12-16 05:42:10', 0),
(167, 135, 143, 'Me interesa', '2020-12-16 05:54:50', 0),
(168, 143, 135, 'Hola', '2020-12-16 05:55:12', 0),
(169, 145, 135, 'HOLA', '2020-12-16 06:11:05', 0),
(170, 145, 135, 'NN', '2020-12-16 06:11:14', 0),
(171, 145, 135, 'DD', '2020-12-16 06:11:20', 0),
(172, 145, 135, 'Me interesa', '2020-12-16 06:18:17', 0),
(173, 135, 145, 'a mi tamvien', '2020-12-16 06:19:02', 0),
(174, 145, 135, 'adios', '2020-12-16 06:19:13', 0),
(175, 147, 135, 'hola', '2020-12-16 14:28:25', 0),
(176, 105, 147, 'Me interesa', '2020-12-16 14:35:50', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`idclasif`);

--
-- Indices de la tabla `Control`
--
ALTER TABLE `Control`
  ADD PRIMARY KEY (`visitas`);

--
-- Indices de la tabla `gensuario`
--
ALTER TABLE `gensuario`
  ADD PRIMARY KEY (`iduser`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `caracteristica`
--
ALTER TABLE `caracteristica`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `gensuario`
--
ALTER TABLE `gensuario`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
