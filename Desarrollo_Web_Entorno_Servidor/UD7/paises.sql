-- Creamos la base de datos
CREATE DATABASE paises;
-- Seleccionamos la base de datos para crear las tablas y añadir contenido
USE paises;
-- Creamos la tabla en la base de datos seleccionada
CREATE TABLE pais( 
                   id INT auto_increment PRIMARY KEY,
                   nombre VARCHAR ( 255 ) NOT NULL,
                   continente VARCHAR ( 255 ) NOT NULL );
-- Añadimos datos a la tabla creada para su uso de ejemplo en el trabajo
INSERT INTO pais(id, nombre, continente)
VALUES ( NULL, 'España', 'Europa' ),
       ( NULL, 'Inglaterra', 'Europa' ),
       ( NULL, 'Italia', 'Europa' ),
       ( NULL, 'Francia', 'Europa' ),
       ( NULL, 'Alemania', 'Europa' ),
       ( NULL, 'Inglaterra', 'Europa' ),
       ( NULL, 'Argentina', 'America' ),
       ( NULL, 'Uruguay', 'America' ),
       ( NULL, 'Cuba', 'America' ),
       ( NULL, 'Estados Unidos', 'America' ),
       ( NULL, 'Canada', 'America' ),
       ( NULL, 'Brazil', 'America' ),
       ( NULL, 'Rusia', 'Asia' ),
       ( NULL, 'China', 'Asia' ),
       ( NULL, 'Korea del sur', 'Asia' ),
       ( NULL, 'India', 'Asia' ),
       ( NULL, 'Filipinas', 'Asia' ),
       ( NULL, 'Nigeria', 'África' ),
       ( NULL, 'Tanzania', 'África' ),
       ( NULL, 'Kenia', 'África' ),
       ( NULL, 'Ghana', 'África' ),
       ( NULL, 'Australia', 'Oceanía' ),
       ( NULL, 'Samoa', 'Oceanía' ),
       ( NULL, 'Tonga', 'Oceanía' ),
       ( NULL, 'Fiyi', 'Oceanía' );