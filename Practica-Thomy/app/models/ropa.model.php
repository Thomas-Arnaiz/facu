<?php
class RopaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=tienda;charset=utf8', 'root', '');
    }

    public function getAllRopa()
    {
        $query = $this->db->prepare('SELECT * FROM ropa');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getRopa($id)
    {
        $query = $this->db->prepare('SELECT * FROM ropa WHERE ropa_id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function deleteRopa($id)
    {
        $query = $this->db->prepare('DELETE FROM ropa WHERE ropa_id = ?');
        $query->execute([$id]);

        if ($this->getRopa($id)) {
            return false; // No se pudo eliminar
        } else {
            return true; // Eliminación exitosa
        }
    }
}
