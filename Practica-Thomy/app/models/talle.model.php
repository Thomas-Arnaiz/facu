<?php
class TalleModel
{
    private $db;

    public function __construct()
    {
       $this->db = new PDO('mysql:host=localhost;dbname=db_tienda;charset=utf8', 'root', '');
    }

    public function getAllTalles()
    {
        $query = $this->db->prepare('SELECT * FROM talles');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
