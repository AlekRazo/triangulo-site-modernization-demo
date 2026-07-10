-- =====================================================================
-- Triangulo Sports Bar - Esquema de base de datos MySQL
-- Reconstruido por ingenieria inversa a partir del codigo fuente PHP
-- (no se encontro dump .sql en el proyecto original)
--
-- Fuente de la reconstruccion:
--   - model/database.php        -> nombre de BD y charset de conexion
--   - model/eventModel.php      -> INSERT/UPDATE/DELETE sobre `evento`
--   - model/findModel.php       -> SELECTs sobre `evento`, `categoria`, `deporte`
--   - model/panelModel.php      -> INSERT/UPDATE/DELETE genericos (seccion dinamica)
--   - model/findHomeModel.php   -> SELECTs genericos (seccion dinamica)
--   - controller/panelCtrl.php  -> mapeo de "seccion" a tablas reales:
--         1 = inicio | 2 = eventoinicio | 3 = promocion
--   - admin/modules/nuevoevento.php -> catalogo hardcodeado de `deporte`
--
-- Nota: el login del panel admin (admin/index.php) NO usa base de datos;
-- valida contra un arreglo estatico en config/access.php. Por eso no existe
-- una tabla de usuarios en este esquema.
-- =====================================================================

CREATE DATABASE IF NOT EXISTS `triangulo`
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

USE `triangulo`;

-- ---------------------------------------------------------------------
-- Catalogo de deportes (FIFA, NFL, MLB, NBA, Box, UFC, ...)
-- Columnas confirmadas via: SELECT deporte FROM deporte WHERE id='$deporte'
-- ---------------------------------------------------------------------
CREATE TABLE `deporte` (
  `id`      INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `deporte` VARCHAR(50)  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Datos semilla: catalogo hardcodeado en admin/modules/nuevoevento.php
INSERT INTO `deporte` (`id`, `deporte`) VALUES
  (1, 'FIFA'),
  (2, 'NFL'),
  (3, 'MLB'),
  (4, 'NBA'),
  (5, 'Box'),
  (6, 'UFC');

-- ---------------------------------------------------------------------
-- Categorias / ligas, dependientes de un deporte
-- Columnas confirmadas via: SELECT * FROM categoria WHERE idDeporte='$deporte'
--                           SELECT categoria FROM categoria WHERE id='$categoria'
-- (los valores reales de categoria se cargaban dinamicamente via AJAX,
--  no estan hardcodeados en el codigo, por lo que no se incluyen semillas)
-- ---------------------------------------------------------------------
CREATE TABLE `categoria` (
  `id`        INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(100) NOT NULL,
  `idDeporte` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria_deporte` (`idDeporte`),
  CONSTRAINT `fk_categoria_deporte`
    FOREIGN KEY (`idDeporte`) REFERENCES `deporte` (`id`)
    ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------------------
-- Eventos (calendario / resultados)
-- Orden de columnas confirmado por el INSERT literal en eventModel.php:
--   INSERT INTO `evento`
--     (`id`,`idDeporte`,`idCategoria`,`nombre`,`fechaEvento`,
--      `descripcion`,`resultado`,`imagen`)
-- `resultado` es NULL al crear el evento y se rellena despues via
--   UPDATE evento SET resultado='$resultado' WHERE id='$id'
-- ---------------------------------------------------------------------
CREATE TABLE `evento` (
  `id`          INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idDeporte`   INT UNSIGNED NOT NULL,
  `idCategoria` INT UNSIGNED NOT NULL,
  `nombre`      VARCHAR(150) NOT NULL,
  `fechaEvento` DATE         NOT NULL,
  `descripcion` TEXT         NULL,
  `resultado`   VARCHAR(150) NULL,
  `imagen`      VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_evento_deporte` (`idDeporte`),
  KEY `fk_evento_categoria` (`idCategoria`),
  CONSTRAINT `fk_evento_deporte`
    FOREIGN KEY (`idDeporte`) REFERENCES `deporte` (`id`)
    ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT `fk_evento_categoria`
    FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`)
    ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------------------
-- Tablas de "paneles" para el carrusel del home.
-- El codigo original las trata de forma generica pasando el nombre de
-- tabla como variable ($seccion) a panelModel/findHomeModel, por lo que
-- las 3 comparten exactamente la misma estructura:
--   INSERT INTO <seccion> (`id`,`descripcion`,`imagen`,`activo`)
--   UPDATE <seccion> SET descripcion=..., imagen=..., activo=...
-- Mapeo seccion -> tabla (ver controller/panelCtrl.php):
--   1 = inicio | 2 = eventoinicio | 3 = promocion
-- ---------------------------------------------------------------------
CREATE TABLE `inicio` (
  `id`          INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(255) NOT NULL,
  `imagen`      VARCHAR(255) NOT NULL,
  `activo`      TINYINT(1)   NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `eventoinicio` (
  `id`          INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(255) NOT NULL,
  `imagen`      VARCHAR(255) NOT NULL,
  `activo`      TINYINT(1)   NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `promocion` (
  `id`          INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(255) NOT NULL,
  `imagen`      VARCHAR(255) NOT NULL,
  `activo`      TINYINT(1)   NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------------------
-- Tablas de usuarios para administracion.
-- El codigo original no tiene un login mediante base de datos, sino que
-- lo toma de un array en admin/config/access.php, por lo que se cambia
-- la fuente de datos del inicio de sesion
-- ---------------------------------------------------------------------
CREATE TABLE `usuario` (
  `id`          INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `password`      VARCHAR(255) NOT NULL,
  `correo`      VARCHAR(255) NOT NULL,
  `activo`      TINYINT(1)   NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- =====================================================================
-- Resumen de tablas
-- =====================================================================
-- deporte       -> catalogo de deportes (padre de categoria y evento)
-- categoria     -> ligas/categorias, hijas de deporte
-- evento        -> eventos del calendario, hijas de deporte y categoria
-- inicio        -> banners del carrusel principal del home
-- eventoinicio  -> banners del carrusel de "eventos" del home
-- promocion     -> banners del carrusel de "promociones" del home
-- usuario       -> encargados de gestionar el sitio
-- =====================================================================
