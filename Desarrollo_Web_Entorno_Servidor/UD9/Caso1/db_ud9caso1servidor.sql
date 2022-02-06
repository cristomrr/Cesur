CREATE DATABASE ud9caso1servidores;
USE ud9caso1servidores;
CREATE TABLE IF NOT EXISTS `articulo` ( `id` INT unsigned NOT NULL auto_increment,
                                        `nombre` VARCHAR ( 255 ),
                                        `descripcion` VARCHAR ( 255 ),
                                        `precio` VARCHAR ( 255 ),
                                        `img` VARCHAR ( 255 ),
                                        PRIMARY KEY `pk_id` ( `id` ) ) engine = innodb;
INSERT INTO `articulo` ( `id`, `nombre`, `descripcion`, `precio`, `img` )
VALUES ( 1,
         'Intel i7 1000FXG',
         'Equipo de alto rendimiento para juegos',
         '950.00',
         './images/pc.png' ),
       ( 2,
         'Asus Cergame',
         'Portátil de alta gama para diseño gráfico',
         '1280.90',
         './images/laptop.png' ),
       ( 3,
         'imac pro 8k',
         'Último modelo Apple de alta gama',
         '2150.90',
         './images/imac.png' ),
       ( 4,
         'ZX Spectrum 4k',
         'Ordenador especial para jugones',
         '760.90',
         './images/zxspectrum.png' );