<?php
require_once 'config.php';

/**
 * Clase encargada de la manipulación de los datos de la base de datos, tiene el sistema CRUD
 */
class Modelo
{
    private $db;
    // consultas preparadas:
    private $insertarPais;
    private $consultarPaises;
    private $borrarPais;
    private $actualizaPais;

    /**
     * Constructor del objeto.
     */
    public function __construct()
    {
    }

    /**
     * Establece la conexión con la base de datos MariaDB con la codificación UTF8
     * @return bool Devuelve true/false dependiendo si se completo la operación correctamente
     */
    public function setConexionMariaDB(): void
    {
        $pdo_opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $this->db = new PDO('mysql:host=' . HOST . PORT . ';dbname=' . DB, USER, PASSWD, $pdo_opciones);
        $this->db->query('SET NAMES "utf8"');
        self::setConsultasPreparadas();
    }

    /**
     * Inicializa consultas preparadas para mejorar la seguridad y velocidad a la hora de realizar las consultas a la base de datos
     */
    private function setConsultasPreparadas(): void
    {
        $this->insertarPais = $this->db->prepare('INSERT INTO paises.pais(id, nombre, continente) VALUES(NULL, :nombre, :continente)');
        $this->consultarPaises = $this->db->prepare('SELECT id, nombre, continente FROM paises.pais');
        $this->borrarPais = $this->db->prepare('DELETE FROM paises.pais WHERE id = :id');
        $this->actualizaPais = $this->db->prepare('UPDATE paises.pais SET :columna = :valor WHERE id = :id');
    }

    /**
     * Devuelve todos los paises de la base de datos
     * @return array Información sobre los paises almacenados en la base de datos de forma: [i][id, nombre, continente]
     */
    public function getPaises(): array
    {
        $this->consultarPaises->execute();
        $respuesta[] = $this->consultarPaises->fetchAll();
        return $respuesta;
    }

    /**
     * Inserta un país en la base de datos con la información dada como parámetro
     * @param $nombre string Nombre del país a intruducir
     * @param $continente string Nombre del continente al que pertenece el país introducido
     * @return bool Devuelve true/false dependiendo si se completo la operación correctamente
     */
    public function setInsertarPais($nombre = '', $continente = ''): bool
    {
        try {
            if (strlen($nombre) < 3 || strlen($continente) < 3)
                throw new PDOException('El nombre y continente del país debe ser 3 o más carácteres');
            $this->db->beginTransaction();
            $this->insertarPais->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $this->insertarPais->bindParam(':continente', $continente, PDO::PARAM_STR);
            $this->insertarPais->execute();
            return $this->db->commit();
        } catch (PDOException $e) {
            $this->db->rollBack();
            return false;
        }
    }

    /**
     *  Elimina un pais de la base de datos
     * @param $id id de la fila a eliminar
     * @return bool Devuelve true/false dependiendo si se completo la operación correctamente
     */
    public function setBorrarPais($id): bool
    {
        $this->db->beginTransaction();
        $this->borrarPais->bindParam(':id', $id, PDO::PARAM_INT);
        $this->borrarPais->execute();
        return $this->db->commit();
    }

    /**
     *  Actualiza los datos de un pais de la base de datos
     * @param $id id de la fila a modificar
     * @param $columna columna del valor a modificar
     * @param $nuevoValor valor nuevo que se le dará a esa columna que cumpla la condición de la query
     * @return bool Devuelve true/false dependiendo si se completo la operación correctamente
     */
    public function setActualizaPais($id, $columna, $nuevoValor): bool
    {
        $this->db->beginTransaction();
        $this->actualizaPais->bindParam(':id', $id, PDO::PARAM_INT);
        $this->actualizaPais->bindParam(':columna', $columna, PDO::PARAM_STR);
        $this->actualizaPais->bindParam(':valor', $nuevoValor, PDO::PARAM_STR);
        $this->actualizaPais->execute();
        return $this->db->commit();
    }

    /**
     * Desconectamos de la base de datos cuando se destruya el objeto de esta clase
     */
    public function __destruct()
    {
        $this->db = null;
    }
}
