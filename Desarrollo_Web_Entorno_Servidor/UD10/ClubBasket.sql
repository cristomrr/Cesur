CREATE DATABASE ClubBasket;

USE ClubBasket;

CREATE TABLE IF NOT EXISTS Jugador
(
    id            INT AUTO_INCREMENT,
    nombreJugador VARCHAR(255),
    posicion      VARCHAR(255),
    numero        INT,
    edad          INT,
    PRIMARY KEY (id)
) ENGINE = innodb;

INSERT INTO Jugador (id, nombreJugador, posicion, numero, edad)
VALUES (NULL, 'Antonio Perez', 1, 12, 42),
       (NULL, 'Pablo Manio', 2, 16, 37),
       (NULL, 'Samu Valentin', 3, 8, 29),
       (NULL, 'Cristo Manuel', 4, 5, 43),
       (NULL, 'Valentin Rossi', 5, 2, 34),
       (NULL, 'Charly Paolo', 6, 15, 38);