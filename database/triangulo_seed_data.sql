-- =====================================================================
-- Triangulo Sports Bar - Datos semilla (INSERT) generados a partir de
-- los nombres de archivo reales en view/img/ del proyecto original.
--
-- Requiere haber corrido antes triangulo_schema.sql (estructura de tablas).
--
-- Mapeo carpeta -> tabla (confirmado con el usuario):
--   view/img/carousel-eventos/      -> eventoinicio
--   view/img/carousel-inicio/       -> inicio
--   view/img/carousel-promociones/  -> promocion
--   view/img/eventos/               -> evento (via catalogo deporte/categoria)
-- =====================================================================

USE `triangulo`;

-- ---------------------------------------------------------------------
-- categoria: solo 2 filas con evidencia/necesidad real
-- 'Liga MX' confirmada por evento-liga-mx.png y archivos liga-mx-agosto*.jpg
-- 'General' es una categoria comodin (decision confirmada con el usuario)
-- para NFL/MLB/NBA/Box/UFC, que no tienen nombre de categoria en el codigo.
-- Se ancla a idDeporte=2 (NFL) solo para satisfacer la FK NOT NULL; se
-- reutiliza el mismo id en evento.idCategoria para los otros 4 deportes,
-- lo cual es una desviacion consciente del diseno relacional 1:1 categoria-deporte.
-- ---------------------------------------------------------------------
INSERT INTO `categoria` (`categoria`, `idDeporte`) VALUES
  ('Liga MX', 1),
  ('General', 2);

-- ids resultantes esperados (BD nueva/vacia): Liga MX=1, General=2

-- ---------------------------------------------------------------------
-- evento: 14 filas generadas desde view/img/eventos/ (iconos de deporte/categoria)
-- Se excluyeron 5 archivos decorativos (barr-blue.png, barr-red.png,
-- calendario.png, eventos-banner.png, eventoss.jpg) por no representar partidos.
-- fechaEvento y resultado son datos ficticios de demo (no existen en el codigo
-- fuente): fechas pasadas llevan resultado, fechas futuras llevan resultado NULL
-- para simular partidos pendientes, igual que el flujo real de la app.
-- ---------------------------------------------------------------------
INSERT INTO `evento` (`idDeporte`, `idCategoria`, `nombre`, `fechaEvento`, `descripcion`, `resultado`, `imagen`) VALUES  
  (6, 2, '20 AGOSTO', '2026-10-03', NULL, NULL, '20 AGOSTO.jpg'),
  (1, 1, 'América Monterrey', '2026-10-03', NULL, NULL, 'america monterrey.jpg'),
  (1, 1, 'América vs Tigres 30', '2026-10-03', NULL, NULL, 'america vs tigres 30.jpg'),
  (1, 1, 'América vs Toluca', '2026-10-03', NULL, NULL, 'america vs toluca.jpg'),
  (1, 1, 'Atlas vs Veracruz', '2026-10-03', NULL, NULL, 'atlas vs veracruz.jpg'),
  (5, 2, 'Box1', '2026-10-03', NULL, NULL, 'box1.jpg'),
  (5, 2, 'Box2', '2026-10-03', NULL, NULL, 'box2.jpg'),
  (1, 2, 'CA2016', '2026-10-03', NULL, NULL, 'CA2016.jpg'),
  (1, 2, 'CA20162', '2026-10-03', NULL, NULL, 'CA20162.jpg'),
  (1, 1, 'Chiapas vs Pachuca', '2026-10-03', NULL, NULL, 'chiapas vs pachuca.jpg'),
  (1, 1, 'Chivas América', '2026-10-03', NULL, NULL, 'chivas america.jpg'),
  (1, 1, 'Chivas vs Monterrey', '2026-10-03', NULL, NULL, 'chivas vs monterrey.jpg'),
  (1, 2, 'Copa América', '2026-10-03', NULL, NULL, 'copa america.jpg'),
  (1, 1, 'Cruz Azul vs Monterrey 30', '2026-10-03', NULL, NULL, 'cruz azul vs monterrey 30.jpg'),
  (1, 1, 'Cruz Azul vs Pumas', '2026-10-03', NULL, NULL, 'cruz azul vs pumas.jpg'),
  (6, 1, 'Dos Anjos vs Álvarez', '2026-10-03', NULL, NULL, 'dos-anjos-vs-alvarez.jpg'),
  (6, 1, 'Holm vs Shevchenko', '2026-10-03', NULL, NULL, 'holm vs shevchenko.jpg'),
  (6, 1, 'Joanna vs Claudia', '2026-10-03', NULL, NULL, 'joanna vs claudia.jpg'),
  (6, 1, 'Julio 9', '2026-10-03', NULL, NULL, 'julio 9.jpg'),
  (1, 1, 'León Pachuca', '2026-10-03', NULL, NULL, 'leon pachuca.jpg'),
  (1, 1, 'León vs Necaxa', '2026-10-03', NULL, NULL, 'leon vs necaxa.jpg'),
  (1, 1, 'Liga MX Agosto1', '2026-10-03', NULL, NULL, 'liga mx agosto1.jpg'),
  (1, 1, 'Liga MX Agosto2', '2026-10-03', NULL, NULL, 'liga mx agosto2.jpg'),
  (1, 1, 'Liga MX Agosto3', '2026-10-03', NULL, NULL, 'liga mx agosto3.jpg'),
  (1, 1, 'Liga MX Agosto4', '2026-10-03', NULL, NULL, 'liga mx agosto4.jpg'),
  (1, 1, 'Liga MX Agosto5', '2026-10-03', NULL, NULL, 'liga mx agosto5.jpg'),
  (1, 1, 'Liga MX Agosto6', '2026-10-03', NULL, NULL, 'liga mx agosto6.jpg'),
  (1, 1, 'Liga MX Agosto7', '2026-10-03', NULL, NULL, 'liga mx agosto7.jpg'),
  (1, 2, 'México vs Jamaica', '2026-10-03', NULL, NULL, 'mexico vs jamaica.jpg'),
  (1, 2, 'México vs Venezuela (2)', '2026-10-03', NULL, NULL, 'mexico vs venezuela (2).jpg'),
  (1, 2, 'México vs Venezuela', '2026-10-03', NULL, NULL, 'mexico vs venezuela.jpg'),
  (1, 1, 'Pachuca vs Necaxa 30', '2026-10-03', NULL, NULL, 'pachuca vs necaxa 30.jpg'),
  (4, 1, 'Partido 3', '2026-10-03', NULL, NULL, 'partido 3.jpg'),
  (4, 1, 'Partido 4', '2026-10-03', NULL, NULL, 'partido 4.jpg'),
  (4, 1, 'Partido 5', '2026-10-03', NULL, NULL, 'partido 5.jpg'),
  (4, 1, 'Partido 6', '2026-10-03', NULL, NULL, 'partido 6.jpg'),
  (1, 1, 'Querétaro vs Pachuca 30', '2026-10-03', NULL, NULL, 'queretaro vs pachuca 30.jpg'),
  (1, 1, 'Querétaro vs Veracruz', '2026-10-03', NULL, NULL, 'queretaro vs veracruz.jpg'),
  (1, 1, 'Rayados Tigres', '2026-10-03', NULL, NULL, 'rayados tigres.jpg'),
  (6, 1, 'UFC Sábado 18 2', '2026-10-03', NULL, NULL, 'ufc sabado 18 2.jpg'),
  (6, 1, 'UFC Sábado 18', '2026-10-03', NULL, NULL, 'ufc sabado 18.jpg'),
  (6, 1, 'UFC 199 Eventos', '2026-10-03', NULL, NULL, 'ufc199 eventos.jpg'),
  (1, 2, 'USA vs Colombia 2', '2026-10-03', NULL, NULL, 'usa vs colombia 2.jpg'),
  (1, 1, 'Werdum vs Miocic', '2026-10-03', NULL, NULL, 'werdum vs miocic.jpg'),
  (1, 1, 'Xolos vs Chivas 29', '2026-10-03', NULL, NULL, 'xolos vs chivas 29.jpg'),
  (1, 1, 'Xolos vs Monarcas', '2026-10-03', NULL, NULL, 'xolos vs monarcas.jpg');

-- inicio (5 filas) -- origen: view/img/carousel-inicio/
INSERT INTO `inicio` (`descripcion`, `imagen`, `activo`) VALUES
  ('Carousel1', 'carousel1.jpg', 1),
  ('Carousel3', 'carousel3.jpg', 1),
  ('Carousel4', 'carousel4.jpg', 1),
  ('Nuevo Menu', 'nuevo menu.jpg', 1),
  ('Olimpiadas', 'olimpiadas.jpg', 1);

-- promocion (6 filas) -- origen: view/img/carousel-promociones/
INSERT INTO `promocion` (`descripcion`, `imagen`, `activo`) VALUES
  ('Billar Gratis', 'billar gratis.jpg', 1),
  ('Fotos Carrusel', 'fotos_carrusel.jpg', 1),
  ('Fotos Carrusel Promoción', 'fotos_carrusel_promocion.jpg', 1),
  ('Promo Botellas', 'promo botellas.jpg', 1),
  ('Promoción', 'promocion.jpg', 1),
  ('Tragos 2x1', 'tragos 2x1.jpg', 1);

-- eventoinicio (52 filas) -- origen: view/img/carousel-eventos/
INSERT INTO `eventoinicio` (`descripcion`, `imagen`, `activo`) VALUES
  ('20 AGOSTO', '20 AGOSTO.jpg', 1),
  ('América Monterrey', 'america monterrey.jpg', 1),
  ('América vs Tigres 30', 'america vs tigres 30.jpg', 1),
  ('América vs Toluca', 'america vs toluca.jpg', 1),
  ('Atlas vs Veracruz', 'atlas vs veracruz.jpg', 1),
  ('Box1', 'box1.jpg', 1),
  ('Box2', 'box2.jpg', 1),
  ('CA2016', 'CA2016.jpg', 1),
  ('CA20162', 'CA20162.jpg', 1),
  ('Chiapas vs Pachuca', 'chiapas vs pachuca.jpg', 1),
  ('Chivas América', 'chivas america.jpg', 1),
  ('Chivas vs Monterrey', 'chivas vs monterrey.jpg', 1),
  ('Copa América', 'copa america.jpg', 1),
  ('Cruz Azul vs Monterrey 30', 'cruz azul vs monterrey 30.jpg', 1),
  ('Cruz Azul vs Pumas', 'cruz azul vs pumas.jpg', 1),
  ('Dos Anjos vs Álvarez', 'dos-anjos-vs-alvarez.jpg', 1),
  ('Holm vs Shevchenko', 'holm vs shevchenko.jpg', 1),
  ('Joanna vs Claudia', 'joanna vs claudia.jpg', 1),
  ('Julio 9', 'julio 9.jpg', 1),
  ('León Pachuca', 'leon pachuca.jpg', 1),
  ('León vs Necaxa', 'leon vs necaxa.jpg', 1),
  ('Liga MX Agosto1', 'liga mx agosto1.jpg', 1),
  ('Liga MX Agosto2', 'liga mx agosto2.jpg', 1),
  ('Liga MX Agosto3', 'liga mx agosto3.jpg', 1),
  ('Liga MX Agosto4', 'liga mx agosto4.jpg', 1),
  ('Liga MX Agosto5', 'liga mx agosto5.jpg', 1),
  ('Liga MX Agosto6', 'liga mx agosto6.jpg', 1),
  ('Liga MX Agosto7', 'liga mx agosto7.jpg', 1),
  ('México vs Jamaica', 'mexico vs jamaica.jpg', 1),
  ('México vs Venezuela (2)', 'mexico vs venezuela (2).jpg', 1),
  ('México vs Venezuela', 'mexico vs venezuela.jpg', 1),
  ('Pachuca vs Necaxa 30', 'pachuca vs necaxa 30.jpg', 1),
  ('Partido 3', 'partido 3.jpg', 1),
  ('Partido 4', 'partido 4.jpg', 1),
  ('Partido 5', 'partido 5.jpg', 1),
  ('Partido 6', 'partido 6.jpg', 1),
  ('Querétaro vs Pachuca 30', 'queretaro vs pachuca 30.jpg', 1),
  ('Querétaro vs Veracruz', 'queretaro vs veracruz.jpg', 1),
  ('Rayados Tigres', 'rayados tigres.jpg', 1),
  ('UFC Sábado 18 2', 'ufc sabado 18 2.jpg', 1),
  ('UFC Sábado 18', 'ufc sabado 18.jpg', 1),
  ('UFC 199 Eventos', 'ufc199 eventos.jpg', 1),
  ('USA vs Colombia 2', 'usa vs colombia 2.jpg', 1),
  ('Werdum vs Miocic', 'werdum vs miocic.jpg', 1),
  ('Xolos vs Chivas 29', 'xolos vs chivas 29.jpg', 1),
  ('Xolos vs Monarcas', 'xolos vs monarcas.jpg', 1);