<?php
require_once "../database/DB.php";
class Collection{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM collection');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
}

?>