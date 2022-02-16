<?php
require_once './model/db.php';

class ClubBasquet extends db
{
    private $db;

    public function __construct()
    {
        $this->db = $this->getConexion();
    }

    public function create($name, $position, $num, $age): bool
    {
        $stm = $this->db->prepare("INSERT INTO jugador VALUES ('null', $name, $position, $num, $age)");
        $stm->bindParam('name', $name);
        $stm->bindParam('position', $position);
        $stm->bindParam('num', $num, PDO::PARAM_INT);
        $stm->bindParam('age', $age, PDO::PARAM_INT);
        return $stm->execute();
    }

    public function read()
    {
        $stm = $this->db->prepare('SELECT * FROM jugador');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($data, $row, $id): bool
    {
        $stm = $this->db->prepare("UPDATE jugador SET $row = $data WHERE id = $id");
        $stm->bindParam('id', $id, PDO::PARAM_INT);
        $stm->bindParam('row', $row);
        $stm->bindParam('data', $data);
        return $stm->execute();
    }

    public function delete($id): bool
    {
        //        $id = intval($id);
        $stm = $this->db->prepare("DELETE FROM jugador WHERE id = $id");
        $stm->bindParam('id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }

}
